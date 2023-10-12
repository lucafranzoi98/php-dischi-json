<?php
$string = file_get_contents("dischi.json");
$discs = json_decode($string, true);
var_dump($discs)
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dischi</title>
</head>
<body>
   
</body>
</html>