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
		 
<? include ("menus/menu_pacientes.php"); ?>
		       
<div id="conteudo_direita">			 
	  <h1>Anamnese</h1>
                     <form name="login" method="post" action="gerenciauser.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			
					<label>Nome</label>
					<input maxlength="60" name="nome" type="text" size="40" />
					<label>Endereco</label>
					<input maxlength="60" name="endereco" type="text" size="55" />
                    <label>Especializacao</label>
					<input maxlength="20" name="especializacao" type="text" size="30" />
                    <br /><br />
                    <span class="cabecalho">Dados de Acesso</span>
                    <br /><br />
                    <label>Login *</label>
					<input maxlength="20" name="login" type="text" size="30" />
					<label>Senha *</label>
					<input name="senha" type="password" size="30" />
                    <label>Nivel *</label>
					<input maxlength="1" name="nivel" type="text" size="5" />
					<br /><br />
                    1- Dentista/Admin <br />
                    2- Secretaria(o)<br />
                    3- Paciente
					</p>				   </td>
    <td style="padding-left:15px;" width="50%" valign="top">
    <label>Tel</label>
	<input maxlength="13" onkeypress="acertaTel(this);" name="tel" type="text" size="20" />
    <label>Email</label>
	<input maxlength="40" name="email" type="text" size="30" />    </td>
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

