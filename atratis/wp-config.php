<?php
define( 'WP_CACHE', true );
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'atratis' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}+VN7f?r:(t!d(dAG hroSX%br-KVMq)^z#FGt(+J=lsbLNt8pC^>43<B}AFS@{8' );
define( 'SECURE_AUTH_KEY',  'YpC^NT~?@rOS?}U^1Taqx)U;: 5:()32nmE!IJl `up5/|?;APt 8D99(joI:[|S' );
define( 'LOGGED_IN_KEY',    '}n1s8FsmYv>2#:1,4YdX?}GDy-T(q2e$A![++l@S6Il @*e{W96R85<<P1c1[i-:' );
define( 'NONCE_KEY',        'so;d@[i<SSK6t=@+0;hCGx55}1s5/pp9PH-pG=dk-0,SN5iD2f^a%zLV4I&Px/E_' );
define( 'AUTH_SALT',        '?R3Hf *8}<PV1wS``s^wldoG$rxetKuK7NLVbpKf,>+~t X|N0A>1r5~?*{B`,?b' );
define( 'SECURE_AUTH_SALT', '-136bqG=#c![5HuN5`$nnT+=PAGX)FBr*jy;%`/!Fx4_3?9pE<V~971Vg$Y/BQLu' );
define( 'LOGGED_IN_SALT',   '[b-_j|~qx#,`q|w*k(!-_6OM}WeV$Omc8Latm-&TY1Z64Ll(uZc8kD=e4`>E%FDb' );
define( 'NONCE_SALT',       '~j.Bnunu!9NTViGRameZ,2va4x]kM~mD!BM>%UPQDyG:,#vtl|fkDARHIUt3MQCR' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'awp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
