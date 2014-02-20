<?php
require_once( 'smarty/libs/Smarty.class.php' );
require_once 'core/init.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$user = new User();
$images = new Imageboard();
$recent_images = $images->recent_images();

// used when a user has registered and is redirected
if(Session::exists('home')) {
	echo '<p>' . Session::flash('home') . '</p>';
	$template = "index.tpl";
}

// check to see if a user is logged in
if($user->isLoggedIn()) {
	$user = new User();
	$data = $user->data();
	$username = $data->username;
	$template = "index.tpl";

	} else {
		echo "You need to login or register";
		$username = '';
		$template = "index_visitor.tpl";
	}

// smarty assignments
$smarty->assign('username', $username);
$smarty->assign('recent_images', $recent_images);
$smarty->assign('token', Token::generate());
$smarty->display( $template );

?>