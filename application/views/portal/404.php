<!DOCTYPE html>
<html>
<head>
	<title>Page Not Found</title>
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link rel="icon" type="image/x-icon" href="<?php echo base_url();?>assets/dist/img/icon.png">

	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <style>
  
    .page_404{ margin:500px 0; background:#fff; font-family: 'Arvo', serif;
    }
    
    .page_404  img{ width:100%;}
    
    .four_zero_four_bg{
     
     background-image: url(https://cdn.dribbble.com/users/285475/screenshots/2083086/dribbble_1.gif);
        height: 500px;
        background-position: center;
        background-repeat: no-repeat;

     }
     
     
     .four_zero_four_bg h1{
     font-size:100px;
     }
     
      .four_zero_four_bg h3{
           font-size:100px;
           }
           
           .link_404{      
      color: #fff!important;
        padding: 10px 20px;
        background: #39ac31;
        margin: 20px 0;
        display: inline-block;}
      .contant_box_404{ margin-top:-50px;}
    </style>
</head>
<body>
      <div class="container">
        <div class="row"> 
        <div class="col-sm-12 ">
        <div class="col-sm-10 col-sm-offset-1  text-center">
        <div class="four_zero_four_bg">
          <h1 class="text-center " style="margin-left: 45%">404</h1>
        
        
        </div>
        
        <div class="contant_box_404" >
        <h1 class="h2" style="margin-left: 43%">
        Look like you're lost
        </h1>
        
        <p style="margin-left: 40%;font-size: larger;">the page you are looking for is not avaible!</p>
        
        <a href="<?php echo base_url();?>app/home" style="margin-left: 45%" class="link_404">Go to Home</a>
      </div>
        </div>
        </div>
        </div>
      </div>
   </body>
</html>