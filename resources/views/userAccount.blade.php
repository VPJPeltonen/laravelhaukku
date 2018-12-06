@extends('layouts.app')
@section('title')
Account
@endsection


<script src="{{ asset('js/box.js') }}" defer></script>


<!----------vasen laatikko, napit ---------------------->
@section('content')
<div class="left2">
<div class="link" target=0>Oletusnäkymänlinkki</div>
<div class="link" target=1>Change avatar</div>
<div class="link" target=2>Alert preferences</div>
<div class="link" target=3>Payment details</div>
<div class="link" target=4>Personal information</div>
</div>


@endsection

<!-------------oikea laatikon alku, johon sisältö aukeaa----->
@section('content2')
<div class="linkbox" id=0 style="display:block">
<?php 
    $times = array();
    $sectors = array();
    foreach ($barks as $bark) {
        $times[] = $bark->bark;
        $sectors[] = $bark->sector;
    }        
?>
<div>
<h2>Haukut Kellonajan Mukaan</h2>
<canvas id="myChart" width="400" height="400"></canvas>
</div>
<div>
<h2>Haukut Suunnan Mukaan</h2>
<canvas id="myChart2" width="400" height="400"></canvas>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.js"></script>
<script>
    var ctx = document.getElementById("myChart").getContext('2d');
    var ctx2 = document.getElementById("myChart2").getContext('2d');
    var times = @json($times);
    var sectors = @json($sectors);
    var dates = [];
    var datasetHours = [];
    var datasetSectors = [0,0,0,0,0,0];
    for (i = 0; i < times.length; i++) {
        dates[i] = new Date(times[i]);
        datasetHours[i] = 0;
    } 
    for (i = 0; i < dates.length; i++) {
        temp = parseInt(dates[i].getHours());
        datasetHours[temp] += 1;
        temp = parseInt(sectors[i]);
        datasetSectors[temp] += 1;
    } 
    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [ "0-1", "1-2", "2-3", "3-4", "4-5", "5-6","6-7", "7-8", "8-9", "9-10","10-11", "11-12", "12-13", "13-14", "15-16", "16-17", "17-18", "18-19", "19-20", "20-21", "21-22", "22-23", "23-0"],
            datasets: [{
                data: datasetHours,
                borderWidth: 1
            }]
        },
        options: {
        responsive: false,
        legend: {
            display: false
        },
        scales: {
            yAxes: [{
                barThickness: 53,
                ticks: {
                    beginAtZero:true
                }
            }],
            xAxes: [{
                barThickness: 13
            }]
        }
        }
    });
    var myRadarChart = new Chart(ctx2, {
        type: 'radar',
        data: {
            labels: ['Sektori 1', 'Sektori 2', 'Sektori 3', 'Sektori 4', 'Sektori 5', 'Sektori 6'],
            datasets: [{
                data: datasetSectors
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            }
        }
    });
</script>

</div>
<!--------------ID 1------------------------------------>
<div class="linkbox" id=1>
    <img src="{{ URL::to('/images/user128') }}" alt="image">
    <input type="text" id="sijainti">
    <button>Lataa kuva</button>
    <!--@yield('') --->
</div>
<!---------------ID 2----------------------------------->
<div class="linkbox" id=2> 
    Sisältö
</div>
<!----------------ID 3---------------------------------->
<div class="linkbox" id=3> 
    hfdslkjfhdskjhfkjfds
</div>
<!-----------------ID 4--------------------------------->
<div class="linkbox" id=4>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris quis vehicula lacus. Duis rutrum efficitur ipsum. Suspendisse non tincidunt ipsum. Vestibulum mi nisi, tristique sit amet tristique in, tristique id sem. Donec quis tellus vel ligula sagittis dictum cursus a eros. Mauris gravida porttitor ultrices. Vestibulum sollicitudin lacus eget est commodo, quis dapibus nulla ultrices. Quisque bibendum, leo sit amet lobortis vehicula, tortor risus convallis lacus, ut rhoncus tortor odio vitae ex. Ut vel viverra justo, sed cursus mi. Proin erat metus, mollis ut turpis sit amet, placerat viverra eros. Morbi semper placerat metus at dapibus. Vestibulum consequat consequat sem nec facilisis.
</div>

@endsection