<div class="blog-area section-padding" id="blg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title-rapper">
                        <h2 class="section-title reverse">Blog</h2>
                    </div>
                </div>
            </div>
            <!-- end row -->
            <div class="row">
<?php 

    $latest_post = new WP_Query(array(
        'post_type'     => 'post',
        'posts_per_page'    => -1

    ));

    while( $latest_post->have_posts() ):$latest_post->the_post();


?>

                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-blog">
                            <div class="blog-thumb">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/blog/b1.jpg" alt="">
                                <div class="thumb-tato">
                                    <span class="month"><?php the_time('M'); ?></span>
                                    <span class="date"><?php the_time('d'); ?>-<?php the_time('Y'); ?></span>
                                    <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                                </div>
                                <div class="thumb-hover">
                                    <ul>
                                        <li><a href="<?php the_author_link(); ?>"> <i class="fa fa-user"></i>by <?php the_author(); ?></a></li>
                                        <li><a href="<?php the_permalink(); ?>"> <i class="fa fa-comment-o"></i><?php comments_popup_link('0 comment', '1st comment', '% comments', '', 'Comment is disabled now'); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- end blog thumb -->
                            <div class="blog-text">
                                <a href="#">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                                <?php the_content(); ?>
                            </div>
                        </div>
                    </div>
<?php endwhile; ?>



            </div>
        </div>
    </div>