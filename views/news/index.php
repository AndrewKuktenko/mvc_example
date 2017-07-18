<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nametests.com</title>

	<link rel="stylesheet"  href="/template/font/glyphicons-halflings-regular.ttf">
	<link rel="stylesheet"  href="/template/font/glyphicons-halflings-regular.svg">
	<link rel="stylesheet"  href="/template/font/glyphicons-halflings-regular.eot">
	<link rel="stylesheet"  href="/template/font/glyphicons-halflings-regular.woff">
	<link rel="stylesheet"  href="/template/font/glyphicons-halflings-regular.woff2">

	<link rel="stylesheet" type="text/css" href="/template/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/template/css/style.css">
</head>
<body>
	<header class="navbar navbar-default col-md-12">
		<div class="row col-md-12 col-lg-10 col-lg-offset-1">

			<button type="button" class="navbar-toggle collapsed" id="menuBottom">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>


			<div class="navbar-header col-md-2 col-sm-3 col-xs-4 col-md-offset-1 pull-xs-right">
				<a class="navbar-brand" href="/">
					<img alt="" src="/template/images/logo.png">
				</a>
			</div>
			<div class="active col-md-1 col-sm-2 hidden-xs">
				<a href="index.phpl">HOME</a>
			</div>
			<div class="active col-md-2 col-sm-2 hidden-xs">
				<a href="category.php">CATEGORY</a>
			</div>
			<div class="lang-selector col-md-1 col-sm-2 hidden-xs">
				<select id="langchooser" class="user-success">
					<option value="de">Deutsch</option>
					<option value="en" selected="">English</option>
					<option value="es">Español</option>
					<option value="pt">Português</option>
					<option value="it">Italiano</option>
					<option value="fr">Français</option>
					<option value="nl">Nederlands</option>
					<option value="hu">Magyar</option>
					<option value="el">Ελληνικά</option>
					<option value="tr">Türkçe</option>
					<option value="da">Dansk</option>
					<option value="ru">русский</option>
					<option value="sv">Svenska</option>
					<option value="cs">čeština</option>
					<option value="sk">Slovenčina</option>
					<option value="no">Norsk</option>
					<option value="fi">Suomi</option>
					<option value="ar">العربية</option>
					<option value="id">Indonesia</option>
					<option value="pl">Polski</option>
					<option value="ja">日本人</option>
					<option value="sl">Slovenščina</option>
					<option value="bg">български</option>
					<option value="lt">Lietuvos</option>
					<option value="lv">Latviešu</option>
					<option value="bs">Bosanski</option>
					<option value="hr">Hrvatski</option>
					<option value="et">Eesti</option>
					<option value="hi">नॉट</option>
					<option value="ko">한국의</option>
					<option value="mk">македонски</option>
					<option value="ro">Român</option>
					<option value="sr">српски</option>
					<option value="tl">Tagalog</option>
					<option value="th">ไทย</option>
					<option value="kk">Қазақ</option>
					<option value="vi">tiếng Việt</option>
					<option value="ms">Malaysiah</option>
					<option value="zh">中国</option>
					<option value="ur">اردو</option>
					<option value="he">עברית</option>
					<option value="bn">বাংলাভাষী</option>
					<option value="sw">Kiswahili</option>
					<option value="ne">नेपाली</option>
					<option value="uk">українська</option>
				</select>
			</div>
			<div class="row bottom-menu hidden-sm hidden-md hidden-lg" style="display: none;">
				<div class="row menu-btn">
					<div class="col-xs-12">
						<div class="menu-active">
							<a href="index.phpl">HOME</a>
						</div>
						<div class="menu-active">
							<a href="category.php">CATEGORY</a>
						</div>
					</div>
				</div>
				<div class="row selector">
					<div class="col-xs-12">
						<div class="menu-lang-selector">
				<select id="langchooser-hidden" class="user-success">
					<option value="de">Deutsch</option>
					<option value="en" selected="">English</option>
					<option value="es">Español</option>
					<option value="pt">Português</option>
					<option value="it">Italiano</option>
					<option value="fr">Français</option>
					<option value="nl">Nederlands</option>
					<option value="hu">Magyar</option>
					<option value="el">Ελληνικά</option>
					<option value="tr">Türkçe</option>
					<option value="da">Dansk</option>
					<option value="ru">русский</option>
					<option value="sv">Svenska</option>
					<option value="cs">čeština</option>
					<option value="sk">Slovenčina</option>
					<option value="no">Norsk</option>
					<option value="fi">Suomi</option>
					<option value="ar">العربية</option>
					<option value="id">Indonesia</option>
					<option value="pl">Polski</option>
					<option value="ja">日本人</option>
					<option value="sl">Slovenščina</option>
					<option value="bg">български</option>
					<option value="lt">Lietuvos</option>
					<option value="lv">Latviešu</option>
					<option value="bs">Bosanski</option>
					<option value="hr">Hrvatski</option>
					<option value="et">Eesti</option>
					<option value="hi">नॉट</option>
					<option value="ko">한국의</option>
					<option value="mk">македонски</option>
					<option value="ro">Român</option>
					<option value="sr">српски</option>
					<option value="tl">Tagalog</option>
					<option value="th">ไทย</option>
					<option value="kk">Қазақ</option>
					<option value="vi">tiếng Việt</option>
					<option value="ms">Malaysiah</option>
					<option value="zh">中国</option>
					<option value="ur">اردو</option>
					<option value="he">עברית</option>
					<option value="bn">বাংলাভাষী</option>
					<option value="sw">Kiswahili</option>
					<option value="ne">नेपाली</option>
					<option value="uk">українська</option>
				</select>
			</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main class="maincontainer">
		<!-- <div class="row">

		</div> -->
		<div class="container new-index">
			<div class="row">
				<div class="col-xs-12 col-lg-10 no-padding">
					<div class="text-center pager-holder">
						<ul class="pager pager-top dist-top-30">
							<li>
								<a href="#">Next <span class="glyphicon glyphicon-arrow-right"></span>
								</a>
							</li>
						</ul>
					</div>
					<div class="row content_block">

                        <?php foreach ($newsList as $newsItem):?>
						<div class="col-md-4 col-sm-6 box text-center">
							<div class="flex_inner">
								<a href="/news/<?php echo $newsItem['id'];?>">
									<img alt="" class="img-responsive col-xs-12" src="/template/images/e9c9415f4c6633129fe4673bb098b0c0.jpg" >
									<span class="h2"><?php echo $newsItem['title'];?></span>
								</a>
							</div>
						</div>
                        <?php endforeach;?>

					</div>
					<div class="row bottom_news">
						<div class="col-md-12">
							<div class="row">
								<div class="news_box_title">
									<span><b>Вам также могут понравиться</b></span>
								</div>
							</div>
						</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    					<div class="news_box">
    						<div class="row">
    							<div class="box_img">
    								<a href="" >
    									<img alt="" src="/template/images/pic_4f252033175bd5854727c5aabea2b2a8.jpg">
    								</a>
    							</div>
    						</div>

	    						<div class="box_title">
	    							<a href="">
	    								<span>Во время выступления в Пенсильвании Трамп...</span>
	    								</a>
	    						</div>

    					</div>
    				</div>
					<div class="text-center pager-holder">
						<ul class="pager pager-top dist-top-30">
							<li>
								<a href="#">Next <span class="glyphicon glyphicon-arrow-right"></span>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</main>
	<footer>
		<div class="container">
			<div class="row dist-top-30">
				<div class="col-xs-12 col-lg-10 text-center">
					<p>
						<a href="//www.socialsweethearts.de/terms.html" target="_blank">Положения и условия</a> ·
						<a href="//www.socialsweethearts.de/privacy.html" target="_blank">Защита данных</a> ·
						<a href="//www.socialsweethearts.de/de_DE/imprint" target="_blank">Выходные данные</a> ·
						<a href="/accounts/feedback/?url=https://ru.nametests.com/" target="_blank">Отзыв</a> ·
						<a href="//www.socialsweethearts.de/en_US/it-career" target="_blank">Jobs</a> ·
						<a href="//docs.google.com/a/socialsweethearts.de/forms/d/1ggzWjZHk2m-KU-2leSanIcna3WeY4Wy_sieBoBsuhFA/viewform" target="_blank">Стать партнером</a> ·
						<a class="logout" style="display: none;" href="/test/user_logout/?next=/">Выйти</a>
					</p>
					<p>
						<a href="//www.socialsweethearts.de/terms.html" target="_blank">Disclaimer: All content is
						provided for fun and entertainment purposes only</a>
					</p>
					<p class="small-footer">
						This app uses data and contents only if they are publicly available or with
						the consent of the users. We kindly ask you to use the app only,
						if other users will not be affected adversely. <br> Thank you and have fun with
						our app!
					</p>
				</div>	
			</div>	
		</div>		
	</footer>
	<script src="/template/js/bootstrap.min.js" ></script>
	<script src="/template/js/jquery-3.2.1.min.js" ></script>
	<script>
		$(document).ready(function()
		{
			$("#menuBottom").click(function()
			{
				$(".bottom-menu").toggle();
			});
		});
	</script>
</body>
</html>