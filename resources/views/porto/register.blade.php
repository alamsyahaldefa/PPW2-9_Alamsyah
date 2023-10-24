@extends('porto.main')

@section('content')
<div class="row mt-5">
<div class="register">
        <div class="form-register">
        <form action="{{ route('store') }}" method="post">
            @csrf
            <div class="form-register-child"></div>
            <div class="register2">
                <div class="register-child"></div>
                <div class="register3">Register</div>
            </div>
            <div class="form-floating username mb-3 row">
                <div class="username-child"></div>
                <input type="text" class="form-control username1 @error('name') is-invalid @enderror" id="name" placeholder="name" value="{{ old('name') }}">
                <label for="name">Name</label>
                @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-floating email mb-3 row">
                <div class="username-child"></div>
                <input type="email" class="form-control username1 @error('email') is-invalid @enderror" id="email" placeholder="email" value="{{ old('email') }}">
                <label for="email">Email</label>
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-floating password mb-3 row">
                <div class="username-child"></div>
                <input type="password" class="form-control username1 @error('password') is-invalid @enderror" id="password" placeholder="password">
                <label for="password">Password</label>
                @if ($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-floating mb-3 row confirm-password">
                <input type="password" class="form-control username1" id="password_confirmation" placeholder="password_confirmation">
                <label for="password_confirmation">Confirm Password</label>
            </div>
            <div class="button-register mb-3 row">
                <input type="submit" class="col-md-3 offset-md-5 btn btn-primary register1" value="Register">
            </div>
        </form>
        </div>
</div>
</div>
@endsection