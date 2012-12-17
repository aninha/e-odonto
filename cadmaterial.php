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
		 
<? include ("menus/menu_estoque.php"); ?>
		       
<div id="conteudo_direita">			 
	  
      
      <? 
	  $acao = $_GET['acao'];
	  
	  if ($acao == "editar"){
	  
	  $id = $_GET['id']; 
	  
$sql = "SELECT * FROM estoque WHERE id = '$id' ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$produto = $linha['produto'];
$fornecedor = $linha['fornecedor'];
$qnt = $linha['qnt'];
$descricao = $linha['descricao'];
$valor = $linha['valor'];
$qntmin = $linha['qntmin'];
}
	  ?>
	  
	 <h1>Edita Material</h1>
      
        <form name="novomaterial" method="post" action="gerenciaestoque.php?acao=editar&id=<? echo $id ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		  <p>			
					<label>Produto/Material</label>
					<input maxlength="40" name="produto" type="text" value="<? echo $produto ?>" size="40" />
                    
                    <label>Fornecedor</label>
                    <input type="text" maxlength="40" name="fornecedor" value="<? echo $fornecedor ?>" size="40" />
					
                    <label>Valor Unitário</label>
                    R$<input maxlength="10" name="valor" type="text" value="<? echo $valor ?>" size="10" />
                   
                    <label>Qnt</label>
					<input type="text" maxlength="10" value="<? echo $qnt ?>" name="qnt" size="10" />
                    
                    <label>Emitir aviso se quantidade em estoque for inferior a:</label>
                    <input type="text" maxlength="5" value="<? echo $qntmin ?>" name="qntmin" size="5" />
                    
                    
                    <label>Descrição</label>
					<textarea name="descricao"/> <? echo $descricao ?></textarea>
                    
                    				</p>				 
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /></td>
    </tr>
</table>
                     </form>
       
	  
	   <? } else { ?>
       
       <h1>Cadastro Novo Material</h1>
       
                     <form name="novomaterial" method="post" action="gerenciaestoque.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		  <p>			
					<label>Produto/Material</label>
					<input maxlength="40" name="produto" type="text" size="40" />
                    
                    <label>Fornecedor</label>
                    <input type="text" maxlength="40" name="fornecedor" size="40" />
					
                    <label>Valor Unitário</label>
                    R$<input maxlength="10" name="valor" type="text" size="10" />
                   
                    <label>Qnt</label>
					<input type="text" maxlength="10" name="qnt" size="10" />
                    
                    <label>Emitir aviso se quantidade em estoque for inferior a: </label>
                    <input type="text" maxlength="5" name="qntmin" size="5" />
                    
                    
                    <label>Descrição</label>
					<textarea name="descricao"/> </textarea>
                    
                    
         
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

