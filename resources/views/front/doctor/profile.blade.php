@extends('layouts.front.master2')

@section('title', 'Dashboard')

@section('content')

<div class="col-lg-offset-1 col-lg-10 doctorsearch">
    <div class="ibox float-e-margins">
        <div class="ibox-content">
            <div class="col-lg-6">
                <div class="tabs-container">

                    <div class="tabs-left">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab" href="#tab-6" aria-expanded="true"> This is tab</a></li>
                            <li class=""><a data-toggle="tab" href="#tab-7" aria-expanded="false">This is second tab</a></li>
                        </ul>
                        <div class="tab-content ">
                            <div id="tab-6" class="tab-pane active">
                                <div class="panel-body">
                                    <strong>Lorem ipsum dolor sit amet, consectetuer adipiscing</strong>

                                    <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart. I am alone, and feel the charm of
                                        existence in this spot, which was created for the bliss of souls like mine.</p>

                                    <p>I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at
                                        the present moment; and yet I feel that I never was a greater artist than now. When.</p>
                                </div>
                            </div>
                            <div id="tab-7" class="tab-pane">
                                <div class="panel-body">
                                    <strong>Donec quam felis</strong>

                                    <p>Thousand unknown plants are noticed by me: when I hear the buzz of the little world among the stalks, and grow familiar with the countless indescribable forms of the insects
                                        and flies, then I feel the presence of the Almighty, who formed us in his own image, and the breath </p>

                                    <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite
                                        sense of mere tranquil existence, that I neglect my talents. I should be incapable of drawing a single stroke at the present moment; and yet.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>


            <div class="col-lg-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Donut Chart Example</h5>
                        <div class="ibox-tools">
                            <a class="collapse-link">
                                <i class="fa fa-chevron-up"></i>
                            </a>
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                <i class="fa fa-wrench"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-user">
                                <li><a href="#">Config option 1</a>
                                </li>
                                <li><a href="#">Config option 2</a>
                                </li>
                            </ul>
                            <a class="close-link">
                                <i class="fa fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div id="morris-line-chart" ></div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Pie </h5>

                        </div>
                        <div class="ibox-content">
                            <div>
                                <canvas id="doughnutChart" height="140"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>

@endsection
