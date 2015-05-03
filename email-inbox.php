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
                    <h2><i class="icon im-envelop-opened"></i> Inbox</h2>
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
                            <div class="email-toolbar-search col-lg-12">
                                <form>
                                    <input type="text" class="form-control input-xlarge" name="search" placeholder="Search for email ...">
                                </form>
                            </div>
                            <div class="email-list col-lg-12">
                                <table class="table table-striped table-hover table-fixed-layout non-responsive">
                                    <tbody>
                                        <tr>
                                            <td class="email-select input-mini">
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Twitter</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> SuggeElson, check out your week on Twitter.
                                                    <span class="text-muted small ml10">SuggeElson see your week in review. Theese tweets help you to make connections...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 28</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">FC Barcelona Fans</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-pink mr10">Promotions</span> Tito, eternaly remembered
                                                    <span class="text-muted small ml10">Barca fans mobile view as web page...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 28</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">ADATA</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                    A sense of speed you can't even begin to imagine
                                    <span class="text-muted small ml10">If you unable to see this message please click bellow ...</span>
                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 27</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Monitor.US</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> Daily_Report1 - Daily Report Apr 26, 2014
                                                    <span class="text-muted small ml10">Uptime monior, monitor location, All Test name ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 27</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">service@intl.paypal.com</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> Receipt for Your Payment to Digital Ocean, Inc.
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 26</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Jonh Stanton</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-primary mr10">Work</span> SuggeElson, please come to office tomorrow.
                                                    <span class="text-muted small ml10">We need to discus the new project  ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 27</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Golden Sans Holiday</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-success mr10">Travel</span> Your trip to spain is arranged successful.
                                                    <span class="text-muted small ml10">You will enjoy the trip to Barcelona, Spain  ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 25</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">me, Girlfriend <span class="count-msg">(2)</span></a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-danger mr10">Private</span> Please check out this new house is awesome.
                                                    <span class="text-muted small ml10">Will be nice to move in, he has big pool  ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 25</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Support, me <span class="count-msg">(17)</span></a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-primary mr10">Work</span> The progress bar now work correctly.
                                                    <span class="text-muted small ml10">I extract the files you send me and now all is good ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 24</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">support</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> You sold a item !
                                                    <span class="text-muted small ml10">Congratulations, you sold the following item - Supr Responsive admin template</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 24</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Twitter</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> SuggeElson, check out your week on Twitter.
                                                    <span class="text-muted small ml10">SuggeElson see your week in review. Theese tweets help you to make connections...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">FC Barcelona Fans</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-pink mr10">Promotions</span> Tito, eternaly remembered
                                                    <span class="text-muted small ml10">Barca fans mobile view as web page...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 23</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">ADATA</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                    A sense of speed you can't even begin to imagine
                                    <span class="text-muted small ml10">If you unable to see this message please click bellow ...</span>
                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 22</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Monitor.US</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> Daily_Report1 - Daily Report Apr 26, 2014
                                                    <span class="text-muted small ml10">Uptime monior, monitor location, All Test name ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 22</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">service@intl.paypal.com</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> Receipt for Your Payment to Digital Ocean, Inc.
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 22</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Jonh Stanton</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-primary mr10">Work</span> SuggeElson, please come to office tomorrow.
                                                    <span class="text-muted small ml10">We need to discus the new project  ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 21</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Golden Sans Holiday</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-success mr10">Travel</span> Your trip to spain is arranged successful.
                                                    <span class="text-muted small ml10">You will enjoy the trip to Barcelona, Spain  ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 21</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">me, Girlfriend <span class="count-msg">(2)</span></a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-danger mr10">Private</span> Please check out this new house is awesome.
                                                    <span class="text-muted small ml10">Will be nice to move in, he has big pool  ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 21</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">Support, me <span class="count-msg">(17)</span></a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-primary mr10">Work</span> The progress bar now work correctly.
                                                    <span class="text-muted small ml10">I extract the files you send me and now all is good ...</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 20</td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label class="checkbox">
                                                    <input class="check" type="checkbox" value="option3">
                                                </label>
                                            </td>
                                            <td class="email-star input-mini"><i class="im-star s20"></i>
                                            </td>
                                            <td class="email-subject"><a href="email-read.html">support</a>
                                            </td>
                                            <td class="email-intro">
                                                <a href="email-read.html">
                                                    <span class="label label-teal mr10">Updates</span> You sold a item !
                                                    <span class="text-muted small ml10">Congratulations, you sold the following item - Supr Responsive admin template</span>
                                                </a>
                                            </td>
                                            <td class="email-date text-right input-mini">Apr 20</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
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