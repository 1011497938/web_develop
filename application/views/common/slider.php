<?php  
    $this->load->database();//加载数据库
    $slider_pic= $this->db->select('*')->from('home_pic')->get();
?>


<main role="main" >
	<div id="intro-wrap">
		<div id="intro" class="preload darken" data-autoplay="5000" data-navigation="true" data-pagination="true" data-transition="fadeUp" >
			<?php foreach($slider_pic->result() as $item): ?>
				<!-- <?php var_dump( $item);?> -->
				<div class="intro-item" href="<?php echo $item->url;?> "" style="background-image: url( <?php echo base_url("static/img/slider")."/".$item->filename;?> );"></div>			
			<?php endforeach; ?>
		</div><!-- intro -->
	</div><!-- intro-wrap -->
