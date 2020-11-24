@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-12">
        <div class="card bg-white my-2">
            <div class="card-body">
                <div class="d-flex">
                    <div><h5>Students</h5></div>
                    <div class="ml-auto">
                        <a href="{{route('student.create')}}" type="button" class="btn btn-info">Create</a>
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
                                <th scope="col">Section</th>
                                <th scope="col">Course</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($students as $key => $student)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$student->name}}</td>
                                <td>{{$student->email}}</td>
                                <td></td>
                                <td></td>
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
