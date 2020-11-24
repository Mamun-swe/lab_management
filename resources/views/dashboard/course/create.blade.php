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
                    <form action="{{ route('course.store') }}" method="post">
                        @csrf
                        <!-- title -->
                        <div class="form-group mb-3">
                            @if($errors->has('title'))
                                <small class="text-danger">{{ $errors->first('title') }}</small>
                            @else
                                <small class="text-muted">title</small>
                            @endif
                            <input type="text" class="form-control form-control-lg rounded-0 shadow-none" name="title" placeholder="Enter title">
                        </div>

                        <!-- credit -->
                         <div class="form-group mb-3">
                            @if($errors->has('credit'))
                                <small class="text-danger">{{ $errors->first('credit') }}</small>
                            @else
                                <small class="text-muted">credit</small>
                            @endif
                            <input type="number" class="form-control form-control-lg rounded-0 shadow-none" name="credit" placeholder="Enter credit">
                        </div>

                        <!-- type -->
                        <div class="form-group mb-3">
                            @if($errors->has('type'))
                                <small class="text-danger">{{ $errors->first('type') }}</small>
                            @else
                                <small class="text-muted">type</small>
                            @endif

                            <select name="type" class="form-control form-control-lg rounded-0 shadow-none" >
                                <option value="lab">Lab</option>
                                <option value="theory">Theory</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow-none float-right text-white px-5">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
