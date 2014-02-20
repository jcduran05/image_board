<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"></head>
</head>
<body>
	{$img_msg}
	<div class="container" style="margin: 50px 0;">
	<div class="row">
    <div class="col-md-12">
		<!-- image input -->
		<form method="post" action="" class="form-inline" role="form" enctype="multipart/form-data">
			<div class="form-group col-md-12">
				<label for="name">Name</label>
				<input type="text" id="name" class="form-control" name="name" value="" />
			</div>
			<div class="form-group col-md-12">
				<label for="comment">Comment</label>
				<textarea id="comment" class="form-control" name="comment" rows="4" cols="20"></textarea>
			</div>
			<br />
			<div class="form-group col-md-12">
				<label for="image"></label>
				<input type="file" id="image" name="image" />
			</div>
			<br />
			<input style="margin: 10px 10px;" type="submit" class="btn btn-default" name="send" value="書き込む" />
		</form>
		<!-- image input -->

		<!-- show submitted data here -->
	<div class="row">
	{foreach from=$data item=value}
    <div class="col-md-12">
			<div class="col-md-3">
			<img width="80%" height="80%" src="{$value.img}" class="img-rounded">
			</div>
			<div class="col-md-9">
			{$value.name}
			{$value.comment}
			</div>
	</div>
	{/foreach}
	</div>
		<!-- show submitted data here -->
	</div>
	</div>
	</div>

	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</body>
</html>