@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card bg-white my-2">
                <div class="card-body">

                    <h1>Welcome you are student</h1>
                    <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection