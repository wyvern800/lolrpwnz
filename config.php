<?php
/** O nome do banco de dados*/
define('DB_NAME', 'lolrpwnz');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** BCRYPT */
if ( !defined('BIG_SALT') )
define('BIG_SALT', 'FcdPs1ePtXp41JomM0P4aJ');

if ( !defined('MINI_SALT') )
define('MINI_SALT', '$2a$');

if ( !defined('SALT_COST') )
define('SALT_COST', '08');

/** caminho absoluto para a pasta do sistema **/
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** caminho no server para o sistema **/
if ( !defined('BASEURL') )
    define('BASEURL', '/lolrpwnz/');

if( !defined('WEBSITE_NAME')) {
    define('WEBSITE_NAME', 'Godzamy');
}


/** caminho do arquivo de banco de dados **/
if ( !defined('DBAPI') )
    define('DBAPI', ABSPATH . 'inc/database.php');

/** caminhos dos templates de header e footer **/
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');

function restrict_and_redirect_to($redirection) {
// A sessão precisa ser iniciada em cada página diferente
    if (!isset($_SESSION)) session_start();
    $necessary_role = 2;

// Verifica se não há a variável da sessão que identifica o usuário
    if (!isset($_SESSION['UserID']) OR ($_SESSION['UserRole'] < $necessary_role)) {
        // Destrói a sessão por segurança
        session_destroy();
        // Redireciona o visitante de volta pro login
        header("Location: ".BASEURL.$redirection."");
        exit;
    }
}

?>