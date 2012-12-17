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
		 
<? include ("menus/menu_pagamentos.php"); ?>
		       
<div id="conteudo_direita">			 
	  
      
      <? 
	  $acao = $_GET['acao'];
	  
	  if ($acao == "editar"){
	  
	  $id_pagamento = $_GET['id_pagamento']; 
	  
$sql = "SELECT * FROM pagamentos,pacientes WHERE id_pagamento = '$id_pagamento' ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$dt_pagamento = $linha['dt_pagamento'];
$forma = $linha['forma'];
$valor = $linha['valor'];
$descricao = $linha['descricao'];
$status = $linha['status'];
$id_paciente = $linha['id_paciente'];
$nome = $linha['nome'];



}
	  ?>
	  
	 <h1>Edita Pagamento</h1>
      
        <form name="edtpagamento" method="post" action="gerenciapagamentos.php?acao=editar&id_pagamento=<? echo $id_pagamento ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		 		  <p>			
					<label>Paciente</label>
				   <select name="id_paciente">
						<option selected style="color:#FF0000;" value="<? echo $id_paciente ?>"><? echo $nome ?></option>
				  	<?
$sql2 = "SELECT id,nome FROM pacientes";

$resultado2 = mysql_query($sql2) or die ("Erro na consulta");

while ($linha2 = mysql_fetch_assoc($resultado2)){
$id = $linha2['id'];
$nome = $linha2['nome'];
?>
 <option value="<? echo $id ?>"><? echo $nome ?></option>

<? } ?>
                  
                  
                  </select>
                    
                    <label>Data do Pagamento</label>
                    <input onclick="displayCalendar(document.forms[0].dt_pagamento,'dd/mm/yyyy',this)" maxlength="10" value="<? echo $dt_pagamento ?>" readonly name="dt_pagamento" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].dt_pagamento,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
					
                    <label>Forma</label>
                    <select name="forma">
                    <option selected style="color:#FF0000;" value="<? echo $forma ?>"><? echo $forma ?></option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Transferencia_Bancaria">Transferencia Bancaria</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Cartao">Cartao</option>
                    </select>
                    
                    <label>Valor Pago</label>
                    R$ <input type="text" size="10" maxlength="15" name="valor" value="<? echo $valor ?>">
                    
                    <label>Status</label>
                    <select name="status">
                    <option selected style="color:#FF0000;" value="<? echo $status ?>"><? echo $status ?></option>
                    <option value="Pago">Pago</option>
                    <option value="NaoPago">Nao Pago</option>
                    </select>
                    
                    <label>Descrição do Pagamento/Serviços Realizados</label>
                    <textarea name="descricao"><? echo $descricao ?></textarea>
   				</p>				 
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /></td>
    </tr>
</table>
                     </form>
       
	  
	   <? } else { ?>
       
       <h1>Cadastro Novo Pagamento</h1>
       
                     <form name="novopagamento" method="post" action="gerenciapagamentos.php?acao=cadastrar">
                   <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		 		  <p>			
					<label>Paciente</label>
				   <select name="id_paciente">
						<option selected value="0">Selecione</option>
				  	<?
$sql2 = "SELECT id,nome FROM pacientes";

$resultado2 = mysql_query($sql2) or die ("Erro na consulta");

while ($linha2 = mysql_fetch_assoc($resultado2)){
$id = $linha2['id'];
$nome = $linha2['nome'];
?>
 <option value="<? echo $id ?>"><? echo $nome ?></option>

<? } ?>
                  
                  
                  </select>
                    
                    <label>Data do Pagamento</label>
                    <input onclick="displayCalendar(document.forms[0].dt_pagamento,'dd/mm/yyyy',this)" maxlength="10" readonly name="dt_pagamento" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].dt_pagamento,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
					
                    <label>Forma</label>
                    <select name="forma">
                    <option selected value="0">Selecione</option>
                    <option value="Dinheiro">Dinheiro</option>
                    <option value="Transferencia_Bancaria">Transferencia Bancaria</option>
                    <option value="Cheque">Cheque</option>
                    <option value="Cartao">Cartao</option>
                    </select>
                    
                    <label>Valor Pago</label>
                    R$ <input type="text" size="10" maxlength="15" name="valor">
                    
                    <label>Status</label>
                    <select name="status">
                    <option selected value="0">Selecione</option>
                    <option value="Pago">Pago</option>
                    <option value="NaoPago">Nao Pago</option>
                    </select>
                    
                    <label>Descrição do Pagamento/Serviços Realizados</label>
                    <textarea name="descricao"><? echo $descricao ?></textarea>
   				</p>	
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Cadastrar" type="submit" /> - <input type="reset" value="Limpar" class="button" /></td>
    </tr>
</table>
                     </form>
					 
          <? } ?>           
                     

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

