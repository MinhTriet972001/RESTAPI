<?php

namespace App\Http\Controllers\BE;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;
class UserController extends Controller
{

            protected $usersService;
    public function __construct(UserService $usersService)
    {
          $this->usersService = $usersService;
    }

    public function index()
    {
        $users = $this->usersService->paginate();
       // $users =User::paginate(10);
        $config=$this->config();

        $template='be.user.index';
        return view('be.dashboard.layout',compact('template','config','users'));
    }

    private function config()
{
 return [
    'js' =>[
        'backend/js/plugins/switchery/switchery.js'
    ],
    'css' =>[
        'backend/css/plugins/switchery/switchery.css'
    ],
];

}
}