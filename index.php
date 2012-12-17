<? include ("config.php"); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistema E-Odonto - Gerenciamento de Clinicas Odontologicas</title>
<link rel="stylesheet" type="text/css" href="css/principal.css" />

</head>

<body>
<!-- INICIO CONTEUDO PRINCIPAL  -->
   <div id="Principal">
   
<!--INICIO TOPO SITE E MENU SUPERIOR -->
           <div id="topo_site">
		 
		     <a href="#">
              <img src="imagens/logo.jpg" /></img>		 
			 </a>
		 </div>
<!-- FIM TOPO SITE E MENU SUPERIOR -->
    
    <br />
         <!-- INICIO CONTEUDO -->
		 <div id="conteudo">
		 

<table align="center" width="30%" border="0">
  <tr>
    <td colspan="2" align="center"><span class="cabecalho">Login</span></td>
  </tr>
  <tr>
    <td align="center" colspan="2">
    <form name="login" method="post" action="logar.php">			
					<p>			
					<label>Nome</label>
					<input name="login" type="text" size="30" />
					<label>Senha</label>
					<input name="senha" type="password" size="30" />
					<br /><br />	
					<input class="button" value="Entrar" type="submit" />		
					</p>		
				</form>	
    </td>
    </tr>
</table>


		
                
		       
	                 					 
					 	 
					 <br /><BR /><Br /><br /><br />
				    
		       
			   <div class="espacador"></div>
			   
		       </div>
		       <!-- FIM CONTEUDO DIREITA -->
			   
			   <div class="espacador"></div>
			   


<!-- INICIO RODAPE -->
         <? include ("rodape.php"); ?>
<!-- FIM RODAPE -->
		 
   </div>
<!-- FIM PRINCPIAL -->
</body>
</html>
