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
<div class="main_content inner_page service_page">
	<div class="max_width">
		<div class="inner_page_title">
			<div class="back_page">
				<a href="index.php">
					<i class="fas fa-arrow-left"></i>
					<span>返回</span>
				</a>
			</div>
			<ul class="type">
				<li><a href="service.php">貼心售服</a></li>
				<li><a href="contact.php">意見留言</a></li>
				<li><a href="schedule.php">工程進度</a></li>
			</ul>
		</div>
		<div class="inner_page_inner">
			<!--自由編輯區-->
			<div class="edit_style">
				<link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
				<style>
				.service_list li{padding: 15px 0; border-bottom: 1px #FFF dashed; list-style-type: none !important;}
				.service_list li .list_num{
					font-family: 'Kaushan Script', cursive; margin-right: 20px; margin-left: 10px; font-size: 20px; color: #FFD76C;
				}
				.service_list li:nth-child(even){
					background-color: rgba(255,255,255,0.1);
				}
				.service_list:nth-child(2) li:nth-last-child(1){
						border-bottom: 0;
					}
				@media screen and (min-width: 768px){
					.inner_page_inner{background: url('pic/TaiJun_service_01.png') right bottom / 350px auto no-repeat;}
					.service_list{float: left; width: 50%; box-sizing: border-box;}
					.service_list_block .service_list:nth-child(1){padding-right: 20px; padding-left: 0;}
					.service_list_block .service_list:nth-child(2){padding-left: 20px;}
					.service_list li:nth-last-child(1){
						border-bottom: 0;
					}
				}
				@media screen and (max-width: 767px){
					 .service_list{padding-left: 0 !important;}
				}
				</style>
				<div style="color: #FF5A6A; padding-bottom: 15px;">以下區塊為文字編輯區塊，目前圖文排版僅供示意</div>
				<div class="service_list_block">
					<ul class="service_list">
						<li><span class="list_num">1.</span>室內變更說明會，以專業建議解決客戶需求。
						<li><span class="list_num">2.</span>提供客戶免費售後服務專線。</li>
						<li><span class="list_num">3.</span>專屬客服人員，單一窗口提供有效服務流程。</li>
						<li><span class="list_num">4.</span>客變一對一諮詢解說，進而了解客戶需求。</li>
						<li><span class="list_num">5.</span>線上工程進度，每月更新瀏覽施工照片。</li>
						<li><span class="list_num">6.</span>工程興建期間，提供客戶預約結構中隔間帶看。</li>
						<li><span class="list_num">7.</span>工程單位與客服同仁雙重複檢。</li>
					</ul>
					<ul class="service_list">
						<li><span class="list_num">8.</span>地政士專業服務，提供相關法令稅務諮詢。</li>
						<li><span class="list_num">9.</span>進住後透過客服，再次講解各項設備操作說明。</li>
						<li><span class="list_num">10.</span>裝修後，水電消防服務檢查。</li>
						<li><span class="list_num">11.</span>維修團隊，維護建築保固期之服務。</li>
					</ul>
					<div style="clear: both;"></div>
					<!-- <img src="pic/TaiJun_service_01.png" width="500" class="bg_img"> -->
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