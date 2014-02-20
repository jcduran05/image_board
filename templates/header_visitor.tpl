<div class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">image_board 掲示板</a>
		</div>
		<div class="navbar-collapse collapse">
		<form action="login.php" method="post" class="navbar-form navbar-right" role="form">
				<div class="form-group">
					<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off">
				</div>
				<input type="hidden" name="token" value="{$token}">
				<input type="submit" class="btn btn-default" value="Log in">
				<a href="register.php" class="btn btn-primary" role="button">会員登録</a>
			</form>
		</div><!--/.navbar-collapse -->
	</div>
</div>