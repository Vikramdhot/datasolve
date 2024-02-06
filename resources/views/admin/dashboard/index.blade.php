@extends('admin.includes.dashboard') @section('content')
<!-- tap on top starts-->
<div class="tap-top">
  <i data-feather="chevrons-up"></i>
</div>
<!-- tap on tap ends-->
<!-- Loader starts-->
<div class="loader-wrapper">
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
  <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- Page Header Start-->
  <div class="page-header">
    <div class="header-wrapper row m-0">
      <div class="header-logo-wrapper col-auto p-0">
        <div class="toggle-sidebar">
          <i class="status_toggle middle sidebar-toggle" data-feather="grid"></i>
        </div>
        <div class="logo-header-main">
          <a href="#">Milliondox</a>
        </div>
      </div>
      <div class="left-header col horizontal-wrapper ps-0">
        <div class="left-menu-header"></div>
      </div>
      <div class="nav-right col-1 pull-right right-header p-0">
        <ul class="nav-menus">
          <li>
            <div class="mode">
              <i class="fa fa-moon-o"></i>
            </div>
          </li>
          <li class="onhover-dropdown">
            <div class="notification-box">
              <i data-feather="bell"></i>
            </div>
            <ul class="notification-dropdown onhover-show-div">
              <li>
                <i data-feather="bell"></i>
                <h6 class="f-18 mb-0">Notitications</h6>
              </li>
              <li>
                <div class="d-flex align-items-center">
                  <!-- <div class="flex-shrink-0"></div> -->
                  <div class="flex-grow-1">
                    <span>Client Announcements</span>
                    <ul class="announcement-list">
                      <div class="col-lg-12"> @forelse($announcements as $announcement) @if($announcement->role == 'Client') <div class="announcement-row mb-3">
                          <img src="https://thumbs.dreamstime.com/b/red-admin-sign-pc-laptop-vector-illustration-administrator-icon-screen-controller-man-system-box-88756468.jpg" alt="Image Description" style="max-width: 100%; height: auto;">
                          <div style="display: inline-block; margin-left: 20px;">
                            <li>
                              <strong>{{ $announcement->announcements_for_clients }}</strong>
                            </li> @if($announcement->created_at) <span>{{ $announcement->created_at }}</span> @endif
                          </div>
                        </div>
                        <hr> @endif @empty
                        <!-- Optional: Show a message when there is no data -->
                        <p>No announcements available for clients.</p> @endforelse
                      </div>
                    </ul>
                    <span>Employee Announcements</span>
                    <ul class="announcement-list">
                      <div class="col-lg-12"> @forelse($announcements as $announcement) @if($announcement->role == 'Employee') <div class="announcement-row mb-3">
                          <img src="https://thumbs.dreamstime.com/b/red-admin-sign-pc-laptop-vector-illustration-administrator-icon-screen-controller-man-system-box-88756468.jpg" alt="Image Description" style="max-width: 100%; height: auto;">
                          <div style="display: inline-block; margin-left: 20px;">
                            <li>
                              <strong>{{ $announcement->announcements_for_employee }}</strong>
                            </li> @if($announcement->created_at) <span>{{ $announcement->created_at }}</span> @endif
                          </div>
                        </div>
                        <hr> @endif @empty
                        <!-- Optional: Show a message when there is no data -->
                        <p>No announcements available for clients.</p> @endforelse
                      </div>
                    </ul>
                  </div>
                  <style>
                    .announcement-list {
                      max-height: 150px;
                      /* Adjust the height as needed */
                      overflow-y: auto;
                      border: 1px solid #ccc;
                      /* Add a border for aesthetics */
                      padding: 5px;
                    }

                    .page-wrapper .page-header .header-wrapper .nav-right .onhover-show-div li .d-flex img {
                      width: 100px !important;
                      position: relative;
                      margin-top: -50px !important;
                    }

                    .page-wrapper .page-header .header-wrapper .nav-right .onhover-show-div:not(.profile-dropdown) li:first-child {
                      padding: 20px;
                      background-color: white !important;
                      border-radius: 0 !important;
                    }
                  </style>
                </div>
              </li>
            </ul>
          </li>
          <!-- <li class="profile-nav onhover-dropdown"><div class="account-user"><i data-feather="user"></i></div><ul class="profile-dropdown onhover-show-div"><li><form action="{{ route('logout') }}" method="POST">
                                @csrf 
                                <button type="submit" class="logbtn"><i data-feather="log-out"></i><span>Logout</span></button></form></li></ul></li> -->
        </ul>
      </div>
      <script class="result-template" type="text/x-handlebars-template"> <div class="ProfileCard u-cf">
									<div class="ProfileCard-avatar">
										<svg
											xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0">
											<path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path>
											<polygon points="12 15 17 21 7 21 12 15"></polygon>
										</svg>
									</div>
									<div class="ProfileCard-details">
										<div class="ProfileCard-realName">Vaibhav</div>
									</div>
								</div>
							</script>
      <script class="empty-template" type="text/x-handlebars-template"> <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
							</script>
    </div>
  </div>
  <!-- Page Header Ends-->
  <!-- Page Body Start-->
  <div class="page-body-wrapper">
    <!-- Page Sidebar Start--> @include('admin.includes.sidebar')
    <!-- Page Sidebar Ends-->
    <div class="page-body">
      <div class="container-fluid">
        <div class="page-title">
          <div class="row">
            <div class="col-sm-6">
              <h3>Good evening, {{$user->name}}!</h3>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">
                    <i data-feather="home"></i>
                  </a>
                </li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid basic_table">
        <div class="row">
          {{-- Documents --}}
          <div class="col-sm-7">
            <div class="card" style="height: 500px; overflow-y: auto;">
              <div class="card-body">
                <h5 style="font-weight:700;font-size:16px;">Employees</h5>
                <br> @foreach($employees as $emp) <div class="alert bg-light-info text-dark" style="font-weight:600">
                  <span>{{$emp->name}}</span>
                  <span class="pull-right">
                    <span style="font-size:12px;"></span>
                    <li class="d-inline-block">
                      <img class="img-30 rounded-circle" src="{{ asset('/' . $emp->profile_picture) }}" alt="" data-original-title="" title="">
                    </li>
                  </span>
                </div> @endforeach
              </div>
            </div>
          </div>
          {{-- Clients --}}
          <div class="col-sm-5">
            <div class="card" style="height: 500px; overflow-y: auto;">
              <div class="card-body">
                <h5 style="font-weight: 700; font-size: 16px;">Clients</h5>
                <br> @foreach($clients as $cli) <div class="alert bg-light-info text-dark" style="font-weight: 600;">
                  <span>{{$cli->name}}</span>
                  <span class="pull-right">
                    <span style="font-size: 12px;"></span>
                    <li class="d-inline-block">
                      <img class="img-30 rounded-circle" src="{{ asset('/' . $cli->profile_picture) }}" alt="" data-original-title="" title="">
                    </li>
                  </span>
                </div> @endforeach
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="row">
													<div class="col-lg-6">
														<h3>Upload Policy Manuals</h3>
														<form action="{{ route('upload-policy') }}" method="POST" enctype="multipart/form-data"> @csrf <input type="file" name="policy[]" multiple>
        <br>
        <span>Note:- file|mimes:pdf,doc,docx|max size:2048kb</span>
        <br>
        <button class="btn btn-primary btn-sm" style="border-radius:5px;" type="submit">Upload</button>
        <br>
        </form> @if (session('success')) <div class="alert alert-success">
          {{ session('success') }}
        </div> @endif @if (session('error')) <div class="alert alert-danger">
          {{ session('error') }}
        </div> @endif
      </div>
      <div class="col-lg-6">
        <div class="table-responsive theme-scrollbar">
          <table class="display" id="basic-1">
            <thead>
              <tr>
                <th>File Name</th>
                <th>Download</th>
              </tr>
            </thead>
            <tbody> @foreach($policy as $pol) <tr>
                <td>{{ $pol->filename }}</td>
                <td>
                  <a href="{{ asset($pol->file_path) }}" download>
                    <i class="fas fa-download"></i>
                  </a>
                </td>
              </tr> @endforeach </tbody>
          </table>
        </div>
      </div>
    </div>--}}
  </div>
  <!-- Container-fluid Ends-->
</div>
<!-- footer start--> @include('admin.includes.footer') </div>
</div> @endsection