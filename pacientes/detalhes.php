<? 
include ("../config.php");
include ("../verifica.php"); 

$paciente = $_SESSION["id_paciente"]; 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema E-Odonto - Gerenciamento de Clinicas Odontologicas</title>
<link rel="stylesheet" type="text/css" href="../css/principal.css" />
<SCRIPT src="../js/scripts.js" type=text/javascript></SCRIPT>
</head>

<body>
<!-- INICIO CONTEUDO PRINCIPAL  -->
   <div id="Principal">
   
<!--INICIO TOPO SITE E MENU SUPERIOR -->
        <? include ("topo_site_pacientes.php"); ?>
<!-- FIM TOPO SITE E MENU SUPERIOR -->
    
    
         <!-- INICIO CONTEUDO -->
		 <div style="padding-left:10px; width:700px;" id="conteudo">
		 



<h3 class="linha">Meus Detalhes</h3>
<br />

<?

$sql = "SELECT * FROM pacientes,login WHERE pacientes.id = '$paciente' AND login.id_paciente = '$paciente'";
$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){

$nome = $linha["nome"];
$end = $linha["end"];
$cep = $linha["cep"];
$tel = $linha["tel"];
$cel = $linha["cel"];
$email = $linha["email"];
$prof = $linha["prof"];
$ecivil = $linha["ecivil"];
$nasc = $linha["nasc"];
$iniciotratamento = $linha["iniciotratamento"];
$fimtratamento = $linha["fimtratamento"];
$id_convenio2 = $linha["id_convenio"];

$login = $linha["login"];

$sql_convenio = "SELECT id,convenio FROM convenios WHERE id = '$id_convenio2'";
$resultado_convenio = mysql_query($sql_convenio) or die ("Erro na consulta");
$linha_convenio = mysql_fetch_assoc($resultado_convenio);
$convenio = $linha_convenio["convenio"];
$id_convenio = $linha_convenio["id_convenio"];

}
?>




<blockquote>

<h3 class="linha">Informacoes Pessoais</h3>

<b class="verde">Nome:</b> <? echo $nome ?>
<br />
<b class="verde">Email:</b> <? echo $email ?>
<br />
<b class="verde">Endereco:</b> <? echo $end ?>
<br />
<b class="verde">Cep:</b> <? echo $cep ?>
<br />
<b class="verde">Tel:</b> <? echo $tel ?>
<br />
<b class="verde">Cel:</b> <? echo $cel ?>
<br />
<b class="verde">Profissao:</b> <? echo $prof ?>
<br />
<b class="verde">Estado Civil:</b> <? echo $ecivil ?>
<br />
<b class="verde">Nascimento:</b> <? echo $nasc ?>
<br />
<? if ($id_convenio2 == 0) { ?>
<b class="verde">Convênio:</b> Particular
<? } else { ?>
<b class="verde">Convênio:</b> <? echo $convenio ?>
<? } ?>
<br />
<b class="verde">Inicio do Tratamento:</b> <? echo $iniciotratamento ?>
<br />
<b class="verde">Fim do Tratamento:</b> <? echo $fimtratamento ?>


<br />
<br />
</blockquote>

<br />

<blockquote>
<h3 class="linha">Dados de Acesso ao Sistema</h3>

<b class="verde">Login: </b> <? echo $login ?>
<br />
</blockquote>

<br />

	       
	                 					 
	<br />
<br />
			  
					 
	


<br /><Br />



					  </p>
		       
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
