<?php 

setcookie(name, value,expiration);
if (isset($_COOKIE['language'])){
    $language = $_COOKIE['language'];
    echo "selected language:{$language}";
}
else{
    setcookie('language','sinhala',time()+60*60*24*7);
}

// how to remove a cookie
    //setcookie('language',NULL,-time()+60*60*24*7);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>