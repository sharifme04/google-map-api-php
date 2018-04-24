<?php
if(isset($_POST['submit_user_address']))
{
  $user_address =$_POST['user_address']; 
  $user_prepAddr = str_replace(' ','+',$user_address);
  $geocode=file_get_contents('http://maps.google.com/maps/api/geocode/json?address='.$user_prepAddr.'&sensor=false');
  $outputvalues= json_decode($geocode);
  $latitude = $outputvalues->results[0]->geometry->location->lat;
  $longitude = $outputvalues->results[0]->geometry->location->lng;
  
  echo "Latitude of your address - ".$latitude;
  echo "Longitude of your address - ".$longitude;
}

if(isset($_POST['submit_user_coordinates']))
{
  $user_latitude=$_POST['user_latitude'];
  $user_longitude=$_POST['user_longitude'];
  
  $address_url  = "http://maps.googleapis.com/maps/api/geocode/json?latlng=".$user_latitude.",".$user_longitude."&sensor=false";
  $json = @file_get_contents($address_url);
  $data = json_decode($json);
  $status = $data->status;
  $address = '';

  if($status == "OK"){
     $address = $data->results[0]->formatted_address;
     echo "Your address :- ".$address;
  }
  else{
  echo "we did not find the data please refresh and remove space before first alphabate";
  }
}
?>