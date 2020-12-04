<?php
namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Services\UserService;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        $roles = Role::all();
        $users = $this->userService->getPagination();
        return view('admin.users.list', compact('users', 'roles'));
    }

    function create()
    {
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    function store(UserCreateRequest $request)
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
    public function edit($id)
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
            ->paginate(5);
        return view('admin.users.list', compact('users', 'search'));
    }

    public function destroy($id)
    {
        $user_role = DB::table('role_user')->where('user_id',$id)->get();
        if(count($user_role)) {
            $message = "Can't Delete This User !";
            return redirect()->route('users.index')->with('error',$message);
        } else {
            User::where('id',$id)->delete();
            $message = "Delete This User !";
            return redirect()->route('users.index')->with('success',$message);
        }
    }

}
