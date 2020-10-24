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
  


<div style="background-color:    ;">

 <form id="form" action="" method="GET">

<input type="text" placeholder ="vname:" name="vname"  value="<?php echo $_GET['vname']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="vaccineno:" name="vaccineno" value="<?php echo $_GET['vaccineno']; ?>" / >
 <br>
 <br>
 <input type="text"  placeholder="price:" name="price" value="<?php echo $_GET['price']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="date:" name="date" value="<?php echo $_GET['date']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="routine:" name="routine" value="<?php echo $_GET['routine']; ?>"/ >
  <br>
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>


</div>









<?php
include("connection.php");
error_reporting(0);
 $_GET['vname'];
 $_GET['vaccineno'];

  $_GET['price'];
 $_GET['date'];
 $_GET['routine'];


?>


<html>
<head>
	<title></title>
</head>
<body>
 

  <?php
       
         {
       if($_GET['submit'])
        $vname =$_GET['vname'];
        $vaccineno =$_GET['vaccineno'];
        $price=$_GET['price'];
        $date =$_GET['date'];
        $routine =$_GET['routine'];
       


        $query="UPDATE vaccine SET ROUTINE='$routine' , VNAME='$vname' ,PRICE='$price' WHERE VACCINENO='$vaccineno' ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "successfull. <a href='vaccine.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>








</body>
</html>