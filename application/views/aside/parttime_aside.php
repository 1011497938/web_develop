			<aside role="complementary" class="sidebar column three last">
				<div class="widget widget_search">
					<form role="search">
						<span class="pre-input"><i class="icon icon-search"></i></span>
						<input type="text" placeholder="Search..." value="" class="plain buffer">
					</form>
				</div>
				<div class="widget">
					<h4>近期活动</h4>
					<div class="textwidget">
						<?php foreach($recent_news->result() as $item): ?>
							<a class="aside" href="<?php echo site_url('article/contains').'/'.$item->id; ?>" ><?php echo $item->title;?></a><br>
						<?php endforeach;?>
					</div><!-- la class="textwid get" è forse generata automaticamente da wp -->
				</div>

				<div class="widget">
					<h4>Recent Jobs</h4>
					<div class="textwidget">
						<?php foreach($recent_jobs->result() as $item): ?>
							<a class="aside" href="<?php echo site_url('parttime/contains').'/'.$item->id; ?>" ><?php echo $item->title;?></a><br>
						<?php endforeach;?>
					</div><!-- la class="textwidget" è forse generata automaticamente da wp -->
				</div>		

				<div class="widget">
					<h4 >兼职报名</h4>
					<form class="contact-section" action="<?php echo site_url('parttime/submit')?>" method="post" required>
						<input class="plain buffer" type="text" placeholder="姓名" style="width:100%" name="name" required>
						<input class="plain buffer" type="text" placeholder="性别" style="width:100%" name="sex" required>
						<input class="plain buffer" type="text" placeholder="年级" style="width:100%" name="grade" required>
						<input class="plain buffer" type="text" placeholder="专业" style="width:100%" name="major" required>					
						<input class="plain buffer" type="text" placeholder="学号" style="width:100%" name="xh" required>
						<input class="plain buffer" type="text" placeholder="手机号" style="width:100%" name="phone" required>
						<input class="plain buffer" type="text" placeholder="兼职编号" style="width:100%" name="NO" required>
						<input class="plain buffer" type="text" placeholder="所在校区" style="width:100%" name="section" required>			
						<textarea class="plain buffer" rows="5" style="resize:none" placeholder="自我介绍" name="intro" required></textarea>
						<input class="plain button red" type="submit" value="Send">
					</form>	
				</div>						
			</aside>
		</div><!-- row-content -->
	</div><!-- row -->
</main><!-- main -->
