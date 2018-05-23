<?php
$this->load->database();
$m_data=$this->db->query('select * from material'); 
$b_data=$this->db->query('select * from borrow'); 
?>
<div class="row">



    <div class="col-md-12">
        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <i class="icon-table"></i>物资信息
            </div>
            <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                    <thead>
                    <th>序号</th><th>物资名称</th><th>数量</th><th>地点</th><th>备注</th>
                    </thead>
                    <tbody>
            <?php foreach($m_data->result() as $item):?>
                    <tr>
                        <td><?php echo $item->id;?></td>
                        <td><?php echo $item->name;?></td>
                        <td><?php echo $item->num;?></td>
                        <td><?php echo $item->address?></td>
                        <td><?php echo $item->ps?></td>
                    </tr>
            <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 



    <div class="col-md-12">
        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <i class="icon-table"></i>借用信息
            </div>
            <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                    <thead>
                     <th>序号</th><th>部门</th><th>时间</th><th>原因</th><th>物资</th><th>备注</th>
                    </thead>
                    <tbody>
                    <?php foreach($b_data->result() as $item):?>
                    <tr>
                        <td><?php echo $item->id;?></td>
                        <td><?php echo $item->department;?></td>
                        <td><?php echo $item->time?></td>
                        <td><?php echo $item->reason?></td>
                        <td><?php echo $item->material?></td>
                        <td><?php echo $item->ps?></td>
                    </tr>
            <?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div> 



  <div class="col-md-12">
    <div class="widget-container">
      <div class="heading">
        <i class="icon-shield"></i>添加物资
      </div>
      <div class="widget-content padded">
        <form action="<?php echo site_url("admin/material/manage/add") ?>" method="post">
             <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="firstname">物资名称</label><input class="form-control" name="name" type="text">
                </div>
                <div class="form-group">
                  <label for="firstname">储存地点</label><input class="form-control" name="address" type="text">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <label for="num">物资个数</label><input class="form-control" name="num" type="text">
                </div>
                <div class="form-group">
                  <label for="firstname">备注</label><input class="form-control" name="ps" type="text">
                </div>
              </div>
            </div>
            <div class="col-md-6 col-md-offset-3">
               <button class="btn btn-md btn-block btn-primary-outline" type="submit">添加</button>
            </div>

        </form>
      </div>
    </div>
  </div>
</div>

    
</div>
<!-- end DataTables Example -->
</div>
</div>
                    <script type="text/javascript">
                        $(function(){
                            $(".label.label-success").click(function(){
                                var id=$(this).parents("tr").children("td:eq(0)").html();
                                $.post("<?php echo current_url()."/giveup";?>",{id:id});
                                $(this).removeClass("label-success");
                                $(this).addClass("label-danger");
                                $(this).html("失效");
                            });
                        $(".label.label-danger").click(function(){
                            var id=$(this).parents("tr").children("td:eq(0)").html();
                            $.post("<?php echo current_url()."/recover";?>",{id:id});
                            $(this).removeClass("label-danger");
                            $(this).addClass("label-success");
                            $(this).html("有效");
                            });
                        });
                    </script>
</body>

</html>