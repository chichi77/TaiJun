import "jquery";
import '@fortawesome/fontawesome-free/js/all.js'
import 'fullPage.js/vendors/scrolloverflow.min.js'
import 'fullPage.js'
import './node_modules/fullpage.js/dist/jquery.fullpage.css'
import slick from 'slick-carousel'
import 'particles.js'
import 'jquery.cookie'

require( './src/scss/style.scss' );
import 'animate.css'


$(function() {
    location_url();

    function location_url(){
		var url = location.search;
		if(url.indexOf('?')!=-1){
			var url_var = [];
		    var id = "type";
		    var ary = url.split('?')[1].split('&');

		    for(let i=0, len=ary.length-1;i<=len;i++){
		    	let url_var_name = ary[i].split('=')[0],
		    	url_var_val = ary[i].split('=')[1];

		        url_var[url_var_name] = url_var_val;
		    }	    
		}

		if($('.main_content').hasClass('index_page')){
			//index
			$('body').css('background','transparent');
			$('.footer_rwd').addClass('index_footer');
			$('#bg_audio').volume = 1;
			
			if($(window).width() > 767){
				/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
				particlesJS.load('particle_js', './dist/css/particlesjs-config.json', function() {
				  //console.log('callback - particles.js config loaded');
				});
			}

			set_cookie();
		}
		else if($('.inner_page.main_content').hasClass('about_page')){
			$('.inner_page_title .type>li').eq(0).addClass('active');
		}
		else if($('.inner_page.main_content').hasClass('news_page')){
			switch(parseInt(url_var['type'])){
				case 0:
					$('.inner_page_title .type>li').eq(0).addClass('active');
					break;

				case 1:
					$('.inner_page_title .type>li').eq(2).addClass('active');
					break;
				default:
					error_page();
					break;
			}
		}
		else if($('.inner_page.main_content').hasClass('hot_page')){
			$('.inner_page_title .type>li').eq(1).addClass('active');
		}
		else if($('.inner_page.main_content').hasClass('arch_page')){
			$('.inner_page_title .type>li').eq(1).addClass('active');
		}
		else if($('.inner_page.main_content').hasClass('history_page')){
			$('.inner_page_title .type>li').eq(0).addClass('active');
			$('.history_item:even').addClass('left_item');
			$('.history_item:odd').addClass('right_item');
		}
		else if(location.pathname.indexOf('service.php') != -1){
			$('.inner_page_title .type>li').eq(0).addClass('active');
		}
		else if(location.pathname.indexOf('contact.php') != -1){
			$('.inner_page_title .type>li').eq(1).addClass('active');
			$('.contact_rule button[type="button"]').click(function(event) {
				$('.contact_rule').slideUp();
				$('.contact_form_inner').addClass('active');
			});
		}
		else if(location.pathname.indexOf('schedule.php') != -1){
			$('.inner_page_title .type>li').eq(2).addClass('active');
		}

		function error_page(){
			alert('請返回正確頁面！');
			history.go(-1);
		}
    }

    function set_cookie(){
    	var expireDate = new Date();
    	expireDate.setTime( expireDate.getTime() + ( 5  * 60 * 1000 ) );//以【毫秒】為單位。這裡設定是1小時，若要設定1分鐘可(1*60*1000)
    	// 先判斷是否已有 cookie 值
        // 如果沒有則詢問名字並建立一筆新的 cookie
        if($.cookie("name")==null){
            var _hostname=window.location.hostname; //取得網址
                // 把 _name 跟 1 分別存在記錄中
                $.cookie("name", _hostname, { expires: expireDate ,path:'/'}); //cookie紀錄一天"path:/"為整個網站有效
                $.cookie("count", 1, { expires: expireDate ,path:'/' });//cookie紀錄一天"path:/"為整個網站有效    
        }else{
            // 取出記錄中的 name 跟 count
            var _hostname = $.cookie("name");
            var _count = $.cookie("count");
            // 把加 1 之後的 count 寫回記錄中
            $.cookie("count", _count , { expires: expireDate ,path:'/' }); //cookie紀錄一天"path:/"為整個網站有效
            if(_count > 0){
                $('#index_banner').hide();
            }
        }
    }

    function set_time_to_close_menu(){
    	var t=setTimeout("document.getElementsByClassName('header_menu')[0].classList.remove('open');document.getElementsByClassName('icon_btn')[0].classList.remove('open');",4000);
    }

	$('.index_banner .close_btn').click(function(event) {
		$('.index_banner').hide();
	});

  //header menu icon click
  $('.header_menu_icon').click(function(){
  	if(!$(this).children('.icon_btn').hasClass('open')){
  		$('.header_menu').addClass('open');
  		set_time_to_close_menu();
  	}
  	else{
  		$('.header_menu').removeClass('open');
  	}

		$(this).children('.icon_btn').toggleClass('open');
	});

	$('#index_page').fullpage({
  	menu: '.header_menu',
  	anchors: ['section_1', 'section_2', 'section_3', 'section_4', 'section_5'],
  	verticalCentered: true,
  	click: true,
  	scrollOverflow: true,
  	scrollOverflowOptions:{
  		click: true
  	}
  });

  $('.index_banner_slick').slick({
		infinite: true,
		arrows: false,
		dots: true,
		autoplay: true
	});

  if($('.hot_sale_list').length > 0){
	  $('.hot_sale_list').slick({
			infinite: true,
			slidesToShow: 4,
			slidesToScroll: 1,
			responsive: [
		    {
		    	breakpoint: 768,
		    	settings: {
		    		slidesToShow: 3,
		    		slidesToScroll: 1,
		    		dots: true
		    	}
		    },
		    {
		    	breakpoint: 480,
		    	settings: {
		    		slidesToShow: 1,
		    		slidesToScroll: 1,
		    		dots: true
		    	}
		    }
	    ]
		});
	}

	$('.arch_list').slick({
		infinite: true,
		slidesToShow: 4,
		slidesToScroll: 1,
		responsive: [
		    {
		    	breakpoint: 768,
		    	settings: {
		    		slidesToShow: 3,
		    		slidesToScroll: 1,
		    		dots: true
		    	}
		    },
		    {
		    	breakpoint: 480,
		    	settings: {
		    		slidesToShow: 1,
		    		slidesToScroll: 1,
		    		dots: true
		    	}
		    }
	    ]
	});

	$('#MoveDown').click(function(event) {
		$.fn.fullpage.moveSectionDown();
	});

	$('#MoveUp').click(function(event) {
		$.fn.fullpage.moveTo(1);
	});

	$('.schedule_form .btn_group button').click(function(event) {
		if($('.schedule_form_inner input[type=password]').val() && $('.schedule_form_inner select').val()){
			$('.schedule_form').submit();
		}
		else{
			if(!$('.schedule_form_inner select').val()){
				alert('請選擇建案！');
			}
			else if(!$('.schedule_form_inner input[type=password]').val()){
				alert('請輸入建案密碼！');
			}
			
		}
	});

	$(".contact_form_inner #postForm").submit(function(){
		if (!check_submit($(this))){
			$(this).find(".invalid").eq(0).focus();
			alert('請填寫必填欄位！')
			return false;
		}

		//return false;
	});
});

$(window).resize(function(){
	if($(window).width() > 767){
		/* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
		particlesJS.load('particle_js', './dist/css/particlesjs-config.json', function() {
		  //console.log('callback - particles.js config loaded');
		});

		$('.header_menu, .icon_btn').removeClass('open');
	}
})
