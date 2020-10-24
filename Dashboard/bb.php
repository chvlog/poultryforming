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

<input type="text" placeholder ="Company Name" name="order_customer_name"  value="<?php echo $_GET['order_customer_name']; ?>" />
 <br>
 <br>
 <input type="text"  placeholder="Buying Chicken" name="order_item" value="<?php echo $_GET['order_item']; ?>" / >
 <br>
 <br>
 <input type="text"  placeholder="Price" name="order_value" value="<?php echo $_GET['order_value']; ?>"/ >
  <br>
 <br>
 <input type="text"  placeholder="wight" name="wight" value="<?php echo $_GET['wight']; ?>"/ >
  <br>
 
 <br>
  
  <input type="submit" value="update" name="submit"> 
          </form>










<?php
include("connection.php");
error_reporting(0);
 $_GET['order_customer_name'];
 $_GET['order_item'];

  $_GET['order_value'];
 $_GET['price'];
 $_GET['wight'];


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
        $order_value=$_GET['order_value'];
        $price =$_GET['price'];
        $wight =$_GET['wight'];
       


        $query="UPDATE buying SET ORDER_CUSTOMER_NAME='$order_customer_name' , ORDER_ITEM='$order_item' ,ORDER_VALUE='$order_value' ,WIGHT='$wight' WHERE ORDER_CUSTOMER_NAME='$order_customer_name' ";
             

           
          // $query="UPDATE  lossprofit SET LOSSNUM='$lossnum' , PRICE='$price' ,DATE='$date'  ";

        $run=mysqli_query($conn,$query);

        if($run){

                      echo "Successfull. <a href='b.php'>click here</a>";




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