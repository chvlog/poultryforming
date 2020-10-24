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
<body>


<?php require_once('vip/top.php')?>


 <?php require_once('vip/navbar.php')?>
 

 
 
             <div class="jumbotron" style="background-image: url('pic/kk.PNG ');  ">
	<h3 style="text-align: center;">Deaths</h3>
</div>




<div class="row" style="background-color:; width:1280px;">


    <div  class="col-md-4 offset-1 " >



      <form id="form" action="" method="POST">
  

   <div class="form-row">
   <div class="col">
      <label for="inputAddress">Loss Number</label>
      <input type="text"     placeholder="Loss Num." name="losspoultry" class="form-control is-valid" id="validationServer01" required>
    </div>
    <div class="col">
      <label for="inputAddress">Wight Of Loss</label>
   <input type="text"      placeholder="Wight" name="wight" class="form-control is-valid" id="validationServer01" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date</label>
    <input type="date"    placeholder="Date" name="date" class="form-control is-valid" id="validationServer01" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Price  Loss</label>
   <input type="text"      placeholder="Loss Price:" name="price" class="form-control is-valid" id="validationServer01" required>
  </div>
 <div class="form-group">
    <label for="inputAddress2">Reason Loss </label>
     <input type="text"      placeholder="Reason:" name="reason" class="form-control is-valid" id="validationServer01" required>
  </div>
 
       
  <button type="submit" name="submit" class="btn btn-primary" style="margin-left: 30% ">Submitted</button>
</form>
    </div>
 



<?php
 if(isset($_POST['submit']))

       {
        $losspoultry =$_POST['losspoultry'];
        $wight =$_POST['wight'];
        $date=$_POST['date'];
        $price=$_POST['price'];
        $reason=$_POST['reason'];


       
        $query="insert into death (losspoultry,wight,date,price,reason)   value ('$losspoultry','$wight','$date','$price','$reason')";
        $run=mysqli_query($conn,$query);
       }
     
        
       ?>


















<div class="col-md-7" >


<?php


 error_reporting(0);
 $limit= 4;


if(isset($_GET['page'])){
 $page= $_GET['page'];
}
else{

$page=1;
}

 $offset= ($page-1)*$limit;


 $query="SELECT * FROM death limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)

{
     
   ?>
       <h2>  Deaths Records               </h2>


         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
     
      <th scope="col"> Loss Num</th>
      <th scope="col"> Wight</th>
      <th scope="col"> Date</th>
      <th scope="col"> Price </th>
     <th scope="col"> Reason</th>
       <th colspan="2"  scope="col"  > operation</th>
    </tr>

  </div>
  </thead>
  <tbody>

    
   <?php


while($result  = mysqli_fetch_assoc($data))

     {
     

      
       echo"<tr>
          

       <td>"  .$result['losspoultry']. "</td>
         
        <td>"  .$result['wight']. "</td>

         <td>"  .$result['date']. "</td>
           <td>"  .$result['price']. "</td>
        <td>"  .$result['reason']. "</td>
     
        <td> <button class='btn btn-primary'> <a href='dd.php? losspoultry=$result[losspoultry]& wight=$result[wight]&date=$result[date]&price=$result[price]&reason=$result[reason]' style='color:white;'> Edit</a> </button> </td>

                <td><button class='btn btn-danger'><a href='death.php?losspoultry=$result[losspoultry]' style='color:white;'> Delete </a></button></td>
  


  </tr>";
}
 }

?>

</div>
</table>
  
 

<?php


$query="SELECT * FROM  death  ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="death.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="death.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="death.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>





</div>










</div>




  <?php
       
         
          
   
   $losspoultry =$_GET['losspoultry'];
       

                
       

       
       
        $query="DELETE FROM  death WHERE losspoultry='$losspoultry'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:death.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>










<?php require_once('vip/footer.php')?>

































</body>
</html>