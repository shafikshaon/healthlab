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
                    <h1>Age</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>How old are you?</h2>
                                <div class="form-group">
                                    <label>Age *</label>
                                    <select class="form-control" name="account" required>
                                        <option>00 - 0.9</option>
                                        <option>01 - 02</option>
                                        <option>03 - 04</option>
                                        <option>05 - 09</option>
                                        <option>10 - 12</option>
                                        <option>13 - 19</option>
                                        <option>20 - 29</option>
                                        <option>30 - 39</option>
                                        <option>40 - 49</option>
                                        <option>50 - 59</option>
                                        <option>60+</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </fieldset>
                    <h1>Gender</h1>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <h2>I am</h2>
                                <div class="form-group">
                                    <label>Age *</label>
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
                              <select data-placeholder="Choose a Country..." name="organ" class="chosen-select" style="width:350px;" tabindex="2">
                                <option value="">Select</option>
                                <option value="United States">United States</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Afghanistan">Afghanistan</option>
                                <option value="Aland Islands">Aland Islands</option>
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
