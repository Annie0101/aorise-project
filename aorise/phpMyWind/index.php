<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet"  href="./common/index.css">
<link rel="stylesheet" href="common/bootstrap.min.css">
<script src="./js/jquery.min.js"></script>
<script src="js/jsjquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/slideplay.js"></script>
<script type="text/javascript" src="templates/default/js/srcollimg.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<script type="text/javascript">
$(function(){
    $(".imgwrap li img").LoadImage({width:60,height:45});
	$(".newsfocus div img").LoadImage({width:60,height:60});
});
</script>
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
		<div id="myCarousel" class="carousel slide">
	<!-- 轮播（Carousel）指标 -->
	<ol class="carousel-indicators">
		<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		<li data-target="#myCarousel" data-slide-to="1"></li>
		<li data-target="#myCarousel" data-slide-to="2"></li>
	</ol>   
	<!-- 轮播（Carousel）项目 -->
	<div class="carousel-inner">
		<div class="item active">
			<img src="images/banner1.jpg" alt="First slide">
		</div>
		<div class="item">
			<img src="images/banner2.jpg" alt="Second slide">
		</div>
		<div class="item">
			<img src="images/banner3.jpg" alt="Third slide">
		</div>
	</div>
	<!-- 轮播（Carousel）导航 -->
	<a class="carousel-control left" href="#myCarousel" 
	   data-slide="prev"><img src="images/left-arrow.png" alt=""></a>
	<a class="carousel-control right" href="#myCarousel" 
	   data-slide="next"><img src="images/right-arrow.png" alt=""></a>
</div> 
<!--/解决方案/Solutions More-->
	<section class="sectionDiv">
		<div class="fontDiv">
			<a href="solution.php">解决方案/Solutions More</a>
		</div>
		<div class="myLine"></div>
	</section>
		<div class="container" id="container-aa">
		   <div class="row">
		   	<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=14 AND delstate='' AND checkinfo=true ORDER BY orderid ASC LIMIT 0,3");
					while($row = $dosql->GetArray())
					{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
					?>
				<div class="col-md-4" id="myImg1">
					<img src="<?php echo $row['picurl']; ?>" alt=""> 
					<a href="<?php echo $gourl ?>"><?php echo $row['title']; ?></a>
				</div>
				<?php
				}
				?>			    
		   </div>
		</div>
<!--/关于我们/About Us More-->
		<section class="sectionDiv1">
		<div class="fontDiv1">
			<a href="about.php">关于我们/About Us More</a>
		</div>
		<div class="myLine1"></div>
				<div class="container">
					<div class="row">
					<div class="myImg4">
					<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=15 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,4");
					while($row = $dosql->GetArray())
					{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
					?>
						<div class="col-md-3"><img src="<?php echo $row['picurl']; ?>" alt="">
						<p><a href="honor.php"><?php echo $row['title']; ?></a></p>
						</div>
						<?php
						}
						?>
					</div>
					</div>
				</div>
		</section>
<!--/新闻资讯/NEWS More-->
	<section class="section3">
		<div class="fontDiv2">
			<a href="news.php">新闻资讯/NEWS More</a>
		</div>
		<div class="myLine2"></div>
	</section>
			<div class="container">
				<div class="row" id="aside">
					<?php
					$row=$dosql->getone("SELECT * FROM pmw_infolist WHERE classid=16 LIMIT 0,1");
					?>
						<div class="col-md-4">
						<div class="left">
							<img src="<?php echo $row['picurl']; ?>" alt="">
							<p><?php echo $row['content']; ?></p>					
						</div>
						</div>
					<div class="col-md-6 col-md-offset-2">
						<div class="right">
						<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE classid=16 AND delstate='' AND checkinfo=true ORDER BY orderid DESC limit 0,8");
						
					while($row = $dosql->GetArray())
					{
					//获取链接地址
					if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
					else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
					else
						$gourl = $row['linkurl'];
					?>
						<ul>
							<li>
								<span></span><?php echo $row['description']; ?>
								<time datetime=""><?php echo GetDatetime($row['posttime']); ?></time>
							</li>
							<?php
							}
							?>
						</ul>
						</div>
					</div>
				</div>
			</div>
<!--底部-->
	<?php require_once('footer.php'); ?>
</body>
</html>
