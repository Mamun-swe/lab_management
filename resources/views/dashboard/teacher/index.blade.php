@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-12">
        <div class="card bg-white my-2">
            <div class="card-body">
                <div class="d-flex">
                    <div><h5>Teachers</h5></div>
                    <div class="ml-auto">
                        <a href="{{route('teacher.create')}}" type="button" class="btn btn-info">Create</a>
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
                            <th scope="col">Name</th>
                            <th scope="col">E-mail</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teachers as $key => $teacher)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$teacher->name}}</td>
                                <td>{{$teacher->email}}</td>
                                <td>
                                    <a href="{{route('teacher.show', $teacher->id)}}" type="button" class="btn btn-sm btn-info">View</a>
                                </td>
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
