<!DOCTYPE html>
<html lang="en">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<style>
	.thumbnail{
   width:300px;
   height:300px;
}
	</style>

    <title>Learning Java |FYP</title>

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
                <a class="navbar-brand" href="index.html">FYP</a>
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

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a data-toggle="modal" data-target="#Explanation"><i class="fa fa-gamepad   fa-fw"></i> Game</a>
                        </li>
                        <li>
                            <a href="intro.html"><i class="fa fa-table fa-university  "></i>Learning</a>
                        </li>
                        <li>
                            <a href="Rank.html"><i class="fa fa-edit fa-list-ol"></i> Rank</a>
                        </li>
						<li>
                            <a href="#"><i class="fa fa-edit fa-comments"></i> Fourm</a>
                        </li>
						<li>
                            <a data-toggle="modal" data-target="#question_type"><i class="fa fa-edit fa-pencil"></i> Send Question</a>
                        </li>
                        <li>
                             <a href="redemption.html"><i class="fa fa-gift fa-pencil"></i> Redemption</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row-fluid">
		<div class="col-md-12 col-sm-12 col-xs-1">
			 <div id="app">
		<ul id="myTab" class="nav nav-tabs">
  <li>
  <a href="" @click.prevent="filter1('')" data-toggle="tab">All</a>
    </li>
    <li>
    <a href="" @click.prevent="filter1('platinum')" data-toggle="tab">Platinum</a>
    </li>
    <li>
      <a href="" @click.prevent="filter1('gold')" data-toggle="tab">Gold</a>
    </li>
    <li>
     <a href="" @click.prevent="filter1('silver')" data-toggle="tab">Silver</a>
</li>
   <li>
      <a href="" @click.prevent="filter1('copper')" data-toggle="tab">Copper</a>
</li>
 </ul>
 
   
				
	<table border="0" class="table table-striped" align="center">
    <tr>
  <th colspan="3" v-bind="task in tasks "><center>{{task.Rank}}</center></th>

</tr>
<tr>
	<th>#</th>
	<th>Name</th>
	<th>Mark</th>
</tr>
  <tr v-for="task in tasks | filterBy filterText in 'Mark'|filterBy filterText1 in 'Rank'">
   <td width="250">{{task.number}}</td>
   <td width="400"> {{task.body}}</td>
   <td width="200">{{task.Mark}}</td>

        </table>
  
  </th>
</tr>
</table>

</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.17/vue.min.js"></script>
<script>

new Vue({
  el: '#app',
  data: {
    tasks:[
    { body:'joechoy333',Mark:'4966',Rank:'platinum',number:'P1'},
    { body:'queenie222',Mark:'4555',Rank:'platinum',number:'P2'},
    { body:'Tab555',Mark:'4200',Rank:'platinum',number:'P3'},
    { body:'VHB21',Mark:'4199',Rank:'platinum',number:'P4'},
    { body:'KEN001',Mark:'4180',Rank:'platinum',number:'P5'},
    { body:'John56',Mark:'4155',Rank:'platinum',number:'P6'},
    { body:'qwertyuiop',Mark:'4144',Rank:'platinum',number:'P7'},
    { body:'NotebookD',Mark:'4122',Rank:'platinum',number:'P8'},
    { body:'AMY1996',Mark:'4080',Rank:'platinum',number:'P9'},
    { body:'RCSKYP',Mark:'4050',Rank:'platinum',number:'P10'},


     { body:'Alva24	',Mark:'4020',Rank:'gold',number:'G1'},
    { body:'Antony',Mark:'4001',Rank:'gold',number:'G2'},
    { body:'Bill3321',Mark:'3974',Rank:'gold',number:'G3'},
    { body:'Cliff66',Mark:'3965',Rank:'gold',number:'G4'},
    { body:'Earl369',Mark:'3954',Rank:'gold',number:'G5'},
    { body:'EVA001',Mark:'3950',Rank:'gold',number:'G6'},
    { body:'EVA002',Mark:'3944',Rank:'gold',number:'G7'},
    { body:'EVA003',Mark:'3899',Rank:'gold',number:'G8'},
    { body:'EVA004',Mark:'3872',Rank:'gold',number:'G9'},
    { body:'EVA005',Mark:'3854',Rank:'gold',number:'G10'},

    { body:'HaleBBC',Mark:'3850',Rank:'silver',number:'S1'},
    { body:'Harry1245',Mark:'3845',Rank:'silver',number:'S2'},
    { body:'Larry778',Mark:'3843',Rank:'silver',number:'S3'},
    { body:'Matt147',Mark:'3840',Rank:'silver',number:'S4'},
    { body:'Parker478',Mark:'3838',Rank:'silver',number:'S5'},
    { body:'Montague55',Mark:'3837',Rank:'silver',number:'S6'},
    { body:'Roderick48',Mark:'3834',Rank:'silver',number:'S7'},
    { body:'Silvester36',Mark:'3832',Rank:'silver',number:'S8'},
    { body:'Tiffany1887',Mark:'3830',Rank:'silver',number:'S9'},
    { body:'Victor1266',Mark:'3829',Rank:'silver',number:'S10'},

    { body:'Alexia26',Mark:'3799',Rank:'copper',number:'C1'},
    { body:'AndreaJ	',Mark:'3788',Rank:'copper',number:'C2'},
    { body:'Edwina666',Mark:'3784',Rank:'copper',number:'C3'},
    { body:'Evangeline347',Mark:'3781',Rank:'copper',number:'C4'},
    { body:'EC8763',Mark:'3777',Rank:'copper',number:'C5'},
    { body:'Hilary88',Mark:'3774',Rank:'copper',number:'C6'},
    { body:'KimberleyAQ',Mark:'3771',Rank:'copper',number:'C7'},
    { body:'LindsayAPPLE',Mark:'3769',Rank:'copper',number:'C8'},
    { body:'Modesty96',Mark:'3767',Rank:'copper',number:'C9'},
    { body:'Rosalind761',Mark:'3761',Rank:'copper',number:'C10'},
  
    ],
    filterText: '',
    filterText1:''

  },
  methods: {
    filter: function(Mark) {
      this.filterText = Mark;
    },
    filter1: function(Rank) {
      this.filterText1 = Rank;
    }
  }
});

</script>

<script >
Vue.component('tasks',{
  props:['list'],
  
  template:'#tasks-template',


  methods:{
  
   
    
  }
    
    

});
</script>
			<div>	
      </div>
	
		</div>
	</div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

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

	<div class="modal fade" id="question_type" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Send Question</h4>
					</div>
					  <div class="modal-body">
						<p><h4>Please choose the type</h4></p>
							<a href="./bootstrap-markdown-demo-gh-pages/question-LQ.html"><button type="button" class="btn btn-info" id="LQ" name="LQ">Long Question</button></a>
							<a href="./bootstrap-markdown-demo-gh-pages/question-MC.html"><button type="button" class="btn btn-success" id="MC" name="MC">Multiple Choice</button></a>
							<a href="./bootstrap-markdown-demo-gh-pages/question-FILL.html"><button type="button" class="btn btn-primary" id="Filling" name="Filling">Filling</button></a>
					  </div>
				</div>
			</div>
		</div> 
		
		<div class="modal fade" id="Explanation" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Explanation</h4>
					</div>
					  <div class="modal-body">
						<p><h4>How to play?</h4></p>
						<p>	When you click the "Test"and "Exercise" button, we will start this Game. This game have 20 question. If you can not be completed the question in time.<b>(when the level is high, it will more time)</b>
							We have two mode, "Test" and "Exercise", Test mode can get the Mark and Point, but only one time for each day. And Exercise just Unlimited.
						</p>
						<a href="#"><button type="button" class="btn btn-info" id="LQ" name="LQ">Test</button></a>
						<a href="./startbootstrap-sb-admin-2-gh-pages/index.html"><button type="button" class="btn btn-success" id="MC" name="MC">Exercise</button></a>
							
					  </div>
				</div>
			</div>
		</div> 



		
</body>

</html>
