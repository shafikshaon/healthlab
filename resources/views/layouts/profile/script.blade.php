<!-- Mainly scripts -->
<script src="{{asset('js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
<script src="{{asset('js/plugins/slimscroll/jquery.slimscroll.min.js')}}"></script>

<!-- Custom and plugin javascript -->
<script src="{{asset('js/inspinia.js')}}"></script>
<script src="{{asset('js/plugins/pace/pace.min.js')}}"></script>

<!-- ChartJS-->
<script src="{{asset('js/plugins/chartJs/Chart.min.js')}}"></script>

<!-- Gender -->
<?php
    $male_count = App\User::where('gender','Male')->count();
    $female_count = App\User::where('gender','Female')->count();
    $others_count = App\User::where('gender','Others')->count();
?>
<!-- Blood Group -->
<?php
    $aplus = App\UserProfile::where('blood_group','A+')->count();
    $aminus = App\UserProfile::where('blood_group','A-')->count();
    $bplus = App\UserProfile::where('blood_group','B+')->count();
    $bminus = App\UserProfile::where('blood_group','B-')->count();
    $oplus = App\UserProfile::where('blood_group','O+')->count();
    $ominus = App\UserProfile::where('blood_group','O-')->count();
    $abplus = App\UserProfile::where('blood_group','AB+')->count();
    $abminus = App\UserProfile::where('blood_group','AB-')->count();
?>
<script type="text/javascript">
$(function () {
    var doughnutData = {
        labels: ["Male","Female", "Others" ],
        datasets: [{
            data: [{{$male_count}},{{$female_count}}, {{$others_count}}],
            backgroundColor: ["#a3e1d4","#dedede", "#e8d4a2"]
        }]
    } ;


    var doughnutOptions = {
        responsive: true
    };


    var ctx4 = document.getElementById("doughnutChart").getContext("2d");
    new Chart(ctx4, {type: 'doughnut', data: doughnutData, options:doughnutOptions});

    var barData = {
        labels: ["A+", "A-", "B+", "B-", "O+", "O-", "AB+", "AB-"],
        datasets: [
            {
                label: "Male",
                backgroundColor: 'rgba(220, 220, 220, 0.5)',
                pointBorderColor: "#fff",
                data: [65, 59, 34, 67, 35, 23, 34, 45]
            },
            {
                label: "Female",
                backgroundColor: 'rgba(26,179,148,0.5)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [28, 48, 43, 56, 54, 78, 23, 76]
            },
            {
                label: "Others",
                backgroundColor: 'rgba(26,179,148,0.5)',
                borderColor: "rgba(26,179,148,0.7)",
                pointBackgroundColor: "rgba(26,179,148,1)",
                pointBorderColor: "#fff",
                data: [28, 48, 23, 78, 86, 32, 54, 55]
            },
        ]
    };

    var barOptions = {
        responsive: true
    };


    var ctx2 = document.getElementById("barChart").getContext("2d");
    new Chart(ctx2, {type: 'bar', data: barData, options:barOptions});

});

</script>
