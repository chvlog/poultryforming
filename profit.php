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
	<h3 style="text-align: center;">Add Progress</h3>
</div>





<div style="background-color: white;">

<div class="row"  style="margin-top:-30px">
    <div class="col-md-4 offset-md-4" style="border-radius: 10px; padding: 10px; background-color: ;">
     <form id="form" action="graph.php" method="POST">



<hr>










  <div class="form-row">
   <div class="col">
      <label for="validationServer01">Purchase</label>
      <input type="text"     placeholder="Purchase Chicken..." name="purchase" class="form-control is-valid" id="validationServer01" required>
    </div>
   <div class="col">
      <label for="validationServer02">Salled Chicken</label>
            <input type="text"     placeholder="Selling Chicken..." name="sale" class="form-control is-valid" id="validationServer02" required>
    </div>
  </div>

   <div class="form-group">
    <label for="validationServer03">Choose_Season</label>
     <select name="year" style="width: 100%; margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box; class="form-control is-valid" id="validationServer03" required    ">
     <option>Choose</option>
      <option>Season_1</option>
      <option>Season_2</option>
       <option>Season_3</option>
        <option>Season_4</option>
         <option>Season_5</option>
          <option>Season_6</option>
      <option>Season_7</option>
       <option>Season_8</option>
        <option>Season_9</option>
         <option>Season_10</option>
         <option>Season_11</option>
      <option>Season_12</option>
      <option>Season_13</option>
        <option>Season_14</option>
         <option>Season_15</option>
          <option>Season_16</option>
      <option>Season_17</option>
       <option>Season_18</option>
        <option>Season_19</option>
         <option>Season_20</option>
       </select>
  </div>

  
 
<div class="form-group">
    <label for="validationServer04">profit/Loss</label>
          
    <textarea  id="exampleFormControlTextarea1" rows="3" name="profit" class="form-control is-valid" id="validationServer04" required> 
</textarea>
  </div>
       </div>
  </div>
  <button type="submit"  name="submit" class="btn btn-primary";  style="margin-left: 40%; background-color:;";>Submitted</button>
</form>
    </div>
  </div>
</div>




<?php
 
        
       ?>
























<?php require_once('vip/footer.php')?>



</body>
</html>
















 


