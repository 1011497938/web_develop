    <?php 
	    // var_dump( $results->result_array() );
	    $news_num = 0;
	    function C_URL($id)
	    {
	    	echo  site_url('article/contains').'/'.$id;
	    }
    ?>   

	<style type="text/css">
	@media screen and (min-width: 1050px) {
		.titleimg
		{
			min-height: 138px;
			max-height: 143px;
		}
		.bigtitleimg
		{
			min-height: 334px;
			max-height: 350px;
		}		
	}

	@media screen and (min-width: 940px) and (max-width: 1049px){
		.titleimg
		{
			min-height: 152px;
			max-height: 156px;
		}
		.bigtitleimg
		{
			min-height: 305px;
			max-height: 310px;
		}		
	}
	@media screen and (min-width: 771px) and (max-width: 939px){
		.titleimg
		{
			min-height: 101px;
			max-height: 105px;
		}
		.bigtitleimg
		{
			min-height: 240px;
			max-height: 246px;
		}		
	}
	</style>

	<div id="main" class="row">
		<div class="row-content buffer clear-after">
	
		<div class="grid-items preload">

			<?php $row=$results->row($news_num); if ( isset($row) ): ?>
				<article class="item column six">
				<!-- <article class="item column three"> -->
					<a href="<?php C_URL($results->row( $news_num )->id); ?> ">
						<figure ><img src=" <?php echo base_url("static/titleimg")."/".$results->row( $news_num )->filename;?> " alt="<?php C_URL($results->row( $news_num )->id); ?>"  class="bigtitleimg"><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post" style="color: white">
									<?php echo  $results->row( $news_num )->title?>
								</h5>
								<h2>
									<?php echo  $results->row( $news_num )->summary?>
								</h2>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->	
					</a>
				</article>
			<?php endif;$news_num++;?>

			<?php for (; $news_num <= 4; $news_num++): ?>
				<?php $row=$results->row($news_num); if ( isset($row) ): ?>
					<article class="item column three">
						<a href="<?php C_URL($results->row( $news_num )->id); ?>">
							<figure ><img src=" <?php echo base_url("static/titleimg")."/".$results->row( $news_num )->filename;?> " alt="<?php C_URL($results->row( $news_num )->id); ?>" class="titleimg"><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
							<div class="blog-excerpt">
								<div class="blog-excerpt-inner">
									<h5 class="meta-post">
										<?php echo  $results->row( $news_num )->title?>
									</h5>
									<h2>
										<?php echo  $results->row( $news_num )->summary?>
									</h2>
								</div><!-- blog-excerpt -->
							</div><!-- blog-excerpt-inner -->	
						</a>
					</article>
				<?php endif;?>
			<?php endfor; ?>

			<?php $row=$results->row($news_num); if ( isset($row) ): ?>
				<article class="item column six">
				<!-- <article class="item column three"> -->
					<a href="<?php C_URL($results->row( $news_num )->id); ?> ">
						<figure ><img src=" <?php echo base_url("static/titleimg")."/".$results->row( $news_num )->filename;?> " alt="<?php C_URL($results->row( $news_num )->id); ?>"  class="bigtitleimg"><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
						<div class="blog-excerpt">
							<div class="blog-excerpt-inner">
								<h5 class="meta-post" style="color: white">
									<?php echo  $results->row( $news_num )->title?>
								</h5>
								<h2>
									<?php echo  $results->row( $news_num )->summary?>
								</h2>
							</div><!-- blog-excerpt -->
						</div><!-- blog-excerpt-inner -->	
					</a>
				</article>
			<?php endif;$news_num++;?>
							
			<?php for (; $news_num < 10; $news_num++): ?>
				<?php $row=$results->row($news_num); if ( isset($row) ): ?>
					<article class="item column three">
						<a href="<?php C_URL($results->row( $news_num )->id); ?>">
							<figure><img src=" <?php echo base_url("static/titleimg")."/".$results->row( $news_num )->filename;?> " alt="<?php C_URL($results->row( $news_num )->id); ?>" class="titleimg"><span class="blog-overlay"><i class="icon icon-doc"></i></span></figure>
							<div class="blog-excerpt">
								<div class="blog-excerpt-inner">
									<h5 class="meta-post">
										<?php echo  $results->row( $news_num )->title?>
									</h5>
									<h2>
										<?php echo  $results->row( $news_num )->summary?>
									</h2>
								</div><!-- blog-excerpt -->
							</div><!-- blog-excerpt-inner -->	
						</a>
					</article>
				<?php endif;?>
			<?php endfor;  ?>

			<div class="shuffle-sizer three"></div>
			<?php //echo $this->pagination->create_links(); ?>
		</div><!-- grid-items -->

		<!-- 翻页 -->
		<div id="pagination">
			<ul class="clear-after reset plain">
					<li id="older" class="pagination-nav">
						<?php  if ( $page_num != 1) :?>
						<a href="<?php  echo site_url("article/index")."/".($page_num-1) ; ?>" class="button transparent aqua" disabled>
						<i class="fa fa-chevron-left"></i>
						<span class="label">Older</span></a>
						<?php  endif;?>
					</li> 
					<li id="newer" class="pagination-nav">
						<?php if( $page_num != $end_page):?>
						<a href="<?php echo site_url("article/index")."/".($page_num+1) ; ?>" class="button transparent aqua">
						<span class="label">Newer</span>
						<i class="fa fa-chevron-right"></i>
						</a>
						<?php  endif;?>
					</li> 
			</ul>
		</div>

		</div><!-- row-content -->
	</div><!-- row -->
</main><!-- main -->

<!-- <script type="text/javascript">
	$(function(){
		$(".titleimg").each(function(){
			var width = $(this).parent().width();
			$(this).height( width *3/4 );
		});
	});
</script> -->

<script type="text/javascript">
	$('body').addClass('blog');
	$('body').addClass('masonry-style');
</script>

