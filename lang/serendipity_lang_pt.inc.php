<?php
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation (c) by Agner Olson <agner@agner.net>
# with an initial work of Ranulfo Netto <rcnetto@yahoo.com>
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'pt_BR.ISO-8859-1, pt_BR.ISO8859-1, pt_BR, portuguese brazilian, pt');
@define('DATE_FORMAT_ENTRY', '%A, %e de %B de %Y');
@define('DATE_FORMAT_SHORT', '%d/%m/%Y %H:%M');
@define('WYSIWYG_LANG', 'pt_pt');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');
// ISO 8601 compliant format for date conversion
@define('DATE_FORMAT_2', 'Y-m-d H:i');

/* ONE AND TWO WORD CONSTANTS */
@define('TYPE', 'Tipo');
@define('PREVIEW', 'Pré-visualização');
@define('DATE', 'Data');
@define('TIME', 'Time');
@define('APPEARANCE', 'Aparência');
@define('LOGIN', 'Login');
@define('LOGOUT', 'Logout');
@define('LOGGEDOUT', 'Logged out.');
@define('CREATE', 'Criar');
@define('BACK', 'Volta');
@define('FORWARD', 'Encaminha');
@define('ANONYMOUS', 'Anônimo');
@define('RECENT', 'Recente...');
@define('OLDER', 'Antigos...');
@define('DONE', 'Pronto');
@define('TITLE', 'Título');
@define('DESCRIPTION', 'Descrição');
@define('PLACEMENT', 'Localização');
@define('DELETE', 'Excluir');
@define('SAVE', 'Salvar');
@define('UP', 'Acima');
@define('DOWN', 'Abaixo');
@define('PREVIOUS', 'Anterior');
@define('NEXT', 'Próximo');
@define('ENTRIES', 'Artigos:');
@define('CATEGORIES', 'Categorias');
@define('NAME', 'Nome');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Página pessoal');
@define('COMMENT', 'Comentário');
@define('VIEW', 'Exibir');
@define('HIDE', 'Ocultar');
@define('WEEK', 'Semana');
@define('WEEKS', 'Semanas');
@define('MONTHS', 'Meses');
@define('DAYS', 'Dias');
@define('DEBUG', 'Debug');
@define('SUCCESS', 'Sucesso');
@define('COMMENTS', 'Comentários');
@define('ADD_COMMENT', 'Adicionar Comentários');
@define('NO_COMMENTS', 'Nenhum cmentários');
@define('POSTED_BY', 'Enviado por');
@define('ON', 'em');
@define('NO_CATEGORY', 'Nenhuma categoria');
@define('CATEGORY', 'Categoria:');
@define('EDIT', 'Editar');
@define('GO', 'Vai!');
@define('YES', 'Sim');
@define('NO', 'Não');
@define('NOT_REALLY', 'Não mesmo...');
@define('DUMP_IT', 'Suma com ele!');
@define('IN', 'no');
@define('AT', 'em');
@define('LEFT', 'esquerda');
@define('RIGHT', 'direita');
@define('CENTER', 'center');
@define('ARCHIVES', 'Arquivos');
@define('SUBSCRIBE', 'Subscribe');
@define('UNSUBSCRIBE', 'Unsubscribe');
@define('QUICKSEARCH', 'Pesquisa rápida');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Nenhum Trackbacks');
@define('PINGBACKS', 'Pingbacks');
@define('NO_PINGBACKS', 'No Pingbacks');
@define('WEBLOG', 'Weblog');
@define('SOURCE', 'Source');
@define('EXCERPT', 'Segmento');
@define('TRACKED', 'Tracked');
@define('USER', 'Usuário');
@define('USERNAME', 'Usuário');
@define('PASSWORD', 'Senha');
@define('HIDDEN', 'oculto');
@define('IMAGE', 'Imagem');
@define('VIDEO', 'Video');
@define('AUTHOR', 'Autor');
@define('ENTRY', 'Entry');
@define('BLOG', 'Blog');
@define('VERSION', 'versão');
@define('INSTALL', 'Instalar');
@define('REPLY', 'Responder');
@define('SUBSCRIPTIONS', 'Subscriptions');
@define('SUBSCRIBED', 'Subscribed');
@define('SUBSCRIBED_AT', 'Subscribed at:');
@define('ERROR', 'Erro');
@define('FRONTEND', 'Frontend');
@define('BACKEND', 'Backend');
@define('SUMMARY', 'Summary');
@define('MORE', 'More');
@define('FORCE', 'Forçar');
@define('UPLOAD', 'Upload');
@define('DOWNLOAD', 'Download');
@define('ADMIN', 'Administração');
@define('ADMIN_FRONTPAGE', 'Página Inicial');
@define('QUOTE', 'Citar');
@define('NONE', 'nenhum');
@define('GROUP', 'Grupo');
@define('AUTHORS', 'Authors');
@define('UPGRADE', 'Atualização');
@define('NAVIGATION', 'Navigation');
@define('MOVE', 'Move');
@define('MOVE_UP', 'Move up');
@define('MOVE_DOWN', 'Move down');
@define('ALL_AUTHORS', 'Todos autores');
@define('PREVIOUS_PAGE', 'página anterior');
@define('NEXT_PAGE', 'próxima página');
@define('FIRST_PAGE', 'First Page');
@define('LAST_PAGE', 'Last Page');
@define('ALL_CATEGORIES', 'Todas as categorias');
@define('LAST_UPDATED', 'Última atualização');
@define('IP_ADDRESS', 'Endereço IP');
@define('CHARSET', 'Codificação de Caracteres');
@define('REFERER', 'Referenciador');
@define('APPROVE', 'Aprovar');
@define('NOT_FOUND', 'Não encontrado');
@define('WRITABLE', 'Com permissão de escrita');
@define('NOT_WRITABLE', 'Sem permissão de escrita');
@define('WELCOME_BACK', 'Bem-vindo de volta,');
@define('USE_DEFAULT', 'Default');
@define('SORT_BY', 'Ordenar por');
@define('SORT_ORDER', 'Ordenação');
@define('SORT_ORDER_ASC', 'Ascendente');
@define('SORT_ORDER_DESC', 'Descendente');
@define('FILTERS', 'Filtros');
@define('RESET_FILTERS', 'Reset filters');
@define('TOGGLE_ALL', 'Alternar para expandir tudo');
@define('TOGGLE_OPTION', 'Opção para alternar');
@define('IN_REPLY_TO', 'Em reposta à');

/* WIDELY USED */
@define('FILTER_DIRECTORY', 'Diretório');
@define('BACK_TO_BLOG', 'De volta ao Weblog');
@define('HTML_NUGGET', 'Fragmento de HTML');
@define('TITLE_FOR_NUGGET', 'Título para o fragmento de HTML');
@define('COMMENT_ADDED', 'Seu comentário foi adicionado corretamente. ');
@define('ENTRIES_FOR', 'Artigos para %s');
@define('NO_ENTRIES_TO_PRINT', 'Nenhum artigo para imprimir');
@define('COMMENT_DELETE_CONFIRM', 'Tem certeza de que deseja excluir o comentário #%d, escrito por %s?');
@define('DELETE_SURE', 'Tem certeza que deseja excluir #%s definitivamente?');
@define('MEDIA_FULLSIZE', 'Tamanho total');
@define('SIDEBAR_PLUGIN', 'barra lateral de plugins');
@define('EVENT_PLUGIN', 'plugin de eventos');
@define('PLUGIN_ITEM_DISPLAY', 'Onde o item deve ser exibido?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Apenas artigo extendido');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Página de visão geral apenas');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Todas as vezes');
@define('DIRECTORY_WRITE_ERROR', 'Não foi possível escrever no diretório %s. Verifique as permissões.');
@define('FILE_WRITE_ERROR', 'Não foi possível editar o arquivo %s.');
@define('INCLUDE_ERROR', 'erro do serendipity: não foi possível incluir %s - abortando.');
@define('DO_MARKUP', 'Executar trasnformações de marcação');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formatação de data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formato da data atual do artigo, usando a mesma formatação da função strftime() do PHP. (Padrão: "%s")');
@define('APPLY_MARKUP_TO', 'Aplicar marcação para %s');
@define('XML_IMAGE_TO_DISPLAY', 'Botão XML');
@define('XML_IMAGE_TO_DISPLAY_DESC', 'Links para XML Feeds serão exibidos por esta imagem. Deixe em branco para padrão, digite \'none\' para desabilitar.');
@define('MAIL_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('MAIL_IMAGE_TO_DISPLAY_DESC', 'The email subscription page will be displayed by this image. Leave empty for default, enter \'none\' to disable.');
@define('DELETING_FILE', 'Excluindo arquivo %s...');
@define('SETTINGS_SAVED_AT', 'As novas configurações foram salvas em %s');
@define('INVERT_SELECTIONS', 'Inverter Seleção');
@define('PERSONAL_SETTINGS', 'Preferências Pessoais');
@define('DO_MARKUP_DESCRIPTION', 'Aplicar transformações de marcas no texto (carinhas, abreviaturas com *, /, _, ...). Desabilitando isso você preservará o código HTML no texto.');
@define('BASE_DIRECTORY', 'Diretório base');
@define('PERM_READ', 'Read permission');
@define('PERM_WRITE', 'Write permission');
@define('PERM_DENIED', 'Permission denied.');
@define('CURRENT_AUTHOR', 'Current author');
@define('PLUGIN_ACTIVE', 'Active');
@define('PLUGIN_INACTIVE', 'Inactive');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Bookmark this link and then use it on any page you want to blog about to quickly access your Serendipity Blog.');
@define('SET_TO_MODERATED', 'Moderate');
@define('TOGGLE_SELECT', 'Mark for selection');
@define('ENTRY_METADATA', 'Entry metadata');

/* INSTALLER.TPL */
@define('SERENDIPITY_INSTALLATION', 'Instalação do Serendipity');
@define('WELCOME_TO_INSTALLATION', 'Bem-vindo a instalação do Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Primeiro vamos examinar sua instalação para verificar possíveis erros e compatibilidades');
@define('ERRORS_ARE_DISPLAYED_IN', 'Os erros serão mostrados em %s, recomendações em %s e sucesso em %s');
@define('RED', 'vermelho');
@define('YELLOW', 'amarelo');
@define('GREEN', 'verde');
@define('PRE_INSTALLATION_REPORT', 'Mensagens de  pré-instalação do Serendipity v%s');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('PHP_INSTALLATION', 'Instalação do PHP');
@define('INSTALLER_KEY', 'Key');
@define('INSTALLER_VALUE', 'Value');
@define('OPERATING_SYSTEM', 'Sistema Operacional');
@define('WEBSERVER_SAPI', 'Webserver SAPI');
@define('PHPINI_CONFIGURATION', 'configuração do php.ini');
@define('RECOMMENDED', 'Recomendado');
@define('ACTUAL', 'Atual');
@define('PERMISSIONS', 'Permissões');
@define('INSTALLER_CLI_TOOLS', 'Server-side command line tools');
@define('INSTALLER_CLI_TOOLNAME', 'CLI tool');
@define('INSTALLER_CLI_TOOLSTATUS', 'Executable?');
@define('PROBLEM_PERMISSIONS_HOWTO', 'As permissões do diretório podem ser ajustadas rodando o comando `<em>%s</em>` no shell, ou usando um programa de FTP');
@define('PROBLEM_DIAGNOSTIC', 'Foi diagnosticado um problema! você não pode continuar com a instalação sem antes arrumar os erros abaixo');
@define('SELECT_INSTALLATION_TYPE', 'Selecione o tipo de instalação que você deseja usar');
@define('RECHECK_INSTALLATION', 'Verifique a instalação');
@define('SIMPLE_INSTALLATION', 'Instalação em modo "simples"');
@define('EXPERT_INSTALLATION', 'Instalação em modo "expert"');
@define('COMPLETE_INSTALLATION', 'Instalação completa');
@define('WONT_INSTALL_DB_AGAIN', 'não instale a base de dados novamente');
@define('THEY_DO', 'fazendo');
@define('THEY_DONT', 'não fazendo');
@define('CHECK_DATABASE_EXISTS', 'Verificando se as tabelas da base de dados já existem');
@define('CREATE_DATABASE', 'Criando a instalação padrão do banco de dados...');
@define('ATTEMPT_WRITE_FILE', 'Tentando editar o arquivo %s...');
@define('CREATING_PRIMARY_AUTHOR', 'Criar author principal \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Aplicando modelo padrão');
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalando plugins padrão');
@define('SERENDIPITY_INSTALLED', 'Serendipity foi instalado com sucesso');
@define('VISIT_BLOG_HERE', 'Acesse seu novo blog aqui');
@define('THANK_YOU_FOR_CHOOSING', 'Obrigado por escolher o Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Foi detectado um erro na instalação');
@define('INSTALL_DBPREFIX_INVALID', 'The database table name prefix must not be empty and may only contain letters, numbers and the underscore character.');
@define('POWERED_BY', 'Powered by');
@define('ADMIN_FOOTER_POWERED_BY', 'Desenvolvido por Serendipity %s e PHP %s');

/* INSTALLER.PHP - FUNCTIONS_INSTALLER */
@define('USERLEVEL_EDITOR_DESC', 'Editor');
@define('USERLEVEL_CHIEF_DESC', 'Editor Chefe');
@define('USERLEVEL_ADMIN_DESC', 'Administrador');
@define('WWW_USER', 'Altere www para o usuário com o qual o apache é executado (ex.: nobody).');
@define('INSTALL_PASSWORD_INVALID', 'Your entered passwords for the administrator user do not match.');
@define('DIRECTORY_CREATE_ERROR', 'O Diretório %s não existe e não pode ser criado. Tente criá-lo manualmente');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; execute <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Não pôde executar o binário %s');
@define('FILE_CREATE_YOURSELF', 'Por favor, crie você mesmo o arquivo ou verifique suas permissões');
@define('COPY_CODE_BELOW', '<br />* Copie o código abaixo e o coloque em %s no seu %s diretório:<b><pre>%s</pre></b>' . "\n");
@define('BROWSER_RELOAD', 'Uma vez feito isso, pressione o botão "atualizar" ("reload") do seu navegador.');
@define('ERROR_TEMPLATE_FILE', 'Não foi possível abrir o arquivo de template, por favor atualize o serendipity!');
@define('HTACCESS_ERROR', 'Para checar a instalação do servidor web, serendipity precisa ter poder criar o arquivo ".htaccess". Isso não foi possível devido a erros de permissões. Por favor, ajuste as permissões para isso: <br />&nbsp;&nbsp;%s<br />e recarregue esta página.');
@define('EMPTY_SETTING', 'Você não especificou um valor válido para "%s"!');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');

/* UPGRADER.TPL */
@define('SERENDIPITY_NEEDS_UPGRADE', 'Serendipity detectou que sua configuração está instalada com a versão %s, entretanto serendipity está instalado na versão %s, você precisa atualizar o serendipity! <a href="%s">Clique aqui</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Oi, e bem-vindo ao agente de atualização do Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Estou aqui para ajudá-lo a atualizar a instalação %s do seu Serendipity.');
@define('SERENDIPITY_UPGRADER_WHY', 'Você enxerga esta mensagem porque acabou de instalar o Serendipity %s, mas ainda não atualizou a instalação do banco de dados para compatibilizar com esta versão');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Atualização do banco de dados (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Encontrei os seguintes arquivos .sql u]que precisam ser executados antes que você prossiga com a utilização normal do Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC', 'Tarefas específicas da versão');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nenhuma tarefa específica da versão foi encontrada');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Quer realizar as tarefas acima?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Não, eu as executarei manualmente');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Por favor, faça isso');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Parece que que você não precisa executar nenhuma atualização');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Considere a atualização do Serendipity');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Você ignorou a fase de atualização do Serendipity, certifique-se de que o banco de dados está instalado corretamente e que as funções necessárias foram executadas');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'A sua instalação do Serendipity foi atualizada para a versão %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Você pode retornar ao seu blog clicando %saqui%s');
@define('ADMIN_ENTRIES', 'Entradas');

/* ADMIN - IMPORTERS.TPL AND IMPORTERS */
@define('COULDNT_CONNECT', 'Não foi possível conectar a base de dados MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Não foi possível selecionar a base de dados: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Não foi possível selecionar informações do usuário: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Não foi possível selecionar informações da categoria: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Não foi possível selecionar informações de entrada: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Não foi possível selecionar informações de comentário: %s.');
@define('MYSQL_REQUIRED', 'Você deve ter extensões MySQL para executar esta ação.');
@define('CREATE_AUTHOR', 'Criar autor \'%s\'.');
@define('CREATE_CATEGORY', 'Criar categoria \'%s\'.');
@define('MT_DATA_FILE', 'Pasta de "Movable Type"');
@define('INSTALL_DBPORT', 'Porta do banco de dados');
@define('INSTALL_DBPORT_DESC', 'A porta usada para conectar seu servidor de banco de dados');
@define('IMPORT_PLEASE_ENTER', 'Por-favor insira os dados como solicitado abaixo');
@define('IMPORT_NOW', 'Importar agora!');
@define('IMPORT_STARTING', 'Iniciar procedimento de importação...');
@define('IMPORT_FAILED', 'Falha na importação');
@define('IMPORT_DONE', 'Importação completou com sucesso');
@define('IMPORT_WEBLOG_APP', 'Aplicação de weblog');
@define('IMPORT_NOTES', 'Nota:');
@define('IMPORT_STATUS', 'Situação após importação');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('RSS_IMPORT_BODYONLY', 'Coloque todo o texto no "corpo" da seção e não divida em "seções extendidas".');
@define('IMPORT_GENERIC_RSS', 'Importação de RSS genérico');
@define('ACTIVATE_AUTODISCOVERY', 'Enviar Trackbacks de ligações encontradas na entrada');
@define('RSS_IMPORT_CATEGORY', 'Utilize essa categoria para artigos que não encontrem uma categoria no Serendipity');
@define('IMPORT_WP_PAGES', 'Also fetch attachments and staticpages as normal blog entries?');
@define('DOCUMENT_NOT_FOUND', 'O documento %s não foi encontrado.');
@define('CONVERT_HTMLENTITIES', 'Tentar auto-converter as entidades HTML?');

/* ADMIN - INDEX.TPL */
@define('SERENDIPITY_ADMIN_SUITE', 'Painel de Administração do Serendipity');
@define('WRONG_USERNAME_OR_PASSWORD', 'Você deve ter fornecido nome de usuário ou senha inválidos');
@define('PLEASE_ENTER_CREDENTIALS', 'Por Favor insira suas credenciais abaixo.');
@define('AUTOMATIC_LOGIN', 'Salvar informações');
@define('MAIN_MENU', 'Main menu');
@define('MENU_PERSONAL', 'Personal menu');
@define('MENU_DASHBOARD', 'Dashboard');
@define('MENU_ACTIVITY', 'Activity');
@define('MENU_SETTINGS', 'Settings');
@define('MENU_TEMPLATES', 'Templates');
@define('MENU_PLUGINS', 'Plugins');
@define('MENU_USERS', 'Users');
@define('MENU_GROUPS', 'Groups');
@define('MENU_MAINTENANCE', 'Maintenance');
@define('MEDIA', 'Mídia');
@define('MEDIA_LIBRARY', 'Biblioteca de mídia');
@define('ADD_MEDIA', 'Adicionar mídia');
@define('MANAGE_DIRECTORIES', 'Gerenciar diretórios');
@define('CONFIGURATION', 'Configuração');

/* ADMIN - OVERVIEW.TPL */
@define('NEW_VERSION_AVAILABLE', 'New stable Serendipity version available: ');
@define('UPDATE_FAILMSG', 'Check for new Serendipity version failed. This can happen because either the URL https://raw.github.com/s9y/Serendipity/master/docs/RELEASE is down, your server blocks outgoing connections or there are other connection issues.');
@define('FURTHER_LINKS', 'Further Links');
@define('UPDATE_FAILACTION', 'Disable automatic update check');
@define('DASHBOARD_ENTRIES', 'In Progress');
@define('FURTHER_LINKS_S9Y', 'Serendipity Homepage');
@define('FURTHER_LINKS_S9Y_DOCS', 'Serendipity Documentation');
@define('FURTHER_LINKS_S9Y_BLOG', 'Official Blog');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Forums');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('PUBLISH_NOW', 'Publish this entry now (sets current time and date)');
@define('ENTRY_PUBLISHED', 'Entry #%s published');
@define('PUBLISH_ERROR', 'Error publishing entry:');
@define('PUBLISHED', 'Published');
@define('JS_FAILURE', 'The Serendipity JavaScript-library could not be loaded. This can happen due to PHP or Plugin errors, or even a malformed browser cache. To check the exact error please open <a href="%1$s">%1$s</a> manually in your browser and check for error messages.');
@define('ENTRY_PUBLISHED_FUTURE', 'Esta entrada não foi publicada ainda.');

/* ADMIN - PLUGINS.TPL */
@define('PLUGIN_DOCUMENTATION', 'Website');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Copyright');
@define('SIDEBAR_PLUGINS', 'Plugins da barra lateral');
@define('EVENT_PLUGINS', 'Plugins de eventos');
@define('CONFIGURE_PLUGINS', 'Configurar Plugins');
@define('PLUGIN_ALREADY_INSTALLED', 'Plugin already installed, and does not support multiple installation ("stackable").');
@define('UNMET_REQUIREMENTS', 'Requisitos falharam: %s');
@define('INSTALL_NEW_SIDEBAR_PLUGIN', 'Install a new sidebar plugin');
@define('INSTALL_NEW_EVENT_PLUGIN', 'Install a new event plugin');
@define('UPGRADE_TO_VERSION', 'Atualização para a versão %s');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Clique aqui para instalar um novo %s');
@define('ALREADY_INSTALLED', 'Já instalado');
@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');
@define('NO_UPDATES', 'No plugin updates are available');
@define('PLUGIN_ALL_UPDATED', 'All Plugins updated');
@define('PLUGIN_LINK_SPARTACUS', 'More information');
@define('PLUGIN_SOURCE_BUNDLED', 'bundled core plugin');
@define('PLUGIN_SOURCE_LOCAL', 'locally installed');

/* ADMIN - ENTRIES.TPL */
@define('EDIT_ENTRIES', 'Editar artigos');
@define('EDIT_ENTRY', 'Editar artigo');
@define('ENTRY_STATUS', 'Entry status');
@define('DRAFT', 'Rascunho');
@define('PUBLISH', 'Publicar');
@define('CONTENT', 'Conteúdo');
@define('ENTRIES_PER_PAGE', 'artigos por página');
@define('SCHEDULED', 'Scheduled');
@define('STICKY_POSTINGS', 'Postagens fixas');
@define('PAGE_BROWSE_ENTRIES', 'Página %s de %s, totalizando %s artigos');
@define('FIND_ENTRIES', 'Encontrar artigos');
@define('RIP_ENTRY', 'Até nunca mais artigo #%s');
@define('NEW_ENTRY', 'Novo artigo');
@define('EDITOR_TAGS', 'Tags');
@define('ENTRY_BODY', 'Corpo do artigo');
@define('EXTENDED_BODY', 'Extensão do corpo do artigo');
@define('IFRAME_SAVE', 'Serendipity is now saving your entry, sending emails to subscribers, creating trackbacks and performing possible XML-RPC calls. This may take a while..');
@define('IFRAME_SAVE_DRAFT', 'Um rascunho desta entrada foi arquivado');
@define('IFRAME_PREVIEW', 'Serendipity está criando uma previsão de sua entrada...');
@define('IFRAME_WARNING', 'Seu navegador não suporta o conceito de "iframes". Por favor o arquivo serendipity_config.inc.php e configure a variável $serendipity[\'use_iframe\'] para FALSE.');
@define('DATE_INVALID', 'Atenção: A data que você especificou é inválida. Ela deve ser fornecida no formato DD/MM/AAAA HH:MM.');
@define('ADVANCED_OPTIONS', 'Opções avançadas');
@define('TOGGLE_VIEW', 'Switch category view mode');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Esse link não deve ser clicado. Ele contém a URI de trackback para este artigo. Você pode usar esse URI para enviar ping- & trackbacks do seu próprio weblog para esse artigo. Para copiar o link, clique com o botão direito e selecione "Copiar Atalho" no Internet Explorer ou "Copiar localização do link" no Mozilla.');
@define('RESET_DATE', 'Reinicializar data');
@define('RESET_DATE_DESC', 'Clique aqui para reinicializar data para o valor corrente');

/* ADMIN - USERS.TPL */
@define('MANAGE_USERS', 'Gerenciar usuários');
@define('CREATE_NEW_USER', 'Criar novo usuário');
@define('CREATE_NOT_AUTHORIZED', 'Você não pode modificar usuários que tenham o mesmo nível que o seu');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Você não pode criar usuários com um nível maior que o seu');
@define('CREATED_USER', 'Um novo usuário %s foi criado');
@define('MODIFIED_USER', 'As propriedades do usuário %s foram alteradas');
@define('USER_LEVEL', 'Nível do usuário');
@define('WARNING_NO_GROUPS_SELECTED', 'Warning: You did not select any group memberships. This would effectively log you out of the usergroup management, and thus your group memberships werde not changed.');
@define('DELETE_USER', 'Você está prestes a excluir o usuário #%d %s. Tem certeza disso? Isso fará com que os artigos escritos por ele não sejam mais exibidos.');
@define('DELETED_USER', 'Usuário #%d %s excluído.');

/* ADMIN - GROUPS.TPL */
@define('MANAGE_GROUPS', 'Gerenciar grupos');
@define('DELETED_GROUP', 'Grupo #%d %s apagado.');
@define('CREATED_GROUP', 'Um novo grupo %s foi criado');
@define('MODIFIED_GROUP', 'As propriedades do grupo %s foram mudadas');
@define('CREATE_NEW_GROUP', 'Criar novo grupo');
@define('DELETE_GROUP', 'Você está prestes a apagar o grupo #%d %s. Realmente quer fazer isso?');
@define('GROUP_NAME_DESC', "Use as uppercased eg. 'EXAMPLE_GROUP' name, but not as a constant 'USERLEVEL_XYZ' group name.");

/* ADMIN - COMMENTS.TPL */
@define('FIND_COMMENTS', 'Encontrar comentários');
@define('COMMENTS_FILTER_SHOW', 'Mostrat');
@define('COMMENTS_FILTER_ALL', 'Todos');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Apenas os aprovados');
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Aprovações pendentes');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('COMMENT_NOT_DELETED', 'Could not delete comment #%s .');
@define('COMMENTS_DELETE_CONFIRM', 'Tem certeza de que deseja excluir os comentários selecionados?');
@define('PAGE_BROWSE_COMMENTS', 'Página %s de %s, totalizando %s comentários');
@define('COMMENT_IS_DELETED', '(Comment removed)');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');

/* ADMIN - SUBSCRIPTIONS.TPL */
@define('EDIT_SUBSCRIPTIONS', 'Edit Subscriptions');
@define('SUBSCRIPTION_ENTRY', 'Subscriptions for Entry');
@define('SUBSCRIPTION_TYPE', 'Subscription type');
@define('SUBSCRIPTION_TIME', 'Subscribed at');
@define('SUBSCRIPTION_STATE', 'Subscription state');
@define('SUBSCRIPTION_BLOG', 'Blog subscription');
@define('SUBSCRIPTION_AUTHOR', 'Author subscription');
@define('SUBSCRIPTION_CATEGORY', 'Author subscription');
@define('NO_SUBSCRIPTIONS_TO_PRINT', 'No subscriptions to print');
@define('PAGE_BROWSE_SUBSCRIPTIONS', 'Page %s of %s, totally %s subscriptions');
@define('OPTIN_PENDING', 'optin pending');
@define('RIP_SUB', 'Subscription #%s deleted.');
@define('FIND_SUBSCRIPTIONS', 'Find subscriptions');

/* ADMIN - CATEGORY.TPL */
@define('CATEGORY_SAVED', 'Categoria salva');
@define('CATEGORY_ALREADY_EXIST', 'A categoria com o nome "%s" já existe');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Categoria #%s excluída. Os artigos antigos foram movidos para a categoria #%s');
@define('CATEGORY_DELETED', 'Categoria #%s excluída. Os artigos antigos foram movidos para a categoria #%s');
@define('INVALID_CATEGORY', 'Nenhuma categoria fornecida para exclusão');
@define('EDIT_THIS_CAT', 'Editar "%s"');
@define('CATEGORY_REMAINING', 'Apague esta categoria e mova os dados para esta outra categoria');
@define('PARENT_CATEGORY', 'Categoria superior');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('CREATE_NEW_CAT', 'Criar nova categoria');
@define('ALREADY_SUBCATEGORY', '%s já é uma subcategoria de %s.');
@define('NO_CATEGORIES', 'Sem categorias');

/* ADMIN - MAINTENANCE.TPL */
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('CLEANCOMPILE_PASS', '[smarty clearCompiledTemplate(%s)]');
@define('CLEANCOMPILE_FAIL', 'No files available for clearing.');
@define('CLEANCOMPILE_TITLE', 'Clear template cache');
@define('CLEANCOMPILE_INFO', 'This will purge all compiled template files of the currently active template. Compiled templates will be automatically re-created on demand by the Smarty framework.');
@define('IMPORT_ENTRIES', 'Importar dados');
@define('EXPORT_ENTRIES', 'Exportar entradas');
@define('EXPORT_FEED', 'Exportar todos os RSS');
@define('CREATE_THUMBS', 'Reconstruir Miniaturas');
@define('WARNING_THIS_BLAHBLAH', "ATENÇÃO:\\nIsso pode levar muito tempo se existirem muitas imagens sem miniaturas.");
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('MAINTENANCE_MODE', 'Maintenance Mode');
@define('MAINTENANCE_MODE_DESC', 'Activate maintenance mode to prevent access from users that are not logged in.');
@define('MAINTENANCE_MODE_WARNING', "Do not log out, as you won't be able to log in again until maintenance mode expires!");
@define('MAINTENANCE_MODE_DURATION', 'Duration (in hours):');
@define('MAINTENANCE_MODE_TIME', 'Will be active until');
@define('MAINTENANCE_MODE_ACTIVATE', 'Activate');
@define('MAINTENANCE_MODE_DEACTIVATE', 'Deactivate');

/* ADMIN - TEMPLATES.TPL */
@define('TEMPLATE_SET', '\'%s\' foi definido como seu modelo ativo');
@define('WARNING_TEMPLATE_DEPRECATED', 'Atenção: seu modelo padrão está usando um método obsoleto, você será avisado para fazer uma atualização se for possível.');
@define('STYLE_OPTIONS_NONE', 'This theme/style has no specific options. To see how your template can specify options, read the Technical Documentation on www.s9y.org about "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Theme/Style options');
@define('CURRENT_TEMPLATE', 'Current Template');
@define('CUSTOM_ADMIN_INTERFACE', 'Custom admin interface available');
@define('CUSTOM_CONFIG', 'Custom configuration file');
@define('TEMPLATE_INFO', 'Show template info');
@define('AVAILABLE_TEMPLATES', 'Available Templates');
@define('THEMES_PREVIEW_BLOG', 'See demo on blog.s9y.org');
@define('SET_AS_TEMPLATE', 'Atribuir como template');

/* ADMIN - CONFIG_TEMPLATE.TPL */
@define('CHECK_N_SAVE', 'Verificar &amp; salvar');

/* ADMIN - SHOW_PLUGINS.TPL */
@define('REMOVE_TICKED_PLUGINS', 'Remover plugins marcados');
@define('SAVE_CHANGES_TO_LAYOUT', 'Salvar modificações ao layout');

/* ADMIN - IMAGES.TPL EDITOR.JS.TPL IMAGES.PHP FUNCTIONS_IMAGES */
@define('SYNCING', 'Sincronizando o banco de dados com o diretório de imagens');
@define('SYNC_DONE', 'Pronto (%s imagens sincronizadas).');
@define('RESIZE_BLAHBLAH', '<b>Redimensionar %s</b>');
@define('ORIGINAL_SIZE', 'Tamanho original: <i>%sx%s</i> pixel');
@define('RESIZING', 'Redimensionando');
@define('RESIZE_DONE', 'Pronto (%s imagens redimensionadas).');
@define('KEEP_PROPORTIONS', 'Manter proporções');
@define('REALLY_SCALE_IMAGE', 'Quer mesmo redimensionar a imagem? Não haverá volta!!');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Aqui você pode ajustar o novo tamanho das imagens. Se pretende manter as proporções, preencha apenas um valor e pressione a tecla TAB que automaticamente será calculado o novo tamanho de modo que as proporções não fiquem bagunçadas:');
@define('MEDIA_RESIZE_EXISTS', 'File dimensions already exist!');
@define('NEWSIZE', 'Novo tamanho: ');
@define('SCALING_IMAGE', 'Redimensionando %s para %s x %s px');
@define('MEDIA_DIRECTORY_MOVED', 'Directory and files were successfully moved to %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'Directory and files could not be moved to %s!');
@define('DIRECTORY_INFO', 'Directory info');
@define('DIRECTORY_INFO_DESC', 'Directories reflect their physical folder directory name. If you want to change or move directories which contain items, you have two choices. Either create the directory or subdirectory you want, then move the items to the new directory via the media library and afterwards, delete the empty old directory there. Or completely change the whole old directory via the edit directory button below and rename it to whatever you like (existing subdir/ + newname). This will move all directories and items and change referring blog entries.');
@define('DIRECTORY_CREATED', 'Diretório <strong>%s</strong> foi criado.');
@define('PARENT_DIRECTORY', 'Diretório superior');
@define('CONFIRM_DELETE_DIRECTORY', 'Tem certeza que quer excluir todo o conteúdo do diretório %s?');
@define('ERROR_NO_DIRECTORY', 'Erro: Diretório %s não existe');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Não foi possível remover um diretório que não esteja vazio. Marque a opção "forçar exclusão" se deseja remover seus arquivos também, e envie o comando novamente. Os arquivos existenntes são:');
@define('DIRECTORY_DELETE_FAILED', 'A exclusão do diretório %s falhou. Verifique permissões ou as mensagem acima.');
@define('DIRECTORY_DELETE_SUCCESS', 'Diretório %s excluído corretamente.');
@define('CHECKING_DIRECTORY', 'Verificando arquivos no diretório %s');
@define('DELETE_DIRECTORY', 'Apagar pasta');
@define('DELETE_DIRECTORY_DESC', 'Você está apagando o conteúdo de um diretório que contém arquivos multimídia, possivelmente usados em outras entradas.');
@define('FORCE_DELETE', 'Apagar TODOS os arquivos no diretório, incluindo os não conhecidos pelo Serendipity');
@define('CREATE_DIRECTORY', 'Criar diretório');
@define('CREATE_NEW_DIRECTORY', 'Criar novo diretório');
@define('CREATE_DIRECTORY_DESC', 'Aqui você pode criar um novo diretório para armazenar arquivos multimídia. Escolha o nome da pasta e se preferir, escolha um diretório de nível superior para salvar sua pasta dentro.');
@define('ABOUT_TO_DELETE_FILE', 'Você está prestes a excluir <b>%s</b><br />Se estiver utilizando esse arquivo em algum dos seus artigos, vai resultar em links ou imagens perdidas<br />Deseja realmente prosseguir com a exclusão?<br /><br />');
@define('ERROR_FILE_EXISTS_ALREADY', 'Erro: Arquivo já existe em sua máquina!');
@define('REMOTE_FILE_INVALID', 'The given URL appears to be local and is not allowed to be fetched. You can allow this by setting the option "Allow to fetch data from local URLs" in your blog configuration.');
@define('FILE_NOT_FOUND', 'Não foi possível localizar o arquivo intitulado <b>%s</b>, será que foi excluído?');
@define('ERROR_FILE_FORBIDDEN', 'Você não está autorizado a enviar arquivos com a pasta ativa');
@define('REMOTE_FILE_NOT_FOUND', 'O arquivo não foi localizado no servidor, tem certeza sobre a URL: <b>%s</b> está correta?');
@define('FILE_FETCHED', '%s buscado como %s');
@define('FILE_UPLOADED', 'O arquivo %s foi transferido corretamente: %s');
@define('DELETE_FILE_FAIL', 'Unable to delete file <b>%s</b>');
@define('DELETE_FILE', 'Excluir o campo entitulado <b>%s</b>');
@define('FOUND_FILE', 'Encontrado arquivo novo/modificado: %s.');
@define('FILENAME_REASSIGNED', 'Automagically assigned new file name: %s');
@define('ERROR_FILE_EXISTS', 'Erro: O novo nome de arquivo já existe, escolha outro!');
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('MEDIA_HOTLINKED', 'entrelaçado');
@define('EDITOR_NO_TAGS', 'No tags');
@define('ENTER_NEW_NAME', 'Informe o novo nome para: ');
@define('MEDIA_PROPERTIES_DONE', 'Properties of #%d changed.');
@define('MULTICHECK_NO_ITEM', 'No item selected, please check at least one. <a href="%s">Return to previous page</a>.');
@define('MULTICHECK_NO_DIR', 'No directory selected, please choose one. <a href="%s">Return to previous page</a>.');
@define('ADDING_IMAGE', 'Adicionando imagem...');
@define('THUMB_CREATED_DONE', 'Miniatura criada.<br>Pronto.');
@define('THUMBNAIL_USING_OWN', 'Usando %s como sua própria miniatura devido ao seu pequeno tamanho.');
@define('THUMBNAIL_FAILED_COPY', 'A tentativa de usar %s como sua própria miniatura falhou devido à um erro na cópia!');
@define('DELETE_THUMBNAIL', 'Excluir a miniatura da imagem intitulada <b>%s</b>');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ocorreu um erro desconhecido, o arquivo não foi transferido. Talvez o tamanho do arquivo seja maior que o permitido pelo seu servidor. Verifique com o seu servidor de Internet, ou edite o php.ini para permitir transferência de arquivos de maior tamanho.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Error: You cannot upload files larger than %s bytes!');
@define('MEDIA_UPLOAD_DIMERROR', 'Error: You cannot upload image files larger than %s x %s pixels!');
@define('HOTLINK_DONE', 'Arquivo entrelaçado.<br />Feito.');
@define('DELETE_HOTLINK_FILE', 'Apagar o entrelaçamento do arquivo de nome <b>%s</b>');
@define('IMAGICK_EXEC_ERROR', 'Impossível executar: "%s", erro: %s, retornou variável: %d');
@define('SKIPPING_FILE_EXTENSION', 'Ignorando arquivo: Faltando extensão em %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Ignorando arquivo: %s ilegível.');
@define('MEDIA_RENAME_FAILED', 'Renaming failed!');
@define('PERM_SET_CHILD', 'Set the same permissions on all child directories');
@define('TIMESTAMP_RESET', 'The timestamp has been reset to the current time.');
@define('CURRENT_TAB', 'Current tab: ');

/* ADMIN - MEDIA_CHOOSE.TPL */
@define('I_WANT_THUMB', 'Quero usar miniaturas em meu artigo.');
@define('I_WANT_BIG_IMAGE', 'Quero usar a maior imagem em meu artigo.');
@define('I_WANT_NO_LINK', ' Quero exibi-la como imagem');
@define('I_WANT_IT_TO_LINK', 'Quero exibi-la como um link para esta URL:');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');
@define('IMAGE_SIZE', 'Tamanho da imagem');
@define('IMAGE_ALIGNMENT', 'Alinhamento de imagem');
@define('ALIGN_TOP', 'Top');
@define('ALIGN_LEFT', 'Left');
@define('ALIGN_RIGHT', 'Right');
@define('IMAGE_AS_A_LINK', 'Inserção de imagem');
@define('MEDIA_TARGET', 'Target for this link');
@define('MEDIA_TARGET_JS', 'Popup window (via JavaScript, adaptive size)');
@define('MEDIA_ENTRY', 'Isolated Entry');
@define('MEDIA_TARGET_BLANK', 'Popup window (via target=_blank)');
@define('YOU_CHOSE', 'Sua escolha %s');

/* ADMIN - MEDIA_ITEMS.TPL */
@define('IMAGE_ROTATE_LEFT', 'Girar imagem 90 graus no sentido anti-horário');
@define('IMAGE_ROTATE_RIGHT', 'Girar imagem 90 graus no sentido horário');
@define('MEDIA_RENAME', 'Renomear esse arquivo');
@define('THUMBNAIL_SHORT', 'Miniatura');
@define('ORIGINAL_SHORT', 'Orig.');
@define('SORT_ORDER_NAME', 'Nome do arquivo');
@define('SORT_ORDER_EXTENSION', 'Extensão do arquivo');
@define('SORT_ORDER_SIZE', 'Tamanho do arquivo');
@define('SORT_ORDER_WIDTH', 'Largura da imagem');
@define('SORT_ORDER_HEIGHT', 'Altura da imagem');
@define('SORT_ORDER_DATE', 'Data de transferência');
@define('SHOW_METADATA', 'Show metadata');

/* ADMIN - MEDIA_UPLOAD.TPL */
@define('ADD_MEDIA_BLAHBLAH', '<b>Adiciona um arquivo para o seu repositório de mídia:</b><p>Aqui você pode transferir arquivos de mídia, ou oriente-me para pegá-lo em algum lugar na web! Se não possuir uma imagem apropriada, <a href="https://images.google.com/" target="_blank">procure no google</a> alguma imagem que tenha relação com o assunto, os resultados são geralmente úteis e divertidos :)</p><p><b>Selecione o método:</b></p><br/>');
@define('ENTER_MEDIA_URL', 'Entre com a URL de um arquivo para buscá-lo:');
@define('ENTER_MEDIA_UPLOAD', 'Selecione o arquivo que deseja transferir:');
@define('SAVE_FILE_AS', 'Salvar arquivo como:');
@define('STORE_IN_DIRECTORY', 'Guardar no seguinte diretório: ');
@define('IMAGE_MORE_INPUT', 'Adicionar mais imagens');
@define('ENTER_MEDIA_URL_METHOD', 'Método de obtenção:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Nota: se você quer fazer um "hotlink" para um servidor, tenha certeza de ter permissões suficientes. Os "hotlinks" permitem que você use ligações em imagem não armazenadas no servidor local.');
@define('FETCH_METHOD_IMAGE', 'Baixar imagem para o servidor');
@define('FETCH_METHOD_HOTLINK', 'entrelaçar externo ao servidor');
@define('GO_ADD_PROPERTIES', 'Go & enter properties');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
@define('NO_FILE_SELECTED', 'For s9y to do something, you have to select a file first');

/* ADMIN - MEDIA_PANE.TPL */
@define('IMAGE_RESIZE', 'Redimensionar essa imagem');
@define('MEDIA_DELETE', 'Excluir esse arquivo');
@define('FILES_PER_PAGE', 'Arquivos por página');
@define('HIDE_SUBDIR_FILES', 'Hide files in subdirectory');
@define('NO_IMAGES_FOUND', 'Nenhuma imagem encontrada');
@define('RANGE_FROM', 'From');
@define('RANGE_TO', 'To');
@define('MEDIA_DIRECTORY_MOVE', 'Move files to another directory');
@define('INSERT_ALL', 'Insert All');
@define('ALL_DIRECTORIES', 'todos os diretórios');

/* ADMIN - CONFIGURATION.TPL */
@define('WRITTEN_N_SAVED', 'Configuração escrita &amp; salva');
@define('DIAGNOSTIC_ERROR', 'Detectamos alguns erros quando verificamos as informações fornecidas por você:');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Configurações de banco de dados');
@define('INSTALL_CAT_DB_DESC', 'Aqui você pode inserir todas as informações do seu banco de dados. O Serendipity precisa dessas informações para funcionar.');
@define('INSTALL_DBTYPE', 'Tipo de banco de dados');
@define('INSTALL_DBTYPE_DESC', 'Tipo de banco de dados');
@define('INSTALL_DBHOST', 'Servidor de banco de dados');
@define('INSTALL_DBHOST_DESC', 'Endereço/Nome do seu servidor de banco de dados');
@define('INSTALL_DBUSER', 'Usuário de banco de dados');
@define('INSTALL_DBUSER_DESC', 'O nome de usuário que conecta ao banco');
@define('INSTALL_DBPASS', 'Senha do banco de dados');
@define('INSTALL_DBPASS_DESC', 'A senha correspondente ao usuário acima');
@define('INSTALL_DBNAME', 'Nome do banco de dados');
@define('INSTALL_DBNAME_DESC', 'O nome do banco de dados');
@define('INSTALL_DBPREFIX', 'Prefixo para as tabelas do banco de dados');
@define('INSTALL_DBPREFIX_DESC', 'Prefixo utilizado para nomear as tabelas, ex.: serendipity_');
@define('INSTALL_DBPERSISTENT', 'Usar conexões persistentes');
@define('INSTALL_DBPERSISTENT_DESC', 'Habilitar o uso de conexões persistentes na base de dados, leia mais em <a href="https://php.net/manual/features.persistent-connections.php" target="_blank">here</a>. Normalmente não recomendamos isso!');
@define('INSTAL_DB_UTF8', 'Enable DB-charset conversion');
@define('INSTAL_DB_UTF8_DESC', 'Issues a MySQL "SET NAMES" query to indicate the required charset for the database. Turn this on or off, if you see weird characters in your blog.');

/* PATH SETTINGS */
@define('INSTALL_CAT_PATHS', 'Caminhos');
@define('INSTALL_CAT_PATHS_DESC', 'Os vários caminhos para pastas e arquivos essênciais. Não se esqueça de terminar com barras para os diretórios');
@define('INSTALL_FULLPATH', 'Caminho completo');
@define('INSTALL_FULLPATH_DESC', 'O caminho completo e absoluto para a sua instalação do serendipity');
@define('INSTALL_UPLOADPATH', 'Caminho para o Upload');
@define('INSTALL_UPLOADPATH_DESC', 'Todos os arquivos transferidos irão parar aí, relativo ao \'Caminho completo\' - geralmente \'uploads/\'');
@define('INSTALL_RELPATH', 'Caminho relativo');
@define('INSTALL_RELPATH_DESC', 'Caminho para o serendipity em seu navegador, geralmente \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Caminho relativo do template');
@define('INSTALL_RELTEMPLPATH_DESC', 'Caminho para o diretório onde estão os seus templates - Relativo ao \'caminho relativo\'');
@define('INSTALL_RELUPLOADPATH', 'Caminho relativo do Upload');
@define('INSTALL_RELUPLOADPATH_DESC', 'Caminho para o \'uploads\' em seu navegador - Relativo ao \'caminho relativo\'');
@define('INSTALL_URL', 'URL do blog');
@define('INSTALL_URL_DESC', 'URL base para a instalação do serendipity');
@define('INSTALL_AUTODETECT_URL', 'Autodetectar usando HTTP-Host');
@define('INSTALL_AUTODETECT_URL_DESC', 'Se marcado "true", o Serendipity assegurará que o HTTP Host que é usado pelo seu visitante é usado como definição de BaseURL. Permitir isto possibilita usar vários nomes de domínio para o seu blog, e usar o domínio para todos os links subseqüentes.');
@define('INSTALL_INDEXFILE', 'Arquivo inicial');
@define('INSTALL_INDEXFILE_DESC', 'Nome do arquivo inicial do serendipity');

/* PERMALINK SETTINGS */
@define('INSTALL_CAT_PERMALINKS', 'Permalinks');
@define('INSTALL_CAT_PERMALINKS_DESC', 'Defina várias URLs padrões quando definir os links permanentes do seu blog. Sugerimos isso como padrão; caso contrário, você pode usar os valores %id% quando possível para prevenir que Serendipity fique buscando na base de dados o URL.');
@define('INSTALL_PERMALINK', 'Estrutura de entrada das URLs de Permalink');
@define('INSTALL_PERMALINK_DESC', 'Aqui você define a URL relativa da estrutura que inicia com a sua URL base onde as entradas estão definidas. Você pode usar as variáveis  %id%, %title%, %day%, %month%, %year% ou quaisquer outras.');
@define('INSTALL_PERMALINK_AUTHOR', 'Estrutura da URL do autor de Permalink');
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Aqui você pode definir as URLs relativas das estruturas que iniciam pela sua URL base onde algumas entradas de outros autores tornan-se disponíveis. Você pode usar as variáveis %id%, %realname%, %username%, %email% ou quaisquer outros.');
@define('INSTALL_PERMALINK_CATEGORY', 'Estrutura da URL da categoria de permalink');
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Aqui você pode definir as estruturas URL relativas, iniciando pela sua URL base, de onde outras categorias se tornarão disponíveis. Você pode usar as variáveis %id%, %name%, %parentname%, %description%, ou quaisquer outros.');
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Categoria das estruturas URL de Permalink e RSS-Feed');
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Aqui você pode definir as estruturas URL relativas, iniciando pela sua URL base até onde o RSS-feed se torna disponível. Você pode usar as variáveis %id%, %name%, %description%, ou quaisquer outros.');
@define('INSTALL_PERMALINK_FEEDAUTHOR', 'Permalink RSS-Feed Author URL structure');
@define('INSTALL_PERMALINK_FEEDAUTHOR_DESC', 'Here you can define the relative URL structure beginning from your base URL to where RSS-feeds from specific users may be viewed. You can use the variables %id%, %realname%, %username%, %email% and any other characters.');
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Caminho para arquivos');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Caminho para arquivo');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Caminho para as categorias');
@define('INSTALL_PERMALINK_AUTHORSPATH', 'Path to authors');
@define('INSTALL_PERMALINK_SUBSCRIBEPATH', 'Path to subscribe the blog');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Caminho para subscrição de comentários');
@define('INSTALL_PERMALINK_DELETEPATH', 'Caminho para comentários apagados');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Caminho para comentários aprovados');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Caminho para o RSS Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Caminho para plugin único');
@define('INSTALL_PERMALINK_ADMINPATH', 'Caminho para administração');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Caminho para pesquisa');
@define('INSTALL_PERMALINK_COMMENTSPATH', 'Path to comments');
@define('CONFIG_PERMALINK_PATH_DESC', 'Please note that you have to use a prefix so that Serendipity can properly map the URL to the proper action. You may change the prefix to any unique name, but not remove it. This applies to all path prefix definitions.');

/* GENERAL SETTINGS */
@define('INSTALL_CAT_SETTINGS', 'Configurações gerais');
@define('INSTALL_CAT_SETTINGS_DESC', 'Padroniza como o Serendipity deve se comportar');
@define('INSTALL_USERNAME', 'Usuário do administrador');
@define('INSTALL_USERNAME_DESC', 'Nome de usuário para o login do administrador');
@define('INSTALL_PASSWORD', 'Senha do administrador');
@define('INSTALL_PASSWORD_DESC', 'Senha para o login do administrador');
@define('INSTALL_PASSWORD2', 'Admin password (verify)');
@define('INSTALL_PASSWORD2_DESC', 'Password for admin login, enter again to verify.');
@define('USERCONF_REALNAME', 'Nome real');
@define('USERCONF_REALNAME_DESC', 'Todo o nome do autor. Este nome é o que os leitores enxergam');
@define('INSTALL_EMAIL', 'E-mail do administrador');
@define('INSTALL_EMAIL_DESC', 'E-mail do administrador do blog');
@define('INSTALL_SENDMAIL', 'Enviar e-mails ao administrador?');
@define('INSTALL_SENDMAIL_DESC', 'Você deseja receber notificações via e-mail quando novos comentários forem incluídos em seus artigos?');
@define('INSTALL_SUBSCRIBE', 'Allow users to subscribe?');
@define('INSTALL_SUBSCRIBE_DESC', 'Allow users to subscribe and thereby receive a mail when new content is published to that subscription');
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a a person wants to be notified via e-mail about new articles or new comments to the subscribed entries, he must confirm his subscription. This Double-Opt In is required by german law, for example.');
@define('INSTALL_SUBSCRIBE_CHUNK', 'Subscription message size');
@define('INSTALL_SUBSCRIBE_CHUNK_DESC', 'How much of the content will be included in the email');
@define('SUBSCRIPTION_MAIL_FORMAT', 'Mail format Hmtl for Subscriptions');
@define('SUBSCRIPTION_MAIL_FORMAT_DESC', 'Send mail to subscribers in multipart/alternative as Html or plain text');
@define('INSTALL_BLOGNAME', 'Nome do Blog');
@define('INSTALL_BLOGNAME_DESC', 'Título do seu Blog');
@define('INSTALL_BLOGDESC', 'Descrição do Blog');
@define('INSTALL_BLOGDESC_DESC', 'Descrição');
@define('INSTALL_BLOG_EMAIL', 'Endereços de e-mail do Blog');
@define('INSTALL_BLOG_EMAIL_DESC', 'Aqui é configurado o nome do usuário que será usado nos e-mails de saída. Tenha certeza que este e-mail é reconhecido pelo servidor - muitos servidores rejeitam o envio caso não conheçam quem está enviando.');
@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('INSTALL_LANG', 'Idioma');
@define('INSTALL_LANG_DESC', 'Selecione o idioma para o seu blog');
@define('INSTALL_CHARSET', 'Seleção do código de página');
@define('INSTALL_CHARSET_DESC', 'Aqui você pode escolher os códigos de página entre o UTF-8 ou nativo (ISO, EUC, ...). Algumas linguagens apenas possuem traduções em UTF-8 então a escolha por nativo não terá efeito. o UTF-8 é sugerido para novas instalações. Não faça alterações se você já fez entradas com caracteres especiais - eles podem aparecer corrompidos. Para saber mais acesse https://docs.s9y.org/docs/developers/internationalization.html.');
@define('INSTALL_CAL', 'Tipo de calendário');
@define('INSTALL_CAL_DESC', 'Escolha o formato do calendário desejado');
@define('AUTOLANG', 'Usar a linguagem padrão do navegador do visitante');
@define('AUTOLANG_DESC', 'Marcada esta opção ela irá ativar as configurações de linguagem apartir da linguagem padrão do navegador do visitante.');
@define('USERGROUPS_FORBIDDEN_ENABLE', 'Enable Plugin ACL for usergroups?');
@define('USERGROUPS_FORBIDDEN_ENABLE_DESC', 'If the option "Plugin ACL for usergroups" is enabled in the configuration, you can specify which usergroups are allowed to execute certain plugins/events.');
@define('UPDATE_NOTIFICATION', 'Update notification');
@define('UPDATE_NOTIFICATION_DESC', 'Show the update notification in the Dashboard, and for which channel?');
@define('LOG_LEVEL', 'Log Level');
@define('LOG_LEVEL_DESC', 'At certain places in the Serendipity code we have placed debugging breakpoints. If this option is set to "Debug", it will write this debug output to templates_c/logs/. You should only enable this option if you are experiencing bugs in those areas, or if you are a developer. Setting this option to "Error" will enable logging PHP errors, overwriting the PHP error_log setting.');
@define('USE_CACHE', 'Enable caching');
@define('USE_CACHE_DESC', 'Enables an internal cache to not repeat specific database queries. This reduces the load on servers with medium to high traffic and improves page load time.');
@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');
@define('UPDATE_STABLE', 'stable');
@define('UPDATE_BETA', 'beta');

/* APPEARANCE AND OPTIONS SETTINGS */
@define('INSTALL_CAT_DISPLAY', 'Aparência e opções');
@define('INSTALL_CAT_DISPLAY_DESC', 'Padroniza como o Serendipity é exibido');
@define('INSTALL_FETCHLIMIT', 'Entradas que serão mostradas na primeira página');
@define('INSTALL_FETCHLIMIT_DESC', 'Números de entradas para mostrar na primeira página');
@define('INSTALL_RSSFETCHLIMIT', 'Entries to display in Feeds');
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Number of entries to display for each page on the RSS Feed.');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');
@define('SYNDICATION_RFC2616', 'Activate strict RFC2616 RSS-Feed compliance');
@define('SYNDICATION_RFC2616_DESC', 'NOT Enforcing RFC2616 means that all Conditional GETs to Serendipity will return entries last modified since the time of the last request. With that setting to "false", your visitors will get all articles since their last request, which is considered a good thing. However, some Agents like Planet act weird, if that happens, at it also violates RFC2616. So if you set this option to "TRUE" you will comply with that RFC, but readers of your RSS feed might miss items in their holidays. So either way, either it hearts Aggregators like Planet, or it hurts actual readers of your blog. If you are facing complaints from either side, you can toggle this option. Reference: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('INSTALL_USEGZIP', 'Use páginas compactadas (gzip)');
@define('INSTALL_USEGZIP_DESC', 'Para que as páginas fiquem mais rápidas podemos compacta-las com gzip. Isso é recomendado, desde que o navegador do visitante suporte.');
@define('INSTALL_XHTML11', 'Forçar adequação ao XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Quer forçar uma adequação ao padrão XHTML 1.1 (pode causar problemas de exibição nos navegadores de 4ª geração (4.x))');
@define('INSTALL_POPUP', 'Habilitar o uso de janelas popups');
@define('INSTALL_POPUP_DESC', 'Você quer que o weblog utilize janelas popups para comentários, trackbacks e etc?');
@define('INSTALL_EMBED', 'O serendipity está integrado?');
@define('INSTALL_EMBED_DESC', 'Se você quer empacotar o serendipity em um website, mude para verdadeiro para descartar quaisquer cabeçalhos e apenas imprimir o conteúdo. Você pode fazer uso da opção \'Arquivo inicial\' para usar uma classe mais abrangente onde você colocaria os cabeçalhos normais de sua página. Veja o arquivo README para mais informações!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Tornar clicáveis os links externos?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"não": Links externos não marcados (Maiores saídas, Maiores referências, Comentários de usuários) não são exibidos como puro texto para evitar spam do google (recomendado). "sim": Links externos não marcados são exibidos como links. Podem ser sobrescritos pela configuração da barra lateral!');
@define('INSTALL_TRACKREF', 'Enable referrer tracking?');
@define('INSTALL_TRACKREF_DESC', 'Enabling the referrer tracking will show you which sites refer to your articles. Today this is often abused for spamming, so you can disable it if you want.');
@define('INSTALL_BLOCKREF', 'Referências bloqueadas');
@define('INSTALL_BLOCKREF_DESC', 'Existem servidores especiais que você não gostaria de listar na sua lista de referências? Separe a lista dos servidores com \';\' e note que o servidor será bloqueado por uma busca parcial em sua string!');
@define('INSTALL_REWRITE', 'Rescrita de URL');
@define('INSTALL_REWRITE_DESC', 'Selecione as regras que você gostaria de usar na geração de URLs. A habilitação da reescrita de URL criará URLS bem formatadas para o seu blog e o deixará melhor indexável para bots como o do google. O servidor web precisa dar suporte ou ao mod_rewrite ou ao "AllowOverride All" para o diretório do seu serendipity. A configuração padrão é auto detectada');
@define('INSTALL_OFFSET_ON_SERVER_TIME', 'Base offset on server timezone?');
@define('INSTALL_OFFSET_ON_SERVER_TIME_DESC', 'Offset entry times on server timezone or not. Select yes to base offset on server timezone and no to offset on GMT.');
@define('INSTALL_OFFSET', 'Offset temporal no servidor');
@define('INSTALL_OFFSET_DESC', 'Informe a diferença de horas entre a data do seu servidor (current: %clock%) e o fuso horário que deseja');
@define('INSTALL_SHOWFUTURE', 'Mostrar entradas futuras');
@define('INSTALL_SHOWFUTURE_DESC', 'Habilitando esta escolha, todas as entradas no blog serão mostradas. O padrão é ocultar estas entradas e só mostra-las na data de publicação.');
@define('INSTALL_ACL', 'Apply read-permissions for categories');
@define('INSTALL_ACL_DESC', 'If enabled, the usergroup permission settings you setup for categories will be applied when logged-in users view your blog. If disabled, the read-permissions of the categories are NOT applied, but the positive effect is a little speedup on your blog. So if you don\'t need multi-user read permissions for your blog, disable this setting.');

/* FEED SETTINGS */
@define('INSTALL_CAT_FEEDS', 'Feed Settings');
@define('INSTALL_CAT_FEEDS_DESC', 'Settings for the RSS feed');
@define('SYNDICATION_PLUGIN_FULLFEED', 'Mostrar artigos completos com corpo extendido dentro de um RSS');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Imagem para o RSS feed');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL de uma imagem no formato GIF/JPEG/PNG, se disponível. (vazio: logotipo do serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Largura da imagem');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'em pixels, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Altura da imagem');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'em pixels, max. 400');
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Mostrar o endereço de e-mail?');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Campo "managingEditor"');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-Mail do editor, se disponível. (vazio: oculto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_WEBMASTER', 'Campo "webMaster"');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC', 'E-Mail do webmaster, se disponível. (vazio: oculto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_TTL', 'Campo "ttl" (tempo de vida)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Quantidade de minutos depois do qual seu blog não deverá ser mais "cacheados" por sites/aplicações (vazio: oculto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Campo "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'O campo "pubDate" deve ser empacotado para o canal RSS, para mostrar a data do último artigo?');
@define('FEED_CUSTOM', 'Custom feed URL');
@define('FEED_CUSTOM_DESC', 'If set, a custom feed URL can be set to forward Feedreaders to a specific URL. Useful for statistical analyzers like Feedburner, in which case you would enter your Feedburner-URL here.');
@define('FEED_FORCE', 'Force custom feed URL?');
@define('FEED_FORCE_DESC', 'If enabled, the URL entered above will be mandatory for Feedreaders, and your usual feed cannot be accessed from clients.');

/* IMAGECONVERSION SETTINGS */
@define('INSTALL_CAT_IMAGECONV', 'Configurações da conversão de imagens');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Informações gerais sobre como o serendipity deve lidar com imagens');
@define('INSTALL_IMAGEMAGICK', 'Usar Imagemagick');
@define('INSTALL_IMAGEMAGICK_DESC', 'Você tem o \'image magick\' instalado e quer utilizá-lo para redimensionar imagens?');
@define('INSTALL_IMAGEMAGICKPATH', 'Caminho para o executável do conversor');
@define('INSTALL_IMAGEMAGICKPATH_DESC', 'Caminho completo e nome do executável do image magick');
@define('INSTALL_THUMBSUFFIX', 'Sufixo das miniaturas');
@define('INSTALL_THUMBSUFFIX_DESC', 'As miniaturas serão nomeadas com o seguinte formato: original.[sufixo].ext');
@define('INSTALL_THUMBWIDTH', 'Dimensão das miniaturas ');
@define('INSTALL_THUMBWIDTH_DESC', 'Largura máxima estática das miniaturas geradas automaticamente');
@define('INSTALL_THUMBDIM', 'Thumbnail constrained dimension');
@define('INSTALL_THUMBDIM_LARGEST', 'Largest');
@define('INSTALL_THUMBDIM_WIDTH', 'Width');
@define('INSTALL_THUMBDIM_HEIGHT', 'Height');
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . '" only limit the chosen dimension, so the other could be larger than the max size.');
@define('MEDIA_UPLOAD_SIZE', 'Max. file upload size');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Enter the maximum filesize for uploaded files in bytes. This setting can be overruled by server-side settings in PHP.ini: upload_max_filesize, post_max_size, max_input_time all take precedence over this option. An empty string means to only use the server-side limits.');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Max. width of image files for upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Enter the maximum image width in pixels for uploaded images.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Max. height of image files for upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Enter the maximum image height in pixels for uploaded images.');
@define('MEDIA_UPLOAD_RESIZE', 'Resize before Upload');
@define('MEDIA_UPLOAD_RESIZE_DESC', 'Resize images before the upload using Javascript. This will also change the uploader to use Ajax and thus remove the Property-Button');
@define('ONTHEFLYSYNCH', 'Enable on-the-fly media synchronization');
@define('ONTHEFLYSYNCH_DESC', 'If enabled, Serendipity will compare the media database with the files stored on your server and synchronize the database and directory contents.');
@define('MEDIA_DYN_RESIZE', 'Allow dynamic image resizing?');
@define('MEDIA_DYN_RESIZE_DESC', 'If enabled, the media selector can return images in any requested size via a GET variable. The results are cached, and thus can create a large filebase if you make intensive use of it.');
@define('MEDIA_EXIF', 'Import EXIF/JPEG image data');
@define('MEDIA_EXIF_DESC', 'If enabled, existing EXIF/JPEG metadata of images will be parsed and stored in the database for display in the media gallery.');
@define('MEDIA_PROP', 'Media properties');
@define('MEDIA_PROP_DESC', 'Enter a list of ";" separated property fields you want to define for each media file');
@define('MEDIA_PROP_MULTIDESC', '(You can append ":MULTI" after any item to indicate that this item will contain long text instead of just some characters)');
@define('MEDIA_KEYWORDS', 'Media keywords');
@define('MEDIA_KEYWORDS_DESC', 'Enter a list of ";" separated words that you want to use as pre-defined keywords for media items.');
@define('CONFIG_ALLOW_LOCAL_URL', 'Allow to fetch data from local URLs');
@define('CONFIG_ALLOW_LOCAL_URL_DESC', 'By default, it is forbidden due to security constrains to fetch data from local URLs to prevent Server Side Request Forgers (SSRF). If you use a local intranet, you can enable this option to allow fetching data.');

/* PERSONAL SETTINGS CONFIG_PERSONAL.TPL */
@define('USERCONF_CAT_PERSONAL', 'Detalhes pessoais');
@define('USERCONF_CAT_PERSONAL_DESC', 'Altere os seus detalhes pessoais');
@define('USERCONF_USERNAME', 'Seu nome de usuário');
@define('USERCONF_USERNAME_DESC', 'O nome de usuário que você usa para se identificar no blog');
@define('USERCONF_PASSWORD', 'Sua senha');
@define('USERCONF_PASSWORD_DESC', 'A senha que você quer usar para se identificar no blog');
@define('USERCONF_CHECK_PASSWORD', 'Old Password');
@define('USERCONF_CHECK_PASSWORD_DESC', 'If you change the password in the field above, you need to enter the current user password into this field.');
@define('USERCONF_USERLEVEL', 'Nível de acesso');
@define('USERCONF_USERLEVEL_DESC', 'Este nível será usado para determinar que tipo de acesso os usuários terão em seu blog');
@define('USERCONF_GROUPS', 'Inscrições de grupos');
@define('USERCONF_GROUPS_DESC', 'Este usuário pertence ao(s) seguintes grupos. É possível usar múltiplos usuários.');
@define('USERCONF_EMAIL', 'Seu endereço de e-mail');
@define('USERCONF_EMAIL_DESC', 'Seu endereço de e-mail pessoal');
@define('INSTALL_WYSIWYG', 'Usar editor WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Você quer usar o editor WYSIWYG? (Funciona no IE5+ e parcialmente no Mozilla 1.3+)');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR', 'Toolbar for WYSIWYG editor');
@define('USERCONF_USE_CORE_WYSIWYG_TOOLBAR_DESC', 'Sets the list of available toolbar buttons for the WYSIWYG-Editor. If you need to further change those presets, you can create a file templates/XXX/admin/ckeditor_custom_config.js. For further details please check out the files htmlarea/ckeditor_s9y_config.js and htmlarea/ckeditor_s9y_plugin.js.');
@define('USERCONF_WYSIWYG_PRESET_S9Y', 'Serendipity (default)');
@define('USERCONF_WYSIWYG_PRESET_BASIC', 'Reduced');
@define('USERCONF_WYSIWYG_PRESET_FULL', 'Full');
@define('USERCONF_WYSIWYG_PRESET_STANDARD', 'Alternate');
@define('USERCONF_WYSIWYG_PRESET_CKE', 'CKEditor Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_S9Y', 'Force: Serendipity');
@define('USERCONF_WYSIWYG_PRESET_NOCC_BASIC', 'Force: Reduced');
@define('USERCONF_WYSIWYG_PRESET_NOCC_FULL', 'Force: Full');
@define('USERCONF_WYSIWYG_PRESET_NOCC_STANDARD', 'Force: Alternate');
@define('USERCONF_WYSIWYG_PRESET_NOCC_CKE', 'Force: CKEditor Full');
@define('USERCONF_SENDCOMMENTS', 'Enviar notificação dos comentários?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Quer receber e-mails quando comentários forem enviados para os seus artigos?');
@define('USERCONF_SENDTRACKBACKS', 'Enviar notificação de trackbacks?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Quer receber e-mails quando trackbacks forem enviados para os seus artigos?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('USERCONF_ALLOWPUBLISH', 'Direitos: Publicação de artigos?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Este usuário está autorizado a publicar artigos?');
@define('SIMPLE_FILTERS', 'Simplified filters');
@define('SIMPLE_FILTERS_DESC', 'When enabled, search forms and filter functions are reduced to essential options. When disabled, you will see every possible filter option, i.e. in the media library or the entry editor.');
@define('INSTALL_BACKENDPOPUP', 'Enable use of popup windows for the backend');
@define('INSTALL_BACKENDPOPUP_DESC', 'Do you want to use popup windows for some backend functionality? When disabled (default), inline modal dialogs will be used for e.g. the category selector and media library.');
@define('INSTALL_BACKENDPOPUP_GRANULAR', 'Force specific backend popups');
@define('INSTALL_BACKENDPOPUP_GRANULAR_DESC', 'If you generally disable backend popups, you can specifically force using popups for specific places by entering a comma seperated list of places here. Available places are: ');
@define('SHOW_MEDIA_TOOLBAR', 'Show toolbar within media selector popup?');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Configuração padrão para novas entradas');
@define('CONF_USE_AUTOSAVE', 'Enable autosave-feature');
@define('CONF_USE_AUTOSAVE_DESC', 'When enabled, the text you enter into blog entries will be periodically saved in your browser\'s session storage. If your browser crashes during writing, the next time you create a new entry, the text will be restored from this autosave.');
@define('USERLEVEL_OBSOLETE', 'NOTÍCIA: Os atributos de permissões e autorização dos usuários estão sendo usados apenas por motivo de compatibilidade com os plugins. Os privilégios, a partir de agora, são geridos através das permissões dos grupos!');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'You did not specify the right old password, and are not authorized to change the new password. Your settings were not saved.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'The username cannot be left blank.');

/* PERMISSIONS - generated dynamically! */
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Acesso as configurações pessoais');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Trocar níveis de usuários');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Trocar "entradas proibidas"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Trocar direitos de publicação das entradas');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Acesso a configuração do sistema');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Acesso a configuração do blog-centric');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrar entradas');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Adminitrar outras entradas de usuários');
@define('PERMISSION_ADMINSUBSCRIPTIONS', 'adminSubscriptions: Delete subscriptions');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Importar entradas');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrar categorias');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrar categorias de outros usuários');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Apagar categorias');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrar usuários');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Apagar usuários');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Mudar nível de usuário');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrar usuários(s) que estão em seu(s) grupo(s)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrar usuários que não estão no(s) seu(s) grupo(s)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Criar novos usuários');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrar grupos de usuários');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrar plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrar plugins de usuários ');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrar arquivos multimídia');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrar pastas de arquivos multimídia');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Adicionar novos arquivos multimídia');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Apagar arquivos multimídia');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrar outros arquivos multimídia de usuário(s)');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Ver arquivos multimídia');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Syncronizar miniaturas');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrar comentários');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrar modelos');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Visualizar arquivos multimídia de outros usuários');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Forbidden plugins');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Forbidden events');
@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

/* PREVIEW_IFRAME.TPL */
@define('ENTRY_SAVED', 'Artigo salvo');

/* ENTRIES.TPL */
@define('COMMENTS_VIEWMODE_THREADED', 'Discussão');
@define('COMMENTS_VIEWMODE_LINEAR', 'Seqüencial');
@define('DISPLAY_COMMENTS_AS', 'Exibir comentários como');
@define('COMMENTS_DISABLE', 'Não se permite comentários para este artigo');
@define('COMMENTS_ENABLE', 'Comentários para este artigo são permitidos');
@define('COMMENTS_CLOSED', 'O autor não autorizou comentários para este artigo');
@define('VIEW_EXTENDED_ENTRY', 'Continuar lendo "%s"');
@define('TRACKBACK_SPECIFIC', 'URI específica do trackback para este artigo');

/* ENTRIES_ARCHIVES.TPL */
@define('VIEW_FULL', 'ver tudo');
@define('VIEW_TOPICS', 'ver tópicos');

/* ENTRIES_SUMMARY.TPL */
@define('TOPICS_OF', 'Tópicos de');

/* FUNCTIONS_ENTRIES */
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Artigos não adicionados!');

/* COMMENTFORM.TPL */
@define('REMEMBER_INFO', 'Relembrar Informações? ');
@define('SUBMIT_COMMENT', 'Enviar Comentário');
@define('SUBSCRIBE_COMMENT', 'Subscribe comments');
@define('SUBSCRIBE_COMMENT_BLAHBLAH', 'You can also subscribe to new comments without writing one. Please enter your email address down below.');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Inscrever-se para este artigo');

/* FUNCTIONS_CONFIG */
@define('ERROR_XSRF', 'Your browser did not sent a valid HTTP-Referrer string. This may have either been caused by a misconfigured browser/proxy or by a Cross Site Request Forgery (XSRF) aimed at you. The action you requested could not be completed.');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');

/* FUNCTIONS_COMMENTS */
@define('COMMENT_ALREADY_APPROVED', 'Comentário #%s parece já ter sido aprovado');
@define('COMMENT_EDITED', 'O comentário selecionado foi editado');
@define('COMMENTS_WILL_BE_MODERATED', 'Comentários enviados estarão sujeitos a moderação antes de serem exibidos.');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Atenção: Esse comentário precisa de aprovação antes que seja exibido');
@define('DELETE_COMMENT', 'Excluir comentário');
@define('APPROVE_COMMENT', 'Aprovar comentário');
@define('REQUIRES_REVIEW', 'Requer revisão');
@define('COMMENT_APPROVED', 'Comentário #%s foi aprovado corretamente');
@define('COMMENT_DELETED', 'Comentário #%s foi excluído corretamente');
@define('COMMENTS_MODERATE', 'Comentários & trackbacks para este artigo requerem moderação');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Atenção: Esse trackback precisa de aprovação antes que seja exibido');
@define('DELETE_TRACKBACK', 'Excluir trackback');
@define('APPROVE_TRACKBACK', 'Aprovar trackback');
@define('TRACKBACK_APPROVED', 'O trackback #%s foi aprovado corretamente');
@define('TRACKBACK_DELETED', 'O trackback #%s foi excluído corretamente');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link');
@define('TOP_LEVEL', 'Nível máximo');
@define('VIEW_COMMENT', 'Exibir comentário');
@define('VIEW_ENTRY', 'Exibir artigo');
@define('LINK_TO_ENTRY', 'Link para o artigo');
@define('LINK_TO_REMOTE_ENTRY', 'Link para artigo remoto');

/* FUNCTIONS_TRACKBACKS */
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('TRACKBACK_SENDING', 'Enviando trackback para a URI %s...');
@define('TRACKBACK_SENT', 'Trackback enviada com sucesso');
@define('TRACKBACK_FAILED', 'Trackback falhou: %s');
@define('TRACKBACK_NOT_FOUND', 'Nenhum URI de trackback foi encontrado.');
@define('TRACKBACK_URI_MISMATCH', 'A URI de trackback descoberta não com é semelhante à URI alvo.');
@define('TRACKBACK_CHECKING', 'Checando <u>%s</u> por possíveis trackbacks...');
@define('TRACKBACK_NO_DATA', 'O alvo não contém dados');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Nenhum trackback enviado: Não foi possível abrir conexão para %s na porta %d');

/* FUNCTIONS_SUBSCRIPTIONS */
@define('MAILTO_SUBSCRIBERS', 'Sending emails to % subscribers ...');
@define('MAILTO_SUBSCRIBERS_SUCCESS', 'Emails sent');

/* EMAIL TEMPLATES */
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_TITLE', 'Email Subscription to new articles of "%s" ');
@define('CONFIRMATION_MAIL_BLOGSUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for new articles to the blog \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('SUBSCRIPTION_MAIL_INTRO', 'In the blog %s a new article was posted:');
@define('SUBSCRIPTION_MAIL_OUTRO', 'You get this email because you have subscribed to receive new articles of the blog %s. To unsubscribe, click here.');
@define('SUBSCRIPTION_NEW_ARTICLE', 'New article');
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Novo comentário para o artigo inscrita"%s"');
@define('SUBSCRIPTION_MAIL', "Oi %s,\n\nUm novo comentário foi feito num artigo que você está monitorando em \"%s\", intitulada \"%s\"\nQuem enviou o comentário foi: %s\n\nO artigo à qual nos referimos pode ser encontrada em: %s\n\nVocê pode cancelar sua inscrição clicando neste link: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Oi %s,\n\nUm novo trackback foi adicionado num artigo que você está monitorando em \"%s\", intitulada \"%s\"\nQuem enviou o comentário foi: %s\n\nO artigo à qual nos referimos pode ser encontrada em: %s\n\nVocê pode cancelar sua inscrição clicando neste link: %s\n");
@define('SIGNATURE', "\n-- \n%s faz uso do Serendipity.\nO melhor Blog que tem por aí, e você também pode usá-lo.\nDê uma olhada em <https://s9y.org> para descobrir como.");
@define('SIGNATURE_HTML', "<hr><p>%s is powered by Serendipity.<br>The best blog around, you can use it too.<br>Check out <a href='https://s9y.org'>s9y.org</a> to find out how.</p>");
@define('A_NEW_COMMENT_BLAHBLAH', 'Um novo comentário foi enviado para o seu Blog "%s", no artigo intitulada como "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Um novo trackback foi feito para o seu Blog "%s", no artigo intitulada como "%s".');
@define('YOU_HAVE_THESE_OPTIONS', 'Você possui as seguintes opções disponíveis');
@define('NEW_TRACKBACK_TO', 'Novo trackback feito para');
@define('NEW_COMMENT_TO', 'Novo comentário enviado para');

/* ROUTING */
@define('URL_NOT_FOUND', 'The requested page could not be found (404). This is the default page.');


/* GENPAGE */
@define('NO_ENTRIES_BLAHBLAH', 'Nenhum artigo encontrada para a consulta %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'Sua busca para %s retornou %s resultados:');
@define('SEARCH_TOO_SHORT', 'Sua pesquisa precisa ter mais de três caracteres. Você pode tentar usar * quando for pesquisar com poucas letras, por exemplo: s9y* para enganar a pesquisa.');
@define('SEARCH_ERROR', 'A função de pesquisa não funcionou como esperado. Informação ao administrador deste blog: isso pode ocorrer em função da falta de um índice na base de dados. No MySQL a conta do usuário precisa de privilégios para executar o comando: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> O erro específico que a base de dados retornou foi: <pre>%s</pre>');

/* SERVE ENTRY */
@define('EMPTY_COMMENT', 'Seu comentário está vazio, por favor, %svolte%s e tente novamente');
@define('COMMENT_NOT_ADDED', 'Seus comentários não foram adicionados, porque comentários para este artigo foram desabilitadas. ');

/* SERVE COMMENTS*/
@define('COMMENTS_FROM', 'Comentários de');

/* SERVE COMMENT EMAIL CONFIRM */
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');

/* SERVE OPTIN */
@define('NOTIFICATION_OPTIN_FAIL', 'Your subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');

/* SERVE UNSUBSCRIBE */
@define('NOTIFICATION_UNSUBSCRIBE_CONFIRM', "Your subscription to \"%s\" is successfully deleted. You won't get informed about new articles.");
@define('NOTIFICATION_UNSUBSCRIBE_FAIL', 'Your subscription for the email %s cannot be deleted. Please check the link you clicked on for completion.');
@define('NOTIFICATION_UNSUBSCRIBE_ENTRY_CONFIRM', "Your subscription to \"%s\" for the email %s is successfully deleted. You won't get informed about new comments.");
@define('NOTIFICATION_UNSUBSCRIBE_BAD_TOKEN', 'Your subscription cannot be deleted. Please check the link you clicked on for completion.');

/* SERVE SUBSCRIBE */
@define('NOTIFICATION_OPTINMAIL_SENT', 'Your request for a blog subscription is recieved. An email will be sent to %s to approve this subscription ("Double Opt In") with a link to confirm your email address.');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM', 'The subscription to "%s" is received. A summary of a new article will be sent to you. You can unsubscribe with a link included in every mail.');
@define('NOTIFICATION_SUBSCRIBE_DUPE', 'Your subscription failed because there is already an active subscription for "%s".');
@define('NOTIFICATION_SUBSCRIBE_CONFIRM_FAIL', 'Your subscription failed. Please check your email address.');
@define('BLOG_SUBSCRIPTION_TITLE', 'Email Subscription of new articles');
@define('BLOG_SUBSCRIPTION_BLAHBLAH', 'To get informed of new articles, enter your email address here.');
@define('BLOG_SUBSCRIPTION_AUTHOR', "To get informed of new articles from \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_CATEGORY', "To get informed of new articles in the category \"%s\", enter your email address here.");
@define('BLOG_SUBSCRIPTION_OPTIN', 'An email with an confirmation link will be sent to this address, click on the link to confirm your subscription.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_AUTHOR', 'To get informed of new articles from "%s", enter your email address here.');
@define('BLOG_SUBSCRIPTION_BLAHBLAH_CATEGORY', 'To get informed of new articles in the category "%s", enter your email address here.');

/* PLUGIN_API */
@define('PLUGIN_API_VALIDATE_ERROR', 'Configuration syntax wrong for option "%s". Needs content of type "%s".');

/* PLUGIN CATEGORIES */
@define('CATEGORY_PLUGIN_DESC', 'Exibe a lista de categorias.');
@define('CATEGORIES_PARENT_BASE', 'Mostre apenas as categorias abaixo...');
@define('CATEGORIES_PARENT_BASE_DESC', 'você pode escolher uma categoria "pai" de forma que apenas as categorias "filhas" sejam mostradas.');
@define('CATEGORIES_HIDE_PARALLEL', 'Esconder categorias que não fazem parte da árvore de categorias');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Se você quer esconder categorias que são partes diferentes da árvore de categorias, você deve habilitar isso. Esta escolha faz mais sentido se você usar junto com a opção "multi-blog" no "Propriedades/Categorias de modelos"');
@define('CATEGORIES_HIDE_PARENT', 'Hide the selected parent category?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'If you restrict the listing of categories to a specific category, by default you will see that parent category within the output listing. If you disable this option, the parent category name will not be displayed.');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Enable Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'If this option is enabled, the plugin will utilize Smarty-Templating features to output the category listing. If you enable this, you can change the layout via the "plugin_categories.tpl" template file. Enabling this option will impact performance, so if you do not need to make customizations, leave it disabled.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Show number of entries per category?');
@define('CATEGORY_PLUGIN_SHOWALL', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORY_PLUGIN_SHOWALL_DESC', 'If enabled, a link for the visitor to display the blog with no category restriction will be added.');
@define('CATEGORIES_ALLOW_SELECT', 'Permite aos visitantes mostrar múltiplas categorias ao mesmo tempo?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Se esta opção estiver ativa, uma caixa de seleção srá mostrada ao lado de cada categoria na barra lateral dos plugins. Os usuários podem marcar estas caixas de seleção e ver as entradas pertencentes a cada uma.');
@define('CATEGORIES_TO_FETCH', 'Categorias para trazer');
@define('CATEGORIES_TO_FETCH_DESC', 'Trazer categorias de qual autor?');

/* PLUGIN_AUTHORS */
@define('AUTHOR_PLUGIN_DESC', 'Shows a list of authors');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Show number of articles next to author name?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'If this option is enabled, the number of articles by this author is shown next to the authors name in parentheses.');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Show only authors with at least X articles');

/* PLUGIN SYNDICATION */
@define('SYNDICATION', 'Sindicalização');
@define('SHOWS_RSS_BLAHBLAH', 'Shows RSS syndication links');
@define('SYNDICATE_THIS_BLOG', 'Subscribe');
@define('SYNDICATION_PLUGIN_FEEDFORMAT', 'Feed format');
@define('SYNDICATION_PLUGIN_FEEDFORMAT_DESC', 'Which format shall be used for all feeds. Both are supported in all common readers');
@define('SYNDICATION_PLUGIN_COMMENTFEED', 'Comment feed');
@define('SYNDICATION_PLUGIN_COMMENTFEED_DESC', 'Show an additional link to a comment feed. This should be interesting only to the blogauthor itself');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 comments');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_FEEDICON', 'Feed icon');
@define('SYNDICATION_PLUGIN_FEEDICON_DESC', 'Show a (big) icon insteaf of a textlink to the feed. Set to "none" to deactivate, or to "feedburner" to show a feedburner counter if an id is given below');
@define('SYNDICATION_PLUGIN_SUBTOME', 'subToMe');
@define('SYNDICATION_PLUGIN_SUBTOME_DESC', 'Show the subToMe button, a layer to make feed subscription easier');
@define('SYNDICATION_PLUGIN_CUSTOMURL', 'Custom URL');
@define('SYNDICATION_PLUGIN_CUSTOMURL_DESC', 'If you want to link to the custom feed specified in the blog configuration, enable this option.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'FeedBurner ID');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'O ID do "feed" que você deseja publicar');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'FeedBurner image');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nome da imagem para mostrar (ou deixe em branco), localizado em feedburner.com, ex: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Título do FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Título (se tiver) para mostrar ao lado da imagem');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'imagem texto FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Texto (se tiver) para mostrar pairando sobre a imagem');
@define('SYNDICATION_PLUGIN_XML_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_SUBSCRIBE */
@define('PLUGIN_SUBSCRIBE_NAME', 'Blog subscription with email');
@define('PLUGIN_SUBSCRIBE_DESC', 'Allows an user to subscribe to the blog. He will receive an email if new articles are published with the option to unsubscribe');
@define('PLUGIN_SUBSCRIBE_TITLE', 'Title');
@define('PLUGIN_SUBSCRIBE_TITLE_DESC', 'Enter the sidebar title to display:');
@define('PLUGIN_SUBSCRIBE_TITLE_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_LINK', 'Linktext');
@define('PLUGIN_SUBSCRIBE_LINK_DESC', 'which text should be shown in the subscribe link?');
@define('PLUGIN_SUBSCRIBE_LINK_DEFAULT', 'Email subscription');
@define('PLUGIN_SUBSCRIBE_IMAGE_TO_DISPLAY', 'Subscribe Button');
@define('PLUGIN_SUBSCRIBE_IMAGE_DESC', 'Set to "none" if you only want to show a text link.');

/* PLUGIN_ARCHIVES */
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('ARCHIVE_COUNT', 'Número de ítens na lista');
@define('ARCHIVE_COUNT_DESC', 'Número total de meses, semanas e dias para mostrar');
@define('ARCHIVE_FREQUENCY', 'Frequência do ítem do calendário');
@define('ARCHIVE_FREQUENCY_DESC', 'Intervalo do calendário para ser usado entre cada ítem da lista');
@define('BROWSE_ARCHIVES', 'Navegar nos arquivos por mês');

/* PLUGIN_PLUG */
@define('POWERED_BY_SHOW_TEXT', 'Exibir "Serendipity" como texto');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Exibirá o "Serendipity Weblog" como texto');
@define('POWERED_BY_SHOW_IMAGE', 'Exibir "Serendipity" como um logotipo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Exibe o logotipo do Serendipity');
@define('ADVERTISES_BLAHBLAH', 'Adverte da origem do seu blog');

/* PLUGIN_SUPERUSER */
@define('PLUGIN_SUPERUSER_HTTPS', 'Usar https para login');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Permitir o link de login aponte para uma link https. seu servidor web precisa ter suporte a isso!');
@define('SUPERUSER', 'Administração do weblog');
@define('SUPERUSER_OPEN_ADMIN', 'Abrir administração');
@define('SUPERUSER_OPEN_LOGIN', 'Abrir tela de login');
@define('ALLOWS_YOU_BLAHBLAH', 'Provê um link para a administração do weblog na barra lateral ');

/* PLUGIN_CALENDAR */
@define('CALENDAR', 'Calendário');
@define('CALENDAR_BOW_DESC', 'Dia da semana que deve ser considerado o início da semana. Padrão é segunda-feira');
@define('QUICKJUMP_CALENDAR', 'Calendário de acesso rápido');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Começo da semana');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Enable Plugin API hook');
@define('CALENDAR_EXTEVENT_DESC', 'If enabled, plugins can hook into the calendar to display their own events highlighted. Only enable if you have installed plugins that need this, otherwise it just decreases performance.');

/* PLUGIN_QUICKSEARCH */
@define('SEARCH_FOR_ENTRY', 'Procure por um artigo');
@define('SEARCH_FULLENTRY', 'Show full entry');

/* PLUGIN_HTML_NUGGET */
@define('HOLDS_A_BLAHBLAH', 'Apresenta um fragmento de HTML à sua barra lateral');
@define('THE_NUGGET', 'Fragmento de HTML!');
@define('BACKEND_TITLE', 'Informações adicionais da tela de configuração de plugins');
@define('BACKEND_TITLE_FOR_NUGGET', 'Aqui você pode definir um texto personalizado que aparecerá na tela de configuração de plugin, junto com a descrição de HTML do plugin Nuggets. Se você possui múltiplos HTML nuggets com nome em branco, isto irá ajudar a separar uns dos outros.');

/* ORPHANED CONSTANTS */
@define('INSTALL_TOP_AS_LINKS', 'Exibir maiores saídas/referências como links?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"não": Saídas e Referências são exibidas como puro texto para prevenir spam do google. "sim": Saídas e Referências são exibidas como links. "padrão": Usa o valor definido na configuração global (recomendado).');
@define('HAVE_TO_BE_LOGGED_ON', 'Você deve entrar no sistema para ver esta página');
@define('WELCOME_TO_ADMIN', 'Bem vindo a suite de administração do Serendipity.');
@define('SERENDIPITY_PHPVERSION_FAIL', 'Serendipity requires a PHP version >= %2$s - you are running a lower version (%1$s) and need to upgrade your PHP version. Most providers offer you to switch to newer PHP versions through their admin panels or .htaccess directives.');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file. Set to "none" to show a textlink (the old default)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('MEDIA_PROPERTY_COMMENT1', 'Short Comment');
@define('MEDIA_PROPERTY_COMMENT2', 'Long Comment');
@define('DELETE_SELECTED_ENTRIES', 'Delete selected entries');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');
@define('MEDIA_PROPERTY_DPI', 'DPI');
@define('MEDIA_PROPERTY_TITLE', 'Title');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity ainda não está instalado. Por favor <a href="%s">instale-o</a> agora.');
@define('COMMENT_ADDED_CLICK', 'Clique %saqui para retornar%s aos comentários, ou %saqui para fechar%s esta janela.');
@define('COMMENT_NOT_ADDED_CLICK', 'Clique %saqui para retornar %s aos comentários, ou %saqui para fechar%s esta janela.');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Run-Length');
@define('MEDIA_PROPERTY_DATE', 'Associated Date');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moved the URL of the moved directory in %s entries.');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'On Non-MySQL databases, iterating through every article to replace the old directory URLs with new directory URLs is not possible. You will need to manually edit your entries to fix new URLs. You can still move your old directory back to where it was, if that is too cumbersome for you.');
@define('TRACKBACK_SIZE', 'URI alvo excedeu o tamanho máximo de %s bytes para um arquivo.');
@define('CLICK_FILE_TO_INSERT', 'Clique no arquivo que deseja inserir:');
@define('SELECT_FILE', 'Selecione arquivo para inserir');
@define('MANAGE_IMAGES', 'Gerenciar imagens');
@define('WORD_NEW', 'New');
@define('WORD_OR', 'Ou');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Página inicial: serviços externos');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Página inicial: características');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Página inicial: modificações "Mods"');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Página inicial: Visões');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Página inicial: relação de entradas');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Página posterior: editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Página posterior: gerenciamento de usuário');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Página posterior: meta informação');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Página posterior: modelos');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Página posterior:características');
@define('PLUGIN_GROUP_IMAGES', 'Imagens');
@define('PLUGIN_GROUP_ANTISPAM', 'Antispam');
@define('PLUGIN_GROUP_MARKUP', 'Marcação');
@define('PLUGIN_GROUP_STATISTICS', 'Estatísticas');
@define('IMPORT_WELCOME', 'Bem vindo ao utilitário de importação do Serendipity');
@define('USER_SELF_INFO', 'Conectado como %s (%s)');
@define('IMPORT_WHAT_CAN', 'Aqui você pode importar dados de outros aplicativos de weblog');
@define('IMPORT_SELECT', 'Selecione o software do qual está importando');
@define('MANAGE_STYLES', 'Gerenciar estilos');
@define('SELECT_A_PLUGIN_TO_ADD', 'Selecione o plugin que você deseja instalar');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Abaixo a lista dos plugins instalados');
@define('PENDING_CONFIRMATION', 'Pending confirmation');
@define('PENDING_MODERATION', 'Pending moderation');
@define('ABORT_NOW', 'Cancelar agora');
@define('DELETE_SELECTED_COMMENTS', 'Excluir comentários selecionados');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('FIND_MEDIA', 'Encontrar mídia');
@define('TEMPLATE_OPTIONS', 'Template options');
@define('BULKMOVE_INFO', 'Bulk-move info');
@define('BULKMOVE_INFO_DESC', 'You can select multiple files to bulk-move them to a new location. <strong>Note:</strong> This action cannot be undone, just like bulk-deletion of multiple files. All checked files will be physically moved, and referring blog entries are rewritten to point to the new location.');
@define('UPDATE_ALL', 'Update All');
@define('START_UPDATE', 'Starting Update ...');
@define('ERROR_FILE_NOT_EXISTS', 'Erro: O nome de arquivo antigo não existe!');
@define('ERROR_SOMETHING', 'Erro: Problema desconhecido.');
@define('DIRECT_LINK', 'Link direto para este artigo');
@define('SELECT_TEMPLATE', 'Selecione o modelo desejado para o seu Blog');
@define('DATABASE_ERROR', 'erro do serendipity: não foi possível conectar ao banco de dados - abortando.');
@define('LIMIT_TO_NUMBER', 'Quantos itens devem ser exibidos?');
@define('DIRECTORIES_AVAILABLE', 'Na lista de subdiretórios disponíveis você pode clicar em qualquer nome de diretório para criar um novo diretório dentro daquela estrutura.');
@define('CATEGORY_INDEX', 'Abaixo, a lista de categorias disponíveis das suas entradas');
@define('PAGE_BROWSE_PLUGINS', 'Paginas %s de %s, totalizando %s plugins.');
@define('CHARSET_NATIVE', 'Código de página nativo');
@define('XMLRPC_NO_LONGER_BUNDLED', 'The XML-RPC API Interface to Serendipity is no longer bundled because of ongoing security issues with this API and not many people using it. Thus you need to install the XML-RPC Plugin to use the XML-RPC API. The URL to use in your applications will NOT change - as soon as you have installed the plugin, you will again be able to use the API.');
@define('AUTHORS_ALLOW_SELECT', 'Allow visitors to display multiple authors at once?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'If this option is enabled, a checkbox will be put next to each author in this sidebar plugin.  Users can check those boxes and see entries matching their selection.');
@define('PREFERENCE_USE_JS', 'Enable advanced JS usage?');
@define('PREFERENCE_USE_JS_DESC', 'If enabled, advanced JavaScript sections will be enabled for better usability, like in the Plugin Configuration section you can use drag and drop for re-ordering plugins.');
@define('PREFERENCE_USE_JS_WARNING', '(This page uses advanced JavaScripting. If you are having functionality issues, please disable the use of advanced JS usage in your personal preferences or disable your browser\'s JavaScript)');
@define('PLUGIN_GROUP_ALL', 'All categories');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
