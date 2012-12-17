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
		 <div style="padding-left:10px;" id="conteudo">
		 

<?

$sql = "SELECT * FROM pacientes WHERE id = '$paciente' ";
$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){

$nome = $linha["nome"];

}
?>		       
	                 					 
	<br />
<br />
			  
					 
				     <p>
					 Seja bem vindo <font color="#FF0000"> <b><? echo $nome ?> </b> </font>       <br />
                     
					 <br />
                     Para navegar no sistema, utilize o menu acima. <br />
                     Está é sua area restrita aonde você poderá consultar seus <a href="pagamentos.php">pagamentos</a>  e <a href="agendamentos.php">agendamentos</a>, bem como visualizar seus <a href="detalhes.php">dados</a>.
						   
						  						   
		
<br />
<br />
<br />

A Equipe E-Odonto agradece a preferencia!
<br />
Qualquer duvida envie-nos um email para <a href="mailto:contato@e-odonto.odo.br">contato@e-odonto.odo.br</a>
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
