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
<!-- INICIO CONTEUDO PRINCIPAL  -->
   <div id="Principal">
   
<!--INICIO TOPO SITE E MENU SUPERIOR -->
           <div id="topo_site">
		 
		     <a href="index.php">
              <img src="imagens/logo.jpg" /></img>		 
			 </a>
		 </div>
<!-- FIM TOPO SITE E MENU SUPERIOR -->
    
    <br />
         <!-- INICIO CONTEUDO -->
		 <div id="conteudo">
		 

<?
// Recebe variaveis de Cadastro

$acao = $_GET['acao'];

if ($acao == "cadastrar"){

$convenio = $_POST['convenio'];
$empresa = $_POST['empresa'];
$plano = $_POST['plano'];
$cobertura = $_POST['cobertura'];


$sql = mysql_query("INSERT INTO convenios(convenio, empresa, plano, cobertura)VALUES('$convenio', '$empresa', '$plano', '$cobertura')", $conexao) or die("Falha ao Inserir dados");


echo "<center><h1>Convênio cadastrado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=convenios.php'>";

}


if ($acao == "editar"){

$id = $_GET['id'];

$convenio = $_POST['convenio'];
$empresa = $_POST['empresa'];
$plano = $_POST['plano'];
$cobertura = $_POST['cobertura'];

$consulta = "UPDATE convenios SET convenio = '$convenio', empresa = '$empresa', plano = '$plano', cobertura = '$cobertura' 
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

echo "<center><h1>Editado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=convenios.php'>";

}



if ($acao == "excluir"){

$id = $_GET['id'];

$consulta = "DELETE FROM convenios WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

echo "<center><h1>Convenio Excluido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=convenios.php'>";

}


?>

		
   				 	 
					 <br /><BR /><Br /><br /><br />
				    
		       
			   <div class="espacador"></div>
			   
		       </div>
		       <!-- FIM CONTEUDO DIREITA -->
			   
			   <div class="espacador"></div>
			   


<!-- INICIO RODAPE -->
         <? include ("rodape.php"); ?>
<!-- FIM RODAPE -->
		 
   </div>
<!-- FIM PRINCPIAL -->
</body>
</html>




