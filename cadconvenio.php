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
		 
<? include ("menus/menu_proteticoseconvenios.php"); ?>
		       
<div id="conteudo_direita">			 
	  
      
      <? 
	  $acao = $_GET['acao'];
	  
	  if ($acao == "editar"){
	  
	  $id = $_GET['id']; 
	  
$sql = "SELECT * FROM convenios WHERE id = '$id' ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha['id'];
$convenio = $linha['convenio'];
$empresa = $linha['empresa'];
$plano = $linha['plano'];
$cobertura = $linha['cobertura'];

}
	  ?>
	  
	 <h1>Edita Convênio</h1>
      
        <form name="edtprotetico" method="post" action="gerenciaconvenios.php?acao=editar&id=<? echo $id ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		 		  <p>			
					<label>Convênio</label>
					<input maxlength="40" name="convenio" value="<? echo $convenio ?>" type="text" size="40" />
                    
                    <label>Empresa</label>
                    <input maxlength="40" name="empresa" value="<? echo $empresa ?>" type="text" size="40" />
					
                    <label>Plano</label>
                    <input maxlength="20" name="plano" value="<? echo $plano ?>" type="text" size="20" />
                    
                    <label>Cobertura</label>
                    <textarea name="cobertura"><? echo $cobertura ?></textarea>
   				</p>				 
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /></td>
    </tr>
</table>
                     </form>
       
	  
	   <? } else { ?>
       
       <h1>Cadastro Novo Convênio</h1>
       
                     <form name="novoconvenio" method="post" action="gerenciaconvenios.php?acao=cadastrar">
                    <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		  <p>			
					<label>Convênio</label>
					<input maxlength="40" name="convenio" type="text" size="40" />
                    
                    <label>Empresa</label>
                    <input maxlength="40" name="empresa" type="text" size="40" />
					
                    <label>Plano</label>
                    <input maxlength="20" name="plano" type="text" size="20" />
                    
                    <label>Cobertura</label>
                    <textarea name="cobertura"></textarea>
      
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

