<html><head><title>un formular cu select</title></head>
<body>
<form action="PB10_FormRaspuns.php" method="POST">
    <p><strong>Name:</strong><br>
        <input type="text" name="user"></p>
    <p> <strong>Adresa:</strong><br>
        <textarea name="adresa" rows="5" cols="40"></textarea></p>
    <p><strong>Selectati un produs:</strong></p>
    <select name="produs[]" multiple>
        <option value="casetofon">Casetofon</option>
        <option value="CD">CD</option>
        <option value="video">Video</option>
    </select>
    <p><input type="submit" value="send"></p>
</form></body></html>
Pagina care afișează datele colectate de la utilizator
<html>
<head>
    <title>un formular cu select</title>
</head>
<body>
<?php
echo "<p>Bine ati venit<b>$_POST[user]</b></p>";
echo "<p>Adresa introdusa este:<br><b>$_POST[adresa]<b></p>";
echo "<p>Produsele alese:<br>";
if(!empty($_POST['produs'])) //testam existenta variabilei $_POST[produs]
{
    echo "<ul>";
    foreach ($_POST['produs'] as $value){
        echo "<li>$value";}
    echo "</ul>";
}?>
</body>
</html>