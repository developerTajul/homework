<?php 

    global $julfiker;
    $items = $julfiker['hi_er_tajul_testi'];
   
   echo "<pre>";
   print_r($items);
   echo "</pre>";
    ?>






    <div class="testtimonials-area" id="tes">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right">
                    <h2 class="section-title white"><?php echo $testimonial_items; ?>Testimonials</h2>
                </div>
            </div>
            <!-- end row -->

    <?php if(!empty($items['0']['title'])): ?>         
            <div class="row">
                <div class="testimonial-active owl-carousel">

      
   <?php foreach ($items as $key => $value): ?>
        
       


<div class="col-md-4">
    <div class="single-testimonilas">
        <div class="testi-thumb">
            <img src="<?php echo $value['thumb']; ?>" alt="" class="img-circle">
        </div>
        <div class="testi-text">
            <p><?php echo $value['description']; ?></p>
        </div>
    </div>
</div>
                  

    <?php endforeach ?> 


                </div>
                <!-- end testimonals active -->
            </div>
    <?php else: ?>
        No post found
    <?php endif; ?>

        </div>
    </div>