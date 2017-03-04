<?
$link = mysql_connect("localhost", "root", "vertrigo")
        or die("Erro de conexão com o banco: " . mysql_error());

$query = "INSERT INTO `teste` (`lixo`) VALUES ('";
$query .= $_POST["txt"] ."')";

 mysql_select_db ("flundi");
 $result = mysql_query($query) or die("Erro ao atualizar registros no Banco: " . mysql_error());

?>
<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?php
$result = mysql_query("SELECT * FROM teste") or die("Erro ao acessar registros no Banco de dados: " . mysql_error());	
	$dj = mysql_fetch_row($result);
	echo($dj[0]);
?>
</body>
</html>
