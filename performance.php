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

                        <div class="chat-box">
                            <h5>
                                <span class="device"><i class="im-screen4"></i></span>
                                <span class="status online"><i class="im-circle-small"></i></span> Chad Engle
                            </h5>
                            <a id="close-user-chat" class="close" aria-hidden="true">&times;</a>
                            <ul class="chat-messages">
                                <li>
                                    <div class="avatar">
                                        <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Anthony Morley <span class="chat-time">15 sec ago</span>
                                        </p>
                                        <p class="chat-txt">Hi Jack, are you still looking for a club in the UK?</p>
                                    </div>
                                </li>
                                <li class="chat-me">
                                    <div class="avatar">
                                        <img src="assets/img/avatars/1.jpg" alt="@jonhdoe">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Jack Reid <span class="chat-time">10 sec ago</span>
                                        </p>
                                        <p class="chat-txt">Ok i will check it out.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Chad Engle <span class="chat-time">now</span>
                                        </p>
                                        <p class="chat-txt">Okay, thank you very much.</p>
                                    </div>
                                </li>
                            </ul>
                            <div class="chat-write">
                                <form action="#" class="form-horizontal" role="form">
                                    <div class="form-group">
                                        <textarea name="sendmsg" id="sendMsg" class="form-control elastic" rows="1"></textarea>
                                        <a role="button" class="btn" id="attach_photo_btn">
                                            <i class="im-image2 s20"></i> 
                                        </a>
                                        <input type="file" name="attach_photo" id="attach_photo" class="unstyled">
                                    </div>
                                    <!-- End .form-group  -->
                                </form>
                            </div>
                        </div>
                        <!-- End chat-box -->
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
                    <!-- Start .row -->
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 sortable-layout">
                                <div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
                                            <!-- Start .panel -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Overview One</h4>
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
                                <div class="col-lg-6 col-md-6 col-sm-6 sortable-layout">
                                <div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
                                            <!-- Start .panel -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">Overview</h4>
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
                            <div class="col-lg-6 col-md-6 sortable-layout">
                                <!-- col-lg-6 start here -->
                                <div class="panel panel-default plain toggle panelMove panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">BENCH PRESS</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-chart-dots" style="height: 250px; width:100%;"></div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-6 end here -->
                            <div class="col-lg-6 col-md-6 sortable-layout">
                                <!-- col-lg-6 start here -->
                                <div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">BOX JUMP</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-6 end here -->
                        </div>
                        <!-- End .row -->
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-6 col-md-6 sortable-layout">
                                <!-- col-lg-6 start here -->
                                <div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title">DEAD LIFT</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="line-chart-unfilled" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- col-lg-6 end here -->
                             <div class="col-lg-6 col-md-6 sortable-layout">
                                <!-- Start col-lg-6 -->
                                <div class="panel panel-success plain toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i> BREAKDOWN</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="pie-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                                
                                <!-- End .panel -->
                            </div>      
                        </div>
                        <!-- End .row -->
                        <div class="row">
                            <!-- Start .row -->
                            <div class="col-lg-6 col-md-12 sortable-layout">
                                <!-- Start col-lg-6 -->
                                <div class="panel panel-success plain toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>1 REP MAX SQUAT</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="bars-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- End col-lg-6 -->
                            <div class="col-lg-6 col-md-12 sortable-layout">
                                <!-- Start col-lg-6 -->
                                <div class="panel panel-success plain toggle panelMove panelClose panelRefresh">
                                    <!-- Start .panel -->
                                    <div class="panel-heading">
                                        <h4 class="panel-title"><i class="im-bars"></i>MONTHLY ACTIVITY</h4>
                                    </div>
                                    <div class="panel-body">
                                        <div id="ordered-bars-chart" style="width: 100%; height:250px;"></div>
                                    </div>
                                </div>
                                <!-- End .panel -->
                            </div>
                            <!-- End col-lg-6 -->
                        </div>
                        <!-- End col-lg-6 -->
                    </div>
                    <!-- End .row -->
                </div>
                <!-- End .content-inner -->
            </div>
            <!-- End .content-wrapper -->
            <div class="clearfix"></div>
        </div>
        <!-- End #content -->
        
        <!-- Javascripts -->
        <?php include "php/components/global/scripts.php"; ?>

    </body>
</html>