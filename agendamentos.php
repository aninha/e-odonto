<?
require ("verifica.php");
include ("config.php"); 
require "agendamento_config.php";
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
		
         <div style="padding-left:10px;" id="conteudo">
		 
	       

	 
					 <h1>Agendamentos de <? 
					 if (!isset($_GET['month']))
 					 	$month = date("n");
					 else
  						$month = $_GET['month'];
					 echo $maand[$month]; ?></h1>

                  
<!-- javascript pop-up -->
        <script language="JavaScript">
            <!--
            function MM_openBrWindow(theURL,winName,features) { //v2.0
              window.open(theURL,winName,features);
	    }
	    //-->
	</script>


<?
# Setando variaveis
if (!isset($_GET['op']))
  $op = '';
else
  $op = $_GET['op'];
if (!isset($_GET['month']))
  $month = '';
else
  $month = $_GET['month'];
if (!isset($_GET['year']))
  $year = '';
else
  $year = $_GET['year'];
if (!isset($_GET['date']))
  $date = '';
else
  $date = $_GET['date'];
if (!isset($_GET['ask']))
  $ask = '';
else
  $ask = $_GET['ask'];
if (!isset($_GET['da']))
  $da = '';
else
  $da = $_GET['da'];
if (!isset($_GET['mo']))
  $mo = '';
else
  $mo = $_GET['mo'];
if (!isset($_GET['ye']))
  $ye = '';
else
  $ye = $_GET['ye'];
if (!isset($_GET['next']))
  $next = '';
else
  $next = $_GET['next'];
if (!isset($_GET['prev']))
  $prev = '';
else
  $prev = $_GET['prev'];
if (!isset($_GET['id']))
  $id = '';
else
  $id = $_GET['id'];

# Navegacao do Topo
$m = date("n");
$y = date("Y");
$d = date("j");

if ($addeventok == 1){
if ($op == "addevent"){echo "<b>";}
if ($op == "eventform"){echo "<b>";}
echo "<a href=agendamentos.php?op=eventform>Nova consulta</a>";
if ($op == "eventform"){echo "</b>";}
if ($op == "addevent"){echo "</b>";}
}

if ($viewcalok == 1){
if ($op == "cal"){ echo "<b>"; }
echo " :: <a href=agendamentos.php?op=cal&month=$m&year=$y>Agendamentos do mês atual</a>";
if ($op == "cal"){ echo "</b>"; }
}
echo "<br><br>";


/***************************/
/* Ver consultas sem popup */
/***************************/

function view($id){
global $maand,$vieweventok;

$query = "select * FROM agendamentos,pacientes WHERE id_agendamento='$id' AND agendamentos.id_paciente=pacientes.id";

$result = mysql_query($query);
$row = mysql_fetch_object($result);

echo "<h3 class=cabecalho>".$row->day ." ".$maand[$row->month]." ".$row->year."<br>\n";
echo stripslashes($row->horario)." - ".$row->nome." </h3><br>\n";

echo "<li>Paciente: ".$row->nome."\n";
echo "<li>Telefone: ".$row->tel."\n";
echo "<li>Obs:\n";
echo stripslashes($row->obsagenda);
echo "<br><br>\n";
if ($row->email)
        echo "<li>Email : <a href=mailto:".$row->email.">".$row->email."</a>\n";

echo "<br><br><div class=direita><a href=agendamento_popup.php?op=deletar&id=$id>Excluir Consulta <img src=imagens/lixeira.gif></a></div>";

}



/*****************/
/*    Voltar     */
/*****************/

function back(){
  echo "<br><a href=javascript:history.back()>Voltar</a>\n";
}


/****************************/
/* Adicionar Consulta: form */
/****************************/

function eventform(){
global $language,$addeventok,$maand;

$dia = $_GET['dia'];
$mes = $_GET['mes'];
$ano = $_GET['ano'];

if ($addeventok == 1){
echo "<h3>Nova Consulta ($dia/$mes/$ano)</h3>";
echo "<form action=agendamentos.php?op=addevent method=POST>\n";

// Dias
echo "Data da Consulta<br>\n";
echo "<select name=bday>\n\t<option value=$dia>$dia\n";
for ($i = 1;$i<=31;$i++){
echo "\t<option>$i\n";
}
echo "</select>&nbsp;&nbsp;\n";

// Meses
echo "<select name=bmonth>\n\t<option value=$mes>$mes\n";
for($i=1;$i<13;$i++){
 echo "\t<option value=".$i.">".ucfirst($maand[$i])."\n";
}
echo "</select>&nbsp;&nbsp;\n";

// Anos e + 3 anos pra selecionar
echo "<select name=byear>\n\t<option value=$ano>$ano\n";
$year = date("Y");
for ($i=0;$i<=4;$i++){
echo "\t<option>$year\n";
$year += 1;
}
echo "</select><br>\n";


echo "Horario<br>\n";
echo "
<select name=horario>
  <option selected value=0>Selecione o Horario</option>
  <option value=8:00>8:00</option>
  <option value=8:30>8:30</option>
  <option value=9:00>9:00</option>
  <option value=9:30>9:30</option>
  <option value=10:00>10:00</option>
  <option value=10:30>10:30</option>
  <option value=11:00>11:00</option>
  <option value=11:30>11:30</option>
  <option value=12:00>12:00</option>
  <option value=12:30>12:30</option>
  <option value=13:00>13:00</option>
  <option value=13:30>13:30</option>
  <option value=14:00>14:00</option>
  <option value=14:30>14:30</option>
  <option value=15:00>15:00</option>
  <option value=15:30>15:30</option>
  <option value=16:00>16:00</option>
  <option value=16:30>16:30</option>
  <option value=17:00>17:00</option>
  <option value=17:30>17:30</option>
  <option value=18:00>18:00</option>
  <option value=18:30>18:30</option>
  <option value=19:00>19:00</option>
  <option value=19:30>19:30</option>
  <option value=20:00>20:00</option>
</select>
<br>\n";

// Seleciona os pacientes
echo "Paciente<br>\n";
echo "<select name=paciente>\n\t<option value=0>Selecione o Paciente</option>\n";
$query = "select id,nome from pacientes";
$result = mysql_query($query);
    while ($row = mysql_fetch_object($result)){
        echo "\t<option value=".$row->id.">".$row->nome."</option>\n";
    }

echo "</select>\n<br>\n";

echo "Obs<br>(informações adicionais, tratamento, convenio, etc)<br>\n";
echo "<textarea name=obsagenda cols=30 rows=5></textarea><br>\n";

echo "<input type=submit value=\"Inserir Consulta\">\n<br>\n";

echo "<form>\n";
}

}

/*******************/
/* Insere Consulta */
/*******************/

if ($op == "addevent"){
  $horario = $_POST['horario'];
  $obsagenda = $_POST['obsagenda'];
  $paciente = $_POST['paciente'];
  $bday = $_POST['bday'];
  $bmonth = $_POST['bmonth'];
  $byear = $_POST['byear'];
}

function addevent($horario,$obsagenda,$paciente,$bday,$bmonth,$byear){
global $caleventapprove;

if (!$horario) { echo "Por favor selecione um horario para consulta"; back(); }
elseif (!$obsagenda) { echo "Por favor descreva o tratamento"; back(); }
elseif (!$paciente) { echo "Selecione um paciente"; back(); }
elseif (!$bday) { echo "Selecione um Dia"; back(); }
elseif (!$bmonth) { echo "Selecione um Mes"; back(); }
elseif (!$byear) { echo "Selecione um Ano"; back(); }

else {

$horario = addslashes($horario);
$obsagenda = addslashes(nl2br($obsagenda));



$query = "insert into agendamentos values('','$horario','$obsagenda','$paciente','$bday','$bmonth','$byear')";
//echo $query;
$result = mysql_query($query);

echo "<meta http-equiv=\"refresh\" content=\"0;URL=agendamentos.php\">";
}

}


/*********************************/
/* Ver Agendamentos (Calendario) */
/*********************************/

function cal($month,$year,$monthborder,$calcells,$calcellp,$tablewidth,$trtopcolor,$calfontback,$calfontasked,$calfontnext,$sundaytopclr,$weekdaytopclr,$sundayemptyclr,$weekdayemptyclr,$todayclr,$sundayclr,$weekdayclr){
global $maand,$week,$language,$m,$d,$y,$tdwidth,$tdtopheight,$tddayheight,$tdheight,$viewcalok,$searchmonthok,$popupevent,$popupeventwidth,$popupeventheight;

if ($viewcalok == 1){

// Mes anterior
$pm = $month;
if ($month == "1")
    $pm = "12";
else
    $pm--;
// Ano anterior
$py = $year;
if ($pm == "12")
    $py--;

// Proximo mes
$nm = $month;
if ($month == "12")
    $nm = "1";
else
    $nm++;
// Proximo Ano
$ny = $year;
if ($nm == 1)
    $ny++;    

// Exibe mes atual
$askedmonth = $maand[$month];
$askedyear = $year;
$firstday = date ("w", mktime(12,0,0,$month,1,$year));
$firstday++;
// nr de dias do mes
$nr = date("t",mktime(12,0,0,$month,1,$year));
echo "<table border=$monthborder cellspacing=$calcells cellpadding=$calcellp width=$tablewidth>";
    echo "<tr bgcolor=$trtopcolor>";
        echo "<td align=center colspan=7 height=$tdtopheight>";
        if ($month != date("n") || $year != date("Y")){
        echo "<font size=$calfontback><a href=agendamentos.php?op=cal&month=".$pm."&year=".$py.">  <= ".$maand[$pm]." - ".$py."</a></font>"; }
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size=$calfontasked>".$askedmonth." ".$askedyear."</font>";
        echo "&nbsp;&nbsp;&nbsp;<font size=$calfontnext><a href=agendamentos.php?op=cal&month=".$nm."&year=".$ny.">".$maand[$nm]." - ".$ny." => </a></font></td>";
    echo "</tr>";
    echo "<tr>";
        // Cria os 7 dias da semana cada um com <td>'s (=dias)
        for ($i=1;$i<=7;$i++){
            echo "<td align=center width=$tdwidth height=$tddayheight ";
            if ($i == 1){
                echo "bgcolor=$sundaytopclr>".$week[$i]."</td>"; // domingo
	    }
            else{    
                echo "bgcolor=$weekdaytopclr>".$week[$i]."</td>"; // resto da semana
	   }
        }
    echo "</tr>";
        // Inicio dias da semana
        for ($i=1;$i<$firstday;$i++){
	    echo "<td height=$tdheight ";
                if ($i == "1"){
                    echo "bgcolor=$sundayemptyclr ";
		}
                else{
                        echo "bgcolor=$weekdayemptyclr ";
		}
            echo ">&nbsp;</td>";
        }
        $a=0;
        for ($i=1;$i<=$nr;$i++){
            echo "<a href=agendamentos.php?op=eventform&dia=$i&mes=$month&ano=$year><td height=$tdheight ";
            if ($i == $d && $month == $m && $year == $y){ // HOJE
                echo "bgcolor=$todayclr ";
            }
	    if (($i == (9-$firstday)) or ($i == (16-$firstday)) or ($i == (23-$firstday)) or ($i == (30-$firstday)) or ($i == (37 - $firstday))){                
	       echo "bgcolor=$sundayclr ";
            }

            else{
              echo "bgcolor=$weekdayclr ";
            }
            echo " valign=top><b>".$i."</b>";
            // Exibe os eventos em $i 
               // $query = "select id,horario from agendamentos left join calendar_cat on agendamentos.cat=calendar_cat.cat_id where day='$i' and month='$month' and year='$year' order by day,month,year ASC";
				$query = "SELECT * FROM agendamentos,pacientes WHERE pacientes.id = agendamentos.id_paciente AND day='$i' and month='$month' and year='$year' order by horario,day,month,year ASC ";
                $result = mysql_query($query);
                    while ($row = mysql_fetch_object($result)){
			echo "<li>";
			if ($popupevent == 1)
			  echo "<a href=\"#\" onclick=\"MM_openBrWindow('agendamento_popup.php?op=view&id=".$row->id_agendamento."','Calendar','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=no,width=".$popupeventwidth.",height=".$popupeventheight."')\">";
			  
			else
			  echo "<a href=agendamentos.php?op=view&id=".$row->id_agendamento.">";
                        echo stripslashes($row->horario)." - ".substr($row->nome,0,9)."</a>";

                    }

            echo "</td></a>";
            // fecha <tr> final da semana
            $a++;
            if (($i == (8-$firstday)) or ($i == (15-$firstday)) or ($i == (22-$firstday)) or ($i == (29-$firstday)) or ($i == (36 - $firstday))){
            echo "</tr><tr>";
            $a = 0;
            }
        }
        // preenche com espacos vazios
        if ($a != 0){
        $last = 7-$a;
            for ($i=1;$i<=$last;$i++){
                echo "<td bgcolor=$weekdayemptyclr>&nbsp;</td>";
            }
        }
    echo "</tr>";
echo "</table>";
echo "<table>";
echo "<tr><td bgcolor=$todayclr width=5 height=5 align=left>&nbsp;</td><td align=left> = Hoje é " .$week[$weekday]." ".$d." de ".strtolower($maand[$m])." ".$y. "</td></tr>";
echo "</table><br>";



}

}


switch ($op){
    
    // Form Inserir Consulta
    case"eventform":{
       eventform();
    break;
    }

    // Adicionar Consulta
    case "addevent":{
        addevent($horario,$obsagenda,$paciente,$bday,$bmonth,$byear);
    break;
    }

    // Ver detalhes
    case "view":{
        view($id);
    break;
    }
    

    // Ver Agendamentos
    case"cal":{
        cal($month,$year,$monthborder,$calcells,$calcellp,$tablewidth,$trtopcolor,$calfontback,$calfontasked,$calfontnext,$sundaytopclr,$weekdaytopclr,$sundayemptyclr,$weekdayemptyclr,$todayclr,$sundayclr,$weekdayclr);
    break;
    }
    
    // Padrao
    default:{
	if ($caldefault == 0)
	        day($ask,$da,$mo,$ye,$next,$prev);
	if ($caldefault == 1)
		week($week,$date);
	if ($caldefault == 2){
		if (!$month)
			$month = $m;
		if (!$year)
			$year = $y;
        	cal($month,$year,$monthborder,$calcells,$calcellp,$tablewidth,$trtopcolor,$calfontback,$calfontasked,$calfontnext,$sundaytopclr,$weekdaytopclr,$sundayemptyclr,$weekdayemptyclr,$todayclr,$sundayclr,$weekdayclr);
	}
    break;
    }
}


?>

                
                    
                  
                    
                    
                    
		       
      <div class="espacador"></div>
			   
		       
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
