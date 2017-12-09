@extends('layouts.back.master')
@section('title', 'Add Doctor')

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
                <h5>Add Admin</h5>
            </div>
            @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach()
                </div>
            @endif
            <div class="ibox-content wizard-card">
                <form class="form-horizontal" action="{{route('insertquestion')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Question</label>
                        <div class="col-lg-9">
                            <input type="text" name="question" class="form-control">
                        </div>
                    </div>
                    <?php
                    $organs  = App\Organ::all();
                    ?>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Organ *</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="organ_name">
                                @foreach($organs as $organ)
                                    <option value="{{$organ->organ_name}}">{{$organ->organ_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <?php
                    $diseases  = App\Disease::all();
                    ?>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Disease *</label>
                        <div class="col-lg-9">
                            <select class="form-control" name="disease_name">
                                @foreach($diseases as $disease)
                                    <option value="{{$disease->disease_name}}">{{$disease->disease_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-offset-3 col-lg-9">
                            <button class="btn btn-sm btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
