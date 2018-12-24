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
<script>
	
</script>
<body>
<header>
	<?php include("header.php"); ?>
</header>
<div class="main_content inner_page schedule_page">
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
			<div class="schedule_form">
				<div class="schedule_form_inner">
					<form name="postForm" id="postForm">
						<p class="form_txt">請選擇建案並輸入建案密碼查詢該建案的工程進度<br>*僅供住戶查詢工程進度用</p>
						<div class="form_item">
							<label>
								<span>建案</span>
								<select name="">
									<option value="">請選擇</option>
									<option value="0">悅讀TWINPAR-囍園</option>
									<option value="1">悅讀TWINPAR-喆園</option>
									<option value="2">2018-悅讀森觀</option>
									<option value="3">2018-悅讀文華</option>
								</select>
							</label>
						</div>
						<div class="form_item">
							<label>
								<span>密碼</span>
								<input type="password" name="" value="">
							</label>
						</div>
						<div class="btn_group">
							<button type="button" class="blue_btn">登入</button>
						</div>
					</form>
				</div>
				<!-- 個案登入以後顯示的區塊-->
				<div class="schedule_info">
					<div class="form_btn logout_btn">
						<form name="postForm" id="postFrom">
							<button type="submit" class="blue_btn">登出</button>
						</form>
					</div>
					<div class="title">悅讀TWINPAR-囍園</div>
					<!--網頁編輯器-->
					<div class="edit_style">
						<div style="color: #FF5A6A;">以下區塊為文字編輯區塊，目前圖文排版僅供示意</div>
						<p><b>1.個案特色說明</b>中都濕地●公園第一排</p>
						<p><b>2.接待中心地址:</b>高雄市三民區德勝街&德旺街口<br>基地:高雄市三民區德旺街&遼寧三街</p>
						<p><b>3.賞屋專線:</b>07-3217888</p>
						<p><b>4.個案簡介:</b><br>國際都會正核心 公園綠意是關鍵<br>中都濕地   公園生活第一排<br>農16 美術館 中都  翻轉城市核心<br>制震․抗空汙活氧宅</p>
						<p>5.<a href="http://www.new-house.tw/project_info.asp?id=66">個案官網</a>

					</div>
					<!--網頁編輯器 END-->
				</div>
				<!-- 個案登入以後顯示的區塊END-->
			</div>
		</div>
	</div>
</div>
<footer>
	<?php include("foot.php"); ?>
</footer>
</body>
</html>