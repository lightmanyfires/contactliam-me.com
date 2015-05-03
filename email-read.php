<?php
define('PAGE_TITLE', 'Sporple | Rugby | Messages');
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
                    <h2><i class="icon im-box"></i> Read email</h2>
                    <!-- Start .bredcrumb -->
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                    <!-- End .breadcrumb -->
                </div>
                <!-- Start .content-inner -->
                <div class="content-inner">
                    <div id="email-sidebar">
                        <!-- Start #email-sidebar -->
                        <div class="p15">
                            <a id="write-email" href="email-write.html" class="btn btn-danger btn-block uppercase">compose</a>
                        </div>
                        <ul id="email-nav" class="nav nav-pills nav-stacked">
                            <li><a href="email-inbox.html"><i class="fa fa-archive"></i> Inbox <span class="label label-teal">27</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-star"></i> Starred <span class="label label-warning">2</span></a>
                            </li>
                            <li><a href="#"><i class="im-info"></i> Important <span class="label label-danger">5</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-location-arrow"></i> Send <span class="label label-success">14</span></a>
                            </li>
                            <li><a href="#"><i class="im-pencil5"></i> Drafts <span class="label label-brown">1</span></a>
                            </li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Trash <span class="label label-dark">3</span></a>
                            </li>
                            <li class="nav-header">Labels</li>
                            <li><a href="#"><span class="circle"></span> Work</a>
                            </li>
                            <li><a href="#"><span class="circle color-red"></span> Private</a>
                            </li>
                            <li><a href="#"><span class="circle color-green"></span> Travel</a>
                            </li>
                            <li><a href="#"><span class="circle color-pink"></span> Promotions</a>
                            </li>
                            <li><a href="#"><span class="circle color-teal"></span> Updates</a>
                            </li>
                        </ul>
                    </div>
                    <!--End #email-sidebar -->
                    <div id="email-content">
                        <!-- Start #email-content -->
                        <div class="email-wrapper">
                            <div class="email-toolbar col-lg-12">
                                <div class="pull-left" role="toolbar">
                                    <button id="email-toggle" class="email-toggle" type="button">
                                        <span class="sr-only">Toggle email nav</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <a href="#" class="btn btn-default btn-round btn-sm tip mr5" title="Refresh inbox"><i class="fa fa-refresh s16"></i></a>
                                    <a href="#" class="btn btn-default btn-round btn-sm tip mr5" title="Reply"><i class="im-undo2 s16"></i></a>
                                    <a href="#" class="btn btn-default btn-round btn-sm tip mr5" title="Forward"><i class="im-redo2 s16"></i></a>
                                    <a href="#" class="btn btn-danger btn-round btn-sm tip mr5" title="Delete"><i class="fa fa-trash-o s16"></i></a>
                                    <a href="#" class="btn btn-default btn-round btn-sm tip mr5" title="Print"><i class="im-print3 s16"></i></a>
                                </div>
                                <ul class="email-pager">
                                    <li class="pager-info">1-20 of 345</li>
                                    <li><a href="#" class="btn btn-default btn-round btn-sm"><i class="fa fa-angle-left s16"></i></a>
                                    </li>
                                    <li><a href="#" class="btn btn-default btn-round btn-sm"><i class="fa fa-angle-right s16"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="email-read">
                                <!-- Start .email-read -->
                                <div class="email-header">
                                    <h3>Daily_Report1 - Daily Report Apr 27, 2014</h3>
                                </div>
                                <div class="email-info-bar">
                                    <div class="row">
                                        <div class="from col-lg-8">
                                            Monitor.Us / <a href="#"><strong>no-reply@monitor.us</strong></a> to <a href="#"><strong>me</strong></a>
                                        </div>
                                        <div class="date col-lg-4 text-right">
                                            <span class="email-date">Apr 27 ( 2 days ago )</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="email-content">
                                    <!-- Start .email-content -->
                                    <!-- This is just example email text  -->
                                    <h4 class="text-center">Uptime monitors</h4>
                                    <table width="100%" cellspacing="0" border="0">
                                        <tbody>
                                            <tr>
                                                <td colspan="7" style="color:#666666;font-size:13px;font-weight:bold;padding-top:15px">Monitoring Location : All</td>
                                            </tr>
                                            <tr background="https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png">
                                                <th background="https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png"
                                                style="height:23px;border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Test Name</th>
                                                <th style="border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Type</th>
                                                <th style="border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Group Name</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#739b40;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Uptime(%)</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Avg Resp Time(ms)</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#bd5757;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">
                                                    Failures(#)</th>
                                            </tr>
                                            <tr>
                                                <td style="color:#127adb;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">suggeelson.com_http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">Default</td>
                                                <td style="color:#739b40;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">100</td>
                                                <td style="color:#666666;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">1348.76</td>
                                                <td style="color:#bd5757;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd">0</td>
                                            </tr>
                                            <tr>
                                                <td style="color:#127adb;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd"><a href="http://suggelab.com" target="_blank">suggelab.com</a>
                                                </td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">Padrão</td>
                                                <td style="color:#739b40;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">100</td>
                                                <td style="color:#666666;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">147.44</td>
                                                <td style="color:#bd5757;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd">0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="border-top:1px solid #dddddd">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="7" style="color:#666666;font-size:13px;font-weight:bold;padding-top:15px">Monitoring Location : Germany</td>
                                            </tr>
                                            <tr background="https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png">
                                                <th background="https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png"
                                                style="height:23px;border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Test Name</th>
                                                <th style="border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Type</th>
                                                <th style="border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Group Name</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#739b40;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Uptime(%)</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Avg Resp Time(ms)</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#bd5757;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">
                                                    Failures(#)</th>
                                            </tr>
                                            <tr>
                                                <td style="color:#127adb;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">suggeelson.com_http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">Default</td>
                                                <td style="color:#739b40;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">100</td>
                                                <td style="color:#666666;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">1599.45</td>
                                                <td style="color:#bd5757;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd">0</td>
                                            </tr>
                                            <tr>
                                                <td style="color:#127adb;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd"><a href="http://suggelab.com" target="_blank">suggelab.com</a>
                                                </td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">Padrão</td>
                                                <td style="color:#739b40;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">100</td>
                                                <td style="color:#666666;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">205.21</td>
                                                <td style="color:#bd5757;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd">0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="border-top:1px solid #dddddd">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td colspan="7" style="color:#666666;font-size:13px;font-weight:bold;padding-top:15px">Monitoring Location : US-MID</td>
                                            </tr>
                                            <tr background="https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png">
                                                <th background="https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png"
                                                style="height:23px;border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Test Name</th>
                                                <th style="border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Type</th>
                                                <th style="border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:left;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Group Name</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#739b40;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Uptime(%)</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#666666;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">Avg Resp Time(ms)</th>
                                                <th style="white-space:nowrap;border-top:1px solid #dddddd;color:#bd5757;font-size:13px;font-weight:bold;text-align:right;padding:0px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd;background-image:url('https://ci5.googleusercontent.com/proxy/Ap9-c87MgOxxcZj8F6NYc3sN5ObMNmiK4MG10ievYHP7y91qn7yRznHdkQ9QJ9Fawrjbdtvc__0bQ7oBWyb9wo4qsm6082_UV8Hmb2KJY_iLpN2zUtlyIosXlobe-Dghkw=s0-d-e1-ft#http://dashboard.monitis.com/images/weeklyreports/email_report_gradient.png');background-color:#f8f8f8">
                                                    Failures(#)</th>
                                            </tr>
                                            <tr>
                                                <td style="color:#127adb;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">suggeelson.com_http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">Default</td>
                                                <td style="color:#739b40;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">100</td>
                                                <td style="color:#666666;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">1098.06</td>
                                                <td style="color:#bd5757;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd">0</td>
                                            </tr>
                                            <tr>
                                                <td style="color:#127adb;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd"><a href="http://suggelab.com" target="_blank">suggelab.com</a>
                                                </td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">http</td>
                                                <td style="color:#666666;font-size:13px;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">Padrão</td>
                                                <td style="color:#739b40;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">100</td>
                                                <td style="color:#666666;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-left:1px solid #dddddd">89.67</td>
                                                <td style="color:#bd5757;font-size:13px;text-align:right;border-top:1px solid #dddddd;padding:4px 2px;border-right:1px solid #dddddd;border-left:1px solid #dddddd">0</td>
                                            </tr>
                                            <tr>
                                                <td colspan="6" style="border-top:1px solid #dddddd">&nbsp;</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <p style="color:#666666;margin-top:24px;font-size:11px;font-family:'Arial';line-height:19px;margin-left:auto;margin-right:auto;display:table;text-align:center">
                                        Copyright © 2013 - Monitor.Us. All rights reserved. All product and company names herein
                                        <br>may be trademarks of their respective owners. To the best of our knowledge, all details were
                                        <br>correct at the time of publishing; this information is subject to change without notice.
                                    </p>
                                    <!-- End of example email content -->
                                    <div class="attached-files">
                                        <!-- Start .attached-files -->
                                        <ul class="list-group">
                                            <li class="list-group-item">
                                                <span class="label label-danger mr10">PDF</span> 
                                                <strong>Raport.pdf</strong>
                                                <div class="btn-group pull-right">
                                                    <a href="#" class="btn btn-default">View</a>
                                                    <a href="#" class="btn btn-default">Download</a>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <span class="label label-primary mr10">HTML</span> 
                                                <strong>raport.html</strong>
                                                <div class="btn-group pull-right">
                                                    <a href="#" class="btn btn-default">View</a>
                                                    <a href="#" class="btn btn-default">Download</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- End .attached-files -->
                                </div>
                                <!-- End .email-content -->
                            </div>
                            <!-- End .email-read -->
                        </div>
                    </div>
                    <!--End #email-content -->
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