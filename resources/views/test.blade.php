<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home KN</title>
</head>

<body>
    <h1>Home</h1>
    <?php
    
    // Prints the day
    echo date('l') . '<br>';
    
    // Prints the day, date, month, year, time, AM or PM
    echo date('l jS \of F Y h:i:s A') . '<br>';

    echo env('APP_ENV') . '<br>';

    echo config('app.timezone') . '<br>';

    echo config('app.env') . '<br>';

    
    ?>
</body>

</html>
