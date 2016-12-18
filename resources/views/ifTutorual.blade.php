@extends("layouts.app")

@section('content')

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
                <a class="navbar-brand" href="index.html">Game</a>
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
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="intro.html"><i class="fa fa-home fa-fw"></i>Introduction</a>
                        </li>
                        <li>
                            <a href="teach.html"><i class="fa fa-gamepad fa-fw"></i> How to play</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bars fa-fw"></i> Java<span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="if.html">if...else</a>
                                </li>
                                <li>
                                    <a href="array.html">Array</a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Lession 1 <small>if...else</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-home"></i> <a href="intro.html">Introduction</a>
                            <li class="active">Java
                            <li class="active">if...else
                            </li>
                        </ol>
                        <div class="col-lg-8 col-sm-12">
                            <p> An if statement can be followed by an optional else statement, which executes when the Boolean expression is false.</p>

                            Syntax:
                            The syntax of an if...else is:
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Example
                                </div>
                                <div class="panel-body">
                        <pre>if(Boolean_expression){
    //Executes when the Boolean expression is true
}else{
    //Executes when the Boolean expression is false
}</pre>
                                </div>
                            </div>
                            If the boolean expression evaluates to true, then the if block of code will be executed, otherwise else block of code will be executed.
                        </div>
                        <div class="col-lg-4 col-sm-12">
                            <div class="panel-body">
                                <img class="img-responsive" src="images/if.png" alt="">
                                <div class="panel-footer">
                                    Flow Diagram
                                </div>
                            </div>
                        </div>
                        <h3 class="page-header">
                            Exercise
                        </h3>
                        <div class="row">

                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/320x150" alt="">
                                    <div class="caption">
                                        <div class="ratings">
                                            <p class="pull-right">
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                        </div>
                                        </p>
                                        <h4><a href="#">Practice 1</a>
                                        </h4>
                                        <button type="button" class="btn btn-primary pull-right" >Play</button>
                                        <p>簡介</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/320x150" alt="">
                                    <div class="caption">
                                        <div class="ratings">
                                            <p class="pull-right">
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                        </div>
                                        </p>
                                        <h4><a href="#">Practice 2</a>
                                        </h4>
                                        <button type="button" class="btn btn-primary pull-right disabled" >Play</button>
                                        <p>簡介</p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4 col-lg-4 col-md-4">
                                <div class="thumbnail">
                                    <img src="http://placehold.it/320x150" alt="">
                                    <div class="caption">
                                        <div class="ratings">
                                            <p class="pull-right">
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                                <span class="glyphicon glyphicon-star-empty"></span>
                                        </div>
                                        </p>
                                        <h4><a href="#">Practice 3</a>
                                        </h4>
                                        <button type="button" class="btn btn-primary pull-right disabled" >Play</button>
                                        <p>簡介</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
@endsection