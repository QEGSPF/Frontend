<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
		    <h1>On/Off Data</h1>
        <div class="col-lg-6 text-center">
          <h3>Pump</h3>
          <?php
          
            echo '<table class="table table-striped">';
            echo   '<thead>';
            echo      '<tr>';
            echo         '<th>Time</th>';
            echo         '<th>State</th>';
            echo         '<th>Sensor Value</th>';
            echo      '</tr>';
            echo   '</thead>';
            echo   '<tbody>';
            foreach( json_decode( file_get_contents( "http://localhost/getData.php" ), true ) as $data ){
              echo      '<tr>';
              echo         '<td>' . date( "d-m-y H:i:s", $data[ "time" ] ) . '</td>';
              echo         '<td>' . ( $data[ "pump_on" ] ) ? 'ON' : 'OFF'; . '</td>';
              echo         '<td>' . $data[ "moisture" ] . '</td>';
              echo      '</tr>';
            }
            echo   '</tbody>';          
          ?>
        </div>
        <div class="col-lg-6 text-center">
          <h3>Light</h3>
          <?php
            echo '<table class="table table-striped">';
            echo   '<thead>';
            echo      '<tr>';
            echo         '<th>Time</th>';
            echo         '<th>State</th>';
            echo         '<th>Sensor Value</th>';
            echo      '</tr>';
            echo   '</thead>';
            echo   '<tbody>';
            foreach( json_decode( file_get_contents( "http://localhost/getData.php" ), true ) as $data ){
              echo      '<tr>';
              echo         '<td>' . date( "d-m-y H:i:s", $data[ "time" ] ) . '</td>';
              echo         '<td>' . ( $data[ "light_on" ] ) ? 'ON' : 'OFF'; . '</td>';
              echo         '<td>' . $data[ "light" ] . '</td>';
              echo      '</tr>';
            }
            echo   '</tbody>';          
          ?>
        </div>
		</div>
	</div>
</div>
