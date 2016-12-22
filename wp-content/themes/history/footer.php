<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 col-xs-12 footer">
            <div class="up-button hidden-xs">UP</div>
            <span class="copy hidden-xs"><?php echo ale_get_option('copy'); ?></span><br><span class="year hidden-xs"><?php echo ale_get_option('year'); ?></span>
            <div class="social">
                <?php if(ale_get_option('twi')){?><a href="<?php echo ale_get_option('twi');?>"><i class="fa fa-twitter"></i></a><?php }?>
                <?php if(ale_get_option('fb')){?><a href="<?php echo ale_get_option('fb');?>"><i class="fa fa-facebook"></i></a><?php }?>
                <?php if(ale_get_option('vk')){?><a href="<?php echo ale_get_option('vk');?>"><i class="fa fa-vk"></i></a><?php }?>
                <?php if(ale_get_option('you')){?><a href="<?php echo ale_get_option('you');?>"><i class="fa fa-youtube"></i></a><?php }?>
            </div>
        </div>
    </div>
</div>
    <!-- Scripts -->
    <?php wp_footer(); ?>
</body>
</html>