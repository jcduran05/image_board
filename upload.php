<?php 
require_once( 'smarty/libs/Smarty.class.php' );
require_once 'core/init.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$user = new User();

if($user->isLoggedIn()) {
	$user = new User();
	$data = $user->data();
	$username = $data->username;
	$template = "upload.tpl";
} else {
	header("Location: index.php");
}

if ( isset( $_POST['send']) === true ) {
	$upload = new Upload();

	$data = $user->data();
	$comment = $_POST['comment'];
	$tmp_image = $_FILES['image'];

	$upload->checkImageUpload($tmp_image);
	$upload->insert_image(escape($data->username) ,$comment);
}

$smarty->assign('username', $username);
$smarty->display($template);
?>