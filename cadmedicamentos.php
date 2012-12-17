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
		 
<? include ("menus/menu_medicamentos.php"); ?>
		       
<div id="conteudo_direita">			 
	  <h1>Cadastro Novo Remédio</h1>
                     <form name="novoremedio" method="post" action="gerenciamedicamentos.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			
					<label>Nome Comercial</label>
					<input maxlength="60" name="nome_comercial" type="text" size="40" />
					
                    
                    <label>Apresentação</label>
					<textarea name="apresentacao" /></textarea>
                    <label>Indicação</label>
					<input maxlength="80" name="indicacao" type="text" size="40" />
                    <label>Posologia</label>
					<textarea name="posologia"/> </textarea>
                    
                    
         
					</p>				   </td>
    <td style="padding-left:5px;" width="50%" valign="top">
    
    <label>Nome Quimico</label>
	<input maxlength="60" name="nome_quimico" type="text" size="40" />
     <label>Obs</label>
	<textarea name="obs"/></textarea>
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Cadastrar" type="submit" /> - <input type="reset" value="Limpar" class="button" /></td>
    </tr>
</table>
                     </form>
					 
<p>
					 
	
    
    

	  </p>
		       
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

