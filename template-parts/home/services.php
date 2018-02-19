<?php 

    global $julfiker;
    $title = $julfiker['ss-title'];
    $service_bg = $julfiker['service-bg'];
    $items = $julfiker['service_items'];
    

?>



    <div class="services-area section-padding" id="ser">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-rapper">
                        <h2 class="section-title reverse"><?php echo $title; ?></h2>
                    </div>
                </div>
                <!-- end single services -->
            </div>
           

    <?php if(!empty($items['0']['title'])): ?>         
             <div class="row">
                <div class="services-active owl-carousel">

      
   <?php foreach ($items as $key => $value): ?>
                    <div class="col-md-4">
                        <div class="single-services waves-effect waves-teal-2">
                            <i class="fa <?php echo $value['url']; ?>"></i>
                            <h3><?php echo $value['title']; ?></h3>
                            <p><?php echo $value['description']; ?></p>
                        </div>
                    </div>
    <?php endforeach ?> 




                </div>
            </div>
    <?php else: ?>
        <h1>No Service item  found</h1>
    <?php endif; ?>


            <!-- end rwo -->
        </div>
    </div>