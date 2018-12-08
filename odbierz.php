<?php
    echo '<h2>Dane odebrane z formularza:</h2>';

    if (isset($_REQUEST['nazwisko'])&&($_REQUEST['nazwisko']!=="")) 
    {
        $nazwisko = htmlspecialchars(trim($_REQUEST['nazwisko']));
        echo "Nazwisko: $nazwisko <br />";
    }
    else 
        echo 'Nie wpisano nazwiska <br />';
	
	var_dump($_REQUEST);
	
	// nazwisko, wiek, panstwo, tech, payment
?>