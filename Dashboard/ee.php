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

<input type="text" placeholder ="Feeds Name" name="order_customer_name"  value="<?php echo $_GET['order_customer_name']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Feeds Price" name="wight" value="<?php echo $_GET['wight']; ?>"/ >
 <br>
 <br>
 <input type="text"  placeholder="Vaccine Name" name="order_item" value="<?php echo $_GET['order_item']; ?>" / >
 <br>
 <br>
 <input type="text"  placeholder="Vaccine_Price" name="order_value" value="<?php echo $_GET['order_value']; ?>"/ >
 
 <br>
 <br>
 <input type="text"  placeholder="Emp Sellary" name="sellary" value="<?php echo $_GET['sellary']; ?>" / >
  <br>
 <br>
 <input type="text"  placeholder="Other Expensis" name="exp" value="<?php echo $_GET['exp']; ?>" / >
 
  <br>
 
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>










<?php
include("connection.php");
error_reporting(0);
 $_GET['order_customer_name'];
 $_GET['wight'];
 $_GET['order_item'];
$_GET['order_value'];
  $_GET['sellary'];
  
 $_GET['exp'];
 


?>


<html>
<head>
	<title></title>
</head>
<body>
 

  <?php
       
         {
       if($_GET['submit'])
        $order_customer_name =$_GET['order_customer_name'];
        $order_item =$_GET['order_item'];
        $sellary=$_GET['sellary'];
         $order_value=$_GET['order_value'];
        $price =$_GET['price'];
        $wight =$_GET['wight'];
       
  $exp =$_GET['exp'];

        $query="UPDATE expensis  SET ORDER_CUSTOMER_NAME='$order_customer_name' , ORDER_ITEM='$order_item' ,SELLARY='$sellary' ,ORDER_VALUE='$order_value' ,WIGHT='$wight',EXP='$exp' WHERE ORDER_CUSTOMER_NAME='$order_customer_name' ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "Successfull. <a href='e.php'>click here</a>";




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