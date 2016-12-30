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


     { body:'Alva24 ',Mark:'4020',Rank:'gold',number:'G1'},
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
    { body:'AndreaJ ',Mark:'3788',Rank:'copper',number:'C2'},
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




            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper d-->
@endsection
