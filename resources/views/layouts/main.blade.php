<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap style -->
    <link rel="stylesheet" href="/bootstrap-5.3.0-alpha3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="icon" type="image/png" href="/assets/images/icons/ic_web.png">
    <title>Zii</title>


</head>
<body>
   
    <!-- header -->
    <nav class="navbar navbar-light box-navbar">
        <img id="img-web" src="/assets/images/icons/ic_web.png" alt="">
        <div class="container-fluid">
            <div class="box-username">
                <p id="txt-username">{{Auth::user()->name??'Test User'}}</p>
                <div class="sub-menu">
                    <div class="card" style="background-color: #5612D6;">
                        <div class="card-body p-0">
                            <form action="{{route('logout')}}" method="POST" style="display: inline;">
                                @csrf
                                <button class="btn text-white fs-5 text-bold w-100  d-flex justify-content-between align-items-center" onclick="location.href='{{route('login')}}'"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log Out</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="box-dropmn">
                <img id="ic-dropmn" src="/assets/images/icons/ic_drop_mn.png" alt="">
            </div>
            <img class="box-profile" id="img-profile" src="/assets/images/img/user.png" alt="">
        </div>
    </nav>
    <!-- end header -->
    <!-- start sidebar -->
    <div class="box-sidebar">
            @php
                $route_name = Request::route()->getName();
            @endphp
            <ul>
                <li ><a href="{{url('/')}}" class=" {{Request::path() == '/' ? 'item-active' : ''}} ">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a></li>
                <hr>
                <li><a href="{{url('/projects')}}" class=" {{Str::startsWith($route_name, 'projects')  ? 'item-active' : ''}} " >
                    <i class="fa-solid fa-layer-group"></i>
                    <span>Projects</span>
                </a></li>
                <li><a href="{{url('/tasks')}}" class=" {{Str::startsWith($route_name, 'tasks')  ? 'item-active' : ''}} " >
                    <i class="fa-solid fa-bars-progress"></i>
                    <span>Tasks</span>
                </a></li>
                <li><a href="{{url('/payments')}}" class=" {{Str::startsWith($route_name, 'payments')  ? 'item-active' : ''}} ">
                    <i class="fa-solid fa-credit-card"></i>
                    <span>Payments</span>
                </a></li>

                <li><a href="{{url('/overtimes')}}" class=" {{Str::startsWith($route_name, 'overtimes')  ?  'item-active' : ''}} ">
                    <i class="fa-solid fa-business-time"></i>
                    <span>Overtime</span>
                </a></li>
                <li><a href="{{url('/events')}}" class=" {{Str::startsWith($route_name, 'events')  ? 'item-active' : ''}} ">
                    <i class="fa-solid fa-calendar"></i>
                    <span>Events</span>
                </a></li>
                <hr>
                <li><a href="{{url('/employees')}}" class=" {{Str::startsWith($route_name, 'employees')  ? 'item-active' : ''}} " >
                    <i class="fa-solid fa-people-arrows"></i>
                    <span>Employees</span>
                </a></li>
                <li><a href="{{url('/takeleaves')}}" class=" {{Str::startsWith($route_name, 'takeleaves')  ? 'item-active' : ''}} " >
                    <i class="fa-solid fa-person-walking-arrow-right"></i>
                    <span>Take Leaves</span>
                </a></li>
                <li><a href="{{url('/pendingleaves')}}" class=" {{Str::startsWith($route_name, 'pendingleaves')  ? 'item-active' : ''}} " >
                    <i class="fa-solid fa-arrow-trend-down"></i>
                    <span>Pending Leaves</span>
                </a></li>
                <li><a href="{{url('/attendants')}}" class=" {{Str::startsWith($route_name, 'attendants')  ?  'item-active' : ''}} " >
                    <i class="fa-solid fa-clipboard-user"></i>
                    <span>Attendants</span>
                </a></li>
            </ul>
    </div>
    <!-- end sidebar -->

    <!-- start content -->
    <div class="container-fluid box-body pt-5">
        @yield('content')
    </div>
    <!-- end content -->
    <!-- javascript and jquery for bootstrap -->
    <script src="/bootstrap-5.3.0-alpha3-dist/js/bootstrap.js"></script>
    <script src="/assets/jquery.js"></script>
    <script src="/assets/js/jaction.js"></script>
    @yield("extraScript")
</body>
</html>