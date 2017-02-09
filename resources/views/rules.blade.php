<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>java learning system</title>

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
                <a class="navbar-brand" href="{{ url('/') }}">
                GQQP
            </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
				<li class="dropdown">
						<a href="index.html">
							<i class="fa  fa-list-alt fa-fw"></i>
						</a>
						<!-- /.dropdown-user -->
				</li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                       <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 minutes ago</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="Profile.html"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="Setting.html"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
        </nav>

            

      
            
        
        
       
 
            
               
                <!-- /.col-lg-12 -->
                <div class="col-lg-12">
                
                               <div style="text-align:center">     
                                    <font size="5" >
                                        <abc>Leaderboard was divided into 4 divisions <br><b>(platinum, gold, silver, bronze)</b> 
                                    which the top 25% of players will assign to the Platinum Division,<br>
                                    26%-50% will be Gold Division ,<br>51%-75% will be Silver Division <br>
                                    and the others players will be Bronze Division.<br><br>Enjoy the Challenge!</abc>
                    
                    </font>
                    </div>
            
             
                 <hr>
             
 <div id="myimageDiv" style="display:none;">
<img src='../images/5sec.gif' width="100%" height="100%">
<br />
   </div>
</div>

<script type="text/javascript">

function showHide(){
//create an object reference to the div containing images

var oImageDiv=document.getElementById("myimageDiv");


//set display to inline if currently none, otherwise to none
oImageDiv.style.display=(oImageDiv.style.display=='none')?'inline':'none';

}
</script>
 <script type="text/javascript">
       function myFunction(){
////your other code
///
///
window.location="/challenge";//at the end

}
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#myBtn").click(function(){
         $("abc").remove();


    });
});
</script>

                    <div style="text-align:center">  
                        <abc>
                         <a onclick="showHide();setTimeout(myFunction, 7500);" id="myBtn" class="btn btn-info" href="#">Start Game</a>
                        <a href="{{ url('/') }}" class="btn btn-danger" >Cancel</a>
                       
                            </abc>
				
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
            </div>
            <!-- /.row -->
           
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-8">
                   
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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
                    alert("Finish!"+width);
                    
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
