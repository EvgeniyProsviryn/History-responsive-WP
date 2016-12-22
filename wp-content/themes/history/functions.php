<?php
/****************************************************************
 * DO NOT DELETE
 ****************************************************************/
if ( get_stylesheet_directory() == get_template_directory() ) {
	define('ALETHEME_PATH', get_template_directory() . '/aletheme');
	define('ALETHEME_URL', get_template_directory_uri() . '/aletheme');
}  else {
    define('ALETHEME_PATH', get_theme_root() . '/fuerza/aletheme');
    define('ALETHEME_URL', get_theme_root_uri() . '/fuerza/aletheme');
}

require_once ALETHEME_PATH . '/init.php';

load_theme_textdomain( 'aletheme', get_template_directory() . '/lang' );
$locale = get_locale();
$locale_file = get_template_directory() . "/lang/$locale.php";
if ( is_readable($locale_file) )
    require_once($locale_file);

/****************************************************************
 * You can add your functions here.
 *
 * BE CAREFULL! Functions will dissapear after update.
 * If you want to add custom functions you should do manual
 * updates only.
 ****************************************************************/
function wp_corenavi() {
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
    $a['total'] = $max;
    $a['current'] = $current;

    $total = 1; //
    $a['mid_size'] = 3; //left and right
    $a['end_size'] = 1; //begin end
    $a['prev_text'] = '&laquo;';
    $a['next_text'] = '&raquo;';
    if ($max > 1) echo '<div class="navigation">';
    if ($total == 1 && $max > 1) $pages = '<span class="pages">Page ' . $current . ' of ' . $max . '</span>'."\r\n";
    echo $pages . paginate_links($a);
    if ($max > 1) echo '</div>';


}

