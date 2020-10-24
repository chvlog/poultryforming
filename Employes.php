
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





<html>

<body>

<?php require_once('vip/top.php')?>


 <?php require_once('vip/navbar.php')?>
 





             <div class="jumbotron" style="background-image: url('pic/kk.PNG ');  ">
  <h3 style="text-align: center;">Employes  Records</h3>
</div>






<div class="row" style="background-color:; width:1280px;">


    <div  class="col-md-4 offset-1 " >
     <form id="form" action="" method="POST">
  
  

  <div class="form-row">
   
    <div class="col">
      <label for="inputAddress">Emp Name</label>
      <input type="text"     placeholder=" Name..." name="empname" class="form-control is-valid" id="validationServer01" required>
    </div>
    <div class="col">
      <label for="inputAddress">Phone No</label>
      <input type="text"   placeholder="Cell..." name="phoneno" class="form-control is-valid" id="validationServer01" required>
    </div>
  </div>











  <div class="form-group">
    <label for="inputAddress">Emp Sellary</label>
   <input type="text"      placeholder="Sellary..." name="sellary" class="form-control is-valid" id="validationServer01" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Address</label>
     <input type="text"     placeholder="Address..." name="address" class="form-control is-valid" id="validationServer01" required>
  </div>
 <fieldset class="form-group">
    <div class="row">
      <legend class="col-form-label col-sm-2 pt-0">Work Routine</legend>
      <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="workroutine" id="gridRadios1" value="6 Hours" checked>
          <label class="form-check-label" for="gridRadios1">
            6 hours
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="workroutine" id="gridRadios2" value="12 Hours">
          <label class="form-check-label" for="gridRadios2">
          12 hours
          </label>
        </div>
         <div class="form-check">
          <input class="form-check-input" type="radio" name="workroutine" id="gridRadios2" value="other">
          <label class="form-check-label" for="gridRadios2">
          Other
          </label>
        </div>
        </div>
        </div>
           </fieldset>

  
  <button type="submit"   name="submit" class="btn btn-primary " style=" background-color: ; margin-left: 40px;">Submitted</button>

</form>

   </div>


<?php
 if(isset($_POST['submit']))

       {
        $empname =$_POST['empname'];
        $phoneno =$_POST['phoneno'];
        $sellary=$_POST['sellary'];
        $address=$_POST['address'];

         $workroutine=$_POST['workroutine'];

        
        
        

        $query="insert into employes (empname,phoneno,sellary,address,workroutine)   value ('$empname','$phoneno','$sellary','$address','$workroutine')";
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


 $query="SELECT * FROM employes limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)



{
     
   ?>
       <h2>  Employes List                 </h2>


         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
     
      <th scope="col"> Emp-Name</th>
      <th scope="col"> Phone No</th>
      <th scope="col"> Sellary</th>
      <th scope="col"> Address </th>
     <th scope="col"> Work Routine</th>
       <th colspan="2"  scope="col"  > operation</th>
    </tr>

  </div>
  </thead>
  <tbody>

    
   <?php


while($result  = mysqli_fetch_assoc($data))

     {
     

      
       echo"<tr>
          

       <td>"  .$result['empname']. "</td>
         
        <td>"  .$result['phoneno']. "</td>

         <td>"  .$result['sellary']. "</td>
           <td>"  .$result['address']. "</td>
        <td>"  .$result['workroutine']. "</td>
     
        <td >  
        	<button class='btn btn-primary'><a href='EE.php? empname=$result[empname]& phoneno=$result[phoneno]&sellary=$result[sellary]&address=$result[address]&workroutine=$result[workroutine]' style='color:white;'> Edit</a></button>
         </td>

                <td>
                	<button class='btn btn-danger'><a href='Employes.php?empname=$result[empname]'style='color:white;' > Delete </a></button>
                </td>
  


  </tr>";
}
 }

?>

</div>
</table>
  

<?php


$query="SELECT * FROM employes   ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="Employes.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="Employes.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="Employes.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>




</div>








</div>




  <?php
       
         
          
   
   $empname =$_GET['empname'];
       

                
       

       
       
        $query="DELETE FROM  employes WHERE empname='$empname'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:Employes.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>










<?php require_once('vip/footer.php')?>
















</body>
</html>`-                   