<?php
    require_once("geoipcity.inc"); //include geoip file
    $gi = geoip_open("GeoLiteCity.dat", GEOIP_MEMORY_CACHE); //include geoip.dat file
    $record = GeoIP_record_by_addr($gi,$_SERVER['REMOTE_ADDR']);
    //print_r($record);
    $country = $record->country_code;//get country code
    $region = $record->region; //get region code
    $timezone = get_time_zone("$country", "$region"); //get timezone
    echo $timezone;
    geoip_close($gi);
?>