<?php # $Id:$
# Copyright (c) 2003-2005, Jannis Hermanns (on behalf the Serendipity Developer Team)
# All rights reserved.  See LICENSE file for licensing details
# Translation for european portuguese (c) by J P Matos <jmatos@math.ist.utl.pt>
# based on work (c) by Ranulfo Netto <rcnetto@yahoo.com>
# and compairison with the work (c) by Agner Olson <agner@agner.net>
# and even more work from Angel pticore@users.sourceforge.net
/* vim: set sts=4 ts=4 expandtab : */

@define('LANG_CHARSET', 'ISO-8859-1');
@define('SQL_CHARSET', 'latin1');
@define('DATE_LOCALES', 'pt_PT.ISO-8859-1, pt_PT.ISO8859-1, pt, pt_PT, european portuguese');
@define('DATE_FORMAT_ENTRY', '%A, %e de %B de %Y');
@define('DATE_FORMAT_SHORT', '%Y-%m-%d %H:%M');
@define('WYSIWYG_LANG', 'pt_pt');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('LANG_DIRECTION', 'ltr');

@define('SERENDIPITY_ADMIN_SUITE', 'Painel de Administração do Serendipity');
@define('HAVE_TO_BE_LOGGED_ON', 'Tem que efectuar login no sistema para visualizar esta página');
@define('WRONG_USERNAME_OR_PASSWORD', 'Deve ter fornecido um nome de utilizador, senha ou dados inválidos');
@define('APPEARANCE', 'Aparência');
@define('MANAGE_STYLES', 'Gerir estilos');
@define('CONFIGURE_PLUGINS', 'Configurar Plugins');
@define('CONFIGURATION', 'Configuração');
@define('BACK_TO_BLOG', 'Regressar ao Weblog');
@define('LOGIN', 'Login'); //
@define('LOGOUT', 'Sair'); // Verify
@define('LOGGEDOUT', 'Saída completada.'); // Verify
@define('CREATE', 'Criar');
@define('SAVE', 'Guardar');
@define('NAME', 'Nome');
@define('CREATE_NEW_CAT', 'Criar uma nova categoria');
@define('I_WANT_THUMB', 'Quero usar miniaturas no meu artigo.');
@define('I_WANT_BIG_IMAGE', 'Quero usar a maior imagem no meu artigo.');
@define('I_WANT_NO_LINK', ' Quero mostrá-la como imagem');
@define('I_WANT_IT_TO_LINK', 'Quero mostrá-la como uma ligação para este URL:');
@define('BACK', 'Volta');
@define('FORWARD', 'Encaminhar');
@define('ANONYMOUS', 'Anónimo');
@define('NEW_TRACKBACK_TO', 'Novo trackback feito para');
@define('NEW_COMMENT_TO', 'Novo comentário enviado para');
@define('RECENT', 'Recentes...');
@define('OLDER', 'Mais antigos...');
@define('DONE', 'Pronto');
@define('WELCOME_BACK', 'Bem vindo de volta,');
@define('TITLE', 'Título');
@define('DESCRIPTION', 'Descrição');
@define('PLACEMENT', 'Localização');
@define('DELETE', 'Apagar');
@define('SAVE', 'Guardar');
@define('UP', 'Para cima');
@define('DOWN', 'Para baixo');
@define('ENTRIES', 'Artigos:');
@define('NEW_ENTRY', 'Novo artigo');
@define('EDIT_ENTRIES', 'Editar artigos');
@define('CATEGORIES', 'Categorias');
@define('WARNING_THIS_BLAHBLAH', "ATENÇÃO:\\nIsso pode demorar muito tempo se existirem muitas imagens sem miniaturas.");
@define('CREATE_THUMBS', 'Reconstruir miniaturas');
@define('MANAGE_IMAGES', 'Gerir imagens');
@define('NAME', 'Nome');
@define('EMAIL', 'E-mail');
@define('HOMEPAGE', 'Página pessoal');
@define('COMMENT', 'Comentário');
@define('REMEMBER_INFO', 'Relembrar Informações? ');
@define('SUBMIT_COMMENT', 'Enviar Comentário');
@define('NO_ENTRIES_TO_PRINT', 'Nenhum artigo para imprimir');
@define('COMMENTS', 'Comentários');
@define('ADD_COMMENT', 'Adicionar Comentários');
@define('NO_COMMENTS', 'Nenhum comentário');
@define('POSTED_BY', 'Publicado por');
@define('ON', 'em');
@define('A_NEW_COMMENT_BLAHBLAH', 'Um novo comentário foi enviado para o seu Blog "%s", no artigo entitulado "%s".');
@define('A_NEW_TRACKBACK_BLAHBLAH', 'Um novo trackback foi feito para o seu Blog "%s", no artigo entitulado "%s".');
@define('NO_CATEGORY', 'Sem categoria');
@define('ENTRY_BODY', 'Corpo do artigo');
@define('EXTENDED_BODY', 'Extensão do corpo do artigo');
@define('CATEGORY', 'Categoria:');
@define('EDIT', 'Editar');
@define('NO_ENTRIES_BLAHBLAH', 'Nenhum artigo encontrado para a consulta %s' . "\n");
@define('YOUR_SEARCH_RETURNED_BLAHBLAH', 'A sua busca de %s obteve %s resultados:');
@define('IMAGE', 'Imagem');
@define('ERROR_FILE_NOT_EXISTS', 'Erro: O nome de ficheiro antigo não existe!');
@define('ERROR_FILE_EXISTS', 'Erro: O novo nome de ficheiro já existe, escolha outro!');
@define('ERROR_SOMETHING', 'Erro: Problema desconhecido.');
@define('ADDING_IMAGE', 'Adicionando imagem...');
@define('THUMB_CREATED_DONE', 'Miniatura criada.<br/>Pronto.');
@define('ERROR_FILE_EXISTS_ALREADY', 'Erro: O ficheiro já existe no seu servidor!');
@define('GO', 'Vamos!');
@define('NEWSIZE', 'Novo tamanho: ');
@define('RESIZE_BLAHBLAH', '<b>Redimensionar %s</b>');
@define('ORIGINAL_SIZE', 'Tamanho original: <i>%sx%s</i> pixéis');
@define('HERE_YOU_CAN_ENTER_BLAHBLAH', '<p>Aqui pode ajustar o novo tamanho das suas imagens. Se pretender manter as proporções, preencha apenas um valor e pressione a tecla TAB de maneira a ser automaticamente calculado o novo tamanho de modo às proporções não ficarem erradas:');
@define('QUICKJUMP_CALENDAR', 'Calendário de acesso rápido');
@define('QUICKSEARCH', 'Pesquisa rápida');
@define('SEARCH_FOR_ENTRY', 'Procure um artigo');
@define('ARCHIVES', 'Arquivos');
@define('BROWSE_ARCHIVES', 'Navegar nos arquivos por mês');
@define('TOP_REFERRER', 'Referenciadores mais importantes');
@define('SHOWS_TOP_SITES', 'Exibe os links de entrada mais utilizados para aceder no seu blogue');
@define('TOP_EXITS', 'Saídas Maiores');
@define('SHOWS_TOP_EXIT', 'Exibe os links de saída mais requisitados de seu blogue');
@define('SYNDICATION', 'Sindicalização');
@define('SHOWS_RSS_BLAHBLAH', 'Mostrar ligações de sindicalização RSS');
@define('ADVERTISES_BLAHBLAH', 'Publicita a origem do seu blogue');
@define('HTML_NUGGET', 'Fragmento de HTML');
@define('HOLDS_A_BLAHBLAH', 'Apresenta um fragmento de HTML na sua barra lateral');
@define('TITLE_FOR_NUGGET', 'Título para o fragmento de HTML');
@define('THE_NUGGET', 'Fragmento de HTML!');
@define('SYNDICATE_THIS_BLOG', 'Sindicalizar este Blogue');
@define('YOU_CHOSE', 'Escolheu %s');
@define('IMAGE_SIZE', 'Tamanho da imagem');
@define('IMAGE_AS_A_LINK', 'Inserção de imagem');
@define('POWERED_BY', 'Equipado com');
@define('TRACKBACKS', 'Trackbacks');
@define('TRACKBACK', 'Trackback');
@define('NO_TRACKBACKS', 'Nenhuns Trackbacks');
@define('TOPICS_OF', 'Tópicos de');
@define('VIEW_FULL', 'ver tudo');
@define('VIEW_TOPICS', 'ver tópicos');
@define('AT', 'às');
@define('SET_AS_TEMPLATE', 'Definir como modelo');
@define('IN', 'em');
@define('EXCERPT', 'Excerto');
@define('TRACKED', 'Tracked'); // Translate?
@define('LINK_TO_ENTRY', 'Ligação para o artigo');
@define('LINK_TO_REMOTE_ENTRY', 'Ligação para artigo remoto');
@define('IP_ADDRESS', 'Endereço IP');
@define('USER', 'Utilizador');
@define('THUMBNAIL_USING_OWN', 'Usando %s como a sua própria miniatura devido ao seu pequeno tamanho.');
@define('THUMBNAIL_FAILED_COPY', 'A tentativa de usar %s como a sua própria miniatura falhou devido a um erro na cópia!');
@define('AUTHOR', 'Autor');
@define('LAST_UPDATED', 'Última actualização');
@define('TRACKBACK_SPECIFIC', 'URI específica do trackback para este artigo');
@define('DIRECT_LINK', 'Ligação directa para este artigo');
@define('COMMENT_ADDED', 'O seu comentário foi adicionado correctamente.');
@define('COMMENT_ADDED_CLICK', 'Clique %saqui para retornar%s aos comentários, ou %saqui para fechar%s esta janela.');
@define('COMMENT_NOT_ADDED_CLICK', 'Clique %saqui para retornar%s aos comentários, ou %saqui para fechar%s esta janela.');
@define('COMMENTS_DISABLE', 'Não são permitidos comentários neste artigo');
@define('COMMENTS_ENABLE', 'São permitidos comentários neste artigo');
@define('COMMENTS_CLOSED', 'O autor não autorizou comentários deste artigo');
@define('EMPTY_COMMENT', 'O seu comentário está vazio, por favor, %svolte%s e tente novamente');
@define('ENTRIES_FOR', 'Artigos para %s');
@define('DOCUMENT_NOT_FOUND', 'O documento %s não foi encontrado.');
@define('USERNAME', 'Utilizador');
@define('PASSWORD', 'Senha');
@define('AUTOMATIC_LOGIN', 'Guardar informações');
@define('SERENDIPITY_INSTALLATION', 'Instalação do Serendipity');
@define('LEFT', 'esquerda');
@define('RIGHT', 'direita');
@define('HIDDEN', 'oculto');
@define('REMOVE_TICKED_PLUGINS', 'Remover plugins marcados');
@define('SAVE_CHANGES_TO_LAYOUT', 'Guardar modificações ao layout');
@define('COMMENTS_FROM', 'Comentários de');
@define('ERROR', 'Erro');
@define('ENTRY_SAVED', 'Artigo guardado');
@define('DELETE_SURE', 'Tem a certeza que deseja excluir #%s definitivamente?');
@define('NOT_REALLY', 'Não mesmo...');
@define('DUMP_IT', 'Eliminá-lo!');
@define('RIP_ENTRY', 'Destruir artigo #%s');
@define('CATEGORY_DELETED', 'Categoria #%s apagada. Os artigos antigos foram movidos para a categoria #%s');
@define('INVALID_CATEGORY', 'Nenhuma categoria fornecida para exclusão');
@define('CATEGORY_SAVED', 'Categoria guardada');
@define('SELECT_TEMPLATE', 'Selecione o modelo pretendido para o seu Blogue');
@define('ENTRIES_NOT_SUCCESSFULLY_INSERTED', 'Artigos não adicionados!');
@define('YES', 'Sim');
@define('NO', 'Não');
@define('USE_DEFAULT', 'Por omissão');
@define('CHECK_N_SAVE', 'Verificar &amp; guardar');
@define('DIRECTORY_WRITE_ERROR', 'Não foi possível escrever na directoria %s. Verifique as permissões.');
@define('DIRECTORY_CREATE_ERROR', 'A directoria %s não existe e não pode ser criada. Tente criá-la manualmente');
@define('DIRECTORY_RUN_CMD', '&nbsp;-&gt; execute <i>%s %s</i>');
@define('CANT_EXECUTE_BINARY', 'Não foi possível executar o binário %s');
@define('FILE_WRITE_ERROR', 'Não foi possível editar o ficheiro %s.');
@define('FILE_CREATE_YOURSELF', 'Por favor, crie você mesmo o ficheiro ou verifique as suas permissões');
@define('COPY_CODE_BELOW', '<br />* Copie o código abaixo e o coloque em %s na sua %s directoria:<b><pre>%s</pre></b>' . "\n");
@define('WWW_USER', 'Altere www para o utilizador com o qual o apache é executado (ex.: ninguêm).');
@define('BROWSER_RELOAD', 'Uma vez feito isso, pressione o botão "actualizar" ("reload") do seu navegador.');
@define('DIAGNOSTIC_ERROR', 'Detectámos alguns erros quando verificámos as informações que forneceu:');
@define('SERENDIPITY_NOT_INSTALLED', 'Serendipity não se encontra instalado. Por favor <a href="%s">instale-o</a> agora.');
@define('INCLUDE_ERROR', 'Erro do Serendipity: não foi possível incluir %s - abortando.');
@define('DATABASE_ERROR', 'Erro do Serendipity: não foi possível conectar-se à base de dados - abortando.');
@define('CREATE_DATABASE', 'Criando a instalação padrão da base de dados...');
@define('ATTEMPT_WRITE_FILE', 'Tentando editar o ficheiro %s...');
@define('WRITTEN_N_SAVED', 'Configuração escrita &amp; guardada');
@define('IMAGE_ALIGNMENT', 'Alinhamento de imagem');
@define('ENTER_NEW_NAME', 'Indique um nome novo: ');
@define('RESIZING', 'Redimensionando');
@define('RESIZE_DONE', 'Pronto (%s imagens redimensionadas).');
@define('SYNCING', 'Sincronizando a base de dados com a directoria de imagens');
@define('SYNC_OPTION_LEGEND', 'Thumbnail Synchronization Options');
@define('SYNC_OPTION_KEEPTHUMBS', 'Keep all existing thumbnails');
@define('SYNC_OPTION_SIZECHECKTHUMBS', 'Keep existing thumbnails only if they are the correct size');
@define('SYNC_OPTION_DELETETHUMBS', 'Regenerate all thumbnails');
@define('SYNC_DONE', 'Pronto (%s imagens sincronizadas).');
@define('DELETE_IMAGE_FAIL' , 'Não foi possível excluir a imagem <b>%s</b>');
@define('DELETE_THUMBNAIL', 'Excluir a miniatura da imagem entitulada <b>%s</b>');
@define('FILE_NOT_FOUND', 'Não foi possível localizar o ficheiro entitulado <b>%s</b>, será que foi apagado?');
@define('ABORT_NOW', 'Cancelar agora');
@define('REMOTE_FILE_NOT_FOUND', 'O arquivo não foi localizado no servidor, tem a certeza que a URL: <b>%s</b> está correcta?');
@define('FILE_FETCHED', '%s obtido como %s');
@define('FILE_UPLOADED', 'O arquivo %s foi transferido correctamente: %s');
@define('WORD_OR', 'Ou');
@define('SCALING_IMAGE', 'Redimensionando %s para %s x %s px');
@define('KEEP_PROPORTIONS', 'Manter proporções');
@define('REALLY_SCALE_IMAGE', 'Quer mesmo redimensionar a imagem? Não é possível desfazer!!');
@define('TOGGLE_ALL', 'Alternar para expandir tudo');
@define('TOGGLE_OPTION', 'Opção para alternar');
@define('SUBSCRIBE_TO_THIS_ENTRY', 'Subscrever a este artigo');
@define('UNSUBSCRIBE_OK', "%s teve a subscrição deste artigo cancelada");
@define('NEW_COMMENT_TO_SUBSCRIBED_ENTRY', 'Novo comentário no artigo subscrito "%s"');
@define('SUBSCRIPTION_MAIL', "Olá %s,\n\nUm novo comentário foi acrescentado a um artigo que você está seguindo em \"%s\", intitulado \"%s\"\nO comentário foi enviado por: %s\n\nO artigo a que nos referimos pode ser encontrado em: %s\n\nPode cancelar sua subscrição clicando esta ligação: %s\n");
@define('SUBSCRIPTION_TRACKBACK_MAIL', "Olá %s,\n\nUm novo trackback foi adicionado num artigo que você está seguindo em \"%s\", intitulado \"%s\"\nO comentário foi enviado por: %s\n\nO artigo a que nos referimos pode ser encontrada em: %s\n\nPode cancelar a sua subscrição clicando nesta ligação: %s\n");
@define('SIGNATURE', "\n-- \n%s faz uso do Serendipity.\nO melhor Blogue que existe, e você também pode usá-lo.\nConsulte <http://s9y.org> para descobrir como.");
@define('SYNDICATION_PLUGIN_091', 'RSS 0.91 feed');
@define('SYNDICATION_PLUGIN_10', 'RSS 1.0 feed');
@define('SYNDICATION_PLUGIN_20', 'RSS 2.0 feed');
@define('SYNDICATION_PLUGIN_20c', 'RSS 2.0 comentários');
@define('SYNDICATION_PLUGIN_ATOM03', 'ATOM 0.3 feed');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR', 'Campo "managingEditor"');
@define('SYNDICATION_PLUGIN_WEBMASTER',  'Campo "webMaster"');
@define('SYNDICATION_PLUGIN_BANNERURL', 'Imagem para o RSS feed');
@define('SYNDICATION_PLUGIN_BANNERWIDTH', 'Largura da imagem');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT', 'Altura da imagem');
@define('SYNDICATION_PLUGIN_WEBMASTER_DESC',  'E-mail do webmaster, se disponível. (vazio: oculto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_MANAGINGEDITOR_DESC', 'E-mail do editor, se disponível. (vazio: oculto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_BANNERURL_DESC', 'URL de uma imagem no formato GIF/JPEG/PNG, se disponível. (vazio: logotipo do serendipity)');
@define('SYNDICATION_PLUGIN_BANNERWIDTH_DESC', 'em pixéis, max. 144');
@define('SYNDICATION_PLUGIN_BANNERHEIGHT_DESC', 'em pixéis, max. 400');
@define('SYNDICATION_PLUGIN_TTL', 'Campo "ttl" (tempo de vida)');
@define('SYNDICATION_PLUGIN_TTL_DESC', 'Quantidade de minutos depois do qual o seu blogue não deverá ser mais "cacheado" por sítios ou aplicações (vazio: oculto) [RSS 2.0]');
@define('SYNDICATION_PLUGIN_PUBDATE', 'Campo "pubDate"');
@define('SYNDICATION_PLUGIN_PUBDATE_DESC', 'O campo "pubDate" deve ser empacotado para o canal RSS, para mostrar a data do último artigo?');
@define('CONTENT', 'Conteúdo');
@define('TYPE', 'Tipo');
@define('DRAFT', 'Rascunho');
@define('PUBLISH', 'Publicar');
@define('PREVIEW', 'Pré-visualização');
@define('DATE', 'Data');
@define('DATE_FORMAT_2', 'Y-m-d H:i'); // Needs to be ISO 8601 compliant for date conversion!
@define('DATE_INVALID', 'ATENÇÃO: A data que você especificou é inválida. Deve ser fornecida no formato DD/MM/AAAA HH:MM.');
@define('CATEGORY_PLUGIN_DESC', 'Mostra a listagem de categorias.');
@define('ALL_AUTHORS', 'Todos os Autores');
@define('CATEGORIES_TO_FETCH', 'Categorias para trazer');
@define('CATEGORIES_TO_FETCH_DESC', 'Trazer categorias de que Autor?');
@define('PAGE_BROWSE_ENTRIES', 'Página %s de %s, totalizando %s artigos');
@define('PREVIOUS_PAGE', 'página anterior');
@define('NEXT_PAGE', 'página seguinte');
@define('ALL_CATEGORIES', 'Todas as categorias');
@define('DO_MARKUP', 'Executar transformações de marcação');
@define('GENERAL_PLUGIN_DATEFORMAT', 'Formatação de data');
@define('GENERAL_PLUGIN_DATEFORMAT_BLAHBLAH', 'Formato da data actual do artigo, usando a mesma formatação da função strftime() do PHP. (Padrão: "%s")');
@define('ERROR_TEMPLATE_FILE', 'Não foi possível abrir o ficheiro modelo, por favor actualize o Serendipity!');
@define('ADVANCED_OPTIONS', 'Opções avançadas');
@define('EDIT_ENTRY', 'Editar artigo');
@define('HTACCESS_ERROR', 'Para verificar a instalação do servidor web, Serendipity necessita ter o poder para criar o arquivo ".htaccess". Isso não foi possível devido a erros nas permissões. Por favor, ajuste as permissões para: <br />&nbsp;&nbsp;%s<br />e recarregue esta página.');
@define('SIDEBAR_PLUGINS', 'Plugins da barra lateral');
@define('EVENT_PLUGINS', 'Plugins de eventos');
@define('SORT_ORDER', 'Ordenação');
@define('SORT_ORDER_NAME', 'Nome do ficheiro');
@define('SORT_ORDER_EXTENSION', 'Extensão do ficheiro');
@define('SORT_ORDER_SIZE', 'Tamanho do ficheiro');
@define('SORT_ORDER_WIDTH', 'Largura da imagem');
@define('SORT_ORDER_HEIGHT', 'Altura da imagem');
@define('SORT_ORDER_DATE', 'Data de transferência');
@define('SORT_ORDER_ASC', 'Ascendente');
@define('SORT_ORDER_DESC', 'Descendente');
@define('THUMBNAIL_SHORT', 'Miniatura');
@define('ORIGINAL_SHORT', 'Orig.');
@define('APPLY_MARKUP_TO', 'Aplicar código a %s');
@define('CALENDAR_BEGINNING_OF_WEEK', 'Começo da semana');
@define('SERENDIPITY_NEEDS_UPGRADE', 'O Serendipity detectou que a configuração está de acordo com a versão %s, embora a versão %s de Serendipity esteja instalada. Precisa de actualizar o Serendipity! <a href="%s">Clique aqui</a>');
@define('SERENDIPITY_UPGRADER_WELCOME', 'Olá, e bem-vindo ao agente de actualização do Serendipity.');
@define('SERENDIPITY_UPGRADER_PURPOSE', 'Estou aqui para ajudá-lo a actualizar na instalação %s do seu Serendipity.');
@define('SERENDIPITY_UPGRADER_WHY', 'Você está a ver esta mensagem porque acabou de instalar o Serendipity %s, mas ainda não actualizou a instalação da base de dados para compatibilizar com esta versão');
@define('SERENDIPITY_UPGRADER_DATABASE_UPDATES', 'Actualização da base de dados (%s)');
@define('SERENDIPITY_UPGRADER_FOUND_SQL_FILES', 'Encontrei os seguintes arquivos .sql u]que precisam ser executados antes que você prossiga com a utilização normal do Serendipity');
@define('SERENDIPITY_UPGRADER_VERSION_SPECIFIC',  'Tarefas específicas da versão');
@define('SERENDIPITY_UPGRADER_NO_VERSION_SPECIFIC', 'Nenhuma tarefa específica da versão foi encontrada');
@define('SERENDIPITY_UPGRADER_PROCEED_QUESTION', 'Quer realizar as tarefas acima?');
@define('SERENDIPITY_UPGRADER_PROCEED_ABORT', 'Não, eu as executarei manualmente');
@define('SERENDIPITY_UPGRADER_PROCEED_DOIT', 'Por favor, faça isso');
@define('SERENDIPITY_UPGRADER_NO_UPGRADES', 'Parece que que você não precisa executar nenhuma actualização');
@define('SERENDIPITY_UPGRADER_CONSIDER_DONE', 'Considere a actualização do Serendipity');
@define('SERENDIPITY_UPGRADER_YOU_HAVE_IGNORED', 'Você ignorou a fase de actualização do Serendipity, certifique-se de que a base de dados está instalada correctamente e que as funções necessárias foram executadas');
@define('SERENDIPITY_UPGRADER_NOW_UPGRADED', 'A sua instalação do Serendipity foi actualizada para a versão %s');
@define('SERENDIPITY_UPGRADER_RETURN_HERE', 'Pode retornar ao seu Blogue clicando %saqui%s');

@define('MANAGE_USERS', 'Gerir utilizadores');
@define('CREATE_NEW_USER', 'Criar novo utilizador');
@define('CREATE_NOT_AUTHORIZED', 'Você não pode modificar utilizadores que tenham o mesmo nível que o seu');
@define('CREATE_NOT_AUTHORIZED_USERLEVEL', 'Você não pode criar utilizadores com um nível maior que o seu');
@define('CREATED_USER', 'Um novo utilizador %s foi criado');
@define('MODIFIED_USER', 'As propriedades do utilizador %s foram alteradas');
@define('USER_LEVEL', 'Nível do utilizador');
@define('DELETE_USER', 'Você está prestes a suprimir o utilizador #%d %s. Tem a certeza disso? Isso fará com que os artigos escritos por ele deixem de ser consultáveis.');
@define('DELETED_USER', 'Utilizador #%d %s excluído.');
@define('LIMIT_TO_NUMBER', 'Quantos itens devem ser apresentados?');
@define('ENTRIES_PER_PAGE', 'artigos por página');
@define('XML_IMAGE_TO_DISPLAY', 'Botão XML');
@define('XML_IMAGE_TO_DISPLAY_DESC','Links para XML Feeds serão exibidos por esta imagem. Deixe em branco para padrão, digite \'none\' para tornar inactivo.');

@define('DIRECTORIES_AVAILABLE', 'Na lista de subdirectorias disponíveis, você pode clicar em qualquer nome de subdirectoria para criar uma nova directoria dentro daquela estrutura.');
@define('ALL_DIRECTORIES', 'todas as directorias');
@define('MANAGE_DIRECTORIES', 'Gerir directorias');
@define('DIRECTORY_CREATED', 'Directoria <strong>%s</strong> foi criada.');
@define('PARENT_DIRECTORY', 'Directoria superior');
@define('CONFIRM_DELETE_DIRECTORY', 'Tem a certeza que quer apagar todo o conteúdo da directoria %s?');
@define('ERROR_NO_DIRECTORY', 'Erro: A Directoria %s não existe');
@define('CHECKING_DIRECTORY', 'Verificando arquivos na directoria %s');
@define('DELETING_FILE', 'Apagando ficheiro %s...');
@define('ERROR_DIRECTORY_NOT_EMPTY', 'Não foi possível remover uma directoria que não está vazia. Marque a opção "forçar apagar" se também deseja remover os ficheiros nela contidos, e volte a dar o comando. Os ficheiros existentes são:');
@define('DIRECTORY_DELETE_FAILED', 'A remoção da directoria %s falhou. Verifique as permissões ou as mensagens acima.');
@define('DIRECTORY_DELETE_SUCCESS', 'Directoria %s removida correctamente.');
@define('SKIPPING_FILE_EXTENSION', 'Ignorando ficheiro: Falta extensão em %s.');
@define('SKIPPING_FILE_UNREADABLE', 'Ignorando ficheiro: %s ilegível.');
@define('FOUND_FILE', 'Encontrado ficheiro novo/modificado: %s.');
@define('ALREADY_SUBCATEGORY', '%s já é uma subcategoria de %s.');
@define('PARENT_CATEGORY', 'Categoria superior');
@define('IN_REPLY_TO', 'Em resposta a');
@define('TOP_LEVEL', 'Nível de topo');
@define('SYNDICATION_PLUGIN_GENERIC_FEED', '%s feed');
@define('PERMISSIONS', 'Permissões');
@define('INTEGRITY', 'Verify Installation Integrity');
@define('CHECKSUMS_NOT_FOUND', 'Unable to compare checksums! (No checksums.inc.php in main directory)');
@define('CHECKSUMS_PASS', 'All required files verified.');
@define('CHECKSUM_FAILED', '%s corrupt or modified: failed verification');
@define('SETTINGS_SAVED_AT', 'As novas preferências foram guardadas em %s');

/* DATABASE SETTINGS */
@define('INSTALL_CAT_DB', 'Configurações da base de dados');
@define('INSTALL_CAT_DB_DESC', 'Aqui você pode inserir toda a informação acerca da sua base de dados. O Serendipity requer esta informação para funcionar correctamente.');
@define('INSTALL_DBTYPE', 'Tipo de base de dados');
@define('INSTALL_DBTYPE_DESC', 'Tipo de base de dados');
@define('INSTALL_DBHOST', 'Servidor de base de dados');
@define('INSTALL_DBHOST_DESC', 'Endereço/Nome do seu servidor de base de dados');
@define('INSTALL_DBUSER', 'Utilizador da base de dados');
@define('INSTALL_DBUSER_DESC', 'O nome de utilizador que liga à base de dados');
@define('INSTALL_DBPASS', 'Senha da base de dados');
@define('INSTALL_DBPASS_DESC', 'A senha correspondente ao utilizador acima');
@define('INSTALL_DBNAME', 'Nome da base de dados');
@define('INSTALL_DBNAME_DESC', 'O nome da base de dados');
@define('INSTALL_DBPREFIX', 'Prefixo para as tabelas da base de dados');
@define('INSTALL_DBPREFIX_DESC', 'Prefixo utilizado para designar as tabelas, ex.: serendipity_');

/* PATHS */
@define('INSTALL_CAT_PATHS', 'Caminhos');
@define('INSTALL_CAT_PATHS_DESC', 'Os vários caminhos para directorias e ficheiros essenciais. Não se esqueça de terminar com barras no caso das directorias');
@define('INSTALL_FULLPATH', 'Caminho completo');
@define('INSTALL_FULLPATH_DESC', 'O caminho completo e absoluto para a sua instalação de Serendipity');
@define('INSTALL_UPLOADPATH', 'Caminho para o Upload');
@define('INSTALL_UPLOADPATH_DESC', 'Todos os arquivos transferidos irão parar aí, relativo ao \'Caminho completo\' - geralmente \'uploads/\'');
@define('INSTALL_RELPATH', 'Caminho relativo');
@define('INSTALL_RELPATH_DESC', 'Caminho para o Serendipity no seu navegador, geralmente \'/serendipity/\'');
@define('INSTALL_RELTEMPLPATH', 'Caminho relativo do padrão');
@define('INSTALL_RELTEMPLPATH_DESC', 'Caminho para a directoria onde estão os seus padrões - Relativo ao \'caminho relativo\'');
@define('INSTALL_RELUPLOADPATH', 'Caminho relativo do Upload');
@define('INSTALL_RELUPLOADPATH_DESC', 'Caminho para o \'uploads\' em seu navegador - Relativo ao \'caminho relativo\'');
@define('INSTALL_URL', 'URL do blogue');
@define('INSTALL_URL_DESC', 'URL base para a instalação do Serendipity');
@define('INSTALL_INDEXFILE', 'Arquivo inicial');
@define('INSTALL_INDEXFILE_DESC', 'Nome do arquivo inicial do Serendipity');

/* Generel settings */
@define('INSTALL_CAT_SETTINGS', 'Configurações gerais');
@define('INSTALL_CAT_SETTINGS_DESC', 'Padrão de como o Serendipity se deve comportar');
@define('INSTALL_USERNAME', 'Nome de utilizador do Administrador');
@define('INSTALL_USERNAME_DESC', 'Nome de utilizador do utilizador para o login do Administrador');
@define('INSTALL_PASSWORD', 'Senha do Administrador');
@define('INSTALL_PASSWORD_DESC', 'Senha de acesso do Administrador');
@define('INSTALL_EMAIL', 'E-mail do Administrador');
@define('INSTALL_EMAIL_DESC', 'E-mail do Administrador do blogue');
@define('INSTALL_SENDMAIL', 'Enviar e-mails ao Administrador?');
@define('INSTALL_SENDMAIL_DESC', 'Você deseja receber notificações via e-mail quando novos comentários forem incluídos nos seus artigos?');
@define('INSTALL_SUBSCRIBE', 'Permitir que os utilizadores se inscrevam nos artigos?');
@define('INSTALL_SUBSCRIBE_DESC', 'Permitir que utilizadores se inscrevam nos artigos e com isso, recebam notificações via e-mail quando novos comentários forem adicionados?');
@define('INSTALL_BLOGNAME', 'Nome do Blogue');
@define('INSTALL_BLOGNAME_DESC', 'Título do Blogue');
@define('INSTALL_BLOGDESC', 'Descrição do Blogue');
@define('INSTALL_BLOGDESC_DESC', 'Descrição');
@define('INSTALL_LANG', 'Idioma');
@define('INSTALL_LANG_DESC', 'Seleccione o idioma para o seu blogue');

/* Appearance and options */
@define('INSTALL_CAT_DISPLAY', 'Aparência e opções');
@define('INSTALL_CAT_DISPLAY_DESC', 'Padroniza como o Serendipity é exibido');
@define('INSTALL_WYSIWYG', 'Usar editor WYSIWYG');
@define('INSTALL_WYSIWYG_DESC', 'Você quer usar o editor WYSIWYG? (Funciona no IE5+ e parcialmente no Mozilla 1.3+)');
@define('INSTALL_XHTML11', 'Forçar compatibilidade com XHTML 1.1');
@define('INSTALL_XHTML11_DESC', 'Quer forçar compatibilidade com o standard XHTML 1.1 (pode causar problemas de formatação nos navegadores de 4ª geração (4.x))');
@define('INSTALL_POPUP', 'Permitir o uso de janelas popups');
@define('INSTALL_POPUP_DESC', 'Quer que o weblog utilize janelas popups para comentários, trackbacks, etc?');
@define('INSTALL_EMBED', 'O Serendipity está integrado?');
@define('INSTALL_EMBED_DESC', 'Se quiser arquivar o conteúdo do Serendipity dum website, mude para verdadeiro para descartar quaisquer cabeçalhos e apenas imprimir o conteúdo. Pode fazer uso da opção \'Arquivo inicial\' para usar uma classe mais abrangente aonde colocaria os cabeçalhos normais de sua página. Veja o ficheiro README para mais informações!');
@define('INSTALL_BLOCKREF', 'Referências bloqueadas');
@define('INSTALL_BLOCKREF_DESC', 'Existem servidores especiais que você não gostaria de listar na sua lista de referências? Separe a lista dos servidores com \';\' e note que o servidor será bloqueado por uma busca parcial em sua string!');
@define('INSTALL_REWRITE', 'Reescrita de URL');
@define('INSTALL_REWRITE_DESC', 'Selecione as regras que você gostaria de usar na geração de URLs. A habilitação da reescrita de URL criará URLS bem formatadas para o seu blogue e o deixará indexável de um melhor modo para os bots como o do Google. O servidor web precisa de ter suporte para o mod_rewrite ou para o "AllowOverride All" para a directoria do seu Serendipity. A configuração padrão é auto detectada');

/* Imageconversion Settings */
@define('INSTALL_CAT_IMAGECONV', 'Configurações da conversão de imagens');
@define('INSTALL_CAT_IMAGECONV_DESC', 'Informações gerais sobre como o Serendipity deve lidar com imagens');
@define('INSTALL_IMAGEMAGICK', 'Usar Image magick');
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
@define('INSTALL_THUMBDIM_DESC', 'Dimension to be constrained to the thumbnail max size. The default "' . 
    INSTALL_THUMBDIM_LARGEST .  '" limits both dimensions, so neither can be greater than the max size; "' . 
    INSTALL_THUMBDIM_WIDTH . '" and "' .  INSTALL_THUMBDIM_HEIGHT . 
    '" only limit the chosen dimension, so the other could be larger than the max size.');

/* Personal details */
@define('USERCONF_CAT_PERSONAL', 'Detalhes pessoais');
@define('USERCONF_CAT_PERSONAL_DESC', 'Altere os seus detalhes pessoais');
@define('USERCONF_USERNAME', 'O seu nome de utilizador');
@define('USERCONF_USERNAME_DESC', 'O nome de utilizador que você usa para se identificar no blogue');
@define('USERCONF_PASSWORD', 'A sua senha');
@define('USERCONF_PASSWORD_DESC', 'A senha que você quer usar para se identificar no blogue');
@define('USERCONF_EMAIL', 'O seu endereço de e-mail');
@define('USERCONF_EMAIL_DESC', 'O seu endereço de e-mail pessoal');
@define('USERCONF_SENDCOMMENTS', 'Enviar notificação dos comentários?');
@define('USERCONF_SENDCOMMENTS_DESC', 'Quer receber e-mails quando forem enviados comentários à cerca dos seus artigos?');
@define('USERCONF_SENDTRACKBACKS', 'Enviar notificação de trackbacks?');
@define('USERCONF_SENDTRACKBACKS_DESC', 'Quer receber e-mails quando trackbacks forem enviados para os seus artigos?');
@define('USERCONF_ALLOWPUBLISH', 'Direitos: Publicação de artigos?');
@define('USERCONF_ALLOWPUBLISH_DESC', 'Este utilizador está autorizado a publicar artigos?');
@define('SUCCESS', 'Sucesso');
@define('POWERED_BY_SHOW_TEXT', 'Exibir "Serendipity" como texto');
@define('POWERED_BY_SHOW_TEXT_DESC', 'Exibirá o "Serendipity Weblog" como texto');
@define('POWERED_BY_SHOW_IMAGE', 'Exibir "Serendipity" como um logotipo');
@define('POWERED_BY_SHOW_IMAGE_DESC', 'Exibe o logotipo do Serendipity');

@define('SETTINGS_SAVED_AT', 'As novas configurações foram guardadas em %s');
@define('PLUGIN_ITEM_DISPLAY', 'Aonde é que o item deve ser mostrado?');
@define('PLUGIN_ITEM_DISPLAY_EXTENDED', 'Apenas artigo extendido');
@define('PLUGIN_ITEM_DISPLAY_OVERVIEW', 'Página de visão geral apenas');
@define('PLUGIN_ITEM_DISPLAY_BOTH', 'Todas as vezes');
@define('RSS_IMPORT_CATEGORY', 'Utilize essa categoria para artigos que não encontrem uma categoria no Serendipity');
@define('ERROR_UNKNOWN_NOUPLOAD', 'Ocorreu um erro desconhecido, o arquivo não foi transferido. Talvez o tamanho do arquivo seja maior que o permitido pelo seu servidor. Verifique com o seu servidor de internet, ou edite o php.ini para permitir transferência de arquivos de maior tamanho.');
@define('COMMENTS_WILL_BE_MODERATED', 'Comentários enviados estarão sujeitos a moderação antes de serem exibidos.');
@define('YOU_HAVE_THESE_OPTIONS', 'As seguintes opções estão disponíveis');
@define('THIS_COMMENT_NEEDS_REVIEW', 'Atenção: Esse comentário precisa de aprovação antes de ser exibido');
@define('DELETE_COMMENT', 'Excluir comentário');
@define('APPROVE_COMMENT', 'Aprovar comentário');
@define('REQUIRES_REVIEW', 'Requer revisão');
@define('COMMENT_APPROVED', 'Comentário #%s foi aprovado corretamente');
@define('COMMENT_DELETED', 'Comentário #%s foi excluído corretamente');
@define('VIEW', 'Exibir');
@define('COMMENT_ALREADY_APPROVED', 'Comentário #%s parece já ter sido aprovado');
@define('COMMENT_EDITED', 'O comentário selecionado foi editado');
@define('HIDE', 'Ocultar');
@define('VIEW_EXTENDED_ENTRY', 'Continuar lendo "%s"');
@define('TRACKBACK_SPECIFIC_ON_CLICK', 'Este link não deve ser clicado. Contém a URL de trackback para este artigo. Use esse URL para enviar ping - & trackbacks do seu weblog para este artigo. Para copiar o link, clique com o botão direito e selecione "Copiar Atalho" no Internet Explorer ou "Copiar localização do link" no Mozilla.');
@define('THIS_TRACKBACK_NEEDS_REVIEW', 'Atenção: Esse trackback precisa de aprovação antes que seja exibido');
@define('DELETE_TRACKBACK', 'Excluir trackback');
@define('APPROVE_TRACKBACK', 'Aprovar trackback');
@define('TRACKBACK_APPROVED', 'O trackback #%s foi aprovado corretamente');
@define('TRACKBACK_DELETED', 'O trackback #%s foi excluído corretamente');
@define('COMMENTS_MODERATE', 'Comentários & trackbacks para este artigo requerem moderação');
@define('PLUGIN_SUPERUSER_HTTPS', 'Usar https para login');
@define('PLUGIN_SUPERUSER_HTTPS_DESC', 'Permitir que o link de login aponte para uma link https. O seu servidor web necessita de suportar esta opção!');
@define('INSTALL_SHOW_EXTERNAL_LINKS', 'Tornar clicáveis os links externos?');
@define('INSTALL_SHOW_EXTERNAL_LINKS_DESC', '"não": Links externos não marcados (Maiores saídas, Maiores referências, Comentários de usuários) não são exibidos como puro texto para evitar spam do Google (recomendado). "sim": Links externos não marcados são exibidos como links. Podem ser sobrescritos pela configuração da barra lateral!');
@define('PAGE_BROWSE_COMMENTS', 'Página %s de %s, totalizando %s comentários');
@define('FILTERS', 'Filtros');
@define('FIND_ENTRIES', 'Encontrar artigos');
@define('FIND_COMMENTS', 'Encontrar comentários');
@define('FIND_MEDIA', 'Encontrar multimédia');
@define('FILTER_DIRECTORY', 'Directoria');
@define('SORT_BY', 'Ordenar por');
@define('TRACKBACK_COULD_NOT_CONNECT', 'Nenhum trackback enviado: Não foi possível abrir conexão para %s na porta %d');
@define('MEDIA', 'Multimédia');
@define('MEDIA_LIBRARY', 'Biblioteca de multimédia');
@define('ADD_MEDIA', 'Adicionar multimédia');
@define('ENTER_MEDIA_URL', 'Introduza a URL de um ficheiro para ir buscá-lo:');
@define('ENTER_MEDIA_UPLOAD', 'Seleccione o ficheiro que deseja transferir:');
@define('SAVE_FILE_AS', 'Guardar ficheiro como:');
@define('STORE_IN_DIRECTORY', 'Guardar na seguinte directoria: ');
@define('MEDIA_RENAME', 'Renomear este ficheiro');
@define('IMAGE_RESIZE', 'Redimensionar esta imagem');
@define('MEDIA_DELETE', 'Apagar este ficheiro');
@define('FILES_PER_PAGE', 'Ficheiros por página');
@define('CLICK_FILE_TO_INSERT', 'Clique no ficheiro que deseja inserir:');
@define('SELECT_FILE', 'Seleccione arquivo para inserir');
@define('MEDIA_FULLSIZE', 'Tamanho total');
@define('CALENDAR_BOW_DESC', 'Dia da semana que deve ser considerado o início da semana. O padrão é segunda-feira');
@define('SUPERUSER', 'Administração do weblog');
@define('ALLOWS_YOU_BLAHBLAH', 'Fornece um link para a administração do weblog na barra lateral ');
@define('CALENDAR', 'Calendário');
@define('SUPERUSER_OPEN_ADMIN', 'Abrir Administração');
@define('SUPERUSER_OPEN_LOGIN', 'Abrir painel de login');
@define('INVERT_SELECTIONS', 'Inverter Seleção');
@define('COMMENTS_DELETE_CONFIRM', 'Tem a certeza de que deseja excluir os comentários selecionados?');
@define('COMMENT_DELETE_CONFIRM', 'Tem a certeza de que deseja excluir o comentário #%d, escrito por %s?');
@define('DELETE_SELECTED_COMMENTS', 'Excluir comentários seleccionados');
@define('VIEW_COMMENT', 'Exibir comentário');
@define('VIEW_ENTRY', 'Exibir artigo');
@define('DELETE_FILE', 'Excluir o campo entitulado <b>%s</b>');
@define('ABOUT_TO_DELETE_FILE', 'Você está prestes a apagar <b>%s</b><br />Se estiver utilizando esse arquivo em algum dos seus artigos, vai resultar em ligações ou imagens perdidas<br />Deseja realmente prosseguir com a exclusão?<br /><br />');
@define('TRACKBACK_SENDING', 'Enviando trackback para o URL %s...');
@define('TRACKBACK_SENT', 'Trackback enviada com sucesso');
@define('TRACKBACK_FAILED', 'Trackback falhou: %s');
@define('TRACKBACK_NOT_FOUND', 'Nenhum URI de trackback foi encontrado.');
@define('TRACKBACK_URI_MISMATCH', 'A URI de trackback descoberta não com é semelhante ao URL alvo.');
@define('TRACKBACK_CHECKING', 'Verificando <u>%s</u> para possíveis trackbacks...');
@define('TRACKBACK_NO_DATA', 'O alvo não contém dados');
@define('TRACKBACK_SIZE', 'URL alvo excedeu o tamanho máximo de %s bytes para um arquivo.');
@define('VIEWMODE_THREADED', 'Alternar para exibição por discussão');
@define('COMMENTS_VIEWMODE_THREADED', 'Discussão');
@define('COMMENTS_VIEWMODE_LINEAR', 'Sequencial');
@define('DISPLAY_COMMENTS_AS', 'Exibir comentários como');
@define('DATE_FORMAT_SHORT', '%d/%m/%Y %H:%M');
@define('NUMBER_FORMAT_DECIMALS', '2');
@define('NUMBER_FORMAT_DECPOINT', ',');
@define('NUMBER_FORMAT_THOUSANDS', '.');
@define('CATEGORY_DELETED_ARTICLES_MOVED', 'Categoria #%s excluída. Os artigos antigos foram movidos para a categoria #%s');
@define('INSTALL_TOP_AS_LINKS', 'Exibir maiores saídas/referências como links?');
@define('INSTALL_TOP_AS_LINKS_DESC', '"não": Saídas e Referências são exibidas como puro texto para prevenir spam do google. "sim": Saídas e Refrências são exibidas como links. "padrão": Usa o valor definido na configuração global (recomendado).');
@define('ADD_MEDIA_BLAHBLAH', '<b>Adicionar um ficheiro para o seu repositório de multimédia:</b><p>Aqui você pode transferir ficheiros de multimédia, ou oriente-me para obtê-lo noutro sítio da web! Se não possuir uma imagem apropriada, <a href="http://images.google.com" target="_blank">procure no google</a> alguma imagem que tenha relação com o assunto, os resultados são geralmente úteis e divertidos :)</p><p><b>Selecione o método:</b></p><br/>');
@define('COMMENTS_FILTER_SHOW', 'Mostrar');
@define('COMMENTS_FILTER_ALL', 'Todos');
@define('COMMENTS_FILTER_APPROVED_ONLY', 'Só aprovados'); // Verify
@define('COMMENTS_FILTER_NEED_APPROVAL', 'Aprovação pendente');
@define('RSS_IMPORT_BODYONLY', 'Pôr todo o texto importado na secção de "body" ("corpo") e não dividir para a secção "extended entry" ("entrada estendida").'); // Verify
@define('SYNDICATION_PLUGIN_FULLFEED', 'Mostrar artigos completos com corpo estendido dentro do RSS feed');
@define('MT_DATA_FILE', 'Ficheiro de dados Movable Type');
@define('FORCE', 'Forçar');
@define('CREATE_AUTHOR', 'Criar autor \'%s\'.');
@define('CREATE_CATEGORY', 'Criar categoria \'%s\'.');
@define('MYSQL_REQUIRED', 'Tem que ter a extensão MySQL para poder executar esta acção.');
@define('COULDNT_CONNECT', 'Foi impossível ligar à base de dados MySQL: %s.');
@define('COULDNT_SELECT_DB', 'Foi impossível seleccionar base de dados: %s.');
@define('COULDNT_SELECT_USER_INFO', 'Foi impossível seleccionar a informação sobre o utilizador: %s.');
@define('COULDNT_SELECT_CATEGORY_INFO', 'Não foi possível seleccionar a informação de categorias: %s.');
@define('COULDNT_SELECT_ENTRY_INFO', 'Não foi possível seleccionar a informação da entrada: %s.');
@define('COULDNT_SELECT_COMMENT_INFO', 'Não foi possível seleccionar a informação de comentários: %s.');
@define('WEEK', 'Semana');
@define('WEEKS', 'Semanas');
@define('MONTHS', 'Meses');
@define('DAYS', 'Dias');
@define('ARCHIVE_FREQUENCY', 'Frequência de item de calendário');
@define('ARCHIVE_FREQUENCY_DESC', 'O intervalo de calendário entre cada item da lista');
@define('ARCHIVE_COUNT', 'Número de itens nesta lista');
@define('ARCHIVE_COUNT_DESC', 'O número total de meses, semanas ou dias para mostrar');
@define('BELOW_IS_A_LIST_OF_INSTALLED_PLUGINS', 'Abaixo encontra uma lista dos plugins instalados');
@define('SIDEBAR_PLUGIN', 'plugin da barra lateral');
@define('EVENT_PLUGIN', 'plugin de evento');
@define('CLICK_HERE_TO_INSTALL_PLUGIN', 'Clique aqui para instalar um novo %s');
@define('VERSION', 'versão');
@define('INSTALL', 'Instalar');
@define('ALREADY_INSTALLED', 'Já instalado');
@define('SELECT_A_PLUGIN_TO_ADD', 'Seleccione o plugin que pretende instalar');
@define('INSTALL_OFFSET', 'Offset temporal no servidor');
@define('STICKY_POSTINGS', 'Postagens fixas'); // Translate ?
@define('INSTALL_FETCHLIMIT', 'Entradas a mostrar na primeira página');
@define('INSTALL_FETCHLIMIT_DESC', 'Número de entradas a mostrar por cada página do página principal'); // Translate frontend?
@define('IMPORT_ENTRIES', 'Importar dados');
@define('EXPORT_ENTRIES', 'Exportar entradas');
@define('IMPORT_WELCOME', 'Bem vindo ao utilitário de importação do Serendipity');
@define('IMPORT_WHAT_CAN', 'Aqui podemos importar entradas de outro software gestor de weblogs');
@define('IMPORT_SELECT', 'Por favor, seleccione o software de onde quer importar');
@define('IMPORT_PLEASE_ENTER', 'Por favor introduza os dados como pedido abaixo');
@define('IMPORT_NOW', 'Importar agora!');
@define('IMPORT_STARTING', 'Começando o procedimento de importação...');
@define('IMPORT_FAILED', 'Importação falhou');
@define('IMPORT_DONE', 'Importação completada com sucesso');
@define('IMPORT_WEBLOG_APP', 'Aplicação do Weblog');
@define('EXPORT_FEED', 'Exportar RSS feed completo'); // Verify
@define('STATUS', 'Status depois da importação');
@define('IMPORT_GENERIC_RSS', 'Importação de RSS genérica');
@define('ACTIVATE_AUTODISCOVERY', 'Enviar Trackbacks de ligações encontradas na entrada'); // Verify
@define('WELCOME_TO_ADMIN', 'Bem vindo à Suite Administrativa do Serendipity.');
@define('PLEASE_ENTER_CREDENTIALS', 'Por favor, introduza as suas credenciais abaixo.');
@define('ADMIN_FOOTER_POWERED_BY', 'Equipado com Serendipity %s e PHP %s');
@define('INSTALL_USEGZIP', 'Use páginas comprimidas com gzip');
@define('INSTALL_USEGZIP_DESC', 'Para acelerar o acesso às páginas, podemos comprimi-las, desde que o navegador do visitante o suporte. Isto é recomendado');
@define('INSTALL_SHOWFUTURE', 'Mostre entradas futuras'); // Verify
@define('INSTALL_SHOWFUTURE_DESC', 'Se escolhido, isto mostrará todas as entradas futuras do seu blogue. Por omissão escondemos tais entradas e só são mostradas quando a data de publicação chega.');
@define('INSTALL_DBPERSISTENT', 'Usar conexões persistentes');
@define('INSTALL_DBPERSISTENT_DESC', 'Permitir a utilização de conexões permanentes à base de dados, ver leitura adicional em <a href="http://php.net/manual/features.persistent-connections.php" target="_blank">aqui</a>. Isto normalmente não é recomendado.');
@define('NO_IMAGES_FOUND', 'Nenhuma das imagens foi encontrada');
@define('PERSONAL_SETTINGS', 'Preferências pessoais');
@define('REFERER', 'Referenciador');
@define('NOT_FOUND', 'Não encontrado');
@define('NOT_WRITABLE', 'Escrita negada');
@define('WRITABLE', 'Escrita permitida');
@define('PROBLEM_DIAGNOSTIC', 'Devido a um diagnóstico problemático, não se pode continuar a instalação sem que os erros acima sejam corrigidos');
@define('SELECT_INSTALLATION_TYPE', 'Seleccione que tipo de instalação que deseja efectuar');
@define('WELCOME_TO_INSTALLATION', 'Bem vindo à Instalação do Serendipity');
@define('FIRST_WE_TAKE_A_LOOK', 'Primeiro examinamos a sua instalação corrente e tentamos diagnosticar quaisquer problemas de compatibilidade');
@define('ERRORS_ARE_DISPLAYED_IN', 'Erros são mostrados a %s, recomendações a %s e sucesso a %s');
@define('RED', 'vermelho');
@define('YELLOW', 'amarelo');
@define('GREEN', 'verde');
@define('PRE_INSTALLATION_REPORT', 'Relatório de pré-instalação do Serendipity v%s');
@define('RECOMMENDED', 'Recomendado');
@define('ACTUAL', 'Actual'); // Verify
@define('PHPINI_CONFIGURATION', 'configuração em php.ini');
@define('PHP_INSTALLATION', 'instalação de PHP installation');
@define('THEY_DO', 'eles fazem'); // Translate
@define('THEY_DONT', 'eles não'); // Translate
@define('SIMPLE_INSTALLATION', 'Instalação simples');
@define('EXPERT_INSTALLATION', 'Instalação para especialistas');
@define('COMPLETE_INSTALLATION', 'Instalação completa');
@define('WONT_INSTALL_DB_AGAIN', 'não instalaremos a base de dados novamente'); // Verify
@define('CHECK_DATABASE_EXISTS', 'Verificando se a base de dados ou se as tabelas já existem');
@define('CREATING_PRIMARY_AUTHOR', 'Criando autor primário \'%s\'');
@define('SETTING_DEFAULT_TEMPLATE', 'Definindo modelo por omissão'); // Verify
@define('INSTALLING_DEFAULT_PLUGINS', 'Instalando plugins por omissão'); // Verify
@define('SERENDIPITY_INSTALLED', 'Serendipity foi instalado com sucesso');
@define('VISIT_BLOG_HERE', 'Visite o seu novo blogue aqui');
@define('THANK_YOU_FOR_CHOOSING', 'Obrigado por escolher Serendipity');
@define('ERROR_DETECTED_IN_INSTALL', 'Erro detectado na instalação');
@define('OPERATING_SYSTEM', 'Sistema Operativo');
@define('WEBSERVER_SAPI', 'Servidor web SAPI');
@define('IMAGE_ROTATE_LEFT', 'Rodar a imagem 90º no sentido directo');
@define('IMAGE_ROTATE_RIGHT', 'Rodar a imagem 90º no sentido retrógado');
@define('TEMPLATE_SET', '\'%s\' foi definido como o seu modelo activo');
@define('SEARCH_ERROR', 'A função de busca não se comportou como esperado. Nota para o Administrador deste blogue: isto pode acontecer por falta de chaves no índice na sua base de dados. Em sistemas de MySQL, a sua conta de utilizador da base de dados precisa de privilégios para executar o seguinte comando: <pre>CREATE FULLTEXT INDEX entry_idx on %sentries (title,body,extended)</pre> O erro exacto reportado pela base de dados foi: <pre>%s</pre>'); // Verify
@define('EDIT_THIS_CAT', 'Editar "%s"');
@define('CATEGORY_REMAINING', 'Apague esta categoria e mova as entradas para esta outra');
@define('CATEGORY_INDEX', 'Abaixo encontra uma listagem de categorias disponíveis para as suas entradas');
@define('NO_CATEGORIES', 'Sem categorias'); // Verify
@define('RESET_DATE', 'Reinicializar a data');
@define('RESET_DATE_DESC', 'Clique aqui para reinicializar a data para o valor corrente');
@define('PROBLEM_PERMISSIONS_HOWTO', 'Permissões podem ser corrigidas na directoria problemática com o comando: `<em>%s</em>`, ou usando um programa de FTP'); // Verify
@define('WARNING_TEMPLATE_DEPRECATED', 'Aviso: o seu modelo corrente usa um método de padrões obsoleto, fica avisado para actualizar se possível');
@define('ENTRY_PUBLISHED_FUTURE', 'Esta entrada ainda não foi publicada.');
@define('ENTRIES_BY', 'Entradas por %s');
@define('PREVIOUS', 'Anterior');
@define('NEXT', 'Seguinte');
@define('APPROVE', 'Aprovar');
@define('DO_MARKUP_DESCRIPTION', 'Aplicar transformações nos códigos do texto (smilies, abreviaturas via *, /, _, ...). Desligando esta função irá preservará qualquer código HTML no texto.');
@define('CATEGORY_ALREADY_EXIST', 'Uma categoria com o nome "%s" já existe');
@define('IMPORT_NOTES', 'Nota:');
@define('ERROR_FILE_FORBIDDEN', 'Não é permitido fazer upload de ficheiros com conteúdo activo'); // Verify
@define('ADMIN', 'Administração');
@define('ADMIN_FRONTPAGE', 'Primeira página');
@define('QUOTE', 'Citar'); // Verify
@define('IFRAME_SAVE', 'Serendipity está guardando a sua entrada, criando trackbacks e realizando possíveis chamadas de XML-RPC. Isto pode demorar um pouco...');
@define('IFRAME_SAVE_DRAFT', 'Um rascunho desta entrada foi guardado');
@define('IFRAME_PREVIEW', 'Serendipity está agora a criar uma previsão da sua entrada...');
@define('IFRAME_WARNING', 'O seu navegador não suporta o conceito de iframes. Por favor abra o seu ficheiro serendipity_config.inc.php e defina a variável $serendipity[\'use_iframe\'] como FALSE.'); // Verify
@define('NONE', 'nenhum');
@define('USERCONF_CAT_DEFAULT_NEW_ENTRY', 'Características por omissão de novas entradas');
@define('UPGRADE', 'Actualizar');
@define('UPGRADE_TO_VERSION', 'Actualizar para a versão %s');
@define('DELETE_DIRECTORY', 'Apagar directoria');
@define('DELETE_DIRECTORY_DESC', 'Está prestes a apagar o conteúdo duma directoria que contém ficheiros de multimédia que podem ser usados por outras das suas entradas.'); // Verify
@define('FORCE_DELETE', 'Apagar TODOS os ficheiros nesta directoria, incluindo os desconhecidos pelo Serendipity');
@define('CREATE_DIRECTORY', 'Criar directoria');
@define('CREATE_NEW_DIRECTORY', 'Criar nova directoria');
@define('CREATE_DIRECTORY_DESC', 'Aqui pode criar uma nova directoria aonde colocar ficheiros multimédia. Escolha o nome para a nova directoria e seleccione se necessário a directoria onde aquela é colocada.'); // Verify
@define('BASE_DIRECTORY', 'Directoria base');
@define('USERLEVEL_EDITOR_DESC', 'Editor');
@define('USERLEVEL_CHIEF_DESC', 'Editor Chefe');
@define('USERLEVEL_ADMIN_DESC', 'Administrador');
@define('USERCONF_USERLEVEL', 'Nível de acesso');
@define('USERCONF_USERLEVEL_DESC', 'Este nível é usado para determinar que tipo de acesso ao blogue tem este utilizador');
@define('USER_SELF_INFO', 'Conectado como %s (%s)'); // Verify
@define('ADMIN_ENTRIES', 'Entradas');
@define('RECHECK_INSTALLATION', 'Volte a verificar a instalação');
@define('IMAGICK_EXEC_ERROR', 'Impossível executar: "%s", erro: %s, variável devolvida: %d');
@define('INSTALL_OFFSET_DESC', 'Introduza a diferença horária entre o seu servicor (corrente: %clock%) e o fuso horário pretendido');
@define('UNMET_REQUIREMENTS', 'Requisitos falharam: %s');
@define('CHARSET', 'Codificação de caracteres');
@define('AUTOLANG', 'Por omissão usar a linguagem do navegador do visitante');
@define('AUTOLANG_DESC', 'Se escolhido, isto usará a linguagem do navegador do utilizador para determinar a linguagem por omissão da sua entrada e a linguagem da interface.');
@define('INSTALL_AUTODETECT_URL', 'Autodetectar HTTP-Host utilizado');
@define('INSTALL_AUTODETECT_URL_DESC', 'Se definido como "true", o Serendipity assegurará que o HTTP Host que é usado pelo seu visitante é usado como definição de BaseURL. Permitir isto torna possível usar vários nomes de domínio para o seu blogue Serendipity, e usar o domínio para todas as ligações subsequentes.'); // Verify
@define('CONVERT_HTMLENTITIES', 'Tentar converter as entidades HTML?');
@define('EMPTY_SETTING', 'Não especificou um valor válido para "%s"!');
@define('USERCONF_REALNAME', 'Nome verdadeiro');
@define('USERCONF_REALNAME_DESC', 'O nome completo do autor. Este é o nome visto pelos leitores');
@define('HOTLINK_DONE', 'Ficheiro hotlinked.<br />Feito.'); // Verify
@define('ENTER_MEDIA_URL_METHOD', 'Método de obtenção:');
@define('ADD_MEDIA_BLAHBLAH_NOTE', 'Nota: Se escolher fazer um hotlink para  o servidor, assegure-se que tem permissão para tal ou que o servidor é seu. Hotlinks permitem usar imagens sem as guardar localmente.'); // Verify
@define('MEDIA_HOTLINKED', 'hotlinked'); // Translate?
@define('FETCH_METHOD_IMAGE', 'Download da imagem para o seu servidor');
@define('FETCH_METHOD_HOTLINK', 'Hotlink para servidor'); // Verify
@define('DELETE_HOTLINK_FILE', 'Apagado o ficheiro hotlinked intitulado <b>%s</b>'); // Verify
@define('SYNDICATION_PLUGIN_SHOW_MAIL', 'Mostrar endereços de e-mail?');
@define('IMAGE_MORE_INPUT', 'Adicionar imagens');
@define('BACKEND_TITLE', 'Informação adicional no écrã de configuração de plugins');
@define('BACKEND_TITLE_FOR_NUGGET', 'Aqui pode definir um pedaço de texto personalizado que é mostrado no écrã de configuração de plugins juntamente com a descrição do plugin HTML Nugget. Se tiver múltiplos HTML nuggets com um título por preencher, isto permite distinguir os plugins entre si.');
@define('CATEGORIES_ALLOW_SELECT', 'Permitir aos visitantes mostrar múltiplas categorias simultaneamente?');
@define('CATEGORIES_ALLOW_SELECT_DESC', 'Se esta opção for activada, uma caixa de marcação será posta ao lado de cada categoria no plugin da barra lateral. Os utilizadores podem marcar estas caixas e depois ver as entradas correspondendo à sua selecção.'); // Verify
@define('PAGE_BROWSE_PLUGINS', 'Página %s de %s, totalizando %s plugins.');
@define('INSTALL_CAT_PERMALINKS', 'Links Pernamentes'); // Translate ?
@define('INSTALL_CAT_PERMALINKS_DESC', 'Define vários padrões de URLs para definir ligações permanentes no seu blogue. É sugerido que use as escolhas por omissão; caso contrário, deverá tentar usar o valor da %id% sempre que possível para evitar que o Serendipity pergunte à base de dados pela URL alvo.'); // Verify
@define('INSTALL_PERMALINK', 'Estrutura de introdução do URL de Links Pernamentes'); // Verify
@define('INSTALL_PERMALINK_DESC', 'Aqui pode definir a estrura relativa de URLs do seu URL base até onde as entradas estão disponíveis. Pode usar as variáveis %id%, %title%, %day%, %month%, %year% e quaisquer outros caracteres..'); // Verify
@define('INSTALL_PERMALINK_AUTHOR', 'Estrutura de URL de Links Pernamentes do Autor'); // Verify
@define('INSTALL_PERMALINK_AUTHOR_DESC', 'Aqui pode definir a estrura relativa dos URLs do seu URL base até onde entradas para certos autores ficam disponíveis. Pode usar as variáveis %id%, %realname%, %username%, %email% e quaisquer outros caracteres.'); // Verify
@define('INSTALL_PERMALINK_CATEGORY', 'Estrutura do URL para Links Pernamentes por Categoria'); // Verify
@define('INSTALL_PERMALINK_CATEGORY_DESC', 'Aqui pode definir a estrura relativa dos URLs do seu URL base até onde entradas para certas categorias ficam disponíveis. Pode usar as variáveis %id%, %name%, %parentname%, %description% e quaisquer outros caracteres.'); // Verify
@define('INSTALL_PERMALINK_FEEDCATEGORY', 'Estrutura do URL para Links Permanentes por Categoria de RSS-Feed'); // Verify
@define('INSTALL_PERMALINK_FEEDCATEGORY_DESC', 'Aqui pode definir a estrutura relativa dos URLs d seu URL base até onde entradas para certas categorias de RSS-Feed ficam disponíveis. Pode usar as variáveis %id%, %name%, %description% e quaisquer outros caracteres.'); // Verify
@define('INSTALL_PERMALINK_ARCHIVESPATH', 'Caminho para arquivos');
@define('INSTALL_PERMALINK_ARCHIVEPATH', 'Caminho para arquivo');
@define('INSTALL_PERMALINK_CATEGORIESPATH', 'Caminho para categorias');
@define('INSTALL_PERMALINK_UNSUBSCRIBEPATH', 'Caminho para desistir da subscrição de comentários');
@define('INSTALL_PERMALINK_DELETEPATH', 'Caminho para apagar comentários');
@define('INSTALL_PERMALINK_APPROVEPATH', 'Caminho para aprovar comentários');
@define('INSTALL_PERMALINK_FEEDSPATH', 'Caminho para RSS Feeds');
@define('INSTALL_PERMALINK_PLUGINPATH', 'Caminho para plugin único'); //Verify
@define('INSTALL_PERMALINK_ADMINPATH', 'Caminho para Administração');
@define('INSTALL_PERMALINK_SEARCHPATH', 'Caminho para a pesquisa'); //Verify
@define('INSTALL_CAL', 'Género de calendário');
@define('INSTALL_CAL_DESC', 'Escolha o formato de calendário desejado');
@define('REPLY', 'Responder');
@define('USERCONF_GROUPS', 'Inscrições em grupos');
@define('USERCONF_GROUPS_DESC', 'Este utilizador é membro dos seguintes grupos. Inscrições múltiplas são possíveis.');
@define('MANAGE_GROUPS', 'Gestão de grupos');
@define('DELETED_GROUP', 'O grupo #%d %s foi apagado.');
@define('CREATED_GROUP', 'Um novo grupo %s foi criado');
@define('MODIFIED_GROUP', 'As propriedades do grupo %s foram mudadas');
@define('GROUP', 'Grupo');
@define('CREATE_NEW_GROUP', 'Criar novo grupo');
@define('DELETE_GROUP', 'Está prestes a apagar o grupo #%d %s. Tem a certeza?');
@define('USERLEVEL_OBSOLETE', 'AVISO: O atributo de nível de utilizador é agora só usado para compatibilidade com plugins ou como método de autorização substituto. Privilégios de utilizador são geridos por inscrição em grupos!'); //Verify
@define('SYNDICATION_PLUGIN_FEEDBURNERID', 'ID do FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_DESC', 'O ID do feed que deseja publicar');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG', 'Imagem do FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERIMG_DESC', 'Nome da imagem a mostrar (ou deixe em branco para contador), localizada em feedburner.com, ex: fbapix.gif');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE', 'Título do FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERTITLE_DESC', 'Título (se pretendido) a mostrar ao lado da imagem');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT', 'Texto da imagem do FeedBurner');
@define('SYNDICATION_PLUGIN_FEEDBURNERALT_DESC', 'Texto (se pretendido) a mostrar quando se pairao cursor sobre a imagem');
@define('SEARCH_TOO_SHORT', 'O texto a procurar deverá ter mais que 3 caracteres. Pode usar * como sufixo, por exemplo s9y*, para forçar a pesquisa por palavras mais pequenas.');
@define('INSTALL_DBPORT', 'Porto da base de dados'); //Verify
@define('INSTALL_DBPORT_DESC', 'Porto usado para ligar ao servidor da base de dados');
@define('PLUGIN_GROUP_FRONTEND_EXTERNAL_SERVICES', 'Frontend: Serviços Externos');
@define('PLUGIN_GROUP_FRONTEND_FEATURES', 'Frontend: Características');
@define('PLUGIN_GROUP_FRONTEND_FULL_MODS', 'Frontend: Modificações ');
@define('PLUGIN_GROUP_FRONTEND_VIEWS', 'Frontend: Vistas');
@define('PLUGIN_GROUP_FRONTEND_ENTRY_RELATED', 'Frontend: Relacionado com Entradas');
@define('PLUGIN_GROUP_BACKEND_EDITOR', 'Backend: Editor');
@define('PLUGIN_GROUP_BACKEND_USERMANAGEMENT', 'Backend: Gestão de Utilizadores');
@define('PLUGIN_GROUP_BACKEND_METAINFORMATION', 'Backend: Meta informação');
@define('PLUGIN_GROUP_BACKEND_TEMPLATES', 'Backend: Modelos');
@define('PLUGIN_GROUP_BACKEND_FEATURES', 'Backend: Características');
@define('PLUGIN_GROUP_IMAGES', 'Imagens');
@define('PLUGIN_GROUP_ANTISPAM', 'Anti-Spam');
@define('PLUGIN_GROUP_MARKUP', 'Código');
@define('PLUGIN_GROUP_STATISTICS', 'Estatísticas');
@define('PERMISSION_PERSONALCONFIGURATION', 'personalConfiguration: Aceder à configuração pessoal');
@define('PERMISSION_PERSONALCONFIGURATIONUSERLEVEL', 'personalConfigurationUserlevel: Modificar níveis de utilizador');
@define('PERMISSION_PERSONALCONFIGURATIONNOCREATE', 'personalConfigurationNoCreate: Mudar "proibir criação de entradas"');
@define('PERMISSION_PERSONALCONFIGURATIONRIGHTPUBLISH', 'personalConfigurationRightPublish: Mudar direito de publicar entradas');
@define('PERMISSION_SITECONFIGURATION', 'siteConfiguration: Aceder à configuração de sistema');
@define('PERMISSION_BLOGCONFIGURATION', 'blogConfiguration: Aceder à configuração blogo-cêntrica');
@define('PERMISSION_ADMINENTRIES', 'adminEntries: Administrar entradas');
@define('PERMISSION_ADMINENTRIESMAINTAINOTHERS', 'adminEntriesMaintainOthers: Administrar entradas de outros utilizadores');
@define('PERMISSION_ADMINIMPORT', 'adminImport: Importar entradas');
@define('PERMISSION_ADMINCATEGORIES', 'adminCategories: Administrar categorias');
@define('PERMISSION_ADMINCATEGORIESMAINTAINOTHERS', 'adminCategoriesMaintainOthers: Administrar outras categorias dos utilizadores');
@define('PERMISSION_ADMINCATEGORIESDELETE', 'adminCategoriesDelete: Apagar categorias');
@define('PERMISSION_ADMINUSERS', 'adminUsers: Administrar utilizadores');
@define('PERMISSION_ADMINUSERSDELETE', 'adminUsersDelete: Apagar utilizadores');
@define('PERMISSION_ADMINUSERSEDITUSERLEVEL', 'adminUsersEditUserlevel: Mudar nível de utilizador');
@define('PERMISSION_ADMINUSERSMAINTAINSAME', 'adminUsersMaintainSame: Administrar utilizadores do(s) seu(s) grupo(s)');
@define('PERMISSION_ADMINUSERSMAINTAINOTHERS', 'adminUsersMaintainOthers: Administrar utilizadores que não pertencem ao(s) seu(s) grupo(s)');
@define('PERMISSION_ADMINUSERSCREATENEW', 'adminUsersCreateNew: Criar novos utilizadores');
@define('PERMISSION_ADMINUSERSGROUPS', 'adminUsersGroups: Administrar grupos de utilizadores');
@define('PERMISSION_ADMINPLUGINS', 'adminPlugins: Administrar plugins');
@define('PERMISSION_ADMINPLUGINSMAINTAINOTHERS', 'adminPluginsMaintainOthers: Administrar plugins de outros utilizadores');
@define('PERMISSION_ADMINIMAGES', 'adminImages: Administrar ficheiros de multimédia');
@define('PERMISSION_ADMINIMAGESDIRECTORIES', 'adminImagesDirectories: Administrate directorias de multimédia');
@define('PERMISSION_ADMINIMAGESADD', 'adminImagesAdd: Juntar novos ficheiros de multimédia');
@define('PERMISSION_ADMINIMAGESDELETE', 'adminImagesDelete: Apagar ficheiros de multimédia');
@define('PERMISSION_ADMINIMAGESMAINTAINOTHERS', 'adminImagesMaintainOthers: Administrar ficheiros de multimédia de outros utilizadores');
@define('PERMISSION_ADMINIMAGESVIEW', 'adminImagesView: Ver ficheiros de multimédia');
@define('PERMISSION_ADMINIMAGESSYNC', 'adminImagesSync: Sincronizar thumbnails');
@define('PERMISSION_ADMINCOMMENTS', 'adminComments: Administrar comentários');
@define('PERMISSION_ADMINTEMPLATES', 'adminTemplates: Administrar modelos');
@define('INSTALL_BLOG_EMAIL', 'Endereço de E-mail do Blogue');
@define('INSTALL_BLOG_EMAIL_DESC', 'Isto configura o endereço de E-mail que é usado na linha de "From" de e-mail que segue para o exterior. Certifique-se que isto é um endereço de e-mail que é reconhecido pelo servidor de mail configurado no seu servidor - muitos servidores de mail rejeitam mensagens com um endereço de "From"" desconhecido.');
@define('CATEGORIES_PARENT_BASE', 'Mostre só categorias abaixo...');
@define('CATEGORIES_PARENT_BASE_DESC', 'Pode escolher uma categoria antecessora para que só as categorias descendentes sejam vistas.');
@define('CATEGORIES_HIDE_PARALLEL', 'Esconder categorias que não fazem parte da árvore de categorias');
@define('CATEGORIES_HIDE_PARALLEL_DESC', 'Se quiser esconder categorias que fazem parte de uma árvore de categorias distinta, é preciso autorizar isto. Esta característica faz sentido especialmente se usada com um multi-blogue usando o plugin de "Propriedades/Modelos de categorias".');
@define('PERMISSION_ADMINIMAGESVIEWOTHERS', 'adminImagesViewOthers: Ver ficheiros de multimédia de outros utilizadores');
@define('CHARSET_NATIVE', 'Nativo');
@define('INSTALL_CHARSET', 'Escolha de codificação de caracteres');
@define('INSTALL_CHARSET_DESC', 'Aqui pode optar entre codificações de caracteres UTF-8 ou nativas (ISO, EUC, ...). Algumas línguas só têm traduções UTF-8 de forma que mudar a codificação para "Nativo" não produzirá qualquer efeito. Sugere-se UTF-8 em instalações novas. Não altere esta definição se já criou entradas com caracteres especiais - isso pode causar corrupção de caracteres. Certifique-se que lê mais sobre este assunto em http://www.s9y.org/index.php?node=46.');
@define('CALENDAR_ENABLE_EXTERNAL_EVENTS', 'Accionar conexão ao Plugin API');
@define('CALENDAR_EXTEVENT_DESC', 'Se accionado, os plugins podem conectar ao calendário para mostrar os seus eventos destacados. Só accione se instalou plugins que precisam disto, caso contrário o único efeito é diminuir a performance.');
@define('XMLRPC_NO_LONGER_BUNDLED', 'A Interface da API de XML-RPC para Serendipity já não é incluída devido a questões de segurança correntes com esta API e ao facto de ser pouco usada. Assim precisa de instalar o Plugin de XML-RPC para usar a API de XML-RPC. A URL a usar nas suas aplicações NÃO mudará - assim que instalar o plugin, poderá de novo usar a API.');
@define('PERM_READ', 'Permissão de leitura');
@define('PERM_WRITE', 'Permissão de escrita');

@define('PERM_DENIED', 'Permissão negada.');
@define('INSTALL_ACL', 'Aplicar permissões de leitura às categorias');
@define('INSTALL_ACL_DESC', 'Se accionado, as preferências de permissões de grupos de utilizadores que definir para categorias serão aplicadas quando utilizadores que fizeram login virem o seu blogue. Se inactivo, as permissões de leitura das categorias NÃO serão aplicadas, mas o efeito positivo é uma ligeira velocidade adicional no seu blogue. Assim se não precisar de permissões de leitura multi-utilizador para o seu blogue, inactive esta preferência.');
@define('PLUGIN_API_VALIDATE_ERROR', 'Sintaxe de configuração errada para a opção "%s". Precisa de conteúdo do tipo "%s".');
@define('USERCONF_CHECK_PASSWORD', 'Senha antiga');
@define('USERCONF_CHECK_PASSWORD_DESC', 'Se mudar a senha no campo acima, precisa de inserir a senha corrente neste campo.');
@define('USERCONF_CHECK_PASSWORD_ERROR', 'Não especificou a senha antiga correctamente, e não está autorizado a mudar a nova senha. As suas preferências não foram guardadas.');
@define('ERROR_XSRF', 'O seu navegador não enviou uma sequência válida de HTTP-Referrer. Isto pode ter sido causado por um proxy ou navegador mal configurado ou por um Cross Site Request Forgery (XSRF) dirigido a si. A acção que solicitou não pôde ser completada.');

@define('AUTHORS', 'Autores');
@define('AUTHORS_ALLOW_SELECT', 'Permitir aos visitantes ver múltiplos autores simultaneamente?');
@define('AUTHORS_ALLOW_SELECT_DESC', 'Se esta opção estiver escolhida, uma marca será posta junto a cada autor no plugin de barra lateral. Os utilizadores podem alterar essas marcas para ver as entradas correspondentes à sua selecção.');
@define('AUTHOR_PLUGIN_DESC', 'Mostra uma lista de autores');
@define('CATEGORY_PLUGIN_TEMPLATE', 'Activar Smarty-Templates?');
@define('CATEGORY_PLUGIN_TEMPLATE_DESC', 'Se esta opção estiver activada, o plugin usará propriedades de Smarty-Templating para mostrar a lista de categorias. Se activar isto, pode mudar a formatação via o ficheiro modelo "plugin_categories.tpl". A activação desta opção terá um impacto na performance, de maneira que se não precisar de fazer adaptações, deixe-a inactiva.');
@define('CATEGORY_PLUGIN_SHOWCOUNT', 'Mostrar número de entradas por categoria?');
@define('AUTHORS_SHOW_ARTICLE_COUNT', 'Mostrar número de artigos ao lado do nome nome do autor?');
@define('AUTHORS_SHOW_ARTICLE_COUNT_DESC', 'Se esta opção for activada, o número de artigos deste autor será mostrado entre parêntesis junto ao nome do Autor.');
@define('CUSTOM_ADMIN_INTERFACE', 'Interface Administrativa ad hoc disponível');
@define('COMMENT_NOT_ADDED', 'Os seus comentários não foram adicionados, porque ou comentários para este artigo não estão autorizados, ou introduziu dados inválidos, ou os seus comentários foram interceptados por medidas anti-spam. ');
@define('INSTALL_TRACKREF', 'Activar localização do referenciador?');
@define('INSTALL_TRACKREF_DESC', 'A activação da localização do referenciador permite mostrar que sítios se referem aos seus artigos. Hoje em dia esta possibilidade é abusada para inserção de spam, de maneira que pode desligá-la se quiser.');
@define('CATEGORIES_HIDE_PARENT', 'Esconder a categoria mãe seleccionada?');
@define('CATEGORIES_HIDE_PARENT_DESC', 'Se restringir a listagem de categorias a uma categoria específica, por omissão verá a categoria mãe na listagem de saída. Se inactivar esta opção, o nome da categoria mãe não será mostrado.');
@define('WARNING_NO_GROUPS_SELECTED', 'Aviso: Não seleccionou afiliações em grupos. Isto encerrou a sua gestão de grupos, e as suas afiliações em grupos não foram alteradas.');
@define('INSTALL_RSSFETCHLIMIT', 'Entradas a mostrar nos Feeds');  // Verify
@define('INSTALL_RSSFETCHLIMIT_DESC', 'Número de entradas a mostrar por página do RSS Feed.'); // Verify
@define('INSTAL_DB_UTF8', 'Activar conversão da codificação de caracteres na base de dados');
@define('INSTAL_DB_UTF8_DESC', 'Envia um comando MySQL "SET NAMES" para indicar a codificação de caracteres requerida para a base de dados. Ligue ou desligue, se vir caracteres estranhos no seu blogue.');
@define('ONTHEFLYSYNCH', 'Activar a sincronização de multimédia instantânea');
@define('ONTHEFLYSYNCH_DESC', 'Se activado, o Serendipity comparará a base de dados de multimédia com os ficheiros guardados no seu servidor e sincronizará a base de dados com o conteúdo da directoria.');
@define('USERCONF_CHECK_USERNAME_ERROR', 'O nome do utilizador não pode ser deixado em branco.');
@define('FURTHER_LINKS', 'Ligações adicionais');
@define('FURTHER_LINKS_S9Y', 'Sítio do Serendipity');
@define('FURTHER_LINKS_S9Y_DOCS', 'Documentação do Serendipity');
@define('FURTHER_LINKS_S9Y_BLOG', 'Blogue Oficial');
@define('FURTHER_LINKS_S9Y_FORUMS', 'Fóruns');
@define('FURTHER_LINKS_S9Y_SPARTACUS', 'Spartacus');
@define('COMMENT_IS_DELETED', '(Comentário removido)');



// I translated in full this part of the language file, from english to portuguese, word by word,making use of Microsoft´s Word as addictional verification and PHP Designer 2007 Professional Editor as editor. --- $Angel (and I hopefully improved it, J P Matos; Obrigado $Angel).

@define('CURRENT_AUTHOR', 'Autor corrente');

@define('WORD_NEW', 'Novo');
@define('SHOW_MEDIA_TOOLBAR', 'Mostrar barra dentro do seleccionador de media-popup?');
@define('MEDIA_KEYWORDS', 'Palavras-chave para a Media');
@define('MEDIA_KEYWORDS_DESC', 'Entre uma listagem, de palavras separadas por ";" através das quais deseja pré-definir, via palavras-chave, os seus itens de media.');
@define('MEDIA_EXIF', 'Importar imagens EXIF/JPEG');
@define('MEDIA_EXIF_DESC', 'Uma vez activado, as imagens EXIF/JPEG existentes serão separadas e arquivadas na base de dados para exposição na galeria de media.');
@define('MEDIA_PROP', 'Propriedades da Media');


@define('GO_ADD_PROPERTIES', 'Ir & introduzir propriedades');
@define('MEDIA_PROPERTY_DPI', 'DPI (PPP)');
@define('MEDIA_PROPERTY_COPYRIGHT', 'Direitos de Autor');
@define('MEDIA_PROPERTY_COMMENT1', 'Comentário Breve');
@define('MEDIA_PROPERTY_COMMENT2', 'Comentário Longo');
@define('MEDIA_PROPERTY_TITLE', 'Título');
@define('MEDIA_PROP_DESC', 'Entre uma listagem separada por ";" nos campos de propriedade, relativa ao modo como deseja definir cada um dos seus ficheiros Media');
@define('MEDIA_PROP_MULTIDESC', '(Você pode colocar ":MULTI" após algum item para indicar que o mesmo irá conter texto longo em vez de apenas alguns caracteres)');

@define('STYLE_OPTIONS_NONE', 'Este tema/estilo não tem opções específicas. Para visualizar como o seu modelo (template) pode expecificar opções, leia a Documentação Técnica disponível em www.s9y.org acerca de "Configuration of Theme options".');
@define('STYLE_OPTIONS', 'Opções de Tema/Estilo');

@define('PLUGIN_AVAILABLE_COUNT', 'Total: %d plugins.');

@define('SYNDICATION_RFC2616', 'Activar obediência estrita ao RFC2616 RSS-Feed');
@define('SYNDICATION_RFC2616_DESC', 'NÃO forçar o RFC2616 significa que todos os "Conditional GETs" pelo Serendipity irão devolver as últimas entradas modificadas deste o seu último pedido. Uma vez colocada a configuração como "false", os seus visitantes irão obter todos os artigos no seu último pedido, o que é um bom resultado. No entanto, alguns Agentes tal como Planet irão agir de forma estranha, se tal acontecer, violando também o RFC2616. Se colocar esta opção como "TRUE", você irá cumprir aquele RFC, mas os leitores do seu RSS Feed talvez percam alguns itens durante as férias. De qualquer forma, ou adora Agredadores como o Planet, ou fere os leitores actuais do seu Blogue. Se você está a enfrentar queixas de ambos os lados, poderá alterar esta opção. Referência: <a href="https://sourceforge.net/tracker/index.php?func=detail&amp;aid=1461728&amp;group_id=75065&amp;atid=542822" target="_blank" rel="nofollow">SourceForge</a>');
@define('MEDIA_PROPERTY_DATE', 'Data Associada');
@define('MEDIA_PROPERTY_RUN_LENGTH', 'Comprimento');
@define('FILENAME_REASSIGNED', 'Associa um novo ficheiro automaticamente: %s');
@define('MEDIA_UPLOAD_SIZE', 'Máximo do tamanho do ficheiro carregado');
@define('MEDIA_UPLOAD_SIZE_DESC', 'Introduza o tamanho máximo para upload de um ficheiro em bytes. Esta configuração poderá ser reescrita pelas definições incluídas no servidor via o ficheiro php.ini: upload_max_filesize, post_max_size, max_input_time em todos os precedentes acima desta opção. Um string vazio significa que apenas serão usado os limites definidos no servidor.');
@define('MEDIA_UPLOAD_SIZEERROR', 'Erro: Você não pode fazer upload de ficheiros maiores que %s bytes!');
@define('MEDIA_UPLOAD_MAXWIDTH', 'Máximo de largura de imagens no upload');
@define('MEDIA_UPLOAD_MAXWIDTH_DESC', 'Entre o máximo de largura permitido no upload em pixels.');
@define('MEDIA_UPLOAD_MAXHEIGHT', 'Máximo de altura de imagens no upload');
@define('MEDIA_UPLOAD_MAXHEIGHT_DESC', 'Entre o máximo de altura permitido por upload em pixels.');
@define('MEDIA_UPLOAD_DIMERROR', 'Erro: Você não pode fazer upload de ficheiros maiores que %s x %s pixels!');

@define('MEDIA_TARGET', 'Alvo para esta ligação');
@define('MEDIA_TARGET_JS', 'Janela de Popup (via JavaScript, tamanho adaptável)');
@define('MEDIA_ENTRY', 'Entrada isolada');
@define('MEDIA_TARGET_BLANK', 'Janela de Popup (via target=_blank)');

@define('MEDIA_DYN_RESIZE', 'Permitir redimencionamento dinãmico de imagens?');
@define('MEDIA_DYN_RESIZE_DESC', 'Se activado, o seleccionador de media pode retornar as imagens em qualquer tamanho pretendido via a variante GET. Os resultados são colocados em cache, podendo criar um grande conjunto de ficheiros se fizer uso extensivo desta possibilidade.');

@define('MEDIA_DIRECTORY_MOVED', 'O Directório tal como os ficheiros foram movidos com sucesso para %s');
@define('MEDIA_DIRECTORY_MOVE_ERROR', 'O Directório tal como os ficheiros não puderam ser movidos para %s!');
@define('MEDIA_DIRECTORY_MOVE_ENTRY', 'Em bases de dados distintas de MySQL não é possível intervir através de cada artigo para substituir o directório antigo dos URLs com um novo directório. Será necessário editar as suas entradas manualmente para corrigir novos URLs. Você pode ainda repôr o seu antigo directório onde ele se encontrava, se isso for muito incómodo para si.');
@define('MEDIA_DIRECTORY_MOVE_ENTRIES', 'Moveu-se o URL do directório alterado para estas %s entradas..');
@define('PLUGIN_ACTIVE', 'Activo');
@define('PLUGIN_INACTIVE', 'Inactivo');
@define('PREFERENCE_USE_JS', 'Activar utilização de JavaScript Avançado?');
@define('PREFERENCE_USE_JS_DESC', 'Se activado, as secções com JavaScript avançado irão ser activadas para melhor utilização, tal como a secção do plugin de configuração, "Plugin Configuration", poderá ser usada por si para arrastar e colar plugins reorganizados.');

@define('PREFERENCE_USE_JS_WARNING', '(Esta página usa JavaScript avançado. Se está a deparar-se com problemas de funcionalidade, desactive por favor a utilização de JavaScript avançado nas suas preferências pessoais ou desactive a função de JavaScript do seu Navegador.)');


@define('INSTALL_PERMALINK_COMMENTSPATH', 'Caminho para comentários');
@define('PERM_SET_CHILD', 'Configure as mesmas permissões para todos os subdirectórios recursivamente');
@define('PERMISSION_FORBIDDEN_PLUGINS', 'Plugins proibidos');
@define('PERMISSION_FORBIDDEN_HOOKS', 'Eventos proibidos');
@define('PERMISSION_FORBIDDEN_ENABLE', 'Activar Plugin ACL para grupos?');
@define('PERMISSION_FORBIDDEN_ENABLE_DESC', 'Se a opção "Plugin ACL para grupos" está activada na configuração, você pode especificar que grupos estão autorizados a executar certos plugins/eventos.');
@define('DELETE_SELECTED_ENTRIES', 'Eliminar entradas seleccionadas');
@define('PLUGIN_AUTHORS_MINCOUNT', 'Mostar apenas Autores com um mínimo de X artigos');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET', 'Bookmarklet');
@define('FURTHER_LINKS_S9Y_BOOKMARKLET_DESC', 'Marque esta ligação e use-a em qualquer página em que quiser blogar para aceder rapidamente ao seu blogue Serendipity.');
@define('IMPORT_WP_PAGES', 'Ir também buscar ficheiros anexados e páginas estáticas como entradas de blog normais?');
@define('USERCONF_CREATE', 'Disable user / forbid activity?');
@define('USERCONF_CREATE_DESC', 'If selected, the user will not have any editing or creation possibilities on the blog anymore. When logging in to the backend, he cannot do anything else apart from logging out and viewing his personal configuration.');
@define('CATEGORY_HIDE_SUB', 'Hide postings made to sub-categories?');
@define('CATEGORY_HIDE_SUB_DESC', 'By default, when you browse a category also entries of any subcategory are displayed. If this option is turned on, only postings of the currently selected category are displayed.');
@define('PINGBACK_SENDING', 'Sending pingback to URI %s...');
@define('PINGBACK_SENT', 'Pingback successful');
@define('PINGBACK_FAILED', 'Pingback failed: %s');
@define('PINGBACK_NOT_FOUND', 'No pingback-URI found.');
@define('CATEGORY_PLUGIN_HIDEZEROCOUNT', 'Hide archives link when no entries were made in that timespan (requires counting entries)');
@define('RSS_IMPORT_WPXRSS', 'WordPress eXtended RSS import, requires PHP5 and might take up much memory');
@define('SET_TO_MODERATED', 'Moderate');
@define('COMMENT_MODERATED', 'Comment #%s has successfully been set as moderated');
@define('CENTER', 'center');
@define('FULL_COMMENT_TEXT', 'Yes, with full comment text');

@define('COMMENT_TOKENS', 'Use Tokens for Comment Moderation?');
@define('COMMENT_TOKENS_DESC', 'If tokens are used, comments can be approved and deleted by clicking the email links without requiring login access to the blog. Note that this is a convenience feature, and if your mails get hijacked, those people can approve/delete the referenced comment without further authentication.');
@define('COMMENT_NOTOKENMATCH', 'Moderation link has expired or comment #%s has already been approved or deleted');
@define('TRACKBACK_NOTOKENMATCH', 'Moderation link has expired or trackback #%s has already been approved or deleted');
@define('BADTOKEN', 'Invalid Moderation Link'); 

@define('CONFIRMATION_MAIL_ALWAYS', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n");
@define('CONFIRMATION_MAIL_ONCE', "Hello %s,\n\nYou have sent a new comment to \"%s\". Your comment was:\n\n%s\n\nThe owner of the blog has enabled one-time mail verification, so you need to click on the following link to authenticate your comment:\n<%s>\n\nAfter you have done that, you can always post comments on that blog with your username and e-mail address without receiving such notifications.");
@define('INSTALL_SUBSCRIBE_OPTIN', 'Use Double-Opt In for comment subscriptions?');
@define('INSTALL_SUBSCRIBE_OPTIN_DESC', 'If enabled, when a comment is made where the person wants to be notified via e-mail about new comments to the same entry, he must confirm his subscription to the entry. This Double-Opt In is required by german law, for example.');
@define('CONFIRMATION_MAIL_SUBSCRIPTION', "Hello %s,\n\nYou have requested to be notified for comments to \"%s\" (<%s>). To approve this subscription (\"Double Opt In\") please click this link:\n<%s>\n.");
@define('NOTIFICATION_CONFIRM_SUBMAIL', 'Your confirmation of your comment subscription has been successfully entered.');
@define('NOTIFICATION_CONFIRM_MAIL', 'Your confirmation of the comment has been successfully entered.');
@define('NOTIFICATION_CONFIRM_SUBMAIL_FAIL', 'Your comment subscription could not be confirmed. Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must request a new confirmation mail.');
@define('NOTIFICATION_CONFIRM_MAIL_FAIL', 'Your comment confirmation could not be confirmed.  Please check the link you clicked on for completion. If the link was sent more than 3 weeks ago, you must send your comment again.');
@define('PLUGIN_DOCUMENTATION', 'Documentation');
@define('PLUGIN_DOCUMENTATION_LOCAL', 'Local Documentation');
@define('PLUGIN_DOCUMENTATION_CHANGELOG', 'Version history');
@define('SYNDICATION_PLUGIN_BIGIMG', 'Big Image');
@define('SYNDICATION_PLUGIN_BIGIMG_DESC', 'Display a (big) image at the top of the feeds in sidebar, enter full or absolute URL to image file.');
@define('SYNDICATION_PLUGIN_FEEDNAME', 'Displayed name for "feed"');
@define('SYNDICATION_PLUGIN_FEEDNAME_DESC', 'Enter an optional custom name for the feeds (defaults to "feed" when empty)');
@define('SYNDICATION_PLUGIN_COMMENTNAME', 'Displayed name for "comment" feed');
@define('SYNDICATION_PLUGIN_COMMENTNAME_DESC', 'Enter an optional custom name for the comment feed');
@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD', '(If you enter an absolute URL with http://... here, this URL will be used as the redirection target in case you have enabled the "Force" option for FeedBurner. Note that this can also be a URL independent to FeedBurner. For new Google FeedBurner feeds, you need to enter http://feeds2.feedburner.com/yourfeedname here)');

@define('SYNDICATION_PLUGIN_FEEDBURNERID_FORWARD2', 'If you set this option to "Force" you can forward the RSS feed to any webservice, not only FeedBurner. Look at the option "Feedburner ID" below to enter an absolute URL)');
@define('COMMENTS_FILTER_NEED_CONFIRM', 'Pending user confirmation');
@define('NOT_WRITABLE_SPARTACUS', ' (Only required when you plan to use Spartacus plugin for remote plugin download)');
@define('MEDIA_ALT', 'ALT-Attribute (depiction or short description)');
@define('MEDIA_PROPERTY_ALT', 'Depiction (summary for ALT-Attribute)');

@define('MEDIA_TITLE', 'TITLE-Attribute (will be displayed on mouse over)');

@define('QUICKSEARCH_SORT', 'How should search-results be sorted?');

@define('QUICKSEARCH_SORT_RELEVANCE', 'Relevance');

@define('PERMISSION_HIDDENGROUP', 'Hidden group / Non-Author');

@define('SEARCH_FULLENTRY', 'Show full entry');
@define('NAVLINK_AMOUNT', 'Enter number of links in the navbar (needs reload of the Manage Styles page)');
@define('NAV_LINK_TEXT', 'Enter the navbar link text');
@define('NAV_LINK_URL', 'Enter the full URL of your link');
@define('MODERATE_SELECTED_COMMENTS', 'Accept selected comments');
@define('WEBLOG', 'Weblog');
@define('ACTIVE_COMMENT_SUBSCRIPTION', 'Subscribed');
@define('PENDING_COMMENT_SUBSCRIPTION', 'Pending confirmation');
@define('NO_COMMENT_SUBSCRIPTION', 'Not subscribed');
@define('SUMMARY', 'Summary');

// Next lines were added on 2012/05/29
@define('ABOUT_TO_DELETE_FILES', 'You are about to delete a bunch of files at once.<br />If you are using these in some of your entries, it will cause dead links or images<br />Are you sure you wish to proceed?<br /><br />');
@define('ARCHIVE_SORT_STABLE', 'Stable Archives');
@define('ARCHIVE_SORT_STABLE_DESC', 'Sort the archive-pages descending, so they are stable and search-crawler do not have to reindex them.');
@define('PLAIN_ASCII_NAMES', '(no special characters, umlauts)');
