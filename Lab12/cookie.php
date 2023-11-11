<!DOCTYPE html>
<?php
$cookie_name ="cs4413";
$cookie_value = "This is My Cs4413 Cookie!";
setcookie($cookie_name, $cookie_value, time() + 120 ,"/");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab12</title>
</head>
<body>
    <p>Lab 12</p>
    
</body>
</html>

<?php

if (isset($_COOKIE[$cookie_name])){
    echo "Cookie named ".$cookie_name ." is set" ;
}else{
echo "Cookie is not set";
}

?>