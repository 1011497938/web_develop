<div class="row">
    <div class="col-lg-12">
        <div class="widget-container fluid-height clearfix">
            <div class="heading">
                <i class="icon-table"></i>列表
            </div>
            <div class="widget-content padded clearfix">
                <table class="table table-bordered table-striped" id="dataTable1">
<?php
$con = mysqli_connect("localhost","root","ZJUQinChuang123");
mysql_select_db('data');
mysql_query ( "set names utf8" );
$sql="select * from hightable";
$result=mysql_query($sql);
echo '<thead><tr>
<th>id</th>
<th width="100px;">姓名</th>
<th width="150px;">学号</th>
<th width="100px;">年级</th>
<th width="170px;">专业</th>
<th width="170px;">联系方式</th>
<th>三大成就</th>
<th>交流的人和话题</th>
</tr></thead><tbody>';

while($row=mysql_fetch_array($result)){

echo '<tr><td>';
echo $row["id"];
echo '</td><td>';
echo $row["name"];
echo '</td><td>';
echo $row["student_id"];
echo '</td><td>';
echo $row["grade"];
echo '</td><td>';
echo $row["major"];
echo '</td><td>';
echo $row["phone"];
echo '</td><td>';
echo $row["q1"];
echo '</td><td>';
echo $row["q2"];
echo '</td></tr>';
}
echo '</tbody>';
?>
                	</table>
                </div>
          </div>
    </div>
</div>
