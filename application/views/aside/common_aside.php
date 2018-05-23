		<aside role="complementary" class="sidebar column three last">
			<div class="widget widget_search">
				<form role="search">
					<span class="pre-input"><i class="icon icon-search"></i></span>
					<input type="text" placeholder="Search..." value="" class="plain buffer">
				</form>
			</div>
			<div class="widget">
				<h4>Recent News</h4>
				<!-- <?php var_dump($recent_news->result());?> -->
				<div class="textwidget">
					<?php foreach($recent_news->result() as $item): ?>
						<a class="aside"href="<?php echo site_url('article/contains').'/'.$item->id; ?>"><?php echo $item->title;?></a><br>
					<?php endforeach;?>
				</div><!-- la class="textwidget" è forse generata automaticamente da wp -->
			</div>

			<div class="widget">
				<h4>Recent Jobs</h4>
				<!-- <?php var_dump($recent_news->result());?> -->
				<div class="textwidget">
					<?php foreach($recent_jobs->result() as $item): ?>
						<a class="aside" href="<?php echo site_url('parttime/contains').'/'.$item->id; ?>"><?php echo $item->title;?></a><br>
					<?php endforeach;?>
				</div><!-- la class="textwidget" è forse generata automaticamente da wp -->
			</div>		

		</aside>				
	</div><!-- row -->
</main><!-- main -->