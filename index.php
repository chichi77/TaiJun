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

<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

<!--slick-->
<link href="dist/css/slick.css" rel="stylesheet">
<link href="dist/css/slick-theme.css" rel="stylesheet">
</head>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<audio id="bg_audio" autoplay loop>
	<source src="dist/audio/bg_audio.ogg" type="audio/ogg" />
	<source src="dist/audio/bg_audio.mp3" type="audio/mpeg" />
	Your browser does not support the audio element.
</audio>
<div class="main_content index_page" id="index_page">
	<div class="section index_page_home">
		<div class="section_inner max_width">
			<div class="section_title">
				<h1><big>泰郡</big><br>一期一會的美好生活</h1>
				<div class="txt">泰郡建設以『悅讀系列』成為品牌識別，深入了解客戶需求，透過建築裡的每一步規劃，每一項細節，凝鍊人與自然之間的樸質侘寂，打造唯一、僅有、也獨有的空間美學，讓城市會說故事，也讓生活達到『泰然自若』的境界。</div>
			</div>
			<div class="btn_group">
				<button type="button" id="MoveDown" class="animated infinite bounce slow"><i class="fas fa-chevron-circle-down"></i></button>
			</div>
		</div>
	</div>
	<div class="section index_page_news">
		<div class="section_inner max_width">
			<div class="section_title">
				<h1>NEWS</h1>
				<div class="txt">知性交流永遠是最為美好的<br>將最即時的訊息傳遞給住戶<br>並期待能持續與您連結!</div>
			</div>
			<ul class="section_link">
				<li>
					<a href="news.php?type=0">
						<img src="dist/images/TaiJun_index_link_news_01.png">
						<div class="link_txt">訊息花絮</div>
					</a>
				</li>
				<li>
					<a href="hot_sale.php">
						<img src="dist/images/TaiJun_index_link_news_02.png">
						<div class="link_txt">高雄熱銷</div>
					</a>
				</li>
				<li>
					<a href="news.php?type=1">
						<img src="dist/images/TaiJun_index_link_news_03.png">
						<div class="link_txt">新聞分享</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section index_page_about">
		<div class="section_inner max_width">
			<div class="section_title">
				<h1>ABOUT</h1>
				<div class="txt">泰郡建設機構始於民國78年<br>用源自對建築的熱愛<br>以悅讀系列打造適合居住的”家”<br>編織與家人的幸福時刻。</div>
			</div>
			<ul class="section_link">
				<li>
					<a href="about.php">
						<img src="dist/images/TaiJun_index_link_about.png">
						<div class="link_txt">關於泰郡</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section index_page_arch">
		<div class="section_inner max_width">
			<div class="section_title">
				<h1>ARCHITECTURE</h1>
				<div class="txt">泰郡建設機構 一路走來30餘年<br>未來也持續為高雄城市景觀努力不懈</div>
			</div>
			<ul class="section_link">
				<li>
					<a href="history.php">
						<img src="dist/images/TaiJun_index_link_arch_01.png">
						<div class="link_txt">建築里程碑</div>
					</a>
				</li>
				<li>
					<a href="archietecture.php">
						<img src="dist/images/TaiJun_index_link_arch_02.png">
						<div class="link_txt">建築經典</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section index_page_service">
		<div class="section_inner max_width">
			<div class="section_title">
				<h1>SERVICE</h1>
				<div class="txt">建築源於人  服務也源於人<br>住戶是泰郡一輩子的朋友<br>有了服務才是一棟真正的建築</div>
			</div>
			<ul class="section_link">
				<li>
					<a href="service.php">
						<img src="dist/images/TaiJun_index_link_service_01.png">
						<div class="link_txt">貼心售服</div>
					</a>
				</li>
				<li>
					<a href="contact.php">
						<img src="dist/images/TaiJun_index_link_service_02.png">
						<div class="link_txt">意見留言</div>
					</a>
				</li>
				<li>
					<a href="schedule.php">
						<img src="dist/images/TaiJun_index_link_service_03.png">
						<div class="link_txt">工程進度</div>
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="section index_page_last">
		<div class="section_inner max_width">
			<div class="btn_group">
				<button type="button" id="MoveUp"><i class="fas fa-chevron-circle-up"></i></button>
			</div>
			<div class="section_title">
				<div class="txt">泰郡建設  用心為您</div>
			</div>
		</div>
		<footer>
			<?php include("foot.php"); ?>
		</footer>
	</div>
</div>
<div id="particle_js"></div>
<div class="index_banner" id="index_banner">
	<div class="index_banner_inner">
		<div class="max_width">
			<div class="close_btn">
				<i class="fas fa-times"></i>
			</div>
			<div class="index_banner_slick">
				<div>
					<picture>
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="pic/banner_01_m.jpg" media="(max-width: 767px)">
						<source srcset="pic/banner_01_pc.jpg" media="(min-width: 768px)">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<img src="images/banner_01_pc.jpg" alt="My default image">
					</picture>
				</div>
				<div>
					<picture>
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<source srcset="pic/banner_01_m.jpg" media="(max-width: 767px)">
						<source srcset="pic/banner_01_pc.jpg" media="(min-width: 768px)">
						<!--[if IE 9]><video style="display: none;"><![endif]-->
						<img src="images/banner_01_pc.jpg" alt="My default image">
					</picture>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>