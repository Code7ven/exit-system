<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Admin Dashboard</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"rel="stylesheet">
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/feather/feather.css">
    <link rel="stylesheet" href="assets/plugins/icons/flags/flags.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main-wrapper">

  

        @include('admin.body.header')
        @include('admin.body.sidebar')


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
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Pending Requests</h6>
                                        <h3 id="requests">10</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-01.svg" alt="Dashboard Icon">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-3 col-sm-6 col-12 d-flex">
                        <div class="card bg-comman w-100">
                            <div class="card-body">
                                <div class="db-widgets d-flex justify-content-between align-items-center">
                                    <div class="db-info">
                                        <h6>Request Approved</h6>
                                        <h3>30</h3>
                                    </div>
                                    <div class="db-icon">
                                        <img src="assets/img/icons/dash-icon-03.svg" alt="Dashboard Icon">
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
                                    <table
                                        class="table star-student table-hover table-center table-borderless table-striped">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th class="text-center">Department</th>
                                                <th class="text-end">Date of Arrival</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-02.jpg" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1245</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-01.jpg" width="25"
                                                            alt="Star Students">
                                                        Jolie Hoskins
                                                    </a>
                                                </td>
                                                <td class="text-center">1195</td>
                                                <td class="text-center">99.5%</td>
                                           
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1625</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-03.jpg" width="25"
                                                            alt="Star Students">
                                                        Pennington Joy
                                                    </a>
                                                </td>
                                                <td class="text-center">1196</td>
                                                <td class="text-center">99.6%</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2516</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-04.jpg" width="25"
                                                            alt="Star Students">
                                                        Millie Marsden
                                                    </a>
                                                </td>
                                                <td class="text-center">1187</td>
                                                <td class="text-center">98.2%</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-05.jpg" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                               
                                            </tr>
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
                                    <table
                                        class="table star-student table-hover table-center table-borderless table-striped">
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
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-02.jpg" width="25"
                                                            alt="Star Students">
                                                        John Smith
                                                    </a>
                                                </td>
                                                <td class="text-center">1185</td>
                                                <td class="text-center">98%</td>
                                                <td class="text-center">12:55</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1245</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-01.jpg" width="25"
                                                            alt="Star Students">
                                                        Jolie Hoskins
                                                    </a>
                                                </td>
                                                <td class="text-center">1195</td>
                                                <td class="text-center">99.5%</td>
                                                <td class="text-center">12:55</td>
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE1625</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-03.jpg" width="25"
                                                            alt="Star Students">
                                                        Pennington Joy
                                                    </a>
                                                </td>
                                                <td class="text-center">1196</td>
                                                <td class="text-center">99.6%</td>
                                                <td class="text-center">12:55</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2516</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-04.jpg" width="25"
                                                            alt="Star Students">
                                                        Millie Marsden
                                                    </a>
                                                </td>
                                                <td class="text-center">1187</td>
                                                <td class="text-center">98.2%</td>
                                                <td class="text-center">12:55</td>
                                               
                                            </tr>
                                            <tr>
                                                <td class="text-nowrap">
                                                    <div>PRE2209</div>
                                                </td>
                                                <td class="text-nowrap">
                                                    <a href="profile.html">
                                                        <img class="rounded-circle"
                                                            src="assets/img/profiles/avatar-05.jpg" width="25"
                                                            alt="Star Students">
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

    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="assets/plugins/apexchart/apexcharts.min.js"></script>
    <script src="assets/plugins/apexchart/chart-data.js"></script>
    <script src="assets/js/script.js"></script>
</body>

</html>