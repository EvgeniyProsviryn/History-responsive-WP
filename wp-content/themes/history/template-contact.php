<?php 
/**
 * Template Name: Template Contact
 */

get_header();
?>
    <div class="container contactAnim">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 contact-page">
                <span class="contact-title">Contact <span style="color:green;">us</span></span>
                <div class="group">
                    <form action='<?php echo "http://formspree.io/".ale_get_option("contactmail")?>' method="POST">

                    <input type="text" class="name" placeholder="Name" required/>
                    <input type="email" class="email" placeholder="Email" required/>             <textarea name="" id="area" cols="30" rows="5" placeholder="Message"></textarea>
                    <button class="send">Send Message</button>

                    </form>
                </div>

            </div>
            <div class="col-md-8 col-sm-8 col-xs-12 we">
                <div class="row">
                    <div class="map">
                        <span class="map-title">We are on the <span style="color:green">map</span></span>
                        <div class="mapframe">
                            <iframe src="<?php echo ale_get_option('maplink');?>" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>

                    </div>
                    <a href="https://accounts.google.com/login?hl=en#identifier"><button class="send google"><i class="fa fa-google"></i> Sign in </button></a>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>