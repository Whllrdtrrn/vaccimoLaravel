<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

@extends('system._layouts.main')
@section('content')
<div class="main-content  container-fluid">
   <div class="row">
      <div class="col-md-8">
         @include('system._components.notifications')
         <div class="panel panel-default panel-border-color panel-border-color-success"style="
            width: 150%;height: auto;">
            <div class="panel-body"style="width: 100%;">
            
               <div class="w3-row-padding w3-margin-bottom">
                  <div class="w3-quarter ">
                     <div class="w3-container w3-red w3-text-white w3-padding-16">
                        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
                        <div class="w3-right">
                           <h3>{{$totalId}}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Total Users 
                        </h4>
                     </div>
                  </div>
                  <div class="w3-quarter">
                     <div class="w3-container w3-indigo w3-padding-16">
                        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
                        <div class="w3-right">
                        @foreach ($projects as $project)
                           <h3>{{$project->views}}</h3>
                         @endforeach
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Total Views</h4>
                     </div>
                  </div>
                  <div class="w3-quarter">
                     <div class="w3-container w3-blue w3-padding-16">
                        <div class="w3-left"><i class="fa fa-user w3-xxxlarge"></i></div>
                        <div class="w3-right">
                           <h3>{{$admin}}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Total Admin</h4>
                     </div>
                  </div>
                  <div class="w3-quarter">
                     <div class="w3-container w3-teal w3-padding-16">
                        <div class="w3-left"><i class="fa fa-sticky-note-o	 w3-xxxlarge"></i></div>
                        <div class="w3-right">
                           <h3>{{$totalSurvey}}</h3>
                        </div>
                        <div class="w3-clear"></div>
                        <h4>Total Survey</h4>
                     </div>
                  </div>
               </div>
               <div class="row "style=" margin-top: 20px;">
                  <div class="card w3-white">
                     <canvas id="myChart" style="width:100%;max-width:800px;"></canvas>
                  </div>
               </div>
               <div class="row "style=" margin-top: 20px;">
                  <div class="card w3-white">
                     <div class="panel-body">
                        <table class="table table-hover table-wrapper  text-center"style="text-transform: capitalize;padding-left:12px ">
                           <thead >
                              <tr >
                                 <th >No.</th>
                                 <th style="text-align:left">full name</th>
                                 <th>age</th>
                                 <th>gender</th>
                                 <th>date/time</th>
                              </tr>
                           </thead>
                           <tbody style="text-transform: capitalize;">
                              <?php $number = 1; ?>
                              @forelse($dashboard_item as $index )
                              <tr>
                                 <td class="cell-detail"> 
                                    <span>{{$number}}</span>
                                 </td>
                                 <td class="cell-detail  text-left"> 
                                    <span>{{$index->name}}</span>
                                 </td>
                                 <td class="cell-detail"> 
                                    <span>{{$index->age}}</span>
                                 </td>
                                 <td class="cell-detail"> 
                                    <span>{{$index->gender}}</span>
                                 </td>
                                 <td class="cell-detail text-center"> 
                                    <span>{{$index->updated_at}}</span>
                                 </td>
                              </tr>
                              <?php $number++; ?>
                              @empty
                              @endforelse
                           </tbody>
                        </table>
                        <hr>
                        <div class="footer ">
                        <div class=" text-center">
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

<style>
   tr:nth-child(even) {
   background-color: #dddddd;
   }
   * {
   box-sizing: border-box;
   }
   body {
   font-family: Arial, Helvetica, sans-serif;
   }
   /* Float four columns side by side */
   .column {
   float: left;
   width: 25%;
   padding: 0 10px;
   }
   /* Remove extra left and right margins, due to padding */
   .row {margin: 0 -5px;}
   /* Clear floats after the columns */
   .row:after {
   content: "";
   display: table;
   clear: both;
   }
   /* Responsive columns */
   @media screen and (max-width: 600px) {
   .column {
   width: 100%;
   display: block;
   margin-bottom: 20px;
   }
   }
   /* Style the counter cards */
   .card {
   box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
   padding: 16px;
   text-align: center;
   background-color: #f1f1f1;
   }
</style>
<script>
   var xValues = ["muscle_ache", "headache", "fever", "redness", "swelling", "tenderness", "warmth", "itch", "induration", "feverish", "chills", "join_pain", "fatigue", "nausea", "vomiting"];
   var yValues = [{{$muscle_ache}},{{$headache}},{{$fever}},{{$redness}},{{$swelling}},{{$tenderness}},{{$warmth}},{{$itch}},{{$induration}},{{$feverish}},{{$chills}},{{$join_pain}},{{$fatigue}},{{$nausea}},{{$vomiting}}];
   var barColors = ["red", "green","blue","orange","brown","yellow","cyan","black","Gray","DarkRed","Pink","MediumVioletRed","Coral","Lavender","Violet"];
   
   new Chart("myChart", {
     type: "bar",
     data: {
       labels: xValues,
       datasets: [{
         backgroundColor: barColors,
         data: yValues
       }]
     },
     options: {
       legend: {display: false},
       title: {
         display: true,
         text: "Side Effect of Vaccine 2022"
       }
     }
   });
   
   var today = new Date();
   
   var date = (today.getMonth()+1)+'-'+today.getDate()+'-'+today.getFullYear();
   document.getElementById("date").innerHTML = date;
</script>
@stop