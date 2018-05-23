
    <div class="container-fluid main-content">
        <!-- Statistics -->
        <div class="row">
            <div class="col-lg-12">
                <div class="widget-container stats-container">
                    <div class="col-md-3">
                        <div class="number">
                            <div class="icon globe"></div>
                            <?php echo $this->benchmark->memory_usage();?>
                        </div>
                        <div class="text">
                            内存占用
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="number">
                            <div class="icon visitors"></div>
                            <?php
                                $this->load->database();
                                $res=$this->db->query("select * from surf");
                                foreach($res->result() as $item){
                                    echo $item->today;
                                }
                            ?>
                        </div>
                        <div class="text">
                            今日访问量
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="number">
                            <div class="icon visitors"></div>
                            <?php echo $totalView ?>
                        </div>
                        <div class="text">
                            本月访问量
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="number">
                            <div class="icon chat-bubbles"></div>
                            0
                        </div>
                        <div class="text">
                            非法访问
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Statistics -->
        <div class="row">
            <!-- Line Chart -->
            <div class="col-md-6">
                <div class="widget-container">
                    <div class="heading">
                        <i class="icon-bar-chart"></i>近10日访问量
                    </div>
                    <div class="widget-content padded text-center">
                        <div class="chart-graph">
                            <div id="barchart-2">
                                Loading...
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="widget-container">
                    <div class="heading">
                        <i class="icon-bar-chart"></i>近一年访问量
                    </div>
                    <div class="widget-content padded">
                        <div class="chart-graph line-chart">
                            <div id="linechart-2">
                                Loading...
                            </div>
                            <ul class="chart-text-axis">
                                <li>
                                    1
                                </li>
                                <li>
                                    2
                                </li>
                                <li>
                                    3
                                </li>
                                <li>
                                    4
                                </li>
                                <li>
                                    5
                                </li>
                                <li>
                                    6
                                </li>
                                <li>
                                    7
                                </li>
                                <li>
                                    8
                                </li>
                                <li>
                                    9
                                </li>
                                <li>
                                    10
                                </li>
                                <li>
                                    11
                                </li>
                                <li>
                                    12
                                </li>
                            </ul>
                            <!-- end Line Chart -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Line Chart -->
            <!-- end Line Chart -->
        </div>

        <div class="row">
            <!-- Area Charts:Morris -->
            <div class="col-md-6">
                <div class="widget-container fluid-height">
                    <div class="heading">
                        <i class="icon-bar-chart"></i>访问终端
                    </div>
                    <div class="widget-content padded text-center">
                        <div class="graph-container">
                            <div class="caption"></div>
                            <div class="graph" id="hero-area"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Area Charts:Morris --><!-- Donut Charts:Morris -->
            <div class="col-md-6">
                <div class="widget-container fluid-height">
                    <div class="heading">
                        <i class="icon-bar-chart"></i>比例
                    </div>
                    <div class="widget-content padded text-center">
                        <div class="graph-container">
                            <div class="caption"></div>
                            <div class="graph" id="hero-donut"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Donut Charts:Morris -->
        </div>
    </div>
</div>
</body>

</html>