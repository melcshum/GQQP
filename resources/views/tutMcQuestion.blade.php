<!DOCTYPE html>
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
//    $(document).ready(function(){
//        $("#hits").hide();
//        $("#Next").click(function(){
//        });
//
//        $(function(){
//
//            $('.timer-quick').startTimer();
//
//            $('.timer').startTimer({
//                onComplete: function(){
//                    console.log('Complete');
//                }
//            });
//
//            $('.timer-pause').startTimer({
//                onComplete: function(){
//                    console.log('Complete');
//                },
//                allowPause: true
//            });
//        })
//    });
</script>
<script src="../dist/js/jqueryTime.js"></script>
<script src="../dist/js/jquery.simple.timer.js"></script>

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
        #Mc{
            width: 80%;
        }

    </style>

</head>

<body>
@extends('layouts.app')

@section('content')

<div id="wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <pre class="joe"><center><h4><label>Gold:<u>0</u></label>    <label>Knowledge:<u>0</u></label>    <label>Type:class</label>    <label>Level:<u>1</u></label>    <label>Timer: </label><label id="asd" class="timer" data-seconds-left="60"> </label></h4></center></pre>
            </div>
        </div>
    </div>
    <h3><p align="right">item</p></h3>
    <table border="1" align="right">
        <tr>
            <td>
                <img src="./images/the-meaning-of-D.jpg">
            </td>
            <td>
                x1
            </td>
        </tr>
        <tr>
            <td>
                <img src="./images/50-50-movie_61.jpg">
            </td>
            <td>
                x1
            </td>
        </tr>
        <tr>
            <td>
                <img src="./images/hO01DAyn.png">
            </td>
            <td>
                x1
            </td>
        </tr>
    </table>
    <div class="container">

        <div id="Mainp"class="row">
            <h3><label>2</label>/20</h3>
            <div id="Question" class="col-md-6 col-sm-6 col-xs-6">
                <h2>Question</h2>
                <p><label>Write a Java program by using two for loops to product the output shown below:</label></p>
                <hr>
                <h2>Output</h2>
                <img src="./images/ans2.JPG">
                <hr>
                <ol id="hits">
                    <li>here are 7 line</li>
                    <li>The first line will print 7 * in line1</li>
                    <li>The second line will print 6 * in line2</li>
                </ol>
            </div>

            <div id="Answer" class="col-md-6 col-sm-6 col-xs-6">
                <h2>Answer</h2>
                <pre>public class star{
	public static void main (String [] args){
		printStars();
	}

	static void printStars(){
		int i,j;
		for<input type="text">{
			System.out.println("");
			for<input type="text">{
				System.out.print("*");
			}
		}
	}
}</pre>
                <table id="Mc">
                    <tr>
                        <td>
                            <input type="radio">a.<p>(i=0;i<=6;i++)</p>
                            <p>(j=0;j<=7-i;j++)</p>
                            <input type="radio">b.<p>(i=0;i<=6;i++)</p>
                            <p>(j=0;j<=7-i;j++)</p>
                        </td>
                        <td>
                            <input type="radio">c.<p>(i=0;i<=6;i++)</p>
                            <p>(j=0;j<=7-i;j++)</p>
                            <input type="radio">d.<p>(i=0;i<=6;i++)</p>
                            <p>(j=0;j<=7-i;j++)</p>
                        </td>
                    </tr>

                </table>
                <p id="test"align="right" valign="bottom"><a href="/mcResult"><input type="button" id="Next" class="btn btn-primary" value="Next"></a></p>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <div class="container">
        <ul class="nav" id="side-menu">
            <li>
                <p align="right"><a href="/mcResult"><input type="button" class="btn btn-warning" value="Ship"></a></p>
            </li>
        </ul>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->
@endsection
</body>

</html>
