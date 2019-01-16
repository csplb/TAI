<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file" accept=".jpg" />
    <input type="submit" />
</form>

<?php
$katalog = @dir('.') or die ('Brak dostępu do katalogu.');
while ($plik_kat = $katalog->read())
if(is_file('/'.$plik_kat))
    echo '<a href="'.$plik_kat.'">'.$plik_kat.'</a><br />';

if (!empty($_FILES)) {
    move_uploaded_file($_FILES['file']['tmp_name'], './' . $_FILES['file']['name']);
    //    var_dump($_FILES);
}
?>