<?php

namespace App\Http\Repositories;

use App\Models\User;

class UserRepository implements RepositoryInterface {

    protected $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->userModel->get();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->userModel->findOrFail($id);
    }

    public function save($obj)
    {
        // TODO: Implement save() method.
        $obj->save();
    }

    public function delete($obj)
    {
        // TODO: Implement delete() method.
        $obj->delete();
    }
}
