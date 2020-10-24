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
  <h3 style="text-align: center;">Selling Chicken</h3>
</div>


<div style="background-color: white;">

<div class="row" style="margin-top:-35px">


</div>
    <div class="col-md-4 offset-md-4" style="border-radius: 10px; padding: 10px; background-color:;">
      <form id="form" action="sellingreports.php" method="POST">
      <hr style="background-color:green;">
 <div class="form-group">
    <div class="form-row">
   <div class="col">
      <label for="inputAddress">Select_Chicken</label>

           <select name="cgID" style="width: 40%; margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;">
             <option>Choose</option>
      <option>1</option>
       
       </select>

     
    </div>
    <div class="col">
      <label for="inputAddress">Select_Season</label>
 

 <select name="featureID" style="width: 40%; margin: 8px 0;display: ;border: 1px solid #ccc;  border-radius: 4px; box-sizing: border-box;">
    <option>Choose</option>
      <option>1</option>
      <option>2</option>
       <option>3</option>
        <option>4</option>
         <option>5</option>
          <option>6</option>
      <option>7</option>
       <option>8</option>
        <option>9</option>
         <option>10</option>
         <option>11</option>
      <option>12</option>
      <option>13</option>
        <option>14</option>
         <option>15</option>
          <option>16</option>
      <option>17</option>
       <option>18</option>
        <option>19</option>
         <option>20</option>
  </select>

    </div>
  </div>


<hr style="background-color:green;">

    <label for="validationServer01">Buyer Name:</label>
 <input type="text"    placeholder="Name:" name="order_customer_name" class="form-control is-valid" id="validationServer01" required>
  </div>
 
      

   <div class="form-row">
   <div class="col">
   


  <div class="form-row">
   <div class="col">
      <label for="validationServer02">No of Chicken Saled</label>
      <input type="text"   placeholder="Enter Poultry :" name="order_item" class="form-control is-valid" id="validationServer02" required>
    </div>
    
    <div for="validationServer03">
      <label for="inputAddress2">Wight:</label>
 <input type="text"      placeholder="Wight:" name="wight" class="form-control is-valid" id="validationServer04" required>
    </div>
  </div>
 
  <div for="validationServer05">
    <label for="inputAddress">Selling Date</label>
    <input type="date"      placeholder="Buying Date:" name="order_date" class="form-control is-valid" id="validationServer05" required>
  </div>
  <div for="validationServer06">
    <label for="inputAddress2">Selling Price</label>
 <input type="text"     placeholder="B-Price:" name="order_value" class="form-control is-valid" id="validationServer06" required>
  </div>
 
      <div for="validationServer04">
    <label for="inputAddress">Loss Chicken Price</label>
  
  <input type="text"    placeholder=" Loss Poultry Price:" name="loss" class="form-control is-valid" id="validationServer03" required>
    
          
      </div>
  </div>
  <br>
   <button type="submit"  name="submit" class="btn btn-primary";  style="margin-left: 40%; ";>Submitted</button>
  
<span id="error_message" class="text-danger"></span> 

                     <span id="success_message" class="text-success"></span> 
  
</form>

    </div>
  </div>
</div>



























<?php require_once('vip/footer.php')?>














































</body>
</html>