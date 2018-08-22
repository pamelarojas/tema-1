<?php 

function register_enqueue_style(){
	$theme_data = wp_get_theme();

	wp_register_style('bootstrap', get_theme_file_uri ('vendor/bootstrap/css/bootstrap.min.css'), null,$theme_data->get('version'),'screen');

	wp_register_style('portafolio', get_theme_file_uri ('css/portfolio-item.css'), null,$theme_data->get('version'),'screen');


	wp_enqueue_style('bootstrap');
	wp_enqueue_style('portafolio');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');




function register_enqueue_scripts(){
	$theme_data = wp_get_theme();

	wp_deregister_script('jquery');
	wp_deregister_script('jquery-migrate');

	wp_register_script('jquery', get_theme_file_uri ('vendor/jquery/jquery.min.js'), 
     array('jquery_migrate'), null, true);

	wp_register_script('jquery', get_theme_file_uri ('vendor/bootstrap/js/bootstrap.bundle.min.js'),
     array('jquery_migrate'), null, true );


	wp_enqueue_script('jquery');
	wp_enqueue_script('portafolio');
}

add_action('wp_enqueue_scripts', 'register_enqueue_style');
?>

<?php 

if (function_exists('register_nav_menus')){
	register_nav_menus(array('superior'=>'menu principal superior'));
}

if (function_exists('add_theme_support')){
	add_theme_support('post_thumbnails');
}

 ?>