<?php

$poesia = 'Felice chi è diverso essendo egli diverso. Ma guai a chi è diverso essendo egli comune.';

$wordToReplace = $_GET["word"];

$replace = str_replace($wordToReplace, "***", $poesia);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>
    <h1>Felice chi è diverso</h1>

    <p><?php echo $poesia ?></p>

    <h2>Censured</h2>

    <p><?php echo $replace ?></p>
</body>
</html>