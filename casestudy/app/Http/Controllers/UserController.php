<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Services\UserService;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index() {
        $users = User::all();
        return view('admin.users.list', compact('users'));
    }

    public function create() {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $roles = Role::all();
        return view('admin.users.create', compact('roles'));
    }

    public function store(UserCreateRequest $request) {
        $this->userService->add($request);
        $message = 'Successfully Created Users!';
        return redirect()->route('users.index')->with('success',$message);
    }

    public function destroy($id){
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $user = $this->userService->findById($id);
        $user->delete();
        $message = 'Successfully Deleted The User!';
        return redirect()->route('users.index')->with('success',$message);
    }

    public function edit($id) {
        if (!$this->userCan('admin')) {
            abort(403);
        }
        $roles = Role::all();
        $users = $this->userService->findById($id);
        return view('admin.users.edit', compact('users', 'roles'));
    }

    public function update(Request $request, $id) {
        $roles      = Role::all();
        $user       = $this->userService->findById($id);
        $user->fill($request->all());
        $this->userService->uploadFile($user, $request);
        $user->save();
        $message    = 'Successfully Edited Users!';
        return redirect()->route('users.index', compact('roles'))->with('success',$message);
    }
}
