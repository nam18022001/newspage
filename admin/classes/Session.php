
<?php
//  Thư viện này chứa các hàm xử lý session như khởi tạo, lấy, xoá session, ... 
//  Thư viện này dùng để lưu tài khoản trong đăng nhập và lấy dữ liệu để kiểm tra lệnh SQL và bảo mật các file xử lý. 
//  Đầu tiên các bạn vào đường dẫn thư mục admin/classes và tạo file tên Session.php
// Lớp session
class Session {
    // Hàm bắt đầu session
    public function start()
    {
        session_start();
    }
 
    // Hàm lưu session
    // Hàm này sẽ có một tham số $user để lưu session 
    public function send($user)
    {
        $_SESSION['user'] = $user;
    }
 
    // Hàm lấy dữ liệu session
    // Hàm này dùng để lấy dữ liệu session đã lưu. 
    // Ở đây mình có một bước kiểm tra có tồn tại session không :
    // Nếu có trả về $user gán session đã lưu.
    // Ngược lại nếu không trả về $user bằng rỗng.
    public function get() 
    {
        if (isset($_SESSION['user']))
        {
            $user = $_SESSION['user'];
        }
        else
        {
            $user = '';
        }
        return $user;
    }
 
    // Hàm xoá session
    public function destroy() 
    {
        session_destroy();
    }
}
 
?>