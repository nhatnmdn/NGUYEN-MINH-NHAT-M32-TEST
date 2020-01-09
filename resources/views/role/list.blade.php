@extends('layouts.master')

@section('content')
<div class="container">
    <h1>Role List</h1>

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

    <a href="" class="btn btn-success">Create Role</a>

    <div class="form-group">
        <form action="" method="get">
            <label>Post Name</label>
            <input type="text" class="form-control" name="search" value="">
            <input type="hidden" name="searchKey" value="post_title">
            <input type="submit" value="Search" class="btn btn-success">
        </form>
    </div>

    <table class="table table-bordered table-striped">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th colspan="2" class="text-center">Action</th>
        </tr>
        @foreach($roles as $key => $role)
            <tr>
                <td>{{++$key}}</td>
                <td>{{$role->name}}</td>
                <td><a href="" class="btn btn-primary">Edit</a></td>
                <td><a href="" class="btn btn-primary">Delete</a></td>
            </tr>
        @endforeach
    </table>

    <div class="text-center">
    </div>
</div>
@endsection
