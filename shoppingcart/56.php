<?php
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
echo 'Hey user from ' . $query['country'] . ', ' . $query['city'] . '!';
}
foreach ($query as $data) {
    echo $data . "<br>";
}


$myPhpVar= $_COOKIE['myJavascriptVar'];
$longitude= $_COOKIE['longitude'];
echo $myPhpVar;
echo "<br>";
echo $longitude;

?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> 

<script> 

$(document).ready(function(){ 

    if (navigator.geolocation) { 

        navigator.geolocation.getCurrentPosition(showLocation); 

    } else { 

        $('#location').html('Geolocation is not supported by this browser.'); 

    } 

}); 

function showLocation(position) { 

    var latitude = position.coords.latitude; 

var longitude = position.coords.longitude; 


document.cookie = "myJavascriptVar = " + latitude;
document.cookie =  "longitude = " + longitude;

} 

</script> 