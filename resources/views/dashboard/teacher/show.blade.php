@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card bg-white my-2">
                <div class="card-body">
                    @if($teacher)
                        <h5>{{$teacher->name}}</h5>
                        <p>{{$teacher->email}}</p>
              
                        <div class="d-flex">
                            <div><p class="mb-0 mt-3"><b>Assigned courses</b></p></div>
                            @if(Auth::user()->role == 'admin')
                            <div class="ml-auto">
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#courseAssign">
                                Assign course</button>
                            </div>
                            @endif
                        </div>
                        <hr>
                    @endif

                    <br>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Course title</th>
                            <th scope="col">Total Credit</th>
                            <th scope="col">Course Type</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($assignedCourses as $key => $course)
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


    <!-- Modal -->
    <div class="modal fade" id="courseAssign" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('teacher.assign.course')}}" method="post">
                        @csrf
                        <input type="hidden" name="teacher_id" value="{{$teacher->id}}">

                        <!-- Course -->
                        <select name="course" class="form-control shadow-none">
                            @foreach($courses as $course)
                            <option value="{{$course->id}}">{{$course->title}}</option>
                            @endforeach
                        </select>
                        <br>

                        <button type="submit" class="btn btn-info float-right">Assign</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
