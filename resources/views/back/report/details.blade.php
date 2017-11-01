@extends('layout.master')

@section('title', 'Details')

@section('content')
<div class="wrapper wrapper-content">
  <div class="col-md-9">
    @if(!empty($users))
    <div class="ibox float-e-margins">
      <div class="ibox-title">
          <h3>Details</h3>
      </div>

      <div class="ibox-content profile-content">
        <h4><strong>{{$users->fname." ".$users->lname}}</strong><span> ({{$users->uname}})</span></h4>
        <p><i class="fa fa-map-marker"></i> {{$users->city}}, {{$users->country}}</p>
        <p><i class="fa fa-envelope"></i> {{$users->email}}</p>
        <p><i class="fa fa-phone"></i> {{$users->phone_number}}</p>
        <hr>
        <p>{{$users->address}}</p>

        <div class="user-button">
            <div class="row">
                <div class="col-md-6">
                  <a class="btn btn-primary" href="{{route('download', $users->id)}}">Download as PDF</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection
