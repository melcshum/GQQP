<!DOCTYPE html>
<html lang="en">

<head>

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

</head>

<body>

<div id="wrapper">
@extends('layouts.app')

@section('content')

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
@endsection

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
