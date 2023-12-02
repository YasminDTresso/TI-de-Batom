<?php
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
define( 'DB_NAME', 'ti_batom_db' );

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
define( 'AUTH_KEY',         '# `Yh8ZM.]ATk&@uejA(lS$U.>bBAfPLbFA4{a2@%Hh|w[PNj#$b4/QXi+ASW@KC' );
define( 'SECURE_AUTH_KEY',  '$piC#Fe:of&)ft87] rFppUO$TQ%Zx9t|E,4o#Ki@`hNa{;>h{f/s+aG1~.g)92B' );
define( 'LOGGED_IN_KEY',    'zP<Wexp!tFbqvNUcCz[0iN<?S]p|Bt[XcvuTOk9}uI-Jbl(v{s+&(L^Q|yKW&Sly' );
define( 'NONCE_KEY',        '[Sdt,)Xz7A,~i)?N2~wAVHQUX2_By8[4iD%tTxxf3@!wz]Kr#G<lBC x8u&l/a-2' );
define( 'AUTH_SALT',        '7WoYo[dq(cXn<k*<}AZnrHmIsQp6#>g^1FCD2/]Q3ds/$_ZV%n{-$!0-e.:`6Yd&' );
define( 'SECURE_AUTH_SALT', 'pd;_xmWx3E;+)U/0Y4$:@@$|#6pK($MT25]bRwkP%1pJ!}dms,/J${{G<@y#y_e[' );
define( 'LOGGED_IN_SALT',   'Y(7nGtzN;YX=Fo_5<Rsc*Y`:T!{2HZ*]R@oyU&h7nUq08lbA[OY-X2U0@[qE(g7D' );
define( 'NONCE_SALT',       'z={1&E{>Y`nszS1Q%O|bQ8 LB<K(BV&8S)eHJV.7Au%0TApO1V4AkZvEW/S6/v?g' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
