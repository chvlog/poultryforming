<?php  
  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  
 ?>  



<!DOCTYPE html>
<html lang="en">
 
<?php
include("connection.php");








?>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin Pannel - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Poultry Farming Admin <sup></sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
  
      <!-- Nav Item - Utilities Collapse Menu -->
     

      <!-- Divider -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Logout Screens:</h6>
           
            <a class="collapse-item" href="logout.php">Logout</a>
          
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="b.php">Buying List</a>
            <a class="collapse-item" href="s.php">Selling List</a>
              <a class="collapse-item" href="e.php">Expenditure List</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="graph.php">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="contactus.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Contacts</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
           

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
          </div>

          <!-- Content Row -->
          <div class="row">

           



<h1 style="text-align: center;">Poultry Farming Reports</h1>
<div class="row">
  <div class="offset-2 col-md-8">
    <table  class="table table-bordered table-striped" style="color: white; background-color: #77773c; border-radius: 10px ; ">
  
  <tbody>
    
    <tr>
      <td>Total buying_Chicken</td>
      <td><?php
       $query= "SELECT SUM(order_item) as value FROM `buying`";
        $result = mysqli_query($conn, $query);

        $row= mysqli_fetch_object($result);
        echo $row->value;
  
    ?></td>
    </tr>
    <tr>
      <td>Total Buying_Chicken Price</td>
      <td><?php 

      $query= "SELECT SUM(order_value) as value FROM `buying`";
      $result = mysqli_query($conn, $query);

      $row= mysqli_fetch_object($result);
      echo $row->value;

      ?></td>
    </tr>
    <tr>
      <td>Total Selling_Chicken Price</td>
      <td><?php

        $query= "SELECT SUM(order_value) as value FROM `selling`";
        $result = mysqli_query($conn, $query);

        $row= mysqli_fetch_object($result);
        echo  $row->value;

      ?></td>
    </tr>
    <tr>
      <td>Total Loss_Chicken Price</td>
      <td><?php
        $query= "SELECT SUM(loss) as value FROM `selling`";
        $result = mysqli_query($conn, $query);

        $row= mysqli_fetch_object($result);
        echo  $row->value;

      ?></td>
    </tr>
    <tr>
      <td>Total No of Saled_Poultry</td>
      <td><?php 

      $query= "SELECT SUM(order_item) as value FROM `selling`";
      $result = mysqli_query($conn, $query);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

      ?></td>
    </tr>
    <tr>
  <td>Total Feeds Price</td>

 <td><?php
             
             
    

     

          $query1= "SELECT SUM(wight) as value FROM `expensis` ";
               
      $result = mysqli_query($conn, $query1);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            

?></td>
</tr>
<tr>
  <td>Total Vaccine Price</td>


 <td><?php
              
             
      

     

            $query2= "SELECT SUM(order_value) as value FROM `expensis` ";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            

?></td>

</tr>
<tr>
  <td>Total Sellary Of Employess</td>


 <td><?php

     

            $query2= "SELECT SUM(Sellary) as value FROM `expensis`";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            

?></td>

</tr>
    <tr>
      <td style="background-color: Black;  color: red">Remaning Poultry</td>
      <td style="background-color: Black; color: red">
        <?php

          $query= "SELECT SUM(order_item) as value FROM `buying`";
          $result = mysqli_query($conn, $query);

          $row= mysqli_fetch_object($result);
          $burchase=$row->value;
          $query1= "SELECT SUM(order_item) as value FROM `selling`";
          $result1 = mysqli_query($conn, $query1);

          $row1= mysqli_fetch_object($result1);
          $loss=  $row1->value; 
          $code=$burchase-$loss;
          echo $code ;
        ?>

      </td>
    </tr>
    <tr>
      <td style="background-color: Black; color: red">Total Profit</td>
      <td style="background-color: Black; color: red ">
        <?php

          $query= "SELECT SUM(order_value) as value FROM `buying`";
          $result = mysqli_query($conn, $query);

          $row= mysqli_fetch_object($result);
          $burchase=$row->value;
          $query1= "SELECT SUM(loss) as value FROM `selling`";
          $result1 = mysqli_query($conn, $query1);

          $row1= mysqli_fetch_object($result1);
          $loss=  $row1->value; 
          $code=$burchase+$loss;

          $query3= "SELECT SUM(wight) as value FROM `expensis`";

 $result3 = mysqli_query($conn, $query3);

          $row1= mysqli_fetch_object($result3);
          $wight=  $row1->value; 
         
          $query4= "SELECT SUM(order_value) as value FROM `expensis` ";

 $result4 = mysqli_query($conn, $query4);

          $row1= mysqli_fetch_object($result4);
          $wights=  $row1->value; 


           $query5= "SELECT SUM(Sellary) as value FROM `expensis` ";

 $result5 = mysqli_query($conn, $query5);

          $row1= mysqli_fetch_object($result5);
          $wightss=  $row1->value; 
                
          $query2= "SELECT SUM(order_value) as value FROM `selling`";
          $result2 = mysqli_query($conn, $query2);

          $row2= mysqli_fetch_object($result2);
          $sell= $row2->value;
          $Profit=$sell-$code-$wight-$wights-$wightss;
          echo $Profit;
        ?>

      </td>
    </tr>
  </tbody>
</table>

 
            </div>

          

          <!-- Content Row -->

          <div class="row">

  






<?php 

$connect = mysqli_connect("localhost", "root", "", "study");
$query = "SELECT * FROM account";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ year:'".$row["year"]."', profit:".$row["profit"].", purchase:".$row["purchase"].", sale:".$row["sale"]."}, ";
}
$chart_data = substr($chart_data, 0, -2);
?>
 
 
<!DOCTYPE html>
<html>
 <head>
  <title>Progress </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Progress graph </h2>
   <h3 align="center">Progress Graph in Your Poultry Form</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>
 
<script>
Morris.Bar({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:['profit', 'purchase', 'sale'],
 labels:['Profit', 'Purchase', 'Sale'],
 hideHover:'auto',
 stacked:true
});
</script>




          </div>

    
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/chart-area-demo.js"></script>
  <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>
