<?php
/**
 * Get current theme options
 * 
 * @return array
 */
function aletheme_get_options() {
	$comments_style = array(
		'wp'  => 'Alethemes Comments',
		'fb'  => 'Facebook Comments',
		'dq'  => 'DISQUS',
		'lf'  => 'Livefyre',
		'off' => 'Disable All Comments',
	);

    $analytics = array(
        'classic'  => 'Classic Analytics',
        'universal'  => 'Universal Analytics',
    );

    $headerfont = array_merge(ale_get_safe_webfonts(), ale_get_google_webfonts());

    $background_defaults = array(
        'color' => '',
        'image' => '',
        'repeat' => 'repeat',
        'position' => 'top center',
        'attachment'=>'scroll'
    );

	
	$imagepath =  ALETHEME_URL . '/assets/images/';
	
	$options = array();


    $options[] = array("name" => "Home options",
        "type" => "heading");

    $options[] = array( "name" => "Sponsor logo 1 180x180px",
        "desc" => "",
        "id" => "ale_sponsor1",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Sponsor logo 2 180x180px",
        "desc" => "",
        "id" => "ale_sponsor2",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Sponsor logo 3 180x180px",
        "desc" => "",
        "id" => "ale_sponsor3",
        "std" => "",
        "type" => "upload");


    $options[] = array("name" => "Header options",
        "type" => "heading");

    $options[] = array( "name" => "Header image",
        "desc" => "",
        "id" => "ale_headerimg",
        "std" => "",
        "type" => "upload");


    $options[] = array( "name" => "Theme name",
        "desc" => "Insert the name of the theme , it will be displayed in the header.",
        "id" => "ale_sitename",
        "std" => "History",
        "type" => "text");

    $options[] = array( "name" => "Theme slogan",
        "desc" => "Insert theme slogan , it will be displayed in the header.",
        "id" => "ale_siteslogan",
        "std" => "Wordpress template",
        "type" => "text");

    $options[] = array("name" => "Footer options",
        "type" => "heading");

    $options[] = array("name" => "Copyright text",
        "desc" => "Insert copyright text",
        "id" => "ale_copy",
        "std" => "History all rights reserved.",
        "type" => "text");

    $options[] = array("name" => "Year",
        "desc" => "",
        "id" => "ale_year",
        "std" => "2015",
        "type" => "text");

    $options[] = array("name" => "Facebook",
                        "desc" => "Insert Facebook link",
                        "id" => "ale_fb",
                        "std" => "",
                        "type" => "text");

    $options[] = array("name" => "Twitter",
        "desc" => "Insert Twitter link",
        "id" => "ale_twi",
        "std" => "",
        "type" => "text");

    $options[] = array("name" => "Vk",
        "desc" => "Insert Vk link",
        "id" => "ale_vk",
        "std" => "",
        "type" => "text");

    $options[] = array("name" => "YouTube",
        "desc" => "Insert YouTube link",
        "id" => "ale_you",
        "std" => "",
        "type" => "text");


    $options[] = array("name" => "About options",
        "type" => "heading");

    $options[] = array( "name" => "Description for About Page",
        "desc" => "",
        "id" => "ale_aboutdescriptor",
        "std" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?",
        "type" => "text");


    $options[] = array( "name" => "First employee photo 200x200px",
        "desc" => "",
        "id" => "ale_teamphoto1",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Name of the first employee",
        "desc" => "",
        "id" => "ale_teamname1",
        "std" => "Jack Richard",
        "type" => "text");

    $options[] = array( "name" => "Position of the first employee",
        "desc" => "",
        "id" => "ale_teampos1",
        "std" => "Job title",
        "type" => "text");

    $options[] = array( "name" => "Description of the first employee",
        "desc" => "",
        "id" => "ale_teamdesc1",
        "std" => "What does this team member to? Keep it short! This is also a great spot for social links!",
        "type" => "textarea");


    $options[] = array( "name" => "Second employee photo 200x200px",
        "desc" => "",
        "id" => "ale_teamphoto2",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Name of the second employee",
        "desc" => "",
        "id" => "ale_teamname2",
        "std" => "Jack Richard",
        "type" => "text");

    $options[] = array( "name" => "Position of the second employee",
        "desc" => "",
        "id" => "ale_teampos2",
        "std" => "Job title",
        "type" => "text");

    $options[] = array( "name" => "Description of the second employee",
        "desc" => "",
        "id" => "ale_teamdesc2",
        "std" => "What does this team member to? Keep it short! This is also a great spot for social links!",
        "type" => "textarea");

    $options[] = array( "name" => "Third employee photo 200x200px",
        "desc" => "",
        "id" => "ale_teamphoto3",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Name of the third employee",
        "desc" => "",
        "id" => "ale_teamname3",
        "std" => "Jack Richard",
        "type" => "text");

    $options[] = array( "name" => "Position of the third employee",
        "desc" => "",
        "id" => "ale_teampos3",
        "std" => "Job title",
        "type" => "text");

    $options[] = array( "name" => "Description of the third employee",
        "desc" => "",
        "id" => "ale_teamdesc3",
        "std" => "What does this team member to? Keep it short! This is also a great spot for social links!",
        "type" => "textarea");

    $options[] = array( "name" => "fourth employee photo 200x200px",
        "desc" => "",
        "id" => "ale_teamphoto4",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Name of the fourth employee",
        "desc" => "",
        "id" => "ale_teamname4",
        "std" => "Jack Richard",
        "type" => "text");

    $options[] = array( "name" => "Position of the fourth employee",
        "desc" => "",
        "id" => "ale_teampos4",
        "std" => "Job title",
        "type" => "text");

    $options[] = array( "name" => "Description of the fourth employee",
        "desc" => "",
        "id" => "ale_teamdesc4",
        "std" => "What does this team member to? Keep it short! This is also a great spot for social links!",
        "type" => "textarea");

    $options[] = array( "name" => "Fifth employee photo 200x200px",
        "desc" => "",
        "id" => "ale_teamphoto5",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Name of the fifth employee",
        "desc" => "",
        "id" => "ale_teamname5",
        "std" => "Jack Richard",
        "type" => "text");

    $options[] = array( "name" => "Position of the fifth employee",
        "desc" => "",
        "id" => "ale_teampos5",
        "std" => "Job title",
        "type" => "text");

    $options[] = array( "name" => "Description of the fifth employee",
        "desc" => "",
        "id" => "ale_teamdesc5",
        "std" => "What does this team member to? Keep it short! This is also a great spot for social links!",
        "type" => "textarea");

    $options[] = array( "name" => "Sixth employee photo 200x200px",
        "desc" => "",
        "id" => "ale_teamphoto6",
        "std" => "",
        "type" => "upload");

    $options[] = array( "name" => "Name of the sixth employee",
        "desc" => "",
        "id" => "ale_teamname6",
        "std" => "Jack Richard",
        "type" => "text");

    $options[] = array( "name" => "Position of the sixth employee",
        "desc" => "",
        "id" => "ale_teampos6",
        "std" => "Job title",
        "type" => "text");

    $options[] = array( "name" => "Description of the sixth employee",
        "desc" => "",
        "id" => "ale_teamdesc6",
        "std" => "What does this team member to? Keep it short! This is also a great spot for social links!",
        "type" => "textarea");

    $options[] = array("name" => "Contact options",
        "type" => "heading");

    $options[] = array( "name" => "Enter your email",
        "desc" => "Your email for contact page",
        "id" => "ale_contactmail",
        "std" => "",
        "type" => "text");

    $options[] = array( "name" => "Enter your map iframe link",
        "desc" => "Link with your location on the map. Example iframe src='YOUR LINK'...",
        "id" => "ale_maplink",
        "std" => "https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d557.8803013401323!2d9.187814793518543!3d50.91275024692587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m0!4m3!3m2!1d50.912735!2d9.187927199999999!5e1!3m2!1sru!2sru!4v1444592368277",
        "type" => "textarea");


    $options[] = array("name" => "Theme",
						"type" => "heading");

    $options[] = array( "name" => "Background Size Cover",
                        "desc" => "Check if you want to select cover background size",
                        "id" => "ale_backcover",
                        "std" => "1",
                        "type" => "checkbox");

    $options[] = array( "name" => "Uplaod a favicon icon",
                        "desc" => "Upload or put the link of your favicon icon",
                        "id" => "ale_favicon",
                        "std" => "",
                        "type" => "upload");

	$options[] = array( "name" => "Comments Style",
						"desc" => "Choose your comments style. If you want to use DISQUS comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Disqus+Comment+System&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.  If you want to use Livefyre Realtime Comments comments please install and activate this plugin from <a href=\"" . admin_url('plugin-install.php?tab=search&type=term&s=Livefyre+Realtime+Comments&plugin-search-input=Search+Plugins') . "\">Wordpress Repository</a>.",
						"id" => "ale_comments_style",
						"std" => "wp",
						"type" => "select",
						"options" => $comments_style);

	$options[] = array( "name" => "AJAX Comments",
						"desc" => "Use AJAX on comments posting (works only with Alethemes Comments selected).",
						"id" => "ale_ajax_comments",
						"std" => "1",
						"type" => "checkbox");

	$options[] = array( "name" => "Social Sharing",
						"desc" => "Enable social sharing for posts.",
						"id" => "ale_social_sharing",
						"std" => "1",
						"type" => "checkbox");

    $options[] = array( "name" => "Copyrights",
                        "desc" => "Your copyright message.",
                        "id" => "ale_copyrights",
                        "std" => "",
                        "type" => "editor");

    $options[] = array( "name" => "Home Page Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_homeslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Blog Slider slug",
                        "desc" => "Insert the slider slug. Get the slug on Sliders Section",
                        "id" => "ale_blogslugfull",
                        "std" => "",
                        "type" => "text");

    $options[] = array( "name" => "Typography",
                        "type" => "heading");

    $options[] = array( "name" => "Select the body Font from Google Library",
                        "desc" => "The default Font is - Raleway",
                        "id" => "ale_headerfont",
                        "std" => "Raleway",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the body Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 600",
                        "id" => "ale_headerfontex",
                        "std" => "600",
                        "type" => "text",
                        );

    $options[] = array( "name" => "Select the Headers Font from Google Library",
                        "desc" => "The default Font is - Libre Baskerville",
                        "id" => "ale_mainfont",
                        "std" => "Raleway",
                        "type" => "select",
                        "options" => $headerfont);

    $options[] = array( "name" => "Select the Headers Font (Extended) from Google Library",
                        "desc" => "The default Font (extended) is - 400,400italic",
                        "id" => "ale_mainfontex",
                        "std" => "400,400italic",
                        "type" => "text",
                        );

    $options[] = array( 'name' => "H1 Style",
                        'desc' => "Change the h1 style",
                        'id' => 'ale_h1sty',
                        'std' => array('size' => '22px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H2 Style",
                        'desc' => "Change the h2 style",
                        'id' => 'ale_h2sty',
                        'std' => array('size' => '20px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H3 Style",
                        'desc' => "Change the h3 style",
                        'id' => 'ale_h3sty',
                        'std' => array('size' => '18px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H4 Style",
                        'desc' => "Change the h4 style",
                        'id' => 'ale_h4sty',
                        'std' => array('size' => '16px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H5 Style",
                        'desc' => "Change the h5 style",
                        'id' => 'ale_h5sty',
                        'std' => array('size' => '14px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "H6 Style",
                        'desc' => "Change the h6 style",
                        'id' => 'ale_h6sty',
                        'std' => array('size' => '12px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');

    $options[] = array( 'name' => "Body Style",
                        'desc' => "Change the body font style",
                        'id' => 'ale_bodystyle',
                        'std' => array('size' => '14px','face' => 'Raleway','style' => 'normal','color' => '#333'),
                        'type' => 'typography');


	
	$options[] = array( "name" => "Advanced Settings",
						"type" => "heading");

    $options[] = array( "name" => "Google Analytics Type",
                        "desc" => "Select the google analytics code type. Universal or Classic (The difference between versions you will find in google)",
                        "id" => "ale_analyticstype",
                        "std" => "classic",
                        "type" => "select",
                        "options" => $analytics);
	
	$options[] = array( "name" => "Google Analytics",
						"desc" => "Please insert your Google Analytics code here. Example: <strong>UA-22231623-1</strong>",
						"id" => "ale_ga",
						"std" => "",
						"type" => "text");
	
	$options[] = array( "name" => "Footer Code",
						"desc" => "If you have anything else to add in the footer - please add it here.",
						"id" => "ale_footer_info",
						"std" => "",
						"type" => "textarea");

    $options[] = array( "name" => "Custom CSS Styles",
                        "desc" => "You can add here your styles. ex. .boxclass { padding:10px; }",
                        "id" => "ale_customcsscode",
                        "std" => "",
                        "type" => "textarea");

    $options[] = array( "name" => "Footer menu title",
                        "desc" => "Insert the footer menu title",
                        "id" => "ale_footermenutitle",
                        "std" => "Select a category",
                        "type" => "text");



	return $options;
}

/**
 * Add custom scripts to Options Page
 */
function aletheme_options_custom_scripts() {
 ?>

<script type="text/javascript">
jQuery(document).ready(function() {
    jQuery('#ale_commentongallery').click(function() {
        jQuery('#section-ale_gallerycomments_style').fadeToggle(400);
    });
    if (jQuery('#ale_commentongallery:checked').val() !== undefined) {
        jQuery('#section-ale_gallerycomments_style').show();
    }
});
</script>

<?php
}

/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array 
 */
function aletheme_metaboxes($meta_boxes) {
	
	$meta_boxes = array();

    $prefix = "ale_";


    $meta_boxes[] = array(
        'id'         => 'contact_page_metabox',
        'title'      => 'Contact Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-contact.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr1',
                'type' => 'textarea',
            ),
            array(
                'name' => 'Second Description',
                'desc' => 'Insert the text',
                'id'   => $prefix . 'descr2',
                'type' => 'textarea',
            ),
        )
    );

    $meta_boxes[] = array(
        'id'         => 'press_page_metabox',
        'title'      => 'Press Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-press.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'Press title #1',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit1',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #1',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #1',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage1',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #1',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo1',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #2',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit2',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #2',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #2',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage2',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #2',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo2',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #3',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit3',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #3',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #3',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage3',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #3',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo3',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #4',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit4',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #4',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #4',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage4',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #4',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo4',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #5',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit5',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #5',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #5',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage5',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #5',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo5',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #6',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit6',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #6',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #6',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage6',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #6',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo6',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #7',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit7',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #7',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #7',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage7',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #7',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo7',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #8',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit8',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #8',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #8',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage8',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #8',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo8',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #9',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit9',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #9',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #9',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage9',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #9',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo9',
                'type' => 'text',
            ),

            array(
                'name' => 'Press title #10',
                'desc' => 'Insert the title',
                'id'   => $prefix . 'presstit10',
                'type' => 'text',
            ),
            array(
                'name' => 'Press Thumb #10',
                'desc' => 'Insert the image (max-height - 280px)',
                'id'   => $prefix . 'pressthumb10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Image #10',
                'desc' => 'Insert the image or let it empty if you want to use a video.',
                'id'   => $prefix . 'pressimage10',
                'type' => 'file',
            ),
            array(
                'name' => 'Press Video link #10',
                'desc' => 'Insert the video or let it empty if you want to use an image. (Embed link - ex //www.youtube.com/embed/LtulTGxJdDc)',
                'id'   => $prefix . 'pressvideo10',
                'type' => 'text',
            ),
        )
    );


    $meta_boxes[] = array(
        'id'         => 'aboutslider_page_metabox',
        'title'      => 'About Page Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        'show_on'    => array( 'key' => 'page-template', 'value' => array('template-about.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => 'First member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Name',
                'desc' => 'Insert member name...',
                'id'   => $prefix . 'memname4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Prof',
                'desc' => 'Insert member prof...',
                'id'   => $prefix . 'memprof4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb3',
                'type'    => 'text',
            ),
            array(
                'name' => 'fourth member FB link',
                'desc' => 'Insert member FB link...',
                'id'   => $prefix . 'memfb4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member TW link',
                'desc' => 'Insert member TW link...',
                'id'   => $prefix . 'memtw4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem1',
                'type'    => 'text',
            ),
            array(
                'name' => 'Second member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem2',
                'type'    => 'text',
            ),
            array(
                'name' => 'Third member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem3',
                'type'    => 'text',
            ),
            array(
                'name' => 'Fourth member Email',
                'desc' => 'Insert member email...',
                'id'   => $prefix . 'memem4',
                'type'    => 'text',
            ),
            array(
                'name' => 'First member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc1',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Second member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc2',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Third member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc3',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'Fourth member Description',
                'desc' => 'Insert member description...',
                'id'   => $prefix . 'memdesc4',
                'type'    => 'wysiwyg',
            ),
            array(
                'name' => 'First member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava1',
                'type'    => 'file',
            ),
            array(
                'name' => 'Second member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava2',
                'type'    => 'file',
            ),
            array(
                'name' => 'Third member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava3',
                'type'    => 'file',
            ),
            array(
                'name' => 'Fourth member avatar',
                'desc' => 'Insert member avatar...',
                'id'   => $prefix . 'memava4',
                'type'    => 'file',
            ),
        )
    );

	return $meta_boxes;
}

/**
 * Get image sizes for images
 * 
 * @return array
 */
function aletheme_get_images_sizes() {
	return array(

        'gallery' => array(
            array(
                'name'      => 'gallery-thumba',
                'width'     => 430,
                'height'    => 267,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-mini',
                'width'     => 100,
                'height'    => 67,
                'crop'      => true,
            ),
            array(
                'name'      => 'gallery-big',
                'width'     => 680,
                'height'    => 9999,
                'crop'      => false,
            ),
        ),
        'post' => array(
            array(
                'name'      => 'post-blogsize',
                'width'     => 1920,
                'height'    => 1080,
                'crop'      => false,
            ),
        ),

    );
}

/**
 * Add post types that are used in the theme 
 * 
 * @return array
 */
function aletheme_get_post_types() {
	return array(
        'gallery' => array(
            'config' => array(
                'public' => true,
                'menu_position' => 20,
                'has_archive'   => true,
                'supports'=> array(
                    'title',
                    'editor',
                    'thumbnail',
                ),
                'show_in_nav_menus'=> true,
            ),
            'singular' => 'Gallery',
            'multiple' => 'Galleries',
            'columns'    => array(
                'first_image',
            )
        ),
    );
}

/**
 * Add taxonomies that are used in theme
 * 
 * @return array
 */
function aletheme_get_taxonomies() {
	return array(

        'gallery-category'    => array(
            'for'        => array('gallery'),
            'config'    => array(
                'sort'        => true,
                'args'        => array('orderby' => 'term_order'),
                'hierarchical' => true,
            ),
            'singular'    => 'Gallery Category',
            'multiple'    => 'Gallery Categories',
        ),
    );
}

/**
 * Add post formats that are used in theme
 * 
 * @return array
 */
function aletheme_get_post_formats() {
	return array();
}

/**
 * Get sidebars list
 * 
 * @return array
 */
function aletheme_get_sidebars() {
	$sidebars = array();
	return $sidebars;
}

/**
 * Predefine custom sliders
 * @return array
 */
function aletheme_get_sliders() {
	return array(
		'sneak-peek' => array(
			'title'		=> 'Sneak Peek',
		),
	);
}

/**
 * Post types where metaboxes should show
 * 
 * @return array
 */
function aletheme_get_post_types_with_gallery() {
	return array('gallery');
}

/**
 * Add custom fields for media attachments
 * @return array
 */
function aletheme_media_custom_fields() {
	return array();
}