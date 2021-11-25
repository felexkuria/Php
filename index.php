<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Php Freecode org</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</head>

<body>
    <!-- <div class="card-panel  teal lighten-2">This is a card panel with a teal lighten-2 class</div> -->


    <?php
    $name = "Felex";

    echo "<h6>Hello World</h6>";
    echo strtolower($name);
    echo "<br>";

    echo strlen($name);
    echo "<br>";
    echo strtoupper($name);
    echo "<br>";

    echo $name[0];
    echo "<br>";
    echo str_replace("Felex", "Virginia", $name);
    echo "<br>";
    echo substr($name, 5, 2);
    echo "<h6 class=\"blue-text text-darken-2\">Me From Africa</h6>";



    ?>
</body>

</html>