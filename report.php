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


<div class="col-md-8" style="margin-left: 190px;">
<hr>
 <h3> <p>  Choose your Season  </p>             </h3>
<hr>

<form action="report.php" method="POST">
  


  <select name="cg" style="width: 20%; padding: 7px 7px;margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box; background-color:;">
   
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

 

 
 <select name="feature" style="width: 20%; padding: 7px 7px;margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; background-color:">
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

      <button type="button" class="btn btn-danger"><a href="home.php" style="color: white">Cancel</a>
  


<div>

</div>
</form>

</div>




<div class="row">
  <div class="offset-2 col-md-8">
    <table  class="table table-bordered table-striped" style="color: black; background-color:  #c4c4c4; border-radius: 10px ; ">
  
  <tbody>
    
   
 <tr>
<td>Total buying_Chicken</td>
 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

        $query= "SELECT SUM(order_item) as value FROM `buying` WHERE
               buying.cgID='$cg' 
 
               AND buying.featureID='$feature'";

      $result = mysqli_query($conn, $query);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

        

            
                
                  

                     
            
}
?></td>
</tr>

</tr>
<tr>
  <td>Total No of Saled_Chicken</td>
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

</tr>

<tr>
<td>Total Buying_Chicken Price</td>
 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

            $query2= "SELECT SUM(order_value) as value FROM `buying` WHERE
               buying.cgID='$cg' 
 
               AND buying.featureID='$feature'";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            
}
?></td>
</tr>
<tr>
  <td>Total Selling_Chicken Price</td>


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

</tr>
<tr>
  <td>Total Loss_Chicken Price</td>

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
</tr>
<tr>
  <td>Total Feeds Price</td>

 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

          $query1= "SELECT SUM(wight) as value FROM `expensis` WHERE
               expensis.cgID='$cg' 
 
               AND expensis.featureID='$feature'";
               
      $result = mysqli_query($conn, $query1);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            
}
?></td>
</tr>
<tr>
  <td>Total Vaccine Price</td>


 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

            $query2= "SELECT SUM(order_value) as value FROM `expensis` WHERE
               expensis.cgID='$cg' 
 
               AND expensis.featureID='$feature'";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            
}
?></td>

</tr>
<tr>
  <td>Total Sellary Of Employess</td>


 <td><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

            $query2= "SELECT SUM(Sellary) as value FROM `expensis` WHERE
               expensis.cgID='$cg' 
 
               AND expensis.featureID='$feature'";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            
}
?></td>

</tr>
<tr>
  <td style="background-color: Black; color: white">Loss Poultry</td>
 <td style="background-color: Black; color: white"><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

        $query= "SELECT SUM(order_item) as value FROM `buying` WHERE
               buying.cgID='$cg' 
 
               AND buying.featureID='$feature'";
     $result = mysqli_query($conn, $query);

          $row= mysqli_fetch_object($result);
          $burchase=$row->value;
    $query1= "SELECT SUM(order_item) as value FROM `selling` WHERE
               selling.cgID='$cg' 
 
               AND selling.featureID='$feature'";

$result1 = mysqli_query($conn, $query1);

          $row1= mysqli_fetch_object($result1);
          $loss=  $row1->value; 
          $code=$burchase-$loss;
          echo $code ;
            
                
                  

                     
            
}
?></td>
</tr>
<tr>
  <td style="background-color: Black; color: white">Total Profit</td>

 <td style="background-color: Black; color: white"><?php
               if(isset($_POST['submit']))
               {
             
      $cg= $_POST['cg'];
         $feature =$_POST ['feature'];     
              

     

        $query= "SELECT SUM(order_value) as value FROM `buying` WHERE
               buying.cgID='$cg' 
 
               AND buying.featureID='$feature'";
      $result = mysqli_query($conn, $query);

          $row= mysqli_fetch_object($result);
          $burchase=$row->value;
    $query1= "SELECT SUM(loss) as value FROM `selling` WHERE
               selling.cgID='$cg' 
 
               AND selling.featureID='$feature'";

 $result1 = mysqli_query($conn, $query1);

          $row1= mysqli_fetch_object($result1);
          $loss=  $row1->value; 
          $code=$burchase+$loss;

          $query3= "SELECT SUM(wight) as value FROM `expensis` WHERE
               expensis.cgID='$cg' 
 
               AND expensis.featureID='$feature'";

 $result3 = mysqli_query($conn, $query3);

          $row1= mysqli_fetch_object($result3);
          $wight=  $row1->value; 
         
          $query4= "SELECT SUM(order_value) as value FROM `expensis` WHERE
               expensis.cgID='$cg' 
 
               AND expensis.featureID='$feature'";

 $result4 = mysqli_query($conn, $query4);

          $row1= mysqli_fetch_object($result4);
          $wights=  $row1->value; 


           $query5= "SELECT SUM(Sellary) as value FROM `expensis` WHERE
               expensis.cgID='$cg' 
 
               AND expensis.featureID='$feature'";

 $result5 = mysqli_query($conn, $query5);

          $row1= mysqli_fetch_object($result5);
          $wightss=  $row1->value; 
                
      $query2= "SELECT SUM(order_value) as value FROM `selling` WHERE
               selling.cgID='$cg' 
 
               AND selling.featureID='$feature'";           
 $result2 = mysqli_query($conn, $query2);

          $row2= mysqli_fetch_object($result2);
          $sell= $row2->value;
          $Profit=$sell-$code-$wight-$wights-$wightss;
          echo $Profit;
                     
            
}
?></td>
</tr>
<tr>
  <td></td>



</tbody>
</table>

  </div>
</div>

</form>

</div>





<hr>




















<h1 style="text-align: center;">Poultry Farming Reports</h1>
<div class="row">
  <div class="offset-2 col-md-8">
    <table  class="table table-bordered table-striped" style="color: white; background-color: #77773c; border-radius: 10px ; ">
  
  <tbody>
    
    <tr>
      <td>Total buying_Chicken</td>
      <td><?php
       $query= "SELECT SUM(order_item) as value FROM `buying`";
        $result = mysqli_query($conn, $query);

        $row= mysqli_fetch_object($result);
        echo $row->value;
  
    ?></td>
    </tr>
    <tr>
      <td>Total Buying_Chicken Price</td>
      <td><?php 

      $query= "SELECT SUM(order_value) as value FROM `buying`";
      $result = mysqli_query($conn, $query);

      $row= mysqli_fetch_object($result);
      echo $row->value;

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
  <td>Total Feeds Price</td>

 <td><?php
             
             
    

     

          $query1= "SELECT SUM(wight) as value FROM `expensis` ";
               
      $result = mysqli_query($conn, $query1);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            

?></td>
</tr>
<tr>
  <td>Total Vaccine Price</td>


 <td><?php
              
             
      

     

            $query2= "SELECT SUM(order_value) as value FROM `expensis` ";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            

?></td>

</tr>
<tr>
  <td>Total Sellary Of Employess</td>


 <td><?php

     

            $query2= "SELECT SUM(Sellary) as value FROM `expensis`";
               
      $result = mysqli_query($conn, $query2);

      $row= mysqli_fetch_object($result);
      echo  $row->value;

            
                
                  

                     
            

?></td>

</tr>
    <tr>
      <td style="background-color: Black;  color: red">Loss Poultry</td>
      <td style="background-color: Black; color: red">
        <?php

          $query= "SELECT SUM(order_item) as value FROM `buying`";
          $result = mysqli_query($conn, $query);

          $row= mysqli_fetch_object($result);
          $burchase=$row->value;
          $query1= "SELECT SUM(order_item) as value FROM `selling`";
          $result1 = mysqli_query($conn, $query1);

          $row1= mysqli_fetch_object($result1);
          $loss=  $row1->value; 
          $code=$burchase-$loss;
          echo $code ;
        ?>

      </td>
    </tr>
    <tr>
      <td style="background-color: Black; color: red">Total Profit</td>
      <td style="background-color: Black; color: red ">
        <?php

          $query= "SELECT SUM(order_value) as value FROM `buying`";
          $result = mysqli_query($conn, $query);

          $row= mysqli_fetch_object($result);
          $burchase=$row->value;
          $query1= "SELECT SUM(loss) as value FROM `selling`";
          $result1 = mysqli_query($conn, $query1);

          $row1= mysqli_fetch_object($result1);
          $loss=  $row1->value; 
          $code=$burchase+$loss;

          $query3= "SELECT SUM(wight) as value FROM `expensis`";

 $result3 = mysqli_query($conn, $query3);

          $row1= mysqli_fetch_object($result3);
          $wight=  $row1->value; 
         
          $query4= "SELECT SUM(order_value) as value FROM `expensis` ";

 $result4 = mysqli_query($conn, $query4);

          $row1= mysqli_fetch_object($result4);
          $wights=  $row1->value; 


           $query5= "SELECT SUM(Sellary) as value FROM `expensis` ";

 $result5 = mysqli_query($conn, $query5);

          $row1= mysqli_fetch_object($result5);
          $wightss=  $row1->value; 
                
          $query2= "SELECT SUM(order_value) as value FROM `selling`";
          $result2 = mysqli_query($conn, $query2);

          $row2= mysqli_fetch_object($result2);
          $sell= $row2->value;
          $Profit=$sell-$code-$wight-$wights-$wightss;
          echo $Profit;
        ?>

      </td>
    </tr>
  </tbody>
</table>

  </div>
</div>


<?php require_once('vip/footer.php')?>


