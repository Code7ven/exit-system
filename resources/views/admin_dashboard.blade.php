<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper">



        @include('body.header')
        @include('body.sidebar')


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Admin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Admin</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-xl-6 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Pending Requests</h6>
                                        <h3 id="requests">10</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('assets/img/icons/dash-icon-01.svg') }}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Request Approved</h6>
                                        <h3>30</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="{{ asset('assets/img/icons/dash-icon-03.svg') }}" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>



                <div class="row">
                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Pending Student</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>MATRIC NO.</th>

                                                <th>Name</th>

                                                <th>Status</th>
                                                <th>Date of Arrival</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($all_applications as $key=>$item)
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>{{$item->matric_no}}</div>
                                                </td>

                                                <td class="text-nowrap">
                                                    <div>{{$item->first_name}}</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <div>{{$item->status}}</div>
                                                </td>

                                                <td class="text-nowrap">
                                                    <div>{{$item->arrival_date}}</div>
                                                </td>


                                                <td>
                                                    <!-- we have to get the current id from the table so we use '$item->id' -->
                                                    <a href="{{ url('chatify', $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" data-bs-toggle=" tooltip" ><i class="fas fa-trash">chat</i></a>
                                                    <a href="{{ route('approve', $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" onclick="return confirm('are you sure?'); data-bs-toggle=" tooltip" title="Approve"><i class="fas fa-trash"></i>APPROVE</a>
                                                    <a href="{{ route('decline',  $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" onclick="return confirm('are you sure?'); data-bs-toggle=" tooltip" title="Decline"><i class="fas fa-trash">DECLINE</i></a>
                                                </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-6 d-flex">

                        <div class="card flex-fill student-space comman-shadow">
                            <div class="card-header d-flex align-items-center">
                                <h5 class="card-title">Approved Student Arrival</h5>
                                <ul class="chart-list-out student-ellips">
                                    <li class="star-menus"><a href="javascript:;"><i class="fas fa-ellipsis-v"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Department</th>
                                                <th class="text-end">Date of Arrival</th>
                                                <th class="text-end">Time of Arrival</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle" src="{{ asset('assets/img/profiles/avatar-02.jpg') }}" width="25" alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-center">12:55</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <footer>
                    <p>Copyright © 2023 Code7ven.</p>
                </footer>
            </div>
        </div>




        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>




        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

        <script src="{{ asset('assets/js/feather.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/slimscroll/jquery.slimscroll.min.js') }}"></script>

        <script src="{{ asset('assets/plugins/apexchart/apexcharts.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/apexchart/chart-data.js') }}"></script>

        <script src="{{ asset('assets/plugins/simple-calendar/jquery.simple-calendar.js') }}"></script>
        <script src="{{ asset('assets/js/calander.js') }}"></script>

        <script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

        <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>