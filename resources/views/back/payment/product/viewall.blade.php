@extends('layout.master')
@section('title', 'All Prodcut')

@section('content')
    <div class="wrapper wrapper-content">
        <div class="row">
          <div class="ibox-content">
              <table class="table table-striped table-bordered table-hover dataTables-example" >
                <thead>
                  <tr>
                      <th>Serial</th>
                      <th>Product Name</th>
                      <th>Details</th>
                      <th>Price</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $count = 0 ?>
                  @foreach($products as $product)
                    <tr class="gradeA">
                        <td>{{($count+=1)}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->details}}</td>
                        <td>{{$product->price}}</td>
                        <td>
                          <a href="{{route('buyproduct', $product->id)}}" class="btn btn-success">Buy Product</a>
                        </td>
                    </tr>
                  @endforeach
                </tfoot>
              </table>
          </div>
        </div>
    </div>
@endsection
