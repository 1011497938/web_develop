<?php
$kind=$this->uri->segment(2);
$parttime="";$index="";$pic="";$news="";$partner="";$material="";$result="";$appManager="";
if($kind=="parttime"){
    $parttime='class="current"';
}
elseif($kind==""||$kind=="index"){
    $index='class="current"';
}
elseif($kind=="pic"){
    $pic='class="current"';
}
elseif($kind=="news"){
    $news='class="current"';
} 
elseif($kind=="result"){
    $result='class="current"';
}
?>
<body>
<div class="modal-shiftfix">
    <!-- Navigation -->
    <div class="navbar navbar-fixed-top scroll-hide">
        <div class="container-fluid top-bar">
            <div class="pull-right">
                <ul class="nav navbar-nav pull-right">
                <li class="dropdown settings hidden-xs">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span aria-hidden="true" class="se7en-gear"></span>
                  <div class="sr-only">
                    Settings
                  </div>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a class="settings-link blue" href="javascript:chooseStyle('none', 30)"><span></span>Blue</a>
                  </li>
                  <li>
                    <a class="settings-link green" href="javascript:chooseStyle('green-theme', 30)"><span></span>Green</a>
                  </li>
                  <li>
                    <a class="settings-link orange" href="javascript:chooseStyle('orange-theme', 30)"><span></span>Orange</a>
                  </li>
                  <li>
                    <a class="settings-link magenta" href="javascript:chooseStyle('magenta-theme', 30)"><span></span>Magenta</a>
                  </li>
                  <li>
                    <a class="settings-link gray" href="javascript:chooseStyle('gray-theme', 30)"><span></span>Gray</a>
                  </li>
                </ul>
              </li>
                    <li class="dropdown user hidden-xs"><a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img width="34" height="34" src="images/avatar-male.jpg" />
                            <?php
                            $this->load->library('session');
                            $user=$this->session->userdata('user');
                            echo $user['usergroup'];
                            ?>
                            <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo site_url("administration/logout")?>">
                                    <i class="icon-signout"></i>注销</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a  href="javascript:void(0)" style="font-size:20px;line-height:50px">ZJUPAPIC <span style="color:black;font-size:10px">V2.0</span></a>
        </div>
        <div class="container-fluid main-nav clearfix">
            <div class="nav-collapse">
                <ul class="nav">
                    <li>
                        <a <?php echo $index;?> href="<?php echo site_url("admin/index") ?>"><span aria-hidden="true" class="se7en-feed"></span>概况</a>
                    </li>
                    <li>
                        <a <?php echo $pic;?> href="<?php echo site_url("admin/pic") ?>"><span aria-hidden="true" class="se7en-home"></span>图片管理</a>
                    </li>
                    <li class="dropdown"><a <?php echo $news;?> data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="se7en-star"></span>活动&推文<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url("admin/news/add") ?>">发布</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("admin/news/manage") ?>">管理</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown"><a <?php echo $parttime;?> data-toggle="dropdown" href="#">
                            <span aria-hidden="true" class="se7en-forms"></span>兼职信息<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url("admin/parttime/add") ?>">发布</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("admin/parttime/manage") ?>">管理</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url("admin/parttime/apply") ?>">报名</a>
                            </li>
                        </ul>
                    </li>
                
                </ul>
            </div>
        </div>
    </div>
    <!-- End Navigation -->
    <div class="container-fluid main-content">
        <div class="page-title">
            <h1>
                <?php
                $inner=$this->uri->segment(3);
                if($kind=="parttime"){
                    if($inner=="add"){
                        echo "兼职信息发布";
                    }
                    elseif($inner=="manage"){
                        echo "兼职信息管理";
                    }
                    elseif($inner=="apply"){
                        echo "报名信息";
                    }
                    elseif($inner=="preapply"){
                        echo "预报名信息";
                    }
                    elseif ($inner=="modify") {
                        echo "兼职信息修改";
                    }
                    else echo "error!";
                }
                if($kind=="news"){
                    if($inner=="add"){
                        echo "信息发布";
                    }
                    elseif($inner=="manage"){
                        echo "信息管理";
                    }
                    elseif ($inner=="modify") {
                        echo "信息修改";
                    }
                    else echo "error!";
                }
                if($kind=="startup"){
                    if($inner=="add"){
                        echo "信息发布";
                    }
                    elseif($inner=="manage"){
                        echo "信息管理";
                    }
                    else echo "error!";
                }

                ?>
            </h1>
        </div>