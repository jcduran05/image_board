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

		<!-- left side of menu -->  
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav">
            	<li><a href="upload.php">Upload</a></li>
            	<li class="dropdown">
             		<a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <b class="caret"></b></a>
	                <ul class="dropdown-menu">
                    <li><a href="#">Action</a></li>
	                    <li><a href="#">Another action</a></li>
	                    <li><a href="#">Something else here</a></li>
	                    <li class="divider"></li>
	                    <li class="dropdown-header">Nav header</li>
	                    <li><a href="#">Separated link</a></li>
	                    <li><a href="#">One more separated link</a></li>
	                </ul>
                </li>
            </ul>

            <!-- right side of menu -->  
		    <ul class="nav navbar-nav navbar-right">
             	<li class="active"><a href="#">{$username}</a></li>
             	<li><a href="logout.php">ログアウト</a></li>
            	</ul>
		</div><!--/.navbar-collapse -->
	</div>
</div>