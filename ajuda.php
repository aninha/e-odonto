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
<li><a href="#usuarios">Usuários do Sistema (Secretárias e Dentistas)</a></li>
<li><a href="#pacientes">Pacientes</a></li>
<li><a href="#agendamentos">Agendamentos</a></li>
<li><a href="#medicamentos">Medicamentos</a></li>
<li><a href="#estoque">Estoque</a></li>
<li><a href="#convenios">Convênios</a></li>
<li><a href="#proteticos">Protéticos</a></li>
<li><a href="#pagamentos">Pagamentos</a></li>
<li><a href="#relatorios">Relatórios</a></li>
<li><a href="#relatorios">Emitir Receituário</a></li>
<li><a href="#relatorios">Aniversariantes (Mala-Direta)</a></li>
</ul>


<br /><br /><bR /><br /><Br /><Br /><Br /><br /><Br /><Br /><br />

<a name="usuarios" class="cabecalho">Usuários do Sistema (Secretárias e Dentistas)</a>
<p class="caixa">
<b>Cadastramento</b>
<br />
O cadastramento de novos usuários é feito apartir do Menu Usuários -> Cadastrar Novo usuário, preenchendo corretamente com os dados solicitados

<br /><br />
<b>Edição / Consulta de Usuários</b>
<br />
A consulta é feita através do menu Usuarios -> Listar/Excluir/Editar Usuarios -> Selecionando o usuario desejado obetrá maiores informações sobre o mesmo
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
O cadastramento de novos pacientes é feito apartir do Menu Pacientes -> Cadastrar Novo paciente, preenchendo corretamente com os dados solicitados

<br /><br />
<b>Edição / Consulta de Pacientes</b>
<br />
A consulta é feita através do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Selecionando o paciente desejado obetrá maiores informações sobre o mesmo
Podendo alterar seus dados ou apenas consulta-lo.

<br /><br />
<b>Arcada Dentária</b>
<br />
A consulta é feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Arcada. Nela é possivel marcar as patologias existentes em cada dente

<br /><br />
<b>Anamnese</b>
<br />
A consulta é feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Anamnese. Nela é possivel realizar a anamnese do paciente

<br /><br />
<b>Agendamentos</b>
<br />
A consulta é feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Agendamentos. Aonde é possivel visualizar as ultimas 5 consultas do paciente

<br /><br />
<b>Pagamentos</b>
<br />
A consulta é feita selecionando um paciente do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Pagamentos. Aonde é possivel visualizar o histórico de pagamentos dos pacientes

<br /><br />
<b>Mensagem</b>
<br />
É enviada através do menu Pacientes -> Listar/Excluir/Editar Pacientes -> Anamnese.

</p>

<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="agendamentos" class="cabecalho">Agendamentos</a>
<p class="caixa">
<b>Novo Agendamento</b>
<br />
Atraves do Menu Agendamentos -> Novo Agendamento, é possivel selecionar a data e horario para uma nova consulta, ou simplesmente clicando no calendário existente em agendamentos.

<br /><br />
<b>Consultar Agendamentos</b>
<br />
A consulta é feita através do menu Agendamentos -> Consultar Agendamentos , aonde é possivel visuzliar os agendamentos do mes atual e dos seguintes meses.


</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="medicamentos" class="cabecalho">Medicamentos</a>
<p class="caixa">

<b>Novo Medicamento (DEF)</b>
<br />
O cadastramento de novos medicamentos é feito apartir do Menu Medicamentos -> Inserir Novo Remério (DEF), preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edição / Consulta de Medicamentos</b>
<br />
A consulta é feita através do menu Medicamentos -> Listar/Excluir/Editar Medicamentos -> Selecionando o medicamento desejado obetrá maiores informações sobre o mesmo
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
O cadastramento de novo material é feito apartir do Menu Material -> Inserir Novo Material (Estoque), preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edição / Consulta de Estoque</b>
<br />
A consulta é feita através do menu Estoque -> Consultar Estoque -> Selecionando o material desejado obetrá poderá edita-lo e acrescentar ou diminuir o material em estoque.

</p>

<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="convenios" class="cabecalho">Convênios</a>
<p class="caixa">

<b>Novo Convênio</b>
<br />
O cadastramento de novos convênios é feito apartir do Menu Convenios e Proteticos -> Inserir Novo Convênio, preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edição / Consulta de Convênios</b>
<br />
A consulta é feita através do menu Convenios e Proteticos -> Listar\Excluir\Editar Convenios -> Selecionando o convenio desejado para edita-lo e visualizar seus detalhes.

</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="proteticos" class="cabecalho">Protéticos</a>
<p class="caixa">

<b>Novo Protético</b>
<br />
O cadastramento de novos protéticos é feito apartir do Menu Convenios e Proteticos -> Inserir Novo Protetico, preenchendo corretamente com os dados solicitados.

<br /><br />
<b>Edição / Consulta de Protéticos</b>
<br />
A consulta é feita através do menu Convenios e Proteticos -> Listar\Excluir\Editar Proteticos -> Selecionando o protetico desejado para edita-lo e visualizar seus detalhes.

</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="pagamentos" class="cabecalho">Pagamentos</a>
<p class="caixa">
<b>Pagamentos</b>
<br />
Para inserir novos pagamentos é necessario ir ao Menu Pagamentos -> Inserir Novo Pagamento, preenchendo corretamente com os dados solicitados

<br /><br />
<b>Edição / Consulta de Pagamentos</b>
<br />
A consulta é feita através do menu Pagamentos -> Historico de Pagamentos -> Selecionando o paciente desejado para visualizar seus detalhes
</p>
<p class="direita">
<a href="#">Voltar</a>
</p>

<br /><Br />

<a name="relatorios" class="cabecalho">Relatórios</a>
<p class="caixa">

<b>Estatísticas</b>
<br />
Para consultar as estatisticas do programa, acesse Menu Relatórios -> Estatisticas, são divesos tipos de relatórios existentes.

<br /><br />
<b>Aniversariantes (Mala Direta)</b>
<br />
Para consultar e enviar o email de aniversárisntes do mês acesse no Menu Relatorios -> Aniversariantes do mes (mala direta)

<br /><br />
<b>Emitir Receituário</b>
<br />
Para emitir receituários acesse o Menu Relatorios -> Emitir Receituario e selecione o paciente desejado. Preencha os dados opcionais e imprima o receituario.

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

