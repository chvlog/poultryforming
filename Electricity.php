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
	<h3 style="text-align: center;">Electricity</h3>
</div>






<div class="row" style="background-color:; width:1280px;">


    <div  class="col-md-4 offset-1 " >
      <form id="form" action="" method="POST">
  <div class="form-row">
   <div class="col">
      <label for="inputAddress">Electricity Bill</label>
      <input type="text"      placeholder="Bill:" name="bill" class="form-control is-valid" id="validationServer01" required>
    </div>
    <div class="col">
      <label for="inputAddress">Units</label>
   <input type="text"     placeholder="Units:" name="unit" class="form-control is-valid" id="validationServer01" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress"> Date</label>
    <input type="date"      placeholder=" Date:" name="date" class="form-control is-valid" id="validationServer01" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2"> Use Units</label>
 <input type="text"      placeholder="using:" name="uses" class="form-control is-valid" id="validationServer01" required>
  </div>
 

      
    
          


  <button type="submit"  name="submit" class="btn btn-primary";  style="margin-left: 40%; ";>Submitted</button>
</form>
</div>
   



<?php
 if(isset($_POST['submit']))

       {
        $bill =$_POST['bill'];
        $unit =$_POST['unit'];
        $date=$_POST['date'];
        $uses=$_POST['uses'];
      


       
        $query="insert into electricitys (bill,unit,date,uses)   value ('$bill','$unit','$date','$uses')";
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


 $query="SELECT * FROM  electricitys limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)

{
     
   ?>
       <h2>  Electricitys Bill Record               </h2>


        
         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
     
      <th scope="col"> Bill</th>
      <th scope="col"> Units</th>
      <th scope="col"> Date</th>
      <th scope="col"> Uses</th>
     
       <th colspan="2"  scope="col"  > operation</th>
    </tr>

  </div>
  </thead>
  <tbody>

    
   <?php


while($result  = mysqli_fetch_assoc($data))

     {
     

      
       echo"<tr>
          

       <td>"  .$result['bill']. "</td>
         
        <td>"  .$result['unit']. "</td>

         <td>"  .$result['date']. "</td>
           <td>"  .$result['uses']. "</td>
       
        <td> <button class='btn btn-primary'> <a href='EEEE.php? bill=$result[bill]& unit=$result[unit]&date=$result[date]&uses=$result[uses]' style='color:white;'> Edit</a></button> </td>

                <td><button class='btn btn-danger'><a href='Electricity.php?bill=$result[bill]' style='color:white;' > Delete </a></button></td>
  


  </tr>";
}
 }

?>

</div>
</table>
  

<?php


$query="SELECT * FROM electricitys  ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="Electricity.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="Electricity.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="Electricity.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>






</div>










</div>




  <?php
       
         
          
   
   $bill =$_GET['bill'];
       

                
       

       
       
        $query="DELETE FROM electricitys WHERE bill='$bill'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:Electricity.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>










<?php require_once('vip/footer.php')?>
















</body>
</html>`-                   















