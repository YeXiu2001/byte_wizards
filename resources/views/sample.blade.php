<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ethics Com</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.4.5/styles/overlayscrollbars.css">
    <link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rg-1.4.1/datatables.min.css"
        rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Site wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <img src="{{ asset('img/msuiitcoop.png') }}" style="max-height: 60px; max-width: 60px;">
                <span class="brand-text font-weight-light text-primary"><b>MSU IIT NMPC</b></span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <li class="nav-item menu-open">
                            <a href="{{ route('complaintsIA.home') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>Complaint Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('wblowerIA.home') }}" class="nav-link">
                                <i class="nav-icon far fa-image"></i>
                                <p>Whistleblower Reports</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="nav-icon fas fa-sign-out-alt"></i>
                                <p>Logout</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Complaint Reports</h1>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <!-- Default box -->
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Complaints Tables</h3>
                                    <div class="card-tools">
                                        <button type="button" class="btn btn-tool" data-card-widget="collapse"
                                            title="Collapse">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">

                                    <!-- DataTable for Pending Status -->
                                    @if(!$pendingComplaints->isEmpty())
                                    <h4>Pending Complaints</h4>
                                    <table class="table table-primary table-bordered table-striped"
                                        id="pendingTable">
                                        <thead>
                                            <tr>
                                                <!-- ... your table header columns ... -->
                                                <th>Date</th>
                    <th>Complainant</th>
                    <th>Contact no</th>
                    <th>Email</th>
                    <th>Reported Personnel</th>
                    <th>Offense</th>
                    <th>Narration of Incident</th>
                    <th>Status</th>
                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($pendingComplaints as $c)
                                            <tr>
                                                <!-- ... your table row content ... -->
                                                <td>{{ $c->date_of_incident }}</td>
                        <td>{{ $c->c_fname }} {{ $c->c_lname }}</td>
                        <td>{{ $c->c_contactno }}</td>
                        <td>{{ $c->c_email }}</td>
                        <td>{{ $c->c_name_accused }} ({{ $c->c_position }}, {{ $c->c_department }})</td>
                        <td>{{ $c->offense }}</td>
                        <td>{{ $c->narration }}</td>
                        <td>{{ $c->status }}</td>
                        <td>
                         <!-- Edit button -->
                         <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#updateStatusModal" data-complaint-id="{{ $c->id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                    <!-- Delete button -->
                      <form action="{{ route('deleteComplaint', ['id' => $c->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this complaint?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                          </button>
                      </form>
                        </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                                    <!-- DataTable for On Going Investigation Status -->
                                    @if(!$ongoingComplaints->isEmpty())
                                    <h4>On Going Investigation Complaints</h4>
                                    <table class="table table-primary table-bordered table-striped"
                                        id="ongoingTable">
                                        <thead>
                                            <tr>
                                                <!-- ... your table header columns ... -->
                                                <th>Date</th>
                    <th>Complainant</th>
                    <th>Contact no</th>
                    <th>Email</th>
                    <th>Reported Personnel</th>
                    <th>Offense</th>
                    <th>Narration of Incident</th>
                    <th>Status</th>
                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($ongoingComplaints as $c)
                                            <tr>
                                                <!-- ... your table row content ... -->
                                                <td>{{ $c->date_of_incident }}</td>
                        <td>{{ $c->c_fname }} {{ $c->c_lname }}</td>
                        <td>{{ $c->c_contactno }}</td>
                        <td>{{ $c->c_email }}</td>
                        <td>{{ $c->c_name_accused }} ({{ $c->c_position }}, {{ $c->c_department }})</td>
                        <td>{{ $c->offense }}</td>
                        <td>{{ $c->narration }}</td>
                        <td>{{ $c->status }}</td>
                        <td>
                         <!-- Edit button -->
                         <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#updateStatusModal" data-complaint-id="{{ $c->id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                    <!-- Delete button -->
                      <form action="{{ route('deleteComplaint', ['id' => $c->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this complaint?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                          </button>
                      </form>
                        </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                                    <!-- DataTable for Resolved Status -->
                                    @if(!$resolvedComplaints->isEmpty())
                                    <h4>Resolved Complaints</h4>
                                    <table class="table table-primary table-bordered table-striped"
                                        id="resolvedTable">
                                        <thead>
                                            <tr>
                                                <!-- ... your table header columns ... -->
                                                <th>Date</th>
                    <th>Complainant</th>
                    <th>Contact no</th>
                    <th>Email</th>
                    <th>Reported Personnel</th>
                    <th>Offense</th>
                    <th>Narration of Incident</th>
                    <th>Status</th>
                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($resolvedComplaints as $c)
                                            <tr>
                                                <!-- ... your table row content ... -->
                                                <td>{{ $c->date_of_incident }}</td>
                        <td>{{ $c->c_fname }} {{ $c->c_lname }}</td>
                        <td>{{ $c->c_contactno }}</td>
                        <td>{{ $c->c_email }}</td>
                        <td>{{ $c->c_name_accused }} ({{ $c->c_position }}, {{ $c->c_department }})</td>
                        <td>{{ $c->offense }}</td>
                        <td>{{ $c->narration }}</td>
                        <td>{{ $c->status }}</td>
                        <td>
                         <!-- Edit button -->
                         <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#updateStatusModal" data-complaint-id="{{ $c->id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                    <!-- Delete button -->
                      <form action="{{ route('deleteComplaint', ['id' => $c->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this complaint?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                          </button>
                      </form>
                        </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif

                                    <!-- DataTable for Denied Status -->
                                    @if(!$deniedComplaints->isEmpty())
                                    <h4>Denied Complaints</h4>
                                    <table class="table table-primary table-bordered table-striped"
                                        id="deniedTable">
                                        <thead>
                                            <tr>
                                                <!-- ... your table header columns ... -->
                                                <th>Date</th>
                    <th>Complainant</th>
                    <th>Contact no</th>
                    <th>Email</th>
                    <th>Reported Personnel</th>
                    <th>Offense</th>
                    <th>Narration of Incident</th>
                    <th>Status</th>
                    <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($deniedComplaints as $c)
                                            <tr>
                                                <!-- ... your table row content ... -->
                                                <td>{{ $c->date_of_incident }}</td>
                        <td>{{ $c->c_fname }} {{ $c->c_lname }}</td>
                        <td>{{ $c->c_contactno }}</td>
                        <td>{{ $c->c_email }}</td>
                        <td>{{ $c->c_name_accused }} ({{ $c->c_position }}, {{ $c->c_department }})</td>
                        <td>{{ $c->offense }}</td>
                        <td>{{ $c->narration }}</td>
                        <td>{{ $c->status }}</td>
                        <td>
                         <!-- Edit button -->
                         <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#updateStatusModal" data-complaint-id="{{ $c->id }}">
                            <i class="fas fa-edit"></i>
                        </button>

                    <!-- Delete button -->
                      <form action="{{ route('deleteComplaint', ['id' => $c->id]) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this complaint?')">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">
                            <i class="fas fa-trash"></i>
                          </button>
                      </form>
                        </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    @endif
                                </div>
                                <div class="card-footer">
                                    c Byte Wizards
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script
            src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rg-1.4.1/datatables.min.js">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.4.5/browser/overlayscrollbars.browser.es6.min.js">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

        <script>
            $(document).ready(function () {
                // Initialize DataTable for Pending Status
                $('#pendingTable').DataTable({
                    responsive: true
                });

                // Initialize DataTable for On Going Investigation Status
                $('#ongoingTable').DataTable({
                    responsive: true
                });

                // Initialize DataTable for Resolved Status
                $('#resolvedTable').DataTable({
                    responsive: true
                });

                // Initialize DataTable for Denied Status
                $('#deniedTable').DataTable({
                    responsive: true
                });
            });
        </script>
    </body>

    </html>
