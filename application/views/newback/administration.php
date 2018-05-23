<body class="login1">
<!-- Login Screen -->
<div class="login-wrapper">
    <div class="login-container">
        <span style="font-size: 30px;color:#00b7ee">勤创网后台</span></br>
        <span style="font-size: 15px">ZJUPAPIC v2.0</span>
        <form action="<?php echo site_url();?>Administration/user" method="POST">
            <div class="form-group" style="margin-top: 30px">
                <input class="form-control" placeholder="用户名" type="text" name="username">
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="密码" type="password" name="password"><input type="submit" value="&#xf054;">
            </div>
            <div class="form-options clearfix">
                <div class="text-left">
                    <label class="checkbox"><input type="checkbox"><span>记住我</span></label>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- End Login Screen -->
</body>

</html>