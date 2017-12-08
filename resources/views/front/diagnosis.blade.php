@extends('layouts.front.masterhelper')

@section('title', 'Diagnosis')

@section('content')

<div class="diagnosisscreen animated fadeInDown">
    <div class="col-md-6 col-md-offset-3">
        <div class="ibox">
            <div class="">
                <h2>
                    Diagnosis Diseases
                </h2>
                <p>
                    You can identify your diseases by providing physical and mental syntrome
                </p>
                <form id="form" action="#" class="wizard-big">
                    <h1>Organ</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>Select Organ</h2>
                                <?php
                                    $organs = App\Organ::all();
                                ?>
                                <div class="form-group">
                                    <label>Organ *</label>
                                    <select class="form-control" name="organ_id">
                                      @foreach($organs as $organ)
                                      <option value="{{$organ->id}}">{{$organ->organ_name}}</option>
                                      @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h1>Question</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>Question 01</h2>
                                <div class="form-group">
                                    <label>Gender *</label>
                                    <select class="form-control" name="account" required>
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </fieldset>

                    <h1>Organ</h1>

                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>Choose organ</h2>
                            </div>
                            <div class="col-md-6 col-md-offset-3">
                              <select data-placeholder="Choose an Organ..." name="organ" class="chosen-select" style="width:350px;" tabindex="2">
                                <option value="">Select</option>
                                <option value="Head">Head</option>
                                <option value="Nose">Nose</option>
                                <option value="Eye">Eye</option> Islands</option>
                              </select>
                            </div>
                        </div>
                    </fieldset>
                  </form>
            </div>
        </div>

    </div>
</div>
@endsection
