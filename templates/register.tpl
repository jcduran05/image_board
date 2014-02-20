<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | 登録</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
	<body>
{include file="header_visitor.tpl"}
		<div class="container" style="margin: 60px 0;">
			<div class="row">
				<div class="col-md-5 col-md-offset-4">
					<form action="register.php" class="form" method="post">
						<div class="form-group col-md-12">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" id="username" value="" autocomplete="off">
						</div>
						<div class="form-group col-md-12">
							<label for="password">Choose a password</label>
							<input type="password" class="form-control" name="password" id="password">
						</div>
						<div class="form-group col-md-12">
							<label for="password_again">Enter your password again</label>
							<input type="password" class="form-control" name="password_again" id="password_again">
						</div>
						<div class="form-group col-md-12">
							<label for="name">Enter your name</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
						<input type="hidden" name="token" value="{$token}">
						<input type="submit" class="btn btn-default submit" value="Register">
					</form>
				</div>
			</div>
		</div>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	</body>
	</html>

