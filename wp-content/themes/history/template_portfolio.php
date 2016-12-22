<?php
/**
 * Template Name: Template Portfolio (team)
 */
get_header(); ?>
<div class="container portfolio-page">
    <div class="row">
        <div class="portfolio-title"><span style="color:green">P</span>ortfolio Page</div>
        <a href="#">


            <?php
            global $post;
            $myposts5 = get_posts('numberposts=-1&offset=1&category_name=Portfolio');
            foreach( $myposts5 as $post ){
                setup_postdata( $post );
                ?>
                <a href=" <?php echo the_permalink(); ?>"><div class="col-md-3 col-sm-6 col-xs-12 folio-block">
                    <div class="image-folio imagesizible">

                        <?php if(get_the_post_thumbnail($post->ID)){
                            echo get_the_post_thumbnail($post->ID); }
                        else{?>

                            <img src="<?php echo get_template_directory_uri(); ?>/img/noimage.jpg">

                        <?php }?>

                    </div>
                    <div class="folio-title"><?php echo the_title();?></div>
                    <div class="folio-desc"><?php echo get_the_excerpt();?></div>
                </div>
                </a>
                <?php
            }
            ?>
            </a>
    </div>
</div>




<?php get_footer(); ?>
