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
		 
<? include ("menus/menu_pacientes.php"); ?>
		       
<div id="conteudo_direita">			 
	  <h1>Cadastro de Pacientes</h1>
                     <form name="login" method="post" action="gerenciapacientes.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			<span class="cabecalho">Informacoes Pessoais</span><br /><br />
					<label>Nome</label>
					<input maxlength="40" name="nome" type="text" size="40" />
					<label>Endereco</label>
					<input maxlength="60" name="end" type="text" size="55" />
                    <label>Cep</label>
					<input onkeypress="return formataCep(event,this,'#####-###');"  maxlength="9" name="cep" type="text" size="10" />
                    
                    <label>Nascimento</label> 
					<input onclick="displayCalendar(document.forms[0].nasc,'dd/mm/yyyy',this)" maxlength="10" readonly name="nasc" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].nasc,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Inicio do Tratamento</label> 
					<input onclick="displayCalendar(document.forms[0].iniciotratamento,'dd/mm/yyyy',this)" maxlength="10" readonly name="iniciotratamento" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].iniciotratamento,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Fim do Tratamento</label> 
					<input onclick="displayCalendar(document.forms[0].fimtratamento,'dd/mm/yyyy',this)"  maxlength="10" readonly name="fimtratamento" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].fimtratamento,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    
                    <br /><br />
                    <span class="cabecalho">Dados de Acesso</span>
                    <br /><br />
                    <label>Login *</label>
					<input maxlength="20" name="login" type="text" size="30" />
					<label>Senha *</label>
					<input name="senha" type="password" size="30" />
                    
                    <!-- NIVEL 3 = PACIENTE --> 
                    <input type="hidden" name="nivel" value="3"/>
					
					</p>				   </td>
    <td style="padding-left:15px;" width="50%" valign="top">
    <br /><br />
    <label>Telefone</label>
	<input maxlength="13" onkeypress="acertaTel(this);" name="tel" type="text" size="20" />
    <label>Celular</label>
	<input maxlength="13" onkeypress="acertaTel(this);" name="cel" type="text" size="20" />
    <label>Email</label>
	<input maxlength="40" name="email" type="text" size="30" />
    <label>Profissao</label>
	<input maxlength="40" name="prof" type="text" size="30" /> 
    <label>Estado Civil</label>
    <select name="ecivil">
      <option>-- Selecione --</option>
      <option value="solteiro">Solteiro</option>
      <option value="casado">Casado</option>
    </select>
    <label>Indicado Por:</label>
	<input  maxlength="40" name="indicado" type="text" size="30" />
     <label>Convênio:</label>
	<select name="id_convenio">
    <option selected value="0">Selecione</option>
	<option vale="0">Particular</option>
	<?
$sql_select_convenio = "SELECT id,convenio FROM convenios ";

$resultado_select_convenio = mysql_query($sql_select_convenio) or die ("Erro na consulta");

while ($linha_select_convenio = mysql_fetch_assoc($resultado_select_convenio)){
$select_convenio = $linha_select_convenio['convenio'];
$select_id_convenio = $linha_select_convenio['id'];
?>
 <option value="<? echo $select_id_convenio ?>"><? echo $select_convenio ?></option>

<? } ?>
    </select>
    <label>OBS:</label>
	<textarea name="obs" />	</textarea>
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

