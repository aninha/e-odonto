<?
require ("verifica.php");
include ("config.php"); 

$mes = $_GET['mes'];

//$mes[01]="Janeiro";
//$mes[02]="Fevereiro";
//$mes[03]="Março";
//$mes[04]="Abril";
//$mes[05]="Maio";
//$mes[06]="Junho";
//$mes[07]="Julho";
//$mes[08]="Augosto";
//$mes[09]="Setembro";
//$mes[10]="Outubro";
//$mes[11]="Novembero";
//$mes[12]="Dezembro";



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
		 

		       
<div style="padding-left:10px;">		

	 
	<h1>Aniversariantes de 01/<? echo $mes; ?> à 31/<? echo $mes; ?></h1> 
	
					 
<p></p>
      

<div align="right">
  <form id="form">
    <select name="jumpMenu" id="jumpMenu" onchange="MM_jumpMenu('parent',this,0)">
      <option value="0">Selecione o Mes</option>
      <option value="aniversariantes.php?mes=01">Janeiro</option>
      <option value="aniversariantes.php?mes=02">Fevereiro</option>
      <option value="aniversariantes.php?mes=03">Marco</option>
      <option value="aniversariantes.php?mes=04">Abril</option>
      <option value="aniversariantes.php?mes=05">Maio</option>
      <option value="aniversariantes.php?mes=06">Junho</option>
      <option value="aniversariantes.php?mes=07">Julho</option>
      <option value="aniversariantes.php?mes=08">Agosto</option>
      <option value="aniversariantes.php?mes=09">Setembro</option>
      <option value="aniversariantes.php?mes=10">Outubro</option>
      <option value="aniversariantes.php?mes=11">Novembro</option>
      <option value="aniversariantes.php?mes=12">Dezembro</option>
      
    </select>
  </form>
</div>

<div style="border:0px solid gray; width:800px; margin-bottom: 1em; padding: 10px">



<table align="center" width="70%" border="0" cellpadding="2">
  <tr class="tabelinha_titulo">
  
    <td>Paciente</td>
    <td>Data de Aniverário</td>
    <td>Email</td>
 </tr>
 
<?

$sql = "SELECT id,nome,email,nasc FROM pacientes WHERE nasc like '%/" . $mes . "/%' ";


$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$nome = $linha['nome'];
$email = $linha['email'];
$nasc = $linha['nasc'];

$nasc1 = $linha['nasc'];
$nasc1_mod = substr($nasc1,0,2);


?> 
  
  <tr align="center">
    <td><a href="detalhes_paciente.php?id=<? echo $id ?>"><? echo $nome ?></a></td>
    <td><? echo substr($nasc,0,5) ?> </td>
    <td><a href="mailto:<? echo $email ?>"><? echo $email ?></a></td>  
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

