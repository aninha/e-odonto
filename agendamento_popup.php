<?
require ('agendamento_config.php');
$id = $_GET['id'];
?>
<html>
<head>
 <title>Agendamento</title>
 <link rel="stylesheet" type="text/css" href="css/principal.css" />
</head>
<body bgcolor="#FFFFFF">

 <div style="padding-left:10px; padding-top:10px;" id="conteudo">
<?
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


switch ($op){
    case"deletar":{
        deletar($id);
    break;
    }
}

function deletar($id){

  $query = "delete from agendamentos where id_agendamento='$id'";
  mysql_query($query);
  echo "<script>alert('Excluido com Sucesso');</script>";
  echo "<script>close();</script>";


}


?>

</div>
</body>
</html>
