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
<link type="text/css" rel="stylesheet" href="css/calendario.css" media="screen"></LINK>
<SCRIPT type="text/javascript" src="js/calendario.js"></script>


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
		 
<? include ("menus/menu_agendamentos.php"); ?>
		       
<div id="conteudo_direita">			 
	  <h1>Inserir Nova Consulta</h1>
                     <form name="login" method="post" action="gerenciapacientes.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			
					<label>Paciente</label>
					<input maxlength="40" name="nome" type="text" size="40" />
					
                   <label>Data da Consulta</label>
					<input onclick="displayCalendar(document.forms[0].data,'dd/mm/yyyy',this)"  maxlength="10" readonly name="data" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].data,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Horario</label>
					<input onkeypress="return formataCep(event,this,'##:##');"  maxlength="5" name="cep" type="text" size="8" />
                   
                    
           </p>	
      </td>
    
   </tr>
  <tr>
    <td align="center"><input class="button" value="Cadastrar" type="submit" /> - <input type="reset" value="Limpar" class="button" /></td>
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

