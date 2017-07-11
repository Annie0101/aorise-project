<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 5 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="./common/CaseShow.css">
<script  src="./js/jquery.min.js"></script>
<script src="js/jsjquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="common/bootstrap.min.css">
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<div class="myImg">
	<img src="./images/9.jpg" alt="">
	<p>案例展示</p>
	<span>您当前所在位置:首页>案例展示</span>
</div>
<div class="myLine"></div>

<!-- mainbody-->
<section class="sectionDiv">
	<h1>案例展示</h1>
	<div class="myLine2"></div>
</section>
<!-- /mainbody-->
<!--图片-->
<div class="container">
	<div class="section">
	<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=19 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
					while($row = $dosql->GetArray())
					{
					?>
		<div class="row">
			<ul>
				<div class="col-md-4 col-lg-4 col-ms-4">
					<li>
						<img src="<?php echo $row['picurl']; ?>" alt=""> 
						<p><?php echo $row['title']; ?></p>
					</li>
				</div>
			<?php
				}
				?>
			</ul>
		</div>
	</div>
<!--图片2-->
	<div class="section1">
	<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=19 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 3,6");
					while($row = $dosql->GetArray())
					{
					?>
		<div class="row">
			<ul>
				<div class="col-md-4 col-lg-4 col-ms-4">
					<li>
						<img src="<?php echo $row['picurl']; ?>" alt=""> 
						<p><?php echo $row['title']; ?></p>
					</li>
				</div>
			<?php
				}
				?>
			</ul>
		</div>
	</div>
</div>
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>