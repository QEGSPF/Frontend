<script type="text/javascript">
$(function () {
  var data = [];
  var dataSeries = { type: "line" };
  var dataPoints = [];
  
  $.getJSON('/getData.php', {}, function( data ) {
    $.each(data, function(index, element) {
      dataPoints.push({
        x: element.time,
        y: element.moisture
      });
    });
  });
  
  dataSeries.dataPoints = dataPoints;
  data.push(dataSeries);

  var options = {
    zoomEnabled: true,
    animationEnabled: true,
    title: {
      text: "Moisure v Time"
    },
    axisX: {
      labelAngle: 30
    },
    axisY: {
      includeZero: false
    },
    data: data
  };

  $("#moistureChart").CanvasJSChart(options);

});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		    <h1>Moisture</h1>
        <div id="moistureChart" style="height: 60%; width: 100%;"></div>
		</div>
	</div>
</div>
