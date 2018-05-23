<script src="<?php echo base_url("static/background/jquery.form.js")?>"></script>
<div class="row">
  <div class="col-md-12">
    <div class="widget-container" style="position: absolute; width: 100%; padding: 35px;">
      <div class="heading">
        <i class="icon-cloud-upload"></i>首页 轮播
      </div>
        <div id="warning">注意：必须为jpg格式!且比例为1600×900px，图片名请设置为英文</div>
          <div class="homePicDiv"></div>

          <!-- 此处添加图片信息 -->
          <?php foreach($data as $item): ?>
            <div class="col-md-3 homePicDiv">
                <form action="" method="POST" id="<?php echo $item->id;?>" enctype="multipart/form-data">
                    <div class="fileupload fileupload-new" data-provides="fileupload" style="padding: 30px;">
                        <div class="input-group" style="width:200px;text-align:center;margin-bottom:10px">
                            <span class="input-group-addon">
                                链接
                            </span>
                            <input class="form-control url" type="text" placeholder="<?php echo $item->url;?>" value="<?php echo $item->url;?>" name="url">
                        </div>
                        <div class="fileupload-new img-thumbnail" style="width:200px;height:63.15px">
                            <img src='<?php echo base_url("static/img/slider")."/".$item->filename;?>'>
                        </div>
                        <div class="fileupload-preview fileupload-exists img-thumbnail" style="width:200px;max-height:150px">
                        </div>
                        <div>
                            <span class="btn btn-default delete" style="padding:6px 33px;margin-bottom:60px;width:200px">
                                <span>
                                    移除
                                </span>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
          <?php endforeach; ?>

      <a style="position: absolute; bottom: -70px" class="btn btn-lg btn-block btn-primary-outline" id="add">添加</a>
    </div>

  </div>
</div>

</div>

<!-- 添加 -->
<script type="text/javascript">
  homePicDiv_html='<div class="col-md-3 homePicDiv"><form action="" method="POST" id="" enctype="multipart/form-data"><div class="fileupload fileupload-new" data-provides="fileupload" style="padding: 30px;"><div class="input-group" style="width:200px;text-align:center;margin-bottom:10px"><span class="input-group-addon">链接</span> <input class="form-control url" type="text" value="" name="url"></div><div class="fileupload-new img-thumbnail" style="width:200px;height:63.15px"><img src="http://placehold.it/190x60/ddd/fff&amp;text=PAPIC%20image"></div><div class="fileupload-preview fileupload-exists img-thumbnail" style="width:200px;max-height:150px"></div><div ><span class="btn btn-default btn-file" style="padding:6px 33px;margin-bottom:7px;width:200px"><span>选择图片</span><input class="filePath" type="file" name="pic"></span></div><div class="text-center" style="width:200px;display:inline"><span class="btn btn-default confirm" style="padding:6px 33px;margin-bottom:60px">确定</span> <span class="btn btn-default delete" style="padding:6px 33px;margin-bottom:60px">移除</span></div></div></form></div>';

    function deleteThis( S )
    {
      var r=confirm("是否删除");
      if (r==true){
        var formData = new FormData();
        var deleteId = S.find("form").attr('id');

        if( !deleteId == '')  //判断是否已经上传
        {
          formData.append('id', deleteId);
          $.ajax({
              type: "POST",
              url: "<?php echo site_url('admin/picMethod/delete')?>",
              data: formData,
              cache: false,
              processData: false,  
              contentType: false,  
              success: function(data) {  //回调函数
                  S.remove();
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  alert("删除失败，请检查网络后重试");
              }
          });//ajax          
        }else{
          S.remove();
        }

      }
    }

  $("#add").click(function(){
    var homePicDiv = $(".homePicDiv:last");
    homePicDiv.after(homePicDiv_html);
    var thisPicDiv = homePicDiv.next();


    // 删除
    var deleteBox = thisPicDiv.find(".delete");
    deleteBox.bind("click",function(){
      thisPicDiv.remove();
    });

    // 确定添加
    thisPicDiv.find(".confirm").bind("click",function(){
      var imgPath = thisPicDiv.find(".filePath").val();
      if (imgPath == "") {
          alert("请选择上传图片！");
          return;
      }

      var formData = new FormData();
      var thisFile = thisPicDiv.find(".filePath");
      formData.append('pic', thisFile[0].files[0]);
      formData.append('url', thisPicDiv.find(".url").val());
      $.ajax({
          type: "POST",
          url: "<?php echo site_url('admin/picMethod/add')?>",
          data: formData,
          cache: false,
          processData: false,  
          contentType: false,  
          success: function(data) {  //回调函数
              thisPicDiv.find(".text-center").remove();
              thisPicDiv.find(".filePath").remove();
              thisPicDiv.find(".btn-file").html("<span>移除</span>");
              console.log(data);
              thisPicDiv.find("form").attr("id",data);
              thisPicDiv.find(".btn-file").bind("click",function(){
              deleteThis(thisPicDiv);
              });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
              alert("上传失败，请检查网络后重试");
          }
      });//ajax
    });//确定

  });

</script>
<!-- 删除 -->
<script type="text/javascript">
  $(".delete").click(function(){
    deleteThis( $(this).parents(".homePicDiv") );
  });
</script>
<!-- $(".delete").parents(".homePicDiv").remove(); -->
<!-- $(".homePicDiv:last").find(".delete").bind("click",function(){
  alert("delete");
  thisPicDiv = $(this).parents(".homePicDiv");
  thisPicDiv.remove();
}); -->