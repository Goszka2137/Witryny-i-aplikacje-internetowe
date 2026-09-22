<!DOCTYPE html>
<html lang=pl>
<head>
    <link rel="stylesheet" href="formularz.css">
    <link rel="icon" href="/moto.ico" type="image/x-icon">
</head>
    <body>
    <form action="formularz.php" method="GET" >
         <p>Firma</p>
        <p><input type="checkbox" name="1" value="1" /> Honda</p>
        <p><input type="checkbox" name="2" value="1" /> Yamaha</p>
        <p><input type="checkbox" name="3" value="1" /> Suzuki</p>
        <p><input type="checkbox" name="4" value="1" /> Kawasaki</p>
        <p><input type="checkbox" name="5" value="1" /> BMW</p>
        
        <p>Pojemnosc</p>
        <p>
        <select name="rodzaj">
            <option value="amigurumi">125</option>
            <option value="ciuchy">300</option>
            <option value="torby">600</option>
            <option value="inne">1000</option>
        </select>
        </p>
      <p>Podaj model</p>
        <input type="text" name="model">
        <p>Podaj kolor lakieru<p/>
        <input name="lakier">
        <p>Numer seryjny</p>
        <input type="number" name="numer">
       
        <p><input type="submit" /></p>
    </form>
        </body>
</html>
