<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $trimone = 'maestro';
    echo $trimone;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>

<body>

    <div>
        <form action="./about.php" method='GET'>

            <div>
                <input type="text" name='paragraph' value='Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil, itaque.'>
            </div>

            <div>
                <input type="text" name='censure' value='ipsum'>
            </div>

            <button>
                INVIA
            </button>

        </form>
    </div>

</body>

</html>