<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>execute SQL query</title>
</head>
<body>

<?php

require_once('php/connection.php');

$myarray = mysqli_sql('select * from mytable');

foreach ($myarray as $object) {
    // run all the rows
    foreach ($object as $key => $value) {
        // run all the columns
        echo "$key: $value<br />"; // $value = $object[$key]
    }
}
echo 'g';
?>
    
</body>
</html>