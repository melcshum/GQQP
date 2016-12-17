<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <style>
        .thumbnail{
            width:300px;
            height:300px;
        }
        pre.joe{
            padding-left: 1.8em }
        #Question{
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        #Answer{
            background-color: #f5f5f5;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        #Mainp [class*="col-"] {
            float: none;
            display: table-cell;
            vertical-align: top;
        }
        #test{
            position: absolute;
            right:    0;
            bottom:   0;
        }
        .jst-hours {
            float: left;
        }
        .jst-minutes {
            float: left;
        }
        .jst-seconds {
            float: left;
        }
        .jst-clearDiv {
            clear: both;
        }
        .jst-timeout {
            color: red;
        }

    </style>

    <title>Learning Java |FYP</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

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
            <a class="navbar-brand" href="#">Fill in</a>
            <a class="navbar-brand" href="/">Back to Menu</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> joechoy123<i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a data-toggle="modal" data-target="#SignUp"><i class="fa fa-user fa-fw"></i> Leave</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <!-- /.navbar-static-side -->
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <pre class="joe"><center><h4><label>Total Result</label></h4></center></pre>
            </div>
        </div>
    </div>
    <div class="container">

        <div id="Mainp"class="row">
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Question</th>
                    <th>Result</th>
                    <th>Gold</th>
                    <th>Knowledge</th>
                    <th>Finish Time</th>
                </tr>
                <tbody>
                <tr>
                    <td>1</td>
                    <td><font color="green">Ture</font></td>
                    <td>131</td>
                    <td>10</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td><font color="green">Ture</font></td>
                    <td>120</td>
                    <td>10</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td><font color="green">Ture</font></td>
                    <td>111</td>
                    <td>10</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td><font color="green">Ture</font></td>
                    <td>100</td>
                    <td>10</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td><font color="green">Ture</font></td>
                    <td>150</td>
                    <td>10</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>6</td>
                    <td><font color="green">Ture</font></td>
                    <td>180</td>
                    <td>12</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td><font color="green">Ture</font></td>
                    <td>100</td>
                    <td>11</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>8</td>
                    <td><font color="green">Ture</font></td>
                    <td>100</td>
                    <td>14</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>9</td>
                    <td><font color="green">Ture</font></td>
                    <td>101</td>
                    <td>11</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>10</td>
                    <td><font color="green">Ture</font></td>
                    <td>111</td>
                    <td>11</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>11</td>
                    <td><font color="red">False</font></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>12</td>
                    <td><font color="green">Ture</font></td>
                    <td>130</td>
                    <td>11</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>13</td>
                    <td><font color="red">False</font></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td><font color="green">Ture</font></td>
                    <td>140</td>
                    <td>12</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>15</td>
                    <td><font color="red">False</font></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>16</td>
                    <td><font color="red">False</font></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>17</td>
                    <td><font color="green">Ture</font></td>
                    <td>100</td>
                    <td>11</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>18</td>
                    <td><font color="red">False</font></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>19</td>
                    <td><font color="red">False</font></td>
                    <td>0</td>
                    <td>0</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td>20</td>
                    <td><font color="green">Ture</font></td>
                    <td>100</td>
                    <td>15</td>
                    <td>0:30</td>
                </tr>
                <tr>
                    <td colspan="5">
                        <center>Total Gold:1400</center>
                    </td>
                <tr>
                <tr>
                    <td colspan="5">
                        <center>Total Finish Time:7:15</center>
                    </td>
                <tr>
                </tbody>
                </thead>
            </table>
        </div>
        <!-- /.row -->
    </div>

    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- Morris Charts JavaScript -->
<script src="../vendor/raphael/raphael.min.js"></script>
<script src="../vendor/morrisjs/morris.min.js"></script>
<script src="../data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>
<script type="text/javascript" src="../js/jquery-1.6.js"></script>
<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $("#hits").hide();
        $("#login").click(function(){
        });
    });
</script>
<script src="../js/jqueryTime.js"></script>
<script src="../js/jquery.simple.timer.js"></script>
<script>
    $(function(){

        $('.timer-quick').startTimer();

        $('.timer').startTimer({
            onComplete: function(){
                console.log('Complete');
            }
        });

        $('.timer-pause').startTimer({
            onComplete: function(){
                console.log('Complete');
            },
            allowPause: true
        });
    })
</script>
</body>

</html>
