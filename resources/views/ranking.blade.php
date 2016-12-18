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
                    <ul class="nav" id="side-menu">
                        <li>
                            <a data-toggle="modal" data-target="#Explanation"><i class="fa fa-gamepad   fa-fw"></i> Game</a>
                        </li>
                        <li>
                            <a href="intro.html"><i class="fa fa-table fa-university  "></i>Learning</a>
                        </li>
                        <li>
                            <a href="Rank.html"><i class="fa fa-edit fa-list-ol"></i> Rank</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit fa-comments"></i> Fourm</a>
                        </li>
                        <li>
                            <a data-toggle="modal" data-target="#question_type"><i class="fa fa-edit fa-pencil"></i> Send Question</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row-fluid">
                <div class="col-md-12 col-sm-12 col-xs-1">
                    <ul id="myTab" class="nav nav-tabs">
                        <li class="active"><a href="#Platinum" data-toggle="tab">Platinum</a></li>
                        <li><a href="#Gold" data-toggle="tab">Gold</a></li>
                        <li><a href="#Silver" data-toggle="tab">Silver</a></li>
                        <li><a href="#Copper" data-toggle="tab">Copper</a></li>

                        </li>
                    </ul>

                    <div id="myTabContent" class="tab-content">
                        <div class="tab-pane  in active" id="Platinum">
                            <center>
                                <h3>Platinum</h3>
                            </center>
                            <table class="table table-striped" align="left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1 <img src="./images/Gold.png"></td>
                                    <td><b>joechoy333</b></td>
                                    <td>4966</td>
                                </tr>
                                <tr>
                                    <td>2 <img src="./images/Silver.png"></td>
                                    <td>queenie222</td>
                                    <td>4555</td>
                                </tr>
                                <tr>
                                    <td>3 <img src="./images/Copper.png"></td>
                                    <td>Tab555</td>
                                    <td>4200</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>VHB21</td>
                                    <td>4199</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>KEN001</td>
                                    <td>4180</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>John56</td>
                                    <td>4155</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>qwertyuiop</td>
                                    <td>4144</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>NotebookD</td>
                                    <td>4122</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>AMY1996</td>
                                    <td>4080</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>RCSKYP</td>
                                    <td>4050</td>
                                </tr>
                                </tbody>
                            </table>
                            </center>
                        </div>

                        <div class="tab-pane " id="Gold">
                            <center>
                                <h3>Gold</h3>
                            </center>
                            <table class="table table-striped" align="left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mark</th>
                                </tr>
                                </thead>

                                <tbody>
                                <tr>
                                    <td>1 <img src="./images/Gold.png"></td>
                                    <td>Alva24</td>
                                    <td>4020</td>
                                </tr>
                                <tr>
                                    <td>2 <img src="./images/Silver.png"></td>
                                    <td>Antony</td>
                                    <td>4001</td>
                                </tr>
                                <tr>
                                    <td>3 <img src="./images/Copper.png"></td>
                                    <td>Bill3321</td>
                                    <td>3974</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Cliff66</td>
                                    <td>3965</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Earl369</td>
                                    <td>3954</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>EVA001</td>
                                    <td>3950</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>EVA002</td>
                                    <td>3944</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>EVA003</td>
                                    <td>3899</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>EVA004</td>
                                    <td>3872</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>EVA005</td>
                                    <td>3854</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>



                        <div class="tab-pane" id="Silver">
                            <center>
                                <h3>Silver</h3>
                            </center>
                            <table class="table table-striped" align="left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1 <img src="./images/Gold.png"></td>
                                    <td>HaleBBC</td>
                                    <td>3850</td>
                                </tr>
                                <tr>
                                    <td>2 <img src="./images/Silver.png"></td>
                                    <td>Harry1245</td>
                                    <td>3845</td>
                                </tr>
                                <tr>
                                    <td>3 <img src="./images/Copper.png"></td>
                                    <td>Larry778</td>
                                    <td>3843</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Matt147</td>
                                    <td>3840</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Parker478</td>
                                    <td>3838</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Montague55</td>
                                    <td>3837</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Roderick48</td>
                                    <td>3834</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Silvester36</td>
                                    <td>3832</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Tiffany1887</td>
                                    <td>3830</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Victor1266</td>
                                    <td>3829</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="tab-pane" id="Copper">
                            <center>
                                <h3>Copper</h3>
                            </center>
                            <table class="table table-striped" align="left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1 <img src="./images/Gold.png"></td>
                                    <td>Alexia26</td>
                                    <td>3799</td>
                                </tr>
                                <tr>
                                    <td>2 <img src="./images/Silver.png"></td>
                                    <td>AndreaJ</td>
                                    <td>3788</td>
                                </tr>
                                <tr>
                                    <td>3 <img src="./images/Copper.png"></td>
                                    <td>Edwina666</td>
                                    <td>3784</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Evangeline347</td>
                                    <td>3781</td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>C8763</td>
                                    <td>3777</td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Hilary88</td>
                                    <td>3774</td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>KimberleyAQ</td>
                                    <td>3771</td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>LindsayAPPLE</td>
                                    <td>3769</td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Modesty96</td>
                                    <td>3767</td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Rosalind761</td>
                                    <td>3761</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection