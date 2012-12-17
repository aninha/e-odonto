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
		 



<h3 class="linha">Ultimos Pagamentos</h3>
<br />
<?
$sql6 = "select * FROM pagamentos WHERE id_paciente='$paciente'";

$resultado6 = mysql_query($sql6) or die ("Erro na consulta");

while ($linha6 = mysql_fetch_assoc($resultado6)){
$id_pagamento = $linha6['id_pagamento'];
$dt_pagamento = $linha6['dt_pagamento'];
$forma = $linha6['forma'];
$valor = $linha6['valor'];
$descricao = $linha6['descricao'];
$status = $linha6['status'];


?>

<blockquote class="caixa">
<b class="verde">Referencia:</b># <? echo $id_pagamento ?><br/>
<b class="verde">Data do Pagamento:</b> <? echo $dt_pagamento ?><br/>
<b class="verde">Forma:</b> <? echo $forma ?><br/>
<b class="verde">Valor Pago:</b> <? echo $valor ?><br/>
<b class="verde">Status:</b> <? echo $status ?><br/>
<b class="verde">Descrição do Pagamento:</b> <? echo $descricao ?><br/>
</blockquote>

<? } ?>
		       
	                 					 
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
