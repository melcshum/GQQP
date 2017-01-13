@extends('layouts.app')

@section('content')
    <div id="page-wrapper">
        <div class="row-fluid">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <center>
                @if (Auth::guest())
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <a href="/register"><img src="./images/join.png" name="join" width="900" height="500" ></a>
                    </div>
                <br>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="thumbnail">
                        <i class="fa fa-compass" aria-hidden="true" style="font-size:60px;color:gold"></i>
                        <div class="caption">
                            <h3>Goal</h3>
                            <p>show the goal of this system</p>
                            <p><a href="intro.html" class="btn btn-primary" role="button" style="float: right;">Go</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="thumbnail">
                        <img src="./images/Test-icon.png" alt='Thumbnail2' class="img-thumbnail img-responsive" width="90px" height="90px"/>
                        <div class="caption">
                            <h3>Why?</h3>
                            <p>Why you need to use this system</p>
                            <p><a href="intro.html" class="btn btn-primary" role="button" style="float: right;">Go</a>
                        </div>
                    </div>
                </div>
                    </center>
    <!----------------- Login View -------------------------->
                @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail"><br>
                            <i class="fa fa-book" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Tutorial Note</h3>
                                <p>You can view tutorial and do pratice here</p>
                                <p><a href="/ifTutorual" class="btn btn-primary" role="button" style="float: right;">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail"><br>
                            <i class="fa fa-gamepad" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Play game</h3>
                                <p>You can play different types and topics' game here</p>
                                <p>You can get gold here.</p>
                                <p><a href="/playMenu" class="btn btn-primary" role="button" style="float: right;">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail"><br>
                            <i class="fa fa-paper-plane" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Challenge</h3>
                                <p>You can play challenging game here</p>
                                <p>You can get gold and point here.</p>
                                <p><a href="/rules" class="btn btn-primary" role="button" style="float: right;">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail"><br>
                            <i class="fa fa-bug" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Debug tool</h3>
                                <p>You can use debug tool here</p>
                                <p><a href="intro.html" class="btn btn-primary" role="button" style="float: right;">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail"><br>
                            <i class="fa fa-users" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Forum</h3>
                                <p>You can chat with other users here</p>
                                <p><a href="intro.html" class="btn btn-primary" role="button" style="float: right;">Go</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="thumbnail"><br>
                            <i class="fa fa-trophy" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Ranking</h3>
                                <p>You can view the ranking here</p>
                                <p><a href="/ranking" class="btn btn-primary" role="button" style="float: right;">Go</a>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
