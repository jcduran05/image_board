<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | Upload</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
{include file="header.tpl"}
	<div class="container">
	<div class="row">
    <div class="col-md-12 upload">
		<!-- image input -->
		<form method="post" action="" class="form" role="form" enctype="multipart/form-data">
			<div class="form-group col-md-12">
				<label for="comment">Comment</label>
				<textarea id="comment" class="form-control" name="comment" rows="5"></textarea>
			</div>
			<div class="form-group col-md-12">
				<label for="image"></label>
				<input type="file" id="image" name="image" />
			</div>
			<input type="submit" class="btn btn-default" name="send" value="書き込む" />
		</form>
		<!-- image input -->
	</div>
	</div>
	</div>

	<script src="js/bootstrap.js"></script>
  	<script src="js/jquery-1.11.0.min.js"></script>
</body>
</html>