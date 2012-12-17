<?
require ("verifica.php");
include ("config.php"); 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema E-Odonto - Gerenciamento de Clinicas Odontologicas</title>
<link rel="stylesheet" type="text/css" href="css/principal.css" />
<SCRIPT src="js/scripts.js" type=text/javascript></SCRIPT>
</head>

<body>
<!-- INICIO CONTEUDO PRINCIPAL  -->
   <div id="Principal">
   
<!--INICIO TOPO SITE E MENU SUPERIOR -->
        <? include ("topo_site.php"); ?>
<!-- FIM TOPO SITE E MENU SUPERIOR -->
    
    <br />
    
         <!-- INICIO CONTEUDO -->
		 <div style="padding-left:10px;" >
<?

$sql = "SELECT COUNT(*) AS totalpacientes FROM pacientes";
$resultado = mysql_query($sql) or die ("Erro na consulta");
$linha = mysql_fetch_assoc($resultado);
$totalpacientes = $linha['totalpacientes'];


$sql2 = "SELECT COUNT(*) AS totalagendamentos FROM agendamentos";
$resultado2 = mysql_query($sql2) or die ("Erro na consulta");
$linha2 = mysql_fetch_assoc($resultado2);
$totalagendamentos = $linha2['totalagendamentos'];

?>		 


				     <p>
					 Seja bem vindo(a) <font color="#FF0000"> <b>Dr(a). <? echo $_SESSION["nome_usuario"]; ?> </b> </font>       <br />
                     
					 <br />
                     Para navegar no sistema, utilize o menu acima. <br />
                     Está é a área administrativa do sistema. Somente usuários autorizados
						   
  <br /><br />
No momento temos <b><? echo $totalagendamentos; ?></b> agendamentos marcados com um total de <b><? echo $totalpacientes; ?></b> pacientes
<bR />
					  						   
		
<br />
<br />
<br />

A Equipe E-Odonto agradece!
<br />
Qualquer duvida envie-nos um email para <a href="mailto:suporte@thunderweb.com.br">suporte@thunderweb.com.br</a>
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
