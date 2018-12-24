<!doctype html>
<html lang="zh-tw">
<head>
<meta charset="utf-8">
<?php include("head.php"); ?>
<title><?php echo $title; ?></title>
<meta name="robots" content="all">
<meta name="robots" content="index,follow">
<meta name="revisit-after" content="3 days" />
<meta name="spiders" content="all" />
<meta name="keywords" content="<?php echo $keywords; ?>">
<meta name="author" content="<?php echo $author; ?>">
<meta name="copyright" content="<?php echo $copyright; ?>">
<meta name="description" content="<?php echo $description; ?>">

<!--slick-->
<link href="dist/css/slick.css" rel="stylesheet">
<link href="dist/css/slick-theme.css" rel="stylesheet">
</head>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="main_content inner_page hot_page">
	<div class="max_width">
		<div class="inner_page_title">
			<div class="back_page">
				<a href="index.php">
					<i class="fas fa-arrow-left"></i>
					<span>返回</span>
				</a>
			</div>
			<ul class="type">
				<li><a href="news.php?type=0">訊息花絮</a></li>
				<li><a href="hot_sale.php">高雄推案</a></li>
				<li><a href="news.php?type=1">好新聞分享</a></li>
			</ul>
		</div>
		<div class="inner_page_inner">
			<div class="hot_sale_list">
				<!--item 1-->
				<div class="hot_sale_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_01.jpg');"></div>
						<div class="item_title">悅讀TWINPARK-囍園</div>
					</a>
					<ul class="item_link">
						<li>
							<a href="https://goo.gl/maps/94MnyZdyyYF2" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
							</a>
						</li>
						<li>
							<a href="tel:07-336-1798">
								<i class="fas fa-phone"></i>
							</a>
						</li>
						<li>
							<a href="http://www.new-house.tw/project_info.asp?id=66" target="_blank">
								<i class="fas fa-link"></i>
							</a>
						</li>
					</ul>
				</div>
				<!--item 2-->
				<div class="hot_sale_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_02.jpg');"></div>
						<div class="item_title">悅讀TWINPARK-喆園</div>
					</a>
					<ul class="item_link">
						<li>
							<a href="https://goo.gl/maps/W4qE5nA7dA22" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
							</a>
						</li>
						<li>
							<a href="tel:07-3217888">
								<i class="fas fa-phone"></i>
							</a>
						</li>
						<li>
							<a href="http://www.new-house.tw/project_info.asp?id=66" target="_blank">
								<i class="fas fa-link"></i>
							</a>
						</li>
					</ul>
				</div>
				<!--item 3-->
				<div class="hot_sale_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_03.jpg');"></div>
						<div class="item_title">悅讀森觀</div>
					</a>
					<ul class="item_link">
						<li>
							<a href="https://goo.gl/maps/54jMFB5NJmG2" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
							</a>
						</li>
						<li>
							<a href="tel:07-591-6200">
								<i class="fas fa-phone"></i>
							</a>
						</li>
						<li>
							<a href="" target="_blank">
								<i class="fas fa-link"></i>
							</a>
						</li>
					</ul>
				</div>
				<!--item 4-->
				<div class="hot_sale_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_04.jpg');"></div>
						<div class="item_title">悅讀文華</div>
					</a>
					<ul class="item_link">
						<li>
							<a href="https://goo.gl/maps/EXBwJ7ZFwzt" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
							</a>
						</li>
						<li>
							<a href="tel:07-355-4688">
								<i class="fas fa-phone"></i>
							</a>
						</li>
						<li>
							<a href="http://fbs.tw/a5" target="_blank">
								<i class="fas fa-link"></i>
							</a>
						</li>
					</ul>
				</div>
				<!--item 5-->
				<div class="hot_sale_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_05.jpg');"></div>
						<div class="item_title">悅讀草悟道</div>
					</a>
					<ul class="item_link">
						<li>
							<a href="https://goo.gl/maps/FKDe8ye6RhG2" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
							</a>
						</li>
						<li>
							<a href="tel:07-973-5283">
								<i class="fas fa-phone"></i>
							</a>
						</li>
						<li>
							<a href="http://www.new-house.tw/project_info.asp?id=72" target="_blank">
								<i class="fas fa-link"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>