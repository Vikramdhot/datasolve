@extends('admin.includes.issuetracker') @section('content')
<!-- tap on top starts-->
<div class="tap-top"><i data-feather="chevrons-up"></i></div>
<!-- tap on tap ends-->
<!-- Loader starts-->
<div class="loader-wrapper">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"> </div>
    <div class="dot"></div>
</div>
<!-- Loader ends-->
<!-- page-wrapper Start-->
<div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->
   
<div class="page-header">
    <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"> </i></div>

            <div class="logo-header-main"><a href="#">Milliondox</a></div>

        </div>
        <div class="left-header col horizontal-wrapper ps-0">
            <div class="left-menu-header">
           
 



            </div>
        </div>
        <div class="nav-right col-1 pull-right right-header p-0">
            <ul class="nav-menus">

                <li>
                    <div class="mode" ><i class="fa fa-moon-o"></i></div>
                </li>

                      <li class="onhover-dropdown">
                <div class="notification-box"><i data-feather="bell"></i></div>
                <ul class="notification-dropdown onhover-show-div">
                  <li><i data-feather="bell">            </i>
                    <h6 class="f-18 mb-0">Notitications</h6>
                  </li>
                  <li>
                    <div class="d-flex align-items-center">
                      <div class="flex-shrink-0"></div>
                      <div class="flex-grow-1">
                      <span>Client Announcements</span>
                      <ul class="announcement-list">
    <div class="col-lg-12">
    @forelse($announcements as $announcement)
        @if($announcement->role == 'Client')
            <div class="announcement-row mb-3">
                <img src="https://thumbs.dreamstime.com/b/red-admin-sign-pc-laptop-vector-illustration-administrator-icon-screen-controller-man-system-box-88756468.jpg" alt="Image Description" style="max-width: 100%; height: auto;">
                <div style="display: inline-block; margin-left: 20px;">
                    <li><strong>{{ $announcement->announcements_for_clients }}</strong></li>
                    @if($announcement->created_at)
                        <span>{{ $announcement->created_at }}</span>
                    @endif
                </div>
            </div>
             <hr>
        @endif
    @empty
        <!-- Optional: Show a message when there is no data -->
        <p>No announcements available for clients.</p>
    @endforelse
</div>

    </ul>
    <span>Employee Announcements</span>
    <ul class="announcement-list">
    <div class="col-lg-12">
    @forelse($announcements as $announcement)
        @if($announcement->role == 'Employee')
            <div class="announcement-row mb-3">
                <img src="https://thumbs.dreamstime.com/b/red-admin-sign-pc-laptop-vector-illustration-administrator-icon-screen-controller-man-system-box-88756468.jpg" alt="Image Description" style="max-width: 100%; height: auto;">
                <div style="display: inline-block; margin-left: 20px;">
                    <li><strong>{{ $announcement->announcements_for_employee }}</strong></li>
                    @if($announcement->created_at)
                        <span>{{ $announcement->created_at }}</span>
                    @endif
                </div>
            </div>
             <hr>
        @endif
    @empty
        <!-- Optional: Show a message when there is no data -->
        <p>No announcements available for clients.</p>
    @endforelse
</div>

    </ul>
</div>
<style>
    .announcement-list {
        max-height: 150px; /* Adjust the height as needed */
        overflow-y: auto;
        border: 1px solid #ccc; /* Add a border for aesthetics */
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



                <!-- <li class="profile-nav onhover-dropdown">
                    <div class="account-user"><i data-feather="user"></i></div>
                    <ul class="profile-dropdown onhover-show-div">
                        
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf 
                                <button type="submit" class="logbtn"><i data-feather="log-out"></i><span>Logout</span></button>
                            </form>
                        </li>
                       
                    </ul>
                </li> -->
            </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
            <div class="ProfileCard u-cf">
                <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                <div class="ProfileCard-details">
                    <div class="ProfileCard-realName">Vaibhav</div>
                </div>
            </div>
        </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
    </div>
</div>

    <!-- Page Header Ends-->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
        @include('admin/includes.sidebar');
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>Open Issue Tracker</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item active">Issue Tracker</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <!-- Zero Configuration  Starts-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0">
                                <h4 class="pull-left">All Issues</h4>
                            </div>

                            <div class="card-body">
                            <div class="all_issuwrap">
                                <div class="table-responsive theme-scrollbar all-issue">
                                 
                                    <table class="display" id="basic41">
                                        <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Issue Date</th>
                                            <th>Issue Creator</th>
                                            <th>Issue For</th>
                                            <th>Responsibility</th>
                                            <th>Area</th>
                                            <th>Particulars</th>
                                            <th>Status</th>
                                            <th>Remarks</th>


                                        </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($issue as $iss)
                                        <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{$iss->issue_date}}</td>
                                        <td>{{$iss->employee_name}}</td>
                                        <td>{{$iss->client_name}}</td>
                                        <td>{{$iss->responsibility}}</td>
                                        <td>{{$iss->area}}</td>
                                        <td>{{$iss->particulars}}</td>
                                        @if($iss->status == 'Closed')
                                        <td><button class="btn bg-light-success text-success btn-xs" style="font-weight:600">{{$iss->status}}</button></td>
                                        @elseif($iss->status == 'Wip')
                                        <td><button class="btn bg-light-warning text-warning btn-xs" style="font-weight:600">WIP</button></td>
                                        @elseif($iss->status == 'Open')
                                        <td><button class="btn bg-light-danger text-danger btn-xs" style="font-weight:600">Open</button></td>
                                        @else
                                        @endif
                                        <td>{{$iss->remarks}}</td>

                                        </tr>
@endforeach

                                        


                                        </tbody>
                                    </table>
                                   </div>
                                    <script>
                                        $(document).ready( function() {
    $('#basic41').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'collection',
                text: '<i class="fa fa-download"></i> Download',
                
                buttons: [
            {
                extend: 'excelHtml5',
                customize: function (xlsx) {
                    var sheet = xlsx.xl.worksheets['sheet1.xml'];
                    $('row c[r^="C"]', sheet).attr('s', '2');
                },
                 text: '<i class="fa fa-download"></i> Download As Excel',
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-download"></i> Download As CSV', // Custom HTML content
            }
        ]
            }
        ]
        });
    });
                                    </script>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Zero Configuration  Ends-->

                </div>
            </div>
            <!-- Container-fluid Ends-->
        </div>

        <script>
            $(document).ready(function (){
                @if(Session::has('success'))
                showToast('{{Session::get('success')}}','success');
                @endif

                $(".delete").click(function (){
                    var id = $(this).attr('id');

                    var tr = $(this).closest('tr');

                    swal({
                        title: "Are you sure?",
                        text: "Once deleted, you will not be able to revert this!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                        .then((willDelete) => {
                            if (willDelete) {

                                const url = "/admin/vendors/" + id;

                                $.ajax({
                                    url: url,
                                    type: "GET",
                                    success: function (response) {

                                        tr.remove();
                                        showToast('Vendor Deleted Successfully..','success');
                                        swal.close();

                                    },
                                    error: function (jqXHR, textStatus, errorThrown) {
                                        console.error(errorThrown);

                                        showToast('Error while deleting vendor..','danger');
                                        swal.close();

                                    }
                                });


                            } else {

                                //do nothing

                            }
                        })


                });
            });
        </script>
        <!-- footer start-->
        @include('user/includes.footer');
    </div>
</div>

<style>
    /* table{
  table-layout: fixed;
  td, th{
    overflow: hidden;
    white-space: nowrap;
    -moz-text-overflow: ellipsis;        
       -ms-text-overflow: ellipsis;
        -o-text-overflow: ellipsis;
           text-overflow: ellipsis;
  }
} */
div.dt-button-collection {
    position: absolute;
    top: 0;
    left: 0;
    width: 190px !important;
    margin-top: 3px;
    padding: 8px 8px 4px 8px;
    border: 1px solid #ccc;
    border: 1px solid rgba(0,0,0,0.4);
    background-color: white;
    overflow: hidden;
    z-index: 2002;
    border-radius: 5px;
    box-shadow: 3px 3px 5px rgba(0,0,0,0.3);
    z-index: 2002;
    -webkit-column-gap: 8px;
    -moz-column-gap: 8px;
    -ms-column-gap: 8px;
    -o-column-gap: 8px;
    column-gap: 8px;
}
</style>

<style>
a.dt-button.buttons-collection {
    background: #0d0a0a !important;
    color: white;
    border-radius: 10px;
    font-weight: 600;
}
</style>
<!-- login js-->

@endsection

