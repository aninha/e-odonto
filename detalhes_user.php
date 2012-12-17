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
		 <div id="conteudo">
		 
<? include ("menus/menu_usuarios.php"); ?>
		       
<div id="conteudo_direita">		

<?

$id = $_GET['id'];


$sql = "SELECT * FROM usuarios,login WHERE usuarios.id = '$id' AND login.id_usuario = '$id' ";

$resultado = mysql_query($sql) or die ("Erro na consulta");

while ($linha = mysql_fetch_assoc($resultado)){
$login = $linha["login"];
$nivel = $linha["nivel"];
$nome = $linha["nome"];
$endereco = $linha["endereco"];
$tel = $linha["tel"]; 
$email = $linha["email"];
$cro = $linha["cro"];
$especializacao = $linha["especializacao"];
}
?>

	 
	<h1 class="erro"><? echo $nome ?></h1> 
					 
<p></p>
      
      <ul id="detalhesUser" class="abas">
<li><a href="#" rel="conteudo1" class="selected"><img style="border:none;" src="imagens/detalhes.gif" />Detalhes</a></li>
<li><a href="#" rel="conteudo2"><img style="border:none;" src="imagens/editar.gif" />Editar</a></li>


</ul>

<div style="border:1px solid gray; width:550px; margin-bottom: 1em; padding: 10px">

<div id="conteudo1" class="conteudoaba">


<blockquote>
<h3 class="linha">Informacoes Pessoais</h3>

<b class="verde">Nome:</b> <? echo $nome ?>
<br />
<b class="verde">Endereco:</b> <? echo $endereco ?>
<br />
<b class="verde">Especializacao:</b> <? echo $especializacao ?>
<br />
<b class="verde">CRO:</b> <? echo $cro ?>
<br />
<b class="verde">Tel:</b> <? echo $tel ?>
<br />
<b class="verde">Email:</b> <? echo $email ?>

</blockquote>

<br />

<blockquote>
<h3 class="linha">Dados de Acesso</h3>

<b class="verde">Login: </b> <? echo $login ?>
<br />
<b class="verde">Nivel:</b><? echo $nivel ?>

</blockquote>
<br />

</div>

<div id="conteudo2" class="conteudoaba">
 
                     <form name="edtuser" method="post" action="gerenciauser.php?acao=editar&id=<? echo $id ?>">
                    <table  width="100%" border="0">
  
  <tr>
    <td width="50%">
   			
		  <p>			
					<label>Nome</label>
					<input maxlength="60" value="<? echo $nome ?>" name="nome" type="text" size="40" />
					<label>Endereco</label>
					<input maxlength="60" value="<? echo $endereco ?>" name="endereco" type="text" size="55" />
                    <label>Especializacao</label>
					<input maxlength="20" value="<? echo $especializacao ?>" name="especializacao" type="text" size="30" />
                    <label>CRO</label>
					<input maxlength="15" value="<? echo $cro ?>" name="cro" type="text" size="15" />
                    <br /><br />
                    <span class="cabecalho">Dados de Acesso</span>
                    <br /><br />
                    <label>Login </label>
					<input maxlength="20" name="login" value="<? echo $login ?>" type="text" size="30" />
					<label>Senha </label>
					<input name="senha" type="password" size="30" />
                    <br /><i>(a senha nova sobrepoe a antiga)</i>
                    <label>Nivel </label>
					<input maxlength="1" value="<? echo $nivel ?>" name="nivel" type="text" size="5" />
					<br /><br />
                    1- Dentista/Admin <br />
                    2- Secretaria(o)<br />
                    
					</p>				   </td>
    <td style="padding-left:15px;" width="50%" valign="top">
    <label>Tel</label>
	<input maxlength="13" onkeypress="acertaTel(this);" value="<? echo $tel ?>" name="tel" type="text" size="20" />
    <label>Email</label>
	<input maxlength="40" value="<? echo $email ?>" name="email" type="text" size="30" />    </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Salvar" type="submit" /> - <input type="reset" value="Limpar" class="button" /></td>
    </tr>
</table>
                     </form>
</div>


</div>


<script type="text/javascript">

var conteudo=new ddtabcontent("detalhesUser")
conteudo.setpersist(true)
conteudo.setselectedClassTarget("link") 
conteudo.init()

</script>
		       
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

