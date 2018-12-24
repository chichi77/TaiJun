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
<div class="main_content inner_page arch_page">
	<div class="max_width">
		<div class="inner_page_title">
			<div class="back_page">
				<a href="index.php">
					<i class="fas fa-arrow-left"></i>
					<span>返回</span>
				</a>
			</div>
			<ul class="type">
				<li><a href="history.php">建築里程碑</a></li>
				<li><a href="archietecture.php">建築經典</a></li>
			</ul>
		</div>
		<div class="inner_page_inner">
			<div class="arch_list">
				<!--item 1-->
				<div class="arch_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_01.jpg');"></div>
						<div class="item_title">
							<div class="title_txt">悅讀Twin Park囍園</div>
							<div class="addr">
								<i class="fas fa-map-marker-alt"></i>
								<span>三民區 遼寧三街</span>
							</div>
						</div>
						<div class="state">
							<div>興建中</div>
						</div>
					</a>
				</div>
				<!--item 2-->
				<div class="arch_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_02.jpg');"></div>
						<div class="item_title">
							<div class="title_txt">悅讀Twin Park喆園</div>
							<div class="addr">
								<i class="fas fa-map-marker-alt"></i>
								<span>三民區 遼北街</span>
							</div>
						</div>
						<div class="state">
							<div>興建中</div>
						</div>
					</a>
				</div>
				<!--item 1-->
				<div class="arch_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_01.jpg');"></div>
						<div class="item_title">
							<div class="title_txt">悅讀Twin Park囍園</div>
							<div class="addr">
								<i class="fas fa-map-marker-alt"></i>
								<span>三民區 遼寧三街</span>
							</div>
						</div>
						<div class="state">
							<div>興建中</div>
						</div>
					</a>
				</div>
				<!--item 2-->
				<div class="arch_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_02.jpg');"></div>
						<div class="item_title">
							<div class="title_txt">悅讀Twin Park喆園</div>
							<div class="addr">
								<i class="fas fa-map-marker-alt"></i>
								<span>三民區 遼北街</span>
							</div>
						</div>
						<div class="state">
							<div>興建中</div>
						</div>
					</a>
				</div>
				<!--item 1-->
				<div class="arch_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_01.jpg');"></div>
						<div class="item_title">
							<div class="title_txt">悅讀Twin Park囍園</div>
							<div class="addr">
								<i class="fas fa-map-marker-alt"></i>
								<span>三民區 遼寧三街</span>
							</div>
						</div>
						<div class="state">
							<div>興建中</div>
						</div>
					</a>
				</div>
				<!--item 2-->
				<div class="arch_item">
					<a href="hot_sale_detail.php">
						<div class="item_img" style="background-image: url('pic/hot_02.jpg');"></div>
						<div class="item_title">
							<div class="title_txt">悅讀Twin Park喆園</div>
							<div class="addr">
								<i class="fas fa-map-marker-alt"></i>
								<span>三民區 遼北街</span>
							</div>
						</div>
						<div class="state">
							<div>興建中</div>
						</div>
					</a>
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