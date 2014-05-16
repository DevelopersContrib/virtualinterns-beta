<?php
if (function_exists('register_sidebar')) {
	register_sidebar(array(
		'name'=> 'Home Join Us', // for employer
		'id' => 'home_join_us',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	register_sidebar(array(
		'name'=> 'Home Signup', // for intern
		'id' => 'home_signup',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
	
	register_sidebar(array(
		'name'=> 'Home Login',
		'id' => 'home_login',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '',
		'after_title' => '',
	));
}
?>