
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Analytics Ethics Com</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.4.5/styles/overlayscrollbars.css">
<link href="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rg-1.4.1/datatables.min.css" rel="stylesheet">

<body class="hold-transition sidebar-mini layout-fixed">

<!-- Site wrapper -->
<div class="wrapper">

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light" style="border-bottom: 2px solid blue;" >
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <!-- other navbar item here -->
    </ul>

    <!-- Right navbar links -->
    
  </nav>
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{ asset('img/msuiitcoop.png') }}" style="max-height: 60px; max-width: 60px;">
      <span class="brand-text font-weight-light text-primary"><b>MSU IIT NMPC</b></span>
    </a>

     <!-- Sidebar -->
     <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
            <a href="{{ route('ethicsCom.home') }}" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                    VIEW User Feedbacks
                </p>
            </a>
        </li>
        <li class="nav-item menu-open">
            <a href="{{ route('ethicsCom.analytics') }}" class="nav-link">
                <i class="nav-icon far fa-image"></i>
                <p>
                    VIEW Analytics
                </p>
            </a>
        </li>
        <!-- Add the logout link with an icon -->
        <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                    Logout
                </p>
            </a>
            <!-- Logout form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
                @method('DELETE')
            </form>
        </li>
    </ul>
</nav>


  </aside><!-- sidebar END -->

 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User Feedbacks</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Main content -->
<section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card">

        <div class="card-header">
          <h3 class="card-title">User Feedback Analytics</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <!-- <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button> -->
          </div>
        </div>

        <div class="card-body">

        <div class="row"> <!-- charts alignemnt -->
        <!-- PIE CHART -->
        <div class="col-sm-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Pie Chart</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <canvas id="pieChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
            </div>
        </div>
            <!-- /.PIE CHARTcard -->

        <!-- POLAR AREA CHART -->
          <div class="col">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Polar Area Chart</h3>
                  <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="polarAreaChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
                </div>
            </div>
          </div>
          <!-- /.POLAR AREA CHART card -->
                    
          </div><!-- ./charts alignemnt -->


        <!-- /.card-body -->
        <div class="card-footer">
          c Byte Wizards 
        </div>
        <!-- /.card-footer-->

      </div> <!-- /.CARD BODY -->
      
     
    </div> <!-- Default BOX end -->
  </div>
</div>
</div>
</section><!-- /.main content -->


 </div><!-- Page Content END -->
</div> <!-- site wrapper end -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    var $j = jQuery.noConflict();
</script>
<script src="https://cdn.datatables.net/v/dt/jq-3.7.0/jszip-3.10.1/dt-1.13.8/b-2.4.2/b-html5-2.4.2/b-print-2.4.2/r-2.5.0/rg-1.4.1/datatables.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/overlayscrollbars/2.4.5/browser/overlayscrollbars.browser.es6.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/js/adminlte.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!-- Include Google Charts library -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script>
$(document).ready(function () {
    $('#myTable').DataTable({
        responsive: true // Enable responsive extension
    });
});
</script>
<script>
    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d');
    var pieData = <?php echo json_encode($pieData); ?>;
    var pieOptions = {
        responsive: true,
    };

    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
        type: 'pie',
        data: {
            labels: pieData.labels,
            datasets: pieData.datasets
        },
        options: pieOptions
    });

     // Polar Area Chart
   var polarAreaChartCanvas = $('#polarAreaChart').get(0).getContext('2d');
   var polarAreaData = <?php echo json_encode($polarAreaData); ?>;
   var polarAreaOptions = {
      responsive: true,
   };

   new Chart(polarAreaChartCanvas, {
      type: 'polarArea',
      data: polarAreaData,
      options: polarAreaOptions
   });
</script>


</body>
</html>
