<?
session_start(); 
require ("config.php");
// Recupera Login e Senha
$login = isset($_POST["login"]) ? addslashes(trim($_POST["login"])) : FALSE; 
$senha = isset($_POST["senha"]) ? md5(trim($_POST["senha"])) : FALSE;

 ?>

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
		 
		     <a href="index.php">
              <img src="imagens/logo.jpg" /></img>		 
			 </a>
		 </div>
<!-- FIM TOPO SITE E MENU SUPERIOR -->
    
    <br />
         <!-- INICIO CONTEUDO -->
		 <div id="conteudo">
		 

<?  
if(!$login || !$senha) 
{ 
    echo "<center><h1>Voce deve digitar login e senha!</h1><br><br><br><a href='javascript:history.back(-1);'>Volte Aqui e preencha corretamente</a></center>"; 
    exit; 
} 

$sql = mysql_query("SELECT * FROM login WHERE login = '$login'", $conexao) or die("Falha na Consulta");

$rs = @mysql_num_rows($sql); 

if($rs) 
{ 

$dados = mysql_fetch_array($sql); 

if(!strcmp($senha, $dados["senha"])) 
    { 
        // Grava os dados da sessao e redireciona o buneko 
        $_SESSION["nome_usuario"] = stripslashes($dados["login"]); 
        $_SESSION["nivel"]    = $dados["nivel"]; 
        $_SESSION["id_paciente"]    = $dados["id_paciente"];
		
		if ($dados["nivel"] == 1){
		
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=index2.php'>";

        exit; 
		}
		else{
		
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=pacientes/index_paciente.php'>";

        exit; 
		}
    } 
else 
    { 
        echo "<center><h1>Senha invalida!</h1><br><Br><Br><a href='javascript:history.back(-1);'>Volte Aqui e tente novamente</a></center>"; 
        exit; 
    } 
} 
else 
{ 
    echo "<center><h1>O login fornecido nao existe!</h1><br><br><br><a href='javascript:history.back(-1);'>Volte Aqui e tente novamente</a></center> "; 
    exit; 
} 
?>			 	 
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


