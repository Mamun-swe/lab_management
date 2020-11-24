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
                    <form action="{{ route('section.store') }}" method="post">
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

                        <button type="submit" class="btn btn-lg btn-primary rounded-0 shadow-none float-right text-white px-5">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
