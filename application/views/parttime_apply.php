<link rel="stylesheet" type="text/css" href="css/parttime-apply.css">	
<main role="main">
	<div id="main">		

		<div class="jq22-container" style="padding-top: 70px;padding-bottom: 70px;">
			<div class="login-wrap">
				<div class="login-html">
					<!-- check表示当前显示的登录页面 -->
					<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">兼职报名</label>
					<input id="tab-1" type="radio" name="tab" class="sign-up"><label for="tab-1" class="tab"></label>
					<div class="login-form">
						<div class="sign-in-htm">
							<form  role="form"  action="<?php echo site_url('parttime/submit')?>" method="post">
								<div class="group">
									<label class="label">姓名</label>
									<input  type="text" class="input" style="max-width: none;" name="name" required>
								</div>
								<div class="group">
									<label  class="label">性别</label>
									<input  type="text" class="input" style="max-width: none;" name="sex" required> 
								</div>
								<div class="group">
									<label class="label">年级</label>
									<input  type="text" class="input" style="max-width: none;" name="grade" required> 
								</div>
								<div class="group">
									<label  class="label">专业</label>
									<input  type="text" class="input" style="max-width: none;" name="major" required> 
								</div>
								<div class="group">
									<label class="label">学号</label>
									<input  type="text" class="input" style="max-width: none;" name="xh" required> 
								</div>
								<div class="group">
									<label class="label">手机号</label>
									<input  type="text" class="input" style="max-width: none;" name="phone" required> 
								</div>
								<div class="group">
									<label class="label">兼职编号</label>
									<input  type="text" class="input" style="max-width: none;" name="NO" required> 
								</div>
								<div class="group">
									<label class="label">所在校区</label>
									<input  type="text" class="input" style="max-width: none;" name="section" required> 
								</div>
								<div class="group">
									<label class="label">自我简介</label>
									<textarea class="input" style="max-width: none;resize:none" name="intro" required></textarea>
								</div>						
								<!-- submit有问题，宽度要调 -->
								<div class="group" style="margin-right: 11%">
									<input type="submit" class="button" value="提交">
								</div>
								<div class="hr"></div>
							</form>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div><!-- id-main -->
</main><!-- main -->

<script type="text/javascript">
$('body').addClass('page');
</script>