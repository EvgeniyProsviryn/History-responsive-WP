<?php
/*
  * Template name: Home
  * */
get_header();
?>
<div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6 news">
                <span class="latest"><span style="color:green">Latest</span> News</span>

                <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts1 = get_posts('numberposts=3&category_name=Latest News');
                    foreach ($my_posts1 as $post) :
                        setup_postdata($post);
                        ?>
                        <div class="circle">
                            <span class="day"><?php the_time('d')?></span>
                            <span class="date"><?php the_time('M')?></span>
                        </div>
                        <div class="text-left"><a href="<?php echo the_permalink(); ?>"><?php echo get_the_excerpt();?></a></div>
                    <?php endforeach; ?>
                <?php } ?>

            </div>



            <div class="col-md-4 col-sm-6 news personal">
                <span class="latest"><span style="color:green">Upcoming</span> Events</span>
                <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts2 = get_posts('numberposts=3&category_name=Upcoming Events');
                    foreach ($my_posts2 as $post) :
                    setup_postdata($post);
                    ?>
                    <div class="circle2">
                        <span class="day2"><?php the_time('d')?></span>
                        <span class="date2"><?php the_time('M')?></span>
                    </div>
                    <div class="text-left2"><a href="<?php echo the_permalink(); ?>"><?php echo get_the_excerpt();?></a></div>
                    <?php endforeach; ?>
                <?php } ?>

            </div>

            <div class="col-md-3 col-sm-6 news personal other">
                <span class="latest"><span style="color:green">Other</span> Events</span>

                <?php if(is_front_page()){ ?>
                    <?php
                    $my_posts3 = get_posts('numberposts=3&category_name=Other Events');
                    foreach ($my_posts3 as $post) :
                        setup_postdata($post);
                        ?>
                        <div class="circle3">
                            <span class="day3"><?php the_time('d')?></span>
                            <span class="date3"><?php the_time('M')?></span>
                        </div>
                        <div class="text-left3"><a href="<?php echo the_permalink(); ?>"><?php echo get_the_excerpt();?></a></div>
                    <?php endforeach; ?>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12  sponsors">
              <div class="row">
                  <div class="col-md-4 col-sm-4 col-xs-4  s-images">
                      <?php if(ale_get_option('sponsor1')){ ?>

                          <div class="sp-img"><img src="<?php echo ale_get_option('sponsor1') ?>" alt=""></div>

                      <?php } else { ?>
                      <i class="fa fa-internet-explorer"></i>
                      <?php } ?>
                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4 s-images">

                      <?php if(ale_get_option('sponsor2')){ ?>

                          <div class="sp-img"><img src="<?php echo ale_get_option('sponsor2') ?>" alt=""></div>

                      <?php } else { ?>
                          <i class="fa fa-firefox"></i>
                      <?php } ?>

                  </div>

                  <div class="col-md-4 col-sm-4 col-xs-4 s-images">
                      <?php if(ale_get_option('sponsor3')){ ?>

                          <div class="sp-img"><img src="<?php echo ale_get_option('sponsor3') ?>" alt=""></div>

                      <?php } else { ?>
                          <i class="fa fa-chrome"></i>
                      <?php } ?>

                  </div>
              </div>
            </div>
        </div>
    </div>
<?php
get_footer();
?>
