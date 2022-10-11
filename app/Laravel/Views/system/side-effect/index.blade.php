@extends('system._layouts.main')

@section('content')
<div class="main-content container-fluid">
  <div class="row">
    <div class="col-md-12">
      @include('system._components.notifications')
      <div class="panel panel-default panel-table  panel-border-color panel-border-color-success">
        <div class="panel-heading">Record Data
          <div class="tools dropdown">
            <a href="#" type="button" data-toggle="dropdown" class="dropdown-toggle"><span class="icon mdi mdi-more-vert"></span></a>
            <ul role="menu" class="dropdown-menu pull-right">
             
            </ul>
          </div>
        </div>
        
        <div class="panel-body"style="overflow-x:auto;width:100% ">
        <div class="col-md-12" style="max-height: 300px; overflow-y: auto;">
          <table class="table table-hover table-wrapper "style="text-transform: capitalize;padding-left:12px ">
            <thead>
              <tr>
                <th >No.</th>
                <th >Name</th>
                <th >Muscle ache</th>
                <th >Headache</th>
                <th >fever</th>
                <th>redness</th>
                <th>swelling</th>
                <th>tenderness</th>
                <th>warmth</th>
                <th>itch</th>
                <th>induration</th>
                <th>feverish</th>
                <th>chills</th>
                <th>join pain</th>
                <th>fatigue</th>
                <th>nausea</th>
                <th>vomiting</th>
                <th>date/time</th>
                <th>Action</th>



              </tr>
            </thead>
            <tbody >
            <?php $number = 1; ?>
              @forelse($sideeffect_item as $index )
              <tr>
              <td class="cell-detail"> 
                  <span>{{$number}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->name}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->muscle_ache}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->headache}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->fever}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->redness}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->swelling}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->tenderness}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->warmth}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->itch}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->induration}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->feverish}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->chills}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->join_pain}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->fatigue}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->nausea}}</span>
                </td>
                <td class="cell-detail"> 
                  <span>{{$index->vomiting}}</span>
                </td>
                <td class="cell-detail text-center"> 
                  <span>{{$index->updated_at}}</span>
                  
                </td>

                <td class="actions">
                    <div class="btn-group btn-hspace">
                      <button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle" aria-expanded="false"><i class="icon icon-left mdi mdi-settings"></i> Actions <span class="icon-dropdown mdi mdi-chevron-down"></span></button>
                      <ul role="menu" class="dropdown-menu">
                        <li><a class="action-delete" href="#" data-url="{{route('system.side_effect.destroy',[$index->id])}}" data-toggle="modal" data-target="#confirm-delete" title="Remove Record">Remove Record</a></li>
                      </ul>
                    </div>
                </td>

              </tr>
              <?php $number++; ?>
              @empty
              <td colspan="6" class="text-left"><i>No record found yet.</i> </td>
              @endforelse
            </tbody>
          </table>
          
        </div>
        
        </div>
      
      </div>

    </div>
  </div>
</div>
@stop
@section('page-modals')
<div id="confirm-delete" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h1 class="modal-title">Confirm your action</h1>
      </div>

      <div class="modal-body">
        <div role="alert" class="alert alert-warning alert-icon alert-icon-border alert-dismissible">
          <div class="icon"><span class="mdi mdi-close-circle-o"></span></div>
          <div class="message">
            <strong>Warning!</strong> This action can not be undone.
          </div>
        </div>
        <h3 class="text-semibold">Are you sure ...</h3>
        <p>You are about to delete the record?</strong></p>

        <hr>

        <h3 class="text-semibold">What is this message?</h3>
        <p>This dialog appears everytime when the chosen action could hardly affect the system. Usually, it occurs when the system is issued a delete command or upon submission of your task of the day.</p>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-link" data-dismiss="modal">Cancel</button>
        <a href="#" data-loading-text="<i class='icon-spinner2 spinner position-left'></i> Removing record ..." class="btn btn-primary btn-raised btn-loading" id="btn-confirm-delete">Delete Record</a>
      </div>
    </div>
  </div>
</div>
@stop

@section('page-styles')
<link rel="stylesheet" type="text/css" href="{{asset('assets/lib/datetimepicker/css/bootstrap-datetimepicker.min.css')}}"/>
@stop
@section('page-scripts')
<style>
tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<script src="{{asset('assets/lib/moment.js/min/moment.min.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/lib/datetimepicker/js/bootstrap-datetimepicker.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
  $(function(){
    $('.datepicker').datetimepicker({autoclose: true})
    $(".action-delete").on("click",function(){
      var btn = $(this);
      $("#btn-confirm-delete").attr({"href" : btn.data('url')});
    });

    $('#btn-confirm-delete').on('click', function() {
      $('.btn-link').hide();
          $('.btn-loading').button('loading');
          $('#target').submit();
     });

  });
</script>
@stop



