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
		 
<? include ("menus/menu_usuarios.php"); ?>
		       
<div id="conteudo_direita">			 
					 <h1>Usu&aacute;rios</h1>

<?
//$sql = "SELECT * FROM usuarios,login WHERE login.id_usuario = usuarios.id ";
$sql = "SELECT * FROM usuarios";
$resultado = mysql_query($sql) or die ("Erro na consulta");
?>                      
                    
                    
                    <table class="tablelinha_hover" width="100%" border="0" cellpadding="5" cellspacing="0">
  <thead class="tabelinha_titulo">
    
    <td>Nome</td>
    <td>Endereco</td>
    <td>Tel</td>
    <td>Email</td>
    <td>CRO</td>
    <td>Especializacao</td>
    <td>Excluir</td>
  </thead>
  
<? while ($linha = mysql_fetch_assoc($resultado)){
$id = $linha["id"];
$nome = $linha["nome"];
$endereco = $linha["endereco"];
$tel = $linha["tel"]; 
$email = $linha["email"];
$cro = $linha["cro"];
$especializacao = $linha["especializacao"];


?>

  <tr>
    

    <td ><a href="detalhes_user.php?id=<? echo $id ?>"><? echo $nome ?></a></td>
    <td ><? echo $endereco ?></td>
    <td ><? echo $tel ?></td>
    <td ><? echo $email ?></td>
    <td ><? echo $cro ?></td>
    <td><? echo $especializacao ?></td>
    <td ><a href="javascript:confirma('gerenciauser.php?acao=excluir&id=<? echo $id ?>')"><img src="imagens/lixeira.gif" /></td></tr></a>
   
   
    
  
  
  
  <? } ?>
</table>

                    
                    
                    
                    
		       
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
