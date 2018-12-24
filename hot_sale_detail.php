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
<script src="dist/js/fotorama.js"></script>
<link rel="stylesheet" href="dist/css/fotorama.css">

<!--FB-->
<meta property="og:title" content="悅讀Twin Park囍園"></meta>
<meta property="og:type" content="article"></meta>
<meta property="og:url" content="http://demo.dake.com.tw/~liao/taijun/pic/hot_01%20(1).jpg"></meta>
<meta property="og:image" content="http://demo.dake.com.tw/~liao/taijun/pic/hot_01%20(1).jpg"></meta>
<meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
<meta property="og:description" content="文興綠園道罕見2000坪大型基地
3面臨路退縮千坪綠意空間
有故事的日常從分享開始
謙迎陽光微風和愉悅，
寫日常的故事"></meta>
<meta property="og:site_name" content="泰郡建設機構"></meta>
</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.12';
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<header>
	<?php include("header.php"); ?>
</header>
<div class="main_content inner_page hot_page">
	<div class="max_width">
		<div class="inner_page_title">
			<div class="back_page">
				<a href="javascript: history.go(-1);">
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
			<div class="arch_detail_inner">
				<a href="hot_sale_detail.php" class="prev_page">
					<i class="fas fa-chevron-left"></i>
				</a>
				<div class="arch_detail_txt">
					<div class="arch_detail_title">
						<div class="title_txt">悅讀Twin Park囍園</div>
						<div class="date">January, 2018 完工</div>
						<a class="item_link" href="http://www.new-house.tw/project_info.asp?id=66" target="_blank">
							<i class="fas fa-link"></i>
						</a>
						<div class="info">
							<div class="tel">
								<a href="tel:07-336-1798">
									<i class="fas fa-phone"></i>
									<span>07-336-1798</span>
								</a>
							</div>
							<div class="addr">
								<a href="https://goo.gl/maps/94MnyZdyyYF2" target="_blank">
									<i class="fas fa-map-marker-alt"></i>
									<span>三民區 遼寧三街</span>
								</a>
							</div>
						</div>
					</div>
					<div class="btn_group share_btn">
						<div class="fb-like" data-href="http://demo.dake.com.tw/~liao/alishan/product_car_detail.php" data-layout="button" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
						<a href='javascript: void(window.open(&apos;https://lineit.line.me/share/ui?url=&apos; .concat(encodeURIComponent(location.href)) ));' title='分享給 LINE 好友' class="line_share"></a>
					</div>
					<!--網頁編輯器-->
					<div class="edit_style">
						<div style="color: #FF5A6A;">以下區塊為文字編輯區塊，目前圖文排版僅供示意</div>
						<p>文興綠園道罕見2000坪大型基地<br>3面臨路退縮千坪綠意空間<br>有故事的日常從分享開始<br>謙迎陽光微風和愉悅，<br>寫日常的故事</p>
					</div>
					<!--網頁編輯器 END-->
				</div>
				<div class="hot_detail_photo">
					<div class="fotorama" data-width="700" data-ratio="700/467" data-max-width="100%"  data-nav="thumbs">
						<img src="pic/hot_01 (1).jpg">
						<img src="pic/hot_01 (2).jpg">
						<img src="pic/hot_01 (3).jpg">
						<img src="pic/hot_01 (4).jpg">
						<img src="pic/hot_01 (5).jpg">
						<img src="pic/hot_01 (6).jpg">
					</div>
				</div>
				<a href="hot_sale_detail.php" class="next_page">
					<i class="fas fa-chevron-right"></i>
				</a>
				<ul class="app_menu">
					<li>
						<a href="tel:07-336-1798">
							<i class="fas fa-phone"></i>
						</a>
					</li>
					<li>
						<a href="https://goo.gl/maps/94MnyZdyyYF2" target="_blank">
							<i class="fas fa-map-marker-alt"></i>
						</a>
					</li>
					<li>
						<a href="http://www.new-house.tw/project_info.asp?id=66" target="_blank">
							<i class="fas fa-link"></i>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>