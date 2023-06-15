<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Code7ven</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/feather/feather.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/icons/flags/flags.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/simple-calendar/simple-calendar.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    <div class="main-wrapper">




        @include('body.header')
        @include('body.sidebar')

        <!-- 
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="page-sub-header">
                                <h3 class="page-title">Welcome Bruklin!</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                    <li class="breadcrumb-item active">Student</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> -->




        <div class="page-wrapper" style="min-height: 844px;">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Application Form</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                                <li class="breadcrumb-item active">Horizontal Form</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <h5 class="card-title">Application Form</h5>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('submit.application') }}" method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">First Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="first_name" value="{{ Auth::user()->name }}">
                                            @error('first_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Last Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="last_name">
                                            @error('last_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Matric Number</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="matric_no" value="{{ Auth::user()->matric_no }}">
                                            @error('matric_no')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email Address</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
                                            @error('email')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Destination</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="destination">
                                            @error('destination')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Purpose</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="purpose">
                                            @error('purpose')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Guardian Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="guardian_name">
                                            @error('guardian_name')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Guardian email</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" name="guardian_email">
                                            @error('guardian_email')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Guardian Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control" name="guardian_phone">
                                            @error('guardian_phone')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="status" value="pending">


                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Departure Date</label>
                                        <div class="col-lg-9">
                                            <input type="date" class="form-control" name="departure_date">
                                            @error('departure_date')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Arrival DAte</label>
                                        <div class="col-lg-9">
                                            <input type="date" class="form-control" name="arrival_date">
                                            @error('arrival_date')
                                            <span class="text-danger"> {{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="text-end">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>



            </div>

            <footer>
                <p>Copyright © 2022 Dreamguys.</p>
            </footer>

        </div>


    </div>

    </div>

    </div>


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