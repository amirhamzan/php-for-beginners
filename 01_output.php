<?php

//echo string, int, number, html, take multiple argument
echo 1 + 2;

//works like echo but take single argument only
print '<h1>Echo with h1 tag</h1>';

//print array only cause use function
print_r([1, 2.3]);

echo '<br>';

//return info like data type and value
var_dump([12, 2]);

echo '<br>';

var_export('1');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1><?php echo 'Echo php inside html tag'; ?></h1>
</body>

</html>