<?php
    $string = file_get_contents("http://api.wunderground.com/api/17f8bdf2e2d24e9d/conditions/q/WI/Milwaukee.json");
    $json_decoded = json_decode($string, true);

    $location_full = $json_decoded['current_observation']['display_location']['full'];
    $weather_temp = $json_decoded['current_observation']['temp_f'];
    $weather_weather = $json_decoded['current_observation']['weather'];
    $weather_icon = $json_decoded['current_observation']['icon_url'];

    echo "<h1>".$location_full."</br></h1>";
    echo "<h1>".$weather_temp." f </br></h1>";
    echo "<h1>".$weather_weather."</br></h1>";
    echo "<img id=\"weatherIcon\" src=\"".$weather_icon."\">";
?>