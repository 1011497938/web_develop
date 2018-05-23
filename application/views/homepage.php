<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="it">
	<head>

		<base href="<?php  echo base_url('static').'/';?>"/>

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=8" />
		<title>勤创首页</title>

		<link rel="stylesheet" href="./css/home/jquery.ferro.ferroSlider.css" type="text/css">
		<link rel="stylesheet" href="./css/home/fz-video.css" type="text/css">
		<link rel="stylesheet" href="./font/iconfont.css">
		
		<!-- 活动 -->
	    <link rel="stylesheet" href="./css/home/demo_styles.css">
	    <link rel="stylesheet" href="./css/home/demo3.css">
		<link rel="stylesheet" href="./css/home/normalize.css">

		<style type="text/css">
			@media only screen and (max-width:768px){
				.activity-Box{
					top: 5rem !important;
				}
			} 

		</style>
	</head>

	<body>
		<div id="div1" class="slidingSpaces" title="Page 1" style="background-image:url('img/home/homepageBackground.jpg')">

			<!--透明度没有适配浏览器-->
			<div class="side-background" style="width:6.3rem;"></div>			
			<div class="side" style="width:6.3rem;" >
				<div class="side-content">
					<h1 class="font first-title">浙大勤创</h1>
					<h2  class="font second-tittle">#ZJU campus.</h2>
					<div  class="font" style="font-size:0.2rem;position:relative;">
						<img src="img/home/point.png" style="top:1rem;position:absolute" />
<!-- 						<h3 class="click-me">
							<a class="navhref" href="<?php echo site_url('dep/index') ?>">部门介绍</a><br>
				            <a class="navhref" href="<?php echo site_url('article/index').'/1' ?>">勤创新闻</a><br>
                            <a class="navhref" href="<?php echo site_url('activity/view').'/1' ?>">近期活动</a><br>
                            <a class="navhref" href="<?php echo site_url('parttime/message').'/1' ?>">浙大兼职</a><br>    
                            <a class="navhref" href="<?php echo site_url('guidance/index') ?>">创业指导</a><br> 
						</h3>  -->
					</div> 
					<div style="position:absolute;bottom:0;font-family:PingFang;margin:0;">
						<h1 style="font-size:0.3rem"><a style="color: white;text-decoration: none;" href="<?php echo site_url('article/index').'/1' ?>">关于这里的故事</a></h1>
						<h2 style="font-size:0.2rem"><a style="color: white;text-decoration: none;" href="<?php echo site_url('dep/index') ?>">勤工助学与创业实践指导中心（PAPIC）</a><br>
							<lebal style="font-size:0.1rem">Pioneering And Partwork-study Instructing Center</lebal>
						</h2>
						<h4 style="font-size:0.1rem">
				            <a class="dephref" href="<?php echo site_url('dep/index/0') ?>">创业实践指导部</a>
                            <a class="dephref" href="<?php echo site_url('dep/index/1') ?>">对外拓展部</a>
                            <a class="dephref" href="<?php echo site_url('dep/index/2') ?>">素能创业强化部</a>       
                            <a class="dephref" href="<?php echo site_url('dep/index/3') ?>">兼职管理部</a> 
                            <a class="dephref" href="<?php echo site_url('dep/index/4') ?>">人力资源部</a>       
                            <a class="dephref" href="<?php echo site_url('dep/index/5') ?>">办公室</a> 
                            <a class="dephref" href="<?php echo site_url('dep/index/6') ?>">技术推广部</a>
<!-- 						创业实践指导部 对外拓展部 素能创业强化部 兼职管理部 人力资源部 办公室 技术推广部 -->
						</h4>
					</div> 					
				</div>
			</div>
			<h3 class="click-me">
				<div style="position: absolute;left: 0rem;"><a class="navhref" href="<?php echo site_url('dep/index') ?>">部<br>门<br>介<br>绍</a></div>
				<div style="position: absolute;left: 0.6rem;"><a class="navhref" href="<?php echo site_url('article/index').'/1' ?>">勤<br>创<br>新<br>闻</a></div>
				<div style="position: absolute;left: 1.2rem;"><a class="navhref" href="<?php echo site_url('activity/view').'/1' ?>">近<br>期<br>活<br>动</a></div>
				<div style="position: absolute;left: 1.8rem;"><a class="navhref" href="<?php echo site_url('parttime/message').'/1' ?>">浙<br>大<br>兼<br>职</a>   </div>
				<div style="position: absolute;left: 2.4rem;"><a class="navhref" href="<?php echo site_url('guidance/index') ?>">创<br>业<br>指<br>导</a></div>
			</h3> 
			<div style="position:relative;left:6rem;top:1rem;">
				<img id="spring" src="img/home/spring.png" />
				<img id="summer" src="img/home/summer.png" />				
				<img id="autumn" src="img/home/autumn.png" />
				<!-- <img id="na" src="img/home/na.png" /> -->
				<img id="winter" src="img/home/winter.png"  />
				<!-- <a id="IWantApply"  href="http://1.zjupapic.applinzi.com/signup">点我报名</a> -->
				<img id="ZDQC" src="img/home/ZDQC.png"  />
				<img id="homePage5" src="img/home/homepage5.png" />
			</div>
			<div style="right:2rem;" class="botton-box">
				<img src="img/home/up.png" class="rightButton button button-shodow firstBotton" id="firstToSecond">
				<img src="img/home/up.png" class="downButton button button-shodow secondBotton" id="firstToThird">
			</div>
		    <!-- <div><img src="img/home/homepage0.jpg"></div> -->

		</div>
		<div id="div2" class="slidingSpaces" title="Page 2" style="">

			<!--透明度没有适配浏览器-->
			<div class="side-background" style="width:3.3rem">
			</div>			
			<div class="side" style="width:3.3rem" >
				<div class="side-content">
					<h1 class="font" style="font-size:0.8rem;margin:0;font-family:PingFang">浙大勤创</h1>
					<h2  class="font" style="font-size:0.5rem;margin:0;color:#ea880a;line-height: 50px">#ZJU campus.</h2>
					<div style="position:absolute;bottom:0;right:0;text-align:right;font-family:PingFang;margin: 0;">
						<h1 style="font-size:0.3rem">2003 - <lebal style="color:#ea880a">今天</lebal></h1>
						<h2 style="font-size:0.2rem">PAPIC<br>
							<lebal style="font-size:0.2rem;color:#ea880a">我们创办了近百次活动</lebal>
						</h2>
						<h4 style="font-size:0.1rem;">创业论坛<br>走进名企<br>精英团队挑战赛<br>跳蚤市场<br>年度舞会<br>高桌晚宴<br>创业SYB培训班<br>服饰文化节<br>牛人分享<br>····</h3>
					</div>
				</div>
			</div>
			
			<div style="position:absolute;right:2rem;z-index:29;top:3rem;">
				<!--做成列表，还没有完成-->
				<ul style="color:white;font-family:gillsans-light;font-size:0.2rem;list-style-type:none">
					<li style="padding:10px" ><a style="padding:10px;color: white;text-decoration: none;" href="<?php echo site_url('activity/view').'/1' ?>">ACTIVITY</a></li>
					<li style="padding:10px"><a style="padding:10px;color: white;text-decoration: none;" href="<?php echo site_url('article/index').'/1' ?>">NEWS</a></li>
					<li style="padding:10px" ><a style="padding:10px;color: white;text-decoration: none;" href="<?php echo site_url('dep/index') ?>" >DEPARTMENT</a></li>
					<li style="padding:10px"><a style="padding:10px;color: white;text-decoration: none;" href="<?php echo site_url('parttime/message').'/1' ?>">PARTTIME JOB</a></li>
					<li style="padding:10px;font-family:PingFang;" href="<?php echo site_url('guidance/index') ?>"><a style="padding:10px;color:#ea880a;text-decoration: none;" href="<?php echo site_url('article/index').'/1' ?>">了解更多</a></li>
				</ul>
			</div>
			<!-- 手机端的适配没做 -->
			<div class="botton-box" style="left:20px">
				<img src="img/home/up.png" class="leftButton button firstBotton" id="secondToFirst">
				<img src="img/home/up.png"  class="downButton button secondBotton" id="secondToForth">
			</div>
			<!-- 背景 -->
			<div id="div2-background" style="position:absolute;height:100%;z-index:0">
				<img src="img/home/pexels-photo-30342.jpg" style="left:1rem;top:-0.6rem;width:14rem;position:absolute;">
			</div> 	
		    <!-- <div><img src="img/home/homepage0.jpg"></div> -->

		</div>
		<div id="div3" class="slidingSpaces" title="Page 3">

		    <div id="videoBox"></div> 
			<div class="botton-box" style="right:2rem">
				<img src="img/home/up.png" class="upButton button firstBotton" id="thirdToFirst">
				<img src="img/home/up.png"  class="rightButton button secondBotton" id="thirdToForth">
			</div>

		</div>
		<div id="div4" class="slidingSpaces" title="Page 4">

			<!-- 合照 -->
			<img  class="demo-img pos-center" style="position:absolute;z-index:30;top:1rem;left:1rem;width:14rem;z-index:29" src="img/home/2016.jpg">
			<!-- img/home/QQ图片20160906001512.jpg -->
			<!-- 手机端的适配没做 -->
			<div class="botton-box" style="left:20px">
				<img src="img/home/up.png"  class="upButton button firstBotton" id="forthToSecond">
				<img src="img/home/up.png" class="leftButton button secondBotton" id="forthToThird">
			</div>
		</div>
	</body>

	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/home/jquery.transit.min.js" type="text/javascript"></script>
	<script src="js/home/jquery.ferro.ferroSlider-2.3.3.min.js" type="text/javascript"></script>
	<script src="js/home/script.js" type="text/javascript"></script>
	<!-- video -->
	<script src="./js/home/fz-video.js"></script>

	<!-- 放大镜，$element.mousemove有问题 -->
<!-- 	<script type="text/javascript" src="js/home/blowup.js"></script>
	<style type="text/css">
		$(".demo-img").blowup({
			background : "#FCEBB6"
		});	
	</style> -->

	<script type="text/javascript">
	//视频播放器加载
		var FZ_VIDEO = new createVideo(
			"videoBox",	//容器的id
			{
			//url         : 'http://171.15.197.89/xdispatch/o8t28neoq.bkt.clouddn.com/test.mp4',  //视频地址
				url 		: 'https://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg', 	//视频地址
				autoplay	: true				//是否自动播放
			}
		);
	</script>

	<!-- 活动弹窗 -->
    <script src="js/home/demo.js"></script>

</html>
