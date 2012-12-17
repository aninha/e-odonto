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
		 <div id="conteudo">
		 
<? include ("menus/menu_proteticoseconvenios.php"); ?>
		       
<div id="conteudo_direita">		

	 
	<h1>Convênios</h1> 
					 
<p></p>
      

<div style="border:0px solid gray; width:650px; margin-bottom: 1em; padding: 10px">




<table width="100%" border="0" cellpadding="2">
  <tr class="tabelinha_titulo">
    <td>Convênio</td>
    <td>Empresa</td>
    <td>Plano</td>
    <td>Cobertura</td>
 </tr>
 
<?

$sql = "SELECT * FROM convenios ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$convenio = $linha['convenio'];
$empresa = $linha['empresa'];
$plano = $linha['plano'];
$cobertura = $linha['cobertura'];

?> 
  
  <tr>
    <td><a href="cadconvenio.php?acao=editar&id=<? echo $id ?>"><? echo $convenio ?></a></td>
    <td><? echo $empresa ?></td>
    <td><? echo $plano ?></td>
    <td><? echo $cobertura ?></td>   
  </tr>
  
<? } ?>

</table>

<br />

</div>



		       
			   <div class="espacador"></div>
			   
		       </div>
		       <!-- FIM CONTEUDO DIREITA -->
			   
			   <div class="espacador"></div>
			   
</div>

<!-- INICIO RODAPE -->
         <? include ("rodape.php"); ?>
<!-- FIM RODAPE -->
		 
   </div>
<!-- FIM PRINCPIAL -->
</body>
</html>

