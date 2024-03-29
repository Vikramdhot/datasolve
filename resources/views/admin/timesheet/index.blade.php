@extends('admin.includes.timesheet') @section('content')
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
                      <!-- <div class="flex-shrink-0"></div> -->
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
        @include('admin/includes.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-sm-6">
                  <!-- <h3>Calendar For Satyam Parekh</h3> -->
                </div>
                <div class="col-sm-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item">Employee</li>
                    <li class="breadcrumb-item active">Timesheet</li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid starts-->
          <div class="container">
          <div class="row">
    <div class="col-lg-6">
        <label for="employeeFilter">Select Employee:</label>
        <select class="form-control" id="employeeFilter">
            <option value="">All Employees</option>
            @foreach($employees as $emp)
                <option value="{{ $emp->name }}">{{ $emp->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-6">
        <label for="clientFilter">Select Client:</label>
        <select class="form-control" id="clientFilter">
            <option value="">All Clients</option>
            @foreach($clients as $cli)
                <option value="{{ $cli->name }}">{{ $cli->name }}</option>
            @endforeach
        </select>
    </div>
</div>
          </div>
        <br>
          <div class="container-fluid calendar-basic">
            <div class="card">
              <div class="card-body">
                <div class="row" id="wrap">
                  
                  <div class="col-xxl-12 box-col-70">
                  <div class="timesheetdata table-responsive">
                 <div id="loader"><h2 class="loadinggg">Loading...</h2></div>
                  <table class="display" id="basic311">
    <thead>
        <tr>
            <th>Employee Name</th>
            <th>Client Name</th>
            <th>Spent Time</th>
            <th>Timesheet Text</th>
            <th>Date Of Work</th>
            <th>Created At</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($results as $result)
            @if(isset($result->client_id) && isset($result->employee_id) && isset($result->employee_name))
                <tr data-client="{{ $result->client_id }}" data-employee="{{ $result->employee_id }}">
                    <td>{{ $result->employee_name }}</td>
                    <td>{{ $result->client_name }}</td>
                    <td>{{ $result->spenttime }}</td>
                    <td>{{ $result->timesheet_txt }}</td>
                    <td>{{ \Carbon\Carbon::parse($result->date_of_work)->format('d-m-Y') }}</td>
                    <td>{{ \Carbon\Carbon::parse($result->created_date)->format('d-m-Y') }}</td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>

    <script>
  // Display loader initially
  document.getElementById('loader').style.display = 'block';

  // Simulate an asynchronous operation (e.g., fetching data) with a delay of 3 seconds
  setTimeout(function () {
    // Hide the loader
    document.getElementById('loader').style.display = 'none';

    // Display the table
    document.getElementById('basic311').style.display = 'table';
  }, 3000);
</script>

<style>
    #loader {
      display: none;
    }

    #basic311 {
      display: none;
    }
  </style>
   

<script src="https://cdn.datatables.net/1.11.7/js/jquery.dataTables.min.js"></script>
<script>
 $(document).ready(function () {
    var selectedEmployeeNames = []; // Initialize an array to store selected employee names

    var table = $('#basic311').DataTable({
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
                filename: function () {
                    // Check if there is any filter applied
                    if (table && table.search()) {
                        return selectedEmployeeNames.join('_') + '_time_sheet_file';
                    } else {
                        return 'all_employee_time_sheet_file';
                    }
                },
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-download"></i> Download As CSV',
                filename: function () {
                    // Check if there is any filter applied
                    if (table && table.search()) {
                        return selectedEmployeeNames.join('_') + '_time_sheet_file';
                    } else {
                        return 'all_employee_time_sheet_file';
                    }
                },
            }
        ]
            }
        ]
        
    });
  table.on('draw.dt', function () {
        // Extract unique employee names from the filtered data
        var uniqueEmployeeNames = table
            .column(0, { search: 'applied' }) // Assuming 'Employee Name' is the first column (index 0)
            .data()
            .unique()
            .toArray();

        // Update selectedEmployeeNames
        selectedEmployeeNames = uniqueEmployeeNames;
    });
    // Event listener for employeeFilter dropdown
    $('#employeeFilter').on('change', function () {
        var selectedEmployee = $(this).val();
        table.column(0).search(selectedEmployee).draw();
if (table.column(0).search(selectedEmployee).draw()) {
                        return selectedEmployeeNames.join('_') + '_time_sheet_file';
                    } else {
                        return 'all_employee_time_sheet_file';
                    }
        // Update the selectedEmployeeNames array
        selectedEmployeeNames = selectedEmployee ? [selectedEmployee] : [];
    });

    // Event listener for clientFilter dropdown
    $('#clientFilter').on('change', function () {
        var selectedClient = $(this).val();
        table.column(1).search(selectedClient).draw();
        if (table.column(1).search(selectedClient).draw()) {
                        return selectedEmployeeNames.join('_') + '_time_sheet_file';
                    } else {
                        return 'all_employee_time_sheet_file';
                    }
    });
});


</script>
                                                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('user/includes.footer')
      </div>
    </div>
    
<style>
    a.dt-button.buttons-csv.buttons-html5 {
    background: #000000;
    color: #333333 ;
    font-size: 12px !important;
    border-radius: 7px !important;
    font-weight: 500 !important;
    border: none;
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.3);
}
a.dt-button.buttons-excel.buttons-html5 {
background: #000000;
    color: #333333 ;
    font-size: 12px !important;
    border-radius: 7px !important;
    font-weight: 500 !important;
    border: none;
    box-shadow: inset 0 0 20px rgba(0, 0, 0, 0.3);
}
</style>
<style>
/*    table{*/
/*  table-layout: fixed;*/
/*  td, th{*/
/*    overflow: hidden;*/
/*    white-space: nowrap;*/
/*    -moz-text-overflow: ellipsis;        */
/*       -ms-text-overflow: ellipsis;*/
/*        -o-text-overflow: ellipsis;*/
/*           text-overflow: ellipsis;*/
/*  }*/
/*}*/
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

@endsection