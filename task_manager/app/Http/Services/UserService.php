<?php

namespace App\Http\Services;


use App\Http\Repositories\UserRepository;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function create($request) {
        $user = new User();
        $user->id = $request->id;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = 1;
        $user->mail = $request->mail;
        $user->phone = $request->phone;
        $this->userRepository->save($user);
    }

    function getAll() {
        return $this->userRepository->getAll();
    }

    function update($request, $id) {
        $user = $this->userRepository->getUserById($id);
        $user->username = $request->username;
        $user->mail = $request->mail;
        $user->phone = $request->phone;
        $this->userRepository->save($user);
    }

    function delete($request, $id) {
        $user = $this->userRepository->getUserById($id);
    }

//    function search($request) {
//        $search = $request->search;
//        $user = $this->userRepository->getBySearch($search);
//        $this->userRepository->save($user);
//    }
}
