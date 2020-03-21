<?php
$respponse = json_decode(file_get_contents('https://www.metaweather.com/api/location/1915035/'), true);
$data = $respponse['consolidated_weather'];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Clock</title>
		<link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="style.css">
		<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
		<script type="text/javascript" src="script.js" defer></script>
	</head>
	<body>
		
		<div style="margin-left: 50px;" class="clock-box">
			<div class="clock">HH:MM:SS</div>
			<div class="date">DD-MM-YY</div>
			<div style="font-size: 30px;"><?php echo $data[0]['the_temp']; ?>&deg; <small>C</small></div>
			<div style="font-size: 30px;"><small><small>WIND : </small></small><?php echo round($data[0]['wind_speed'],2);?> km/h</div>
			
		</div>