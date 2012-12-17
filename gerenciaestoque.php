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

$produto = $_POST['produto'];
$fornecedor = $_POST['fornecedor'];
$qnt = $_POST['qnt'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$qntmin = $_POST['qntmin'];

$sql = mysql_query("INSERT INTO estoque(produto, fornecedor, qnt, descricao, valor, qntmin)VALUES('$produto', '$fornecedor', '$qnt', '$descricao', '$valor', '$qntmin')", $conexao) or die("Falha ao Inserir dados");


echo "<center><h1>Material cadastrado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=estoque.php'>";

}

if ($acao == "aumentar"){

$id = $_GET['id'];
$qnt = $_POST['qnt'];

$consulta = "UPDATE estoque SET qnt = qnt + 1
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");


echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=estoque.php'>";

}

if ($acao == "diminuir"){

$id = $_GET['id'];
$qnt = $_POST['qnt'];

$consulta = "UPDATE estoque SET qnt = qnt - 1
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");


echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=estoque.php'>";

}

if ($acao == "editar"){

$id = $_GET['id'];

$produto = $_POST['produto'];
$fornecedor = $_POST['fornecedor'];
$qnt = $_POST['qnt'];
$descricao = $_POST['descricao'];
$valor = $_POST['valor'];
$qntmin = $_POST['qntmin'];

$consulta = "UPDATE estoque SET produto = '$produto', fornecedor = '$fornecedor', qnt = '$qnt', descricao = '$descricao', valor = '$valor', qntmin = '$qntmin' 
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

echo "<center><h1>Editado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='1;URL=estoque.php'>";

}

if ($acao == "excluir"){

$id = $_GET['id'];

$consulta = "DELETE FROM estoque WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

echo "<center><h1>Material Excluido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=estoque.php'>";

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




