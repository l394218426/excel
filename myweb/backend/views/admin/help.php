<?php 
use common\services\UrlServices;
use common\composers\BaseController;
 ?>
<!doctype html>
<html lang="zh-CN">
<head>
	<meta charset="UTF-8">

    <link rel="stylesheet" href="/css/login.css">
    <script type="text/javascript" src="js/jquery.min.js"></script>
	<title>后台登陆</title>
</head>
<body>
	<div id="login_top">
		<div id="welcome">
			欢迎使用Game Sky 游戏后台系统
		</div>
		<div id="back">
			<a href="<?=UrlServices::adminUrl('login') ?>">返回首页</a>&nbsp;&nbsp; | &nbsp;&nbsp;
			<a href="<?=UrlServices::adminUrl('help') ?>">帮助</a>
		</div>
	</div>
	<div  style="width:1000px;height: 1000px;">
		
		<center>
	<h1 style="color: black; line-height: 800px;">此平台仅供开发人员使用，无关人员不得非法操作，违者必究</h1>
			
		</center>
	
		</div>
				
			


	<div id="login_bottom">
		版权所有
	</div>
</body>
</html>