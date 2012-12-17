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
$id_convenio = $_POST["id_convenio"];




$sql = mysql_query("INSERT INTO pacientes(nome, end, cep, tel, cel, email, prof, ecivil, nasc, indicado, iniciotratamento, fimtratamento, obs, id_convenio)VALUES('$nome', '$end', '$cep', '$tel', '$cel', '$email', '$prof', '$ecivil', '$nasc', '$indicado', '$iniciotratamento', '$fimtratamento', '$obs', '$id_convenio')", $conexao) or die("Falha ao Inserir dados");

$sql2 = mysql_query("SELECT id FROM pacientes ORDER BY id DESC LIMIT 0,1");
$dado = mysql_fetch_array($sql2);
$id_novo=$dado["id"];

$sql3 = mysql_query("INSERT INTO login(login, senha, nivel, id_paciente)VALUES('$login', '$senhacrypt', '$nivel', '$id_novo')", $conexao) or die("Falha ao Inserir dados");
$sql_arcada = mysql_query("INSERT INTO arcada(id_paciente)VALUES('$id_novo')", $conexao) or die("Falha ao Inserir dados");


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
$id_convenio = $_POST["id_convenio"];

if ($senha == ""){
$consulta = "UPDATE pacientes SET nome = '$nome', end = '$end', cep = '$cep', tel ='$tel', cel = '$cel', email = '$email', prof = '$prof', ecivil = '$ecivil', nasc = '$nasc', indicado = '$indicado', iniciotratamento = '$iniciotratamento', fimtratamento = '$fimtratamento', obs = '$obs', id_convenio = '$id_convenio'
WHERE id = '$id'";
$resultado = mysql_query($consulta) or die ("Falha ao Atualizar Registro");

$consulta2 = "UPDATE login SET login = '$login'
WHERE id_paciente = '$id'";
$resultado2 = mysql_query($consulta2) or die ("Falha ao Atualizar Registro");
}

else{
$consulta = "UPDATE pacientes SET nome = '$nome', end = '$end', cep = '$cep', tel ='$tel', cel = '$cel', email = '$email', prof = '$prof', ecivil = '$ecivil', nasc = '$nasc', indicado = '$indicado', iniciotratamento = '$iniciotratamento', fimtratamento = '$fimtratamento', obs = '$obs', id_convenio = '$id_convenio'
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

if ($acao == "enviaremail"){

$nome = $_POST['nome'];
$email = $_POST['email'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

if ($nome!="" and $assunto!="" and $email!="")
	{
	$msg.="Nome: $nome\n";
	$msg.="Email: $email\n";
	$msg.="Assunto: $assunto\n";
	$msg.="Mensagem: $mensagem\n";
	
	mail($email, "E-Odonto: $assunto", $msg, "From:e-odonto<$email_sistema>");
	
	echo "<center><h1>Mensagem Enviada com sucesso!</h1></center>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pacientes.php'>";
	}
	
else
	{
	//Alerta sobre os campos obrigatórios
	echo 
		"
		<br><br><center>
		Atenção!! Os campos (Nome, E-mail e Mensagem ) não podem estar em branco. <br><br>
		<a href=\"javascript:window.history.go(-1)\" >Por favor, volte e preencha corretamente.</a>
		</center>
		";
	}

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




