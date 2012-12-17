<? 
require ("config.php");
require("verifica.php");
?>




<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema E-Odonto - Gerenciamento de Clinicas Odontologicas</title>
<link rel="stylesheet" type="text/css" href="css/principal.css" />

</head>

<body>


<?
// Recebe variaveis de Cadastro

$acao = $_GET['acao'];

if ($acao == "cadastrar"){

$dente = $_POST['dente'];
$problema = $_POST['problema'];
$paciente = $_POST['paciente'];



//$sql = mysql_query("INSERT INTO arcada(id_paciente, $dente)VALUES('$paciente', '$problema')", $conexao) or die("Falha ao Inserir dados");
$consulta = "UPDATE arcada SET $dente = '$problema' 
WHERE id_paciente = '$paciente'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

  echo "<script>alert('Salvo com Sucesso');</script>";
  echo "<script>close();</script>";

}


if ($acao == "excluir"){

$paciente = $_GET['id'];
$dente = $_GET['dente'];

$consulta = "DELETE FROM arcada WHERE id_paciente = '$paciente' AND $dente = '$dente'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=pacientes.php'>";

}


?>

<? 
if ($acao == "form"){

$dente = $_GET['dente'];
$id = $_GET['id'];

?>
<form name="caddente" method="post" action="arcada.php?acao=cadastrar">
Insira o Problema do Dente
<textarea name="problema"></textarea>
<input type="hidden" name="dente" value="<? echo $dente; ?>" />
<input type="hidden" name="paciente" value="<? echo $id; ?>" />

<center><input type="submit" class="button" value="Salvar"></center>
</form>

<? } ?>

<? 
if ($acao == "mostrar"){

$dente = $_GET['dente'];
$paciente = $_GET['id'];

$query = "select * FROM arcada WHERE id_paciente='$paciente'";
$result = mysql_query($query);
$row = mysql_fetch_object($result);

echo "Problema: ".$row->$dente."\n";

?>


<? } ?>

		
 

</body>
</html>




