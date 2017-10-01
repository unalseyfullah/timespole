<?php
/**
 * WordPress için taban ayar dosyası.
 *
 * Bu dosya şu ayarları içerir: MySQL ayarları, tablo öneki,
 * gizli anahtaralr ve ABSPATH. Daha fazla bilgi için 
 * {@link https://codex.wordpress.org/Editing_wp-config.php wp-config.php düzenleme}
 * yardım sayfasına göz atabilirsiniz. MySQL ayarlarınızı servis sağlayıcınızdan edinebilirsiniz.
 *
 * Bu dosya kurulum sırasında wp-config.php dosyasının oluşturulabilmesi için
 * kullanılır. İsterseniz bu dosyayı kopyalayıp, ismini "wp-config.php" olarak değiştirip,
 * değerleri girerek de kullanabilirsiniz.
 *
 * @package WordPress
 */

// ** MySQL ayarları - Bu bilgileri sunucunuzdan alabilirsiniz ** //
/** WordPress için kullanılacak veritabanının adı */
define('DB_NAME', 'timespole');

/** MySQL veritabanı kullanıcısı */
define('DB_USER', 'root');

/** MySQL veritabanı parolası */
define('DB_PASSWORD', '');

/** MySQL sunucusu */
define('DB_HOST', 'localhost');

/** Yaratılacak tablolar için veritabanı karakter seti. */
define('DB_CHARSET', 'utf8mb4');

/** Veritabanı karşılaştırma tipi. Herhangi bir şüpheniz varsa bu değeri değiştirmeyin. */
define('DB_COLLATE', '');

/**#@+
 * Eşsiz doğrulama anahtarları.
 *
 * Her anahtar farklı bir karakter kümesi olmalı!
 * {@link http://api.wordpress.org/secret-key/1.1/salt WordPress.org secret-key service} servisini kullanarak yaratabilirsiniz.
 * Çerezleri geçersiz kılmak için istediğiniz zaman bu değerleri değiştirebilirsiniz. Bu tüm kullanıcıların tekrar giriş yapmasını gerektirecektir.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2q$V%oB)^|cDmA:v?_V[Zexgg2>kb|L=$((<w{j*A.CGEVvA~tRv*- .3tYn#J)2');
define('SECURE_AUTH_KEY',  '*:z^4EAnu; =>Y:+5-qKIkMFHfiai&DC>8;/%3cQ57Jm+[Cj]Ct|AveL[)#cOuu7');
define('LOGGED_IN_KEY',    '%GM*N!&YrNw}<LnHpj)*ep3ixPB3Oe,w* >3M}]@<:7X&S$Q ;t_G-!#SCPZL7(F');
define('NONCE_KEY',        'U5HN*Q/7p>Fh:  cd>11[3-f&W?72]8Hk`}Qf3BQX.&)=H#-/!$>P!_>Qbzj/8-W');
define('AUTH_SALT',        'F$5*D)b9{;6S}ik>%P!W;:p#R<gQX0-(Xa`[cb,O/,SXOibcHSlIgE7AD`Fzz-uT');
define('SECURE_AUTH_SALT', '[1FFm?NBPv^^ce Zo!8]0#9}d0COwZDgx.P02n~:?RSDqgu59o(6;sK8P%6KVL_v');
define('LOGGED_IN_SALT',   '/<~B3i^_dgYnXH4B8ipX FV5Q`V}~`p+O?jOEc9bQ/Ant<K^]gjwg,-,dvlRpC)X');
define('NONCE_SALT',       '<[Mvwv.CExM!h`f$Yjn?ovdG`Zf(Ed+* >zNZibxHi&C[HeOCg]5eW^Ap6uk|~t4');
/**#@-*/

/**
 * WordPress veritabanı tablo ön eki.
 *
 * Tüm kurulumlara ayrı bir önek vererek bir veritabanına birden fazla kurulum yapabilirsiniz.
 * Sadece rakamlar, harfler ve alt çizgi lütfen.
 */
$table_prefix  = 'wp_';

/**
 * Geliştiriciler için: WordPress hata ayıklama modu.
 *
 * Bu değeri "true" yaparak geliştirme sırasında hataların ekrana basılmasını sağlayabilirsiniz.
 * Tema ve eklenti geliştiricilerinin geliştirme aşamasında WP_DEBUG
 * kullanmalarını önemle tavsiye ederiz.
 */
define('WP_DEBUG', false);

/* Hepsi bu kadar. Mutlu bloglamalar! */
//define('RELOCATE',true);
/** WordPress dizini için mutlak yol. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** WordPress değişkenlerini ve yollarını kurar. */
require_once(ABSPATH . 'wp-settings.php');
