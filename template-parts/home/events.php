    <div class="event-area" id="event">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-right">
                    <div class="section-title-rapper">
                        <h2 class="section-title">Our Events</h2>
                    </div>
                    <!-- end section titile -->
                </div>
                <!-- end single services -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="event-rapper">
                            <div class="event-bg"></div>
                            <!-- event bg -->
                            <div class="event-content">
                                <ul class="event-nav" role="tablist">
                                <?php 
                                $event = new WP_Query(array(
                                	'post_type'	=> 'events',
                                	'posts_per_page'	=> -1
                                ));


                                while( $event->have_posts() ):$event->the_post();
                                $day = get_post_meta(get_the_ID(), 'name-day', true);
                                $date = get_post_meta(get_the_ID(), 'name-date', true);
                                ?>
                                    <li>
                                        <a href="#ev<?php the_ID(); ?>" aria-controls="ev<?php the_ID(); ?>" role="tab" data-toggle="tab" class="waves-effect waves-teal-2">
                                            <h4><?php echo $day; ?></h4>
                                            <span><?php echo $date; ?></span>
                                        </a>
                                    </li>

                                <?php endwhile;?>    
                                    <!-- end single event nav 
                                    <li>
                                        <a href="#ev2" aria-controls="ev2" role="tab" data-toggle="tab" class="waves-effect waves-teal-2">
                                            <h4>tuesday</h4>
                                            <span>01-jan-2018</span>
                                        </a>
                                    </li>
                                    <!-- end single event nav 
                                    <li>
                                        <a href="#ev3" aria-controls="ev3" role="tab" data-toggle="tab" class="waves-effect waves-teal-2">
                                            <h4>wednesday</h4>
                                            <span>01-jan-2018</span>
                                        </a>
                                    </li>
                                    <!-- end single event nav 
                                    <li>
                                        <a href="#ev4" aria-controls="ev4" role="tab" data-toggle="tab" class="waves-effect waves-teal-2">
                                            <h4>thursday</h4>
                                            <span>01-jan-2018</span>
                                        </a>
                                    </li>
                                    <!-- end single event nav 
                                    <li>
                                        <a href="#ev5" aria-controls="ev5" role="tab" data-toggle="tab" class="waves-effect waves-teal-2">
                                            <h4>friday</h4>
                                            <span>01-jan-2018</span>
                                        </a>
                                    </li>
                                    <!-- end single event nav 
                                    <li>
                                        <a href="#ev6" aria-controls="ev6" role="tab" data-toggle="tab" class="waves-effect waves-teal-2">
                                            <h4>saturday</h4>
                                            <span>01-jan-2018</span>
                                        </a>
                                    </li>
                                    <!-- end single event nav -->
                                </ul>
                                <!-- end event nav -->
                                <div class="tab-content">
                                <?php 
                                $event = new WP_Query(array(
                                	'post_type'	=> 'events',
                                	'posts_per_page'	=> -1
                                ));

                                $x = 0;


                                while( $event->have_posts() ):$event->the_post();
                    $variables = get_post_meta(get_the_ID(), 'wiki_test_repeat_group', true);
                    echo "<pre>";
                    print_r($variables);
       				echo "</pre>";
                    foreach ($variables as $value) : 

				

                    ?>
									
								
                    		
                                    <div role="tabpanel" class="tab-pane  <?php if( $x == 0){ echo "active";} ?>" id="ev<?php the_ID(); ?>">

                                        <div class="single-tab-content">
                                            <div class="single-parent 

                                            <?php echo $value['image-position']; ?> 



                                            ">
                                                <div class="single-left-child">
                                                    <img src="<?php echo $value['your-image']; ?>" alt="" class="img-circle">
                                                    <h3><?php echo $value['your-name']; ?></h3>
                                                    <h5><?php echo $value['your-position'];; ?></h5>
                                                </div>
                                                <div class="single-right-child">
                                                    <ul>
                                                        <li><a href="#"> <i class="fa fa-clock-o"></i> <span class="block-style"><?php echo $value['your-programe-time']; ?></span></a></li>
                                                        <li><a href="#"> <i class="fa fa-location-arrow"></i> <span class="block-style"><?php echo $value['your-venue'];; ?></span> </a></li>
                                                    </ul>
                                                    <a href="#">
                                                        <h2><?php echo $value['your-programe-title'];; ?></h2>
                                                    </a>
                                                    <p><?php echo $value['your-programe-desc'];; ?></p>
                                                </div>
                                            </div>
                                 
                                        </div>
                                        <!-- end single tab div -->
                                    </div>
                                    <!-- end single tab content -->
                                <?php endforeach; 


                                 $x++; endwhile; ?>



                                    <!-- end single tab content -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- event content -->
                        </div>
                        <!-- event rapper -->
                    </div>
                </div>
            </div>
        </div>
    </div>