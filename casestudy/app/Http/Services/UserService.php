<?php

namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Models\StatusConstant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserService implements ServiceInterface {

    protected $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->userRepository->getAll();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->userRepository->findById($id);
    }

    function add($request, $obj = null)
    {
        $obj = new User();
        $obj->id = $request->id;
        $obj->name = $request->name;
        $obj->user_name = $request->user_name;
        $obj->user_password = Hash::make($request->user_password);
        $obj->status = 1;
        $obj->user_email = $request->user_email;
        $obj->user_phone = $request->user_phone;
        $this->uploadFile($obj, $request);
        $obj->role = $request->role;
        $this->userRepository->save($obj);
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
        $obj->fillable($request->all());
        if ($request->status == 'true') {
            $obj->status = StatusConstant::ACTIVATE;
        } else {
            $obj->status = StatusConstant::DEACTIVATE;
        }
        $this->userRepository->save($obj);
    }

    function uploadFile($obj, $request)
    {
        if ($request->hasFile('user_image')) {
            $img = $request->user_image;
            $path = $img->store('public/avatars');
            $obj->user_image = $path;
        }
    }
}
