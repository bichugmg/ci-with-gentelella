
<style type="text/css">
    .mainClick,.secondClick{
        cursor: pointer;
    }
    .selectionArea{
        display: none;
    }
    .tableArea{
        display: none;
    }
</style>
   


<section class="feature_area section_gap_top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Downloads</h2>
              <p>
               Download Study materials and Question papers
              </p>
            </div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-lg-4 col-6">
            <div class="single_feature mainClick" val="brochure" id="brochure">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Brochures / Catalogues</h4>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="single_feature mainClick" val="study">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Study Materials</h4>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <div class="single_feature  mainClick" val="question">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Question papers</h4>
        
              </div>
            </div>
          </div>

          
        </div>
      </div>
    </section>


    <section class="feature_area selectionArea">
      
    </section>

    <section class="feature_area tableArea">
      
          
    </section>


     <script type="text/javascript">
        
        $(document).ready(function(){
                var gbl;
              $('.mainClick').click( function() {
                $('.mainClick').css('background','#f9f9ff');
                $(this).css('background','#c2c2c361');
                gbl = $(this).attr('val');
                $.ajax({
                 url: "<?php echo base_url().'home/downloads_cat/'; ?>"+encodeURIComponent($(this).attr('val')),
                 type: 'get',
                 dataType: 'json',
                 success: function(response){
                   
                    $('.selectionArea').html(response);

                 }
               });

                $('.selectionArea').css('display','block');
                $('.tableArea').css('display','none');
                $('html, body').animate({
                    scrollTop: $(".mainClick").offset().top
                    }, 1000);
              return false;
              });


               $(document).on('click','.secondClick',function() {

                 $('.secondClick').css('background','#f9f9ff');
                $(this).css('background','#c2c2c361');
                
                var type = encodeURIComponent(gbl);
                var cat = encodeURIComponent($(this).attr('val'));
                // alert("<?php echo base_url().'home/downloads_view/'; ?>"+type+'/'+cat);

                $.ajax({
                 url: "<?php echo base_url().'home/downloads_view/'; ?>"+type+'/'+cat,
                 type: 'get',
                 dataType: 'json',
                 success: function(response){
                   
                    $('.tableArea').html(response);

                 }
               });

                $('.tableArea').css('display','block');
                $('html, body').animate({
                    scrollTop: $(".secondClick").offset().top
                    }, 1000);
              return false;
              });

               
        });

    </script>
    
    <script>
// On mouse-over, execute myFunction
window.onload = function() {
  document.getElementById("brochure").click(); // Click on the checkbox
}
</script>