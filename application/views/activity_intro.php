<?php 
	// var_dump($results->result());  
	$current_year = $results->row()->year;
	$id = 1; 
	function C_URL($id)
    {
    	echo  site_url('article/contains').'/'.$id;
    }
	$month_name = array(
		'1' => 'Jan.',
		'2' => 'Feb.', 
		'3' => 'Mar.', 
		'4' => 'Apr.', 
		'5' => 'May.', 
		'6' => 'Jun.', 
		'7' => 'Jul.', 
		'8' => 'Aug.', 
		'9' => 'Sept.', 
		'10' => 'Oct.', 
		'11' => 'Nov.',  
		'12' => 'Dec.' 
	);
	$day_postname = array(
		'1' => 'st',
		'2' => 'nd',
		'3' => 'rd',
		'4' => 'th',
		'5' => 'th',
		'6' => 'th',
		'7' => 'th',
		'8' => 'th',
		'9' => 'th',
		'0' => 'th'
	);
?>

<div id="main" class="row">
	<div class="row-content buffer clear-after">

		<article class="item column six" id="ActivityPicture" style="position:relative">
			<a href="javascript:void(0)" id="imghref">
				<figure><img src="http://placehold.it/800x600/ddd/fff&text=PAPIC%20image" alt="" id="MoveImg"><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>					
			</a>
		</article>

		<!-- 显示内容 -->
		<div class="timeline column six last" style="float:right">
			<div class="year">
				<time datetime="<?php echo $current_year;?>"><?php echo $current_year;?></time>	
				<?php foreach($results->result() as $item): ?>
					<?php if ( $item->year < $current_year ): ?>
						<time datetime="<?php echo $item->year; $current_year = $item->year?>"><?php echo $current_year;?></time>
					<?php endif ?>
					<div class="experience" id="experience<?php echo $id++; ?>" alt="<?php C_URL( $item->id); ?>" style="cursor: pointer;">
						<span class="circle"></span>
						<div class="experience-img" style="display: none;"><img src="<?php echo base_url("static/titleimg")."/".$item->filename;?>" alt=""></div>
						<div class="experience-info clear-after">
							<h5><?php echo $item->title;?></h5>
							<div class="role"><?php echo $month_name[$item->month] .' '.$item->day.$day_postname[substr($item->day,-1)].', '.$item->year; ?></div>
							<p><?php echo $item->summary;?></p>
						</div><!-- experience-info -->
					</div><!-- experience -->
				<?php endforeach;?>
			</div><!-- year -->
		</div><!-- timeline -->

		<!-- 翻页 -->
		<div id="pagination" style="margin-top: 40px;">
			<ul class="clear-after reset plain">
					<li id="older" class="pagination-nav">
						<?php  if ( $page_num != 1) :?>
						<a href="<?php  echo site_url("activity/view")."/".($page_num-1) ; ?>" class="button transparent aqua" disabled>
						<i class="fa fa-chevron-left"></i>
						<span class="label">Older</span></a>
						<?php  endif;?>
					</li> 
					<li id="newer" class="pagination-nav">
						<?php if( $page_num != $end_page):?>
						<a href="<?php  echo site_url("activity/view")."/".($page_num+1) ; ?>" class="button transparent aqua">
						<span class="label">Newer</span>
						<i class="fa fa-chevron-right"></i>
						</a>
						<?php  endif;?>
					</li> 
			</ul>
		</div> <!-- pagination -->

	</div><!-- row-content -->

</div><!-- row -->

</main><!-- main -->

<script type="text/javascript">
	$(document).ready(function(){

		//使方块内容随鼠标变动
		$("#MoveImg").attr("src", $("#experience1").children(".experience-img").children("img").attr("src") );  

		$(".experience").each(function(){
			// 点击跳转
			$(this).click(function(){
				 window.location.href = $(this).attr("alt");
			});

			$(this).mouseover(function(){
				//延迟函数没成功
				$("#MoveImg").delay(1000).attr("src", $(this).children(".experience-img").children("img").attr("src") );
				$("#imghref").delay(1000).attr("href", $(this).attr("alt") );
		  	});

	    });		

		if( $(window).width() <= 750 )
		{
			$("#ActivityPicture").hide();
		}

		$(window).resize(function () {          //当浏览器小于一定值时去掉移动框

			if( $(window).width() <= 750 ){
				if(!$("#ActivityPicture").is(":hidden"))
					$("#ActivityPicture").hide();
			}
			else
			{
				if($("#ActivityPicture").is(":hidden"))
					$("#ActivityPicture").show();
			}
			 
		});

		//使方块随滑轮运动
		var scrollHight =  null;
		var StopHeight;
		$(window).scroll(function(event){
			
			if( ( $("#ActivityPicture").offset().top - $(window).scrollTop() ) <= 100 )
			{
				if( $("#ActivityPicture").css("position") != "fixed")
				{
					$("#ActivityPicture").css("left",$("#ActivityPicture").offset().left);
					$("#ActivityPicture").css("top","100px");	
					$("#ActivityPicture").width($("#ActivityPicture").width());
					$("#ActivityPicture").css("position","fixed");
					scrollHight = $(window).scrollTop();
				}
			}

			if( scrollHight && $(window).scrollTop() < scrollHight)
			{	
				if( $("#ActivityPicture").css("position") != "absolute")
				{
					$("#ActivityPicture").css("position","absolute");
					$("#ActivityPicture").css("top",null);
					$("#ActivityPicture").css("left",null);
					$("#ActivityPicture").width(null);
					scrollHight = null;							
				}

			}

		});

	});
</script>

<script type="text/javascript">
$('body').addClass('masonry-style');
$('body').addClass('blog');
</script>