<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = [
            '0' => [
                'id' => 1,
                'name' => 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],

            '1' => [
                'id' => 2,
                'name' => 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],

            '2' => [
                'id' => 3,
                'name' => 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];
        return view('modules.customer.index', compact('customers'));
    }

    public function create()
    {
        return view('modules.customer.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
//        return view('modules.customer.index');
    }

    public function show($id)
    {
        return view('modules.customer.show' . $id);
    }

    public function edit($id)
    {
        return view('modules.customer.edit' . $id);
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
//        return view('modules.customer.update'.$id);
    }

    public function destroy($id)
    {
        echo $id;
//        return view('modules.customer.delete'.$id);
    }
}
