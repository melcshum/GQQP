<!DOCTYPE html>
<html lang="en">

<head>

    <style type="text/css">
        .self{
            background: #F00;
        }
    </style>

</head>

<body>
@extends("layouts.app")

@section('content')
    <style>
        .tab-pane{
            background-color:#ffffff;
        }
    </style>

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
                        <div class="tab-pane fade in active" id="Platinum">
                            <center>
                                <label id="id">Platinum</label>
                            </center>
                            <table class="table table-striped" align="left">
                                <input type="hidden" name="userID" id="userID" value="{{Auth::user()->id}}">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Mark</th>
                                </tr>
                                </thead>
                                <tbody>
                                    <?php $index = 1; ?>
                                @foreach($users as $user){
                                    <tr>
                                        <td>
                                            <?= $index; $index++ ?>
                                        </td>
                                        <td>
                                            <label id="id" value="{{$user -> id}}">{{$user -> name}}</label>
                                        </td>
                                        <td>
                                            <label>{{$user -> knowledge}}</label>
                                        </td>
                                    </tr>
                                }
                                @endforeach
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

<!-- JavaScripts -->
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
<!-- C_bar JavaScript-->
<script src="../dist/js/C_bar.js"></script>
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
<script type="text/javascript" language="javascript">
    $(document).ready(function(){
        $('tr').each(function(){
            if($('#userID') == $('#id')){
                alert('here');
                $(this).addClass('self').sibling().removeClass('self');
            }
        });
//            $('table').on('click', 'tr', function(){
//               $(this).addClass('self').sibling().removeClass('self');
//            });
    });
</script>

</body>

</html>
