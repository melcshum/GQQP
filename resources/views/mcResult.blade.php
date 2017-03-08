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
    <div id="correct"><img src="../images/correct.gif" width="100%" height="100%"/></div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script>
 function show() {
        document.getElementById("correct").style.display = "block";
         document.getElementById("wrapper").style.display = "none";
        setTimeout("hide()", 2000);  // 5 seconds
    }
    function hide() {
        document.getElementById("correct").style.display = "none";
         document.getElementById("wrapper").style.display = "block";
    }
$(document).ready(function(){
  show();
})
</script>
@extends('layouts.app')

@section('content')

<div id="wrapper">

    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <pre class="joe"><center><h4><label>Gold:<u>131</u></label>    <label>Knowledge:<u>10</u></label>    <label>Timer: 0:31</label></h4></center></pre>
            </div>
        </div>
    </div>
    <div class="container">

        <div id="Mainp"class="row">
            <h3><label>2</label>/20</h3>
            <pre><h4>Question: Write a Java program by using two for loops to product the output shown below"</h4></pre>
            <div id="Question" class="col-md-8 col-sm-8 col-xs-8">
                <h2>Your Answer</h2>
                <pre>public class star{
	public static void main (String [] args){
		printStars();
	}

	static void printStars(){
		int i,j;
		for<input type="text" disabled>{
			System.out.println("");
			for<input type="text" disabled>{
				System.out.print("*");
			}
		}
	}
}</pre>
                a.<p>(i=0;i<=6;i++)</p>
                <p>(j=0;j<=7-i;j++)</p>
            </div>

            <div id="Answer" class="col-md-8 col-sm-8 col-xs-8">
                <h2>Correct Answer</h2>
                a.<p>(i=0;i<=6;i++)</p>
                <p>(j=0;j<=7-i;j++)</p>
                <pre>public class star{
	public static void main (String [] args){
		printStars();
	}

	static void printStars(){
		int i,j;
		for(i=0;i<=6;i++){
			System.out.println("");
			for(j=1;j<=7-i;j++){
				System.out.print("*");
			}
		}
	}
}</pre>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <div class="container">
        <ul class="nav" id="side-menu">

            <li>
                <a href="#" class="btn" style="float: left;">01</a>
            </li>

            <li>
                <a href="q2.html" class="btn active" style="float: left;">02</a>
            </li>
            <li>
                <a href="q3.html" class="btn" style="float: left;">03</a>
            </li>

            <li>
                <a href="q4.html" class="btn" style="float: left;">04</a>
            </li>
            <li>
                <a href="q5.html" class="btn" style="float: left;">05</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">06</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">07</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">08</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">09</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">10</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">11</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">12</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">13</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">14</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">15</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">16</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">17</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">18</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">19</a>
            </li>
            <li>
                <a href="#" class="btn" style="float: left;">20</a>
            </li>
            <li>
                <p align="right"><a href="/question20"><input type="button" class="btn btn-warning" value="Next question"></a></p>
            </li>
        </ul>
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
        var s = 60;
        var id = setInterval(frame, 1000);
        function frame(){
            if(s<=30){
                $("#hits").show();
            }else{
                s--;
            }
        }
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
