<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wp-test');

/** Имя пользователя MySQL */
define('DB_USER', 'serg');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '123');

/** Имя сервера MySQL */
define('DB_HOST', '127.0.0.1:3306');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zkOmZY)XlE^Ih5/pV2&r=wjDugk-C8Rl/(0{SA/o@X,)>vF89_:@itC)s9z6B;$k');
define('SECURE_AUTH_KEY',  '/iqhTsatQZM/%bu(@Fmc7NvRBsxf04Sc$lu.%kl4/p}N|*L+}TKk`mt:gjOdF#zO');
define('LOGGED_IN_KEY',    'g]RV`.$pq]D>h38d!u5QF;b2`zi6+_H,]s]:9XbF]6ZfF*: gRl_ygmHE:A.{Q<U');
define('NONCE_KEY',        'p@txEH/?W&&Usj 95m2TEkk)t`G[nW:jsoCr!K;^$WOw1AYoc:M!eo7 J1,C{uFE');
define('AUTH_SALT',        '`-)NCw@?E6o#yyJC;d2:={<vLD$+iYgd@KKbc1(ra4+v7>Fn4j?TU D#UF!y!wkY');
define('SECURE_AUTH_SALT', 'M>[O_-<K SNR3hdUMl6#orB60<2>ExD]Nag`bJ6&bH&+*#NI*J^},k1qsml7TUyW');
define('LOGGED_IN_SALT',   '>S_tR09O%oQc#q4H/?7J*d!9WjGOw>6Hbx1kpi2!~bVFPo+F%;ms&:]~%>=BKBF>');
define('NONCE_SALT',       '>K0fLH>)CFi:-l#M6K1iNrc0saF8nadw@-M-PN!w~=:Pp2*#y[j,&/A1X#iI?YeG');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
