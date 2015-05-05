<?php
define('PAGE_TITLE', 'Sporple | Rugby | Player Comparison');
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
                    <h2>Player Comparison</h2>
                    <ul id="crumb" class="breadcrumb">
                    </ul>
                </div>
                <div class="content-inner">

                    <!-- Header -->
                    <div class="row">
                        <div class="comp-header-title col-lg-1 col-md-1 hidden-sm">Rank</div>
                        <div class="comp-header-title col-lg-7 col-md-7">Comparison</div>
                        <div class="comp-header-title col-lg-4 col-md-4 hidden-sm">Player List</div>
                    </div>

                    <div class="row">
                        <!-- left-hand side numbers -->
                        <div class="comp-header-left col-lg-1 col-md-1 ">
                            <p></p>    
                        </div>
                        <!-- Player comparison column -->
                        <section class="comp-header-body col-lg-7 col-md-7 sortable-layout" id="p-comparison">
                            <!-- DREW MITCHELL -->
                            <div class="panel panel-default plain panelMove player-compare-panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title-compare">DREW MITCHELL - <span class="player-age">30<span></h4>
                                </div>
                                <div class="panel-body p5 player-info">
                                    <div class="player-info-image col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                        <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-drew-mitchell.200x200.1.1.100.jpg" class="compare-img">
                                     </div>
                                     <div class="player-info-height col-lg-2 col-md-2 col-sm-2 col-xs-2"><p>184cm</p></div>
                                     <div class="player-info-weight col-lg-2 col-md-2 col-sm-2 col-xs-2"><p>92kg</p></div>
                                     <div class="player-info-postion col-lg-2 col-md-2 col-sm-2 col-xs-2"><p>Wing</p></div>
                                     <div class="player-info-nationality col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                     <img src="http://www.veryicon.com/icon/png/Flag/Not%20a%20Patriot/Australia%20Flag.png" style="width:50px; height:50px;"></div>
                                     <div class="player-info-stats col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                     <a href="#"><i class="im-stats-up"></i></a></div>
                                </div>
                            </div> 
                            <!-- ETHAN FORD -->
                            <div class="panel panel-default plain panelMove player-compare-panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title-compare">ETHAN FORD - <span class="player-age">23<span></h4>
                                </div>
                                <div class="panel-body p5 player-info">
                                    <div class="player-info-image col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                        <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-ethan-ford_1427249613_cropped.200x200.1.1.100.jpg" class="compare-img">
                                     </div> 
                                     <div class="player-info-height col-lg-2 col-md-2 col-sm-2 col-xs-2"><p>178cm</p></div>
                                     <div class="player-info-weight col-lg-2 col-md-2 col-sm-2 col-xs-2"><p>90kg</p></div>
                                     <div class="player-info-postion col-lg-2 col-md-2 col-sm-2 col-xs-2"><p>Fullback</p></div>
                                     <div class="player-info-nationality col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                     <img src="http://www.veryicon.com/icon/png/Flag/Not%20a%20Patriot/Australia%20Flag.png" style="width:50px; height:50px;"></div>
                                     <div class="player-info-stats col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                     <a href="#"><i class="im-stats-up"></i></a></div>
                                </div>
                            </div>
                            <!-- JAMES PRITCHARD -->
                            <div class="panel panel-default plain panelMove player-compare-panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title-compare">JAMES PRITCHARD - <span class="player-age">35<span></h4>
                                </div>
                                <div class="panel-body p5 player-info">
                                    <div class="player-info-image col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                        <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-james-pritchard_1427616264_cropped.200x200.1.1.100.png" class="compare-img" class="compare-img">
                                     </div> 
                                     <div class="player-info-height col-lg-2 col-sm-2 col-xs-2"><p>175cm</p></div>
                                     <div class="player-info-weight col-lg-2 col-sm-2 col-xs-2"><p>86kg</p></div>
                                     <div class="player-info-postion col-lg-2 col-sm-2 col-xs-2"><p>Centre</p></div>
                                     <div class="player-info-nationality col-lg-2 col-sm-2 col-xs-2">
                                        <img src="http://www.veryicon.com/icon/png/Flag/Not%20a%20Patriot/Canada%20Flag.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="player-info-stats col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                         <a href="#"><i class="im-stats-up"></i></a></div>
                                </div>
                            </div> 
                            <!-- COURTNEY ROBERTS -->
                            <div class="panel panel-default plain panelMove player-compare-panel">
                                <div class="panel-heading">
                                    <h4 class="panel-title-compare">COURTNEY ROBERTS - <span class="player-age">25<span></h4>
                                </div>
                                <div class="panel-body p5 player-info">
                                    <div class="player-info-image col-lg-2 col-md-2 col-sm-2 hidden-xs">
                                        <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-courtney-roberts.200x200.1.1.100.jpg" class="compare-img">
                                     </div> 
                                     <div class="player-info-height col-lg-2 col-sm-2 col-xs-2"><p>200cm</p></div>
                                     <div class="player-info-weight col-lg-2 col-sm-2 col-xs-2"><p>112kg</p></div>
                                     <div class="player-info-postion col-lg-2 col-sm-2 col-xs-2"><p>Lock</p></div>
                                     <div class="player-info-nationality col-lg-2 col-sm-2 col-xs-2">
                                        <img src="http://www.veryicon.com/icon/128/Flag/Not%20a%20Patriot/UK%20Flag.png" style="width:50px; height:50px;">
                                    </div>
                                    <div class="player-info-stats col-lg-2 col-md-2 col-sm-2 col-xs-2">
                                         <a href="#"><i class="im-stats-up"></i></a></div>
                                </div>
                            </div>
                        </section>  

                        <!-- player list column -->    
                        <section class="comp-header-right col-lg-4 col-md-4 sortable-layout" id ="liam">

                            <!-- Left player list column --> 
                            <div class="row">   
                                <div class="comp-header-right col-lg-6 col-md-6 sortable-layout">      
                                    <!-- ALEX ROKOBARO -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">ALEX ROKOBARO - <span class="player-age">23<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-alex-rokobaro.200x200.1.1.100.png" class="compare-img">
                                        </div>
                                    </div>
                                    <!-- JOSHUA GREY  -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">JOSHUA GREY - <span class="player-age">19<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-joshua-gray_1426730046_cropped.200x200.1.1.100.jpg" class="compare-img">
                                        </div>
                                    </div>
                                    <!-- CRONAN GLEESON -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading ">
                                            <h4 class="panel-title-compare">CRONAN GLEESON - <span class="player-age">24<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-cronan-gleeson_1426505174_cropped.200x200.1.1.100.jpg" class="compare-img">
                                        </div>
                                    </div>
                                    <!-- SAM BRIGHT -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">SAM BRIGHT - <span class="player-age">18<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-sam-bright.200x200.1.1.100.png" class="compare-img">
                                        </div>
                                    </div>
                                </div>
                           
                            <!-- Right player list column --> 
                                <div class="comp-header-right col-lg-6 col-md-6 sortable-layout" id="p-list">    
                                    <!-- LEWIE CATT -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">LEWIE CATT- <span class="player-age">24<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-lewie-catt_1427842937_cropped.200x200.1.1.100.jpg" class="compare-img">
                                        </div>
                                    </div>
                                    <!-- TOM WATTS -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">TOM WATTS - <span class="player-age">22<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-rhuwane-pienaar.200x200.1.1.100.jpg" class="compare-img">
                                        </div>
                                    </div>
                                     <!-- JACK KELLY -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">JACK KELLY - <span class="player-age">13<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-jack-kelly.200x200.1.1.100.jpg" class="compare-img">
                                        </div>
                                    </div>
                                     <!-- XAVIER MARTEL -->
                                    <div class="panel panel-default plain panelMove player-compare-panel">
                                        <div class="panel-heading">
                                            <h4 class="panel-title-compare">XAVIER MARTEL - <span class="player-age">27<span></h4>
                                        </div>
                                        <div class="panel-body p5 ">
                                            <img src="https://www.sporple.com/uploads/ooipThumber/uploads/profile/sporple-xavier-martel.200x200.1.1.100.jpg" class="compare-img">
                                        </div>
                                    </div>
                                </div>
                             </div>    
                        </section> <!-- END Player list column -->   
                    </div><!-- End .row -->  
                </div><!-- End .content-inner --> 
             </div><!-- End .content-wrapper -->  
             <div class="clearfix"></div>         
        </div><!-- End #content -->                   
        <!-- Javascripts -->
        <?php include "php/components/global/scripts.php"; ?>
        <!-- Other Scripts -->
        <script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>
        <script src="assets/js/jquery.appStart.js"></script>
        <!--<script src="assets/js/comparison-custom.js"></script>-->
        <script src="assets/js/app.js"></script>
        <script src="assets/js/pages/dashboard.js"></script>
        <script src="assets/plugins/core/quicksearch/jquery.quicksearch.js"></script>
    </body>
</html>                
                       
                    
                        
                        
                     
                        
                        
                            
                            
                                                
                           
                       
                        
                    
                
           
            
          

        