<?php
require 'funkcje.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formularz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <?php 

    if (isset($_REQUEST['pokaz'])) {
        pokaz();
    } else if (isset($_REQUEST['wyslij'])) {
        dodaj();
    } else if (isset($_REQUEST['pokazjava'])) {
        pokaz_tylko('java');
    } else {
        wyswietl_form();
    }
    ?>
</div>
</body>
</html>