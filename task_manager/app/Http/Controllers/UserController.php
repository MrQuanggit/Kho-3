<?php


namespace App\Http\Controllers;

use App\Http\Services\UserService;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    function index()
    {
        $users = $this->userService->getAll();
        return view('admin.users.list', compact('users'));
    }

    function create()
    {
        return view('admin.users.create');
    }

    function store(Request $request)
    {
        $this->userService->create($request);
        Session::flash('success', 'Tạo mới khách hàng thành công');
        return redirect()->route('users.index');
    }
    public function show($id)
    {
        $users = User::where('id','=',$id)->get();
        return view('admin.users.show', compact('users'));
    }
    public function edit($id, Request $request)
    {
        $users = User::where('id','=',$id)->get();
        return view('admin.users.edit', compact('users'));
    }
    public function update(Request $request, $id)
    {
        $this->userService->update($request, $id);
        Session::flash('success', 'Cập nhật khách hàng thành công');
        return redirect()->route('users.index');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        $users = User::where('username','like', '%'.$search.'%')
            ->orWhere('phone','like', '%'.$search.'%')
            ->orWhere('mail','like', '%'.$search.'%')
            ->get();
        return view('admin.users.list', compact('users', 'search'));
    }

    public function destroy(Request $request)
    {
        User::find($request->id)->delete();
        Session::flash('success', 'Xóa khách hàng thành công');
        return redirect()->route('users.index');
    }

}
