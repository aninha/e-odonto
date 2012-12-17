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
		 
<? include ("menus/menu_pagamentos.php"); ?>
		       
<div id="conteudo_direita">		

	 
	<h1>Histórico de Pagamentos</h1> 
					 
<p></p>
      

<div style="border:0px solid gray; width:650px; margin-bottom: 1em; padding: 10px">




<table width="100%" border="0" cellpadding="2">
  <tr class="tabelinha_titulo">
    <td>ID</td>
    <td>Paciente</td>
    <td>Data do Pagamento</td>
    <td>Forma</td>
    <td>Valor</td>
    <td>Status</td>
    <td>Descrição</td>
 </tr>
 
<?

$sql = "SELECT * FROM pagamentos,pacientes WHERE pagamentos.id_paciente = pacientes.id  ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id_pagamento = $linha['id_pagamento'];
$dt_pagamento = $linha['dt_pagamento'];
$forma = $linha['forma'];
$valor = $linha['valor'];
$descricao = $linha['descricao'];
$status = $linha['status'];
$nome = $linha['nome'];
$id = $linha['id'];

?> 
  
  <tr>
    <td><a href="cadpagamento.php?acao=editar&id_pagamento=<? echo $id_pagamento ?>"><? echo $id_pagamento ?></a></td>
    <td><a href="detalhes_paciente.php?id=<? echo $id ?>"><? echo $nome ?></a></td>
    <td align="center"><? echo $dt_pagamento ?></td>
    <td><? echo $forma ?></td>   
    <td>R$ <? echo $valor ?></td> 
    <td align="center">
	
<? 
if ($status == "Pago") {
     echo "<b class=sucesso>$status</b>";
}else{ ?>
	   
    <select name="status"  onchange="MM_jumpMenu('parent',this,0)">
   		<option class="erro" value="<? echo $status ?>" selected><? echo $status ?></option>
    	<option value="gerenciapagamentos.php?acao=atualizastatus&id_pagamento=<? echo $id_pagamento ?>&status=Pago">Pago</option>
    	<option value="gerenciapagamentos.php?acao=atualizastatus&id_pagamento=<? echo $id_pagamento ?>&status=NaoPago">Nao Pago</option>
    </select>
<?
}	 
?>
    
    
    </td> 
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

