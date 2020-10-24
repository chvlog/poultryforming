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

<input type="text" placeholder ="Emp Name:" name="empname"  value="<?php echo $_GET['empname']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Phone NO:" name="phoneno" value="<?php echo $_GET['phoneno']; ?>" / >
 <br>
 <br>
 <input type="text"  placeholder="Sellary:" name="sellary" value="<?php echo $_GET['sellary']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="Address:" name="address" value="<?php echo $_GET['address']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="Work routine:" name="workroutine" value="<?php echo $_GET['workroutine']; ?>"/ >
  <br>
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>


</div>









<?php
include("connection.php");
error_reporting(0);
 $_GET['empname'];
 $_GET['phoneno'];

  $_GET['sellary'];
 $_GET['address'];
 $_GET['workroutine'];


?>

<html>
<head>
	<title></title>
</head>
<body>
 

  <?php
       
         {

       if($_GET['submit'])
        $empname =$_GET['empname'];
        $phoneno =$_GET['phoneno'];
        $sellary=$_GET['sellary'];
        $address =$_GET['address'];
        $workroutine =$_GET['workroutine'];
       


        $query="UPDATE employes SET   EMPNAME='$empname' , SELLARY='$sellary' ,PHONENO='$phoneno' ,ADDRESS=' $address' WHERE WORKROUTINE='$workroutine'  ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "successfull. <a href='Employes.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>








</body>
</html>