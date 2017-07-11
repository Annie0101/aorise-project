<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(1,0,0,'人才招聘'); ?>
<link rel="stylesheet" href="./common/join.css">
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
	<img src="./images/16.jpg" alt="">
	<p>加入奥昇</p>
	<span>您当前所在位置:首页>加入奥昇</span>
</div>
<!-- /banner-->
<!-- mainbody-->
<section class="sectionDiv">
	<div class="myFont">
		<h1>前言</h1>
		<span class="mySpan">湖南奥昇信息技术有限公司专注于教育、医疗卫生等领域的软硬件开发、生产、销售、运营服务及相关大数据开发应用，为客户提供“软件+硬件+运营服务+资金”的专业综合性解决方案。 目前，公司已拥有几十项相关软件著作权，现又与多所高校及企事业单位形成产、学、研深度合作模式，助力创新研发生产、实践创新运营服务，旨在为教育、医疗卫生等领域提供一流的产品和服务。</span><br/>
		<span class="mySpan1">请输入职位</span>
		<input type="text" class="myInput" value="关键字...">
		<input type="submit" class="myInput1" value="搜索">
	</div>
</section>
<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=22 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,10");
					while($row = $dosql->GetArray())
					{
					?>
	<div class="myFont1">
		<a href="#"><?php echo $row['title']; ?></a><br/>
		<p><?php echo $row['description']; ?></p>
		<span class="mySpan2"><?php echo $row['content']; ?></span><br/>
		<span class="mySpan3">发布时间：</span>
		<span class="mySpan4">2015-09-15 有效时间：</span>
		<span class="mySpan5">不限</span>
	</div>
	<?php
	}
	?>
<!-- /mainbody-->
<!-- footer-->
<?php require_once('footer.php'); ?>
<!-- /footer-->
</body>
</html>