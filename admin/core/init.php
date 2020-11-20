<?php
//  húng ta sẽ require 3 thư viện trong folder admin/classes. 
// Vì đây là file trung gian require với các file xử lý và index nên path require các thư viện 
// chúng ta sẽ viết cùng cấp với folder admin/classes và cũng như các folder khác trong phần admin.

// Require các thư viện PHP
require_once 'classes/DB.php';
require_once 'classes/Session.php';
require_once 'classes/Functions.php';
 
// Kết nối database
// Đầu tiên chúng ta sẽ khởi tạo class DB, sau đó gọi hàm connect() để kết nối database. 
// Ngoài ra chúng ta dùng hàm set_char() với tham số là utf8 để charset cho database.
$db = new DB();
$db->connect();
$db->set_char('utf8');
 
// Thông tin chung
// $_DOMAIN sẽ chứa đường dẫn tuyệt đối của folder admin trên trình duyệt. 
// Ngoài ra chúng ta sẽ thiếp lập múi thời gian để insert vào database.
$_DOMAIN = 'http://localhost/newspage1/admin/';
 
date_default_timezone_set('Asia/Ho_Chi_Minh'); 
$date_current = '';
$date_current = date("Y-m-d H:i:sa");
 
// Khởi tạo session
// Ta sẻ khởi tạo class Session, sau đó gọi hàm start để bắt đầu session. 
// Để kiểm tra session chúng ta sẽ kiểm tra kết quả trả về của hàm get() :

// Nếu không rỗng thì gán $user bằng kết quả trả về (tức đã đăng nhập).
// Nếu rỗng gán $userbằng rỗng (tức chưa đăng nhập).
$session = new Session();
$session->start();
 
// Kiểm tra session
if ($session->get() != '')
{
    $user = $session->get();
}
else
{
    $user = '';
}
 // Nếu đăng nhập
if ($user)
{
    // Lấy dữ liệu tài khoản
    $sql_get_data_user = "SELECT * FROM accounts WHERE username = '$user'";
    if ($db->num_rows($sql_get_data_user))
    {
        $data_user = $db->fetch_assoc($sql_get_data_user, 1);
    }
}
?>

