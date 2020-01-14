<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\EditUserRequest;
use App\Model\Role;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        //
    }

    public function create()
    {
        $roles = Role::all();
        return view('user.create', compact('roles'));
    }


    public function store(CreateUserRequest $request)
    {
        $params = $request->except(['_token','password-confirm']);

        User::create($params);

        return redirect(route('user.list'))->with('success','Create successful');
    }


    public function show()
    {
        $users = User::query()->with('role')->paginate(10);

        return view('user.list', compact('users'));
    }


    public function edit($id)
    {
        $user = User::find($id);

        return view('user.edit',compact('user'));
    }


    public function update(EditUserRequest $request, $id)
    {
        $params = $request->except('_token');

        User::find($id)->update($params);

        return redirect(route('user.list'))->with('success','Update successful');
    }


    public function destroy($id)
    {
        User::find($id)->delete();

        return redirect(route('user.list'))->with('success','Delete successful');
    }
}
