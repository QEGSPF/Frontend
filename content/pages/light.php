<script type="text/javascript">
$(function () {
  var data = [];
  var dataSeries = { type: "line" };
  var dataPoints = [];
  
  $.getJSON('/getData.php', {}, function( data ) {
    $.each(data, function(index, element) {
      dataPoints.push({
        x: element.time,
        y: element.light
      });
    });
  });
  
  dataSeries.dataPoints = dataPoints;
  data.push(dataSeries);

  var options = {
    zoomEnabled: true,
    animationEnabled: true,
    title: {
      text: "Light v Time"
    },
    axisX: {
      labelAngle: 30
    },
    axisY: {
      includeZero: false
    },
    data: data
  };

  $("#lightChart").CanvasJSChart(options);

});
</script>
<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		    <h1>Light</h1>
        <div id="lightChart" style="height: 60%; width: 100%;"></div>
		</div>
	</div>
</div>
