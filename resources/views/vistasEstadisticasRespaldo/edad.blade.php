@extends('index')



@section('content')
    <script type="text/javascript">
        google.charts.load('current', {'packages':['line']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var chartDiv = document.getElementById('chart_div');

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Month');
            data.addColumn('number', "Menores de 12");
            data.addColumn('number', "12 - 17");
            data.addColumn('number', "18 - 25");
            data.addColumn('number', "26 - 30");
            data.addColumn('number', "31 - 35");
            data.addColumn('number', "36 - 40");
            data.addColumn('number', "41 - 45");
            data.addColumn('number', "46 - 50");
            data.addColumn('number', "51 - 55");
            data.addColumn('number', "56 - 59");
            data.addColumn('number', "Mayores de 60"); 

            data.addRows([
                ['Enero',          5,   5,  10,   9,   6,   5,  10,   9,   6,  5,  5],
                ['Febrero',        8,   5,   9,  15,   6,  10,   9,   6,   5,  8,  5],
                ['Marzo',        12,   5,   9,  15,   6,   5,  10,   9,   6,  8,  4],
                ['Abril',        15,   5,  10,   9,  15,  10,   9,   6,   5,  8,  5],
                ['Mayo',           0,   5,  10,   9,   6,   5,  10,   9,  15,  9,  5],
                ['Junio',        20,   5,  10,   9,  15,  10,   9,   6,   5,  8,  3],
                ['Julio',         5,  10,   9,  15,   6,   5,  10,   9,   6,  7,  5],
                ['Agosto',       16,   5,  10,   9,  15,   5,  10,   9,  15,  2,  1],
                ['Septiembre',   13,   5,   9,  15,   6,   5,  10,   9,   6,  8,  5],
                ['Octubre',       9,   5,  10,   9,   6,   5,  10,   9,  15,  5,  7],
                ['Noviembre',    6,   5,  10,   9,  15,   5,  10,   9,   6,  8,  5],
                ['Diciembre',    4,   5,  10,   9,  15,   5,  10,   9,  15,  1,  8]
            ]);

            var Options = {
                chart:{
                    title: 'Incidencia delictiva por Edad del año 20XX'
                },
                width: 1100,
                height: 500,
                // Gives each series an axis that matches the vAxes number below.
                //legend: { position: 'none', alignment: 'start' },
                series: {
                    0: { color: '#6b9527'},
                    1: { color: '#465c1e'},
                    2: { color: '#236829'},
                    3: { color: '#133a27'},
                    4: { color: '#222222'},
                    5: { color: '#575757'},
                    6: { color: '#7d7d7d'},
                    7: { color: '#999999'},
                    8: { color: '#7d5f46'},
                    9: { color: '#694f46'},
                    10: { color: '#423224'},
                },
                vAxes: {
                    // Adds titles to each axis.
                    0: {title: 'Cantidad'},
                    1: {title: 'Meses'}
                },
                hAxis: {
                    ticks: [
                        'Enero',       
                        'Febrero',     
                        'Marzo',      
                        'Abril',      
                        'Mayo',        
                        'Junio',      
                        'Julio',      
                        'Agosto',     
                        'Septiembre', 
                        'Octubre',    
                        'Noviembre',  
                        'Diciembre' 
                    ]
                }
                
            };

          

            function drawChart() {
                var Chart = new google.charts.Line(chartDiv);
                Chart.draw(data, Options);
            }

            drawChart();

        }
    </script>
<br>
<div class="fondo ">
    
    
    <br>
    <center>
        <div id="chart_div" style="width: 100%;"></div>
    </center>
    <br>
</div>
        
@endsection