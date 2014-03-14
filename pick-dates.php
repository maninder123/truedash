<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" xmlns="http://www.w3.org/1999/html">
    <!--<![endif]-->
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
        <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0" />
        <meta name="description" content=""/>

        <title>TrueDash</title>

        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css" />    
        <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/angular-ui/0.4.0/angular-ui.min.css"/>

        <link rel="stylesheet" type="text/css" href="assets/css/datepicker.css">
        <link rel="stylesheet" type="text/css" href="assets/css/screen_styles.css" />
        <link rel="stylesheet" type="text/css" href="assets/css/screen_layout_medium.css" media="only screen and (min-width:769px) and (max-width:960px)" />
        <link rel="stylesheet" type="text/css" href="assets/css/screen_layout_small.css" media="only screen and (min-width:480px) and (max-width:768px)" />
        <!-- <link rel="stylesheet" type="text/css" href="css/retina.css" media="only screen and (min-width:192px) and (max-width:480px)" /> -->
        <link rel="stylesheet" type="text/css" href="assets/css/retina.css" media="only screen and (min-width:195px) and (max-width:480px)" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'> 
        <link rel="stylesheet" href="assets/styles/main.css"/>

        <!--[if lt IE 9]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <script src="assets/js/jquery.touchSwipe.min.js"></script>
        <script src="assets/js/respond.js"></script>
        <script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
        <script src="assets/js/custom.js"></script>    
        <script src="assets/js/bootstrap.min.js"></script>
    </head>
    <body ng-app="truedashApp">
        <!--[if lt IE 7]>
                <p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
            <![endif]-->

        <div id="wideHeader">
            <div class="container">
                <div id="topMenu" class="row-fluid">
                    <div id="topLeftMenu" class="span6">
                        <div id="company" class="span3">
                            <a href="#">My Company</a>
                        </div>    
                        <div class="btn-group" class="span9">
                            <button class="btn">Main Dashboard</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caretTopMenu"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <!-- dropdown menu links -->
                                <li><a href="#">Main Dashboard</a></li>
                                <li><a href="#">Secondary Dashboard</a></li>
                            </ul>
                        </div>
                    </div><!-- end #topLeftMenu-->    
                    <div id="topRightMenu"  class="span6">

                        <div class="span12">
                            <div class="iconsUp">
                                <ul class="icons">
                                    <li><a href="#"><img src="assets/images/info.png"></a></li>
                                    <li><a href="#"><img src="assets/images/settings-white.png"></a></li>
                                    <li><a href="#"><img src="assets/images/question.png"></a></li>
                                </ul>
                            </div>
                            <div class="btn-group">
                                <button class="btn">John Smith</button>
                                <button class="btn dropdown-toggle" data-toggle="dropdown">
                                    <span class="caretTopMenu"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <!-- dropdown menu links -->
                                    <li><a href="#">John Smith</a></li>
                                    <li><a href="#">Louis Stevenson</a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div><!-- end #topMenu -->  
            </div><!-- end .container -->
        </div><!-- end #wideheader -->
        
        
        <div id="wideBottomMenu">
            <div id="bottomMenu"  class="row-fluid">
                <div id="leftBottomMenu" class="span6">
                    <input type="button" class="btnChart" name="addChart" value="+ Add Chart" />
                </div>
                <div id="rightBottomMenu" class="span6">
                    <form method="get" id="searchform" action="#">
                        <input type="submit" class="submit" name="submit" id="searchsubmit" value="" />
                        <input type="text" class="field" name="s" id="s" placeholder="Search" />

                    </form>
                </div>
            </div><!-- end #topMenu -->
        </div><!-- end #wideBottomMenu -->


        <div id="mainContent" class="clearfix row-fluid">
            <div class="span12">
                <div id="selectPeriod" class="row-fluid">
                    <div class="span12">
                        <p>Selected period: 03/05/2013 to 03/05/2014</p>
                    </div>
                </div>

                <div id="period-frequency" class="row-fluid">
                    <div id="period" class="span5 clearfix">
                        <div class="btn-group">
                            <button class="btn">Custom</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <!-- dropdown menu links -->
                                <li><a href="#">This Year</a></li>
                                <li><a href="#">This Quarter</a></li>
                                <li><a href="#">This Month</a></li>
                                <li><a href="#">This Week</a></li>
                                <li><a href="#">Today</a></li>
                                <li><a href="#">Custom</a></li>
                            </ul>
                        </div>
                        <p>Period to display</p>

                    </div>
                    <div id="frequency" class="span4 clearfix">
                        <div class="btn-group">
                            <button class="btn">Hours</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <!-- dropdown menu links -->
                                <li><a href="#">Days</a></li>
                                <li><a href="#">Weeks</a></li>
                                <li><a href="#">Months</a></li>
                                <li><a href="#">Quarters</a></li>
                                <li><a href="#">Years</a></li>
                            </ul>
                        </div>
                        <p>Frequency</p>    
                    </div>
                    <div class="span3"></div>
                </div> <!-- end #period-frequency -->     
                <div id="starting-ending" class="row-fluid">
                    <div id="starting" class="span5 clearfix">
                        <div class="input-append date datepicker" 
                             data-date="05-02-2014" data-date-format="dd-mm-yyyy">
                            <input class="span2" type="text" value="05-02-2014">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <p>Starting Date</p>

                    </div>

                    <div id="ending" class="span4 clearfix">
                        <div class="input-append date datepicker" 
                             data-date="05-02-2014" data-date-format="dd-mm-yyyy">
                            <input class="span2" type="text" value="05-02-2014">
                            <span class="add-on"><i class="icon-th"></i></span>
                        </div>
                        <p>Ending Date</p>    
                    </div>
                    <div class="span3"></div>
                </div> <!-- end #starting-ending -->     

                <div id="compare" class="row-fluid"> 
                    <div class="span5">
                        <div class="btn-group">
                            <button class="btn">Last Year</button>
                            <button class="btn dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <!-- dropdown menu links -->
                                <li><a href="#">Last Year</a></li>
                                <li><a href="#">Custom</a></li>
                            </ul>
                        </div>
                        <label class="checkbox">
                            <input type="checkbox"> Compare with
                        </label>
                    </div> 
                    <div class="span7"></div>
                </div>

                <div id="period-buttons" class="row-fluid">
                    <div id="apply-cancel" class="span4 offset1">
                        <button type="submit" class="btn cancel">Cancel</button>
                        <button type="submit" class="btn apply">Apply</button>
                    </div>
                    <div class="span7">

                    </div>
                </div> <!-- end #period-buttons -->     
            </div> <!-- end .span12 --> 
        </div><!-- end #mainContent -->

        <!--[if lt IE 9]>
            <script src="scripts/vendor/es5-shim.min.js"></script>
            <script src="scripts/vendor/json3.min.js"></script>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container angular span12" ng-view></div>




        <div id="wideFooter">
            <div id="footer" class="row-fluid">
                <div class="">
                    <a href="http://www.truedash.io"><img src="assets/images/logo-truedash-white.png" alt="TrueDash" /></a>
                </div>

                <div class="">
                    <p class="notVisibleSmall">Copyright &copy; 2014   
                        <span class="copyrightName notVisible">Truedash</span>  <span class="notVisible">All Rights Reserved</span>
                    </p>
                </div>
                <div class="">
                    <ul class="footerLinks">
                        <li><a href="#">Disclaimer</a></li>
                        <li><a href="#">Contact Us</a></li>
                        <li><a  class="notVisible" href="#">Site Map</a></li>
                    </ul>
                </div>
            </div><!-- end #footer -->
        </div><!-- end #wideFooter -->

        <!--
        <script src="http://ci.angularjs.org/view/AngularJS/job/angular.js-angular-master/ws/build/angular.js"></script>
        -->
        <script src="assets/components/angular/angular.js"></script>
        <!-- <script src="components/angular-bootstrap/ui-bootstrap.js"></script> -->
        <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.6.0.js"></script>
        <script src="assets/components/angular-resource/angular-resource.js"></script>
        <script src="assets/components/d3/d3.js"></script>
        <script src="assets/components/angularjs-nvd3-directives/dist/angularjs-nvd3-directives.js"></script>
        <script src="assets/components/angular-route/angular-route.js"></script>
        <script src="assets/components/highcharts/highcharts.js"></script>
        <script src="assets/components/highcharts-ng/src/directives/highcharts-ng.js"></script>
        <script src="assets/components/exporting/index.js"></script>
        <script src="assets/components/highchart-export-csv/export-csv.js"></script>
        <script src="assets/components/underscore/underscore-min.js"></script>
        <script src="assets/components/restangular/dist/restangular.min.js"></script>

        <script src="https://rawgithub.com/angular-ui/ui-sortable/master/src/sortable.js"></script>
        <!-- <script src="components/angular-ui-sortable/src/sortable.js"></script>-->

        <!-- build:js scripts/scripts.js -->
        <script src="assets/scripts/app.js"></script>
        <script src="assets/scripts/controllers/main.js"></script>
        <script src="assets/scripts/controllers/add.js"></script>
        <script src="assets/scripts/services/restService.js"></script>
        <script src="assets/scripts/controllers/widgets.js"></script>
        <script src="assets/scripts/controllers/demo.js"></script>
        <script src="assets/scripts/controllers/singleChart.js"></script>
        <script src="assets/scripts/controllers/navBar.js"></script>
        <script src="assets/scripts/controllers/datePicker.js"></script>
        <script src="assets/scripts/controllers/multipleCharts.js"></script>
        <!-- endbuild -->

        <script type="text/javascript">
            $('.datepicker').datepicker()
        </script>
    </body>
</html>