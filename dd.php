<?php  
  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  
 ?>  



<?php
include("connection.php");


?>
<head>
 
<style>
  





</style>

</head>

<body>
<?php require_once('vip/top.php')?>
  


<div style="background-color:">

 <form id="form" action="" method="GET">

<input type="text" placeholder ="Loss Poultry" name="losspoultry"  value="<?php echo $_GET['losspoultry']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Wight" name="wight" value="<?php echo $_GET['wight']; ?>" / >
 <br>
 <br>
 <input type="date"  placeholder="Date" name="date" value="<?php echo $_GET['date']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="price" name="price" value="<?php echo $_GET['price']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="reason" name="reason" value="<?php echo $_GET['reason']; ?>"/ >
  <br>
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>


</div>









<?php
include("connection.php");
error_reporting(0);
 $_GET['losspoultry'];
 $_GET['wight'];

  $_GET['date'];
 $_GET['price'];
 $_GET['reason'];


?>


<html>
<head>
  <title></title>
</head>
<body>
 

  <?php
       
         {
       if($_GET['submit'])
        $losspoultry =$_GET['losspoultry'];
        $wight =$_GET['wight'];
        $date=$_GET['date'];
        $price =$_GET['price'];
        $reason=$_GET['reason'];
       


        $query="UPDATE death SET LOSSPOULTRY='$losspoultry' , WIGHT='$wight' ,PRICE='$price' ,reason='$reason' WHERE DATE='$date' ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "successfull. <a href='death.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>








</body>
</html>