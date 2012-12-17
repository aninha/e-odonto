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
		 <div style="padding-left:50px;" id="conteudo">
		 
	

<?

$id = $_GET['id'];

//$sql = "SELECT * FROM pacientes,login WHERE pacientes.id = '$id' AND login.id_paciente = '$id'";
$sql = "SELECT * FROM pacientes,login WHERE pacientes.id = '$id'";
$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){

$nome = $linha["nome"];
$end = $linha["end"];
$cep = $linha["cep"];
$tel = $linha["tel"];
$cel = $linha["cel"];
$email = $linha["email"];
$prof = $linha["prof"];
$ecivil = $linha["ecivil"];
$nasc = $linha["nasc"];
$indicado = $linha["indicado"];
$iniciotratamento = $linha["iniciotratamento"];
$fimtratamento = $linha["fimtratamento"];
$obs = $linha["obs"];
$id_convenio2 = $linha["id_convenio"];

$login = $linha["login"];
$nivel = $linha["nivel"];

$sql_convenio = "SELECT id,convenio FROM convenios WHERE id = '$id_convenio2'";
$resultado_convenio = mysql_query($sql_convenio) or die ("Erro na consulta");
$linha_convenio = mysql_fetch_assoc($resultado_convenio);
$convenio = $linha_convenio["convenio"];
$id_convenio = $linha_convenio["id_convenio"];

}
?>

	 
	  <h1 class="erro"><? echo $nome ?></h1>
      
<p></p>

      <ul id="detalhesPaciente" class="abas">
<li><a href="#" rel="conteudo1" class="selected"><img style="border:none;" src="imagens/detalhes.gif" />Detalhes</a></li>
<li><a href="#" rel="conteudo2"><img style="border:none;" src="imagens/editar.gif" />Editar</a></li>
<li><a href="#" rel="conteudo3"><img style="border:none;" src="imagens/anamnese.gif" />Anamnese</a></li>
<li><a href="#" rel="conteudo4"><img style="border:none;" src="imagens/arcada.gif" />Arcada</a></li>
<li><a href="#" rel="conteudo5"><img style="border:none;" src="imagens/agendamento.gif" />Agendamentos</a></li>
<li><a href="#" rel="conteudo6"><img style="border:none;" src="imagens/pagamentos.gif" />Pagamentos</a></li>
<li><a href="#" rel="conteudo7"><img style="border:none;" src="imagens/email.gif" />Enviar Msg</a></li>



</ul>     

<div style="border:1px solid gray; width:800px; margin-bottom: 1em; padding: 10px">

<div id="conteudo1" class="conteudoaba">

<blockquote>

<h3 class="linha">Informacoes Pessoais</h3>

<b class="verde">Nome:</b> <? echo $nome ?>
<br />
<b class="verde">Email:</b> <? echo $email ?>
<br />
<b class="verde">Endereco:</b> <? echo $end ?>
<br />
<b class="verde">Cep:</b> <? echo $cep ?>
<br />
<b class="verde">Tel:</b> <? echo $tel ?>
<br />
<b class="verde">Cel:</b> <? echo $cel ?>
<br />
<b class="verde">Profissao:</b> <? echo $prof ?>
<br />
<b class="verde">Estado Civil:</b> <? echo $ecivil ?>
<br />
<b class="verde">Nascimento:</b> <? echo $nasc ?>
<br />
<b class="verde">Indicado por:</b> <? echo $indicado ?>
<br />
<? if ($id_convenio2 == 0) { ?>
<b class="verde">Convênio:</b> Particular
<? } else { ?>
<b class="verde">Convênio:</b> <? echo $convenio ?>
<? } ?>
<br />
<b class="verde">Inicio do Tratamento:</b> <? echo $iniciotratamento ?>
<br />
<b class="verde">Fim do Tratamento:</b> <? echo $fimtratamento ?>
<br />
<b class="verde">Obs:</b> <? echo $obs ?>

<br />
<br />
</blockquote>

<br />

<!-- <blockquote>
<h3 class="linha">Dados de Acesso</h3>

<b class="verde">Login: </b> <? echo $login ?>
<br />
<b class="verde">*Nivel:</b> <? echo $nivel ?>

<br /><br />
<i>* Paciente = Nivel 3</i>
</blockquote>
-->
</div>

<div id="conteudo2" class="conteudoaba"> 
      
<form name="edtpaciente" method="post" action="gerenciapacientes.php?acao=editar&id=<? echo $id ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			<span class="cabecalho">Informacoes Pessoais</span><br /><br />
					<label>Nome</label>
					<input maxlength="40" name="nome" type="text" value="<? echo $nome ?>" size="40" />
					<label>Endereco</label>
					<input maxlength="60" name="end" type="text" value="<? echo $end ?>" size="55" />
                    <label>Cep</label>
					<input onkeypress="return formataCep(event,this,'#####-###');" value="<? echo $cep ?>"  maxlength="9" name="cep" type="text" size="10" />
                    
                    <label>Nascimento</label> 
					<input onclick="displayCalendar(document.forms[0].nasc,'dd/mm/yyyy',this)"  maxlength="10" name="nasc" readonly type="text" value="<? echo $nasc ?>" size="13" />
                    <a onclick="displayCalendar(document.forms[0].nasc,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Inicio do Tratamento</label> 
					<input onclick="displayCalendar(document.forms[0].iniciotratamento,'dd/mm/yyyy',this)"  maxlength="10" readonly name="iniciotratamento" type="text" value="<? echo $iniciotratamento ?>" size="13" />
                    <a onclick="displayCalendar(document.forms[0].iniciotratamento,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Fim do Tratamento</label> 
					<input onclick="displayCalendar(document.forms[0].fimtratamento,'dd/mm/yyyy',this)"  maxlength="10" readonly name="fimtratamento" type="text" value="<? echo $fimtratamento ?>" size="13" />
                    <a onclick="displayCalendar(document.forms[0].fimtratamento,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    
                    <br /><br />
    <!--                <span class="cabecalho">Dados de Acesso</span>
                    <br /><br />
                    <label>Login *</label>
					<input maxlength="20" name="login" value="<? echo $login ?>" type="text" size="30" />
					<label>Senha *</label>
					<input name="senha" type="password" size="30" />
                    -->
                    					
					</p>				   </td>
    <td style="padding-left:15px;" width="50%" valign="top">
    <br /><br />
    <label>Telefone</label>
	<input maxlength="13" onkeypress="acertaTel(this);" name="tel" value="<? echo $tel ?>" type="text" size="20" />
    <label>Celular</label>
	<input maxlength="13" onkeypress="acertaTel(this);" name="cel" type="text" value="<? echo $cel ?>" size="20" />
    <label>Email</label>
	<input maxlength="40" name="email" type="text" value="<? echo $email ?>" size="30" />
    <label>Profissao</label>
	<input maxlength="40" name="prof" type="text" value="<? echo $prof ?>" size="30" /> 
    <label>Estado Civil</label>
    <select name="ecivil">
      <option selected="selected" value="<? echo $ecivil ?>"><? echo $ecivil ?></option>
      <option value="solteiro">Solteiro</option>
      <option value="casado">Casado</option>
    </select>
    <label>Indicado Por:</label>
	<input  maxlength="40" name="indicado" type="text" value="<? echo $indicado ?>" size="30" />
    
    <label>Convênio:</label>
	<select name="id_convenio">
    <? if ($id_convenio2 == 0) { ?>
     <option style="color:#FF0000;" selected value="0">Particular</option>
    <? } else { ?>
    <option selected style="color:#FF0000;" value="<? echo $id_convenio2 ?>"><? echo $convenio ?></option>
    <? } ?>
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
	<textarea name="obs" /><? echo $obs ?>	</textarea>
    </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /> - <input type="reset" value="Limpar" class="button" /></td>
    </tr>
</table>
</form>
                     
                     </div>
                     
                     
<div id="conteudo3" class="conteudoaba">
<? 

$sql3 = "SELECT * FROM pacientes,anamnese WHERE pacientes.id = '$id' AND anamnese.id_paciente = '$id' ";
$resultado3 = mysql_query($sql3) or die ("Erro na consulta");

while ($linha3 = mysql_fetch_assoc($resultado3)){

$id_paciente = $linha3["id_paciente"];
$tipo_sangue = $linha3["tipo_sangue"];
$hepatite = $linha3["hepatite"];
$hemorragica = $linha3["hemorragica"];
$pressao = $linha3["pressao"];
$cardiopatia = $linha3["cardiopatia"];
$diabetes = $linha3["diabetes"];
$hiv = $linha3["hiv"];
$alergias = $linha3["alergias"];
$outros = $linha3["outros"];
$queixa = $linha3["queixa"];
$medicamento = $linha3["medicamento"];
$cirurgias = $linha3["cirurgias"];
$peso = $linha3["peso"];
$alimentacao = $linha3["alimentacao"];
$escovacao = $linha3["escovacao"];
$fiodental = $linha3["fiodental"];
$sangra = $linha3["sangra"];
$boxexo = $linha3["boxexo"];
$habitos = $linha3["habitos"];
$doencas = $linha3["doencas"];
}

$condicao=mysql_num_rows($resultado3);

if ($condicao==0){
?>

<form name="novaanamnese" method="post" action="gerenciaanamnese.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			<span class="cabecalho">Anamnese</span><br /><br />
					<label>Tipo Sanguineo</label>
	<select name="tipo_sangue">
    	  <option value="" selected>-- Selecione --</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
    </select>
					<label>Propensão Hemorrágica</label>
		<select name="hemorragica">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>				
                    
                    <label>Hepatite</label>
		<select name="hepatite">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>					
                    
                    <label>Pressão Arterial</label> 
					<input onkeypress="return formataCep(event,this,'##-##');"  maxlength="5" name="pressao" type="text" size="5" />(xx-xx)
                    
                    <label>Peso</label> 
					<input  maxlength="5" name="peso" type="text" size="5" />(kg)
                    
                    <label>Cardiopatias</label> 
		<select name="cardiopatia">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>	
                    
                   <label>Diabetes</label> 
		<select name="diabetes">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>	
                    
   	 <label>HIV</label> 
		<select name="hiv">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Não</option>
        </select>	
                                        
                    
                    <br /><br />
     <span class="cabecalho">Higiene Bucal</span>
                    <br /><br />
                    <label>Escovação:</label>
	   <select name="escovacao">
         <option value="" selected>-- Selecione --</option>
          <option value="1">1x ao dia</option>
          <option value="2">2x ao dia</option>
          <option value="3">3x ao dia</option>
          <option value="3+">mais de 3x ao dia</option>
          <option value="nao">não escova</option>
       </select>
                    
					<label>Faz uso de fio Dental:</label>
		<select name="fiodental">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Nao</option>
        </select>
                    <label>Sangra?</label>
		<select name="sangra">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Nao</option>
        </select>
        
                     <label>Bochecho?</label>
		<select name="boxexo">
         <option value="" selected>-- Selecione --</option>
          <option value="sim">Sim</option>
          <option value="nao">Nao</option>
        </select>
                    					
					</p>				   </td>
    <td style="padding-left:15px;" width="50%" valign="top">
    <br /><br />
    
    <label>Habitos:</label>
	<input maxlength="40" name="habitos" type="text" size="40" />
    
    <label>Alergia a:</label>
	<input maxlength="60" name="alergias" type="text" size="40" />
    
    <label>Medicamentos:</label>
	<input maxlength="60" name="medicamento" type="text" size="40" />
    
     <label>Cirurgias:</label>
	<input maxlength="60" name="cirurgias" type="text" size="40" />
    
    <label>Doenças:</label>
    <textarea name="doencas"></textarea>
    
    <label>Alimentação:</label>
    <textarea name="alimentacao"></textarea>
        
    <label>Queixa:</label>
    <textarea name="queixa"></textarea>
    
    <label>Outros:</label>
	<input maxlength="60" name="outros" type="text" size="40" />
    
    
	
    <input type="hidden" name="id_paciente" value="<? echo $id ?>" />
    
    </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /> - <input type="reset" value="Limpar" class="button" /></td>
    </tr>
</table>
</form>

<?
}
else{
?>


<blockquote>

<p align="right"><a href="javascript:confirma('gerenciaanamnese.php?acao=excluir&id_paciente=<? echo $id_paciente ?>')">Excluir Anamnese<img src="imagens/excluir.gif" /></a></p>

<h3 class="linha">Detalhes da Anamese</h3>

<b class="verde">Tipo Sanguineo:</b> <? echo $tipo_sangue ?>
<br />
<b class="verde">Pressão Arterial:</b> <? echo $pressao ?>
<br />
<b class="verde">Peso:</b> <? echo $peso ?> kg
<br /><br />

<b class="verde">Hepatite:</b> <? echo $hepatite ?>
<br />
<b class="verde">Diabetes:</b> <? echo $diabetes ?>
<br />
<b class="verde">HIV:</b> <? echo $hiv ?>
<br />
<b class="verde">Propensão Hemorrágica:</b> <? echo $hemorragica ?>
<br />
<b class="verde">Cardiopatia:</b> <? echo $cardiopatia ?>
<br />
<b class="verde">Alergias:</b> <? echo $alergias ?>
<br />
<b class="verde">Cirurgias:</b> <? echo $cirurgias ?>
<br />
<b class="verde">Doenças:</b> <? echo $doencas ?>
<br />
<b class="verde">Medicamentos:</b> <? echo $medicamento ?>
<br /><br />


<b class="verde">Habitos:</b> <? echo $habitos ?>
<br />
<b class="verde">Alimentação:</b> <? echo $alimentacao ?>
<br />
<b class="verde">Queixa:</b> <? echo $queixa ?>
<br />
<b class="verde">Outros:</b> <? echo $outros ?>
<br />

</blockquote>
<br />

<blockquote>

<h3 class="linha">Higiene Bucal</h3>

<b class="verde">Escovação:</b> <? echo $escovacao ?> vezes ao dia
<br />
<b class="verde">Fio Dental:</b> <? echo $fiodental ?>
<br />

<b class="verde">Sangra:</b> <? echo $sangra ?>
<br />
<b class="verde">Bochecho:</b> <? echo $boxexo ?>
<br />
</blockquote>


<? }?> 

</div>


<div id="conteudo4" class="conteudoaba">
<?
$sql4 = "select * FROM arcada WHERE id_paciente='$id'";

$resultado4 = mysql_query($sql4) or die ("Erro na consulta");

$linha4 = mysql_fetch_assoc($resultado4);

// Arcada Superior Direita
$sd1 = $linha4["sd1"];
$sd2 = $linha4["sd2"];
$sd3 = $linha4["sd3"];
$sd4 = $linha4["sd4"];
$sd5 = $linha4["sd5"];
$sd6 = $linha4["sd6"];
$sd7 = $linha4["sd7"];
$sd8 = $linha4["sd8"];

// Arcada Superior Esquerda
$se1 = $linha4["se1"];
$se2 = $linha4["se2"];
$se3 = $linha4["se3"];
$se4 = $linha4["se4"];
$se5 = $linha4["se5"];
$se6 = $linha4["se6"];
$se7 = $linha4["se7"];
$se8 = $linha4["se8"];

// Arcada Inferior Direita
$id1 = $linha4["id1"];
$id2 = $linha4["id2"];
$id3 = $linha4["id3"];
$id4 = $linha4["id4"];
$id5 = $linha4["id5"];
$id6 = $linha4["id6"];
$id7 = $linha4["id7"];
$id8 = $linha4["id8"];

// Arcada Inferior Esquerda
$ie1 = $linha4["ie1"];
$ie2 = $linha4["ie2"];
$ie3 = $linha4["ie3"];
$ie4 = $linha4["ie4"];
$ie5 = $linha4["ie5"];
$ie6 = $linha4["ie6"];
$ie7 = $linha4["ie7"];
$ie8 = $linha4["ie8"];



?>

<table width="100%" border="0">
  <tr>

    <td style="border-right:thin solid #c0ede1;">
  
 <? if ($se1 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se1.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se1_r.jpg" alt="<? echo $se1 ?>"  /></a>
 <? } ?>
 
 
  <? if ($se2 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se2.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se2_r.jpg" alt="<? echo $se2 ?>"  /></a>
 <? } ?>
 
   <? if ($se3 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se3.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se3_r.jpg" alt="<? echo $se3 ?>"  /></a>
 <? } ?>
 
   
     <? if ($se4 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se4.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se4_r.jpg" alt="<? echo $se4 ?>"  /></a>
 <? } ?>
 
     <? if ($se5 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se5.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se5_r.jpg" alt="<? echo $se5 ?>"  /></a>
 <? } ?>
   
    <? if ($se6 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se6.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se6_r.jpg" alt="<? echo $se6 ?>"  /></a>
 <? } ?>

    <? if ($se7 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se7.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se7_r.jpg" alt="<? echo $se7 ?>"  /></a>
 <? } ?>
 
     <? if ($se8 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=se8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/se8.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=se8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/se8_r.jpg" alt="<? echo $se8 ?>"  /></a>
 <? } ?>   
  
  
    </td>
    <td>
    
     <? if ($sd1 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd1.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd1_r.jpg" alt="<? echo $sd1 ?>"  /></a>
 <? } ?>   
   
      <? if ($sd2 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd2.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd2_r.jpg" alt="<? echo $sd2 ?>"  /></a>
 <? } ?>    
 
      <? if ($sd3 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd3.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd3_r.jpg" alt="<? echo $sd3 ?>"  /></a>
 <? } ?>    
       
     <? if ($sd4 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd4.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd4_r.jpg" alt="<? echo $sd4 ?>"  /></a>
 <? } ?>   
        
     <? if ($sd5 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd5.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd5_r.jpg" alt="<? echo $sd5 ?>"  /></a>
 <? } ?>   
 
      <? if ($sd6 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd6.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd6_r.jpg" alt="<? echo $sd6 ?>"  /></a>
 <? } ?>   
 
      <? if ($sd7 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd7.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd7_r.jpg" alt="<? echo $sd7 ?>"  /></a>
 <? } ?>   
 
      <? if ($sd8 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=sd8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/sd8.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=sd8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/sd8_r.jpg" alt="<? echo $sd8 ?>"  /></a>
 <? } ?>   
         
    </td>
  </tr>
  <tr>
  
    <td style="border-top:thin solid #c0ede1; border-right:thin solid #c0ede1;">
    
          <? if ($ie1 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie1.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie1_r.jpg" alt="<? echo $ie1 ?>"  /></a>
 <? } ?>  
 
           <? if ($ie2 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie2.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie2_r.jpg" alt="<? echo $ie2 ?>"  /></a>
 <? } ?>  
 
            <? if ($ie3 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie3.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie3_r.jpg" alt="<? echo $ie3 ?>"  /></a>
 <? } ?>  
 
            <? if ($ie4 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie4.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie4_r.jpg" alt="<? echo $ie4 ?>"  /></a>
 <? } ?>  
 
            <? if ($ie5 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie5.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie5_r.jpg" alt="<? echo $ie5 ?>"  /></a>
 <? } ?>  
   
              <? if ($ie6 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie6.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie6_r.jpg" alt="<? echo $ie6 ?>"  /></a>
 <? } ?>   
 
            <? if ($ie7 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie7.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie7_r.jpg" alt="<? echo $ie7 ?>"  /></a>
 <? } ?>  
 
            <? if ($ie8 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=ie8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/ie8.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=ie8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/ie8_r.jpg" alt="<? echo $ie8 ?>"  /></a>
 <? } ?>  
    
    </td>
    <td style="border-top:thin solid #c0ede1;">
    
               <? if ($id1 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id1.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id1&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id1_r.jpg" alt="<? echo $id1 ?>"  /></a>
 <? } ?>  
    
               <? if ($id2 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id2.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id2&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id2_r.jpg" alt="<? echo $id2 ?>"  /></a>
 <? } ?> 
 
                <? if ($id3 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id3.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id3&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id3_r.jpg" alt="<? echo $id3 ?>"  /></a>
 <? } ?> 
 
                <? if ($id4 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id4.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id4&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id4_r.jpg" alt="<? echo $id4 ?>"  /></a>
 <? } ?> 
 
                <? if ($id5 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id5.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id5&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id5_r.jpg" alt="<? echo $id5 ?>"  /></a>
 <? } ?>   
 
                <? if ($id6 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id6.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id6&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id6_r.jpg" alt="<? echo $id6 ?>"  /></a>
 <? } ?>    
 
                <? if ($id7 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id7.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id7&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id7_r.jpg" alt="<? echo $id7 ?>"  /></a>
 <? } ?>  
 
                <? if ($id8 == ''){ ?>
 <a href="#" Onclick="window.open('arcada.php?acao=form&dente=id8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150')";> <img src="imagens/arcada/id8.jpg"  /></a>
 <? } else { ?>
   <a href="#" Onclick="window.open('arcada.php?acao=mostrar&dente=id8&id=<? echo $id ?>','page','toolbar=no,location=no,status=no,menubar=no,scrollbars=no,resizable=no,width=120,height=150');"> <img src="imagens/arcada/id8_r.jpg" alt="<? echo $id8 ?>"  /></a>
 <? } ?>  
    </td>
  </tr>
</table>


</div>

<div id="conteudo5" class="conteudoaba">

<h3 class="linha">Ultimos 5 Agendamentos</h3>
<br />
<?
$sql5 = "select * FROM agendamentos WHERE id_paciente='$id' ORDER BY day,month ASC LIMIT 5";

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
<b class="verde">Obs:</b> <? echo $obsagenda ?><br/>
</blockquote>

<? } ?>
</div>

<div id="conteudo6" class="conteudoaba">
<h3 class="linha">Ultimos Pagamentos</h3>
<br />
<?
$sql6 = "select * FROM pagamentos WHERE id_paciente='$id'";

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
</div>

<div id="conteudo7" class="conteudoaba">
<form name="msg" action="gerenciapacientes.php?acao=enviaremail" method="post">
<label>Nome:</label>
<input type="text" size="40" name="nome" value="<? echo $_SESSION["nome_usuario"]; ?>"  />
<label>Email do Paciente</label>
<input type="text" size="20" name="email" readonly value="<? echo $email; ?>" />
<label>Assunto:</label>
<input type="text" size="30" name="assunto" />
<label>Mensagem:</label>
<textarea name="mensagem"></textarea>
<br />
<input class="button" type="submit" value="Enviar Mensagem" />
</form>
</div>

 </div>
                     
<script type="text/javascript">

var conteudo=new ddtabcontent("detalhesPaciente")
conteudo.setpersist(true)
conteudo.setselectedClassTarget("link") 
conteudo.init()

</script>
					 

		       
			   <div class="espacador"></div>
			   
		       
		       <div class="espacador"></div>
			   
</div>

<!-- INICIO RODAPE -->
         <? include ("rodape.php"); ?>
<!-- FIM RODAPE -->
		 
   </div>
<!-- FIM PRINCPIAL -->
</body>
</html>

