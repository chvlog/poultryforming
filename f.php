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
  



<div class="row" style="background-color:; width:1280px;">


    <div  class="col-md-4 offset-1 " >
<h1>Update Record</h1>
 <form id="form" action="" method="GET">

<input type="text" placeholder ="feedname" name="feedname"  value="<?php echo $_GET['feedname']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="feedno" name="feedno" value="<?php echo $_GET['feedno']; ?>" / >
 <br>
 <br>
 <input type="date"  placeholder="date" name="date" value="<?php echo $_GET['date']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="price" name="price" value="<?php echo $_GET['price']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="spr" name="spr" value="<?php echo $_GET['spr']; ?>"/ >
  <br>
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>










<?php
include("connection.php");
error_reporting(0);
 $_GET['feedname'];
 $_GET['feedno'];

  $_GET['date'];
 $_GET['price'];
 $_GET['spr'];


?>


<html>
<head>
	<title></title>
</head>
<body>
 

  <?php
       
         {
       if($_GET['submit'])
        $feedname =$_GET['feedname'];
        $feedno =$_GET['feedno'];
        $date=$_GET['date'];
        $price =$_GET['price'];
        $spr =$_GET['spr'];
       


        $query="UPDATE feeds SET FEEDNAME='$feedname' , FEEDNO='$feedno' ,PRICE='$price' ,spr='$spr' WHERE DATE='$date' ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "Successfull. <a href='feeds.php'>click here</a>";




        }
        else{

                 echo "not successfull";

        }
    
     }
        ?>



</div>

</div>


</body>
</html>