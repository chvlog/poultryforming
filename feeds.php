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
	<h3 style="text-align: center;">Feeds </h3>
</div>



<div class="row" style="background-color:; width:1280px;">


    <div  class="col-md-4 offset-1 " >
  
     <form id="form" action="" method="POST">
  <div class="form-row">
   <div class="col">
      <label for="inputAddress">Feeds Name</label>
      <input type="text"     placeholder="Feeds Name:" name="feedname" class="form-control is-valid" id="validationServer01" required>
    </div>
    <div class="col">
      <label for="inputAddress">Totalt Feeds  Num</label>
   <input type="text"      placeholder="Feeds Num:" name="feedno" class="form-control is-valid" id="validationServer01" required>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Date Buying</label>
    <input type="date"     placeholder="Buying Date:" name="date" class="form-control is-valid" id="validationServer01" required>
  </div>
  <div class="form-group">
    <label for="inputAddress2">Price</label>
 <input type="text"      placeholder="Price:" name="price" class="form-control is-valid" id="validationServer01" required>
  </div>
 <fieldset class="form-group">
    
<label for="inputAddress2">Spr</label>
 <input type="text"     placeholder="Spr:" name="spr" class="form-control is-valid" id="validationServer01" required>

<br>
          
     
  <button type="submit"  name="submit" class="btn btn-primary";  style="margin-left: 30%;">Submitted</button>
</form>

    </div>
  




<?php
 if(isset($_POST['submit']))

       {
        $feedname =$_POST['feedname'];
        $feedno =$_POST['feedno'];
        $date=$_POST['date'];
        $price=$_POST['price'];
        $spr=$_POST['spr'];


       
        $query="insert into feeds (feedname,feedno,date,price,spr)   value ('$feedname','$feedno','$date','$price','$spr')";
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


 $query="SELECT * FROM feeds limit {$offset} , {$limit}";
$data = mysqli_query($conn,$query);
if(mysqli_num_rows($data)>0)

{
     
   ?>
       <h2>  Feeds Records                </h2>


         <table class="table table-striped table-hover">
  <thead>
  

         
    <tr>
     
      <th scope="col"> Feeds-Name</th>
      <th scope="col"> Feeds No</th>
      <th scope="col"> Date</th>
      <th scope="col"> Price </th>
     <th scope="col"> SPR</th>
       <th colspan="2"  scope="col"  > operation</th>
    </tr>

  </div>
  </thead>
  <tbody>

    
   <?php


while($result  = mysqli_fetch_assoc($data))

     {
     

      
       echo"<tr>
          

       <td>"  .$result['feedname']. "</td>
         
        <td>"  .$result['feedno']. "</td>

         <td>"  .$result['date']. "</td>
           <td>"  .$result['price']. "</td>
        <td>"  .$result['spr']. "</td>
     
        <td>  <button class='btn btn-primary'> <a href='f.php? feedname=$result[feedname]& feedno=$result[feedno]&date=$result[date]&price=$result[price]&spr=$result[spr]' style='color:white;'> Edit</a> </button></td>

                <td> <button class='btn btn-danger'> <a href='feeds.php?feedname=$result[feedname]' style='color:white;' > Delete </a> </button></td>
  


  </tr>";
}
 }

?>

</div>
</table>
  

<?php


$query="SELECT * FROM feeds   ";
$data = mysqli_query($conn,$query);

if (mysqli_num_rows($data)>0) {
  $total=mysqli_num_rows($data);
 
  $pag=ceil($total/$limit);
    echo  '<ul class="pagination  ">';
   if ($page > 1) {
     echo '<li class="btn btn-danger"><a  href="feeds.php?page='.($page - 1).'">Prev</a></li>';
   }
  

  for ($i=1; $i <= $pag ; $i++) { 

    if($i == $page){
            $active="active";



    }
    else{

              $active="";

    }
    echo '<li  class="'.$active.'  btn btn-danger"><a href="feeds.php?page='.$i.'">'.$i.'</a></li>';
  }

   if ($total > $page) {
    
      echo   '<li class="btn btn-danger"><a  href="feeds.php?page='.($page + 1).'">Next</a></li>';
   }
  
  echo '</ul>';
}

?>




</div>










</div>




  <?php
       
         
          
   
   $feedname =$_GET['feedname'];
       

                
       

       
       
        $query="DELETE FROM  feeds WHERE feedname='$feedname'";
        $run=mysqli_query($conn,$query);

        if($run){

                         header("Location:feeds.php");



        }
        else{

                 echo "not successfull";

        }
    
     
        ?>










<?php require_once('vip/footer.php')?>

































</body>
</html>