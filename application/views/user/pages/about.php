
<style type="text/css">
  .h_blog_item .h_blog_text .h_blog_text_inner.right {
    margin-left: 0px;
    border: none;
  }

  .h_blog_item .h_blog_text .h_blog_text_inner{
    padding: 0px;
  }
</style>


<section class="banner_area">
    <div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a >About</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="about_area section_gap" style="padding-top: 90px; padding-bottom: 0px;">
      <div class="container">
        <!--<div class="row h_blog_item">-->
        <!--  <div class="col-lg-6">-->
        <!--    <div class="h_blog_img">-->
        <!--      <img class="img-fluid" src="<?php echo base_url();?>assets/users/img/about.jpg" alt="" />-->
        <!--    </div>-->
        <!--  </div>-->
        <!--  <div class="col-lg-6">-->
        <!--    <div class="h_blog_text">-->
        <!--      <div class="h_blog_text_inner left right">-->
        <!--        <h4>Who We Are |</h4>-->
        <!--        <p style="text-align : justify;">-->
        <!--          &emsp;&emsp; As the world we live in is highly competitive that values an individual by his space, certain student and individuals that match are left out of the competition. We, as a team, recognise that there are differences in learning speed among students which have no place in a  group classroom setting. We understand that there are personal differences in interests, grasping power, memory acquisition, comprehension. Accept that this diversity also applies to their imaginative and innovative abilities. Aims to provide personalised individual based training that caters to the unique needs of each student.-->
        <!--        </p>-->
        <!--        <a class="primary-btn" href="#" id="faqq">-->
        <!--          Learn More <i class="ti-arrow-right ml-1"></i>-->
        <!--        </a>-->
        <!--      </div>-->
        <!--    </div>-->
        <!--  </div>-->
        <!--</div>-->
        <h2>
            Our Story
        </h2>
        <p style="text-align:justify;">The story of INTERVAL's Individual Tuition Concept is the independent emergence of our founder OK Sanafir, It was during his degree education that Mr.Sanafir understood the need for individual care from his own personal experience involving a teacher where he felt humiliated and decided to never feel the same again, It's also his passion towards teaching that has led to the formation of Team Interval in 2018, OK Sanafir with his 10 other friends started as trainers with an initial investment of ₹1,10,000/ which was contributed equally by each of them and started in a small village of Malappuram, Kerala and in 2020. INTERVAL today has expanded  Quality online tutoring as well as home tutoring over Kerala and across the Gulf countries. </p>
        
        <h2>
            What We Do?
        </h2>
        <p style="text-align:justify;">
            In this highly competitive world, where some students require Individual Care and attention inorder to be nurtured into a valuable member of the community. We, as a team, recognise that there are differences in learning speed among students which have no place in a classroom setting. Team INTERVAL provides personalized, one to one individual care and attention towards the progress of student and mold them to develop their imaginative and innovative skills.
        </p>
             <p style="text-align:justify;">
     Interval is Kerala's leading Online tutoring company which enables students to learn Live with some of Kerala's best-trained tutors. It has some 8000+ teachers who have taught 
 3000+ students spread across 150+ cities from 12+ countries. 
Team Interval's online tutoring platform enables one-to-one interactive learning ie the "a teacher for a student "method. It offers individual online tuition or home tuition. On Interval a home tutor is able to give personalized teaching and making a good bond with students then results in easy learning. online tutor using audio, video calls, and whiteboarding tools where both student and teacher are able to interact in real-time. 
   </p>   
        
        <h2>
            For Whom We Do?
        </h2>
        <p style="text-align:justify;">
INTERVAL is an institution that focuses on the development and all-around progress of the Individual Student, at INTERVAL we believe in guiding individuals who lack the basic reading and writing skills and also those who require personal assistance to be more competitive. Our syllabus is designed according to the needs and the capabilities of each student that we help, in their journey towards educational excellence. Our custom-made syllabuses are crafted after thorough research in the fields of pedagogy, psychology. 
</p>
        <p style="text-align:justify;">
Many K-12 class students from Kerala and Gulf countries study <a href="https://teaminterval.in/courses">Academic subjects and other skill development courses</a> using Interval's personal home tutor or one-to-one live online tutoring.</p>
       
       <h2>
            By Whom?
        </h2>
        <p style="text-align:justify;">
            INTERVAL's classes are conducted by an experienced online or home tutors with diverse background. Trainers undergo constant knowledge enrichment programs at a regular interval inorder to include the latest developments.
        </p>
        
        
                <a class="primary-btn" href="https://teaminterval.in/contact" id="faqq">Get Your Personal Home Tutor
                  <i class="ti-arrow-right ml-1"></i>
                </a>

      </div>
    </section>

    <div class="container">
      <div class="section-top-border">
        <h3 class="mb-30 title_color">Frequenty Asked Questions (FAQs)</h3>
        <div class="row">


<?php foreach ($faqs as $faq): ?>
          <div class="col-lg-12 ques mb-1" style="cursor: pointer;">
            <h4 style="color: #3e8fc3;"><?php echo $faq['question']; ?></h4>
            <blockquote class="generic-blockquote" style="display: none; border-left: 2px solid #3e8fc3;">
              <?php echo $faq['answer']; ?>
            </blockquote>
          </div>

<?php endforeach ?>      
        </div>
      </div>
    </div>




    <script type="text/javascript">
       $(document).ready(function(){

          $(".ques").on("click", function() {
          $(this).children('.generic-blockquote').slideToggle("slow");
          $(this).children('.generic-blockquote').focus();
        });

       });
    </script>