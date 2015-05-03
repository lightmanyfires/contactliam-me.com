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
                        <!-- Start chat-user-list -->
                        <div class="chat-user-list">
                            <form class="form-horizontal chat-search" role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control input-sm" placeholder="Search for user...">
                                    <button type="submit"><i class="im-search3 s16"></i>
                                    </button>
                                </div>
                                <!-- End .form-group  -->
                            </form>
                            <ul class="chat-ui bsAccordion">
                                <li>
                                    <a href="#" class="chat-ui-heading">Favorites <span class="users-count">(3)</span></a>
                                    <ul class="in">
                                        <li>
                                            <a href="#" class="chat-name">
                                                <span class="chat-notification">8</span>
                                                <img class="chat-avatar" src="assets/img/avatars/2.jpg" alt="@chadengle">Damien Breesons
                                                <span class="status online"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-mobile2"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <span class="chat-notification">2</span>
                                                <img class="chat-avatar" src="assets/img/avatars/3.jpg" alt="@jason">Mat Koubardaris
                                                <span class="status busy"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-tablet"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/11.jpg" alt="@jenny">Anthongy Morley
                                                <span class="status offline"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-screen4"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="chat-ui-heading">Online <span class="users-count">(4)</span></a>
                                    <ul class="in">
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/3.jpg" alt="@chadengle">Mat Koubardaris
                                                <span class="status online"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-mobile2"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/5.jpg" alt="@tod">Randwick RFC
                                                <span class="status online"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-mobile2"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/6.jpg" alt="@danny">Southern Districts RFC
                                                <span class="status online"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-screen4"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/7.jpg" alt="@steve">Liam Holmes
                                                <span class="status online"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-tablet"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="chat-ui-heading">Offline <span class="users-count">(3)</span></a>
                                    <ul class="in">
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/8.jpg" alt="@jenna">Kisset
                                                <span class="status offline"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-screen4"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/9.jpg" alt="@selena">Sheffield Tigers
                                                <span class="status offline"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-mobile2"></i></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#" class="chat-name">
                                                <img class="chat-avatar" src="assets/img/avatars/10.jpg" alt="@mickey">James Pritchard
                                                <span class="status offline"><i class="im-circle-small"></i></span>
                                                <span class="device"><i class="im-mobile2"></i></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <!-- End chat-user-list -->
                        <!-- Start chat-box -->
                        <div class="chat-box">
                            <h5>
                                <span class="device"><i class="im-screen4"></i></span>
                                <span class="status online"><i class="im-circle-small"></i></span> Mat Koubardaris
                            </h5>
                            <a id="close-user-chat" class="close" aria-hidden="true">&times;</a>
                            <ul class="chat-messages">
                                <li>
                                    <div class="avatar">
                                        <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Mat Koubardaris <span class="chat-time">15 sec ago</span>
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
                                        <p class="chat-txt">Yeah mate, still looiking for the right club</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="avatar">
                                        <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                                    </div>
                                    <div class="message">
                                        <p class="chat-name">Chad Engle <span class="chat-time">now</span>
                                        </p>
                                        <p class="chat-txt">Great, let me give you a call later today.</p>
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
    </body>
</html>