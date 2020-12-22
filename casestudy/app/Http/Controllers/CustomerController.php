<?php

namespace App\Http\Controllers;


use App\Http\Services\CustomerService;
use App\Models\Customer;


class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function index() {
        $customers = Customer::all();
        return view('admin.customer.customer', compact('customers'));
    }
}

