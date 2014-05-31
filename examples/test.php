<?php;
	$url="https://maps.googleapis.com/maps/api/place/search/json?location=13.0613,80.2611&radius=5000&types=food&sensor=false&key=AIzaSyDFnAN1_tLIiCggtyjtkFw-Qk9Wl82-ENw";
	//echo $url;
	$jsonObject = file_get_contents($url);
	//"http://maps.googleapis.com/maps/api/geocode/json?latlng=22.1978953,76.0871887&sensor=false"
	$object = json_decode($jsonObject);
	echo "<pre>"; print_r($object); echo "</pre>";




?>

