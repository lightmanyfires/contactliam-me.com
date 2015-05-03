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

                        <!-- Import Chat -->
                        <?php include "php/components/global/chat.php"; ?>
                        
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
                    <h2><i class="icon im-pencil5"></i> Write email</h2>
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
                            <div class="email-write">
                                <!-- Start .email-write -->
                                <form action="#" role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" id="to" name="to" placeholder="To">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group">
                                        <div class="col-lg-12">
                                            <textarea name="email-text" id="email-text" class="form-control tinymce" rows="9"></textarea>
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                    <div class="form-group mb20">
                                        <div class="col-lg-12">
                                            <div class="pull-left">
                                                <a href="#" class="btn btn-primary mr15"> Send</a>
                                                <a href="#" class="mr10 tip color-dark" title="Attach file"><i class="im-attachment s20"></i></a>
                                                <a href="#" class="mr10 tip color-dark" title="Insert files using drive"><i class="im-google-drive s20"></i></a>
                                                <a href="#" class="mr10 tip color-dark" title="Insert files using dropbox"><i class="fa fa-dropbox s20"></i></a>
                                                <a href="#" class="mr10 tip color-dark" title="Insert photo"><i class="im-image2 s20"></i></a>
                                                <a href="#" class="mr10 tip color-dark" title="Insert link"><i class="im-link s20"></i></a>
                                            </div>
                                            <div class="pull-right">
                                                <div class="btn-group dropup">
                                                    <a href="#" class="mr10 tip color-dark" title="Discard draft"><i class="im-remove s20"></i></a>
                                                    <a href="#" class="tip color-dark" title="More options" data-toggle="dropdown"><i class="im-cog2 s20"></i></a>
                                                    <ul class="dropdown-menu right">
                                                        <li><a href="#">Canned response</a>
                                                        </li>
                                                        <li><a href="#">Archive message</a>
                                                        </li>
                                                        <li><a href="#">Save as draft</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End .form-group  -->
                                </form>
                            </div>
                            <!-- End .email-write -->
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