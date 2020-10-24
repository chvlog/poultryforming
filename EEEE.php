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
  


<div style="background-color: ">

 <form id="form" action="" method="GET">

<input type="text" placeholder =" Bill:" name="bill"  value="<?php echo $_GET['bill']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Units:" name="unit" value="<?php echo $_GET['unit']; ?>" / >
 <br>
 <br>
 <input type="date"  placeholder="Date:" name="date" value="<?php echo $_GET['date']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="Uses:" name="uses" value="<?php echo $_GET['uses']; ?>"/ >
  
  <br>
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>


</div>









<?php
include("connection.php");
error_reporting(0);
 $_GET['bill'];
 $_GET['unit'];

  $_GET['date'];
  $_GET['uses'];
 


?>

<html>
<head>
	<title></title>
</head>
<body>
 

  <?php
       
         {

       if($_GET['submit'])
        $bill =$_GET['bill'];
        $unit =$_GET['unit'];
        $date=$_GET['date'];
        $uses=$_GET['uses'];
       


        $query="UPDATE electricitys SET   BILL='$bill' , UNIT='$unit' ,USES='$uses' WHERE DATE='$date'  ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "successfull. <a href='electricity.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>








</body>
</html>