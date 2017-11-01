@extends('layout.master')

@section('title', 'Product Details')

@section('content')
<div class="wrapper wrapper-content">
  <div class="col-md-9">
    @if(!empty($product))
    <div class="ibox float-e-margins">
      <div class="ibox-title">
          <h3>Details</h3>
      </div>

      <div class="ibox-content profile-content">
        <h4><strong>{{$product->name}}</strong></h4>
        <p><i class="fa fa-envelope"></i> {{$product->details}}</p>
        <p><i class="fa fa-price"></i> {{$product->price}}</p>

        <div class="user-button">
            <div class="row">
                <div class="col-md-6">
                  <a class="btn btn-primary" href="{{route('paywithpaypal', $product->id)}}"><i class="fa fa-paypal"></i> Pay with PayPal</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    @endif
  </div>
</div>
@endsection
