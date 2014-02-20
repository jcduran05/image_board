<?php
require_once( 'smarty/libs/Smarty.class.php' );
require_once 'core/init.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

$images = new Imageboard();
$all_images = $images->display_all();

var_dump($all_images);

$template = "index.tpl";

//$smarty->assign('all_images', $data);
$smarty->assign('token', Token::generate());
$smarty->assign('all_images', $all_images);
$smarty->display( $template );

?>