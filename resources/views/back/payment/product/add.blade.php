@extends('layout.master')

@section('title', 'Add User')

@section('content')
    <div class="wrapper wrapper-content">
      @if(Session::has('success'))
      <div class="alert alert-success alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        {{ Session::get('success') }}
      </div>
      @endif

      @if($errors->any())
          <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach()
          </div>
      @endif
        <div class="row">
          <div class="col-md-8">
            <form class="form-horizontal" action="{{route('insert')}}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
                <div class="form-group">
                    <label class="col-lg-3 control-label">Product Name</label>
                    <div class="col-lg-9"><input type="text" name="name" placeholder="Product Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Details</label>
                    <div class="col-lg-9">
                      <textarea name="details" class="form-control"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Price</label>
                    <div class="col-lg-9"><input type="text" name="price" placeholder="Price" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-3 col-lg-9">
                        <button class="btn btn-sm btn-primary" type="submit">Add Product</button>
                    </div>
                </div>
            </form>
          </div>
        </div>
    </div>
@endsection
