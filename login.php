<?php
require_once( 'smarty/libs/Smarty.class.php' );
require_once 'core/init.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {
		$validate = new Validate();
		$validation = $validate->check($_POST, array (
			'username' => array('required' => true),
			'password' => array('required' => true)
		));
	}

	if($validation->passed()) {
		// log user in
		$user = new User();

		$remember = (Input::get('remember') === 'on') ? true : false; 
		$login = $user->login(Input::get('username'), Input::get('password'), $remember);

		if($login) {
			Redirect::to('index.php');
		} else {
			echo 'Sorry, login failed.';
		}

	} else {
		foreach($validation->errors() as $error) {
			echo $error, '<br>';
		}
	}

}

$smarty->assign('token', Token::generate());
$smarty->display( 'login.tpl' );
?>

<!--<form action="" method="post">
	<div class="field">
		<label for="username">Username</label>
		<input type="text" name="username" id="username" autocomplete="off">
	</div>

	<div class="field">
		<label for="password">Password</label>
		<input type="password" name="password" id="password" autocomplete="off">
	</div>

	<div class="field">
		<label for="remember"> Remember me
			<input type="checkbox" name="remember" id="remember">
		</label>
	</div>

	<input type="hidden" name="token" value="{$token}">
	<input type="submit" value="Log in">
</form>-->