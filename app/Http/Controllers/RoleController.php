<?php

namespace App\Http\Controllers;

use App\Model\Role;
use App\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{

    public function index()
    {
        //
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show()
    {
        $roles = Role::query()->paginate(10);

        return view('role.list', compact('roles'));
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
    public function listDetailRole($id)
    {
        $users = User::query()->where('role_id',$id)->paginate(10);

        return view('user.list',compact('users'));
    }
}
