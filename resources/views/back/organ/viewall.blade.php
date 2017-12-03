@extends('layouts.back.master')
@section('title', 'All Organs')

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
                        <th>Organ Name</th>
                        <th>Added On</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($organs as $organ)
                      <tr class="gradeA">
                          <td></td>
                          <td>{{$organ->organ_name}}</td>
                          <td>{{$organ->created_at->diffForHumans()}}</td>
                          <td>
                            <a href="{{route('editorgan', [$organ->id])}}" class="btn label label-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="{{route('deleteorgan', [$organ->id])}}" class="btn label label-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
@endsection
