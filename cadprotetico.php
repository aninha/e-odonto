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
		 
<? include ("menus/menu_proteticoseconvenios.php"); ?>
		       
<div id="conteudo_direita">			 
	  
      
      <? 
	  $acao = $_GET['acao'];
	  
	  if ($acao == "editar"){
	  
	  $id = $_GET['id']; 
	  
$sql = "SELECT * FROM proteticos WHERE id = '$id' ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$nome = $linha['nome'];
$data_envio = $linha['data_envio'];
$data_devolucao = $linha['data_devolucao'];
$trabalhos = $linha['trabalhos'];
$valor = $linha['valor'];
$obs = $linha['obs'];
$status = $linha['status'];
}
	  ?>
	  
	 <h1>Edita Protético/Trabalhos</h1>
      
        <form name="edtprotetico" method="post" action="gerenciaproteticos.php?acao=editar&id=<? echo $id ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		 		  <p>			
					<label>Nome</label>
					<input maxlength="40" name="nome" value="<? echo $nome ?>" type="text" size="40" />
                    
                    <label>Trabalhos</label>
                    <textarea name="trabalhos"><? echo $trabalhos ?></textarea>
					
                    <label>Valor</label>
                    R$<input maxlength="10" name="valor" value="<? echo $valor ?>" type="text" size="10" />
                   
                    <label>Data de Envio</label> 
					<input onclick="displayCalendar(document.forms[0].data_envio,'dd/mm/yyyy',this)" value="<? echo $data_envio ?>" maxlength="10" readonly name="data_envio" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].data_envio,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Data de Entrega</label> 
					<input onclick="displayCalendar(document.forms[0].data_devolucao,'dd/mm/yyyy',this)" value="<? echo $data_devolucao ?>" maxlength="10" readonly name="data_devolucao" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].data_devolucao,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Status</label>
                      <select name="status">
    					 <option selected value="<? echo $status ?>" ><? echo $status ?></option>
   						 <option value="Encaminhado">Encaminhado</option>
    					 <option value="Processando">Processando</option>
    					 <option value="Concluido">Concluido</option>
 					 </select>
                    
                    <label>Obs</label>
					<textarea name="obs"/><? echo $obs ?> </textarea>
                    
                    
         
					</p>				 
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /></td>
    </tr>
</table>
                     </form>
       
	  
	   <? } else { ?>
       
       <h1>Cadastro Novo Protético/Trabalhos</h1>
       
                     <form name="novoprotetico" method="post" action="gerenciaproteticos.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		  <p>			
					<label>Nome</label>
					<input maxlength="40" name="nome" type="text" size="40" />
                    
                    <label>Trabalhos</label>
                    <textarea name="trabalhos"></textarea>
					
                    <label>Valor</label>
                    R$<input maxlength="10" name="valor" type="text" size="10" />
                   
                    <label>Data de Envio</label> 
					<input onclick="displayCalendar(document.forms[0].data_envio,'dd/mm/yyyy',this)" maxlength="10" readonly name="data_envio" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].data_envio,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
                    
                    <label>Data de Entrega</label> 
					<input onclick="displayCalendar(document.forms[0].data_devolucao,'dd/mm/yyyy',this)" maxlength="10" readonly name="data_devolucao" type="text" size="13" />
                    <a onclick="displayCalendar(document.forms[0].data_devolucao,'dd/mm/yyyy',this)"><img src="imagens/calendario.gif" /></a>
       
       				<label>Status</label>
                      <select name="status">
    					<option selected value="0">Selecione o Status</option>
   						 <option value="encaminhado">Encaminhado</option>
    					 <option value="processando">Processando</option>
    					 <option value="concluido">Concluido</option>
 					 </select>
                    
                    <label>Obs</label>
					<textarea name="obs"/> </textarea>
                    
                    
         
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

