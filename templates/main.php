<!DOCTYPE html>
<html>
<head>
<title></title>
<meta name="generator" content="">
<meta name="version" content="<?=$version;?>">

<style type="text/css">
html body {
	font-family: Arial,Helvetica,sans-serif;
	font-size: 12px;
}
#container {
	width:500px;
	margin:0 auto;
	margin-top:150px;
}
#error {
	color:red;
	font-weight:bold;
}
#frm {
	padding:10px 15px;
	background-color:#FFC8C8;
	
	border:1px solid #818181;
	
	-webkit-border-radius: 8px;
	-moz-border-radius: 8px;
	border-radius: 8px;
}
#footer {
	text-align:center;
	font-size:10px;
	margin-top:35px;
	clear:both;
}
</style>
</head>
<body>
<div id="container">

	<div style="text-align:center;">
		<h1 style="color:blue;">PHP-Proxy</h1>
	</div>
	<?php if(isset($error_msg)){ ?>	
	<div id="error">
		<p><?php echo strip_tags($error_msg); ?></p>
	</div>
	<?php } ?>
	<div id="frm">
		<form action="index.php" method="post" style="margin-bottom:0;">
			<input name="url" type="text" style="width:400px;" autocomplete="off" placeholder="http://" />
			<input type="submit" value="Go" />
		</form>
		
		<script type="text/javascript">
			document.getElementsByName("url")[0].focus();
		</script>
	</div>
</div>
<div id="footer">
</div>
</body>
</html>
