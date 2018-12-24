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
<script src="https://code.jquery.com/jquery-2.2.0.js"></script>
<script src="dist/js/jquery-ias.min.js"></script>
</head>
<script>
var ias = $.ias({
  container: ".news_page_list",
  item: ".news_item",
  pagination: "#pagination1",
  next: ".next a"
});
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="main_content inner_page news_page">
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
			<ul class="news_page_list">
				<li class="news_item">
					<a href="news_detail.php?type=1&data=1">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=2">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=3">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=4">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=1">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=2">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=3">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
				<li class="news_item">
					<a href="news_detail.php?type=1&data=4">
						<div class="item_img" style="background-image: url(dist/images/news_01.jpg);"></div>
						<div class="item_txt">
							<div class="title">【真的只要日付99元！公園首排成家不是夢】</div>
							<div class="date">2018-07-01</div>
							<div class="simple_txt">想要成為有房一族，不再是遙不可及的夢想！現在，只要日付99元，北高第一座抗空污活氧宅—泰郡「悅讀TWIN PARK」，現在限量推出【甜蜜成家專案】，入住2-3房公園第一排首席，享受清新綠意，EPS制震防護，住起來超安心，買比租還划算的好康，預約未來夢想趁現在！</div>
						</div>
					</a>
				</li>
			</ul>
			<ul id="pagination1" style="display: none;">
				<li><a href="news.php?type=1">1</a></li>
				<li class="next"><a href="news.php?type=1">2</a></li>
			</ul>
			<ul id="pagination2" style="display: none;">
				<li><a href="news.php?type=2">1</a></li>
				<li class="next"><a href="news.php?type=2">2</a></li>
			</ul>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>