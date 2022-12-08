<head>

    <!-- Seo Opengraph integration-->
<meta property="og:url" content="https://teaminterval.in">
<meta property="og:type" content="website">
<meta property="og:title" content="Study & Exam Preparation Tips-Educational Blog|Team INTERVAL">
<meta property="og:description" content="An educational blog for study and exam preparation tips, including parenting tips and trending online tuition news. Stories on Interval online individual classes">
<meta property="og:image" content="https://teaminterval.in/assets/users/img/demo.jpg">
<!-- Seo Twitter card Integration -->
<meta name="twitter:card" content="summary_large_image">
<meta property="twitter:domain" content="teaminterval.in">
<meta property="twitter:url" content="https://teaminterval.in">
<meta name="twitter:title" content="Study & Exam Preparation Tips-Educational Blog|Team INTERVAL">
<meta name="twitter:description" content="An educational blog for study and exam preparation tips, including parenting tips and trending online tuition news. Stories on Interval online individual classes">
<meta name="twitter:image" content="https://teaminterval.in/assets/users/img/demo.jpg">

</head>

<style type="text/css">
    #pagei a,strong{
        position: relative;
  display: block;
  padding: 0.5rem 0.75rem;
  margin-left: -1px;
  line-height: 1.25;
  color: #8a8a8a;
  border: none;
  font-weight: 400;
    }   
    #maindiv.p{
          text-align: justify;
          text-justify: inter-word; 
    }
    #pagei strong{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }
    body {background-color: #f2f2f2;}

    #pagei a:hover{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }

</style>

<style type="text/css">
    
</style>

<section class="banner_area">
    <div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Online Tuition</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a >Online tuition</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


 <!--================Blog Area =================-->
    <section class="blog_area section_gap" style="padding: 50px 0 !important;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8" style="position:relative;" id="maindiv" >
                    <div class="blog_left_sidebar" style="background-color:#ffffff;padding:20px;">
                       <h4 class="justify-content-center d-flex"> <?php if(empty($records)){
                            echo "... No Posts ...";
                        } ?></h4>
                  <?php 
                    $r=$res[0];
                    print_r($r['body']);  ?> 
                    </div>
                </div>
                    
                    
                <div class="col-lg-4" style="position:sticky; top:100px;">
                    <div style="position:sticky;top:-595px;">
                       
                     
                       <div style="padding:20px;background-color:#ffffff;">
                         <aside style="">
                             <div style="background-color:#ffffff;">
                                  <img src="<?php echo base_url().'images/websitepost.jpg';?>" alt="online tuition in kerala" style='height: 350px; width: 100%;' style="background-color:#ffffff;">
                             </div>
                         </aside>
                     </div>
                     <br><br>
                     <div style="padding:20px;background-color:#ffffff;">
                         <aside style="">
                             <div style="background-color:#ffffff;">
                             <img src="<?php echo base_url().'images/post.jpg';?>" alt="online tuition" style='height: 350px; width: 100%;' style="background-color:#ffffff;">
                             </div>
                         </aside>
                     </div><br><br>
                     <div style="padding:20px;background-color:#ffffff;">
                         <aside style="">
                             <div style="background-color:#ffffff;">
                             <h4> Book your demo class</h4><br>
                              <form id="book_from_page" method="POST" action="<?php echo base_url();?>online-tuition/book_class">
                                   <input class="input-group" name ="name" type="text" placeholder="Your Name" required><br>
                                   <input class="input-group" name ="mobile" type="number" placeholder="Mobile number" required><br>
                                 <input class="input-group" name ="place" type="text" placeholder="City/Town"required><br>
                                   <input class="input-group" name ="class" type="text" placeholder="Class"required><br>
                                  <input class="input-group" name ="email"  type="text" placeholder="Email "required><br>
                                 <span class="input-group-btn">
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </span>
                                </form>
                                </div>
                        </aside>
                      </div>
                    </div>
                </div>
            </div>
           <div class="row" style="padding:15px;" >
                
                        <div class="column" style="background-color:#ffffff; padding:10px;margin:5px;">
                          <p><a href="<?php echo base_url();?>online-tuition/maths-tuition" rel="noopener"><img class="img-responsive" src="<?php echo base_url().'images/maths.png';?>"style='height: 120px; width:150px;' /></a></p>
                           <h5 align="center"><a href="<?php echo base_url();?>online-tuition/maths-tuition">Maths Tuition</a></h5>
                        </div>
                        <div class="column" style="background-color:#ffffff; padding:10px; margin:5px;">
                            <p><a href="#" rel="noopener"><img class="img-responsive" src="<?php echo base_url().'images/physics.jpg';?>"style='height: 120px; width:150px;' /></a></p>
                            <h5 align="center"><a href="#">Physics Tuition</a></h5>
                        </div>
                        <div class="column" style="background-color:#ffffff; padding:10px;margin:5px;">
                           <p><a href="#"  rel="noopener"><img class="img-responsive" src="<?php echo base_url().'images/chemistry.jpeg';?>"style='height: 120px; width:150px;' /></a></p>
                            <h5 align="center"><a href="#">Chemisrty Tuition</a></h5>
                        </div>
                        <div class="column" style="background-color:#ffffff; padding:10px;margin:5px;">
                           <p><a href="#" rel="noopener"><img class="img-responsive" src="<?php echo base_url().'images/online.jpg';?>"style='height: 120px; width:150px;' /></a></p>
                            <h5 align="center"><a href="#">Coaching Classes</a></h5>
                        </div>
                   
            </div>
        </div>
    </section>
































 