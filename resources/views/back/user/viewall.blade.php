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
                    </tr>
                  @endforeach
                </tfoot>
              </table>
          </div>
        </div>
    </div>
@endsection
