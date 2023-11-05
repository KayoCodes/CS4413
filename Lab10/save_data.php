<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola</title>
</head>
<body>
    <?php
    
    $fh = fopen("data.txt","a");
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    fwrite($fh, $fname ."\n" . $lname ."\n" );
    
    include 'show_data.php';
    fclose($fh);

    ?>
    
</body>
</html>