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

$dt_pagamento = $_POST['dt_pagamento'];
$forma = $_POST['forma'];
$valor = $_POST['valor'];
$id_paciente = $_POST['id_paciente'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];


$sql = mysql_query("INSERT INTO pagamentos(dt_pagamento, forma, valor, descricao, status, id_paciente)VALUES('$dt_pagamento', '$forma', '$valor', '$descricao', '$status', '$id_paciente')", $conexao) or die("Falha ao Inserir dados");


echo "<center><h1>Pagamento Inserido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pagamentos.php'>";

}


if ($acao == "editar"){

$id_pagamento = $_GET['id_pagamento'];

$dt_pagamento = $_POST['dt_pagamento'];
$forma = $_POST['forma'];
$valor = $_POST['valor'];
$id_paciente = $_POST['id_paciente'];
$descricao = $_POST['descricao'];
$status = $_POST['status'];

$consulta = "UPDATE pagamentos SET dt_pagamento = '$dt_pagamento', forma = '$forma', valor = '$valor', id_paciente = '$id_paciente', descricao = '$descricao', status = '$status' 
WHERE id_pagamento = '$id_pagamento'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

echo "<center><h1>Editado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=pagamentos.php'>";

}

if ($acao == "atualizastatus"){

$id_pagamento = $_GET['id_pagamento'];
$status = $_GET['status'];

$consulta = "UPDATE pagamentos SET status = '$status' 
WHERE id_pagamento = '$id_pagamento'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=pagamentos.php'>";

}



if ($acao == "excluir"){

$id_pagamento = $_GET['id_pagamento'];

$consulta = "DELETE FROM pagamentos WHERE id_pagamento = '$id_pagamento'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

echo "<center><h1>Pagamento Excluido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pagamentos.php'>";

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




