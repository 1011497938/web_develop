<!DOCTYPE html>
<html lang="en">

    <head>
        <base href ="/static/">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>人力资源录入界面</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="css/hr/bootstrap.min.css">
		<link rel="stylesheet" href="css/hr/form-elements.css">
        <link rel="stylesheet" href="css/hr/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


    </head>

    <body>

        <!-- Top content -->
        <form enctype ="multipart/form-data" action="http://qcw.zju.edu.cn/hr/submit" method="post">
            <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1 style="color:#D45050"><strong >人力资源. 录入界面</strong></h1><br>
                            <br><strong>human resource<br> <br>一年勤创 终身难忘</strong> 
                            <div class="description">
                            	<p>
	                            	<br>
	                            	<a style="color:#D45050"><strong></strong></a>
                            	</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left" 
                        			<h3 style="color:#D45050;font-size:150%">entry form</h3>
                            		<p style="font-size:70%;color:#D45050">请认真填写以下各项</p>
                        		</div>
                        		<div class="form-top-right">
                        			<img src="images/hr/la.png"/>
                        		</div>
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">

                                    <!-- 照片上传 -->
                                    <div class='form-group' style="width:35%; float:right;margin-bottom: 0px;"  align='center' >
                                        <label for="p-upload">
                                            <div id="preview" style="margin-top:12px;:90px;height:0px">
                                                <img id="imghead" width=120 height=150 src='images/hr/p-upload.png'>
                                            </div>
                                        </label>
                                        <div style="display:none;">
                                            <input type="file" id="p-upload"  name="photo" onchange="previewImage(this)" />  
                                        </div>
                                    </div>

			                    	<div class="form-group">
                                        <label>姓名</label>
                                        <label style="font-size:70%">Name</label>
			                        	<input type="text" name="name" placeholder="Name...." class="for m-username form-control" style="width: 60%;">
			                        </div>
                                    <div class="form-group">
                                        <label>性别</label>
                                        <label style="font-size:70%">Gender</label>
                                        <input type="text" name="gender" placeholder="Gender...." class="form-username form-control" style="width: 60%;">
                                    </div>
                                    <div class="form-group">
                                        <label>生日</label>
                                        <label style="font-size:70%">Birthday</label>
                                        <input type="text" name="birthday" placeholder="Birthday...." class="form-username form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label>年级</label>
                                        <label style="font-size:70%">Grade</label>
                                        <input type="text" name="grade" placeholder="Grade...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>籍贯</label>
                                        <label style="font-size:70%">Native Place</label>
                                        <input type="text" name="hometown" placeholder="Native Place...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>特长</label>
                                        <label style="font-size:70%">Special Skill</label>
                                        <input type="text" name="specialty" placeholder="Special Skill...." class="form-username form-control">
                                    </div>  
                                    <div class="form-group">
                                        <label>学历/保研情况</label>
                                        <label style="font-size:70%">Education Background</label>
                                        <input type="text" name="education" placeholder="Education Background...." class="form-username form-control">
                                    </div>    
                                    <div class="form-group">
                                        <label>专业/职业</label>
                                        <label style="font-size:70%">Major/Occupation</label>
                                        <input type="text" name="major" placeholder="Major/Occupation...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>所在校区</label>
                                        <label style="font-size:70%">Campus</label>
                                        <input type="text" name="campus" placeholder="Campus...." class="form-username form-control">
                                    </div>  
                                    <div class="form-group">
                                        <label>宿舍/单位地址</label>
                                        <label style="font-size:70%">Dormitory/Work Addresses</label>
                                        <input type="text" name="dormitory" placeholder="Dormitory/Work Addresses...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>加入勤创时间</label>
                                        <label style="font-size:70%">Date of Joining the PAPIC</label>
                                        <input type="text" name="jointime" placeholder="Date of Joining the PAPIC...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>部门</label>
                                        <label style="font-size:70%">Department</label>
                                        <input type="text" name="department" placeholder="Department...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>其他加入组织</label>
                                        <label style="font-size:70%">Other Organization</label>
                                        <input type="text" name="otherorganization" placeholder="Other Organization...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>微信</label>
                                        <label style="font-size:70%">Wechat ID</label>
                                        <input type="text" name="wechat" placeholder="Major...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>QQ</label>
                                        <input type="text" name="qq" placeholder="QQ...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>手机短号&长号</label>
                                        <label style="font-size:70%">Tel</label>
                                        <input type="text" name="tel" placeholder="Tel...." class="form-username form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>E-mail</label>
                                        <input type="text" name="email" placeholder="E-mail...." class="form-username form-control">
                                    </div>


                                    <div class="form-group" 
                                        <h3 style="color:#D45050;font-size:150%">个人经历</h3>
                                    </div>
                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label style="margin-bottom: 0px;">留学情况</label>
                                    </div>
                                    <div class="form-group">
                          
                                            <input type="radio" value="正在留学" name="abroadexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">正在留学</span>
                                                </label>
                                            <input type="radio" value="曾留过学" name="abroadexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">曾留过学</span>
                                                </label>                                            
                                            <input type="radio" value="未留过学,但有意向" name="abroadexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">未留过学,但有意向</span>
                                                </label>   
                                            <input type="radio" value="未留过学，也无意向" name="abroadexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left;margin-bottom: 10px;">
                                                    <span class="check-image"></span>   <span class="radiobox-content">未留过学，也无意向</span>
                                                </label>                                               
                                  
     
                                        <input type="text" name="country" placeholder="相应国家...." class="form-username form-control" style="    background: #FFFFFF;border: none;">
                                    </div>   

                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label style="margin-bottom: 0px;">考试经历  <label style="font-size:80%">托福/雅思/托业</label></label>
                                    </div>
                                    <div class="form-group">
                                
                                            <input type="radio" value="正在备考" name="testexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">正在备考</span>
                                                </label>
                                            <input type="radio" value="已考过" name="testexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">已考过</span>
                                                </label>
                                            <input type="radio" value="未考过" name="testexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left;margin-bottom: 10px;">
                                                    <span class="check-image"></span>   <span class="radiobox-content">未考过</span>
                                                </label>                                                   
                                   
                                        <input type="text" name="specifictest" placeholder="具体考试...." class="form-username form-control" style="background: #FFFFFF;border:none;margin-bottom: 10px;">
                                        <input type="text" name="othertest" placeholder="其他资格证考试...." class="form-username form-control" style="background: #FFFFFF;border:none;">
                                    </div>   


                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label style="margin-bottom: 0px;">实习经历</label>
                                    </div>
                                    <div class="form-group">
                                 
                                            <input type="radio" value="正在实习" name="workexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">正在实习</span>
                                                </label>
                                            <input type="radio" value="曾实习" name="workexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">曾实习</span>
                                                </label>
                                            <input type="radio" value="未实习" name="workexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left;margin-bottom: 10px;">
                                                    <span class="check-image"></span>   <span class="radiobox-content">未实习</span>
                                                </label>                                               
                                   
     
                                        <input type="text" name="corp" placeholder="公司名...." class="form-username form-control" style="background: #FFFFFF;border:none;margin-bottom: 10px;">
                                        <textarea name="competitionexp" placeholder="商赛经历...." row="5" style="resize:none; background:#FFFFFF; border:none;" class="form-username form-control" ></textarea>
                                    </div>   


                                    <div class="form-group" style="margin-bottom: 0px;">
                                        <label style="margin-bottom: 0px;">创业经历</label>
                                    </div>
                                    <div class="form-group">
                                 
                                            <input type="radio" value="曾经创业" name="ventureexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">曾经创业</span>
                                                </label>
                                            <input type="radio" value="正在创业" name="ventureexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left">
                                                    <span class="check-image"></span>   <span class="radiobox-content">正在创业</span>
                                                </label>
                                            <input type="radio" value="未曾创业" name="ventureexp" class="chklist" style="display:none" id="photo"/>
                                                <label class="chkbox" style="float:left;margin-bottom: 10px;">
                                                    <span class="check-image"></span>   <span class="radiobox-content">未曾创业</span>
                                                </label>                                             
                                  
       
                                        <input type="text" name="ventureproject" placeholder="创业项目...." class="form-username form-control" style="background: #FFFFFF;border:none;margin-bottom: 10px;">
                                    </div>   

                                    <div class="form-group" style="margin-bottom:2px;">
                                        <label>对勤创发展的一些建议</label>
                                    </div>    
                                     <div class="form-group">
                                        <textarea row="5" name="advise" style="resize:none;height:200px" class="form-username form-control"></textarea>
                                    </div>                                                                              
			                        <button type="submit" class="btn">提交</button>
			                    </form>
		                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 social-login" style="font-size:80%">
                            ©浙大勤创<br>
                            Pioneering And Partwork-study Instructing Center</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        </form>


        <!-- Javascript -->
        <script src="js/hr/jquery-1.11.1.min.js"></script>
        <script src="js/hr/bootstrap.min.js"></script>
        <script src="js/hr/jquery.backstretch.min.js"></script>
        
        <!-- 背景设置 -->
        <script src="js/hr/scripts.js"></script>
        
        <!-- checkbox js -->
        <script src="js/hr/labelauty.js"></script>
        <script>
            $(document).ready(function () {
                $(".chklist").labelauty("chklist", "check");
            });
        </script>

        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

        <!-- 照片上传 js -->
        <script src='js/hr/photo-upload.js'></script>

    </body>

</html>