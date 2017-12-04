@extends('layouts.back.master')
@section('title', 'Edit Symptom')

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
        <h5>Add Disease</h5>
    </div>
    <div class="ibox-content wizard-card">
        <form class="form-horizontal" action="{{route('updatesymptom', $symptoms->id)}}" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}

            <?php
              $diseases = App\Disease::all();
            ?>
            <div class="form-group">
                <label class="col-sm-2 control-label">Disease Name</label>
                <div class="col-sm-10">
                  <select class="form-control" name="disease_id">
                    @foreach($diseases as $disease)
                    <option value="{{$disease->id}}" {{ $symptoms->disease_id == $disease->id ? 'selected="selected"' : '' }}>{{$disease->disease_name}}</option>
                    @endforeach
                  </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-2 control-label">Symptom Name</label>
                <div class="col-lg-10"><input type="text" name="symptom" placeholder="Symptom" value="{{$symptoms->symptom}}" class="form-control">
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
                    <button class="btn btn-sm btn-primary" type="submit">Update Symptom</button>
                </div>
            </div>

        </form>
    </div>
  </div>
</div>
@endsection
