    <body>
        <?php
            /**
             * 获取当前页面完整URL地址
             */
            function get_url() {
                $sys_protocal = isset($_SERVER['SERVER_PORT']) && $_SERVER['SERVER_PORT'] == '443' ? 'https://' : 'http://';
                $php_self = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
                $path_info = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : '';
                $relate_url = isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : $php_self.(isset($_SERVER['QUERY_STRING']) ? '?'.$_SERVER['QUERY_STRING'] : $path_info);
                return $sys_protocal.(isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : '').$relate_url;
            }
        ?>
        <header role="banner" class="transparent light">
            <div class="row">
                <div class="nav-inner row-content buffer-left buffer-right even clear-after">
                    <div id="brand">
                        <h1 class="reset"><!--<img src="img/logo.png" alt="logo">--><a href="<?php echo get_url(); ?>">PAPIC</a></h1>
                    </div><!-- brand -->
                    <a id="menu-toggle" href="#"><i class="fa fa-bars fa-lg"></i></a>
                    <nav>
                        <ul class="reset" role="navigation">
                            <li class="menu-item">
                                <a href="<?php echo site_url('home') ?>">首页</a>
                            </li>
<!--                             <li class="menu-item">
                                <a href="">秋纳报名</a>
                            </li> -->
                            <li class="menu-item">
                                <a href="http://matrixqc.cn/index.php/regsystem/1366549013"> 春纳报名</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url('dep/index') ?>">部门介绍</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('dep/index/0') ?>">创业实践指导部</a></li>
                                    <li><a href="<?php echo site_url('dep/index/1') ?>">对外拓展部</a></li>
                                    <li><a href="<?php echo site_url('dep/index/2') ?>">素能创业强化部</a></li>        
                                    <li><a href="<?php echo site_url('dep/index/3') ?>">兼职管理部</a></li>  
                                    <li><a href="<?php echo site_url('dep/index/4') ?>">人力资源部</a></li>        
                                    <li><a href="<?php echo site_url('dep/index/5') ?>">办公室</a></li>  
                                    <li><a href="<?php echo site_url('dep/index/6') ?>">技术推广部</a></li>  
                                </ul>
                            </li>                           
                            <li class="menu-item">
                                <a href="<?php echo site_url('article/index').'/1' ?>">勤创新闻</a>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url('activity/view').'/1' ?>">活动介绍</a>
                                <ul class="sub-menu">
                                    <li><a href="<?php echo site_url('activity/view').'/1' ?>">近期活动</a></li>
                                    <li>
                                        <a>活动报名</a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:void(0) ">近期无活动</a></li>
<!--                                             <li><a href="#">活动1</a></li>
                                            <li><a href="#">活动2</a></li>
                                            <li><a href="#">活动3</a></li> -->
                                        </ul>                                               
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url('parttime/message').'/1' ?>">浙大兼职</a>
                                <ul class="sub-menu" >
                                    <li><a href="<?php echo site_url('parttime/message').'/1' ?>" >兼职信息</a></li>
                                    <li><a href="<?php echo site_url('parttime/apply') ?>">兼职报名</a></li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="<?php echo site_url('guidance/index') ?>">创业指导</a>
                            </li>
<!--                             <li class="menu-item">
                                <a>勤创人</a>
                                <ul class="sub-menu">
                                    <li><a href="#">创sir记录</a></li>
                                    <li><a href="#">后台登录</a></li>
                                    <li><a href="#">论坛登录</a></li>
                                </ul>                               
                            </li> -->
                        </ul>
                    </nav>
                </div><!-- row-content -->  
            </div><!-- row -->
        </header>