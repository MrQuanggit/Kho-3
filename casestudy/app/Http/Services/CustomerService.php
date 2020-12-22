<?php

namespace App\Http\Services;

use App\Http\Repositories\CustomerRepository;
use App\Models\StatusConstant;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerService implements ServiceInterface {

    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->customerRepository->getAll();
    }

    function findById($id)
    {
        // TODO: Implement findById() method.
        return $this->customerRepository->findById($id);
    }

    function delete($obj)
    {
        // TODO: Implement delete() method.
    }

    function update($request, $obj = null)
    {
        // TODO: Implement update() method.
    }

    function add($request, $obj = null)
    {
        // TODO: Implement add() method.
    }
}

