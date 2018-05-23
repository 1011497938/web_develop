<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>浙大勤创-兼职平台</title>
<base href ="<?php echo base_url("static/register")."/";?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
<script src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>
 <link href="css/bootstrap.css" rel="stylesheet">
  <link rel="stylesheet" href="css/stylee.css">
<script type="text/javascript" src="js/jquery.slimscroll.js"></script>
<link href="css/style.css" type="text/css" rel="stylesheet" />

</head>
<body>

<div class="container-fluid" style="padding:0px 80px">
    
       
          
             <div class="col-md-9" id="d1">
               <img src="images/beijing.jpg" class="img-responsive " style="width:100%;height:100%" >
             </div>
           
            <div class="col-md-3 blackbg" id="d2" style="padding:0">
<form action="<?php echo site_url()?>register/submit" method="post">
      <div id="scroll" style="height:100% ">

      <div class="login-box" style="height:100%">
       <div class="form-group" style="color:#fff;font-size:20px">
        兼职报名
        </div>
          <div class="form-group">
          <input type="text" placeholder=" 兼职编号" name="NO">
        </div>
        <div class="form-group">
          <input type="text" placeholder=" 姓名" name="name">
          
        </div>
         <div>
       <div class="form-group" style="text-align:center">
            <input type="radio" name="sex" value="男" style="height:15px;width:20px"><label>男</label>
            <input type="radio" name="sex" value="女" style="margin-left:30px;height:15px;width:20px"><label>女</label>
          </div>
             <div class="form-group">
                 <input type="text" placeholder="学号" class="email-mobile" name="xh">

             </div>
       <div class="form-group">
          <input type="text" placeholder="校区" class="email-mobile" name="section">
          
        </div>

        <div class="form-group">
          <input type="text" placeholder="年级" name="grade">
          <span class="error-notic"></span>
        </div>      
        <div class="form-group">
          <input type="text" placeholder="专业" name="major">
          <span class="error-notic"></span>
        </div>
        <div class="from-line"></div>
        <div style="color:#fff;text-align:center;margin-top:20px">联系方式</div>
        <div class="form-group">
          <input type="text" name="phone" >
          <span class="error-notic"></span>
        </div>
        <div class="from-line"></div>
        <div style="color:#fff;text-align:center;margin-top:20px">电子邮件</div>
        <div class="form-group">
          <input type="text" name="email" >
          <span class="error-notic"></span>
        </div>
       <div class="from-line"></div>
       <div style="color:#fff;text-align:center;margin-top:20px">个人简介</div>
        <div class="form-group">
          <input type="text" placeholder=""style="height:50%" name="intro">
          <span class="error-notic"></span>
        </div>


           

        <div class="form-group">
          <button type="submit" class="tran pr">提交
            <img class="loading" src="images/loading.gif">
          </button>
        </div>
       
    
      <!-- 手机注册成功添补信息 -->
  </div>

      </div>
    </div>
 
               
            </div>
           
            </div>
</form>
<script type="text/javascript">
    $(function(){
      $('#scroll').slimScroll({
          height: 'auto',
          railDraggable: true,
          railColor: '#fff',
      });
      var wid=$(window).width();
      if (wid<768){
        $('#d1').hide();
        $('#d2').css("background-color","#fff");
         $('#d2').css("background-image","url(images/beijing.jpg)");
        $('#d2').removeClass("col-md-3");
        $('.container-fluid').css("padding","0");
        $('.add1').addClass("col-md-6");
      }

    });
</script>

<script>

$(document).ready(function(){

 $('input').iCheck({

   checkboxClass: 'icheckbox_square-blue',  // 注意square和blue的对应关系

   radioClass: 'iradio_square-blue',

   increaseArea: '20%' // optional

 });

});

</script>

</body>
</html>