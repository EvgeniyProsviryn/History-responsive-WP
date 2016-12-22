<?php
/**
 * Template Name: Template About (team)
 */
get_header(); ?>

    <div class="container aboutAnim">

        <!-- Introduction Row -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><span style="color:green;">About</span> Us
                </h1>
                <p><?php echo ale_get_option('aboutdescriptor')?></p>
            </div>
        </div>

        <!-- Team Members Row -->
        <div class="row about-block">
            <div class="col-lg-12">
                <h2 class="page-header"><span style="color:green;">Our</span> Team</h2>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <?php if(ale_get_option('teamphoto1')){?>

                    <center><img class="img-circle img-responsive img-center" src=<?php echo ale_get_option('teamphoto1');?>></center>

                <?php } else{ ?>
                    <center><img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt=""></center>
                <?php } ?>
                <h3><?php echo ale_get_option('teamname1')?>
                    <small><?php echo ale_get_option('teampos1')?></small>
                </h3>
                <p><?php echo ale_get_option('teamdesc1')?></p>
            </div>


            <div class="col-lg-4 col-sm-6 text-center">
                <?php if(ale_get_option('teamphoto2')){?>

                    <center><img class="img-circle img-responsive img-center" src=<?php echo ale_get_option('teamphoto2');?>></center>

                <?php } else{ ?>
                    <center><img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt=""></center>
                <?php } ?>
                <h3><?php echo ale_get_option('teamname2')?>
                    <small><?php echo ale_get_option('teampos2')?></small>
                </h3>
                <p><?php echo ale_get_option('teamdesc2')?></p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <?php if(ale_get_option('teamphoto3')){?>

                    <center><img class="img-circle img-responsive img-center" src=<?php echo ale_get_option('teamphoto3');?>></center>

                <?php } else{ ?>
                    <center><img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt=""></center>
                <?php } ?>
                <h3><?php echo ale_get_option('teamname3')?>
                    <small><?php echo ale_get_option('teampos3')?></small>
                </h3>
                <p><?php echo ale_get_option('teamdesc3')?></p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <?php if(ale_get_option('teamphoto4')){?>

                    <center><img class="img-circle img-responsive img-center" src=<?php echo ale_get_option('teamphoto4');?>></center>

                <?php } else{ ?>
                    <center><img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt=""></center>
                <?php } ?>
                <h3><?php echo ale_get_option('teamname4')?>
                    <small><?php echo ale_get_option('teampos4')?></small>
                </h3>
                <p><?php echo ale_get_option('teamdesc4')?></p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <?php if(ale_get_option('teamphoto5')){?>

                    <center><img class="img-circle img-responsive img-center" src=<?php echo ale_get_option('teamphoto5');?>></center>

                <?php } else{ ?>
                    <center><img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt=""></center>
                <?php } ?>
                <h3><?php echo ale_get_option('teamname5')?>
                    <small><?php echo ale_get_option('teampos5')?></small>
                </h3>
                <p><?php echo ale_get_option('teamdesc5')?></p>
            </div>
            <div class="col-lg-4 col-sm-6 text-center">
                <?php if(ale_get_option('teamphoto6')){?>

                    <center><img class="img-circle img-responsive img-center" src=<?php echo ale_get_option('teamphoto6');?>></center>

                <?php } else{ ?>
                    <center><img class="img-circle img-responsive img-center" src="http://placehold.it/200x200" alt=""></center>
                <?php } ?>
                <h3><?php echo ale_get_option('teamname6')?>
                    <small><?php echo ale_get_option('teampos6')?></small>
                </h3>
                <p><?php echo ale_get_option('teamdesc6')?></p>
            </div>
        </div>
    </div>

<?php get_footer(); ?>