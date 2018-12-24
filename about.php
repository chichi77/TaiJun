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
</head>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="main_content inner_page about_page">
	<div class="max_width">
		<div class="inner_page_title">
			<div class="back_page">
				<a href="index.php">
					<i class="fas fa-arrow-left"></i>
					<span>返回</span>
				</a>
			</div>
			<ul class="type">
				<li><a href="">關於泰郡</a></li>
			</ul>
		</div>
		<div class="inner_page_inner">
			<div class="edit_style">
				<div style="color: #FF5A6A; padding-bottom: 20px;">以下區塊為文字編輯區塊，目前圖文排版僅供示意</div>
				<img src="pic/about_01.jpg" width="100%">
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>