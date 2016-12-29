<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>

<div id="wrapper">
@extends('layouts.app')

@section('content')

    <!-- /.col-lg-12 -->
    <div class="col-lg-12">

        <div style="text-align:center">
            <font size="5" >
                Leaderboard was divided into 4 divisions <br><b>(platinum, gold, silver, bronze)</b><br>
                which the top 25% of players will assign to the Platinum Division,<br>
                26%-50% will be Gold Division ,<br>51%-75% will be Silver Division <br>
                and the others players will be Bronze Division.<br><br>Enjoy the Game!

            </font>
        </div>

    </div>
    <hr>
    <h2 class="page-header"></h2>
    <p>
        <br />
        <br />  <br /> <br /> <br />
    </p>

    <div style="text-align:center">
        <a onclick="setTimeout(myFunction, 5000);"  data-toggle="modal" data-target="#myModal" class="btn btn-info" href="#">Start Game</a>
        <a href="#" class="btn btn-danger" >Cancel</a>



    </div>
    <div>
        <input id="confirm" type="button" value="Confirm"/>
        <h3>The game will start in <label id="sss">5</label> second!</h3>
    </div>



    <script type="text/javascript">
        function myFunction(){
////your other code
///
///
            window.location="/challenge";//at the end

        }
    </script>


    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-6">
                                <h3>The game will start in <span id="sss">5</span> second!</h3>


                            </div>
                            <div>


                                <script type="text/javascript">

                                    var sec2 =6;

                                    window.setTimeout("update()",1000);

                                    function update()
                                    {

                                        sec2--;
                                        if(sec2<0){
                                            sec2=0;
                                        }

                                        document.getElementById('yy004').innerHTML="<FONT SIZE=5 FACE='arial' COLOR=Black>"+sec2;;
                                        window.setTimeout("update()",1000);
                                    }
                                </script>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

</div>
</div>
<!-- /.row -->

<!-- /.row -->
<div class="row">
    <div class="col-lg-8">

        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
@endsection
    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <script src="../vendor/jslib/jquery-1.11.1.js"></script>
    <script >

        $(document).ready(function(){
            $("#Progress").hide();
            $("#Bar").hide();
            $("#confirm").click(function(){
                var elem = $("#sss").text();
                var width = 5;
                var id = setInterval(frame, 1000);
                function frame() {
                    if (width <= 0) {
                        alert("Finish!");
                        location.replace("index.html");
                    } else {
                        width--;
                        $("#sss").text(width);
                    }
                }
            });
        });
    </script>

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

    <script type="text/javascript"src="../jslib/jquery-1.11.1.js"></script>
    <script type="text/javascript"src="../vendor/jslib/jquery-1.6.js"></script>


</body>

</html>
