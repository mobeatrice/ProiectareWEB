<html>
<head>
    <title> Formular cu GET</title></head><body>
<form action="PB4_2exget.php" method="get">
    Nume: <input type="text" name="nume" />
    Varsta: <input type="text" name="varsta"/>

    <input type="submit" />
</form>
</body></html>
Pagina de pe server care primește datele de la formular
<?php
echo "Bun venit,". $_GET["nume"] ."<br/>";
echo "Varsta dvs,". $_GET["varsta"] ."!";?>