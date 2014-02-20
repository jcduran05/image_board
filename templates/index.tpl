<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>画像掲示板 | Home</title>
	<link rel="stylesheet" href="css/bootstrap.css"></head>
  <link rel="stylesheet" href="css/style.css"></head>
<body>
{include file="header.tpl"}
   <div class="jumbotron">
      <div class="container">
        <h1>Hello!</h1>
        <p>画像を追加するためにアップロードのリンクをクリックしてください。</p>
      </div>
    </div>
    <div class="container">
      {include file="recent_images.tpl"}
    </div>
	<script src="js/bootstrap.js"></script>
  <script src="js/jquery-1.11.0.min.js"></script>
</body>
</html>