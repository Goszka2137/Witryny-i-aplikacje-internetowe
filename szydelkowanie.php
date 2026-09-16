<!DOCTYPE HTML>
<html lang="en">
    <head> 
        <meta charset="UTF=8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Gosia </title>
        <link rel="stylesheet" href="style.css">
</head>
        <body>
<?php
$polaczenie = mysqli_connect("localhost", "root", "", "szydelkowanie");

$zapytanie = "SELECT * FROM akcesoria";
$wynik = mysqli_query($polaczenie, $zapytanie);

while ($wiersz = mysqli_fetch_assoc($wynik)) {
    echo $wiersz['nazwa'] . " - " . $wiersz['opis'] . " <br>";
}

mysqli_close($polaczenie);
?>
</body>
</html>
