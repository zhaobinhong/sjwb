<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>四季无边</title>
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



  <link rel="shortcut icon" href="../static/images/favicon.ico" type="image/x-icon">

  <!-- Animate.css -->
  <link rel="stylesheet" href="../static/css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../static/css/icomoon.css">
  <!-- Themify Icons-->
  <link rel="stylesheet" href="../static/css/themify-icons.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../static/css/bootstrap.css">

  <!-- Magnific Popup -->
  <link rel="stylesheet" href="../static/css/magnific-popup.css">

  <!-- Owl Carousel  -->
  <link rel="stylesheet" href="../static/css/owl.carousel.min.css">
  <link rel="stylesheet" href="../static/css/owl.theme.default.min.css">

  <!-- Theme style  -->
  <link rel="stylesheet" href="../static/css/style.css">

  <!-- Modernizr JS -->
  <script src="../static/js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="../static/js/respond.min.js"></script>
  <![endif]-->



<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>

</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->

<!-- mainbody-->
<div class="subBody">
	<div class="subTitle">
		<div class="cl"></div>
	</div>
	<div class="OneOfTwo">
		<div class="subCont">
			<ul class="news_list2">
				<?php

				$dopage->GetPage("SELECT * FROM `#@__infolist` WHERE (classid=$cid OR parentstr LIKE '%,$cid,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC",8);
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y') $gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y') $gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else $gourl = $row['linkurl'];

					$row2 = $dosql->GetOne("SELECT `classname` FROM `#@__infoclass` WHERE `id`=".$row['classid']);
					if($cfg_isreurl!='Y') $gourl2 = 'news.php?cid='.$row['classid'];
					else $gourl2 = 'news-'.$row['classid'].'-1.html';
				?>
			<li> <span class="title"><a href="<?php echo $gourl; ?>" style="color:<?php echo $row['colorval']; ?>;font-weight:<?php echo $row['boldval']; ?>;"><?php echo $row['title']; ?></a></span><span class="hits">点击次数：<?php echo $row['hits']; ?></span>
			<br />
			<br />
				<span class="time"><?php echo GetDateTime($row['posttime']); ?></span> </li>
			<?php
				}
				?>
			</ul>
			<?php echo $dopage->GetList(); ?>
		</div>
	</div>

	<div class="cl"></div>
</div>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>
