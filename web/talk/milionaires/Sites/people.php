<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Publiczność</title>
<script>
var type1 = sessionStorage.getItem("t1");
var type2 = sessionStorage.getItem("t2");
var type3 = sessionStorage.getItem("t3");
var type4 = sessionStorage.getItem("t4");
x1 = parseInt(type1, 10);
x2 = parseInt(type2, 10);
x3 = parseInt(type3, 10);
x4 = parseInt(type4, 10);

window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	exportEnabled: true,
	animationEnabled: true,
	title:{
		text: "Głosy oddane przez publiczność."
	},
	subtitles: [{
		text: ""
	}], 
	axisX: {
		title: "Głosy liczone w procentach (%)"
	},
	toolTip: {
		shared: true
	},
	legend: {
		cursor: "pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		type: "column",
		name: "Oddanych głosów:",
		showInLegend: true,      
		yValueFormatString: "#,##0.# Units",
		dataPoints: [
			{ label: "A",  y: x1 },
			{ label: "B", y: x2 },
			{ label: "C", y: x3 },
			{ label: "D",  y: x4 }
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	} else {
		e.dataSeries.visible = true;
	}
	e.chart.render();
}

}
</script>
</head>
<body background="../img/Tlo.png">
<div id="chartContainer" style="height: 300px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</body>
</html>