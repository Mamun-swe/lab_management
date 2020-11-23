@extends('layouts.app')
@section('content')

<div class="auth">
    <div class="flex-center flex-column">
        <div class="card">
            <div class="card-header p-4 text-center">
                <h4>Login</h4>
                @if(Session::has('error'))
                    <p class="text-danger">{{Session::get('error')}}</p>
                @endif
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group mb-3">
                        <p class="mb-0">Email</p>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <p class="mb-0">Password</p>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-block btn-info">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
