<?php
define('PAGE_TITLE', 'Sporple | Rugby | Calendar');
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
                    <h2>Calendar</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
                <!-- Start .content-inner -->
                <div class="content-inner">
                    <!-- Start .row -->
                    <div class="row">
                        <div class="col-lg-8 col-md-8">
                            <!-- col-lg-8 start here -->
                            <div class="panel panel-default plain">
                                <!-- Start .panel -->
                                <div class="panel-body p0">
                                    <div id="calendar">
                                    </div>
                                </div>
                            </div>
                            <!-- End .panel -->
                        </div>
                        <!-- col-lg-8 end here -->
                        <div class="col-lg-4 col-md-4">
                            <!-- col-lg-4 start here -->
                            <div class="page-header">
                                <h4><i class="icon im-calendar"></i> Add New Calendar
                                </h4>
                            </div>
                            <div class="add-calendar">
                                    <ul>
                                        <li><i class="im-google"></i><a href="#">Google Calendar</a></li>
                                        <li><i class="im-yahoo"></i><a href="#">Yahoo Calendar</a></li>
                                        <li><i class="im-apple"></i><a href="#">Apple Calendar</a></li>
                                        <li><i class="im-cloud-upload"></i><a href="#">Import Calendar</a></li>


                                </div>
                            
                        </div>
                        <div class="col-lg-4 col-md-4 hidden-xs">
                            <!-- col-lg-4 start here -->
                            <div class="page-header">
                                <h4><i class="icon im-calendar"></i> Events
                                    <small>drop events to calendar</small>
                                </h4>
                            </div>
                            <div id="external-events">
                                <div class="external-event">Training</div>
                                <div class="external-event">Game</div>
                                <div class="external-event">University</div>
                                <div class="external-event">Gym Session</div>
                                <div class="external-event">Go for a run</div>
                            </div>
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
        <!-- Other plugins ( load only nessesary plugins for every page) -->
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="assets/plugins/ui/calendar/fullcalendar.js"></script>
        <script src="assets/js/jquery.appStart.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/calendar.js"></script>
    </body>
</html>