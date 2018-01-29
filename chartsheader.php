<style>
html{

background-color: aliceblue;
overflow: hidden;
}

#canvas{
width: 100% !important;
height: 300px !important;

}
</style>


		<script src="Chart.js"></script>

		<div style="width: 60%;margin: AUTO;margin-top: 25px;background-color: white;padding: 2%;border-radius: 10px;">
			<canvas id="canvas" height="" width=""></canvas>
		</div>


	<script>
	var randomScalingFactor = function(){ return Math.round(Math.random()*100)};

	var barChartData = {
		labels : ["11:00 AM","12:00 PM","13:00 PM","14:00 PM","15:00 PM","16:00 PM","17:00 PM","12:00 PM","13:00 PM","14:00 PM","15:00 PM","16:00 PM","17:00 PM"],
		datasets : [
			{
				fillColor : "rgba(220,220,220,0.5)",
				strokeColor : "rgba(220,220,220,0.8)",
				highlightFill: "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data : [randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor(),randomScalingFactor()]
			}
		]

	}
	window.onload = function(){
		var ctx = document.getElementById("canvas").getContext("2d");
		window.myBar = new Chart(ctx).Bar(barChartData, {
			responsive : true
		});
	}

	</script>

