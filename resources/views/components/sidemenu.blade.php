<div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ url('/') }}" class="nav-link">Home</a>
            </li>

            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </li>
            </ul>
        </nav>

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <div class="sidebar">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                <img src="{{url('')}}/static/user-icon.jpg" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                <a href="#" class="d-block text-capitalize">{{Auth::User()->name}}</a>
                </div>
            </div>


            <nav class="mt-2">
            
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                @if(Auth::user()->role == 'admin')
                <li class="nav-item has-treeview menu-open">
                    <a href="{{route('dashboard')}}" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>Admin</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('teacher')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Teacher</span></p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('student')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Students</span></p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('section')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Section</span></p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('course')}}" class="nav-link">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Courses</span></p>
                    </a>
                </li>
                @elseif(Auth::user()->role == 'teacher')
                <li class="nav-item">
                    <a href="{{route('teacher.show', Auth::user()->id)}}" class="nav-link active">
                        <i class="nav-icon fas fa-copy"></i>
                        <p>Assigned Courses</span></p>
                    </a>
                </li>
                @endif
                </ul>
             
            </nav>
            </div>
        </aside>
