<?php
require_once(dirname(__FILE__).'/include/config.inc.php');

//初始化参数检测正确性
$cid = empty($cid) ? 4 : intval($cid);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,$cid); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" href="./common/new.css">
<script  src="./js/jquery.min.js"></script>
<script src="js/jsjquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="common/bootstrap.min.css">
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
			<div class="myImg">
				<img src="./images/5.jpg" alt="">
				<p>新闻资讯</p>
				<span>您当前所在位置:首页>解决方案</span>
			</div>
			<div class="myLine"></div>
<!-- /banner-->

<!-- mainbody-->
	<section class="sectionDiv">
		<h1>新闻资讯</h1>
		<div class="myLine2"></div>
	</section>
<!-- /mainbody-->
<!--/section-->
<div class="container">
<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=18 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
				while($row = $dosql->GetArray())
				{
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];

				?>
<div class="mySection">
	<div class="row">
	
		<div class="col-lg-4 col-md-4 col-xs-4">
			<div class="myimg1">
				<img src="<?php echo $row['picurl']; ?>" alt=""> 
			</div>
		</div>
		<div class="col-lg-8 col-md-8 col-xs-8">
				<h1><a href="<?php echo $gourl ?>"><?php echo $row['title']; ?></a></h1>
				<p class="myTime"><?php echo GetDatetime($row['posttime']); ?></p>
				<span><?php echo $row['content']; ?></span>
		</div>
		
		</div>
	</div>
	<?php
		}
		?>
</div>
<!--/section-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>