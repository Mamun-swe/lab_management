@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-12">
        <div class="card bg-white my-2">
            <div class="card-body">
                <div class="d-flex">
                    <div><h5>Courses</h5></div>
                    <div class="ml-auto">
                        <a href="{{route('course.create')}}" type="button" class="btn btn-info">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Title</th>
                                <th scope="col">Credit</th>
                                <th scope="col">Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($courses as $key => $course)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$course->title}}</td>
                                <td>{{$course->credit}}</td>
                                <td>{{$course->type}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection
