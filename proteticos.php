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
<script type="text/javascript">
<!--
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
//-->
</script>
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

	 
	<h1>Protéticos e Trabalhos</h1> 
					 
<p></p>
      

<div style="border:0px solid gray; width:650px; margin-bottom: 1em; padding: 10px">




<table width="100%" border="0" cellpadding="2">
  <tr class="tabelinha_titulo">
    <td>Nome</td>
    <td>Trabalhos</td>
    <td>Valor</td>
    <td>Data de Envio</td>
    <td>Data de Entrega</td>
    <td>Status</td>
    <td>Obs</td>
  </tr>
 
<?

$sql = "SELECT * FROM proteticos ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$nome = $linha['nome'];
$data_envio = $linha['data_envio'];
$data_devolucao = $linha['data_devolucao'];
$trabalhos = $linha['trabalhos'];
$valor = $linha['valor'];
$obs = $linha['obs'];
$status = $linha['status'];

?> 
  
  <tr>
    <td><a href="cadprotetico.php?acao=editar&id=<? echo $id ?>"><? echo $nome ?></a></td>
    <td><? echo $trabalhos ?></td>
    <td>R$ <? echo $valor ?></td>
    <td><? echo $data_envio ?></td>
    <td><? echo $data_devolucao ?></td>
   
    <td align="center">
    
    <? 
if ($status == "Concluido") {
     echo "<b class=sucesso>$status</b>";
}else{ ?>
	   
    <select name="status"  onchange="MM_jumpMenu('parent',this,0)">
   		<option class="erro" value="<? echo $status ?>" selected><? echo $status ?></option>
    	<option value="gerenciaproteticos.php?acao=atualizastatus&id=<? echo $id ?>&status=Encaminhado">Encaminhado</option>
    	<option value="gerenciaproteticos.php?acao=atualizastatus&id=<? echo $id ?>&status=Processando">Processando</option>
    	<option value="gerenciaproteticos.php?acao=atualizastatus&id=<? echo $id ?>&status=Concluido">Concluido</option>
  </select>
<?
}	 
?>
   
    </td>
    <td><? echo $obs ?></td>
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

