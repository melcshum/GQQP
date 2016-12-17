<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <script type="text/javascript" src="jslib/jquery-1.11.1.js"></script>


    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../dist/css/star-rating.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="../css/themes/krajee-fa/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="../css/themes/krajee-svg/theme.css" media="all" type="text/css"/>
    <link rel="stylesheet" href="../css/themes/krajee-uni/theme.css" media="all" type="text/css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="../dist/js/star-rating.js" type="text/javascript"></script>
    <script src="../js/themes/krajee-fa/theme.js" type="text/javascript"></script>
    <script src="../js/themes/krajee-svg/theme.js" type="text/javascript"></script>
    <script src="../js/themes/krajee-uni/theme.js" type="text/javascript"></script>


    <style>
        .thumbnail{
            width:300px;
            height:300px;

        }
    </style>

    <title>Learning Java |FYP</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->





    <script type="text/javascript">

        $(document).ready(function() {

            $("#Topic_side1").hide();
            $("#Topic_side_Down1").hide();
            $("#Topic_side2").hide();
            $("#Topic_side_Down2").hide();
            $("#Topic_side3").hide();
            $("#Topic_side_Down3").hide();



            $("#Topic1").click(function() {
                $("#Topic").hide(500);
                $("#Topic_side2").hide(500);
                $("#Topic_side_Down2").hide(500);
                $("#Topic_side3").hide(500);
                $("#Topic_side_Down3").hide(500);
                $("#Topic_side1").show(500);
                $("#Topic_side_Down1").show(500);


            });

            $("#Topic2").click(function() {
                $("#Topic").hide(500);
                $("#Topic_side1").hide(500);
                $("#Topic_side_Down1").hide(500);
                $("#Topic_side3").hide(500);
                $("#Topic_side_Down3").hide(500);
                $("#Topic_side2").show(500);
                $("#Topic_side_Down2").show(500);


            });

            $("#Topic3").click(function() {
                $("#Topic").hide(500);
                $("#Topic_side1").hide(500);
                $("#Topic_side_Down1").hide(500);
                $("#Topic_side2").hide(500);
                $("#Topic_side_Down2").hide(500);
                $("#Topic_side3").show(500);
                $("#Topic_side_Down3").show(500);


            });

        });

    </script>




</head>

<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">FYP</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a href="index.html">
                    <i class="fa  fa-list-alt fa-fw"></i>
                </a>
                <!-- /.dropdown-user -->
            </li>
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="Profile.html"><i class="fa fa-user fa-fw"></i> User Profile</a>
                    </li>
                    <li><a href="Setting.html"><i class="fa fa-gear fa-fw"></i> Settings</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="Topic">
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Topice Introduction</div>
                            <div class="panel-body text-center">
                                Please Kick Show Information to know more
                            </div>
                        </div>
                    </li>

                </ul>

                <ul class="nav" id="Topic_side1">
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Topice Introduction</div>
                            <div class="panel-body text-center">
                                Topic One Is IF and Else
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >How many Qusetion you finish</div>
                            <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <div class="text-center">4/12</div>
                            </div>
                        </div>

                    </li>
                </ul>
                <ul class="nav" id="Topic_side2">
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Topice Introduction</div>
                            <div class="panel-body text-center">
                                Topic Two Is Awarry
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >How many Qusetion you finish</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <div class="text-center">12/12</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>

                <ul class="nav" id="Topic_side3">
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Topice Introduction</div>
                            <div class="panel-body text-center">
                                Topic Three Control Characters
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >How many Qusetion you finish</div>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                    <div class="text-center">1/12</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->


            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="Topic_side_Down1" >
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" ><img src="./images/gold.ico" width="40">Gold</div>
                            <div class="panel-body text-center">
                                100 Gold
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >How many Question</div>
                            <div class="panel-body text-center">
                                20
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Suggwst finsih time</div>
                            <div class="panel-body text-center">
                                20 minute
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >The Fastest Finish time</div>
                            <div class="panel-body text-center">
                                10 minute
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Bar</div>
                            <div class="panel-body text-center">
                                <input id="input-3"  name="input-3"  class="rating rating-loading" value="3" data-size="xs" title="" readonly>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="Topic_side_Down2" >
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" ><img src="./images/gold.ico" width="40">Gold</div>
                            <div class="panel-body text-center">
                                50 Gold
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >How many Question</div>
                            <div class="panel-body text-center">
                                20
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Suggwst finsih time</div>
                            <div class="panel-body text-center">
                                10 minute
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >The Fastest Finish time</div>
                            <div class="panel-body text-center">
                                7 minute
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Bar</div>
                            <div class="panel-body text-center">
                                <input id="input-3"  name="input-3"  class="rating rating-loading" value="5" data-size="xs" title="" readonly>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>


            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="Topic_side_Down3" >
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" ><img src="./images/gold.ico" width="40">Gold</div>
                            <div class="panel-body text-center">
                                90 Gold
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >How many Question</div>
                            <div class="panel-body text-center">
                                30
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Suggwst finsih time</div>
                            <div class="panel-body text-center">
                                30 minute
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >The Fastest Finish time</div>
                            <div class="panel-body text-center">
                                33 minute
                            </div>
                        </div>
                    </li>
                    <li>

                        <div class="panel panel-default">
                            <div class="panel-heading text-center" >Bar</div>
                            <div class="panel-body text-center">


                                <input id="input-3"  name="input-3"  class="rating rating-loading" value="2" data-size="xs" title="" readonly>


                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <h1 class="page-header">Menu</h1>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <img src="./images/IF ELSE.png"  alt='Thumbnail' class="img-thumbnail img-responsive" width="116px" height="120px"/>
                        <div class="caption">
                            <h4>Topic 1 If and Else</h4>
                            <p>You can get the point in there</p>
                            <p><a data-toggle="modal" data-target="#Explanation" class="btn btn-primary" role="button">Play</a>
                                <button id=Topic1 class="btn btn-primary">Show Information</button>
                                <img src="./images/Lock.jpg" width="40">

                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <img src="./images/Array.png" alt='Thumbnail2' class="img-thumbnail img-responsive" width="50%" height="50%"/>
                        <div class="caption">
                            <h4>Topic 2 Array</h4>
                            <p>Here is review Java skills</p>
                            <p><a data-toggle="modal" data-target="#Explanation" class="btn btn-primary" role="button">Play</a>
                                <button id=Topic2 class="btn btn-primary">Show Information</button>
                                <img src="./images/Unloack.jpg" width="40">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <img src="./images/Symbol.png" alt='Thumbnail3' class="img-thumbnail img-responsive" width="50%" height="50%"/>
                        <div class="caption">
                            <h4>Topic 3 Control Characters</h4>
                            <p>Here is check your rank</p>
                            <p><a data-toggle="modal" data-target="#Explanation" class="btn btn-primary" role="button">Play</a>
                                <button id=Topic3 class="btn btn-primary">Show Information</button>
                                <img src="./images/Lock.jpg" width="40">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <img src="./images/Symbol.png" alt='Thumbnail3' class="img-thumbnail img-responsive" width="50%" height="50%"/>
                        <div class="caption">
                            <h4>Topic 3 Control Characters</h4>
                            <p>Here is check your rank</p>
                            <p><a data-toggle="modal" data-target="#Explanation" class="btn btn-primary" role="button">Play</a>
                                <button id=Topic3 class="btn btn-primary">Show Information</button>
                                <img src="./images/Lock.jpg" width="40">
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="thumbnail">
                        <img src="./images/Symbol.png" alt='Thumbnail3' class="img-thumbnail img-responsive" width="50%" height="50%"/>
                        <div class="caption">
                            <h4>Topic 3 Control Characters</h4>
                            <p>Here is check your rank</p>
                            <p><a data-toggle="modal" data-target="#Explanation" class="btn btn-primary" role="button">Play</a>
                                <button id=Topic3 class="btn btn-primary">Show Information</button>
                                <img src="./images/Lock.jpg" width="40">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="vendor/raphael/raphael.min.js"></script>
<script src="vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<div class="modal fade" id="question_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Send Question</h4>
            </div>
            <div class="modal-body">
                <p><h4>Please choose the type</h4></p>
                <a href="question-LQ.html"><button type="button" class="btn btn-info" id="LQ" name="LQ">Long Question</button></a>
                <a href="question-MC.html"><button type="button" class="btn btn-success" id="MC" name="MC">Multiple Choice</button></a>
                <a href="question-FILL.html"><button type="button" class="btn btn-primary" id="Filling" name="Filling">Filling</button></a>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="Explanation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Explanation</h4>
            </div>
            <div class="modal-body">
                <p><h4>How to play?</h4></p>
                <p>	When you click the "Test"and "Exercise" button, we will start this Game. This game have 20 question. If you can not be completed the question in time.<b>(when the level is high, it will more time)</b>
                    We have two mode, "Test" and "Exercise", Test mode can get the Mark and Point, but only one time for each day. And Exercise just Unlimited.
                </p>
                <a href="#"><button type="button" class="btn btn-info" id="LQ" name="LQ">Test</button></a>
                <a href="/gameTest"><button type="button" class="btn btn-success" id="MC" name="MC">Exercise</button></a>

            </div>
        </div>
    </div>
</div>




</body>

</html>
