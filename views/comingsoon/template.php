<?php defined('SYSPATH') OR die('No direct access allowed.');
$imgpath = ComingSoon::config('imgpath');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $l = substr(I18n::$lang, 0, 2) ?>" lang="<?php echo $l ?>">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php echo Utf8::ucfirst($title) ?></title>
	<style type="text/css">
		HTML, BODY, DIV {
			margin: 0;
			padding: 0;
			font: 'Droid Sans',Arial,sans-serif;
		}
		#wrapper {
			width: 600px;
			margin: 100px auto;
			background: #eee;
			padding: 10px;
			border: 2px solid #ddd;
			-moz-border-radius: 5px;
			-webkit-border-radius: 5px;
			border-radius: 5px;
		}
		#logo {
			width: 128px;
			height: 128px;
			float: left;
		}
		#header h1 {
			font-size: 2.2em;
			text-align: center;
		}
		#header {
			width: 450px;
			height: 150px;
			float: right;
			padding: 0 10px;
			font: Calibri,Arial,sans-serif;
		}
		#header .description {
			font-size: 1.6em;
			font-style: italic;
			color: #555;
			text-align: center;
		}
		form {
			font-size: 1.1em;
			padding: 5px;
			margin: 0;
		}
		input.email {
			height: 50px;
			line-height: 50px;
			width: 420px;
			margin: 0;
		}
		form p.note {
			color: #777;
		}
		button.submit, input.email {
			font-size: 1.2em;
		}
		button.submit {
			padding: 0 0 0 10px;
			border: 0;
			background: url(<?php echo $imgpath ?>gray_left.png) no-repeat left;
			width: 150px;
			margin-left: 5px;
			cursor: pointer;
		}
		button.submit span {
			display: block;
			padding:0 10px 0 0;
			position: relative;
			background: url(<?php echo $imgpath ?>gray_right.png) no-repeat right;
			height: 50px;
			line-height: 50px;
			font-weight: bold;
		}
		#messages {
			clear: both;
			list-style-type: none;
			width: 500px;
			margin: 0 auto;
			padding: 0;
		}
		#messages LI {
			border: 1px solid gray;
			background-image: url(<?php echo $imgpath ?>unknown.png);
			background-repeat: no-repeat;
			background-position: center left;
			padding: 3px 3px 3px 20px;
			font-weight: bold;
			font-size: 1.1em;
			color: #404040;
		}
		#messages LI.error {
			border-color: #f00;
			background-color: #ffb6c1;
			background-image: url(<?php echo $imgpath ?>error.png);
		}
		#messages LI.success {
			border-color: #0f0;
			background-color: #90ee90;
			background-image: url(<?php echo $imgpath ?>success.png);
		}
		a.gitlink {
			font-size: 0.8em;
			color: #808080;
			text-align: right;
		}
	</style>
	<!--[if IE]>
	<style type="text/css">
		/* style exceptions for all IE browsers */
		button.submit { width:auto; overflow:visible; }
		button.submit span { margin-top:1px; }
	</style>
	<![endif]-->
</head>
<body id="<?php echo $status ?>">
	<div id="wrapper">
		<div id="logo">
			<img src="<?php echo $imgpath ?>under_construction.png" />
		</div>
		<div id="header">
			<h1><?php echo __('Coming soon') ?></h1>
			<p class="description"><?php echo __('All about Kohana framework') ?></p>
		</div>
		<ul id="messages">
			<?php
			foreach($messages as $type => $message): ?>
				<li class="<?php echo $type ?>"><?php echo $message ?></li>
			<?php endforeach ?>
		</ul>
			<?php echo $content ?>
		<a href="http://github.com/russiankohana/kohanaworld" class="gitlink">more info</a>
	</div>
</body>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-21187528-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</html>