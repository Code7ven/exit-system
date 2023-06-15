<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=0"
    />
    <title>Preskool - Dashboard</title>

    <link rel="shortcut icon" href="assets/img/favicon.png" />

    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}"
    />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/feather/feather.css" />

    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/icons/flags/flags.css" />

    <link
      rel="stylesheet"
      href="assets/plugins/fontawesome/css/fontawesome.min.css"
    />
    <link rel="stylesheet" href="{{ asset('') }}assets/plugins/fontawesome/css/all.min.css" />

    <link
      rel="stylesheet"
      href="{{ asset('assets/plugins/simple-calendar/simple-calendar.css'}}"
    />

    <link rel="stylesheet" href="{{ asset('assets/css/style.css'}}" />
  </head>
  <body>
    <div class="main-wrapper">
      <div class="header">
        <div class="header-left">
          <a href="index.html" class="logo">
            <div class="logo">
              <p>Code7ven</p>
            </div>
          </a>
          <a href="index.html" class="logo logo-small">
            <img
              src="{{ asset('assets/img/logo-small.png'}}"
              alt="Logo"
              width="30"
              height="30"
            />
          </a>
        </div>

        <div class="menu-toggle">
          <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-bars"></i>
          </a>
        </div>

        <div class="top-nav-search">
          <form>
            <input type="text" class="form-control" placeholder="Search here" />
            <button class="btn" type="submit">
              <i class="fas fa-search"></i>
            </button>
          </form>
        </div>

        <a class="mobile_btn" id="mobile_btn">
          <i class="fas fa-bars"></i>
        </a>

        <ul class="nav user-menu">
          <li class="nav-item dropdown language-drop me-2">
            <a
              href="#"
              class="dropdown-toggle nav-link header-nav-list"
              data-bs-toggle="dropdown"
            >
              <img src="{{asset('assets/img/icons/header-icon-01.svg')}}" alt="" />
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="javascript:;"
                ><i class="flag flag-lr me-2"></i>English</a
              >
              <a class="dropdown-item" href="javascript:;"
                ><i class="flag flag-bl me-2"></i>Francais</a
              >
              <a class="dropdown-item" href="javascript:;"
                ><i class="flag flag-cn me-2"></i>Turkce</a
              >
            </div>
          </li>

          <li class="nav-item dropdown noti-dropdown me-2">
            <a
              href="#"
              class="dropdown-toggle nav-link header-nav-list"
              data-bs-toggle="dropdown"
            >
              <img src="{{asset('assets/img/icons/header-icon-05.svg')}}" alt="" />
            </a>
            <div class="dropdown-menu notifications">
              <div class="topnav-dropdown-header">
                <span class="notification-title">Notifications</span>
                <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
              </div>
              <div class="noti-content">
                <ul class="notification-list">
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="{{asset('assets/img/profiles/avatar-02.jpg')}}"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Carlson Tech</span> has
                            approved
                            <span class="noti-title">your estimate</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">4 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="{{asset('assets/img/profiles/avatar-11.jpg')}}"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title"
                              >International Software Inc</span
                            >
                            has sent you a invoice in the amount of
                            <span class="noti-title">$218</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">6 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="{{asset('assets/img/profiles/avatar-17.jpg')}}"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">John Hendry</span> sent a
                            cancellation request
                            <span class="noti-title">Apple iPhone XR</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">8 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                  <li class="notification-message">
                    <a href="#">
                      <div class="media d-flex">
                        <span class="avatar avatar-sm flex-shrink-0">
                          <img
                            class="avatar-img rounded-circle"
                            alt="User Image"
                            src="{{asset('assets/img/profiles/avatar-13.jpg')}}"
                          />
                        </span>
                        <div class="media-body flex-grow-1">
                          <p class="noti-details">
                            <span class="noti-title">Mercury Software Inc</span>
                            added a new product
                            <span class="noti-title">Apple MacBook Pro</span>
                          </p>
                          <p class="noti-time">
                            <span class="notification-time">12 mins ago</span>
                          </p>
                        </div>
                      </div>
                    </a>
                  </li>
                </ul>
              </div>
              <div class="topnav-dropdown-footer">
                <a href="#">View all Notifications</a>
              </div>
            </div>
          </li>

          <li class="nav-item zoom-screen me-2">
            <a href="#" class="nav-link header-nav-list">
              <img src="{{asset('assets/img/icons/eader-icon-04.svg')}}" alt="" />
            </a>
          </li>

          <li class="nav-item dropdown has-arrow new-user-menus">
            <a
              href="#"
              class="dropdown-toggle nav-link"
              data-bs-toggle="dropdown"
            >
              <span class="user-img">
                <img
                  class="rounded-circle"
                  src="{{asset('assets/img/profiles/avatar-01.jpg')}}"
                  width="31"
                  alt="Soeng Souy"
                />
                <div class="user-text">
                  <h6>Soeng Souy</h6>
                  <p class="text-muted mb-0">Administrator</p>
                </div>
              </span>
            </a>
            <div class="dropdown-menu">
              <div class="user-header">
                <div class="avatar avatar-sm">
                  <img
                    src="{{asset('assets/img/profiles/avatar-01.jpg')}}"
                    alt="User Image"
                    class="avatar-img rounded-circle"
                  />
                </div>
                <div class="user-text">
                  <h6>Ryan Taylor</h6>
                  <p class="text-muted mb-0">Administrator</p>
                </div>
              </div>
              <a class="dropdown-item" href="profile.html">My Profile</a>
              <a class="dropdown-item" href="inbox.html">Inbox</a>
              <a class="dropdown-item" href="login.html">Logout</a>
            </div>
          </li>
        </ul>
      </div>

      <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
          <div id="sidebar-menu" class="sidebar-menu">
            <ul>
              <li class="menu-title">
                <span>Main Menu</span>
              </li>
              <li class="submenu active">
                <a href="#"
                  ><i class="feather-grid"></i> <span> Dashboard</span>
                  <span class="menu-arrow"></span
                ></a>
                <ul>
                  <li><a href="index.html">Admin Dashboard</a></li>
                  <li>
                    <a href="teacher-dashboard.html" class="active"
                      >Request Hub</a
                    >
                  </li>
                </ul>
              </li>
              
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="page-wrapper">
        <div class="content container-fluid">
          <div class="page-header">
            <div class="row">
              <div class="col-sm-12">
                <div class="page-sub-header">
                  <h3 class="page-title">Welcome!!</h3>
                  <ul class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Teacher</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              <div class="card bg-comman w-100">
                <div class="card-body">
                  <div
                    class="db-widgets d-flex justify-content-between align-items-center"
                  >
                    <div class="db-info">
                      <h6>Pending Request</h6>
                      <h3>10</h3>
                    </div>
                    <div class="db-icon">
                      <img
                        src="{{asset('assets/img/icons/teacher-icon-01.svg')}}"
                        alt="Dashboard Icon"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12 d-flex">
              <div class="card bg-comman w-100">
                <div class="card-body">
                  <div
                    class="db-widgets d-flex justify-content-between align-items-center"
                  >
                    <div class="db-info">
                      <h6>Approved Requests</h6>
                      <h3>40</h3>
                    </div>
                    <div class="db-icon">
                      <img
                        src="{{asset('assets/img/icons/dash-icon-01.svg')}}"
                        alt="Dashboard Icon"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          
          
          </div>

          <div class="row">
            <div class="col-12 col-lg-12 col-xl-8">
              <div class="row">
                <div class="col-12 col-lg-8 col-xl-8 d-flex">
                    <div class="col-12 col-lg-12 col-xl-4 d-flex">
                        <div class="card flex-fill comman-shadow">
                          <div class="card-body">
                            <div id="calendar-doctor" class="calendar-container"></div>
                            
                        </div>
                      </div>
                    </div>

                  <div class="card flex-fill comman-shadow">
                    <div class="card-header">
                      <div class="row align-items-center">
                        <div class="col-6">
                          <h5 class="card-title">Appointments</h5>
                        </div>
                        <div class="col-6">
                          <span class="float-end view-link"
                            ><a href="#">View All Appointments</a></span
                          >
                        </div>
                      </div>
                    </div>
                    <div class="pt-3 pb-3">
                      <div class="table-responsive lesson">
                        <table class="table table-center">
                          <tbody>
                            <tr>
                              <td>
                                <div class="date">
                                  <b>Student ID</b>
                                  <p>Student Name</p>
                                  <ul class="teacher-date-list">
                                    <li>
                                      <i class="fas fa-calendar-alt me-2"></i
                                      >Sep 5, 2022
                                    </li>
                                    <li>|</li>
                                    <li>
                                      <i class="fas fa-clock me-2"></i>09:00 -
                                      10:00 am
                                    </li>
                                  </ul>
                                </div>
                              </td>
                              <td>
                                <div class="lesson-confirm">
                                  <a href="#">Confirmed</a>
                                </div>
                                <button type="submit" class="btn btn-info">
                                  Reschedule
                                </button>
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <div class="date">
                                    <b>Student ID</b>
                                    <p>Student Name</p>
                                  <ul class="teacher-date-list">
                                    <li>
                                      <i class="fas fa-calendar-alt me-2"></i
                                      >Sep 5, 2022
                                    </li>
                                    <li>|</li>
                                    <li>
                                      <i class="fas fa-clock me-2"></i>09:00 -
                                      10:00 am
                                    </li>
                                  </ul>
                                </div>
                              </td>
                              <td>
                                <div class="lesson-confirm">
                                  <a href="#">Confirmed</a>
                                </div>
                                <button type="submit" class="btn btn-info">
                                  Reschedule
                                </button>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
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

    <script src="assets/plugins/simple-calendar/jquery.simple-calendar.js"></script>
    <script src="assets/js/calander.js"></script>

    <script src="assets/js/circle-progress.min.js"></script>

    <script src="assets/js/script.js"></script>
  </body>
</html>
