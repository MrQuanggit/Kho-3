<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffRequest;
use App\Models\GroupStaff;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    function index() {
        $staff = Staff::all();
        $group_staff = GroupStaff::all();
        return view('staff.list',compact('staff','group_staff'));
    }

    function create() {
        $group_staffs = GroupStaff::all();
        return view('staff.add', compact('group_staffs'));
    }

    function store(StaffRequest $request) {
        $staff = new Staff();
        $staff->id = $request->id;
        $staff->name = $request->name;
        $staff->date = $request->date;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->cmnd = $request->cmnd;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->group_id = $request->group_id;
        $staff->save();
        return redirect()->route('staff.index');
    }

    function edit($id) {
        $staff = Staff::where('id', $id)->get();
        $group_staffs = GroupStaff::all();
        return view('staff.edit', compact('staff', 'group_staffs'));
    }

    function update(StaffRequest $request, $id) {
        $staff = Staff::findOrFail($id);
        $staff->name = $request->name;
        $staff->date = $request->date;
        $staff->gender = $request->gender;
        $staff->phone = $request->phone;
        $staff->cmnd = $request->cmnd;
        $staff->email = $request->email;
        $staff->address = $request->address;
        $staff->group_id = $request->group_staff;
        $staff->save();
        return redirect()->route('staff.index');
    }

    function destroy($id) {
        Staff::where('id',$id)->delete();
        return redirect()->route('staff.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $staff = Staff::where('name','like', '%'.$search.'%')
            ->orWhere('id','like', '%'.$search.'%')
            ->get();
        return view('staff.list', compact('staff', 'search'));
    }
}
