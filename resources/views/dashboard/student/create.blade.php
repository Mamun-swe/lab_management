@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12 col-lg-8 m-auto">
            <div class="card bg-white my-2">
                <div class="card-body">
                    @if(Session::has('success'))
                        <p class="text-success mb-0">{{Session::get('success')}}</p>
                    @endif
                    <form action="{{ route('student.store') }}" method="post">
                        @csrf
                        <!-- name -->
                        <div class="form-group mb-3">
                            @if($errors->has('name'))
                                <small class="text-danger">{{ $errors->first('name') }}</small>
                            @else
                                <small class="text-muted">name</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="name" placeholder="Enter name">
                        </div>

                        <!-- email -->
                        <div class="form-group mb-3">
                            @if($errors->has('email'))
                                <small class="text-danger">{{ $errors->first('email') }}</small>
                            @else
                                <small class="text-muted">Email</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="email" placeholder="Enter email">
                        </div>

                        <!-- role -->
                        <div class="form-group mb-3">
                            @if($errors->has('role'))
                                <small class="text-danger">{{ $errors->first('role') }}</small>
                            @else
                                <small class="text-muted">role</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="role" value="student" disabled>
                        </div>

                        <!-- password -->
                        <div class="form-group mb-3">
                            @if($errors->has('password'))
                                <small class="text-danger">{{ $errors->first('password') }}</small>
                            @else
                                <small class="text-muted">password</small>
                            @endif
                            <input type="password" class="form-control form-control-lg rounded-0 shadow-none" name="password" placeholder="Enter password">
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow-none float-right text-white px-5">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
