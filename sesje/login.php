<?php
    require 'tajnedane.php';

    if (empty($_POST)) {
?>
<form action="login.php" method="post">
    Login: <input type="text" name="login" /><br>
    Password: <input type="password" name="password" /><br>
    <input type="submit">
</form>
<?php
    } else {
        echo "SELECT id FROM uzytkownicy WHERE login = " . $_POST['login'];
        
        if (($_POST["login"] == USERNAME) && ($_POST["password"] == PASSWORD)) {
            session_start();
            $_SESSION["dane"] = "dane sesji" . rand();
            echo "Zalogowałeś się uzytkowniku " . $_POST["login"] . "! Dane sesji: " . $_SESSION["dane"];

            //header("Location: index.php");
        } else {
            echo "Błędne dane logowania! " . $_POST["login"];
        }
    }
?>

