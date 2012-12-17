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
		 
    
<div style="padding:10px 10px 50px 20px;">			 
					 <h1>Estátisticas do Sistema</h1>

<?
$sql = "SELECT COUNT(*) AS totalpacientes FROM pacientes";
$resultado = mysql_query($sql) or die ("Erro na consulta");
$linha = mysql_fetch_assoc($resultado);
$totalpacientes = $linha['totalpacientes'];


$sql2 = "SELECT COUNT(*) AS totalagendamentos FROM agendamentos";
$resultado2 = mysql_query($sql2) or die ("Erro na consulta");
$linha2 = mysql_fetch_assoc($resultado2);
$totalagendamentos = $linha2['totalagendamentos'];


$sql3 = "SELECT COUNT(*) AS totalconvenios FROM convenios";
$resultado3 = mysql_query($sql3) or die ("Erro na consulta");
$linha3 = mysql_fetch_assoc($resultado3);
$totalconvenios = $linha3['totalconvenios'];


$sql4 = "SELECT COUNT(*) AS totalestoque FROM estoque";
$resultado4 = mysql_query($sql4) or die ("Erro na consulta");
$linha4 = mysql_fetch_assoc($resultado4);
$totalestoque = $linha4['totalestoque'];


$sql5 = "SELECT COUNT(*) AS totalmedicamentos FROM medicamentos";
$resultado5 = mysql_query($sql5) or die ("Erro na consulta");
$linha5 = mysql_fetch_assoc($resultado5);
$totalmedicamentos = $linha5['totalmedicamentos'];


$sql6 = "SELECT COUNT(*) AS totaldentistas FROM usuarios";
$resultado6 = mysql_query($sql6) or die ("Erro na consulta");
$linha6 = mysql_fetch_assoc($resultado6);
$totaldentistas = $linha6['totaldentistas'];

$sql7 = "SELECT COUNT(*) AS totalpagamentos FROM pagamentos";
$resultado7 = mysql_query($sql7) or die ("Erro na consulta");
$linha7 = mysql_fetch_assoc($resultado7);
$totalpagamentos = $linha7['totalpagamentos'];


$sql8 = "SELECT COUNT(*) AS totalproteticos FROM proteticos";
$resultado8 = mysql_query($sql8) or die ("Erro na consulta");
$linha8 = mysql_fetch_assoc($resultado8);
$totalproteticos = $linha8['totalproteticos'];


?>
                 
                    
                    
<table class="estatisticas">
    <tr>
        <th>Total</th>
        <td><? echo $totalagendamentos; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalagendamentos."0"; ?>" alt="<? echo $totalagendamentos; ?>" /></td>
       
        <td><? echo $totalpacientes; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalpacientes - 1200;?>" alt="<? echo $totalpacientes; ?>" /></td>
        
        <td><? echo $totaldentistas; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totaldentistas."0."; ?>" alt="<? echo $totaldentistas; ?>" /></td>
        
        <td><? echo $totalpagamentos; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalpagamentos."0"; ?>" alt="<? echo $totalpagamentos; ?>" /></td>
       
        <td><? echo $totalconvenios; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalconvenios."0"; ?>" alt="<? echo $totalconvenios; ?>" /></td>
       
        <td><? echo $totalestoque; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalestoque."0"; ?>" alt="<? echo $totalestoque; ?>" /></td>
       
        <td><? echo $totalmedicamentos; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalmedicamentos - 1600; ?>" alt="<? echo $totalmedicamentos; ?>" /></td>
         
        <td><? echo $totalproteticos; ?><img src="imagens/coluna.gif" width="36" height="<? echo $totalproteticos."0"; ?>" alt="<? echo $totalproteticos; ?>" /></td>

    </tr>
    <tr>
        <th></th>
        <th>Agedamentos</th>
       
        <th>Pacientes</th>
        
        <th>Dentistas</th>
        
        <th>Pagamentos</th>
       
        <th>Convenios</th>
       
        <th>Estoque</th>
       
        <th>Medicamentos</th>
              
        <th>Proteticos</th>
    </tr>
</table>


<br />
Total de Agendamentos: <? echo $totalagendamentos; ?>
<bR />
Total de Pacientes: <? echo $totalpacientes; ?>
<br />
Total de Dentistas: <? echo $totaldentistas; ?>
<br />
Total de Pagamentos: <? echo $totalpagamentos; ?>
<br />
Total de Convênios: <? echo $totalconvenios; ?>
<br />
Total de Material em Estoque: <? echo $totalestoque; ?>
<br />
Total de Medicamentos Cadastrados: <? echo $totalmedicamentos; ?>
<br />
Total de Proteticos: <? echo $totalproteticos; ?>
<br />
                    
    

                
                    
                    
		       
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
