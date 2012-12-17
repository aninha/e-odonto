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
<script type="text/javascript" src="js/pgvirtual.js"></script>

</head>

<body>
<!-- INICIO CONTEUDO PRINCIPAL  -->
   <div id="Principal">
   
<!--INICIO TOPO SITE E MENU SUPERIOR -->
        <? include ("topo_site.php"); ?>
<!-- FIM TOPO SITE E MENU SUPERIOR -->
    
    <br />
    
         <!-- INICIO CONTEUDO -->
		 <div  id="conteudo">
		 
<? include ("menus/menu_pacientes.php"); ?>		       

<div id="conteudo_direita">			 
					 <h1>Pacientes</h1>

<div align="right" style="padding-right:20px;">
<form name="pesquisa" action="pacientes.php" method="get">
Pesquisar <input type="text" name="pesq" />
</form>
</div>

<?

$pesq = $_GET["pesq"];

if ($pesq != ''){
 	$sql = "SELECT * FROM pacientes WHERE nome LIKE '$pesq%'";
	$resultado = mysql_query($sql) or die ("Erro na consulta");       
}
else {
	$sql = "SELECT * FROM pacientes ORDER by nome";
	$resultado = mysql_query($sql) or die ("Erro na consulta");
}
?>                      
                    
                    
                    <table class="tablelinha_hover" width="97%" border="0" cellpadding="5" cellspacing="0">
 <thead class="tabelinha_titulo">
    <td>Nome</td>
 </thead>
 
 </table>
  
<div style="width: 97%; border: 1px dashed gray;">  
  
<? while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha["id"];
$nome = $linha["nome"];
?>



<p class="pacientes" style="padding:3px;">
  <a href="detalhes_paciente.php?id=<? echo $id ?>">
    <? echo $nome ?> </a>  
</p> 


 
  <? } ?>
  
</div>

    <div id="pgpacientes" class="pgvirtual">
<a href="#" rel="previous" class="imglinks"><img src="imagens/seta_esquerda.gif" /></a> <select></select> <a href="#" rel="next" class="imglinks"><img src="imagens/seta_direita.gif" /></a>
</div>                
   
   <script type="text/javascript">
var pacientes=new virtualpaginate("pacientes", 30, "p") 
pacientes.buildpagination("pgpacientes")
</script>                 
                    
                    
		       
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
