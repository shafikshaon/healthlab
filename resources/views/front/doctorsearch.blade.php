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
            @foreach($search as $search_result)

            <?php $id[] = $search_result->id; ?>

            @endforeach

            <?php
            if($gender == "Male")
                $m = "asc";
            else
                $m = "desc";
                for ($i = 0; $i < count($id); $i++) {
                    $users = \DB::table('users')
                        ->where('id', $id[$i])->get();

            ?>
            @foreach($users as $user)
                <div class="hr-line-dashed"></div>
                <div class="search-result">
                    <h2>Dr. {{$user->fname}} {{$user->lname}}</h2>
                    <a href="#" class="search-link">www.inspinia.com/inspinia</a>

                    @foreach($search as $search_result)

                    <img src="{{asset('uploads/'.$search_result->img_path)}}" alt="profile" class="img-lg">

                    @endforeach
                    @endforeach

                </div>

        <?php } ?>
            <!-- <div class="hr-line-dashed"></div>
            <div class="text-center">
                <div class="btn-group">
                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-left"></i></button>
                    <button class="btn btn-white">1</button>
                    <button class="btn btn-white  active">2</button>
                    <button class="btn btn-white">3</button>
                    <button class="btn btn-white">4</button>
                    <button class="btn btn-white">5</button>
                    <button class="btn btn-white">6</button>
                    <button class="btn btn-white">7</button>
                    <button class="btn btn-white" type="button"><i class="fa fa-chevron-right"></i> </button>
                </div>
            </div> -->
        </div>
    </div>
</div>

@endsection
