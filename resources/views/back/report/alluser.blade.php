@extends('layout.master')
@section('title', 'All Users')
@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
          <div class="ibox-content">
              <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                  <tr>
                      <th>Full Name</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Address</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($users as $user)
                    <tr class="gradeA">
                        <td>{{$user->fname}} {{$user->lname}}</td>
                        <td>{{$user->uname}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->phone_number}}</td>
                        <td>{{$user->address}}</td>
                        <td><a class="btn btn-sm btn-primary"  href="{{route('details', $user->id)}}"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
                    </tr>
                  @endforeach
                </tfoot>
              </table>

              <div class="user-button">
                  <div class="row">
                      <div class="col-md-6">
                        <a class="btn btn-primary" href="{{route('download')}}">Download as PDF</a>
                      </div>
                  </div>
              </div>
          </div>
        </div>
    </div>
@endsection
