<script type="text/javascript">
$(function () {
  var data = [];
  var dataSeries = { type: "line" };
  var dataPoints = [];
  
  $.getJSON('/getData.php', {}, function( data ) {
    $.each(data, function(index, element) {
      dataPoints.push({
        x: element.time,
        y: element.temperature
      });
    });
  });
  
  dataSeries.dataPoints = dataPoints;
  data.push(dataSeries);

  var options = {
    zoomEnabled: true,
    animationEnabled: true,
    title: {
      text: "Temperature v Time"
    },
    axisX: {
      labelAngle: 30
    },
    axisY: {
      includeZero: false
    },
    data: data
  };

  $("#tempChart").CanvasJSChart(options);

});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		    <h1>Temperature</h1>
        <div id="tempChart" style="height: 60%; width: 100%;"></div>
		</div>
	</div>
</div>
