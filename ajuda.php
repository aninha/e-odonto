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
		 <div style="padding-left:10px;" id="conteudo">
		 

		       
	

<div style="border:0px solid gray; width:750px; margin-bottom: 1em; padding: 10px">	 
	<h1 class="erro">Ajuda</h1> 
					 
<p></p>
      



<ul>
<li><a href="#usuarios">Usu�rios do Sistema (Secret�rias e Dentistas)</a></li>
<li><a href="#pacientes">Pacientes</a></li>
<li><a href="#agendamentos">Agendamentos</a></li>
<li><a href="#medicamentos">Medicamentos</a></li>
<li><a href="#estoque">Estoque</a></li>
<li><a href="#convenios">Conv�nios</a></li>
<li><a href="#proteticos">Prot�ticos</a></li>
<li><a href="#pagamentos">Pagamentos</a></li>
<li><a href="#relatorios">Relat�rios</a></li>
<li><a href="#relatorios">Emitir Receitu�rio</a></li>
<li><a href="#relatorios">Aniversariantes (Mala-Direta)</a></li>
</ul>


<br /><br /><bR /><br /><Br /><Br /><Br /><br /><Br /><Br /><br />

<a name="usuarios" class="cabecalho">Usu�rios do Sistema (Secret�rias e Dentistas)</a>
<p class="caixa">
<b>Cadastramento</b>
<br />
O cadastramento de novos usu�rios � feito apartir do Menu Usu�rios -> Cadastrar Novo usu�rio, preenchendo corretamente com os dados solicitados

<br /><br />
<b>Edi��o / Consulta de Usu�rios</b>
<br />
A consulta � feita atrav�s do menu Usuarios -> Listar/Excluir/Editar Usuarios -> Selecionando o usuario desejado obetr� maiores informa��es sobre o mesmo
Podendo alterar seus dados ou apenas consulta-lo.
</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="pacientes" class="cabecalho">Pacientes</a>
<p class="caixa">
<b>Pacientes</b>
<br />
O cadastramento de novos pacientes � feito apartir do Menu Pacientes -> Cadastrar Novo paciente, preenchendo corretamente com os dados solicitados

<br /><br />
<b>Edi��o / Consulta de Pacientes</b>
<br />
A consulta � feita atrav�s do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Selecionando o paciente desejado obetr� maiores informa��es sobre o mesmo
Podendo alterar seus dados ou apenas consulta-lo.

<br /><br />
<b>Arcada Dent�ria</b>
<br />
A consulta � feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Arcada. Nela � possivel marcar as patologias existentes em cada dente

<br /><br />
<b>Anamnese</b>
<br />
A consulta � feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Anamnese. Nela � possivel realizar a anamnese do paciente

<br /><br />
<b>Agendamentos</b>
<br />
A consulta � feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Agendamentos. Aonde � possivel visualizar as ultimas 5 consultas do paciente

<br /><br />
<b>Pagamentos</b>
<br />
A consulta � feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Pagamentos. Aonde � possivel visualizar o hist�rico de pagamentos dos pacientes

<br /><br />
<b>Mensagem</b>
<br />
� enviada atrav�s do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Anamnese.

</p>

<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="agendamentos" class="cabecalho">Agendamentos</a>
<p class="caixa">
<b>Novo Agendamento</b>
<br />
Atraves do Menu Agendamentos -> Novo Agendamento, � possivel selecionar a data e horario para uma nova consulta, ou simplesmente clicando no calend�rio existente em agendamentos.

<br /><br />
<b>Consultar Agendamentos</b>
<br />
A consulta � feita atrav�s do menu Agendamentos -> Consultar Agendamentos , aonde � possivel visuzliar os agendamentos do mes atual e dos seguintes meses.


</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="medicamentos" class="cabecalho">Medicamentos</a>
<p class="caixa">

<b>Novo Medicamento (DEF)</b>
<br />
O cadastramento de novos medicamentos � feito apartir do Menu Medicamentos -> Inserir Novo Rem�rio (DEF), preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edi��o / Consulta de Medicamentos</b>
<br />
A consulta � feita atrav�s do menu Medicamentos -> Listar/Excluir/Editar Medicamentos -> Selecionando o medicamento desejado obetr� maiores informa��es sobre o mesmo
Podendo alterar seus dados ou apenas consulta-lo.

</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="estoque" class="cabecalho">Estoque</a>
<p class="caixa">

<b>Novo Material</b>
<br />
O cadastramento de novo material � feito apartir do Menu Material -> Inserir Novo Material (Estoque), preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edi��o / Consulta de Estoque</b>
<br />
A consulta � feita atrav�s do menu Estoque -> Consultar Estoque -> Selecionando o material desejado obetr� poder� edita-lo e acrescentar ou diminuir o material em estoque.

</p>

<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="convenios" class="cabecalho">Conv�nios</a>
<p class="caixa">

<b>Novo Conv�nio</b>
<br />
O cadastramento de novos conv�nios � feito apartir do Menu Convenios e Proteticos -> Inserir Novo Conv�nio, preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edi��o / Consulta de Conv�nios</b>
<br />
A consulta � feita atrav�s do menu Convenios e Proteticos -> Listar\Excluir\Editar Convenios -> Selecionando o convenio desejado para edita-lo e visualizar seus detalhes.

</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="proteticos" class="cabecalho">Prot�ticos</a>
<p class="caixa">

<b>Novo Prot�tico</b>
<br />
O cadastramento de novos prot�ticos � feito apartir do Menu Convenios e Proteticos -> Inserir Novo Protetico, preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edi��o / Consulta de Prot�ticos</b>
<br />
A consulta � feita atrav�s do menu Convenios e Proteticos -> Listar\Excluir\Editar Proteticos -> Selecionando o protetico desejado para edita-lo e visualizar seus detalhes.

</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="pagamentos" class="cabecalho">Pagamentos</a>
<p class="caixa">
<b>Pagamentos</b>
<br />
Para inserir novos pagamentos � necessario ir ao Menu Pagamentos -> Inserir Novo Pagamento, preenchendo corretamente com os dados solicitados

<br /><br />
<b>Edi��o / Consulta de Pagamentos</b>
<br />
A consulta � feita atrav�s do menu Pagamentos -> Historico de Pagamentos -> Selecionando o paciente desejado para visualizar seus detalhes
</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="relatorios" class="cabecalho">Relat�rios</a>
<p class="caixa">

<b>Estat�sticas</b>
<br />
Para consultar as estatisticas do programa, acesse Menu Relat�rios -> Estatisticas, s�o divesos tipos de relat�rios existentes.

<br /><br />
<b>Aniversariantes (Mala Direta)</b>
<br />
Para consultar e enviar o email de anivers�risntes do m�s acesse no Menu Relatorios -> Aniversariantes do mes (mala direta)

<br /><br />
<b>Emitir Receitu�rio</b>
<br />
Para emitir receitu�rios acesse o Menu Relatorios -> Emitir Receituario e selecione o paciente desejado. Preencha os dados opcionais e imprima o receituario.

</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

</div>

		       
			   <div class="espacador"></div>
			   
	   
			   <div class="espacador"></div>
			   
</div>

<!-- INICIO RODAPE -->
         <? include ("rodape.php"); ?>
<!-- FIM RODAPE -->
		 
   </div>
<!-- FIM PRINCPIAL -->
</body>
</html>

