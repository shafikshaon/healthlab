@extends('layouts.back.master')
@section('title', 'All Diseases')

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="wrapper wrapper-content">
          <div class="row">
            <div class="ibox-content">
                <table class="table table-striped table-bordered table-hover dataTables-example" >
                  <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Disease Name</th>
                        <th>Added On</th>
                        <th>Updated On</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $sl = 1; ?>
                    @foreach($diseases as $disease)
                      <tr class="gradeA">
                          <td>{{$sl++}}</td>
                          <td>{{$disease->disease_name}}</td>
                          <td>{{$disease->created_at->diffForHumans()}}</td>
                          <td>{{$disease->updated_at->diffForHumans()}}</td>
                          <td>
                            <a href="{{route('editdisease', [$disease->id])}}" class="btn label label-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a class="btn label label-danger" href="javascript:void()" data-href="{{ route('deletedisease', $disease->id)}}"  data-toggle="modal" data-target="#confirm-delete"  data-toggle="tooltip" title="Delete"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                          </td>
                      </tr>
                    @endforeach
                  </tfoot>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- delete modal -->
  <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">

          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title" id="myModalLabel">Confirm Delete</h4>
          </div>

          <div class="modal-body">
              <p>Do you want to proceed?</p>
              <p class="debug-url"></p>
          </div>

          <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <a class="btn btn-danger btn-ok">Delete</a>
          </div>
      </div>
    </div>
  </div>

@endsection
