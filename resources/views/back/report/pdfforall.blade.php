<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>All Users</title>
  </head>
  <body>
    <div id="wrapper">
      <h1>All Users</h1>
        <table>
          <thead>
            <tr>
                <th>Serial</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
            </tr>
          </thead>
          <tbody>
            <?php $count = 0 ?>
            @foreach($users as $user)
              <tr class="gradeA">
                <td>{{($count+=1)}}</td>
                  <td>{{$user->fname}} {{$user->lname}}</td>
                  <td>{{$user->uname}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->phone_number}}</td>
                  <td>{{$user->address}}</td>
              </tr>
            @endforeach
          </tfoot>
        </table>
        <style type="text/css">
          table{
            border-collapse: collapse;
          }
          table th,tr,td{
            border: 1px solid #000;
            padding: 5px;
          }
        </style>
    </div>
  </body>
</html>
