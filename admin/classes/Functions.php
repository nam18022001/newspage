
<?php
//  Đây là thư viện chứa các hàm để thực thi các hành động trong PHP thuần theo một chuẩn nào đó và nhanh, ngắn gọn hơn. 
//  Các bạn vào đường dẫn thư mục admin/classes và tạo file Functions.php


// Hàm điều hướng trang
// Hàm này mình sử dụng class để kêu ra luôn nên tên hàm mình sẽ đặt __construct để nó thực thi hàm bên trong ngay sau khi gọi class. 
// Hàm này có tham số $url chứa đường dẫn mà mình muốn điều hướng
class Redirect {
    public function __construct($url = null) {
        if ($url)
        {
            echo '<script>location.href="'.$url.'";</script>';
        }
    }
}
 
?>