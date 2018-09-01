<?php
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define('DB_NAME', 'ke-go-treo-tuong');

/** Username của database */
define('DB_USER', 'root');

/** Mật khẩu của database */
define('DB_PASSWORD', 'root');

/** Hostname của database */
define('DB_HOST', 'localhost');

/** Database charset sử dụng để tạo bảng database. */
define('DB_CHARSET', 'utf8mb4');

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'th>=T{gR:Y Zf3!UY,<Nq !mvefZH}Iv}YUSkd0.rbK{$*AC.$)1v[x.I[Fr*hcR');
define('SECURE_AUTH_KEY',  '6#-QF=q*JnKF,8#zCZ{im!933Q.c|rOxec|zKS=0@e@b}E 2}.(q==8X:*8&+Reb');
define('LOGGED_IN_KEY',    '.p_tG$Y^<~alJU1e36:,I]N?FI1OjiaBy!uH_`Ov{a{XC=4_p(V3Kg1*)a4+0|xz');
define('NONCE_KEY',        '{IBQnIUC]t?^E8dxhdSBiANZD[32Y%]Ae}0bzk)5V&q%o3!jn7z#0EUhufF,dG#V');
define('AUTH_SALT',        'H[pIHT3jw3G~y9_FVIX.pt&?F__CS8IEE,(E-7V:ewTmL^G$_==C i/+m}Gm^.//');
define('SECURE_AUTH_SALT', 'a~#vAR<V`k`Pv:99Y7o2`S1ZXNjl3O/[5[Eix$m/x_C>?!CEr}!N|UXN3O4[Un)|');
define('LOGGED_IN_SALT',   'gGWrUMKHBOE{, _qJ}68Tp+7sDo/1=~a8ThiSGQ@27k~=JNiQ~0iVLFz1a3#,AoD');
define('NONCE_SALT',       'G~4-H( t-E<o.n[OrJul?CyvwcNQAC]}gH-TVHsP^Va~1viMxC0k`}4b3lRhQ6dA');

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix  = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
