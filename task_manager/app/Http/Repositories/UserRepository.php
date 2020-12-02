<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Support\Facades\DB;

class UserRepository
{
    protected $userModel;

    public function __construct(User $user)
    {
        $this->userModel = $user;
    }

    function save($user)
    {
        $user->save();
    }

    function getAll()
    {
        return $this->userModel->all();
    }

    function getUserById($id)
    {
        return $this->userModel->findOrFail($id);
    }

//    function getBySearch($search)
//    {
//        return $this->userModel->findOrFail($search);
//    }

}
