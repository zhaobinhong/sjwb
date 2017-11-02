<?php require_once(dirname(__FILE__).'/inc/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>左侧菜单</title>
<link href="templates/style/menu.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="templates/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/js/tinyscrollbar.js"></script>
<script type="text/javascript" src="templates/js/leftmenu.js"></script>
</head>
<body>
<div class="quickBtn"> <span class="quickBtnLeft"><a href="infolist_add.php" target="main">添列表</a></span> <span class="quickBtnRight"><a href="infoimg_add.php" target="main">添图片</a></span> </div>

<div class="tGradient"></div>
<div id="scrollmenu">
	<div class="scrollbar">
		<div class="track">
			<div class="thumb">
				<div class="end"></div>
			</div>
		</div>
	</div>
	<div class="viewport">
		<div class="overview">
			<!--scrollbar start-->
			<div class="menubox">
				<div class="title on" id="t1" onclick="DisplayMenu('leftmenu01');" title="点击切换显示或隐藏"> 网站系统管理 </div>
				<div id="leftmenu01"> <a href="admin.php" target="main">管理员管理</a> <a href="site.php" target="main">站点配置管理</a> <a href="web_config.php" target="main">网站信息配置</a> <a href="upload_filemgr_sql.php" target="main">上传文件管理</a><a href="database_backup.php" target="main">数据库管理</a> <a href="admingroup.php" target="main" title="管理组管理" class="admingroup"></a> </div>
			</div>
			<div class="hr_5"></div>
			<div class="menubox">
				<div class="title" onclick="DisplayMenu('leftmenu02');" title="点击切换显示或隐藏"> 资讯内容管理 </div>
				<div id="leftmenu02" style="display:none">
					<div class="hr_1"> </div>
					 <a href="infolist.php" target="main">公司资讯管理</a>
					<div class="hr_1"> </div>
					 </div>
			</div>
			<div class="hr_5"></div>

	</div>
</div>
<div class="bGradient"></div>

</body>
</html>
