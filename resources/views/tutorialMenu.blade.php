<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .thumbnail
        {
            width:100px;
            height:29px;
            margin:5px;
            background-color: #CCCCCC;
        }

        .caption
        {
            margin-left:50px;
        }
        .cn{
            -moz-box-shadow: 3px 3px 4px #000;
            -webkit-box-shadow: 3px 3px 4px #000;
            box-shadow: 3px 3px 4px #000;
        }

    </style>

</head>

<body>

<div id="wrapper">
    @extends('layouts.app')

    @section('content')
        <div class="col-md-4 col-sm-6 col-xs-12">
            <a href="/tutorial/conditional">
                <div class="thumbnail"><br>
                    <div class="caption">
                        <h1>Tutorial 1</h1>
                        <h3>Conditional Statements</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <a href="/ifTutorual">
                <div class="thumbnail"><br>
                    <div class="caption">
                        <h1>Tutorial 2</h1>
                        <h3>Array</h3>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <a href="/ifTutorual">
                <div class="thumbnail"><br>
                    <div class="caption">
                        <h1>Tutorial 1</h1>
                        <h3>Loop</h3>
                    </div>
                </div>
            </a>
        </div>

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
    $(document).ready(function() {
        $(".thumbnail").hover(function(){ $(this).toggleClass('cn'); });
    });
</script>
</body>

</html>
