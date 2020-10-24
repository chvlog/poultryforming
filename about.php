<?php  
 //about.php  
 session_start();  
 if(!isset($_SESSION["username"]))  
 {  
      header("location:login.php?action=login");  
 }  
 ?>  
<body>
<?php require_once('vip/top.php')?>


 <?php require_once('vip/navbar.php')?>
 

 
             <div class="jumbotron" style="background-image: url('pic/kk.PNG ');  ">
	<h3 style="text-align: center;">About Us</h3>
</div>

<div class="row" style="background-color: black; color: white;">
  <div class="col-md-4" style="border:  solid  black;" style="padding: 10px;">
    <img src="pic/uol.PNG" width="420" height="420" >
    
  </div>
<div class="col-md-4" style="">
  
    <h1 style="color:  #E9C66C">Vaccination</h1>
        
        <p>Vaccination. Vaccination plays an <br>important part in the health management <br>of the poultry flock.... A vaccine helps to prevent a particular disease by triggering .<br></p>..</p>
           <p style="color: #a8a8a8">


                 Poultry Farming➫ The raising of birds domestically or commercially, primarily for meat & eggs but also for feathers. A farm is where domesticated birds are raised. Poultry include chickens, turkey, ducks, and geese. These animals are raised for their meat and eggs





           . </p>


    <button class="btn btn-success" style="background-color: #E9C66C;">Click here </button>
  </div>
<div class="col-md-4" style="background-color:">
  
    <h1 style="color: #E9C66C">Advantage</h1>
        
        <p > It requires less investment compared to rearing other livestock. ...<br>
It gives rapid return on investment. ...<br>
Broilers intake of feed is comparatively very low <br>while it produces maximum possible amount of food for us. ...<br>       </p>
<a href="#" style="color: #E9C66C">https:///marel.com/articles/helix-drum-technology-in-poultry </a>



        <p style="color: #a8a8a8">Poultry Farming➫. </p>
        <a href="#" style="color: #E9C66C">https:///marel.com/articles/helix-drum-technology-in-poultry </a>
        <p class="p2" style="color: #a8a8a8">Poultry Farming➫. </p>


    <button class="btn btn-success" style="background-color: #E9C66C;">Click here </button>
  </div>


  </div>
  
  
<h1 style="font-size: 50px;">Our News</h1>
      
            

<div class="row" style="background-color: #A3E4D7;">
  <div class="col-md-4" style="border: 1px solid #A3E4D7;" style="padding: 10px;">
    <img src="pic/aaa.jpg" alt="" class="img_inner fleft"  style="border: 1px solid white  height:150%; width: 300px;">
    <p>   1-Financial problem poultry farming system.....<br>
                          2-Lack of information is a poultry farming system..
Diseases and parasites is a great poultry farming <br>system problem.
                          <br> 3 Access to right birds reduces poultry farming problem..</p>
    <button class="btn btn-info">Click here </button>
  </div>
  
  <div class="col-md-4">
    <img src="pic/aa.jpg" alt="" class="img_inner fleft"  style="border: 1px solid #E9C66C     height:150%; width: 300px;     ;">
    <p>China will not be sending ducks to Pakistan to chomp through a plague of locusts after all, an expert from Beijing's troubleshooting team said, disappointing netizens who had been rooting for the birds after news of the idea went viral..China will not be sending ducks to Pakistan to chomp through a plague of locusts after all,,,,</p>
   <button class="btn btn-info">Click here </button>
  </div>
  
  <div class="col-md-4">
   <img src="pic/a.jpg" alt=""   style="border: 1px solid #E9C66C    height:150%; width: 300px;          ;">

   <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
    <button class="btn btn-info">Click here </button>
  </div>
</div>











<?php require_once('vip/footer.php')?>









</body>
</html>