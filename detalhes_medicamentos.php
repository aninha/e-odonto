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
<script type="text/javascript" src="js/abas.js"></script>
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
		 
<? include ("menus/menu_medicamentos.php"); ?>
		       
<div id="conteudo_direita">		

<?

$id = $_GET['id'];


$sql = "SELECT * FROM medicamentos WHERE id = '$id'";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$nome_comercial = $linha["nome_comercial"];
$nome_quimico = $linha["nome_quimico"];
$apresentacao = $linha["apresentacao"]; 
$indicacao = $linha["indicacao"];
$posologia = $linha["posologia"];
$obs = $linha["obs"];
}
?>

	 
	<h1 class="erro"><? echo $nome_comercial ?></h1> 
					 
<p></p>
      
      <ul id="detalhesMedicamentos" class="abas">
<li><a href="#" rel="conteudo1" class="selected"><img style="border:none;" src="imagens/detalhes.gif" />Detalhes</a></li>
<li><a href="#" rel="conteudo2"><img style="border:none;" src="imagens/editar.gif" />Editar</a></li>


</ul>

<div style="border:1px solid gray; width:550px; margin-bottom: 1em; padding: 10px">

<div id="conteudo1" class="conteudoaba">


<blockquote class="caixa">

<b class="verde">Nome Comercial:</b> <? echo $nome_comercial ?>
<br />
<b class="verde">Nome Quimico:</b> <? echo $nome_quimico ?>
<br /><br />
<b class="verde">Apresentação:</b>
<br /> <? echo $apresentacao ?>
<br />
<b class="verde">Indicação:</b>
<br /> <? echo $indicacao ?>
<br />
<b class="verde">Posologia:</b> 
<br /><? echo $posologia ?>
<br />
<b class="verde">obs:</b>
<br /> <? echo $obs ?>

</blockquote>

<br />

</div>

<div id="conteudo2" class="conteudoaba">
 
                    
                      <form name="edtremedio" method="post" action="gerenciamedicamentos.php?acao=editar&id=<? echo $id ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			
					<label>Nome Comercial</label>
					<input maxlength="60" name="nome_comercial" value="<? echo $nome_comercial ?>" type="text" size="40" />
					
                    
                    <label>Apresentação</label>
					<textarea name="apresentacao" /><? echo $apresentacao ?></textarea>
                    <label>Indicação</label>
					<input maxlength="80" name="indicacao" type="text" size="40" value="<? echo $indicacao ?>" />
                    <label>Posologia</label>
					<textarea name="posologia"/><? echo $posologia ?> </textarea>
                    
                    
         
					</p>				   </td>
    <td style="padding-left:5px;" width="50%" valign="top">
    
    <label>Nome Quimico</label>
	<input maxlength="60" name="nome_quimico" value="<? echo $nome_quimico ?>" type="text" size="40" />
     <label>Obs</label>
	<textarea name="obs"/><? echo $obs ?></textarea>
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /></td>
    </tr>
</table>
                     </form>
</div>


</div>


<script type="text/javascript">

var conteudo=new ddtabcontent("detalhesMedicamentos")
conteudo.setpersist(true)
conteudo.setselectedClassTarget("link") 
conteudo.init()

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

