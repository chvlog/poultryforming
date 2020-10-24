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
	<h3 style="text-align: center;">Doctors  Records</h3>
</div>






<div class="row" style="background-color:; width:1280px;">

    <div  class="col-md-4 offset-1 " >
       <form id="form" action="" method="POST">







  <div class="form-row">
   
    <div class="col">
      <label for="inputAddress"> Name</label>
      <input type="text"     placeholder=" Name..." name="name" class="form-control is-valid" id="validationServer01" required>
    </div>
    <div class="col">
      <label for="inputAddress">Email</label>
      <input type="text"      placeholder="Email..." name="email" class="form-control is-valid" id="validationServer01" required>
    </div>
  </div>















  <div class="form-group">
    <label for="inputAddress">Doctor Fees</label>
   <input type="text"      placeholder="Doctor Fees:" name="fees" class="form-control is-valid" id="validationServer01" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
     <input type="text"     placeholder="Address:" name="address" class="form-control is-valid" id="validationServer01" required>
  </div>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Eduction</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Eduction" id="gridRadios1" value="BSE" checked>
          <label class="form-check-label" for="gridRadios1">
            BSE
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="Eduction" id="gridRadios2" value="MSE">
          <label class="form-check-label" for="gridRadios2">
          MSE
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="Eduction" id="gridRadios2" value="MSE">
          <label class="form-check-label" for="gridRadios2">
          Other
          </label>
        </div>
        </div>
      </div>
           </fieldset>
  <div class="form-group row">
  
<legend class="col-form-label col-sm-2 pt-0">Work Routine</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="workr" id="gridRadios1" value="Daily" checked>
          <label class="form-check-label" for="gridRadios1">
            Daily
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="workr" id="gridRadios2" value="Weekle">
          <label class="form-check-label" for="gridRadios2">
          Weekle
          </label>
        </div>

          </div>
        </div>





  <button type="submit"  name="submit" class="btn btn-primary" background-color:"";>Submitted</button>
</form>

   
  </div>


  

<?php
 if(isset($_POST['submit']))

       {
        $name =$_POST['name'];
        $email =$_POST['email'];
        $fees=$_POST['fees'];
        $address=$_POST['address'];

         $workr=$_POST['workr'];

        $Eduction=$_POST['Eduction'];
        
        

        $query="insert into doctor (name,email,fees,address,Eduction,workr)   value ('$name','$email','$fees','$address','$Eduction','$workr')";
        $run=mysqli_query($conn,$query);
       }
     
        
       ?>



<div class="col-md-7">




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


 $query="SELECT * FROM doctor limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)



{
     
   ?>




       <h2>  Doctors List                 </h2>


         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
      
      <th scope="col"> Name...</th>
      <th scope="col"> Email</th>
      <th scope="col"> Fees</th>
      <th scope="col"> Address</th>
     <th scope="col">  Eduction</th>
     <th scope="col">  workr</th>
      <th colspan="2"  scope="col"  > operation</th>
    
    </tr>
</div>
 
  </thead>
  <tbody>

    
   <?php


while($result  = mysqli_fetch_assoc($data))

     {
       
       echo"<tr>
          

       <td>"  .$result['name']. "</td>
         
        <td>"  .$result['email']. "</td>

         <td>"  .$result['fees']. "</td>
                  <td>"  .$result['address']. "</td>
           <td>"  .$result['Eduction']. "</td>
        <td>"  .$result['workr']. "</td>
       
     
        <td>  <a href='EEE.php? name=$result[name]& email=$result[email]&fees=$result[fees]&address=$result[address]&Eduction=$result[Eduction]&workr=$result[workr]' > Edit</a> </td>

                <td><a href='Doctors.php?name=$result[name]' > Delete </a></td>
  


  </tr>";
}
 
}
?>
</div> 
</div>
</table>
  


<?php


$query="SELECT * FROM doctor   ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="Doctors.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="Doctors.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="Doctors.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>









</div>
</div>
  


  <?php
       
         
          
   
   $name =$_GET['name'];
       

                
       

       
       
        $query="DELETE FROM doctor WHERE name='$name'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:Doctors.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>





<?php require_once('vip/footer.php')?>

</body>
</html>