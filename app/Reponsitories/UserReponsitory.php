<?php
namespace App\Reponsitories;

use App\Models\User;
use App\Reponsitories\Interfaces\UserReponsitoryInterface;
class UserReponsitory implements UserReponsitoryInterface
{
    public function  getallPagination()
       {
        return User::paginate(5);

    }


}
?>