 <?php 

    global $julfiker;

    $items = $julfiker['client_items'];
    

?>



    <div class="happy-client-area">
        <div class="container">
            <div class="row">

    <?php if(!empty($items['0']['title'])): ?>         
             

      
        <?php foreach ($items as $key => $value): ?>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="single-happy-moment">
                        <h3> <span class="counter"> <?php echo $value['description']; ?></span></h3>
                        <h4><?php echo $value['title']; ?></h4>
                    </div>
                </div>
    <?php endforeach ?> 
    <?php else: ?>
        <h1>No Client item  found</h1>
    <?php endif; ?>



            </div>
            <!-- end row -->
        </div>
    </div>