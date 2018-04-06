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
			<a href="#">返回首页</a>&nbsp;&nbsp; | &nbsp;&nbsp;
			<a href="<?=UrlServices::adminUrl('help') ?>">帮助</a>
		</div>
	</div>
	<div id="login_center">
		<div id="login_area">
			<div id="login_form">
				<form action="<?=UrlServices::adminUrl('login') ?>" method="post">
					<div id="login_tip">
						用户登录
					</div>
					<div><input type="text" class="username" name="user_name"></div>
					<div><input type="password" class="pwd" name="user_pwd"></div>
					<div id="btn_area">
						<input type="submit"  id="sub_btn" value="登&nbsp;&nbsp;录">&nbsp;&nbsp;
				
					</div>
				</form>
			</div>
		</div>
	</div>
	<div id="login_bottom">
		版权所有
	</div>
</body>
</html>