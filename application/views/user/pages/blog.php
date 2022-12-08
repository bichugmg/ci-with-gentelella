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

    #pagei strong{
        background: #3e8fc3;
        color: red;
  border-color: transparent;
  color: #fff;
    }

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
                <h2>Blog</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a >Blog</a>
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
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                       <h4 class="justify-content-center d-flex"> <?php if(empty($records)){
                            echo "... No Posts ...";
                        } ?></h4>

 <?php foreach ($records as $post): ?>                       
                        <article class="row blog_item">
                            <div class="col-md-3">
                                <div class="blog_info text-right">
                                    <div class="post_tag">
                                       <!--  <a href="#">Food,</a> -->
                                        <a class="active"><?php echo $post['category']; ?></a>
                                        <!-- <a href="#">Politics,</a>
                                        <a href="#">Lifestyle</a> -->
                                    </div>
                                    <ul class="blog_meta list">
                                        <li><a href="#"><?php echo $post['author']; ?><i class="ti-user"></i></a></li>
                                        <li><a href="#"><?php echo $post['created_at']; ?><i class="ti-calendar"></i></a></li>
                                        <li><a href="#">1.2M Views<i class="ti-eye"></i></a></li>
                                        <li><a href="#">06 Comments<i class="ti-comment"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="<?php echo base_url().$post['img']; ?>" alt="">
                                    <div class="blog_details">
                                        <a href="<?php echo site_url('blog/').$post['url_title']; ?>">
                                            <h2><?php echo $post['title']; ?></h2>
                                        </a>
                                        <p><?php echo substr($post['body'],0,200)."  ........"; ?></p>
                                        <!--<a href="<?php echo site_url('blog/view/post/').$post['url_title']; ?>" class="blog_btn">View More</a>-->
                                        <a href="<?php echo site_url('blog/').$post['url_title']; ?>" class="blog_btn">View More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
<?php endforeach ?>
<div class="blog-pagination justify-content-center d-flex" id="pagei"><?php echo $this->pagination->create_links(); ?></div>


                        <!-- <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-left"></i>
                                        </span>
                                    </a>
                                </li>
                                <li class="page-item"><a href="#" class="page-link">01</a></li>
                                <li class="page-item active"><a href="#" class="page-link">02</a></li>
                                <li class="page-item"><a href="#" class="page-link">03</a></li>
                                <li class="page-item"><a href="#" class="page-link">04</a></li>
                                <li class="page-item"><a href="#" class="page-link">09</a></li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <span aria-hidden="true">
                                            <i class="ti-angle-right"></i>
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </nav> -->
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">
                        <aside class="single_sidebar_widget search_widget">
                            <form id="blog_search_form">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search Posts" name="blog_search_name" required>
                                <span class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="ti-search"></i></button>
                                </span>
                            </div>
                            </form><!-- /input-group -->
                            <div class="br"></div>
                        </aside>
                        <!-- <aside class="single_sidebar_widget author_widget">
                            <img class="author_img rounded-circle" src="img/blog/author.png" alt="">
                            <h4>Charlie Barber</h4>
                            <p>Senior blog writer</p>
                            <div class="social_icon">
                                <a href="#"><i class="ti-facebook"></i></a>
                                <a href="#"><i class="ti-twitter"></i></a>
                                <a href="#"><i class="ti-github"></i></a>
                                <a href="#"><i class="ti-linkedin"></i></a>
                            </div>
                            <p>Boot camps have its supporters andit sdetractors. Some people do not understand why you
                                should have to spend money on boot camp when you can get. Boot camps have itssuppor
                                ters andits detractors.</p>
                            <div class="br"></div>
                        </aside> -->
                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Popular Posts</h3>
 <?php foreach ($popular_post as $post): ?>                           
                            <div class="media post_item">
                                <img src="<?php echo base_url().$post['img']; ?>" alt="post" style="height:60px;width: 100px;">
                                <div class="media-body">
                                    <a href="<?php echo site_url('blog/view/post/').$post['id']; ?>">
                                        <h3><?php echo $post['title']; ?></h3>
                                    </a>
                                    <p><?php echo $post['created_at']; ?></p>
                                </div>
                            </div>
<?php endforeach ?>                             
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget ads_widget">
                            <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                            <div class="br"></div>
                        </aside>
                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Post Catgories</h4>
                            <ul class="list cat-list">
<?php foreach ($posts_category as $category): ?>
                               
                                <li>
                                    <a href="<?php echo site_url('blog/category/cat/').$category['category'].'/'; ?>" class="d-flex justify-content-between">
                                        <p><?php echo $category['category']; ?></p>
                                        <p><?php echo $category['count']; ?></p>
                                    </a>
                                </li>
 <?php endforeach ?>                                
                            </ul>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget newsletter_widget">
                            <h4 class="widget_title">Newsletter</h4>
                            <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                            </p>
                            <div class="form-group d-flex flex-row">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="ti-email" aria-hidden="true"></i></div>
                                    </div>
                                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email"
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                </div>
                                <a href="#" class="bbtns">Subcribe</a>
                            </div>
                            <p class="text-bottom">You can unsubscribe at any time</p>
                            <div class="br"></div>
                        </aside>
                        <aside class="single-sidebar-widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Clouds</h4>
                            <ul class="list">
                                <?php foreach ($posts_category as $category): ?>
  
                                <li><a href="<?php echo site_url('blog/category/cat/').$category['category'].'/'; ?>"><?php echo $category['category']; ?></a></li>
                                
                                <?php endforeach ?> 
                            </ul>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->

     <script type="text/javascript">
        $(document).ready(function(){
          $('#blog_search_form').submit( function() {
            document.location.assign( "<?php echo site_url('blog/search/tag/'); ?>" + $("input[name=blog_search_name]").val() + "/");
          return false;
          });
        });

    </script>