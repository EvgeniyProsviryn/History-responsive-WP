<?php get_header(); ?>
    <div class="container blog-container">
        <div class="row">
            <div class="col-md-12 blog full">
                <div class="blog-image">
                    <div class="blog-image full-post">
                        <?php if(get_the_post_thumbnail($post->ID)){
                            echo get_the_post_thumbnail($post->ID); }
                        else{?>

                            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg">
                        <?php }?>
                    </div>
                </div>
                <div class="post-date"><?php echo get_the_date();?></div>
                <div class="blog-title"><?php echo the_title();?></div>
                <div class="blog-text">
                    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>

                        <?php echo the_content();?>

                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="read-more hidden"> <a href="fullpage.html">Read more...</a></div>
            </div>
            <?php comments_template(); ?>
        </div>
    </div>
<?php get_footer(); ?>