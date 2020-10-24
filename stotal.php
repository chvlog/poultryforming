
<?php  
  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  
 ?>  



<?php require_once('vip/top.php')?>


 
 
<?php
include("connection.php");








?>


<div class="col-md-8" style="margin-left: 170px;">
<hr>
 <h3> <p>  Choose your Season  </p>             </h3>
<hr>

<form action="stotal.php" method="POST">
  


  <select name="cg" style="width: 20%; padding: 7px 7px;margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box; background-color:">
   
    <?php
              
              $query1= "SELECT * FROM cg";
              $result1= mysqli_query($conn,$query1);
                
                  
             

              while ($rows1= mysqli_fetch_array($result1)) {
                $cgID=$rows1['id'];
                $rowsData1=$rows1['cg'];

                ?>
                 <option value="<?php echo $cgID; ?>">   <?php   echo $rowsData1   ?>     </option>


                 <?php
              }


?>



</select>

 

 
 <select name="feature" style="width: 20%; padding: 7px 7px;margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box; background-color:">
<option>Choose</option>
            <?php
              
              $query2= "SELECT * FROM feature";
              $result2= mysqli_query($conn,$query2);
                
                  
             

              while ($rows2= mysqli_fetch_array($result2)) {
                $featureID=$rows2['id'];
                $rowsData2=$rows2['feature'];

                ?>
                 <option value="<?php echo $featureID; ?>">   <?php   echo $rowsData2   ?>     </option>


                 <?php
              }


?>


</select>




      <button type="submit" class="btn btn-primary " name="submit" value="submit" style="margin-left: 70px; background-color: ">GENERATE REPORT</button>

      <button type="button" class="btn btn-danger"><a href="sellingreports.php" style="color: white">Cancel</a>
  </button>
<div>

</div>
</form>







         <table class="table table-hover table-striped  " style="background-color: Black; color: white;">
  <thead>
 
    <tr style="background-color: Black">
     
     
      <th scope="col" style="color: red">Total No of Saled_Poultry</th>
 <th scope="col" style="color: red">Total Selling_Chicken Price</th>
      <th scope="col" style="color: red">Total Loss_Chicken Price</th>
    
    






    
           </div>
   </tr>
 

 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

        $query= "SELECT SUM(order_item) as value FROM `selling` WHERE
               selling.cgID='$cg' 
 
               AND selling.featureID='$feature'";

      $result = mysqli_query($conn, $query);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

        

            
                
                  

                     
            
}
?></td>




 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

            $query2= "SELECT SUM(order_value) as value FROM `selling` WHERE
               selling.cgID='$cg' 
 
               AND selling.featureID='$feature'";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            
}
?></td>



 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

          $query1= "SELECT SUM(loss) as value FROM `selling` WHERE
               selling.cgID='$cg' 
 
               AND selling.featureID='$feature'";
               
      $result = mysqli_query($conn, $query1);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            
}
?></td>







</table>
</form>

</div>






<br>





<hr style="background-color: red;">






<h1 style="text-align: center;">Total Selling_Chicken Reports</h1>
<div class="row">
  <div class="offset-2 col-md-8"  style="margin-left: 177px;">
     
    <table class="table"  style="color: white; background-color: black; border-radius: 10px ; " >
  
  <tbody>
     <tr>
      <td>Total No of Saled_Poultry</td>
      <td><?php 

      $query= "SELECT SUM(order_item) as value FROM `selling`";
      $result = mysqli_query($conn, $query);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

      ?></td>
    </tr>
      <tr>
      <td>Total Selling_Chicken Price</td>
      <td><?php

        $query= "SELECT SUM(order_value) as value FROM `selling`";
        $result = mysqli_query($conn, $query);

        $row= mysqli_fetch_object($result);
        echo  $row->value;

      ?></td>
    </tr>
    <tr>
      <td>Total Loss_Chicken Price</td>
      <td><?php
        $query= "SELECT SUM(loss) as value FROM `selling`";
        $result = mysqli_query($conn, $query);

        $row= mysqli_fetch_object($result);
        echo  $row->value;

      ?></td>
    </tr>
   
  </tbody>
</table>

  </div>
</div>


<?php require_once('vip/footer.php')?>

