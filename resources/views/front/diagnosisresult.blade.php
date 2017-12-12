@extends('layouts.front.master2')

@section('title', 'Find Doctor')

@section('content')

<div class="col-lg-offset-2 col-lg-8 doctorsearch">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <h2>
                <span class="text-navy">Doctor Search Results</span>
            </h2>

            <?php $id = array(); ?>

                @foreach($result as $res)
                <?php $id[] = $res->disease_id; ?>

                @endforeach

                <?php
                for ($i = 0; $i < count($id); $i++) {
                    $disease = \DB::table('diseases')
                        ->where('id', $id[$i])->get();
                ?>
                @foreach($disease as $d)
                <div class="hr-line-dashed"></div>
                <div class="search-result">
                    <h2>{{$d->disease_name}} </h2>
                    <p>Specialist {{$d->specilist}}</p>
                </div>
                @endforeach

            <?php } ?>





        </div>
    </div>
</div>

@endsection
