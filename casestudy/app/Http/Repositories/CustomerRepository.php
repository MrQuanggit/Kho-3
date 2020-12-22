<?php

namespace App\Http\Repositories;

use App\Models\Customer;
use App\Models\User;

class CustomerRepository implements RepositoryInterface {

    protected $customerModel;

    public function __construct(Customer $customerModel)
    {
        $this->customerModel = $customerModel;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->customerModel->get();
    }

    public function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->customerModel->findOrFail($id);
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
