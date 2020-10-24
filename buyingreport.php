<?php  
  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  
 include("connection.php");

 if(isset($_POST['submit']))

       {
        $order_customer_name =$_POST['order_customer_name'];
        $order_item =$_POST['order_item'];
        $wight =$_POST['wight'];
        $order_date=$_POST['order_date'];
        $order_value=$_POST['order_value'];
        $cgID=$_POST['cgID'];
         $featureID=$_POST['featureID'];
       
        $query="insert into buying (order_customer_name,order_item,wight,order_date,order_value,cgID,featureID)   value ('$order_customer_name','$order_item','$wight','$order_date','$order_value','$cgID','$featureID')";
     
     
      $run=mysqli_query($conn,$query);
}
       ?>

<html>
 <head>
  <title>Reports Chicken</title>
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
  <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
  <style>
   body
   {
    margin:0;
    padding:0;
    background-color:#f1f1f1;
   }
   .box
   {
    width:1270px;
    padding:20px;
    background-color:#fff;
    border:1px solid #ccc;
    border-radius:5px;
    margin-top:25px;
   }
  </style>
  

 </head>
 <body>
  <div class="container box" class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" ">
   <h1 align="center" >Chicken Buying Reports</h1>
   <br />
   <div class="table-responsive" >
    <br />
    <div class="row" >
     <div class="input-daterange">
      <div class="col-md-4">
        
       <input  type="text" name="start_date" id="start_date" class="form-control" placeholder="Start Date" />

      </div>
      <div class="col-md-4">
       <input type="text" name="end_date" id="end_date" class="form-control" placeholder="End Date" />
      </div>      
     </div>
     
     <div class="col-md-4">
      <input type="button" name="search" id="search" value="GENERATE REPORT"  class="btn btn-primary" />
      <button type="button" class="btn btn-danger"><a href="buying.php" style="color: white;" >Cancel</a>
      </button>
    <hr style="color: red">
         <button type="button" class="btn btn-danger" style="width: 100px;"><a href="btotal.php" style="color: white;" >View_Total</a></button>
     </div>
    </div>
    <br />
    <table id="order_data" class="table table-hover table-striped  " >
     <thead>
      <tr>
       <th> ID</th>
       <th>Company Name</th>
       <th>Buying Chicken </th>
       <th>Price</th>
       <th>Date</th>
       <th>Wight</th>

      </tr>
     </thead>
    </table>
    
   </div>
  </div>
 </body>
</html>


<script type="text/javascript" language="javascript" >
$(document).ready(function(){
 
 $('.input-daterange').datepicker({
  todayBtn:'linked',
  format: "yyyy-mm-dd",
  autoclose: true
 });

 fetch_data('no');

 function fetch_data(is_date_search, start_date='', end_date='')
 {
  var dataTable = $('#order_data').DataTable({
   "processing" : true,
   "serverSide" : true,
   "order" : [],
   "ajax" : {
    url:"fatch.php",
    type:"POST",
    data:{
     is_date_search:is_date_search, start_date:start_date, end_date:end_date
    }
   }
  });
 }

 $('#search').click(function(){
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  if(start_date != '' && end_date !='')
  {
   $('#order_data').DataTable().destroy();
   fetch_data('yes', start_date, end_date);
  }
  else
  {
   alert("Both Date is Required");
  }
 }); 
 
});
</script>
