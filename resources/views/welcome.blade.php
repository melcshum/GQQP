
<style type="text/css">
    .thumbnail{
        width:300px;
        height:300px;

    }

</style>

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
                    <a href="intro.html">
                    <div class="thumbnail">
                        <i class="fa fa-compass" aria-hidden="true" style="font-size:60px;color:gold"></i>
                        <div class="caption">
                            <h3>Goal</h3>
                            <p>show the goal of this system</p>

                        </div>
                    </div>
                    </a>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <a href="intro.html">
                    <div class="thumbnail">
                        <img src="./images/Test-icon.png" alt='Thumbnail2' class="img-thumbnail img-responsive" width="90px" height="90px"/>
                        <div class="caption">
                            <h3>Why?</h3>
                            <p>Why you need to use this system</p>
                        </div>
                    </div>
                    </a>
                </div>
                    </center>
    <!----------------- Login View -------------------------->
                @else
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="/tutorial">
                        <div class="thumbnail"><br>
                            <font color="#003D79"> <i class="fa fa-book" aria-hidden="true" style="font-size:60px;"></i></font>
                            <div class="caption">
                                <font color="#003D79"><h3>Tutorial Note</h3></font>
                                <font color="#003D79"><p>You can view tutorial and do pratice here</p></font>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="/playMenu">
                        <div class="thumbnail"><br>
                            <font color="#01814A"><i class="fa fa-gamepad" aria-hidden="true" style="font-size:60px;"></i></font>
                                <font color="#01814A"><h3>Play game</h3></font>
                                    <font color="#01814A"><p>You can play different types and topics' game here</p></font>
                                        <font color="#01814A"><p>You can get gold here.</p></font>

                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="/rules">
                        <div class="thumbnail"><br>
                            <font color="#CE0000"><i class="fa fa-paper-plane" aria-hidden="true" style="font-size:60px;"></i></font>
                            <div class="caption">
                                <font color="#CE0000"><h3>Challenge</h3></font>
                                <font color="#CE0000"><p>You can play challenging game here</p></font>
                                    <font color="#CE0000"><p>You can get gold and point here.</p></font>
                        </div>
                        </div>
                        </a>
                    </div>
                    {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                        {{--<a href="intro.html">--}}
                        {{--<div class="thumbnail"><br>--}}
                            {{--<i class="fa fa-bug" aria-hidden="true" style="font-size:60px;"></i>--}}
                            {{--<div class="caption">--}}
                                {{--<h3>Debug tool</h3>--}}
                                {{--<p>You can use debug tool here</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-4 col-sm-6 col-xs-12">--}}
                        {{--<a href="intro.html">--}}
                        {{--<div class="thumbnail"><br>--}}
                            {{--<i class="fa fa-users" aria-hidden="true" style="font-size:60px;"></i>--}}
                            {{--<div class="caption">--}}
                                {{--<h3>Forum</h3>--}}
                                {{--<p>You can chat with other users here</p>--}}

                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="/ranking">
                        <div class="thumbnail"><br>
                            <i class="fa fa-trophy" aria-hidden="true" style="font-size:60px;"></i>
                            <div class="caption">
                                <h3>Ranking</h3>
                                <p>You can view the ranking here</p>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="/profile">
                            <div class="thumbnail"><br>
                                <i class="fa fa-users" aria-hidden="true" style="font-size:60px;"></i>
                                <div class="caption">
                                    <h3>Profile</h3>
                                    <p>You can view the profile here</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <a href="/shop">
                            <div class="thumbnail"><br>
                                <i class="fa fa-shopping-cart" aria-hidden="true" style="font-size:60px;"></i>
                                <div class="caption">
                                    <h3>Shop</h3>
                                    <p>You can use gold to buy items to use in the game here</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
            </div>
        </div>
        <!-- /.row -->
    </div>
@endsection
