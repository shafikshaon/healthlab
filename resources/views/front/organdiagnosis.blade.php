@extends('layouts.front.master2')

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
                <form class="" action="{{route('organdiagnosis')}}" method="post">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
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
                    <div class="form-group">
                        <div class="col-lg-offset-2 col-lg-10">
                            <button class="btn btn-sm btn-primary" type="submit">Diagnosis</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>
@endsection
