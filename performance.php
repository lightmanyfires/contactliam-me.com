<?php
define('PAGE_TITLE', 'Sporple | Rugby | Performance');
define('PAGE_DESC', '');
define('PAGE_KEYWORDS', '');
?>

<!-- Include Header -->
<?php include "php/components/global/header.php"; ?>

<!-- Include Navbar -->
<?php include "php/components/global/navbar.php"; ?>

        
      
        <!-- Start #right-sidebar -->
        <aside id="right-sidebar" class="hide-sidebar">
            <!-- Start .sidebar-inner -->
            <div class="sidebar-inner">
                <!-- Start .sidebar-panel -->
                <div class="sidebar-panel mt0">
                    <!-- Start sidebar-panel-content -->
                    <div class="sidebar-panel-content fullwidth pt0">
                    
                        <!-- Import Chat -->
                        <?php include "php/components/global/chat.php"; ?>
                        
                    </div>
                    <!-- End sidebar-panel-content -->
                </div>
                <!-- End .sidebar-panel -->
            </div>
        </aside>
        <!-- End .sidebar-inner -->
        </aside>
        <!-- Start #right-sidebar -->
        <!-- Start #content -->
        <div id="content">
            <!-- Start .content-wrapper -->
            <div class="content-wrapper">
                <div id="page-heading" class="page-header">
                    <h2>Performance</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
               
                <div class="row">
                    <div class=" data-sync col-lg-12 col-md-12 col-sm-12">
                         <div class"col-lg-6 col-md-6 col-sm-6">
                         <img src="assets/img/sync.png">
                         <button type="button" class="std-btn">Sync Now</button>

                        <div class="btn-group dropdown add-service-btn ">
                                        <button type="button" class="btn std-btn dropdown-toggle add-service-btn" data-toggle="dropdown">
                                            Add Service
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu right" role="menu">
                                            <li>
                                                <a href="#">Nike Fuel Band</a>
                                            </li>
                                            <li>
                                                <a href="#">Jawbone UP</a>
                                            </li>
                                            <li>
                                                <a href="#">Fit Bit</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li>
                                                <a href="#">CSV or XLS</a>
                                            </li>
                                        </ul>
                                    </div>
                         </div>       
                    </div>
                </div>

                 <!-- Start .content-inner -->
                    <div class="content-inner">
                    <!-- First Row -->
                        <div class="row">
                        <!-- Overview One -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="panel panel-default plain">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>Overview One</h4>
                                    </div>
                                    <div class="panel-body"> 
                                    </div>
                                    <div class="panel-footer white-bg text-center mt15">
                                        <div class="pie-charts">
                                            <div class="easy-pie-chart" data-percent="82">82%</div>
                                            <div class="label">Training <br>Sessons</div>
                                        </div>
                                        <div class="pie-charts red-pie">
                                            <div class="easy-pie-chart-red" data-percent="95">95%</div>
                                            <div class="label">Games <br>Played</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Overview Two -->
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>Overview Two</h4>
                                    </div>
                                    <div class="panel-body">
                                        
                                    </div>
                                    <div class="panel-footer white-bg text-center mt15">
                                        <div class="pie-charts">
                                            <div class="easy-pie-chart" data-percent="76">76%</div>
                                            <div class="label">Bench Press<br>Goal</div>
                                        </div>
                                        <div class="pie-charts red-pie">
                                            <div class="easy-pie-chart-red" data-percent="62">62%</div>
                                            <div class="label">40m Sprint <br>Goal</div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Second Row -->
                        <div class="row">
                            <!-- Bench Press -->
                            <div class="col-lg-6 col-md-6">
                                <div class="panel panel-default plain">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>BENCH PRESS</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-chart-dots" style="height: 250px; width:100%;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Box Jump -->
                            <div class="col-lg-6 col-md-6">
                                <div class="panel panel-default plain">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>BOX JUMP</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Third Row -->
                        <div class="row">
                            <!-- DEAD LIFT -->
                            <div class="col-lg-6 col-md-6">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>DEAD LIFT</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-chart-unfilled" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                             <!-- BREAKDOWN -->
                             <div class="col-lg-6 col-md-6">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>BREAKDOWN</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="pie-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                        <!-- Fourth Row -->
                        <div class="row">
                        <!-- REP MAX SQUAT -->
                            <div class="col-lg-6 col-md-6">
                                <div class="panel panel-default plain">
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>1 REP MAX SQUAT</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="bars-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- MONTHLY ACTIVITY -->
                            <div class="col-lg-6 col-md-6">
                                <div class="panel panel-default plain">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>MONTHLY ACTIVITY</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="ordered-bars-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- End .content-wrapper -->
            <div class="clearfix"></div>
        </div>
        <!-- End #content -->
        
        <!-- Javascripts -->
        <?php include "php/components/global/scripts.php"; ?>
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="assets/js/jquery.appStart.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/blank.js"></script>
        <!-- Additonal Scripts -->
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.custom.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.pie.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.resize.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.time.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.growraf.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.categories.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.stack.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.orderBars.js"></script>
        <script src="assets/plugins/charts/flot/jquery.flot.tooltip.min.js"></script>
        <script src="assets/plugins/charts/flot/date.js"></script>
        <script src="assets/plugins/charts/sparklines/jquery.sparkline.js"></script>
        <script src="assets/plugins/charts/pie-chart/jquery.easy-pie-chart.js"></script>
        <script src="assets/js/jquery.appStart.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/charts.js"></script>

    </body>
</html>