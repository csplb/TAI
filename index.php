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
    <form action="odbierz.php" method="post">
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
                <td colspan="2"><input type="submit" value="Wyślij" class="form-control btn btn-primary" /></td>
            </tr>
        </table>
        </div>
    </form>

    </div>
</body>
</html>