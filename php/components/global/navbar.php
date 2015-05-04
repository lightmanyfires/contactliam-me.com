<div id="header">
            <div class="container-fluid">
                <div class="navbar">
                    <div class="navbar-header">
                        <!-- Show navigation toggle on phones -->
                        <button id="showNav" class="navbar-toggle" type="button">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Show logo for large screens and laptops -->
                        <a class="navbar-brand visible-lg visible-md" href="index.php">
                            <img src="assets/img/logo.png" alt="Jump start">
                        </a>
                        <!-- Show logo for small screens -->
                        <a class="navbar-brand hidden-lg hidden-md hidden-sm hidden-xs  small-logo" href="index.html">
                            <img src="assets/img/logo-sm.png" style="width:45px; height:45px; padding:0px 5px 5px 0px;"alt="Jump start">
                        </a>
                    </div>
                    <nav id="top-nav" class="navbar-no-collapse" role="navigation">
                        <!-- navbar search form -->
                        <form class="navbar-form navbar-left hidden-sm hidden-xs" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control input-sm" placeholder="Search for something ...">
                                <i class="im-search3"></i>
                            </div>
                            <button type="submit" class="btn">submit</button>
                        </form>
                        <!-- Navbar nav -->
                        <ul class="nav navbar-nav pull-right">
                        <li class="hidden-lg hidden-md">
                                <!-- close button for search form in small screens -->
                                <button type="button" class="close closeSearchForm" aria-hidden="true">&times;</button>
                                <!-- show search button in small screens -->
                                <a class="resSearchBtn hidden-lg hidden-md hidden-sm hidden-xs" href="#"><i class="im-search3"></i></a>
                        </li>

                            <!-- Include notifications -->
                            <?php include "notifications.php"; ?>

                            <!-- Include navbar-messages -->
                            <?php include "navbar-messages.php"; ?>

                            <!-- Include profile-drop-down -->

                            <?php include "profile-drop-down.php"; ?>
                            
                            <li class="hidden-sm hidden-xs">
                                <a id="toggle-right-sidebar" href="#">
                                    <i class="im-bubbles2"></i>
                                    <i class="nav-notification im-circle2"></i>
                                    <span class="sr-only">Chat</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    <!-- Start #sidebar -->
        <aside id="sidebar">
            <!-- Start .sidebar-inner -->
            <div class="sidebar-inner">
                <!-- Start .toggle-sidebar -->
                <div class="toggle-sidebar">
                    <a href="#"><i class="im-arrow7"></i></a>
                </div>
                <!-- End .toggle-sidebar -->
                <!-- Start .sidebar-scrollarea -->
                <div class="sidebar-scrollarea">
                    <h5 class="sidebar-title">Navigation</h5>
                    <ul id="sideNav" class="nav nav-pills nav-stacked">
                        <li><a href="index.php"><i class="im-home6"></i> <span class="txt">Home</span></a>
                        </li>
                        <li><a href="performance.php"><i class="im-pie2"></i> <span class="txt">Performance</span><span class="label">10</span></a>
                        <!-- </li>
                        <li><a href="goal-board.php"><i class="im-stats-up"></i> <span class="txt">Goals</span></a>
                        </li> -->
                        <li>
                        <li><a href="connections.php"><i class="im-users"></i> <span class="txt">Connections</span><span class="label">23</span></a>
                        </li>
                        <li>
                        <li><a href="messages.php"><i class="im-bubbles4"></i> <span class="txt">Messages</span><span class="label">14</span></a>
                        </li>
                        </li>
                        <li><a href="calendar.php"><i class="im-calendar"></i> <span class="txt">Calendar</span></a>
                        </li>
                        <li><a href="comparison.php"><i class="im-list2"></i> <span class="txt">Comparison</span></a>
                        </li>
                        <li><a href="file.php"><i class="im-upload5"></i> <span class="txt">File manager</span></a>
                        </li>
                        <li><a href="settings.php"><i class="im-cog2"></i> <span class="txt">Settings</span></a>
                        </li>                   
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- End .sidebar-scrollarea -->
            </div>
            <!-- End .sidebar-inner -->
        </aside>