<?php

namespace App\Http\Services;

use App\Http\Repositories\UserRepository;
use App\Models\StatusConstant;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

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
        $obj                = new User();
        $obj->name          = $request->name;
        $obj->user_name     = $request->user_name;
        $obj->password      = Hash::make($request->password);
        $obj->status        = 1;
        $obj->user_email    = $request->user_email;
        $obj->user_phone    = $request->user_phone;
        $this->uploadFile($obj, $request);
        $obj->role_id       = $request->role;
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
            $path               = Storage::disk('s3')->put('images',$request->user_image,'public');
            $obj->user_image    = $path;
        }
    }
}
