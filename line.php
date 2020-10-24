
  <?php require_once('vip/top.php')?>


 

</div>

<?php  
  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 } 
  include("connection.php");
 if(isset($_POST['submit']))

       {
        $purchase =$_POST['purchase'];
         $sale=$_POST['sale'];
        $year =$_POST['year'];
       
        $profit=$_POST['profit'];
      

       
        $query="insert into account (purchase,sale,year,profit)   value ('$purchase','$sale','$year','$profit')";
        $run=mysqli_query($conn,$query);
       }
      
 ?>  


<div  class="row" style="background-color:">

<div class="card"  style= "  ; width: 950px; margin-left: 130px; align-items: center; padding: 10px; background-color:  ">
  <h5 class="card-header"></h5>
  <div class="card-body">
    <h3 class="card-title" style="color:black;">All Views Available</h3>
 <button type="button" class="btn btn-primary btn-sm"><a  href="line.php" style="color: white;">Line Views</a></button>
<button type="button" class="btn btn-secondary btn-sm"><a  href="area.php" style="color: white;">Area Views</a></button>
<button type="button" class="btn btn-danger"><a href="graph.php" style="color: white;">Back</a></button>
</div>

<div  class="row" style="background-color:">




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
Morris.Line({
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














