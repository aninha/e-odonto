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
		 

		       
<div style="padding-left:10px;">			 
	  
      
       <h1>Emissão de Receituário</h1>
       
                     <form name="receituario" method="GET" action="receituario_popup.php">
                   <table  width="100%" border="0">
  
  <tr>
    <td>
   			
		 		  <p>			
					<label>Paciente</label>
				   <select name="paciente">
						<option selected value="0">Selecione</option>
				  	<?
$sql2 = "SELECT * FROM pacientes";

$resultado2 = mysql_query($sql2) or die ("Erro na consulta");

while ($linha2 = mysql_fetch_assoc($resultado2)){
$paciente = $linha2['nome'];
$id_paciente = $linha2['id'];

?>
 <option value="<? echo $id_paciente ?>"><? echo $paciente ?></option>

<? } ?>
                  
                  
                  </select>
                    
                    <label>Dentista</label>
		<select name="dentista">
						<option selected value="0">Selecione</option>
				  	<?
$sql3 = "SELECT * FROM usuarios";

$resultado3 = mysql_query($sql3) or die ("Erro na consulta");

while ($linha3 = mysql_fetch_assoc($resultado3)){
$dentista = $linha3['nome'];
$id_dentista = $linha3['id'];

?>
 <option value="<? echo $id_dentista ?>"><? echo $dentista ?></option>

<? } ?>
                    
					
           </select>      
                              
                               <label>Medicamento</label>
		<select name="medicamento">
						<option selected value="0">Selecione</option>
				  	<?
$sql4 = "SELECT * FROM medicamentos";

$resultado4 = mysql_query($sql4) or die ("Erro na consulta");

while ($linha4 = mysql_fetch_assoc($resultado4)){
$nome_comercial = $linha4['nome_comercial'];
$id_medicamento = $linha4['id'];

?>
 <option value="<? echo $id_medicamento ?>"><? echo $nome_comercial ?></option>

<? } ?>
                    
					
           </select>      
           
                               
                   
                    
                    <label>Prescrição Médica</label>
                    <textarea name="prescricao">Quantidade, Dose, Intervalo de Doses, Duração do Tratamento, Recomendações Pertinentes</textarea>
   				</p>	
     </td>
   </tr>
  <tr>
    <td align="center" colspan="2"><input class="button" value="Gerar Receituario" type="submit" /> </td>
    </tr>
</table>
                     </form>
					 
                
                     

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

