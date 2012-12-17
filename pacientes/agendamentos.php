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
		 



<h3 class="linha">Ultimos 5 Agendamentos</h3>
<br />
<?
$sql5 = "select * FROM agendamentos WHERE id_paciente='$paciente' ORDER BY day,month ASC LIMIT 5";

$resultado5 = mysql_query($sql5) or die ("Erro na consulta");

while ($linha5 = mysql_fetch_assoc($resultado5)){
$horario = $linha5["horario"];
$dia = $linha5["day"];
$mes = $linha5["month"];
$ano = $linha5["year"];
$obsagenda = $linha5["obsagenda"];

?>

<blockquote class="caixa">
<b class="verde">Data:</b> <? echo $dia."/".$mes."/".$ano ?><br/>
<b class="verde">Horario:</b> <? echo $horario ?><br/>
<b class="verde">Tratamento:</b> <? echo $obsagenda ?><br/>
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
