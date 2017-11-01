<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Details</title>
  </head>
  <body>
    <div id="wrapper">
        <div id="page-wrapper" class="gray-bg">
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
            </div>
          </div>
          @endif
        </div>
    </div>
  </body>
</html>
