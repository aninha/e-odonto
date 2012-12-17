<?
require ('config.php');
$id_medicamento = $_GET['medicamento'];
$id_dentista = $_GET['dentista'];
$id_paciente = $_GET['paciente'];
$prescricao = $_GET['prescricao'];

?>
<html>
<head>
 <title>Receituario</title>
 
</head>
<body>

<center> 
<div style="padding-left:10px; padding-top:10px; border:solid 1px #000; height:200px; width:800px; ">
 
 
<?
$query = "select nome_comercial FROM medicamentos WHERE id = '$id_medicamento'";
$result = mysql_query($query);
$row = mysql_fetch_object($result);

$query2 = "select nome,endereco,tel,cro FROM usuarios WHERE id = '$id_dentista'";
$result2 = mysql_query($query2);
$row2 = mysql_fetch_object($result2);

$query3 = "select nome,end,tel FROM pacientes WHERE id = '$id_paciente'";
$result3 = mysql_query($query3);
$row3 = mysql_fetch_object($result3);

?>


<img align="left" src="imagens/odonto.gif">
<center>
<h2><? echo $row2->nome; ?></h2>
CRO: <? echo $row2->cro ?>
</center>

<hr width="80%">
<h2>RECEITUÁRIO</h2>
<br>


<p align="left">
<b>Paciente:</b> <? echo $row3->nome; ?>
<br>
<b>Endereço:</b> <? echo $row3->end; ?>
<br>
<b>Tel:</b> <? echo $row3->tel; ?>

<br>
<br>
<b>Medicamento:</b> <? echo $row->nome_comercial; ?>
<br>
<b>Prescrição:</b>
<br> <? echo $prescricao ?>

<br><br><br><br>

<b>Rio de Janeiro - RJ - <? echo date("d/m/Y"); ?></b>

</p>
<br><bR><Br>

<center>
___________________________________________
<br><? echo $row2->nome; ?>
<br><? echo $row2->cro; ?>

<br>
<? echo $row2->endereco; ?> - <? echo $row2->tel; ?>

</center>

<br><br><Br>

<p align="left">

Recebi o Original em <? echo date("d/m/Y"); ?> às <? echo date("H:i:s"); ?>hs, e fui orientado sobre a necessidade da utilização correta da medicação na dose, via de administração e período. Qualquer intercorrência ou dúvida deverei entrar em contato imediato com o <b><? echo $row2->nome; ?> </b>

</p>


<p align="right" style="padding-right:10px;">
Rio, <? echo date("d/m/Y"); ?> às <? echo date("H:i:s"); ?> hs
</p>


<br><Br><br><Br>

__________________________________________________
<br><? echo $row3->nome; ?>

<br><br><br><Br>

<a href="#" onClick="javascript:print();"><img style="border:0;" src="imagens/impressora.gif"></a>
</div>
</center>
</body>
</html>
