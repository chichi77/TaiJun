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
<script src="dist/js/input_check.js"></script>
</head>
<script>
function check_form(form_obj){
	//if(!)
}
</script>
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
			<div class="contact_page_inner">
				<div class="contact_info">
					<h3>Contact Us</h3>
					<div class="info_txt">
						<div class="title">泰郡建設機構</div>
						<div class="txt">
							<a href="https://goo.gl/maps/TvxCEALPz1U2" target="_blank">
								<i class="fas fa-map-marker-alt"></i>
								<span>高雄市鼓山區明誠三路689號13F</span>
							</a>
						</div>
						<div class="txt">
							<a href="tel: 07-557-8186">
								<i class="fas fa-phone"></i>
								<span>07-559-7777</span>
							</a>
						</div>
						<div class="txt">
							<i class="fas fa-fax"></i>
							<span>07-559-7999</span>
						</div>
					</div>
					<div class="iframe-rwd">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3681.8081100259988!2d120.29287161432737!3d22.66094203543447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e05aada218c37%3A0xe703448d626aa4de!2zODA06auY6ZuE5biC6byT5bGx5Y2A5piO6Kqg5LiJ6LevNjg56JmfMTNG!5e0!3m2!1szh-TW!2stw!4v1533198469029" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="contact_form">
					<div class="contact_form_inner">
						<form name="postForm" id="postForm">
							<div class="form_txt">親愛的客戶，歡迎留下任何建議，客服部人員將盡快回覆您，謝謝</div>
							<div class="form_item">
								<label>
									<span>留言類別</span>
									<select name="" class="required">
										<option value="">請選擇</option>
										<option value="0">賞屋諮詢</option>
										<option value="1">建議諮詢</option>
										<option value="2">報修事宜</option>
										<option value="3">其他</option>
									</select>
								</label>
							</div>
							<div class="form_item" class="required">
								<label>
									<span>建案名稱</span>
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
									<span>姓名</span>
									<input type="text" name="" value="" placeholder="" class="required">
								</label>
							</div>
							<div class="form_item">
								<label>
									<span>連絡電話</span>
									<input type="tel" name="" value="" placeholder="" class="required">
								</label>
							</div>
							<div class="form_item">
								<label>
									<span>EMAIL</span>
									<input type="email" name="" value="" placeholder="" class="required">
								</label>
							</div>
							<div class="form_item">
								<label>
									<span>留言內容</span>
									<textarea name="" class="required"></textarea>
								</label>
							</div>
							<div class="form_item code">
								<label>
									<span>驗證碼</span>
									<img src="pic/code.jpg" style="width: 60px;">
									<input type="text" name="" value="" placeholder="" class="required">
								</label>
							</div>
							<div class="btn_group">
								<button type="submit" class="blue_btn">送出</button>
							</div>
						</form>
					</div>
					<div class="contact_rule">
						<!--網頁編輯器-->
						<div class="edit_style">
							<div style="color: #FF5A6A;">以下區塊為文字編輯區塊，目前圖文排版僅供示意</div>
							<p style="font-size: 18px; padding: 0 0 15px 0;"><b>隱私權政策</b></p>
							<p>　　感謝您自願選擇提供閣下的個人資料，並允許泰郡建設機構及相關企業【泰毅、汯岳、九夆等建設公司】收集個人資料儲存、保留、處理及使用，並用作顧客關係管理、市場宣傳及推廣、市場研究分析及一般行政用途。</p>
							<p>　　台端得自由選擇是否提供相關個人資料，惟台端若拒絕提供或提供資料不完整，本公司將無法提供上述相關完整服務。</p>
						</div>
						<!--網頁編輯器 END-->
						<div class="btn_group">
							<button type="button" class="blue_btn">確定</button>
						</div>
					</div>
				</div>
				<ul class="app_menu">
					<li>
						<a href="tel:07-557-8186">
							<i class="fas fa-phone"></i>
						</a>
					</li>
					<li>
						<a href="https://goo.gl/maps/TvxCEALPz1U2" target="_blank">
							<i class="fas fa-map-marker-alt"></i>
						</a>
					</li>
					<li>
						<a href="mailto:service@match-web.net">
							<i class="far fa-envelope"></i>
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