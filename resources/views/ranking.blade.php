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