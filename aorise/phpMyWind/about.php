<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 8 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
	<link rel="stylesheet" type="text/css" href="./common/about.css">
	<script  src="./js/jquery.min.js"></script>
	<script src="js/jsjquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="common/bootstrap.min.css">
<script type="text/javascript">
$(function(){
    $(".caselist a.img img").LoadImage({width:100,height:80});
});
</script>
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
<div class="myImg">
	<img src="./images/15.jpg" alt="">
	<p>关于我们</p>
	<span>您当前所在位置:首页>关于我们</span>
</div>
<div class="myLine"></div>
<!-- /banner-->
<!-- notice-->
<section class="sectionDiv">
	<h1>关于我们</h1>
	<div class="myLine2"></div>
</section>
<!-- /notice-->
<!-- mainbody-->
<section class="mySection">
	<div class="myImg1">
	<a href="#">关于我们/About Us</a>
	</div>
	<div class="myImg2">
	<ul>
		<li>公司简介</li>
		<li>荣誉资质</li>
		<li>企业文化</li>
		<li>董事长致辞</li>
		<li>公司风采</li>
		<li>合作伙伴</li>
		<li>公司地址</li>
	</ul>
	</div>
	<div class="myFont">
	<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=20 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
					while($row = $dosql->GetArray())
					{
					?>
		<p class="myFont1"><?php echo $row['content']; ?></p>
	</div>
	<?php
	}
	?>
</section>

<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>