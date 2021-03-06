<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
$id  = empty($id)  ? 0 : intval($id);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>北京四季无边科技有限公司</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="Hovace" content="北京四季无边科技有限公司"/>
  <meta name="keywords"
        content="free website templates, free html5, free bootstrap, free website template, html5, css3, mobile first, responsive"/>
<?php echo GetHeader(1,$cid); ?>

          <!-- Facebook and Twitter integration -->
          <meta property="og:title" content=""/>
          <meta property="og:image" content=""/>
          <meta property="og:url" content=""/>
          <meta property="og:site_name" content=""/>
          <meta property="og:description" content=""/>
          <meta name="twitter:title" content=""/>
          <meta name="twitter:image" content=""/>
          <meta name="twitter:url" content=""/>
          <meta name="twitter:card" content=""/>



  <link rel="shortcut icon" href="static/images/favicon.ico" type="image/x-icon">

  <!-- Animate.css -->
  <link rel="stylesheet" href="static/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="static/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="static/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="static/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="static/css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="static/css/owl.carousel.min.css">
  <link rel="stylesheet" href="static/css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="static/css/style.css">

  <!-- Modernizr JS -->
  <script src="static/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="static/js/respond.min.js"></script>
  <![endif]-->



<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>

</head>
<body>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- mainbody-->

<div id="gtco-history" class="gtco-section border-bottom animate-box fadeInUp animated-fast">
		<div class="gtco-container">

			<div class="row">


	<div class="OneOfTwo">
		<!-- 详细区域开始 -->
		<div class="listConts">
			<?php

			//检测文档正确性
			$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE id=$id");
			if(is_array($row))
			{
				//增加一次点击量
				$dosql->ExecNoneQuery("UPDATE `#@__infolist` SET hits=hits+1 WHERE id=$id");
			?>
			<!-- 标题区域开始 -->
			<h1 class="title"><?php echo $row['title']; ?></h1>
			<div class="info"><small>更新时间：</small><?php echo GetDateTime($row['posttime']); ?><small>点击次数：</small><?php echo $row['hits']; ?>次</div>
			<!-- 标题区域结束 -->
			<!-- 摘要区域开始 -->
			<?php
			//判断是否显示描述
			if(!empty($row['description'])) echo '<div class="desc">'.$row['description'].'</div>';
			?>
			<!-- 摘要区域结束 -->
			<!-- 组图区域开始-->
			<?php
			//判断显示缩略图或组图
			if(!empty($row['picarr']))
			{
				$picarr = unserialize($row['picarr']);
			?>
			<div class="picarr">
				<div class="picture">
					<?php
					foreach($picarr as $k)
					{
						$v = explode(',', $k);
					?>
					<a href="<?php echo $v[0]; ?>" class="lightbox" alt="<?php echo $v[1]; ?>"><img src="<?php echo $v[0]; ?>" /></a>
					<?php
					}
					?>
				</div>
				<ul class="preview">
					<?php
					foreach($picarr as $k)
					{
						$v = explode(',', $k);
					?>
					<li><a href="javascript:void(0);"><img src="<?php echo $v[0]; ?>" /></a></li>
					<?php
					}
					?>
					<div class="cl"></div>
				</ul>
				<div class="cl"></div>
			</div>
			<?php
			}
			?>
			<!-- 组图区域结束 -->
			<!-- 内容区域开始 -->
			<div id="textarea">
				<?php
				if($row['content'] != '')
					echo GetContPage($row['content']);
				else
					echo '';
				?>
			</div>
			<!-- 内容区域结束 -->
			<!-- 相关文章开始 -->
			<div class="preNext">
				<div class="line"><strong></strong></div>
				<ul class="text nopadding">
				<?php

				//获取上一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid<".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
				if($r < 1)
				{
					echo '<li>上一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'newsshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'newsshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '<li>上一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}

				//获取下一篇信息
				$r = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=".$row['classid']." AND orderid>".$row['orderid']." AND delstate='' AND checkinfo=true ORDER BY orderid ASC");
				if($r < 1)
				{
					echo '<li>下一篇：已经没有了</li>';
				}
				else
				{
					if($cfg_isreurl != 'Y')
						$gourl = 'newsshow.php?cid='.$r['classid'].'&id='.$r['id'];
					else
						$gourl = 'newsshow-'.$r['classid'].'-'.$r['id'].'-1.html';

					echo '<li>下一篇：<a href="'.$gourl.'">'.$r['title'].'</a></li>';
				}
				?>
				</ul>

                <input type="hidden" name="aid" id="aid" value="<?php echo $id; ?>" />
				<input type="hidden" name="molds" id="molds" value="1" />
			</div>
			<!-- 相关文章结束 -->
			<?php
			if($cfg_comment == 'Y')
			{
			?>


			<?php
			}
			}
			?>
		</div>
		<!-- 详细区域结束 -->
	</div>


			</div>


		</div>
	</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->

<!-- built files will be auto injected -->

<!-- jQuery -->
<script src="static/js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="static/js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="static/js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="static/js/jquery.waypoints.min.js"></script>
<!-- Carousel -->
<script src="static/js/owl.carousel.min.js"></script>
<!-- countTo -->
<script src="static/js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="static/js/jquery.magnific-popup.min.js"></script>
<script src="static/js/magnific-popup-options.js"></script>
<!-- Main -->
<script src="static/js/main.js"></script>
<script src="static/js/index.js"></script>
</body>
</html>
