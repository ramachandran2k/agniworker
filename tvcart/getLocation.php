<?php
session_start();


if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    // send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
     
print_r($_POST['latitude']);

    //if request status is successful
    if($status == "OK"){
        //get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    
    //return address to ajax 
    echo $location;
}
else{
    echo"th";}
?>
<?php


//include_once './../../classes/Database.php'; import if you have database configurations
//session_start(); make sure to use sessions if your site using sessions

if(isset($_POST))
{
    var_dump($_POST); //this will echo your form inputed data.
    //if you want use one by one posted data
    var_dump ($_POST['latitude']);
}
else
{
    echo 'Data not comes here';
}
?>
