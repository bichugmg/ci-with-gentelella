<!-- <?php echo $active; ?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport"content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <script type="text/javascript">
      // var vpw = (screen.width<=768)?'980':'device-width';
      // document.write('<meta name="viewport" content="width='+vpw+'">');
    </script>
    
    <?php
    if(isset($page_title)&&isset($keywords_content)&&isset($description_content))
    {
    echo '<title>'.$page_title.'</title>';
    echo '<meta name="keywords" content="'.$keywords_content.'">';
    echo '<meta name="description" content="'.$description_content.'">';
    }
    
    ?>
   
    
    <!-- Seo Opengraph integration-->
    <?php
    if(isset($og_url_content)&&isset($og_type_content)&&isset($og_title_content)&&isset($og_description_content)&&isset($og_image_content))
    {
    echo '<meta property="og:url" content="'.$og_url_content.'">';
    echo '<meta property="og:type" content="'.$og_type_content.'">';
    echo '<meta property="og:title" content="'.$og_title_content.'">';
    echo '<meta property="og:description" content="'.$og_description_content.'">';
    echo '<meta property="og:image" content="'.$og_image_content.'">';
    }
    
    ?>

<!-- Seo Twitter card Integration -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="teaminterval.in">
<meta property="twitter:url" content="https://teaminterval.in">
<meta name="twitter:title" content="Best Home and Online Individual Tuition Classes | Team INTERVAL">
<meta name="twitter:description" content="Interval,the world's fastest growing individual tuition concept provides home and online tuition classes. We follow ONE TEACHER FOR ONE STUDENT learning method">
<meta name="twitter:image" content="https://teaminterval.in/assets/users/img/demo.jpg">

    
    <link rel="icon" href="img/favicon.png" type="image/png" />
    <link rel="icon" href="<?php echo base_url();?>assets/users/img/favicon.png" type="image/png" />
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/bootstrap.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/flaticon.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/themify-icons.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/vendors/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/vendors/nice-select/css/nice-select.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/font-awesome.css" />
    
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/select2/select2/css/select2.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets/users/select2/select2/css/select2-bootstrap.css">
    
    <!-- main css -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/style.css" />
    <!-- <link rel="stylesheet" href="<?php echo base_url();?>assets/users/css/custom.css" /> -->
    <script type="text/javascript">
      // var stylesheet = document.styleSheets[7];
      // stylesheet.disabled = true;
      // if(screen.width<=768){
      //   stylesheet.disabled = false;
      // }
    </script>
    
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    
    <!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '911934969619951');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=911934969619951&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->
<!-- Global site tag (gtag.js) - Google Ads: 659576244 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-659576244"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-659576244');
</script>

<!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat plugin code -->
      <div class="fb-customerchat"
        attribution="page_inbox"
        page_id="310882326410077">
      </div>
    

    <style type="text/css">
      /*.login{*/
      /*  margin-top: .6em;*/
      /*  margin-right: 5px !important;*/
      /*}*/
      .login .btn{
        background: #3e8fc3;
        border: none;

      }
      .login .btn:hover{
        background: #7e4d8a;
        border: none;
        color: #ffff;
      }
      .login .btn:blur{
        border: none;
      }
      .reg{
        margin-top: 20px;
      }
      .reg .btn{
        background: #7e4d8a;
        border: none;

      }
      .reg .btn:hover{
        background: #3e8fc3;
        border: none;
        color: #ffff;
      }
  @media (max-width: 991px) {
    .single-trainer{
    margin-right: 8px !important;
    margin-left: 8px !important;}

    .login{
        margin-top: 0px;
      }
    .login .btn{
        width: 100%
      }
    }
    .modal-content {
  -webkit-border-radius: 0px !important;
  -moz-border-radius: 0px !important;
  border-radius: 0px !important;
  -webkit-border: 0px !important;
  -moz-border: 0px !important;
  border: 0px !important;
    }

    .banner_area{
      min-height: 200px;
    }
    .banner_area .banner_inner{
      min-height: 200px;
    }
    .banner_area .banner_inner .container{
      margin-top: 80px;
    }
    </style>
<script src="<?php echo base_url();?>assets/users/js/jquery-3.2.1.min.js"></script>

<style>
         
      /*     a:visited {*/
      /*  color: white;*/
      /*}*/
      /*   a:active {*/
      /*  color: white;*/
      /*}*/
   .float{
   position:fixed;
   width:60px;
   height:60px;
   bottom:100px;
   right:26px;
   background-color:#25d366;
   color:#FFF;
   border-radius:50px;
   text-align:center;
  font-size:42px;
   box-shadow: 2px 2px 3px #999;
  z-index:100;
}
@media only screen and (max-width: 600px) {
    .float{
   position:fixed;
   width:60px;
   height:60px;
   bottom:25px;
   left:26px;
   background-color:#25d366;
   color:#FFF;
   border-radius:50px;
   text-align:center;
  font-size:42px;
   box-shadow: 2px 2px 3px #999;
  z-index:100;}
}


.my-float{
   margin-top:8px;
}
      </style>
  
  </head>
  

  <body>
    <!--================ Start Header Menu Area =================-->
    <header class="header_area navbar_fixed">
      <div class="main_menu">
        <div class="search_input" id="search_input_box" style="display:none;">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input
                type="text"
                class="form-control"
                id="search_input"
                placeholder="Search Here"
              />
              <button type="submit" class="btn"></button>
              <span
                class="ti-close"
                id="close_search"
                title="Close Search"
              ></span>
            </form>
          </div>
        </div>

        <div class="search_input" id="search_input_box2" style="display:none;">
          <div class="container">
           
           <a href="https://play.google.com/store/apps/details?id=com.activision.callofduty.shooter&hl=en_IN" class="genric-btn info-border circle">Get App</a>
           <a href="" data-toggle="modal" data-target="#demoModal" class="genric-btn info-border circle">Book Demo Class</a>

              <span
                class="ti-close float-right"
                id="close_search2"
                title="Close Search"
              ></span>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="<?php echo base_url();?>"
              ><img  height="38px" width="163px" src="<?php echo base_url();?>assets/users/img/logo.png" alt=""
            /></a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="icon-bar"></span> <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div
              class="collapse navbar-collapse offset"
              id="navbarSupportedContent"
            >
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item <?php if($active == 'home'){echo 'active';}?>">
                  <a class="nav-link" href="<?php echo base_url();?>">Home</a>
                </li>
                    <li class="nav-item <?php if($active == 'about'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>about">About</a>
                    </li>
                <li class="nav-item <?php if($active == 'course'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>courses">Courses</a>
                    </li>
                  
                    <li class="nav-item <?php if($active == 'blog'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>blog">Blog</a>
                    </li>

                      
                <li class="nav-item <?php if($active == 'downloads'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>downloads">Downloads</a>
                    </li>

                      
                <li class="nav-item <?php if($active == 'media'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>media">Media</a>
                    </li>

                    <li class="nav-item <?php if($active == 'careers'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>careers">Careers</a>
                
                    </li>
                    
                    <li class="nav-item <?php if($active == 'contact'){echo 'active';}?>">
                      <a class="nav-link" href="<?php echo base_url();?>contact">Contact</a>
                    </li>


<!-- login -->
<!-- btn btn-primary genric-btn info circle -->

                <!--<li class="nav-item login">-->
                <!--  <a class="nav-link" data-toggle="modal" data-target="#exampleModalCenter" href="" id="logclick">Login</a>-->
                <!--</li>-->

                <!-- <li class="nav-item reg">
                  <a class="btn btn-primary genric-btn info circle" href="contact.html" data-toggle="modal" data-target="#exampleModalCenter"><i class="ti-write"> </i>Register</a>
                </li> -->

                <!-- <li class="nav-item submenu dropdown">
                  <a
                    href="#"
                    class="nav-link dropdown-toggle"
                    data-toggle="dropdown"
                    role="button"
                    aria-haspopup="true"
                    aria-expanded="false"
                    ><i class="ti-user"> </i>Username</a
                  >
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="courses.html">Profile</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="course-details.html"
                        >Logout</a
                      >
                    </li>
                  </ul>
                </li> -->




<!-- Search Icon -->
                <!--<li class="nav-item">-->
                <!--  <a href="#" class="nav-link search" id="search">-->
                <!--    <i class="ti-search"></i>-->
                <!--  </a>-->
                <!--</li>-->
 <!-- Search Icon End -->               
              </ul>

            </div>
          </div>
        </nav>
      </div>

    </header>
    <!--================ End Header Menu Area =================-->

    <a class="btn btn-primary genric-btn info circle" data-toggle="modal" data-target="#demoModal" href="" id="demoClick" hidden=""></a>
    
    <!-- Whatsapp chat button starts here -->
<div class="wa" style="margin-bottom: 50px;padding-bottom: 50px;">
<a href="https://api.whatsapp.com/send?phone=917025841234"  class="float" target="_blank" style="">
<i class="fab fa-whatsapp my-float"></i>
</a></div>

<!-- whatsapp chat button ends here -->
    
    
    
    