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


 <?php require_once('vip/navbar.php')?>
 


 
             <div class="jumbotron" style="background-image: url('pic/kk.PNG ');  ">
	<h3 style="text-align: center;">Vaccine</h3>
</div>






















<div class="row" style="background-color:; width:1280px;">


    <div  class="col-md-4 offset-1 " >

       <form id="form" action="" method="POST">
  <div class="form-row">
   
    <div class="col">
      <label for="inputAddress">Vaccine Name</label>
      <input type="text"      placeholder="Vaccine Name :" name="vname" class="form-control is-valid" id="validationServer01" required>
    </div>
    <div class="col">
      <label for="inputAddress">Vaccine No</label>
      <input type="text"     placeholder="Vaccine No:" name="vaccineno" class="form-control is-valid" id="validationServer01" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Vaccine Price</label>
    <input type="text"      placeholder="Vaccine Price :" name="price" class="form-control is-valid" id="validationServer01" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Vaccine Date </label>
    <input type="date"     placeholder="Vaccine Date:" name="date" class="form-control is-valid" id="validationServer01" required>
  </div>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0" >Routine</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="routine" id="" value="Morning" checked>
          <label class="form-check-label" for="gridRadios1">
            Morning
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="routine" id="" value="Afternoun">
          <label class="form-check-label" for="gridRadios2">
           Afternoun
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="routine" id="" value="Evining">
          <label class="form-check-label" for="gridRadios2">
           Evining
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="routine" id="" value="Night">
          <label class="form-check-label" for="gridRadios2">
           Night
          </label>
        </div>
        </div>
    
  </div>
  <button type="submit"   name="submit" class="btn btn-primary " style=" background-color:  #">Submitted</button>
</form>

    </div>
 













<?php


 if(isset($_POST['submit']))

       {
        $vname =$_POST['vname'];
        $vaccineno =$_POST['vaccineno'];
        $price=$_POST['price'];
        $date=$_POST['date'];
      
          $routine=$_POST['routine'];

       
        $query="insert into vaccine (vname,vaccineno,price,date,routine)   value ('$vname','$vaccineno','$price','$date','$routine')";
        $run=mysqli_query($conn,$query);
       }
     
        




?>




<div class="col-md-7" >




<?php


 error_reporting(0);
 $limit= 5;


if(isset($_GET['page'])){
 $page= $_GET['page'];
}
else{

$page=1;
}

 $offset= ($page-1)*$limit;


 $query="SELECT * FROM vaccine limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)


{
     
   ?>
       <h2>  Vaccine Record                 </h2>


     
         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
      
      <th scope="col"> Vaccine Name</th>
      <th scope="col"> Vaccine No</th>
      <th scope="col"> Price</th>
      <th scope="col"> Date</th>
     <th scope="col">  Routine</th>
       <th colspan="2"  scope="col"  > operation</th>
    </tr>

  </div>
  </thead>
  <tbody>

    
   <?php


while($result  = mysqli_fetch_assoc($data))

     {
       
       echo"<tr>
          

       <td>"  .$result['vname']. "</td>
         
        <td>"  .$result['vaccineno']. "</td>

         <td>"  .$result['price']. "</td>
           <td>"  .$result['date']. "</td>
        <td>"  .$result['routine']. "</td>
     
        <td>  <button class='btn btn-primary'> <a href='E.php? vname=$result[vname]& vaccineno=$result[vaccineno]&price=$result[price]&date=$result[date]&routine=$result[routine]'style='color:white;' > Edit</a> </button> </td>

                <td>  <button class='btn btn-danger'><a href='vaccine.php?vaccineno=$result[vaccineno]'style='color:white;' > Delete </a></button></td>
  


  </tr>";
}
 }

?>

</div>
</table>
  
<?php


$query="SELECT * FROM vaccine   ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="vaccine.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="vaccine.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="vaccine.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>







</div>










 </div>




  <?php
       
         
          
   
   $vaccineno =$_GET['vaccineno'];
       

                
       

       
       
        $query="DELETE FROM vaccine WHERE vaccineno='$vaccineno'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:vaccine.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>








<?php require_once('vip/footer.php')?>


























</body>
</html>