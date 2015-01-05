<? Header("content-type: application/x-javascript");

include('../country files/' . $_GET['country'] . '.php');

$def_cty = $_GET['country'];

?>

//draw bar chart
function drawVisualization(fixos, variav, char_width, char_height) {
// Create and populate the data table.
    var data = google.visualization . arrayToDataTable([['Tipo de custo', '<? echo $FIXED_COSTS; ?>', '<? echo $RUNNING_COSTS; ?>'],['<? echo $COSTS; ?>', fixos, variav]]);

// Create and draw the visualization.
	var chart_div = document.getElementById('graph_div');
    var chart1 = new google.visualization.ColumnChart(chart_div);
	
	// Wait for the chart to finish drawing before calling the getImageURI() method.
    google.visualization.events.addListener(chart1, 'ready', function () {
		var img_div =  document.getElementById('img2');
        img_div.innerHTML = '<img src="' + chart1.getImageURI() + '">';        
    });
	
	
    chart1.draw(data, {title: "Custos fixos/variáveis",
                backgroundColor: {stroke: '#F0F0F0', fill: '#F0F0F0', strokeWidth: 3},
                chartArea: { left: 0, top: 0, width: "60%", height: "100%"},
                vAxis: { minValue: 0},
                width: char_width,
                height: char_height
                }
            );
}

//draw Pie Chart
function drawChart(a, b, c, d, e, f, g, h, i, j, k, l, char_width, char_height) {
		
    var data, char_data, options, chart;
	
    chart_data = [
    ['<? echo $PARCEL; ?>', '<? echo $COSTS; ?>' ],
    ['<?echo $def_cty ?>'=='RU' || '<?echo $def_cty?>'=='UA' ? '<? echo $INSURANCE_CHART; ?>' : '<? echo $INSURANCE_SHORT; ?>', a],
    ['<? echo $FUEL; ?>', b],
    ['<? echo $DEPRECIATION; ?>', c],
    ['<? echo $CREDIT_INTERESTS; ?>', d],
    ['<? echo $INSPECTION_SHORT; ?>', e],
    ['<? echo $MAINTENANCE; ?>', f],
    ['<? echo $REP_IMPROV; ?>', g],
    ['<? echo $ROAD_TAXES_SHORT; ?>', h],
    ['<? echo $PARKING; ?>', i],
    ['<? echo $TOLLS; ?>', j],
    ['<?echo $FINES; ?>', k],
    ['<? echo $WASHING; ?>', l]
    ];

	if('<?echo $def_cty ?>'=='RU'){
		$('#chart_div').css('padding','0 0 0 2%');
	}
    data = google.visualization.arrayToDataTable(chart_data);

    options = {
        title: 'Gráfico dos custos',
        backgroundColor: {stroke: '#F0F0F0', fill: '#F0F0F0', strokeWidth: 3},
        chartArea: {left: 0, top: 10, width: "90%", height: "90%"},
        width: char_width,
        height: char_height
        };
	
	var chart_div = document.getElementById('chart_div');
    chart = new google.visualization.PieChart(chart_div);	      

    // Wait for the chart to finish drawing before calling the getImageURI() method.
    google.visualization.events.addListener(chart, 'ready', function () {
		var img_div =  document.getElementById('img1');
        img_div.innerHTML = '<img src="' + chart.getImageURI() + '">';        
    });
	
    chart.draw(data, options);
}