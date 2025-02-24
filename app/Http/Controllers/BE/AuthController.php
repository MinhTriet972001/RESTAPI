<?php
namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return redirect()->route('dashboard.index');
        }
        return view('be.auth.login');
    }

    public function login(AuthRequest $request)
    {
        $credentials = $request->only(['email', 'password']);
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            return redirect()->route('dashboard.index')->with('success', 'Thành Công');
        }
        return redirect()->route('auth.login')->with('error', 'Email hoặc Mật Khẩu không chính xác');
    }

    public function logout(Request $request)
    {
        session()->flush();
        Auth::logout();
        return redirect()->route('auth.login');
    }
}

?>