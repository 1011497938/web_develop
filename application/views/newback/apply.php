<?php
$this->load->database();
$data1=$this->db->query("select NO,count(*) ROWS from register group by NO order by count(*) DESC");
$data1=$data1->result();
$all = mysql_query("SELECT * FROM register");
?>
<div class="row">
          <!-- FAQ Nav -->
          <div class="col-sm-3">
            <div class="list-group">
                <span class="list-group-item active">
                    <p>
                        <span class="badge"></span>兼职编号
                    </p>
                </span>
                <a class="list-group-item" href="<?php echo site_url()?>admin/parttime/apply/">
                <p>
                  <span class="badge"><?php echo $row1 = mysql_num_rows($all);?></span>ALL
                </p>
                </a>
                <?php foreach($data1 as $item):?>
                <a class="list-group-item" href="<?php echo site_url()?>admin/parttime/apply/<?php echo $item->NO?>">
                <p>
                  <span class="badge"><?php echo $item->ROWS;?></span><?php echo $item->NO;?>
                </p>
                </a>
                <?php endforeach;?>
            </div>
          </div>
          <div class="col-sm-9">
            <div class="widget-container fluid-height">
              <div class="widget-content">
                <div class="panel-group" id="accordion">
                    <?php $i=1;?>
                    <?php foreach($data as $item):?>
                    <div class="panel">
                    <div class="panel-heading">
                      <div class="panel-title">
                        <a class="accordion-toggle" data-parent="#accordion" data-toggle="collapse" href="#faq<?php echo $i;?>">
                          <div class="caret pull-right"></div>
                        <?php echo $item->name." | ".$item->sex." | ".$item->section." | ".$item->grade." | ".$item->major." | ".$item->phone." | ".$item->condition." | ";?>
                        </a>
                      </div>
                    </div>
                    <div class="panel-collapse collapse in" id="faq<?php echo $i;?>">
                      <div class="panel-body">

                      <?php echo $item->intro;?>
                      </div>
                    </div>
                  </div>
                    <?php $i++;?>
                    <?php endforeach;?>
                </div>
              </div>
            </div>
          </div>
        </div>
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