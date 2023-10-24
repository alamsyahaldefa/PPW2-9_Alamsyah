@extends('porto.main')

@section('content')

<div class="justify-content-center row mt-5">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header justify-content-center row">Login</div>
            <div class="card-body">
                <form action="{{ route('authenticate') }}" method="post">
                    @csrf
                    <div class="form-floating mb-3 mx-5 row">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="email" value="{{ old('email') }}">
                        <label for="email">Email</label>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="form-floating mb-3 mx-5 row">
                        <input type="password" class="form-control @error('email') is-invalid @enderror" id="password" name="password" placeholder="password"">
                        <label for="password">Password</label>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="justify-content-center mb-3">
                        <input type="submit" class="col-md-3 offset-md-5 btn btn-primary" value="Login">
                    </div>
                </form>
            </div>
        </div>
    </div>    
</div>
    
@endsection