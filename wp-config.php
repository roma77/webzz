<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
//define( 'DB_NAME', 'webzz' );
define( 'DB_NAME', 'c978905s_webzz' );

/** Имя пользователя MySQL */
//define( 'DB_USER', 'root' );
define( 'DB_USER', 'c978905s_webzz' );

/** Пароль к базе данных MySQL */
// define( 'DB_PASSWORD', '' );
define( 'DB_PASSWORD', 'm0%0AEh3' );


/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'W@I6If`dp jAJ/a4{q>|N oVY:][ok$+;Xc:>9vXTJb-<d5wQXNY}e$E],Se5,SF' );
define( 'SECURE_AUTH_KEY',  '#.6a;229=mUZ;X?L@s]#bmY;E[D_%sO4@Ml=h#(8oL~.I1r@8ibeRW&GXP:/6Wc<' );
define( 'LOGGED_IN_KEY',    '(Qaw@61Fpca?IM=*X[8oS8rxO4{4F%!=3vh{-x+Y11Pp],Ll/8NPpOD<^[^<Sc2[' );
define( 'NONCE_KEY',        '(NxvkViKEbgg2]Z#50HI,v@ 0g1O;~/46P%*X3R`2wQhvr;)*%/?DSZEi|t9?>MY' );
define( 'AUTH_SALT',        'W@*p!{%Tb@-i$XFqX!:~k,,Zp*aYNIZHd!Wb U:L~8n6.{su@F@;[g<4cwWDcZ41' );
define( 'SECURE_AUTH_SALT', 'djy~gqL{.BN`xS YSZ56ydhvWdTv$&?Y6eK+rv`=e_>-vw2Px6Zw--- <A(ims<&' );
define( 'LOGGED_IN_SALT',   'tz@3mdwLg.jA_H!{;eEvR-S.scE;WQcd-yCYE$Ilh.k|T`XXsfRW>D]}i*F3uwJ=' );
define( 'NONCE_SALT',       'Bs~Q>$Y`0mGGpQ{&vR=BO_@t-x;[:JL6KP8S!`Xlu#6zIFLRv|Y*JA;8o!z/:->E' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
