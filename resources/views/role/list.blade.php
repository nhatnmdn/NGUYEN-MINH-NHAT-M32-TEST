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

    <a href="{{route('user.list')}}" class="btn btn-primary">User List</a>



    <table class="table table-bordered table-striped">
        <tr>
            <th class="text-center">Role ID</th>
            <th class="text-center">Role Name</th>
        </tr>
        @foreach($roles as $key => $role)
            <tr>
                <td class="text-center"><a href="{{route('role.list-detail', $role->id)}}">{{$role->id}}</a></td>
                <td class="text-center"><a href="{{route('role.list-detail', $role->id)}}">{{$role->name}}</a></td>
            </tr>
        @endforeach
    </table>

    <div class="text-center">
    </div>
</div>
@endsection
