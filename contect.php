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









</head>
<?php require_once('vip/top.php')?>


 <?php require_once('vip/navbar.php')?>
 




 
             <div class="jumbotron" style="background-image: url('pic/kk.PNG ');  ">
	<h3 style="text-align: center;">Contacts_us</h3>
</div>

 <div class="map">
          <figure class="img_inner fleft">
            <iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
          </figure>
          <div style="margin-left: 350px; margin-top: -165px;">
             <h3>The Company Name<br> Poultry Forming</h3>
          <address>
          <dl>
            <dt>   86wb Multan Road,<br>
              176wb, D04 89GR. </dt>
            <dd><span>Freephone:</span>+923007727176</dd>
            <dd><span>Telephone:</span>+923008758478</dd>
            <dd><span>FAX:</span>+92065102705</dd>
            <dd>E-mail: <a href="#" class="link-1">mail@Ch.org</a></dd>
          </dl>
          </address>
          <address class="mb0">
          <dl>
            <dt> 176wb Ada Gulama Hussaian Place,<br>
              prove, 176 165 Fr garmora. </dt>
            <dd><span>Freephone:</span>+923006372186</dd>
            <dd><span>Telephone:</span>+923023613176</dd>
            <dd><span>FAX:</span>+923026537858</dd>
            <dd>E-mail: <a href="#" class="link-1">mail@Chlink.org</a></dd>
          </dl>
          </address>
        </div>
      </div>
</div>


</div>









<div class="row" style="margin-top: -35%; margin-left: 30%;">
    <div class="col-md-4 offset-md-4" style="background-color: #F5B7B1  ;border-radius: 30px; padding: ;">
     


 <form id="form" action="" method="POST" id="validate_form">



  <div class="form-row">
    <h2 style="margin-left: 100px;">Poultry Farming</h2>

<div class="col">
      <label  for="validationServer01">Name</label>
 <input type="text" class="form-control is-valid" id="validationServer01"   placeholder="Name:" name="name" required>

  
<label  for="validationServer02">Email</label>
       <input type="text" class="form-control is-valid" id="validationServer02" placeholder="Email:" name="email" required>


    </div>



  </div>
  <div class="form-group">
    <label  for="validationServer03">Address</label>
 <input type="text"  class="form-control is-valid" id="validationServer03" placeholder="Address:" name="address" required>

  </div>
  <div class="form-group">
    <label  for="validationServer04">Phone No</label>
    <input type="text" class="form-control is-valid" id="validationServer04"  placeholder="Phone No:" name="phoneno" required>

  </div>
 

 <div class="form-group">
    <label  for="validationServer05">Other Message</label>
   

    <textarea name="message"   class="form-control is-valid" id="validationServer05"  rows="3" placeholder="Enter Message" required></textarea>
  </div>




    </div>
  </div>
  <button type="submit"  name="submit"          class="btn btn-primary" style="margin-left: 60% ;background-color:#F1948A;"  >Submitted</button>
</form>

    </div>
  </div>






<?php
       
         
       if(isset($_POST['submit']))

       {
        $name =$_POST['name'];
        $email =$_POST['email'];
        $address=$_POST['address'];
        $phoneno=$_POST['phoneno'];
        $message=$_POST['message'];
       
        $query="insert into contect (name,email,address,phoneno,message)   value ('$name','$email','$address','$phoneno','$message')";
        $run=mysqli_query($conn,$query);
       }
     
        
       ?>





<?php require_once('vip/footer.php')?>







</body>
</html>