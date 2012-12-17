<?

/********************************/
//	E-Odonto
//	Sistema de Gerenciamento de Clinicas Odontologidas
//	E-Mail: contato@e-odondo.odo.br
//	www.e-odonto.odo.br
//  Autores: Alexandre Rocha
/*******************************/


// Configuracoes do BD
$bd_host	= 'localhost';			//Host
$bd_user  	= 'root';			//Usuсrio do Banco de Dados
$bd_senha 	= '';			//Senha do Banco de Dados
$bd			= 'eodonto';		//Banco de Dados

// Define uma conexуo.
$conexao = mysql_connect($bd_host, $bd_user, $bd_senha) or die ("Nao foi possivel se conectar ao banco de dados!");

// Seleciona o Banco de Dados
$bd = mysql_select_db($bd,$conexao) or die ("Nao foi possivel localizar a base de dados!"); 


//Consulta
//$consulta = @ mysql_query("SELECT * FROM tabela",$conexao);


//Configuraчoes de Email
/*******************************/

// Email para mensagens do sistema
$email_sistema= "noreply@e-odonto.odo.br";
//Email para onde irao as mensagens
$email_destino	= "contato@e-odonto.odo.br";
//Mensagem de Erro
$msg_erro		= "Atenчуo!! Os campos com (*) devem ser preenchidos";
?>