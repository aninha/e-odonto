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

$nome = $_POST['nome'];
$data_envio = $_POST['data_envio'];
$data_devolucao = $_POST['data_devolucao'];
$trabalhos = $_POST['trabalhos'];
$valor = $_POST['valor'];
$obs = $_POST['obs'];
$status = $_POST['status'];


$sql = mysql_query("INSERT INTO proteticos(nome, data_envio, data_devolucao, trabalhos, valor, obs, status)VALUES('$nome', '$data_envio', '$data_devolucao', '$trabalhos', '$valor', '$obs', '$status')", $conexao) or die("Falha ao Inserir dados");


echo "<center><h1>Protetico/trabalho cadastrado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=proteticos.php'>";

}


if ($acao == "editar"){

$id = $_GET['id'];

$nome = $_POST['nome'];
$data_envio = $_POST['data_envio'];
$data_devolucao = $_POST['data_devolucao'];
$trabalhos = $_POST['trabalhos'];
$valor = $_POST['valor'];
$obs = $_POST['obs'];
$status = $_POST['status'];

$consulta = "UPDATE proteticos SET nome = '$nome', data_envio = '$data_envio', data_devolucao = '$data_devolucao', trabalhos = '$trabalhos', valor = '$valor' , obs = '$obs', status = '$status' 
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

echo "<center><h1>Editado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=proteticos.php'>";

}


if ($acao == "atualizastatus"){

$id = $_GET['id'];
$status = $_GET['status'];

$consulta = "UPDATE proteticos SET status = '$status' 
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=proteticos.php'>";

}

if ($acao == "excluir"){

$id = $_GET['id'];

$consulta = "DELETE FROM proteticos WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

echo "<center><h1>Protetico Excluido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=proteticos.php'>";

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




