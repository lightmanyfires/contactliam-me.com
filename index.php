<?php
define('PAGE_TITLE', 'Sporple | Rugby | Profile');
define('PAGE_DESC', '');
define('PAGE_KEYWORDS', '');
?>
<!-- Include Header -->
<?php include "php/components/global/header.php"; ?>

<!-- Include Navbar -->
<?php include "php/components/global/navbar.php"; ?>

    
        <!-- End #sidebar -->
        <!-- Start #right-sidebar -->
        <aside id="right-sidebar" class="hide-sidebar">
            <!-- Start .sidebar-inner -->
            <div class="sidebar-inner">
                <!-- Start .sidebar-panel -->
                <div class="sidebar-panel mt0">
                    <!-- Start sidebar-panel-content -->
                    <div class="sidebar-panel-content fullwidth pt0">
                        >
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
                    <h2>Home</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>

                    <!-- Import Chat -->
                    <?php include "components/php/global/chat.php"; ?>

                </div>
                <!-- Start .content-inner -->
                <div class="content-inner">
                    <!-- Start .row -->
                    <div class="row">
                        <div class="col-lg-8 col-md-8 sortable-layout">
                            <!-- col-lg-8 start here -->
                            <div class="panel panel-default plain toggle panelMove panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Views statistics</h4>
                                </div>
                                <div class="panel-body">
                                    <div id="views-statistics" style="height: 250px; width:100%;"></div>
                                </div>
                                <div class="panel-footer white-bg text-center mt15">
                                    <div class="pie-charts">
                                        <div class="easy-pie-chart" data-percent="45">45%</div>
                                        <div class="label">New Visitors</div>
                                    </div>
                                    <div class="pie-charts red-pie">
                                        <div class="easy-pie-chart-red" data-percent="7">7%</div>
                                        <div class="label">Drop rate</div>
                                    </div>
                                    <div class="pie-charts green-pie">
                                        <div class="easy-pie-chart-green" data-percent="28">28%</div>
                                        <div class="label">Returning</div>
                                    </div>
                                    <div class="pie-charts blue-pie">
                                        <div class="easy-pie-chart-blue" data-percent="65">65%</div>
                                        <div class="label">From Google</div>
                                    </div>
                                    <div class="pie-charts teal-pie">
                                        <div class="easy-pie-chart-teal" data-percent="23">23%</div>
                                        <div class="label">Direct Hits</div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-8 end here -->
                        <div class="col-lg-4 col-md-4 sortable-layout">
                            <!-- col-lg-4 start here -->
                            <div class="shortcut-buttons">
                                <!-- Start .shortcut buttons -->
                                <a href="#" class="shortcut-btn">
                                    <span class="shortcut-icon">
                        <i class="im-file8"></i>
                    </span>
                                    <span class="shortcut-text">Add Page</span>
                                </a>
                                <a href="#" class="shortcut-btn">
                                    <span class="shortcut-icon">
                        <i class="im-upload6"></i>
                    </span>
                                    <span class="shortcut-text">Upload File</span>
                                </a>
                                <a href="#" class="shortcut-btn">
                                    <span class="shortcut-icon">
                        <i class="im-pencil5"></i>
                    </span>
                                    <span class="shortcut-text">Write article</span>
                                </a>
                                <a href="#" class="shortcut-btn">
                                    <span class="shortcut-icon">
                        <i class="im-database"></i>
                    </span>
                                    <span class="shortcut-text">Backups</span>
                                </a>
                                <a href="#" class="shortcut-btn">
                                    <span class="shortcut-icon">
                        <i class="im-bubbles"></i>
                    </span>
                                    <span class="shortcut-text">Comments</span>
                                    <span class="label label-info">3</span>
                                </a>
                                <a href="#" class="shortcut-btn">
                                    <span class="shortcut-icon">
                        <i class="im-user-plus2"></i>
                    </span>
                                    <span class="shortcut-text">Add User</span>
                                </a>
                            </div>
                            <!-- End .shortcut buttons -->
                            <div class="weather-widget panel panel-orange plain toggle panelMove panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">Weather now</h4>
                                </div>
                                <div class="panel-body text-center">
                                    <canvas id="weather-now" width="128" height="128"></canvas>
                                    <p class="weather-location"><strong>23&deg;C</strong> Madrid</p>
                                </div>
                                <div class="panel-footer teal-bg text-center">
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <!-- col-lg-3 start here -->
                                        <p class="weather-day">MON</p>
                                        <canvas id="forecast-now" width="64" height="64"></canvas>
                                        <p class="weather-degree">23&deg;C</p>
                                    </div>
                                    <!-- col-lg-3 end here -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <!-- col-lg-3 start here -->
                                        <p class="weather-day">TUE</p>
                                        <canvas id="forecast-day1" width="64" height="64"></canvas>
                                        <p class="weather-degree">17&deg;C</p>
                                    </div>
                                    <!-- col-lg-3 end here -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <!-- col-lg-3 start here -->
                                        <p class="weather-day">WED</p>
                                        <canvas id="forecast-day2" width="64" height="64"></canvas>
                                        <p class="weather-degree">15&deg;C</p>
                                    </div>
                                    <!-- col-lg-3 end here -->
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6">
                                        <!-- col-lg-3 start here -->
                                        <p class="weather-day">THU</p>
                                        <canvas id="forecast-day3" width="64" height="64"></canvas>
                                        <p class="weather-degree">18&deg;C</p>
                                    </div>
                                    <!-- col-lg-3 end here -->
                                </div>
                            </div>
                            <!-- End .panel -->
                            <div class="panel panel-orange  plain toggle panelMove panelClose panelRefresh">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="fa fa-th-list"></i> ToDo</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="todo-widget">
                                        <div class="todo-header">
                                            <div class="todo-search">
                                                <form>
                                                    <input type="text" class="form-control" name="search" placeholder="Search for todo ...">
                                                </form>
                                            </div>
                                            <div class="todo-add">
                                                <a href="#" class="btn btn-teal tip" title="Add new todo"><i class="im-plus"></i></a>
                                            </div>
                                        </div>
                                        <h4 class="todo-period">Today</h4>
                                        <ul class="todo-list" id="today">
                                            <li class="todo-task-item">
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                </label>
                                                <div class="todo-priority normal tip" title="Normal priority">
                                                    <i class="im-radio-checked"></i>
                                                </div>
                                                <span class="todo-category label label-primary"> javascript </span>
                                                <div class="todo-task-text">Add scroll function to template</div>
                                                <button type="button" class="close todo-close">&times;</button>
                                            </li>
                                            <li class="todo-task-item">
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                </label>
                                                <div class="todo-priority high tip" title="High priority">
                                                    <i class="im-radio-checked"></i>
                                                </div>
                                                <span class="todo-category label label-brown"> less </span>
                                                <div class="todo-task-text">Fix main less file</div>
                                                <button type="button" class="close todo-close">&times;</button>
                                            </li>
                                            <li class="todo-task-item task-done">
                                                <label class="checkbox">
                                                    <input type="checkbox" checked>
                                                </label>
                                                <div class="todo-priority high tip" title="High priority">
                                                    <i class="im-radio-checked"></i>
                                                </div>
                                                <span class="todo-category label label-info"> html </span>
                                                <div class="todo-task-text">Change navigation structure</div>
                                                <button type="button" class="close todo-close">&times;</button>
                                            </li>
                                        </ul>
                                        <h4 class="todo-period">Tomorrow</h4>
                                        <ul class="todo-list" id="tomorrow">
                                            <li class="todo-task-item">
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                </label>
                                                <div class="todo-priority tip" title="Low priority">
                                                    <i class="im-radio-checked"></i>
                                                </div>
                                                <span class="todo-category label label-dark"> css </span>
                                                <div class="todo-task-text">Create slide panel widget</div>
                                                <button type="button" class="close todo-close">&times;</button>
                                            </li>
                                            <li class="todo-task-item">
                                                <label class="checkbox">
                                                    <input type="checkbox">
                                                </label>
                                                <div class="todo-priority medium tip" title="Medium priority">
                                                    <i class="im-radio-checked"></i>
                                                </div>
                                                <span class="todo-category label label-danger"> php </span>
                                                <div class="todo-task-text">Edit the main controller</div>
                                                <button type="button" class="close todo-close">&times;</button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                            <div class="panel panel-orange panelMove">
                                <!-- Start .panel -->
                                <div class="panel-heading">
                                    <h4 class="panel-title"><i class="im-camera"></i> Instagram activity</h4>
                                    <div class="pull-right mt5">
                                        <a href="#" class="color-white">@SuggeElson</a> 
                                    </div>
                                </div>
                                <div class="panel-body p0">
                                    <div class="instagram-widget">
                                        <div class="instagram-widget-header gray-bg">
                                            <div class="col-lg-4 col-md-4 col-xs-4 text-center">
                                                <!-- col-lg-4 start here -->
                                                <a href="#">
                                                    <p class="instagram-widget-text">Followers</p>
                                                    <strong class="instagram-widget-number">1256</strong> 
                                                </a>
                                            </div>
                                            <!-- col-lg-4 end here -->
                                            <div class="col-lg-4 col-md-4 col-xs-4 text-center">
                                                <!-- col-lg-4 start here -->
                                                <a href="#">
                                                    <p class="instagram-widget-text">Following</p>
                                                    <strong class="instagram-widget-number">345</strong> 
                                                </a>
                                            </div>
                                            <!-- col-lg-4 end here -->
                                            <div class="col-lg-4 col-md-4 col-xs-4 text-center">
                                                <!-- col-lg-4 start here -->
                                                <a href="#">
                                                    <p class="instagram-widget-text">Shots</p>
                                                    <strong class="instagram-widget-number">176</strong> 
                                                </a>
                                            </div>
                                            <!-- col-lg-4 end here -->
                                        </div>
                                        <div class="instagram-widget-image">
                                            <div id="instagram-widget" class="carousel slide">
                                                <!-- Indicators -->
                                                <ol class="carousel-indicators dotstyle">
                                                    <li data-target="#instagram-widget" data-slide-to="0" class="active"><a href="#">Image 1</a>
                                                    </li>
                                                    <li data-target="#instagram-widget" data-slide-to="1"><a href="#">Image 2</a>
                                                    </li>
                                                    <li data-target="#instagram-widget" data-slide-to="2"><a href="#">Image 3</a>
                                                    </li>
                                                </ol>
                                                <div class="carousel-inner">
                                                    <figure class="item active">
                                                        <img class="img-responsive" src="assets/img/instagram/instagram.jpg" alt="image">
                                                    </figure>
                                                    <figure class="item">
                                                        <img class="img-responsive" src="assets/img/instagram/instagram2.jpg" alt="image">
                                                    </figure>
                                                    <figure class="item">
                                                        <img class="img-responsive" src="assets/img/instagram/instagram3.jpg" alt="image">
                                                    </figure>
                                                </div>
                                            </div>
                                            <!-- End Carousel -->
                                        </div>
                                        <div class="instagram-widget-footer">
                                            <div class="col-lg-6 col-md-6 col-xs-6 text-center">
                                                <!-- col-lg-6 start here -->
                                                <p>
                                                    <a href="#">
                                                        <i class="im-bubbles mr5"></i> 
                                                        <strong class="instagram-widget-number">17</strong>
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- col-lg-6 end here -->
                                            <div class="col-lg-6 col-md-6 col-xs-6 text-center">
                                                <!-- col-lg-6 start here -->
                                                <p>
                                                    <a href="#">
                                                        <i class="im-heart3 mr5"></i> 
                                                        <strong class="instagram-widget-number">27</strong> 
                                                    </a>
                                                </p>
                                            </div>
                                            <!-- col-lg-6 end here -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-4 end here -->
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