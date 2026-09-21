<!DOCTYPE html>
<html lang=pl>
<head>
    <link rel="stylesheet" href="formularz.css">
    <link rel="icon" href="/stokrotka.ico" type="image/x-icon">
</head>
    <body>
    <form action="formularz.php" method="GET" >
        <p>Podaj rodzaj wloczki</p>
        <input type="text" name="wloczka">
        <p>Podaj kolor wloczki<p/>
        <input name="kolor">
        <p>Rozmiar szydelka</p>
        <input type="number" name="szydelko">
       <p>Czas</p>
        <p><input type="checkbox" name="1" value="1" /> 1 godzina</p>
        <p><input type="checkbox" name="2" value="1" /> 2 godziny</p>
        <p><input type="checkbox" name="3" value="1" /> 3 godziny</p>
        <p><input type="checkbox" name="4" value="1" /> 4 godziny</p>
        <p><input type="checkbox" name="5" value="1" /> 5 godzin</p>
        <p>Rodzaj</p>
        <p>
        <select name="rodzaj">
            <option value="amigurumi">Amigurumi</option>
            <option value="ciuchy">Ciuchy</option>
            <option value="torby">Torby lub plecaki</option>
            <option value="inne">Inne</option>
        </select>
        </p>
        <p><input type="submit" /></p>
    </form>
        </body>
</html>
