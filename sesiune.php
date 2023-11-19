<?php
session_start();?>
<html>
<head><title>Exemplu de sesiune</title></head>
<?php
$_SESSION['Nume']="Ionescu";
$_SESSION['Prenume']="Laura";
?>
<a href="sesiune2.php">pagina spre care se trimit variabilele de sesiune</a>
</html>
(în biblioteca cu exerciții rezolvate PB8_sesiuni/sesiune2.php)
<html>
<head><title>Exemplu de sesiune</title></head>
<body>
<?php
session_start();
$_SESSION['Nume2']="Pop";
$_SESSION['Prenume2']="Ioan";
$_SESSION['Varsta']=39;
?>
<a href="sesiune3.php">pagina spre care se trimit variabilele de sesiune</a>
</body>
</html>
(în biblioteca cu exerciții rezolvate PB8_sesiuni/sesiune3.php)
<html>
<head><title>Exemplu de sesiune</title></head>
<body>
<?php
session_start();
echo $_SESSION['Nume']." ";
echo $_SESSION['Prenume']."<br />";
echo $_SESSION['Nume2'].' ';
echo $_SESSION['Prenume2']." ";
echo $_SESSION['Varsta'];
unset($_SESSION['Nume']);
unset($_SESSION['Prenume']);
unset($_SESSION['Nume2']);
unset($_SESSION['Prenume2']);
unset($_SESSION['Varsta']);
session_destroy();
?>
</body>
</html>