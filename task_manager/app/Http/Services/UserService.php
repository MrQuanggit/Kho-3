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

    function create($request)
    {
        $user = new User();
        $user->id = $request->id;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $user->role = 1;
        $user->mail = $request->mail;
        $user->phone = $request->phone;
        $user->images = $this->uploadFile($request);
        $this->userRepository->save($user, $request->roles);
    }

    function getAll()
    {
        return $this->userRepository->getAll();
    }

    function uploadFile($request)
    {
        $path = null;
        if ($request->hasFile('image')) {
            $img = $request->image;
            $path = $img->store('public/avatars');
        }
        return $path;
    }

    function getPagination()
    {
        return $this->userRepository->getPagination();
    }

    function update($request, $id)
    {
        $user = $this->userRepository->getUserById($id);
        $user->username = $request->username;
        $user->mail = $request->mail;
        $user->phone = $request->phone;
        $user->images = $this->updateFile($request, $id);
        $this->userRepository->save($user);
    }

    public function updateFile($request, $id)
    {
        $user = $this->userRepository->getUserById($id);
        if ($request->hasFile('image')) {
            $img = $request->image;
            $path = $img->store('public/avatars');
            return $path;
        } else {
            return $user->images;
        }
    }
}
