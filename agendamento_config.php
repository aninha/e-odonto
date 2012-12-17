<?php

############################################################################
# VARIAVEIS INICIALIZACAO (1 = ligado / 0 = desligado)

$calpath = "";
$caldefault = '2';
$popupevent = '1'; 
$popupeventheight = '250'; 
$popupeventwidth = '350';  
$caleventapprove = '1'; 
$caleventadminapprove = '1'; 
$addeventok = '1'; 		// Novas Consultas no topo
$viewcalok = '1';  		// Consultas Mes Atual no topo

############################################################################
# CONEXAO BD

$db = 'eodonto';
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost';

mysql_connect($dbhost,$dbuser,$dbpass) or die("Nao foi possivel conectar ao banco de dados");
mysql_select_db("$db") or die("Nao foi possivel abrir o banco");


############################################################################
# CORES


# Cores e Variaveis do Calendario mensal de agendamento
$tablewidth = '98%'; // width da table
$monthborder = '0'; // borda da table
$tdwidth = '14%'; // width da cell
$tdtopheight = '30'; // altura da celula do topo/titulo
$tddayheight = '30'; // altura da celula dos dias da semana 
$tdheight = '50'; // altura da celula dos dias 
$calcells = '1'; // cellspacing
$calcellp = '0'; // cellpadding 
$trtopcolor = '#c0ede1'; // TITULO / mes
$calfontasked = '+3'; // Tamanho da fonte do mes
$sundaytopclr = '#BBBBBB'; // Cor Domingo
$weekdaytopclr = '#DDDDDD'; // Cor Semana
$sundayemptyclr = '#BBBBBB'; // Cor Domingo que nao esteja no mes
$weekdayemptyclr = '#DDDDDD'; // celula vazio / preenchumento <td>
$todayclr = '#c0ede1'; // Cor HOJE
$sundayclr = '#BBBBBB'; // Cor Domingocolor 
$weekdayclr = '#DDDDDD'; // Cor dia de semana 

# Nomes da semana e meses
$week[1]="Domingo";
$week[2]="Segunda";
$week[3]="Terça";
$week[4]="Quarta";
$week[5]="Quinta";
$week[6]="Sexta";
$week[7]="Sabado";

$maand[1]="Janeiro";
$maand[2]="Fevereiro";
$maand[3]="Março";
$maand[4]="Abril";
$maand[5]="Maio";
$maand[6]="Junho";
$maand[7]="Julho";
$maand[8]="Augosto";
$maand[9]="Setembro";
$maand[10]="Outubro";
$maand[11]="Novembero";
$maand[12]="Dezembro";
?>
