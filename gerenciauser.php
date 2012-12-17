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

$login = $_POST['login'];
$senha = $_POST['senha'];
$senhacrypt = md5($senha);
$nivel = $_POST['nivel'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$especializacao = $_POST['especializacao'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$cro = $_POST['cro'];


$sql = mysql_query("INSERT INTO usuarios(nome, endereco, tel, email, cro, especializacao)VALUES('$nome', '$endereco', '$tel', '$email', '$cro', '$especializacao')", $conexao) or die("Falha ao Inserir dados");

$sql2 = mysql_query("SELECT id FROM usuarios ORDER BY id DESC LIMIT 0,1");
$dado = mysql_fetch_array($sql2);
$id_novo=$dado["id"];

$sql3 = mysql_query("INSERT INTO login(login, senha, nivel, id_usuario)VALUES('$login', '$senhacrypt', '$nivel', '$id_novo')", $conexao) or die("Falha ao Inserir dados");



echo "<center><h1>Cadastrado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=usuarios.php'>";

}

if ($acao == "editar"){

$id = $_GET['id'];

$login = $_POST['login'];
$nivel = $_POST['nivel'];
$nome = $_POST['nome'];
$endereco = $_POST['endereco'];
$especializacao = $_POST['especializacao'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$cro = $_POST['cro'];
$senha = $_POST['senha'];
$senhacrypt = md5($senha);

if ($senha == ""){
$consulta = "UPDATE usuarios SET nome = '$nome', endereco ='$endereco', tel = '$tel', email = '$email', cro = '$cro', especializacao = '$especializacao'
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

$consulta2 = "UPDATE login SET login = '$login', nivel = '$nivel'
WHERE id_usuario = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Atualizar Registro");
}

else{
$consulta = "UPDATE usuarios SET nome = '$nome', endereco ='$endereco', tel = '$tel', email = '$email', cro = '$cro', especializacao = '$especializacao'
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

$consulta2 = "UPDATE login SET login = '$login', senha = '$senhacrypt', nivel = '$nivel'
WHERE id_usuario = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Atualizar Registro");
}

echo "<center><h1>Registro Editado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=usuarios.php'>";

}

if ($acao == "excluir"){

$id = $_GET['id'];

$consulta = "DELETE FROM usuarios WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

$consulta2 = "DELETE FROM login WHERE id_usuario = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Excluir Registro");

echo "<center><h1>Registro Excluido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=usuarios.php'>";

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




