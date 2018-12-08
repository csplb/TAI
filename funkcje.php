<?php
function pokaz() {
    echo '<table class="table">';
    $file = file('data.txt');
    foreach ($file as $line) {
        echo '<tr>';
        $elements = explode(',', $line);
        foreach ($elements as $v) {
            echo "<td>$v</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}

function pokaz_tylko($jakie) {
    echo '<table class="table">';
    $file = file('data.txt');
    foreach ($file as $line) {
        if (strpos($line, $jakie) === FALSE)
            continue;

        echo '<tr>';
        $elements = explode(',', $line);
        foreach ($elements as $v) {
            echo "<td>$v</td>";
        }
        echo '</tr>';
    }
    echo '</table>';
}

function dodaj() {
    $file = fopen('data.txt', 'a+');
    
    $args = array('nazwisko' => 
        ['filter' => FILTER_VALIDATE_REGEXP,
        'options' => ['regexp' => '/^[A-Z]{1}[a-ząęłńśćźżó-]{1,25}$/']],
        'panstwo'=> FILTER_SANITIZE_FULL_SPECIAL_CHARS,
        'tech'=> ['filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,'flags' => FILTER_REQUIRE_ARRAY],
        'email' => FILTER_VALIDATE_EMAIL
    );
    
    $dane = filter_input_array(INPUT_POST, $args);
    var_dump($dane);
    
    $errors = "";
    foreach ($dane as $key => $val) {
        if ($val === false or $val === NULL) {
            $errors .= $key . " ";
        }
    }
    
    if ($errors === "") {
        var_dump($dane);
        //         $nazwisko = $_POST['nazwisko'];
        // $wiek = $_POST['wiek'];
        // $panstwo = $_POST['panstwo'];
        // $email = $_POST['email'];
        // $tech = '';

        // foreach ($_POST['tech'] as $v) {
        //     $tech .= "$v|";
        // }

        // $platnosc = $_POST['platnosc'];

        // $line = "$nazwisko,$wiek,$panstwo,$email,$tech,$platnosc\n";
        
        // fwrite($file, $line);
        // fclose($file);

        echo 'zapisane do pliku';
    } else {
        echo "<br>Niepoprawne dane: " . $errors;
    }
}

function wyswietl_form() {
    echo '<form action="index.php" method="post">
    <div class="table-responsive">
    <h1>Przykładowy formularz</h1>
    <table class="table">
        <tr>
            <td><label for="nazwisko">Nazwisko:</label></td>
            <td><input id="nazwisko" type="text" name="nazwisko" class="form-control" /></td>
        </tr>
        <tr>
            <td><label for="wiek">Wiek:</label></td>
            <td><input id="wiek" type="number" name="wiek" class="form-control" /></td>
        </tr>
        <tr>
            <td><label for="panstwo">Państwo:</label></td>
            <td><select id="panstwo" name="panstwo" class="form-control">
                    <option value="pl">Polska</option>
                    <option value="us">USA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="email">Email:</label></td>
            <td><input id="email" type="email" name="email" class="form-control" /></td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="form-group">
                <h2>Zamawiam tutorial z języka:</h2>    
                    <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="tech[]" value="cpp" /> C/C++ </label></div>
                    <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="tech[]" value="php" /> PHP </label></div>
                    <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" name="tech[]" value="java" /> Java </label></div>
                </div>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <h2>Sposób zapłaty:</h2>
                <div class="form-radio"><label class="form-radio-label"><input type="radio" name="platnosc" value="visa" class="form-radio-input" checked> Visa</label></div>
                <div class="form-radio"><label class="form-radio-label"><input type="radio" name="platnosc" value="mastercard" class="form-radio-input"> Mastercard</label></div>
                <div class="form-radio"><label class="form-radio-label"><input type="radio" name="platnosc" value="transfer" class="form-radio-input"> Przelew</label></div>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="wyslij" value="Wyślij" class="form-control btn btn-primary" /></td>
        </tr>
        <tr>
            <td><input type="submit" name="pokaz" value="Pokaż" class="btn btn-primary" />
            <td><input type="submit" name="pokazjava" value="Pokaż Java" class="btn btn-primary" />
        </tr>
    </table>
    </div>
</form>';
}
?>