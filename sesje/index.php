<h1>Moja strona internetowa</h1>

<?php
    session_start();

    if (array_key_exists("dane", $_SESSION)) {
        echo "Dane z sesji: " . $_SESSION["dane"];
        echo '<a href="logout.php">Wyloguj się</a>';
    } else {
        echo '<a href="login.php">Zaloguj się</a>';
    }
?>