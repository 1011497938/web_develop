<div id="main" class="row">
<div class="row-content buffer-left buffer-right buffer-bottom clear-after">
	<div class="column nine" style="margin-top: 113px;">
        <div class="h hm">
            <h4 class="article_inner_title">
                <?php echo $article->title; ?>	                        
            </h4>
            <p class="xg1">
                <?php echo $article->year.'-'.$article->month.'-'.$article->day?>
                <span class="pipe">|</span>
                <span> <?php echo $article->type?>;</span><br>
                <span>访问量：<?php echo $pageviews?></span>
                <br>
                <?php if( $type=="parttime"):?>
  					<span> 兼职编号：</span>
  				<?php endif ?>
  				<span><?php echo $article->summary?></span>
        </div>
        <div class="s">
            <span>
				<?php  echo $article->content;?>
            </span>
        </div>
		<div id="pagination" style="padding-top: 80px;">
			<ul class="clear-after reset plain">
				<li id="older" class="pagination-nav"><a href="#" class="button transparent aqua"><i class="fa fa-chevron-left"></i><span class="label">Older</span></a></li> 
				<li id="newer" class="pagination-nav"><a href="#" class="button transparent aqua"><span class="label">Newer</span><i class="fa fa-chevron-right"></i></a></li>  
			</ul>
		</div>											
	</div><!-- column nine -->
