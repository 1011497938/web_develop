<div class="row">
    <div class="col-lg-12">
        <form enctype="multipart/form-data" action="<?php echo site_url("admin/submit")."/".$this->uri->segment(2) ?>" method="post">
            <div class="widget-container fluid-height">
                <div class="heading" style="height:420px">
                    <div class="form-group col-md-12">
                        <label>借用原因</label><input name="reason" class="form-control" id="name" type="text">
                    </div>
                    <div class="form-group col-md-12">
                      <label>借用时间</label><input name="time" class="form-control" id="name" type="text">
                  </div>
                    <div style="padding:15px 25px">
                    <button class="btn btn-lg btn-block btn-primary-outline"   type="submit">提交</button>
                    </div>
                </form>
              </div>
          </div>
    </div>
</div>