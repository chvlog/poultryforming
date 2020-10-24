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

<input type="text" placeholder =" Name:" name="name"  value="<?php echo $_GET['name']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Email:" name="email" value="<?php echo $_GET['email']; ?>" / >
 <br>
 <br>
 <input type="text"  placeholder="Fees:" name="fees" value="<?php echo $_GET['fees']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="Address:" name="address" value="<?php echo $_GET['address']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="Eduction:" name="Eduction" value="<?php echo $_GET['Eduction']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="Work routine:" name="workr" value="<?php echo $_GET['workr']; ?>"/ >
  <br>
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>


</div>









<?php
include("connection.php");
error_reporting(0);
 $_GET['name'];
 $_GET['email'];

  $_GET['fees'];
  $_GET['Eduction'];
 $_GET['address'];
 $_GET['workr'];


?>

<html>
<head>
	<title></title>
</head>
<body>
 

  <?php
       
         {

       if($_GET['submit'])
        $name =$_GET['name'];
        $email =$_GET['email'];
        $fees=$_GET['fees'];
        $Eduction=$_GET['Eduction'];
        $address =$_GET['address'];
        $workr =$_GET['workr'];
       


        $query="UPDATE doctor SET   NAME='$name' , EMAIL='$email' ,FEES='$fees' , EDUCTION=' $Eduction' ,ADDRESS=' $address' WHERE WORKR='$workr'  ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "successfull. <a href='Doctors.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>








</body>
</html>