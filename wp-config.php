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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'Zm2QzH9D5IIEAPdF' );

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
define( 'AUTH_KEY',         '_2)s&v .HEsxdH5(zovqQ6a6X_uwk3q-LQe/A?S!QEA!?LOjIryw-R2H^mN|O{C%' );
define( 'SECURE_AUTH_KEY',  'uGT/F/Ssr |*l4V8Bw%|=w0U+Ung|R/kHfz%VW*Vne[+9e7<3l!~X7p#qVhDK-xs' );
define( 'LOGGED_IN_KEY',    'u!^f_Mbd=QocX*=#t;RK|hU>~4Z/3!hJCKV.e^u6mVpD^Q)-D+RjC4q*H|$du`RY' );
define( 'NONCE_KEY',        'HoH7Xt<4R=)@H*>=.aE;szog(1I[cD9[D]$ e!>=E!f^yR,LG;iP{/?.4@LNOtG<' );
define( 'AUTH_SALT',        '5_WM [:QpJBdo`.<Jo QCqo2IO;$&=8[FOd3W!;>W:W@EL:xem^;=&Y)k-j=XZ!!' );
define( 'SECURE_AUTH_SALT', 'm%j|;G]An,cD=1)b/U8)BzAK:EQ7;W@/S,GU2I8p^7%bk+.?r&,RfGE_QSQp!qt0' );
define( 'LOGGED_IN_SALT',   'c-,T^{oVbeH!]!2AStwgnyD%%HHK!@FIn=cN5j^0|1b~QQIEhvDYiLKPxgR:gpv{' );
define( 'NONCE_SALT',       'pa!.?s5d%(xQ]|{x.uV]Z(0Wac?<npfNxX5peM2h7VAHfNlAg!xXeX`RVp5=]t<$' );

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
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
