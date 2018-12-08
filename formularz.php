<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Formularz</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Przykładowy formularz</h1>
    <form action="odbierz.php" method="get">
        <table>
            <tr>
                <td><label for="nazwisko">Nazwisko:</label></td>
                <td><input id="nazwisko" type="text" name="nazwisko" /></td>
            </tr>
            <tr>
                <td><label for="wiek">Wiek:</label></td>
                <td><input id="wiek" type="number" name="wiek" /></td>
            </tr>
            <tr>
                <td><label for="country">Państwo:</label></td>
                <td><select id="country" name="country">
                        <option value="pl">Polska</option>
                        <option value="us">USA</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input id="email" type="email" name="email" /></td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Zamawiam tutorial z języka:</h2>    
                    <?php
                        $tech = [ "C", "PHP", "Java" ];

                        foreach ($tech as $t) {
                        ?>
                            <label><input type="checkbox" name="tech[]" value="<?= $t ?>" /> <?= $t ?></label>
                        <?php 
                        }
                        ?>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <h2>Sposób zapłaty:</h2>
                    <label><input type="radio" name="payment" value="visa"> Visa</label>
                    <label><input type="radio" name="payment" value="mastercard"> Mastercard</label>
                    <label><input type="radio" name="payment" value="transfer"> Przelew</label>
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" value="Wyślij" /></td>
            </tr>
        </table>
    </form>

    
</body>
</html>