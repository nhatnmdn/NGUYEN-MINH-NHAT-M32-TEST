@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Create User</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.create') }}" method="post">
            @csrf
            <div class=" form-control form-group ">
                <div class="col-xs-3 col-md-3">
                    <label class="">Email</label>
                    <input type="email" class="form-control " name="email" placeholder="Email address"
                           value="{{old('email')}}">
                    <label for="" class="mt-2">Role: </label>
                </div>
                <div class="col-xs-3 col-md-3">
                    <select name="role_id" class="form-control" id="">
                        <option value="">Select role</option>
                        @foreach($roles as $role)
                            <option value="{{$role->id}}">{{$role->name}}</option>
                        @endforeach
                    </select>
                    <label class="">Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Enter Password">
                    <label class="">Confirm Password</label>
                    <input type="password" class="form-control" name="password-confirm" placeholder="Confirm Password">
                    <label class="">Birthday</label>
                    <input type="date" class="form-control" name="birthday">

                </div>
            </div>
            <button type="submit" class="btn btn-success my-2 mx-3">Create</button>
            <a href="{{route('user.list')}}" class="btn btn-success my-2 mx-5">Back</a>
        </form>
    </div>
@endsection
