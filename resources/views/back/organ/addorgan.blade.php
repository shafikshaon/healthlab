@extends('layouts.back.master')
@section('title', 'Add Organ')

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
  <div class="ibox float-e-margins">
    <div class="ibox-title">
        <h5>Add Organ</h5>
    </div>
    <div class="ibox-content wizard-card">
        <form class="form-horizontal" action="{{route('insertorgan')}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
            <div class="form-group">
                <label class="col-lg-2 control-label">Organ Name</label>
                <div class="col-lg-10"><input type="text" name="organ_name" placeholder="Organ Name" class="form-control">
                  @if($errors->any())
                      <div class="alert-danger">
                      @foreach($errors->all() as $error)
                          <p>{{ $error }}</p>
                      @endforeach()
                      </div>
                  @endif
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>
  </div>
</div>
@endsection
