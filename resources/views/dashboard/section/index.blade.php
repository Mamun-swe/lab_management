@extends('layouts.dashboard')
@section('content')

<div class="container">
    <div class="row">
    <div class="col-12">
        <div class="card bg-white my-2">
            <div class="card-body">
                <div class="d-flex">
                    <div><h5>Section</h5></div>
                    <div class="ml-auto">
                        <a href="{{route('section.create')}}" type="button" class="btn btn-info">Create</a>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sections as $key => $section)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$section->name}}</td>
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
