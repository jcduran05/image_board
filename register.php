<?php
require_once( 'smarty/libs/Smarty.class.php' );
require_once 'core/init.php';

$smarty = new Smarty();
$smarty->template_dir = 'templates';
$smarty->compile_dir = 'templates_c';

if(Input::exists()) {
	if(Token::check(Input::get('token'))) {

		$validate = new Validate();
		$validation = $validate->check($_POST, array(
			'username' => array(
				'required' => true,
				'min' => 2,
				'max' => 20,
				'unique' => 'users'
				),
			'password' => array(
				'required' => true,
				'min' => 6
				),
			'password_again' => array(
				'required' => true,
				'matches' => 'password'
				),
			'name' => array(
				'required' => true,
				'min' => 2,
				'max' => 50,
				),
			));

		if ($validation->passed()) {
			$user = new User();

			$salt = Hash::salt(32);

			try {
				$user->create(array(
					'username' => Input::get('username'),
					'password' => Hash::make(Input::get('password'), $salt),
					'salt' => $salt,
					'name' => Input::get('name'),
					'joined' => date('Y-m-d H:i:s'),
					'group' => 1
				));

				Session::flash('home', 'You have been successfully registered and can now log in!');
				header('Location: index.php');

			} catch(Exception $e) {
				die($e->getMessage());
			}
		} else {
			foreach ($validation->errors() as $error) {
				echo $error, '<br>';
			}
	 	}	
	}
}

$smarty->assign('token', Token::generate());
$smarty->display( 'register.tpl' );
?>
