<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>TrueDash</title>

        <!-- Bootstrap core CSS -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="assets/css/template1.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/screen_layout_medium.css" media="only screen and (min-width:769px) and (max-width:960px)" />
        <link rel="stylesheet" type="text/css" href="assets/css/screen_layout_small.css" media="only screen and (min-width:480px) and (max-width:768px)" />
        <link rel="stylesheet" type="text/css" href="assets/css/retina.css" media="only screen and (min-width:195px) and (max-width:480px)" />
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>
        <!-- Just for debugging purposes. Don't actually copy this line! -->
        <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">My Company</a>
                </div>
                <ul class="nav navbar-nav pull-right visible-sm visible-xs positionIcon">
                    <div class="iconsUp ">
                        <ul class="icons">
                            <li><a href="#"><img src="assets/images/info.png"></a></li>
                            <li><a href="#"><img src="assets/images/settings-white.png"></a></li>
                            <li><a href="#"><img src="assets/images/question.png"></a></li>
                        </ul>
                    </div>                        
                </ul>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav" id="topLeftMenu">
                        <li class="dropdown">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Main Dashboard<span class="caretTopMenu"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Main Dashboard</a></li>
                                    <li><a href="#">Secondary Dashboard</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav pull-right" id="topRightMenu">
                        <div class="iconsUp">
                            <ul class="icons hidden-xs hidden-sm">
                                <li><a href="#"><img src="assets/images/info.png"></a></li>
                                <li><a href="#"><img src="assets/images/settings-white.png"></a></li>
                                <li><a href="#"><img src="assets/images/question.png"></a></li>
                            </ul>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">John Smith<span class="caretTopMenu"></span></button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">John Smith</a></li>
                                <li><a href="#">Louis Stevenson</a></li>
                            </ul>
                        </div>
                    </ul>                   
                </div><!--/.nav-collapse -->
            </div>
        </div>
        
        <div class="row" id="wideBottomMenu">
            <div id="bottomMenu">
                <div id="leftBottomMenu" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <input type="button" class="btnChart" name="addChart" value="+ Add Chart" />
                </div>
                <div id="rightBottomMenu" class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <form method="get" id="searchform" action="#">
                        <input type="submit" class="submit" name="submit" id="searchsubmit" value="" />
                        <input type="text" class="field" name="s" id="s" placeholder="Search" />                         
                    </form>
                </div>
            </div>            
        </div>
        
        <!-- Begin page content -->
        <div id="mainContent" class="container">
            <div class="row page-header">
                <h4>Selected period: 03/05/2013 to 03/05/2014</h4>
            </div>
                
            <div class="formWrapper">
                <form class="form-horizontal" role="form">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="periodToDisplay" class="col-sm-4 control-label">Period to display</label>
                                <div class="col-sm-8">
                                    <div class="btn-group">
                                        <button class="btn btn-default" type="button">Custom</button>
                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">This Year</a></li>
                                            <li><a href="#">This Quarter</a></li>
                                            <li><a href="#">This Month</a></li>
                                            <li><a href="#">This Week</a></li>
                                            <li><a href="#">Today</a></li>
                                            <li><a href="#">Custom</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="frequency" class="col-sm-4 control-label">Frequency</label>
                                <div class="col-sm-8">
                                    <div class="btn-group">
                                        <button class="btn btn-default" type="button">Hours</button>
                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Days</a></li>
                                            <li><a href="#">Weeks</a></li>
                                            <li><a href="#">Months</a></li>
                                            <li><a href="#">Quarters</a></li>
                                            <li><a href="#">Years</a></li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="startingDate" class="col-sm-4 control-label">Starting Date</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="startingDate" name="startingDate">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-th"></span></button>
                                        </span>
                                    </div>                              
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="endingDate" class="col-sm-4 control-label">Ending Date</label>
                                <div class="col-sm-4">
                                    <div class="input-group">
                                        <input type="text" class="form-control" id="endingDate" name="endingDate">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-th"></span></button>
                                        </span>
                                    </div>                              
                                </div>                            
                            </div>
                        </div>
                    </div>
                        
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <label for="compareWith" class="col-sm-4 control-label">Compare With</label>
                                <div class="col-sm-8">
                                    <div class="btn-group">
                                        <button class="btn btn-default" type="button">Last Year</button>
                                        <button data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button">
                                            <span class="caret"></span>
                                            <span class="sr-only">Toggle Dropdown</span>
                                        </button>
                                        <ul role="menu" class="dropdown-menu">
                                            <li><a href="#">Last Year</a></li>
                                            <li><a href="#">Custom</a></li>
                                        </ul>
                                    </div>                                
                                </div>
                            </div>
                        </div>                    
                    </div>                   
                </form>
            </div>
            
            <div class="row" id="period-buttons">
                <div id="apply-cancel" class="col-lg-4 col-md-4 col-sm-4 col-lg-offset1 col-md-offset1 col-sm-offset1">
                    <button type="submit" class="btn cancel">Cancel</button>
                    <button type="submit" class="btn apply">Apply</button>
                </div>             
            </div>
                
        </div>

        <div id="wideFooter">
            <div id="footer">
                <div class="container">
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
                </div>
            </div>
        </div>


        <!-- Bootstrap core JavaScript
        ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>