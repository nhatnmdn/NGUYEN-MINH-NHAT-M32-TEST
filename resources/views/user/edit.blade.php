@extends('layouts.master')

@section('content')
    <div class="container">
        <h1>Edit User</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('user.edit', $user->id) }}" method="post">
            @csrf
            @method('put')
            <div class="form-control form-group col-xs-3 col-md-3">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="{{ $user->email }}">
                <label>Birthday</label>
                <input type="date" class="form-control" name="birthday" value="{{ $user->birthday }}">
                <div class="form-group">
                    <button type="submit" class="btn btn-primary my-2">Update</button>
                    <a href="{{route('user.list')}}" class="btn btn-primary my-2 mx-5">Back</a>
                </div>
            </div>

        </form>
    </div>
@endsection
