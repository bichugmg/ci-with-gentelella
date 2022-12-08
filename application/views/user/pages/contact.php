<style type="text/css">
/*
	Max width before this PARTICULAR table gets nasty. This query will take effect for any screen smaller than 760px and also iPads specifically.
	*/
	@media
	  only screen 
    and (max-width: 760px), (min-device-width: 768px) 
    and (max-device-width: 1024px)  {

		/* Force table to not be like tables anymore */
		table, thead, tbody, th, td, tr {
			display: block;
		}

		/* Hide table headers (but not display: none;, for accessibility) */
		thead tr {
			position: absolute;
			top: -9999px;
			left: -9999px;
		}

    tr {
      margin: 0 0 1rem 0;
      overflow-x: scroll;
    }
      
    tr:nth-child(odd) {
      background: #ccc;
    }
    
		td {
			/* Behave  like a "row" */
			border: none;
			border-bottom: 1px solid #eee;
			position: relative;
			padding-left: 50%;
		}

		td:before {
			width: 45%;
			white-space: nowrap;
		}

		/*
		Label the data
    You could also use a data-* attribute and content for this. That way "bloats" the HTML, this way means you need to keep HTML and CSS in sync. Lea Verou has a clever way to handle with text-shadow.
		*/
		td:nth-of-type(1):before { content: "Branch Name"; padding-right: 20px; font-weight: bold; }
		td:nth-of-type(2):before { content: "Phone"; padding-right: 70px; font-weight: bold;}
		td:nth-of-type(3):before { content: "Email"; padding-right: 70px; font-weight: bold;}
</style>

<section class="banner_area">
    <div style="height: 52px;" id="bannerid" style="display:none"></div>
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>Contact</h2>
                <div class="page_link">
                  <a href="<?php echo base_url();?>">Home</a>
                  <a >Contact</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="contact_area section_gap" style="padding-top:40px;">
      <div class="container">
        <!--<div id="mapBox" class="mapBox" data-lat="11.2313479" data-lon="76.0420297" data-zoom="13" data-info="Areekode, Malappuram 673639" data-mlat="11.2313479" data-mlon="76.0420297" ></div>-->
        <div class="row">
          <div class="col-lg-3">
            <div class="contact_info">
              <div class="info_item">
                <i class="ti-map"></i>
                <h6>Malappuram | Kozhikode</h6>
                <p>7th Floor, HiLITE Business Park, NH66, Thondayad Bypass, Kozhikode 673014</p>
                <!--<p><b>Branches :</b> Areekode | Kizhisseri | Kondotty | Kottakkal | Malappuram | Manjeri | Mukkam | Nilambur | Omassery | Parappanangadi | Ramanatukkara | Tirur | Vazhakkad | Vengara | Wandoor</p>-->
              </div>
              <div class="info_item">
                <i class="ti-mobile"></i>
                <h6>(+91) &nbsp;7025 84 1234<br>(+91) &nbsp;7025 84 9823</h6>
                <p>24 Hours Service</p>
              </div>
              <div class="info_item">
                <i class="ti-email"></i>
                <h6><a href = "mailto: hello@teaminterval.in">hello@teaminterval.in</a></h6>
                <p>Send us your query anytime!</p>
              </div>
            </div>
            </div>
          <div class="col-lg-9">
            <form
              class="row contact_form"
              action=""
              method="post"
              id="contactForm"
            >
              <div class="col-md-6">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="name"
                    name="name"
                    placeholder="Enter your name"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter your name'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Enter email address"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter email address'"
                    required=""
                  />
                </div>
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    id="subject"
                    name="subject"
                    placeholder="Enter Subject"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Subject'"
                    required=""
                  />
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea
                    class="form-control"
                    name="message"
                    id="message"
                    rows="1"
                    placeholder="Enter Message"
                    onfocus="this.placeholder = ''"
                    onblur="this.placeholder = 'Enter Message'"
                    required=""
                  ></textarea>
                </div>
              </div>
              <div class="col-md-12 text-right">
                <button type="submit" value="submit" class="btn primary-btn">
                  Send Message
                </button>
              </div>
            </form>
          </div>
        </div>
 
        <hr>
         <div class="row">
            <div class="col-lg-12">
                <div class="contact_info" style="margin-bottom:20px;">
                    <div class="info_item">
                        <i class="ti-map"></i>
                        <h6>Contact Details : Branches</h6>
                    </div>
                </div>
                <form class="row contact_form">
                    <div class="form-group mr-3">
                    <select id="district" class="form-control border border-info" style="min-width:200px;">
                        <option>select District</option>
                        <?php foreach($district as $d):?>
                              <option value="<?php echo $d['district_id']; ?>"><?php echo $d['district_name'];?></option>
                        <?php endforeach ?>
                    </select>
                    </div>
                    
                    <div class="form-group">
                    <select id="region" class="form-control border border-info " style="min-width:200px;">
                        <option>select region</option>
                    </select>
                    </div>
                </form>
                <div id="tbl"></div>
            </div>
        </div>
        
      </div>
    </section>
    <!--================Contact Area =================-->


    <script type="text/javascript">
       $(document).ready(function(){
           
            $('#district').change(function() {
             var dis = $(this).val();
             $.ajax({
                        url:"<?php echo base_url();?>home/fetch_region",
                        method:"POST",
                        data:{district:dis},
                        success:function(data)
                        {
                            $("#region").html(data); 
                        }
             });
            });
            
            $('#region').change(function() {
             var dis = $(this).val();
             $.ajax({
                        url:"<?php echo base_url();?>home/fetch_branch_info",
                        method:"POST",
                        data:{region:dis},
                        success:function(data)
                        {
                            $("#tbl").html(data);
                            //  $('html, body').animate({
                            //     scrollTop: $(".ti-email").offset().top
                            //     }, 1000);
                        }
             });
            });

          $("#contactForm").submit(function(e) {
              e.preventDefault();
              var form = $(this);
              $.ajax({
                  type: "POST",
                  url: "<?php echo base_url();?>home/add_message",
                  data: form.serialize(),
                  success: function(data)
                  {
                    alert(data);
                    $("input[type=text],input[type=email], textarea").val("");
                  }
              });          
          });
       });
          
    </script>