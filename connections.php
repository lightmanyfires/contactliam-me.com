<?php
define('PAGE_TITLE', 'Connections');
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
                        <!-- Start chat-user-list -->

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
                    <h2>Connections</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
                <!-- Start .content-inner -->
                <div class="content-inner">
                    <!-- Start .row -->
                    <div class="row">
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
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="assets/js/jquery.appStart.js"></script>
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/blank.js"></script>
    </body>
</html>