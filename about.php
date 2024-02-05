<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $paragraph = $_GET['paragraph'];
    $censure = $_GET['censure'];

    $trimParagraph = trim($paragraph);

    echo $trimParagraph;
    echo '<br><br>';
    echo 'Il paragrafo ha una lunghezza di '.strlen($trimParagraph).' caratteri.';

    echo '<br><br>';
    echo '<br><br>';

    $censoredParagraph = str_replace($censure, '***', $trimParagraph);
    echo $censoredParagraph;
    echo '<br><br>';
    echo 'Il paragrafo censurato ha una lunghezza di '.strlen($censoredParagraph).' caratteri.';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
</body>
</html>