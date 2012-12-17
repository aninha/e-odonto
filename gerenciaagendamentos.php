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
$nivel = $_POST["nivel"];

$nome = $_POST["nome"];
$end = $_POST["end"];
$cep = $_POST["cep"];
$tel = $_POST["tel"];
$cel = $_POST["cel"];
$email = $_POST["email"];
$prof = $_POST["prof"];
$ecivil = $_POST["ecivil"];
$nasc = $_POST["nasc"];
$indicado = $_POST["indicado"];
$iniciotratamento = $_POST["iniciotratamento"];
$fimtratamento = $_POST["fimtratamento"];
$obs = $_POST["obs"];




$sql = mysql_query("INSERT INTO pacientes(nome, end, cep, tel, cel, email, prof, ecivil, nasc, indicado, iniciotratamento, fimtratamento, obs)VALUES('$nome', '$end', '$cep', '$tel', '$cel', '$email', '$prof', '$ecivil', '$nasc', '$indicado', '$iniciotratamento', '$fimtratamento', '$obs')", $conexao) or die("Falha ao Inserir dados");

$sql2 = mysql_query("SELECT id FROM pacientes ORDER BY id DESC LIMIT 0,1");
$dado = mysql_fetch_array($sql2);
$id_novo=$dado["id"];

$sql3 = mysql_query("INSERT INTO login(login, senha, nivel, id_paciente)VALUES('$login', '$senhacrypt', '$nivel', '$id_novo')", $conexao) or die("Falha ao Inserir dados");


echo "<center><h1>Cadastrado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pacientes.php'>";

}

if ($acao == "editar"){

$id = $_GET['id'];

$login = $_POST['login'];
$senha = $_POST['senha'];
$senhacrypt = md5($senha);

$nome = $_POST["nome"];
$end = $_POST["end"];
$cep = $_POST["cep"];
$tel = $_POST["tel"];
$cel = $_POST["cel"];
$email = $_POST["email"];
$prof = $_POST["prof"];
$ecivil = $_POST["ecivil"];
$nasc = $_POST["nasc"];
$indicado = $_POST["indicado"];
$iniciotratamento = $_POST["iniciotratamento"];
$fimtratamento = $_POST["fimtratamento"];
$obs = $_POST["obs"];

if ($senha == ""){
$consulta = "UPDATE pacientes SET nome = '$nome', end = '$end', cep = '$cep', tel ='$tel', cel = '$cel', email = '$email', prof = '$prof', ecivil = '$ecivil', nasc = '$nasc', indicado = '$indicado', iniciotratamento = '$iniciotratamento', fimtratamento = '$fimtratamento', obs = '$obs'
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

$consulta2 = "UPDATE login SET login = '$login'
WHERE id_paciente = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Atualizar Registro");
}

else{
$consulta = "UPDATE pacientes SET nome = '$nome', end = '$end', cep = '$cep', tel ='$tel', cel = '$cel', email = '$email', prof = '$prof', ecivil = '$ecivil', nasc = '$nasc', indicado = '$indicado', iniciotratamento = '$iniciotratamento', fimtratamento = '$fimtratamento', obs = '$obs'
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

$consulta2 = "UPDATE login SET login = '$login', senha = '$senhacrypt'
WHERE id_paciente = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Atualizar Registro");
}

echo "<center><h1>Registro Editado com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pacientes.php'>";

}

if ($acao == "excluir"){

$id = $_GET['id'];

$consulta = "DELETE FROM pacientes WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");

$consulta2 = "DELETE FROM login WHERE id_paciente = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Excluir Registro");

echo "<center><h1>Registro Excluido com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pacientes.php'>";

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




