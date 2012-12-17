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
		 
<? include ("menus/menu_estoque.php"); ?>
		       
<div id="conteudo_direita">		

	 
	<h1>Estoque</h1> 
					 
<p></p>
      

<div style="border:0px solid gray; width:650px; margin-bottom: 1em; padding: 10px">




<table width="100%" border="0" cellpadding="2">
  <tr class="tabelinha_titulo">
    <td>Produto</td>
    <td>Fabricante</td>
    <td>Valor Unitário</td>
    <td>Qnt</td>
    <td>Descricao</td>
  </tr>
 
<?

$sql = "SELECT * FROM estoque ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$produto = $linha['produto'];
$fornecedor = $linha['fornecedor'];
$qnt = $linha['qnt'];
$descricao = $linha['descricao'];
$valor = $linha['valor'];
$qntmin = $linha['qntmin'];
?> 
  
  <tr>
    <td><a href="cadmaterial.php?acao=editar&id=<? echo $id ?>"><? echo $produto ?></a></td>
    <td><? echo $fornecedor ?></td>
    <td align="center">R$ <? echo $valor ?></td>
   <form name="estoque" method="get" action="gerenciaestoque.php">
   <? if ($qnt <= $qntmin) { ?>
    <td align="center"><a href="gerenciaestoque.php?acao=diminuir&id=<? echo $id ?>" /><img src="imagens/left.gif" /></a>&nbsp;<input style="border:#FF0000; text-align:center;" class="erro" type="text" name="qnt" value="<? echo $qnt ?>" size="5" />&nbsp;<a href="gerenciaestoque.php?acao=aumentar&id=<? echo $id ?>"><img src="imagens/right.gif" /></a></td>
    </form>
   
   <? } else { ?> 
     <td align="center"><a href="gerenciaestoque.php?acao=diminuir&id=<? echo $id ?>"><img src="imagens/left.gif" /></a>&nbsp;<input style="text-align:center;" class="sucesso" type="text" name="qnt" value="<? echo $qnt ?>" size="5" />&nbsp;<a href="gerenciaestoque.php?acao=aumentar&id=<? echo $id ?>"><img src="imagens/right.gif" /></a></td>
     
     
      
      </form>
   <? } ?>  
      
    <td><? echo $descricao ?></td>
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

