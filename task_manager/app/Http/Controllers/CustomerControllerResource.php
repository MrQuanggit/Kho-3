<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerControllerResource extends Controller
{
    public function index()
    {
        return view('modules.customer.index');
    }

    public function create()
    {
        return view('modules.customer.create');
    }

    public function store(Request $request)
    {
        dd($request->all());
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
//        dd($request->all());
        return view('modules.customer.update' . $id);
    }

    public function destroy($id)
    {
        echo $id;
//        return view('modules.customer.delete'.$id);
    }
}
