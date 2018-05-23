<?php
	var_dump($results->result());
?>

<div id="main" class="row">
	<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
		<div class="column nine">
            <?php foreach($results->result() as $item): ?>
				<article class="clear-after">
					<div class="column three p">
						<figure><img src="http://placehold.it/600x600/ddd/fff&text=PAPIC%20image" alt=""></figure>
					</div><!-- column three -->
					<div class="column nine last">
						<h2><a href="<?php echo site_url("parttime/contains").'/'.$item->id;?>" style="font-size:70%;"><?php echo $item->title;?></a></h2>
						<h5 class="meta-post"><?php echo $item->type;?><a href="<?php echo site_url("parttime/contains").'/'.$item->id;?>"></a>, <a href="<?php echo site_url("parttime/contains").'/'.$item->id;?>"><?php echo $item->year."-".$item->month."-".$item->day; ?></a></h5>
						<p>兼职编号：<?php echo $item->summary;?></p>	
					</div><!-- column nine -->
				</article>				
            <?php endforeach;?>

			<!-- 翻页 -->
			<div id="pagination" style="margin-top: 40px;">
				<ul class="clear-after reset plain">
						<li id="older" class="pagination-nav">
							<?php  if ( $page_num != 1) :?>
							<a href="<?php echo site_url('parttime/message').'/'.($page_num-1)?>" class="button transparent aqua" disabled>
							<i class="fa fa-chevron-left"></i>
							<span class="label">Older</span></a>
							<?php  endif;?>
						</li> 
						<li id="newer" class="pagination-nav">
							<?php if( $page_num != $end_page):?>
							<a href="<?php echo site_url('parttime/message').'/'.($page_num+1)?>" class="button transparent aqua">
							<span class="label">Newer</span>
							<i class="fa fa-chevron-right"></i>
							</a>
							<?php  endif;?>
						</li> 
				</ul>
			</div> <!-- pagination -->


		</div><!-- column nine -->

<script type="text/javascript">
$('body').addClass('blog');
$('body').addClass('list-style');
</script>