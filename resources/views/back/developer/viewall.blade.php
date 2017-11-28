@extends('layouts.back.master')
@section('title', 'All Developers')

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
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Birthdate</th>
                        <th>Added On</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($developers as $developer)
                      <tr class="gradeA">
                          <td>{{$developer->fname}} {{$developer->lname}}</td>
                          <td>{{$developer->uname}}</td>
                          <td>{{$developer->email}}</td>
                          <td>{{$developer->dob}}</td>
                          <td>{{$developer->created_at->diffForHumans()}}</td>
                          <td>
                            <a href="#" class="btn label label-primary"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a href="#" class="btn label label-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <a href="#" class="btn label label-danger"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
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
