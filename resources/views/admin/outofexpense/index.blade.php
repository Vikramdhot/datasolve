@include('admin/includes.header');

<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/scrollbar.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/datatables.css">
<link rel="stylesheet" type="text/css" href="/../assets/css/vendors/sweetalert2.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<!-- App css-->
<link rel="stylesheet" type="text/css" href="/../assets/css/style.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-notify/0.2.0/css/bootstrap-notify.min.css">
<style>
 td{
        font-weight:500;
    }
    </style>


<script src="https://code.jquery.com/jquery-1.12.3.js"></script>

<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>

<script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"> -->

<!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/jquery.dataTables.min.css"> -->

<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css">
</head>
<body>
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
        @include('admin/includes.sidebar');
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h3>OPE</h3>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href=""><i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item active">OPE</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid basic_table">
           <div class="card-body">
                                <div class="table-responsive theme-scrollbar">
                  <div class="timesheetdata">
                                  <table class="display" id="basic1111">
                                                        <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Employee Name </th>
                                                            <th>Client Name </th>
                                                            <th>Date of Expense </th>
                                                            <th>Date of Expense Submission</th>
                                                            <th>Description of expense </th>
                                                            <th>Amount </th>
                                                            <th>Category of Expense </th>
                                                            <th>Nature of Expense </th>
                                                            <th>Supporting Documents </th>
                                                            <th>Attach Supporting Documents </th>
                                                            <th>Status</th>
                                                            <th>Remarks</th>
                                                            <!--<th>Created At</th>-->
                                                            <th>Updated At</th>
                                                            <th>Action</th>
                                                            
                                                            

                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                    @foreach($OutOfExpense  as $index => $cli)


                                                        <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{$cli->employee_name}}</td>
                                                        <td>{{$cli->client_name}}</td>
                                                        <td>{{ \Carbon\Carbon::parse($cli->date)->format('d-m-Y') }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($cli->date_of_submission_expense)->format('d-m-Y') }}</td>



                                                        <td>{{$cli->reason}}</td>
                                                        <td>{{$cli->amount}}</td>
                                                        <td>{{$cli->category_of_expense}}</td>
                                                        <td>{{$cli->nature_of_expense}}</td>
                                                        <td>{{$cli->supporting_documents}}</td>
                                                        <td>
                                                            @if($cli->attach_supporting_documents)
                   
                    <!--<a href="{{ asset('/' . $cli->attach_supporting_documents) }}" download>Download Now</a>-->
                                <a href="{{ route('download-ope-file', ['id' => $cli->id, 'employeeName' => $cli->employee_name ]) }}">
                <i class="icon-download"></i>
            </a>
                @else
                    <p>No Documents available.</p>
                @endif
                                                            </td>
                                                        <td style="background-color: 
    @if($cli->status == 'pending') orange;
    @elseif($cli->status == 'approved') green;
    @elseif($cli->status == 'rejected') red;
    @endif
    ; color: white;">
    {{$cli->status}}
</td>
                                                        <td>{{$cli->remarks}}</td>
                                                        <!--<td>{{$cli->created_at}}</td>-->
                                                     <td>{{ \Carbon\Carbon::parse($cli->admin_update)->format('d-m-Y') }}</td>

                                                        <td>
                                                            <ul class="action">
                                                    <li class="edit"> <a href="#"><i class="icon-pencil-alt text-primary" onclick="openModal({{$cli->id}})"></i></a></li>
                                                    <li class="delete" id="delete-{{ $cli->id }}">
                                                        <form method="POST" action="{{ route('ope.delete', ['id' => $cli->id]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="delete-button" onclick="return confirm('Are you sure you want to delete this record?')">
                                                                <i class="icon-trash"></i>
                                                            </button>
                                                        </form>
                                                    </li>
                                                   
                                            </ul>
                                                        </td>
                                                        
                                                      
                                                        
                                                            
                                                        
                                                      
                                                        
                                                        </tr>


                                                       @endforeach



                                                      

                                                        </tbody>
                                                    </table>
                                  </div>
                                  </div>
                                  </div>
                                  
                  </div>
  @foreach($OutOfExpense as $index => $cli)
<div class="modal fade" id="statusModal{{$cli->id}}" tabindex="-1" aria-labelledby="statusModal{{$cli->id}}Label" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="statusModal{{$cli->id}}Label">Update </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Display user data here -->
               <form class="theme-form" method="POST" action="{{ route('updateoutofexpense') }}" enctype="multipart/form-data">
                                @csrf
                               
                               <select id="status" class="form-select mt-2" placeholder="status" name="status" required>
                                <option  disabled>Select Your Choice *</option>
                                <option value="pending" {{ $cli->status === 'pending' ? ' selected' : '' }}>Pending</option>
                                <option value="rejected" {{ $cli->status === 'rejected' ? ' selected' : '' }}>Rejected</option>
                                <option value="approved" {{ $cli->status === 'approved' ? ' selected' : '' }}>Approved</option>
                              </select>
                              <input type="text" class="form-control mt-2" name="remarks" value="{{$cli->remarks}}"  id="remarks" placeholder="Add your remarks">
                              <input type="hidden" class="form-control mt-2" name="emp_id"  id="emp_id" value="{{$cli->id}}" placeholder="Add your remarks">
                              <input type="hidden" class="form-control mt-2" name="created_at"  id="created_at" value="{{$cli->created_at}}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button class="btn btn-primary btn-sm"  style="border-radius:5px;" type="submit">Add</button>
            </div>
             </form>
        </div>
    </div>
</div>
@endforeach
  <script>
    // Function to open the modal when the edit button is clicked
    function openModal(employeeId) {
        $('#statusModal' + employeeId).modal('show');
    }
</script>
<script>
var selectedEmployeeNames = [];

$(document).ready(function () {
    var dataTable = $('#basic1111').DataTable({
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
                    if (dataTable && dataTable.search()) {
                        return selectedEmployeeNames.join('_') + '_ope_file';
                    } else {
                        return 'all_employee_ope_file';
                    }
                },
            },
            {
                extend: 'csvHtml5',
                text: '<i class="fa fa-download"></i> Download As CSV',
                filename: function () {
                    // Check if there is any filter applied
                    if (dataTable && dataTable.search()) {
                        return selectedEmployeeNames.join('_') + '_ope_file';
                    } else {
                        return 'all_employee_ope_file';
                    }
                },
            }
        ]
            }
        ]
        
    });

    // Listen for the DataTables draw event to update selectedEmployeeNames
    dataTable.on('draw.dt', function () {
        // Extract unique employee names from the filtered data
        var uniqueEmployeeNames = dataTable
            .column(1, { search: 'applied' }) // Assuming 'Employee Name' is the second column (index 1)
            .data()
            .unique()
            .toArray();

        // Update selectedEmployeeNames
        selectedEmployeeNames = uniqueEmployeeNames;
    });
});



</script>

</div>
        <!-- footer start-->
        @include('user/includes.footer')
    </div>
</div>
<!-- latest jquery-->
<!-- <script src="/../assets/js/jquery-3.6.0.min.js"></script> -->
<!-- Bootstrap js-->
<script src="/../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
<!-- feather icon js-->
<script src="/../assets/js/icons/feather-icon/feather.min.js"></script>
<script src="/../assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- scrollbar js-->
<script src="/../assets/js/scrollbar/simplebar.js"></script>
<script src="/../assets/js/scrollbar/custom.js"></script>
<!-- Sidebar jquery-->
<script src="/../assets/js/config.js"></script>
<script src="/../assets/js/sidebar-menu.js"></script>
<!-- <script src="/../assets/js/datatable/datatables/jquery.dataTables.min.js"></script>
<script src="/../assets/js/datatable/datatables/datatable.custom.js"></script> -->
<!--<script src="/../assets/js/tooltip-init.js"></script>-->

<script src="/../assets/js/notify/bootstrap-notify.min.js"></script>
<script src="/../assets/js/notify/notify-script.js"></script>


<script src="/../assets/js/sweet-alert/sweetalert.min.js"></script>
<script src="/../assets/js/sweet-alert/app.js"></script>
<!-- Template js-->
<script src="/../assets/js/script.js"></script>
<script src="/../assets/js/theme-customizer/customizer.js">  </script>
<style>
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
</body>

</html>
