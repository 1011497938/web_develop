<div class="row">
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <i class="icon-table"></i>列表
            </div>
            <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
                    <thead>
                    <th>
                        id
                    </th>
                    <th><?php
                        if($this->uri->segment(2)=="parttime"){
                            echo "兼职编号";
                        }
                        else{
                            echo "标题";
                        }
                        ?>
                    </th>
                    <th>
                        <?php
                        if($this->uri->segment(2)=="parttime"){
                            echo "兼职类型";
                        }
                        else{
                            echo "摘要";
                        }
                        ?>
                    </th>
                    <th class="hidden-xs" style="min-width:80px;">
                        <?php
                        if($this->uri->segment(2)=="parttime"){
                            echo "标题";
                        }
                        else{
                            echo "发布者";
                        }
                        ?>
                    </th>
                    <?php
                        if ($this->uri->segment(2)=="parttime") {
                            echo '<th class="hidden-xs" width="80px">浏览量</th>';
                            echo '<th class="hidden-xs" width="80px">报名量</th>';
                        }
                    ?>
                    <th class="hidden-xs" width="120px">
                        发布日期
                    </th>
                    <th class="hidden-xs" width="35px">
                        状态
                    </th>
                    <th></th>
                    </thead>
                    <tbody>
                    <?php foreach($data as $item):?>
                    <tr>
                        <td><?php echo $item->id;?></td>
                        <td>
                            <?php
                            if($this->uri->segment(2)=="parttime"){
                                echo mb_substr($item->summary,0,10);                            }
                            else{
                                echo $item->title;
                            }
                            ?>
                        </td>
                        <td>
                            <?php
                            if($this->uri->segment(2)=="parttime"){
                                echo $item->type;                            }
                            else{
                                echo $item->summary;
                            }?>
                        </td>
                        <td class="hidden-xs">
                            <?php
                            if($this->uri->segment(2)=="parttime"){
                                echo $item->title;                            }
                            else{
                                echo $item->type;
                            }?>
                        </td>
                        <?php
                        if ($this->uri->segment(2)=="parttime") {
                            echo '<td class="hidden-xs" width="80px">'.$item->visits.'</td>';
                            echo '<td class="hidden-xs" width="80px">'.$item->registerNum.'</td>';
                        }
                        ?>
                        <td class="hidden-xs">
                            <?php echo $item->year . "-" . $item->month . "-" . $item->day; ?>
                        </td>
                        <td class="hidden-xs">
                            <span class="label label-<?php
                            if($item->condition==1){
                                echo "success";
                            }
                            else{
                                echo "danger";
                            }
                            ?>"><?php
                                if($item->condition==1){
                                    echo "有效";
                                }
                                else{
                                    echo "无效";
                                }
                                ?>
                                </span>
                        </td>
                        <td class="actions">
                            <div class="action-buttons">
                                <a class="table-actions" href="
                                <?php 
                                    if ( $this->uri->segment(2)=='parttime') 
                                       $thiskind = 'parttime';
                                    else
                                       $thiskind = 'article';
                                    echo site_url($thiskind)."/"."contains"."/".$item->id;
                                ?>" target="_blank"><i class="icon-eye-open"></i></a>
                                <a href="<?php echo site_url("admin")."/".$this->uri->segment(2)."/"."modify"."/"."?id=".$item->id;?>"
                                target="_blank"><i class="glyphicon glyphicon-cog"></i></a>
                            </div>
                        </td>
                    </tr>
<?php endforeach;?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- end DataTables Example -->
</div>
</div>
                    <script type="text/javascript">
                        $(function change(){
                            $(".label.label-success").click(
                                function(){
                                    var id=$(this).parents("tr").children("td:eq(0)").html();
                                    var classname=$(this).attr('class');
                                    if(classname=='label label-success'){
                                        alert("成功！修改为无效");
                                        $.post("<?php echo current_url()."/giveup";?>",{id:id});
                                        $(this).removeClass("label-success");
                                        $(this).addClass("label-danger");
                                        $(this).html("无效");
                                    }else{
                                        alert("成功！修改为有效");
                                        $.post("<?php echo current_url()."/recover";?>",{id:id});
                                        $(this).removeClass("label-danger");
                                        $(this).addClass("label-success");
                                        $(this).html("有效");
                                    }
                                    //$.post("<?php echo current_url()."/giveup";?>",{id:id});
                                    //$(this).removeClass("label-success");
                                    //$(this).addClass("label-danger");
                                    //$(this).html("无效");
                                }
                            );
                            $(".label.label-danger").click(
                                function(){
                                    var id=$(this).parents("tr").children("td:eq(0)").html();
                                    var classname=$(this).attr('class');
                                    if(classname=='label label-success'){
                                        alert("成功！修改为无效");
                                        $.post("<?php echo current_url()."/giveup";?>",{id:id});
                                        $(this).removeClass("label-success");
                                        $(this).addClass("label-danger");
                                        $(this).html("无效");
                                    } else{
                                        alert("成功！修改为有效");
                                        $.post("<?php echo current_url()."/recover";?>",{id:id});
                                        $(this).removeClass("label-danger");
                                        $(this).addClass("label-success");
                                        $(this).html("有效");
                                    }
                                    //$.post("<?php echo current_url()."/recover";?>",{id:id});
                                    //$(this).removeClass("label-danger");
                                    //$(this).addClass("label-success");
                                    //$(this).html("有效");
                                }
                            );
                        });
                    </script>
</body>

</html>