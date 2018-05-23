<?php $item = $data[0]; ?>
<div class="row">
    <div class="col-lg-12">
        <form enctype="multipart/form-data" action="<?php echo site_url("admin/news/modify/submit")?>" method="post">
            <div class="widget-container fluid-height">
                <div class="heading" style="height:500px">
                <input type="hidden" name="id" value="<?php echo $item->id?>">
                    <div class="form-group col-md-12">
                        <label>标题（20字以内）</label>
                        <input name="title" class="form-control" id="name" type="text" value="<?php echo $item->title ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label>类型</label>
                        <select name="kind" class="select2able">
                            <option value="活动">活动</option>
                            <option value="推文">推文</option>
                            <option value="线上跳市轮播图">线上跳市轮播图</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>app展示类型(必选)</label>
                        <select name="app_vc_kind" class="select2able">
                            <option value="1">正经文章类</option>
                            <option value="0">微信推文类</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <label>副标题(20字以内，必填)</label>
                        <input name="summary" class="form-control" id="name" type="text"  required="required" value="<?php echo $item->summary ?>"/>
                    </div>
                    <div class="form-group col-md-12">
                        <label>发布者(必填)</label>
                        <input name="type" class="form-control" id="type" type="text" value="<?php echo $item->type ?>">
                    </div>
                    <i class="icon-edit"></i>文章编辑器
                    <div>
                        说明：
                        </br>APP支持超链接跳转，可以将需要的活动链接做为超链接加入文章
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="col-md-2" style="padding:15px 5px">
                        <div style="text-align: center;margin-bottom: 50px;font-size:1em">
                            标题图片(不超过200kb，必须为**jpg**格式，必填)
                        </div>

                        <div class="fileupload fileupload-new" data-provides="fileupload">
                            <div class="fileupload-new img-thumbnail" style="width: 100%; height: 150px;">
                                <img src="<?php echo base_url("static/titleimg").'/news'.$id.'.jpg' ?>">
                            </div>
                            <div class="fileupload-preview fileupload-exists img-thumbnail" style="width: 100%; max-height: 150px"></div>
                            <div class="text-center" style="width:200px;">
                                <span class="btn btn-default btn-file" style="padding: 6px 33px;">
                                    <span class="fileupload-new">选择</span>
                                    <span class="fileupload-exists">更改</span>
                                    <input id="imgupload" type="file" name="imgupload">
                                </span>
<!--                                 <span class="btn btn-default btn-file" style="padding: 6px 33px;">
                                    <span class="fileupload-new">确定</span>
                                    <span class="fileupload-exists">确定</span>
                                </span> -->
                            </div>
                        </div>
                    </div>

                    <script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.config.js"></script>
                    <script type="text/javascript" charset="utf-8" src="../ueditor/ueditor.all.min.js"> </script>
                    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
                    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
                    <script type="text/javascript" charset="utf-8" src="../ueditor/lang/zh-cn/zh-cn.js"></script>
                    <div class="col-md-10">
                        <script id="editor" name="editor" type="text/plain" style="width:100%;height:200px;padding:15px 5px">
                            <?php echo $item->content ?>
                        </script>
                    </div>
                </div>

                <div style="padding:15px 25px">
                    <button class="btn btn-lg btn-block btn-primary-outline"   type="submit">提交</button></div>

                <script type="text/javascript">

                    //页面初始化input
                    $("[name='kind'].select2able [value='<?php echo $item->kind ?>']").attr('selected','selected');
                    $("[name='app_vc_kind'].select2able [value='<?php echo $item->appViewController ?>']" ).attr('selected','selected');

                    //实例化编辑器
                    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
                    var ue = UE.getEditor('editor');


                    function isFocus(e){
                        alert(UE.getEditor('editor').isFocus());
                        UE.dom.domUtils.preventDefault(e)
                    }
                    function setblur(e){
                        UE.getEditor('editor').blur();
                        UE.dom.domUtils.preventDefault(e)
                    }
                    function insertHtml() {
                        var value = prompt('插入html代码', '');
                        UE.getEditor('editor').execCommand('insertHtml', value)
                    }
                    function createEditor() {
                        enableBtn();
                        UE.getEditor('editor');
                    }
                    function getAllHtml() {
                        alert(UE.getEditor('editor').getAllHtml())
                    }
                    function getContent() {
                        var arr = [];
                        arr.push("使用editor.getContent()方法可以获得编辑器的内容");
                        arr.push("内容为：");
                        arr.push(UE.getEditor('editor').getContent());
                        alert(arr.join("\n"));
                    }
                    function getPlainTxt() {
                        var arr = [];
                        arr.push("使用editor.getPlainTxt()方法可以获得编辑器的带格式的纯文本内容");
                        arr.push("内容为：");
                        arr.push(UE.getEditor('editor').getPlainTxt());
                        alert(arr.join('\n'))
                    }
                    function setContent(isAppendTo) {
                        var arr = [];
                        arr.push("使用editor.setContent('欢迎使用ueditor')方法可以设置编辑器的内容");
                        UE.getEditor('editor').setContent('欢迎使用ueditor', isAppendTo);
                        alert(arr.join("\n"));
                    }
                    function setDisabled() {
                        UE.getEditor('editor').setDisabled('fullscreen');
                        disableBtn("enable");
                    }

                    function setEnabled() {
                        UE.getEditor('editor').setEnabled();
                        enableBtn();
                    }

                    function getText() {
                        //当你点击按钮时编辑区域已经失去了焦点，如果直接用getText将不会得到内容，所以要在选回来，然后取得内容
                        var range = UE.getEditor('editor').selection.getRange();
                        range.select();
                        var txt = UE.getEditor('editor').selection.getText();
                        alert(txt);
                    }

                    function getContentTxt() {
                        var arr = [];
                        arr.push("使用editor.getContentTxt()方法可以获得编辑器的纯文本内容");
                        arr.push("编辑器的纯文本内容为：");
                        arr.push(UE.getEditor('editor').getContentTxt());
                        alert(arr.join("\n"));
                    }
                    function hasContent() {
                        var arr = [];
                        arr.push("使用editor.hasContents()方法判断编辑器里是否有内容");
                        arr.push("判断结果为：");
                        arr.push(UE.getEditor('editor').hasContents());
                        alert(arr.join("\n"));
                    }
                    function setFocus() {
                        UE.getEditor('editor').focus();
                    }
                    function deleteEditor() {
                        disableBtn();
                        UE.getEditor('editor').destroy();
                    }
                    function disableBtn(str) {
                        var div = document.getElementById('btns');
                        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
                        for (var i = 0, btn; btn = btns[i++];) {
                            if (btn.id == str) {
                                UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                            } else {
                                btn.setAttribute("disabled", "true");
                            }
                        }
                    }
                    function enableBtn() {
                        var div = document.getElementById('btns');
                        var btns = UE.dom.domUtils.getElementsByTagName(div, "button");
                        for (var i = 0, btn; btn = btns[i++];) {
                            UE.dom.domUtils.removeAttributes(btn, ["disabled"]);
                        }
                    }

                    function getLocalData () {
                        alert(UE.getEditor('editor').execCommand( "getlocaldata" ));
                    }

                    function clearLocalData () {
                        UE.getEditor('editor').execCommand( "clearlocaldata" );
                        alert("已清空草稿箱")
                    }
                </script>
            </div>
        </form>
    </div>
</div>

