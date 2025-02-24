<?php

namespace App\Services;

use App\Reponsitories\UserReponsitory;
use App\Services\Interfaces\UserServiceInterface;
use App\Reponsitories\Interfaces\UserReponsitoryInterface as UserRepository;
use App\Models\User;


/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;
       public function __construct(UserReponsitory $userreponsitory)
       {
        $this->userRepository=$userreponsitory;
       }

       public function paginate()
       {
        $user =$this->userRepository->getallPagination();
        return $user;
       }
}
