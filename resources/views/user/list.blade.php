@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>User List</h1>

        {{--show message success--}}
        @if(session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
        @endif

        {{--show message fail--}}
        @if(session()->has('error'))
            <div class="alert alert-danger">
                {{ session()->get('error') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <a href="{{route('user.create-form')}}" class="btn btn-success">Create User</a>

        <div class="float-left">
            <a href="{{route('role.list')}}" class="btn btn-info float-right">
                <i class="fa fa-plus"></i> Role list
            </a>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Email</th>
                <th>Birthday</th>
                <th>Role</th>
                <th colspan="2" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $key => $user)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->birthday}}</td>
                    <td>{{$user->role->name}}</td>
                    <td><a href="{{route('user.edit-form',$user->id)}}" class="btn btn-primary">Edit</a></td>
                    <td><a href="{{route('user.destroy',$user->id)}}" class="btn btn-primary">Delete</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="form-control">
            {{$users->links()}}
        </div>
    </div>
@endsection
