<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>


<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--<title>Careers | Team INTERVAL®</title>-->

    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/careers/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/careers/css/font-awesome.min.css" />
    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/careers/css/animate.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/users/careers/css/style.css" />

    <script type="text/javascript" src="<?php echo base_url();?>assets/users/careers/js/jquery-1.11.2.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/users/careers/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZXJBVDf7R4JqmSpopVPoduIGWx1IwpBM"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets/users/careers/js/plugins.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <script type="text/javascript">
        var dataHeader = [{
                bigImage: "/careers/images/slide-1.jpg",
                title: "Minimal & Clean",
                author: "Templatestock"
            }, {
                bigImage: "/careers/images/slide-2.jpg",
                title: "I'm A Creative Theme",
                author: "Templatestock"
            }, {
                bigImage: "/careers/images/slide-3.jpg",
                title: "Achieve Success",
                author: "Templatestock"
            }],
            loaderSVG = new SVGLoader(document.getElementById('loader'), {
                speedIn: 600,
                speedOut: 600,
                easingIn: mina.easeinout
            });
        loaderSVG.show()
    </script>

    </div>
    <!-- /.header-slide -->
    </section>

    <!-- HEADER END -->


    <!-- ABOUT -->
<br><br><br><br><br>
    <section id="about" class="light">
        <header class="title">
            <h2>OUR <span>MISSION</span></h2>
            <p>We align ourselves with enlightened management philosophy, regarding people as our major assets and working always at maintaining the highest possible level of communication and interpersonal relations. Our management team is caring and future
                oriented and our planning and programming soundly organised yet flexible. Our Company’s commitment to its ethos guarantees our consistently giving of our best in any initiative we undertake.</p>
        </header>

        <!-- <div class="container">
            <div class="row table-row">
                <div class="col-sm-6 hidden-xs">
                    <div class="section-content">
                        <div class="big-image" style="background-image:url(images/1.png)"></div>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="section-content">
                        <div class="about-content left animated" data-animate="fadeInLeft">
                            <div class="about-icon"><i class="fa fa-code"></i></div>
                            <div class="about-detail">
                                <h4>Clean Code</h4>
                                <p>Lorem ipsum Ad nisi dolore ut sit do dolor commodo sint ullamco. Lorem ipsum Magna enim eu irure sit eiusmod fugiat et. Lorem ipsum Consequat in cupidatat cupidatat non in non veniam dolore.</p>
                            </div>
                        </div>

                        <div class="about-content left animated" data-animate="fadeInLeft">
                            <div class="about-icon"><i class="fa fa-desktop"></i></div>
                            <div class="about-detail">
                                <h4>Fully Responsive</h4>
                                <p>Lorem ipsum Ex labore dolor magna in proident ad reprehenderit consequat irure nostrud quis. Lorem ipsum Veniam velit non cupidatat nulla et proident.</p>
                            </div>
                        </div>

                        <div class="about-content left animated" data-animate="fadeInLeft">
                            <div class="about-icon"><i class="fa fa-cube"></i></div>
                            <div class="about-detail">
                                <h4>Multipurpose Design</h4>
                                <p>Lorem ipsum Ea quis sint sint aliquip qui exercitation commodo non cupidatat do reprehenderit dolor. Lorem ipsum Non et minim incididunt sed labore in amet ea est pariatur.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             /.row table-row -->
        </div>
    </section>


    <!-- PORTFOLIO -->

    <section id="portfolio" class="light">

        <!-- <img src="images/interval.png"> -->
        <header class="title">
            <h2>Join <span>OUR TEAM</span></h2>
            <p>We invite you to join our World of collaborative work environment Were everyone work hard to create and maintain a cohesive team oriented workplace. At interval we value culture, beliefs, and values of our people. </p>
        </header>

        <div class="container-fluid">
            <div class="row">
                <ul id="filters" class="list-inline">
                    <li data-filter="all" class="filter">All</li>
                    <li data-filter=".Academics" class="filter">Academics</li>
                    <li data-filter=".Client_Relations" class="filter">Client Relations</li>
                    <li data-filter=".Finance" class="filter">Finance</li>
                    <li data-filter=".Human_Resources" class="filter">Human Resources</li>
                    <li data-filter=".Marketing" class="filter">Marketing</li>
                    <li data-filter=".Technical" class="filter">Technical</li>

                </ul>
            </div>

            <div class="row">
                <div class="container-portfolio">
                    <!-- PORTFOLIO OBJECT -->
                    <script type="text/javascript">
                        var portfolio = [{
                            category: "Academics",
                            image: "<?php echo base_url();?>assets/users/careers/images/contentwriter1.jpg",
                            title: "Creative Content Writer",
                            link: "<?php echo base_url();?>careers/ccw",
                            text: "Creating  print and digital content  showcases the products/services of Team INTERVAL."
                        }, {
                            category: "Academics",
                            image: "<?php echo base_url();?>assets/users/careers/images/reaserchassistant1.jpg",
                            title: "Research Assistant",
                            link: "<?php echo base_url();?>careers/research",
                            text: "The role covers a wide area of preparing study materials , question papers and all other academic related activities."
                        }, {
                            category: "Technical",
                            image: "<?php echo base_url();?>assets/users/careers/images/appdev1.jpg",
                            title: "App Developer",
                            link: "<?php echo base_url();?>careers/app_dev",
                            text: "The application developer processes users’ needs to customize the software for computer program, design prototype application, implements, and tests source code and troubleshoots.software application."
                        }, {
                            category: "Technical",
                            image: "<?php echo base_url();?>assets/users/careers/images/webdev1.jpg",
                            title: "web developer",
                            link: "<?php echo base_url();?>careers/web_dev",
                            text: "Creates the back end ,Codes HTML, CSS, JAVASCRIPT and more Focus functionality and computability"
                        }, {
                            category: "Marketing",
                            image: "<?php echo base_url();?>assets/users/careers/images/marketingofficer1.jpg",
                            title: "Marketing Officer",
                            link: "<?php echo base_url();?>careers/marketing",
                            text: "-Brand management<br/>-Pricing<br/>-Research<br/>-Communication"
                        }, {
                            category: "Marketing",
                            image: "<?php echo base_url();?>assets/users/careers/images/abc1.jpg",
                            title: "Area Business Consultant",
                            link: "<?php echo base_url();?>careers/abc",
                            text: "The area business consultant is an entry level job associated with sales and marketing. We seek an applicant who will thrive in an open, dynamic, flexible, fun, spirited and collaborative environment.The candidate should be ambitious and self-driven. "
                        }, {
                            category: "Client_Relations",
                            image: "<?php echo base_url();?>assets/users/careers/images/clientrelation1.jpg",
                            title: "Client Relation Officer",
                            link: "<?php echo base_url();?>careers/cro",
                            text: "CRO is to work with Client Relation Deparment in order to assist with the needs of customer.CRO provide response and feedback to customer."
                        }, {
                            category: "Client_Relations",
                            image: "<?php echo base_url();?>assets/users/careers/images/studentrelation1.jpg",
                            title: "Student Relation Officer",
                            link: "<?php echo base_url();?>careers/sro",
                            text: "Students mentoring and orientation.<br> Parental and trainer guidance"
                        }];
                    </script>
                </div>
            </div>
        </div>
    </section>


    <!-- TEAM -->
    <br>
    <center>Connect with Us <a href = "mailto: careers@teaminterval.in">careers@teaminterval.in</a></center>
    <section id="team" class="light">
        <header class="title">
            <h2>Creative <span>Team</span></h2>
            <p>We are home to a strong pool of exceptional creatives with bucket loads of experience in agency and in-house design, all of whom bring something different to the mix.
                we creative solutions to even the most random of tasks is what makes us special.</p>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="wrap animated" data-animate="fadeInDown">
                        <div class="img-team">
                            <img src="<?php echo base_url();?>assets/users/careers/images/infas.jpg" alt="" class="img-circle">
                        </div>

                        <h3>Infas Palliparamaban</h3>
                        <h5>Project Manager</h5>

                        <p>make today the day to learn something new.</p>

                        <div class="team-social">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <div class="wrap animated" data-animate="fadeInDown">
                        <div class="img-team">
                            <img src="<?php echo base_url();?>assets/users/careers/images/Muhammed_Dilshad.jpg" alt="" class="img-circle">
                        </div>

                        <h3>Muhammed Dilshad</h3>
                        <h5>Regional Manager</h5>

                        <p>children must be taught HOW TO THINK not WHAT TO THINK</p>

                        <div class="team-social">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <div class="wrap animated" data-animate="fadeInDown">
                        <div class="img-team">
                            <img src="<?php echo base_url();?>assets/users/careers/images/bichu.jpg" alt="" class="img-circle">
                        </div>

                        <h3>Bichu <br />George</h3>
                        <h5>Developer</h5>

                        <p>learning is a treasure that follow its owner everywhere</p>

                        <div class="team-social">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 text-center">
                    <div class="wrap animated" data-animate="fadeInDown">
                        <div class="img-team">
                            <img src="<?php echo base_url();?>assets/users/careers/images/adeeb_nasir.jpg" alt="" class="img-circle">
                        </div>

                        <h3>Adeeb <br />Nasir</h3>
                        <h5>Accountant</h5>

                        <p>INTELLIGENCE + CHARACTER that is the goal of education and thats what we do in INTERVAL</p>

                        <div class="team-social">
                            <ul class="list-inline social-list">
                                <li>
                                    <a href="#" class="fa fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-linkedin"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fa fa-google-plus"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>

    <!-- INFO -->

    <section id="info" class="dark">
        <header class="title">
            <h2>Our <span>Work Culture</span></h2>
            <p>We provide value education for a better tomorrow.</p>
        </header>

        <div class="container experties">
            <div class="row">
                <div class="col-md-6">
                    <div class="skill">
                        <ul class="skill-bar list-unstyled">
                            <li><span class="percentage" data-value="80%"></span><em>Harmony At Work</em></li>
                            <li><span class="percentage" data-value="95%"></span><em>Freedom Of Expression</em></li>
                            <li><span class="percentage" data-value="82%"></span><em>Elegency in customer service</em></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="skill">
                        <ul class="skill-bar list-unstyled">
                            <li><span class="percentage" data-value="93%"></span><em>Effective and transperent management</em></li>
                            <li><span class="percentage" data-value="90%"></span><em>Career growth and opportunities</em></li>
                            <li><span class="percentage" data-value="43%"></span><em>Job autonomy</em></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container -->
    </section>


    <section class="separator blue">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter animated" data-animate="fadeInUp" data-delay="0">
                        <div class="counter-icon">
                            <i class="fa fa-calendar"></i>
                        </div>
                        <div class="counter-content">
                            <span class="value" data-from="0" data-to="2"></span>
                            <small>Years</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter animated" data-animate="fadeInUp" data-delay="500">
                        <div class="counter-icon">
                            <i class="fa fa-building"></i>
                        </div>
                        <div class="counter-content">
                            <span class="value" data-from="0" data-to="140"></span>
                            <small>Branches</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter animated" data-animate="fadeInUp" data-delay="1000">
                        <div class="counter-icon">
                            <i class="fa fa-graduation-cap"></i>
                        </div>
                        <div class="counter-content">
                            <span class="value" data-from="0" data-to="<?php $query = $this->db2->query('SELECT * FROM trainer');
                 echo $query->num_rows(); ?>"></span>
                            <small>Trainers</small>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="counter animated" data-animate="fadeInUp" data-delay="1500">
                        <div class="counter-icon">
                            <i class="fa fa-group"></i>
                        </div>
                        <div class="counter-content">
                            <span class="value" data-from="0" data-to="<?php $query = $this->db2->query('SELECT * FROM student WHERE active=1'); $stud_num=$query->num_rows()+2000; echo $stud_num; ?>"></span>
                            <small>Students</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- FOOTER CONTACT -->

    <!-- <section id="contact" class="dark">
        <header class="title">
            <h2>Contact <span>Us</span></h2>
            <p>Lorem ipsum Esse esse cillum nisi cillum deserunt tempor ut pariatur qui officia. Lorem ipsum Magna eu irure sint occaecat cupidatat dolore minim irure cillum.</p>
        </header>

        <div class="container">
            <div class="row">
                <div class="col-md-8 animated" data-animate="fadeInLeft">
                    <form action="#">
                        <div class="row">
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control" placeholder="Your Email">
                            </div>
                            <div class="col-md-12">
                                <textarea class="form-control" rows="3" placeholder="Tell Us Everything"></textarea>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-default submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-4 animated" data-animate="fadeInRight">
                    <address>
                <span><i class="fa fa-map-marker fa-lg"></i> 84 State Road 123 City, State 24813</span>
                <span><i class="fa fa-phone fa-lg"></i> (123) xxx - xxx</span>
                <span><i class="fa fa-envelope-o fa-lg"></i> <a href="mailto:contact@example.com">contact&#64;example.com</a></span>
                <span><i class="fa fa-globe fa-lg"></i> <a href="http://support.example.com">support.example.com</a></span>
            </address>
                </div>

            </div>
        </div>
    </section> -->

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">

                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- /.container-fluid -->

    <!-- SCRIPT -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/users/careers/js/main.js"></script>
</body>

</html>