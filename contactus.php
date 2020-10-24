<?php  
 //home.php  
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
 

<div class="row" >

<div class="offset-2 col-md-8"  >




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


 $query="SELECT * FROM contect limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)


{
     
   ?>
       <h2>  Contact_us Records                 </h2>


     
         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
      
      <th scope="col">  Name</th>
      <th scope="col"> Email</th>
      <th scope="col"> Address</th>
      <th scope="col"> Phoneno</th>
     <th scope="col">  Message</th> 
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

         <td>"  .$result['address']. "</td>
           <td>"  .$result['phoneno']. "</td>
        <td>"  .$result['message']. "</td>
     
       


  </tr>";
}
 }

?>

</div>
</table>
  
<?php


$query="SELECT * FROM contect   ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="contactus.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="contactus.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="contactus.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>







</div>










 </div>







</tbody>
</div>
</div>
</table>
</body>




<?php require_once('vip/footer.php')?>


