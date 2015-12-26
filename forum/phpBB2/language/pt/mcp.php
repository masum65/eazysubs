<?php
/** 
* 
* mcp.php [Português]
* 
* @package language
* @version $Id: mcp.php
* @copyright (c) 2009 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* @Versão do phpBB: 3.0.8, Novembro/2010
* @Traduzido por: http://phpbbportugal.com - segundo as normas do Acordo ortográfico
*/  

/** 
* DO NOT CHANGE 
*/ 
if (!defined('IN_PHPBB'))
{
   exit;
}

if (empty($lang) || !is_array($lang)) 
{ 
$lang = array(); 
} 

// DEVELOPERS PLEASE NOTE 
// 
// All language files should use UTF-8 as their encoding and the files must not contain a BOM. 
// 
// Placeholders can now contain order information, e.g. instead of 
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows 
// translators to re-order the output of data while ensuring it remains corret 
// 
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine 
// equally where a string contains only two placeholders which are used to wrap text 
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine 

$lang = array_merge($lang, array(
	'ACTION'							=> 'Ação',
	'ACTION_NOTE'						=> 'Ação/Nota',
	'ADD_FEEDBACK'						=> 'Adicionar relatório',
	'ADD_FEEDBACK_EXPLAIN'				=> 'Utilize o campo abaixo para escrever o relatório.<br />Não é permitida a utlilização de HTML, BBCode, etc.',
	'ADD_WARNING'						=> 'Adicionar aviso',
	'ADD_WARNING_EXPLAIN'				=> 'Para enviar um aviso para este Utilizador por favor preencha os seguintes campos. Use apenas texto; HTML, BBCode, etc. não são permitidos.',
	'ALL_ENTRIES'						=> 'Todas as entradas',
	'ALL_NOTES_DELETED'					=> 'Todas as notas do Utilizador foram apagadas com sucesso.',
	'ALL_REPORTS'						=> 'Todas as denúncias.',
	'ALREADY_REPORTED'					=> 'Esta Mensagem já foi denunciada.',

	'ALREADY_REPORTED_PM'				=> 'Esta mensagem privada já foi denunciada.',

	'ALREADY_WARNED'					=> 'Um aviso já foi enviado para esta Mensagem.',
	'APPROVE'							=> 'Aprovar',
	'APPROVE_POST'						=> 'Aprovar Mensagem',
	'APPROVE_POST_CONFIRM'				=> 'Deseja aprovar esta Mensagem?',
	'APPROVE_POSTS'						=> 'Aprovar Mensagens',
	'APPROVE_POSTS_CONFIRM'				=> 'Deseja aprovar as Mensagens selecionadas?',

	'CANNOT_MOVE_SAME_FORUM'			=> 'O Tópico já se encontra no Fórum para onde pretende movê-lo.',
	'CANNOT_WARN_ANONYMOUS'				=> 'Não pode avisar Utilizadores não registados.',
	'CANNOT_WARN_SELF'					=> 'Não pode auto advertir-se.',
	'CAN_LEAVE_BLANK'					=> 'Pode ser deixado em branco.',
	'CHANGE_POSTER'						=> 'Alterar criador da Mensagem',

	'CLOSE_PM_REPORT'					=> 'Fechar denúncia de MP',
	'CLOSE_PM_REPORT_CONFIRM'			=> 'Tem a certeza que deseja fechar a denúncia da MP?',
	'CLOSE_PM_REPORTS'					=> 'Fechar denúncias de MPs',
	'CLOSE_PM_REPORTS_CONFIRM'			=> 'Tem a certeza que deseja fechar as denúncias das MPs?',

	'CLOSE_REPORT'						=> 'Fechar a denúncia',
	'CLOSE_REPORT_CONFIRM'				=> 'Tem a certeza que deseja fechar a denúncia selecionada?',
	'CLOSE_REPORTS'						=> 'Fechar denúncias',
	'CLOSE_REPORTS_CONFIRM'				=> 'Tem a certeza que deseja fechar as denúncis selecionadas?',

	'DELETE_PM_REPORT'					=> 'Apagar denúncia de MP',
	'DELETE_PM_REPORT_CONFIRM'			=> 'Tem a certeza que deseja apagar a denúncia da MP?',
	'DELETE_PM_REPORTS'					=> 'Apagar denúncias de MP',
	'DELETE_PM_REPORTS_CONFIRM'			=> 'Tem a certeza que deseja apagar as denúncias das MPs?',

	'DELETE_POSTS'						=> 'Apagar Mensagens',
	'DELETE_POSTS_CONFIRM'				=> 'Tem a certeza de que deseja apagar estas Mensagens?',
	'DELETE_POST_CONFIRM'				=> 'Tem a certeza de que deseja apagar esta Mensagem?',
	'DELETE_REPORT'						=> 'Apagar denúncia',
	'DELETE_REPORT_CONFIRM'				=> 'Tem a certeza de que deseja apagar a denúncia selecionada?',
	'DELETE_REPORTS'					=> 'Apagar denúncias',
	'DELETE_REPORTS_CONFIRM'			=> 'Tem a certeza de que quer apagar as denúncias selecionadas?',
	'DELETE_SHADOW_TOPIC'				=> 'Apagar Tópico fantasma',
	'DELETE_TOPICS'						=> 'Apagar Tópicos selecionados',
	'DELETE_TOPICS_CONFIRM'				=> 'Tem a certeza de que deseja apagar esses Tópicos?',
	'DELETE_TOPIC_CONFIRM'				=> 'Tem a certeza de que deseja apagar esse Tópico?',
	'DISAPPROVE'						=> 'Cancelar',
	'DISAPPROVE_REASON'					=> 'Motivo do cancelamento',
	'DISAPPROVE_POST'					=> 'Cancelar Mensagem',
	'DISAPPROVE_POST_CONFIRM'			=> 'Tem a certeza de que deseja cancelar esta Mensagem?',
	'DISAPPROVE_POSTS'					=> 'Cancelar Mensagens',
	'DISAPPROVE_POSTS_CONFIRM'			=> 'Tem a certeza de que deseja cancelar as Mensagens selecionadas?',
	'DISPLAY_LOG'						=> 'Mostrar resultados anteriores',
	'DISPLAY_OPTIONS'					=> 'Opções de exibição',

	'EMPTY_REPORT'						=> 'Tem que introduzir uma descrição quando utiliza este motivo.',
	'EMPTY_TOPICS_REMOVED_WARNING'		=> 'Um ou mais Tópicos foram excludos da Base de Dados porque eram ou tornaram-se vazios.',

	'FEEDBACK'							=> 'Relatório',
	'FORK'								=> 'Copiar',
	'FORK_TOPIC'						=> 'Copiar Tópico',
	'FORK_TOPIC_CONFIRM'				=> 'Tem a certeza de que quer copiar este Tópico?',
	'FORK_TOPICS'						=> 'Copiar Tópicos selecionados',
	'FORK_TOPICS_CONFIRM'				=> 'Tem a certeza de que quer copiar os Tópicos selecionados?',
	'FORUM_DESC'						=> 'Descrição',
	'FORUM_NAME'						=> 'Nome do Fórum',
	'FORUM_NOT_EXIST'					=> 'O Fórum selecionado não existe.',
	'FORUM_NOT_POSTABLE'				=> 'Não pode enviar Mensagens nesse Fórum.',
	'FORUM_STATUS'						=> 'Estado do Fórum',
	'FORUM_STYLE'						=> 'Estilo do Fórum',

	'GLOBAL_ANNOUNCEMENT'				=> 'Anúncio global',

	'IP_INFO'							=> 'Informação do Endereço IP',
	'IPS_POSTED_FROM'					=> 'Endereço de IP utilizado pelo Utilizador ao enviar esta Mensagem',

	'LATEST_LOGS'						=> 'Últimas 5 ações registradas',
	'LATEST_REPORTED'					=> 'Últimas 5 denúncias',

	'LATEST_REPORTED_PMS'				=> 'Últimas 5 Mensagens Privadas denunciadas',

	'LATEST_UNAPPROVED'					=> 'Últimos 5 Tópicos a aguardar aprovação',
	'LATEST_WARNING_TIME'				=> 'Último aviso emitido',
	'LATEST_WARNINGS'					=> 'Últimos 5 avisos',
	'LEAVE_SHADOW'						=> 'Deixar Tópico Fantasma no lugar',
	'LIST_REPORT'						=> '1 denúncia',
	'LIST_REPORTS'						=> '%d denúncias',
	'LOCK'								=> 'Bloquear',
	'LOCK_POST_POST'					=> 'Bloquear Mensagem',
	'LOCK_POST_POST_CONFIRM'			=> 'Tem a certeza de que quer bloquear esta Mensagem?(Não poderá editá-la futuramente)',
	'LOCK_POST_POSTS'					=> 'Bloquear Mensagens selecionadas',
	'LOCK_POST_POSTS_CONFIRM'			=> 'Tem a certeza de que deseja bloquear as Mensagens selecionadas?(Não poderá editá-las futuramente)',
	'LOCK_TOPIC_CONFIRM'				=> 'Tem a certeza de que deseja bloquear este Tópico?',
	'LOCK_TOPICS'						=> 'Bloquear Tópicos selecionados',
	'LOCK_TOPICS_CONFIRM'				=> 'Tem a certeza de que deseja bloquear todos os Tópicos selecionados?',
	'LOGS_CURRENT_TOPIC'				=> 'A exibir os registos de:',
	'LOGIN_EXPLAIN_MCP'					=> 'Para moderar este Fórum tem que entrar.',
	'LOGVIEW_VIEWTOPIC'					=> 'Mostrar Tópico',
	'LOGVIEW_VIEWLOGS'					=> 'Mostrar registo do Tópico',
	'LOGVIEW_VIEWFORUM'					=> 'Mostrar Fórum',
	'LOOKUP_ALL'						=> 'Mostrar todos os IPs',
	'LOOKUP_IP'							=> 'Procurar IP',

	'MARKED_NOTES_DELETED'				=> 'Todas as notas do Utilizador marcadas foram apagadas com sucesso.',

	'MCP_ADD'							=> 'Adicionar aviso',

	'MCP_BAN'							=> 'Expulsar',
	'MCP_BAN_EMAILS'					=> 'Expulsar Emails',
	'MCP_BAN_IPS'						=> 'Expulsar IPs',
	'MCP_BAN_USERNAMES'					=> 'Expulsar Utilizadores',

	'MCP_LOGS'							=> 'Registos de Moderador',
	'MCP_LOGS_FRONT'					=> 'Painel Principal',
	'MCP_LOGS_FORUM_VIEW'				=> 'Registos de Fórum',
	'MCP_LOGS_TOPIC_VIEW'				=> 'Registos de Tópico',

	'MCP_MAIN'							=> 'Principal',
	'MCP_MAIN_FORUM_VIEW'				=> 'Mostrar Fóruns',
	'MCP_MAIN_FRONT'					=> 'Painel Principal',
	'MCP_MAIN_POST_DETAILS'				=> 'Detalhes dos Tópicos',
	'MCP_MAIN_TOPIC_VIEW'				=> 'Mostrar Tópicos',
	'MCP_MAKE_ANNOUNCEMENT'				=> 'Deixar como anúncio',
	'MCP_MAKE_ANNOUNCEMENT_CONFIRM'		=> 'Tem a certeza de que deseja alterar este Tópico para anúncio?',
	'MCP_MAKE_ANNOUNCEMENTS'			=> 'Criar anúncios',
	'MCP_MAKE_ANNOUNCEMENTS_CONFIRM'	=> 'Tem a certeza de que deseja alterar estes Tópicos para anúncios?',
	'MCP_MAKE_GLOBAL'					=> 'Deixar como anúncio global',
	'MCP_MAKE_GLOBAL_CONFIRM'			=> 'Tem a certeza de que deseja alterar este Tópico para anúncio global?',
	'MCP_MAKE_GLOBALS'					=> 'Deixar como anúncios globais',
	'MCP_MAKE_GLOBALS_CONFIRM'			=> 'Tem a certeza de que deseja alterar estes Tópicos para anúncios globais?',
	'MCP_MAKE_STICKY'					=> 'Deixar Tópico fixo',
	'MCP_MAKE_STICKY_CONFIRM'			=> 'Tem a certeza de que deseja deixar este Tópico fixo?',
	'MCP_MAKE_STICKIES'					=> 'Deixar Tópicos Fixos',
	'MCP_MAKE_STICKIES_CONFIRM'			=> 'Tem a certeza de que deseja deixar estes Tópicos fixos?',
	'MCP_MAKE_NORMAL'					=> 'Deixar como Tópico normal',
	'MCP_MAKE_NORMAL_CONFIRM'			=> 'Tem a certeza de que deseja deixar este Tópico como Tópico normal?',
	'MCP_MAKE_NORMALS'					=> 'Deixar como Tópicos normais',
	'MCP_MAKE_NORMALS_CONFIRM'			=> 'Tem a certeza de que deseja deixar estes Tópicos como Tópicos normais?',

	'MCP_NOTES'							=> 'Cadastro do Utilizador',
	'MCP_NOTES_FRONT'					=> 'Painel Principal',
	'MCP_NOTES_USER'					=> 'Detalhes do Utilizador',

	'MCP_POST_REPORTS'					=> 'Denúncias emitidas apartir desta Mensagem',

	'MCP_PM_REPORTS'					=> 'MPs denunciadas',
	'MCP_PM_REPORT_DETAILS'				=> 'Detalhes da denúncia da MP',
	'MCP_PM_REPORTS_CLOSED'				=> 'Denúncias de MPs fechadas',
	'MCP_PM_REPORTS_CLOSED_EXPLAIN'		=> 'Esta é uma lista de todas as denúncias de mensagens privadas que já foram resolvidas.',
	'MCP_PM_REPORTS_OPEN'				=> 'Denúncias de MPs abertas',
	'MCP_PM_REPORTS_OPEN_EXPLAIN'		=> 'Esta é uma lista de todas as Mensagens Privadas denunciadas que ainda estão em análise.',

	'MCP_REPORTS'						=> 'Mensagens denunciadas',

	'MCP_REPORT_DETAILS'				=> 'Relatar detalhes',
	'MCP_REPORTS_CLOSED'				=> 'Denúncias de Mensagens fechadas',
	'MCP_REPORTS_CLOSED_EXPLAIN'		=> 'Lista de Mensagens denúnciadas que já foram analisadas.',
	'MCP_REPORTS_OPEN'					=> 'Denúncias de Mensagens abertas',
	'MCP_REPORTS_OPEN_EXPLAIN'			=> 'Lista de Mensagens denúnciadas que aguardam análise.',

	'MCP_QUEUE'							=> 'Moderação',
	'MCP_QUEUE_APPROVE_DETAILS'			=> 'Aprovar detalhes',
	'MCP_QUEUE_UNAPPROVED_POSTS'		=> 'Mensagens para aprovação',
	'MCP_QUEUE_UNAPPROVED_POSTS_EXPLAIN'	=> 'Lista de Mensagens que aguardam aprovação para se tornarem visíveis aos Utilizadores.',
	'MCP_QUEUE_UNAPPROVED_TOPICS'		=> 'Tópicos para aprovação',
	'MCP_QUEUE_UNAPPROVED_TOPICS_EXPLAIN'	=> 'Lista de Tópicos que aguardam aprovação para se tornarem visíveis aos Utilizadores.',

	'MCP_VIEW_USER'						=> 'Ver avisos dum Utilizador específico',

	'MCP_WARN'							=> 'Avisos',
	'MCP_WARN_FRONT'					=> 'Painel Principal',
	'MCP_WARN_LIST'						=> 'Lista de avisos',
	'MCP_WARN_POST'						=> 'Avisar uma Mensagem',
	'MCP_WARN_USER'						=> 'Avisar Utilizador',

	'MERGE_POSTS'						=> 'Fusão de Mensagens',
	'MERGE_POSTS_CONFIRM'				=> 'Tem a certeza de que deseja fundir as Mensagens selecionadas?',
	'MERGE_TOPIC_EXPLAIN'				=> 'Use este formulário para fundir uma Mensagem com um Tópico. As Mensagens não serão requisitadas novamente, serão exibidas como se os Utilizadores tiverem enviado as Mensagens num novo Tópico.<br />Por favor, digite a ID do Tópico que será fundido ou então clique em <strong>Escolher Tópico</strong> e procure o Tópico.',
	'MERGE_TOPIC_ID'					=> 'ID do Tópico de destino',
	'MERGE_TOPICS'						=> 'Fundir Tópicos',
	'MERGE_TOPICS_CONFIRM'				=> 'Tem a certeza que deseja fundir os Tópicos selecionados?',
	'MODERATE_FORUM'					=> 'Fórum moderado',
	'MODERATE_TOPIC'					=> 'Tópico moderado',
	'MODERATE_POST'						=> 'Mensagem moderada',
	'MOD_OPTIONS'						=> 'Opções do Moderador',
	'MORE_INFO'							=> 'Informações adicionais',
	'MOST_WARNINGS'						=> 'Utilizadores mais avisados',
	'MOVE_TOPIC_CONFIRM'				=> 'Tem a certeza que deseja mover este Tópico para um novo Fórum?',
	'MOVE_TOPICS'						=> 'Mover Tópicos selecionados',
	'MOVE_TOPICS_CONFIRM'				=> 'Tem a certeza que deseja mover estes Tópicos selecionados para dentro de um novo Fórum?',

	'NOTIFY_POSTER_APPROVAL'			=> 'Notificar o autor da Mensagem sobre a aprovação?',
	'NOTIFY_POSTER_DISAPPROVAL'			=> 'Notificar o autor da Mensagem sobre a desaprovação?',
	'NOTIFY_USER_WARN'					=> 'Notificar o Utilizador do aviso?',
	'NOT_MODERATOR'						=> 'Não é um Moderador deste Fórum.',
	'NO_DESTINATION_FORUM'				=> 'Por Favor, Selecione um Fórum para destino.',
	'NO_DESTINATION_FORUM_FOUND'		=> 'Não há Fórum de destino disponível.',
	'NO_ENTRIES'						=> 'Não há LOGs para este período.',
	'NO_FEEDBACK'						=> 'Não existe denúncia deste Utilizador.',
	'NO_FINAL_TOPIC_SELECTED'			=> 'Deve selecionar um Tópico de destino para fundir as Mensagens.',
	'NO_MATCHES_FOUND'					=> 'Nenhum resultado encontrado.',
	'NO_POST'							=> 'Tem que selecionar a Mensagem cujo conteúdo quer avisar o Utilizador.',
	'NO_POST_REPORT'					=> 'Esta Mensagem não foi relatada.',
	'NO_POST_SELECTED'					=> 'Deve selecionar pelo menos uma Mensagem para realizar esta ação.',
	'NO_REASON_DISAPPROVAL'				=> 'Por favor, justifique a desaprovação.',
	'NO_REPORT'							=> 'Nenhuma denúncia encontrada',
	'NO_REPORTS'						=> 'Sem denúncias',
	'NO_REPORT_SELECTED'				=> 'Deve selecionar pelo menos uma denúncia para realizar esta ação.',
	'NO_TOPIC_ICON'						=> 'Nenhum',
	'NO_TOPIC_SELECTED'					=> 'Deve selecionar ao menos um Tópico para realizar esta ação.',
	'NO_TOPICS_QUEUE'					=> 'Sem Tópicos',

	'ONLY_TOPIC'						=> 'Somente o Tópico "%s"',
	'OTHER_USERS'						=> 'Utilizadores que enviaram Mensagens deste IP',

	'PM_REPORT_CLOSED_SUCCESS'			=> 'A denúncia da MP selecionada foi fechada com sucesso.',
	'PM_REPORT_DELETED_SUCCESS'			=> 'A denúncia da MP selecionada foi apagada com sucesso.',
	'PM_REPORTED_SUCCESS'				=> 'Esta mensagem privada foi denunciada com sucesso.',
	'PM_REPORT_TOTAL'					=> 'No total há <strong>1</strong> MP denunciada para análise.',
	'PM_REPORTS_CLOSED_SUCCESS'			=> 'Os relatórios das MP selecionados foram encerrados com sucesso.',
	'PM_REPORTS_DELETED_SUCCESS'			=> 'Os relatórios das MP selecionados foram apagados com sucesso.',
	'PM_REPORTS_TOTAL'					=> 'No total há <strong>%d</strong> mensagens privadas denunciadas para análise.',
	'PM_REPORTS_ZERO_TOTAL'				=> 'Não há mensagens privadas denunciadas para análise.',
	'PM_REPORT_DETAILS'					=> 'Detalhes da denúncia da mensagem privada.',

	'POSTER'							=> 'Autor',
	'POSTS_APPROVED_SUCCESS'			=> 'As Mensagens selecionadas foram aprovadas com sucesso.',
	'POSTS_DELETED_SUCCESS'				=> 'As Mensagens selecionadas foram apagada da Base de Dados com sucesso.',
	'POSTS_DISAPPROVED_SUCCESS'			=> 'As Mensagens selecionadas foram reprovadas com sucesso.',
	'POSTS_LOCKED_SUCCESS'				=> 'As Mensagens selecionadas foram bloqueadas com sucesso.',
	'POSTS_MERGED_SUCCESS'				=> 'As Mensagens selecionadas foram fundidas com sucesso.',
	'POSTS_UNLOCKED_SUCCESS'			=> 'As Mensagens selecionadas foram desbloqueadas com sucesso.',
	'POSTS_PER_PAGE'					=> 'Mensagens por Página',
	'POSTS_PER_PAGE_EXPLAIN'			=> '(0 para ver todas as Mensagens)',
	'POST_APPROVED_SUCCESS'				=> 'A mensagem selecionada foi aprovada com sucesso.',
	'POST_DELETED_SUCCESS'				=> 'A mensagem selecionada foi apagada da base de dados com sucesso.',
	'POST_DISAPPROVED_SUCCESS'			=> 'A mensagem selecionada foi reprovada com sucesso.',
	'POST_LOCKED_SUCCESS'				=> 'A mensagem selecionada foi bloqueada com sucesso.',
	'POST_NOT_EXIST'					=> 'A mensagem que solicitou não existe.',
	'POST_REPORTED_SUCCESS'				=> 'A mensagem foi relatada com sucesso.',
	'POST_UNLOCKED_SUCCESS'				=> 'A mensagem foi desbloqueada com sucesso.',

	'READ_USERNOTES'					=> 'Notas do Utilizador',
	'READ_WARNINGS'						=> 'Avisos do Utilizador',
	'REPORTER'							=> 'Denunciante',
	'REPORTED'							=> 'Denunciado',
	'REPORTED_BY'						=> 'Denunciado por',
	'REPORTED_ON_DATE'					=> 'em',
	'REPORTS_CLOSED_SUCCESS'				=> 'As denuncias selecionadas foram bloqueadas com sucesso.',
	'REPORTS_DELETED_SUCCESS'				=> 'As denuncias selecionadas foram apagadas com sucesso.',
	'REPORTS_TOTAL'						=> 'Há um total de <strong>%d</strong> denúncias para análise.',
	'REPORTS_ZERO_TOTAL'				=> 'Não há denúncias para análise.',
	'REPORT_CLOSED'						=> 'Esta denúncia está temporariamente bloqueada.',
	'REPORT_CLOSED_SUCCESS'				=> 'A denúncia selecionada foi bloqueada com sucesso!.',
	'REPORT_DELETED_SUCCESS'				=> 'A denúncia selecionada foi apagada com sucesso!.',
	'REPORT_DETAILS'					=> 'Detalhes da denúncia',
	'REPORT_MESSAGE'					=> 'Denunciar esta Mensagem',

	'REPORT_MESSAGE_EXPLAIN'			=> 'Use este formulário para denunciar a mensagem privada selecionada. As denúncias devem apenas ser usadas se a mensagem privada viola as regras do Fórum. <strong> Denunciar uma mensagem privada tornará o seu conteúdo visível para todos os Moderadores.</strong>',

	'REPORT_NOTIFY'						=> 'Notifique-me',
	'REPORT_NOTIFY_EXPLAIN'				=> 'Informar quando sua denúncia for tratada.',
	'REPORT_POST_EXPLAIN'				=> 'Use este formulário para denunciar as Mensagens selecionadas aos administradores e moderadores do Fórum. A mensagem deve ser relatada geralmente quando a mesma quebra as regras do Fórum.',
	'REPORT_REASON'						=> 'Razão da denuncia',
	'REPORT_TIME'						=> 'Tempo do denuncia',
	'REPORT_TOTAL'						=> 'No total, há <strong>1</strong> denuncias para análise.',
	'RESYNC'							=> 'Resincronizar',
	'RETURN_MESSAGE'					=> '%sVoltar à Mensagem%s',
	'RETURN_NEW_FORUM'					=> '%sVoltar ao novo Fórum%s',
	'RETURN_NEW_TOPIC'					=> '%sVoltar ao novo Tópico%s',

	'RETURN_PM'							=> '%sVoltar à mensagem privada%s',

	'RETURN_POST'						=> '%sVoltar à Mensagem%s',
	'RETURN_QUEUE'						=> '%sVoltar à lista%s',
	'RETURN_REPORTS'					=> '%sVoltar à denúncia%s',
	'RETURN_TOPIC_SIMPLE'				=> '%sVoltar ao Tópico%s',

	'SEARCH_POSTS_BY_USER'				=> 'Procurar Mensagens por',
	'SELECT_ACTION'						=> 'Selecione a ação desejada',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENT'	=> 'Selecione o Fórum que deseja exibir este anúncio global.',
	'SELECT_FORUM_GLOBAL_ANNOUNCEMENTS'	=> 'Um ou mais dos Tópicos selecionados são anúncios globais. Selecione o Fórum que deseja exibir estes anúncios globais.',
	'SELECT_MERGE'						=> 'Selecione para fundir',
	'SELECT_TOPICS_FROM'				=> 'Selecione os Tópicos de',
	'SELECT_TOPIC'						=> 'Escolher Tópico',
	'SELECT_USER'						=> 'Utilizador selecionado',
	'SORT_ACTION'						=> 'Ação do registo',
	'SORT_DATE'							=> 'Data',
	'SORT_IP'							=> 'Endereço de IP',
	'SORT_WARNINGS'						=> 'Avisos',
	'SPLIT_AFTER'						=> 'Dividir a Mensagem selecionada',
	'SPLIT_FORUM'						=> 'Fórum do novo Tópico',
	'SPLIT_POSTS'						=> 'Dividir Mensagens selecionadas',
	'SPLIT_SUBJECT'						=> 'Título do novo Tópico',
	'SPLIT_TOPIC_ALL'					=> 'Dividir o Tópico com as Mensagens selecionadas',
	'SPLIT_TOPIC_ALL_CONFIRM'			=> 'Tem a certeza que deseja dividir este Tópico?',
	'SPLIT_TOPIC_BEYOND'				=> 'Dividir o Tópico em Mensagens selecionadas',
	'SPLIT_TOPIC_BEYOND_CONFIRM'		=> 'Tem a certeza que deseja cortar este Tópico na Mensagem selecionada?',
	'SPLIT_TOPIC_EXPLAIN'				=> 'Usando este formulário pode dividir um Tópico em dois, selecionando as Mensagens do novo Tópico.',
	'THIS_PM_IP'						=> 'IP para esta Mensagem Privada',
	'THIS_POST_IP'						=> 'IP para esta Mensagem',
	'TOPICS_APPROVED_SUCCESS'				=> 'Os Tópicos selecionados foram aprovados com sucesso.',
	'TOPICS_DELETED_SUCCESS'				=> 'Os Tópicos selecionados foram removidos da base de dados com sucesso.',
	'TOPICS_DISAPPROVED_SUCCESS'			=> 'Os Tópicos selecionados foram reprovados com sucesso.',
	'TOPICS_FORKED_SUCCESS'				=> 'Os Tópicos selecionados foram copiados com sucesso.',
	'TOPICS_LOCKED_SUCCESS'				=> 'Os Tópicos selecionados foram bloqueados com sucesso.',
	'TOPICS_MOVED_SUCCESS'				=> 'Os Tópicos selecionados foram movidos com sucesso.',
	'TOPICS_RESYNC_SUCCESS'				=> 'Os Tópicos selecionados foram resincronizados com sucesso.',
	'TOPICS_TYPE_CHANGED'				=> 'Típos dos Tópicos alterados com sucesso.',
	'TOPICS_UNLOCKED_SUCCESS'				=> 'Os Tópicos selecionados foram desbloquados com sucesso.',
	'TOPIC_APPROVED_SUCCESS'				=> 'O Tópico selecionado foi aprovado com sucesso.',
	'TOPIC_DELETED_SUCCESS'				=> 'O Tópico selecionado foi removido da base de dados com sucesso.',
	'TOPIC_DISAPPROVED_SUCCESS'			=> 'O Tópico selecionado foi desaprovado com sucesso.',
	'TOPIC_FORKED_SUCCESS'				=> 'O Tópico selecionado foi copiado com sucesso.',
	'TOPIC_LOCKED_SUCCESS'				=> 'O Tópico selecionado foi bloqueado com sucesso.',
	'TOPIC_MOVED_SUCCESS'				=> 'O Tópico selecionado foi movido com sucesso.',
	'TOPIC_NOT_EXIST'					=> 'O Tópico selecionado não existe.',
	'TOPIC_RESYNC_SUCCESS'				=> 'O Tópico selecionado foi resincronizado com sucesso.',
	'TOPIC_SPLIT_SUCCESS'				=> 'O Tópico selecionado foi dividido com sucesso.',
	'TOPIC_TIME'						=> 'Tempo do Tópico',
	'TOPIC_TYPE_CHANGED'				=> 'O tipo do Tópico foi modificado com sucesso.',
	'TOPIC_UNLOCKED_SUCCESS'			=> 'O Tópico selecionado foi desbloqueado com sucesso.',
	'TOTAL_WARNINGS'					=> 'Total de advertências',

	'UNAPPROVED_POSTS_TOTAL'			=> 'Há um total de <strong>%d</strong> Mensagens à espera de aprovação.',
	'UNAPPROVED_POSTS_ZERO_TOTAL'		=> 'Sem Mensagens.',
	'UNAPPROVED_POST_TOTAL'				=> 'Há um total de <strong>1</strong> Mensagem à espera de aprovação.',
	'UNLOCK'							=> 'Desbloquear',
	'UNLOCK_POST'						=> 'Desbloquear Mensagem',
	'UNLOCK_POST_EXPLAIN'				=> 'Permitir edição na Mensagem.',
	'UNLOCK_POST_POST'					=> 'Desbloquear Mensagem',
	'UNLOCK_POST_POST_CONFIRM'			=> 'Tem a certeza que deseja permitir a edição desta Mensagem?',
	'UNLOCK_POST_POSTS'					=> 'Desbloquear Mensagens selecionadas',
	'UNLOCK_POST_POSTS_CONFIRM'			=> 'Tem a certeza que deseja permitir a edição destas Mensagens?',
	'UNLOCK_TOPIC'						=> 'Desbloquear Tópico',
	'UNLOCK_TOPIC_CONFIRM'				=> 'Tem a certeza que deseja desbloquear este Tópico?',
	'UNLOCK_TOPICS'						=> 'Desbloquear Tópicos selecionados',
	'UNLOCK_TOPICS_CONFIRM'				=> 'Tem a certeza que deseja desbloquear os Tópicos selecionados?',
	'USER_CANNOT_POST'					=> 'Não pode enviar Mensagens neste Fórum.',
	'USER_CANNOT_REPORT'				=> 'Não pode denúnciar Mensagens neste Fórum.',
	'USER_FEEDBACK_ADDED'				=> 'Relatório do Utilizador adicionado com sucesso.',
	'USER_WARNING_ADDED'				=> 'O Utilizador foi avisado com sucesso.',

	'VIEW_DETAILS'						=> 'Ver detalhes',

	'VIEW_PM'							=> 'Ver mensagem privada',

	'VIEW_POST'							=> 'Ver Mensagem',

	'WARNED_USERS'						=> 'Utilizadores avisados',
	'WARNED_USERS_EXPLAIN'				=> 'Lista de Utilizadores com avisos ativos.',
	'WARNING_PM_BODY'					=> 'O seguinte é um aviso emitido para si por um Administrador ou Moderador do Fórum.[quote]%s[quote]',
	'WARNING_PM_SUBJECT'				=> 'Avisos emitidos',
	'WARNING_POST_DEFAULT'				=> 'Este é um aviso a respeito da(s) sua(s) seguinte(s) Mensagens: %s.',
	'WARNINGS_ZERO_TOTAL'				=> 'Não há avisos.',

	'YOU_SELECTED_TOPIC'				=> 'Selecionou o Tópico de número %d: %s.',

	'report_reasons'					=> array(
		'TITLE'							=> array(
			'WAREZ'						=> 'Pirataria',
			'SPAM'						=> 'Spam',
			'OFF_TOPIC'					=> 'Off-topic',
			'OTHER'						=> 'Outro',
		),
		'DESCRIPTION'					=> array(
			'WAREZ'						=> 'A Mensagem contém endereços ilegais ou de software pirateado',
			'SPAM'						=> 'A Mensagem denunciada tem apenas o propósito de anunciar um sítio web ou um produto',
			'OFF_TOPIC'					=> 'A Mensagem denunciada é desnecessária, e não faz sentido',
			'OTHER'						=> 'A Mensagem denunciada não se encaixa em outra categoria, use o campo de descrição para especificar uma',
		),
	),
));

?>