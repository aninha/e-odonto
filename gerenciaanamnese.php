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

 
$id_paciente = $_POST["id_paciente"];
$tipo_sangue = $_POST["tipo_sangue"];
$hepatite = $_POST["hepatite"];
$hemorragica = $_POST["hemorragica"];
$pressao = $_POST["pressao"];
$cardiopatia = $_POST["cardiopatia"];
$diabetes = $_POST["diabetes"];
$hiv = $_POST["hiv"];
$alergias = $_POST["alergias"];
$outros = $_POST["outros"];
$queixa = $_POST["queixa"];
$medicamento = $_POST["medicamento"];
$cirurgias = $_POST["cirurgias"];
$peso = $_POST["peso"];
$alimentacao = $_POST["alimentacao"];
$escovacao = $_POST["escovacao"];
$fiodental = $_POST["fiodental"];
$sangra = $_POST["sangra"];
$boxexo = $_POST["boxexo"];
$habitos = $_POST["habitos"];
$doencas = $_POST["doencas"];



$sql = mysql_query("INSERT INTO anamnese(id_paciente, tipo_sangue, hepatite, hemorragica, pressao, cardiopatia, diabetes, hiv, alergias, outros, queixa, medicamento, cirurgias, peso, alimentacao, escovacao, fiodental, sangra, boxexo, habitos, doencas)VALUES('$id_paciente', '$tipo_sangue', '$hepatite', '$hemorragica', '$pressao', '$cardiopatia', '$diabetes', '$hiv', '$alergias', '$outros', '$queixa', '$medicamento', '$cirurgias', '$peso', '$alimentacao', '$escovacao', '$fiodental', '$sangra', '$boxexo', '$habitos', '$doencas')", $conexao) or die("Falha ao Inserir dados");

echo "<center><h1>Anamnese Cadastrada com Sucesso</h1></center>";
echo "<meta HTTP-EQUIV='Refresh' CONTENT='2;URL=pacientes.php'>";

}


if ($acao == "excluir"){

$id_paciente = $_GET['id_paciente'];

$consulta = "DELETE FROM anamnese WHERE id_paciente = '$id_paciente'";
$resultado = mysql_query($consulta) or die ("Falha ao Excluir Registro");



echo "<center><h1>Anamnese Excluida com Sucesso</h1></center>";
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




