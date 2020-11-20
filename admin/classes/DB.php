<?php 
//Lớp database
class DB{
	// Lưu trữ dữ liệu để kết nối
	private $host = 'localhost';
	private $username = 'root';
	private $pass = '';
	private $dbname = 'newspage';

	//Biến lưu trữ kết nối 
	public $cn = NULL;

	//Hàm kết nối
	public function connect(){

		$this->cn = mysqli_connect($this->host, $this->username, $this->pass, $this->dbname);
		if(mysqli_connect_errno()){
			echo "FAIL CONNECT TO DATABASE";
		}

	}
	
	//Hàm ngắt kết nối 
	public function close(){
		//Kiểm tra tồn tại kết nối hay không
		if($this->cn){
			//Đóng kết nối
			mysqli_close($this->cn);

		}
	}

	//Hàm truy vấn
	public function query($sql = null){
		
		if ($this->cn) {
			# code...
			mysqli_query($this->cn, $sql);
		}

	}
	//Hàm đếm só hàng
	public function num_rows($sql = null){
		//Đầu tiên chúng ta kiểm tra có tồn tại kết nối hay không, 
		//rồi truy vấn câu lệnh SQL, nếu tồn tại thì chúng ta mới thực thi lấy số hàng của table rồi trả về kết quả.
		if($this->cn){
			$query = mysqli_query($this->cn, $sql);
			if ($query) {
				# code...
				$row = mysqli_num_rows($query);
				return $row;
			}	
		}
	}
	// Hàm lấy dữ liệu
    public function fetch_assoc($sql = null, $type)
    {
		// Tuỳ vào theo các code của mỗi người mà có từng thư viện xử lý database khác nhau.
		// Trong hàm lấy dữ liệu của mình ngoài tham số $sql còn có thêm tham số $type. Biến $type sẽ xử lý nhánh.
   		// Nếu $type = 0 thì nó dùng vòng lặp while để in dữ liệu (thường dành cho dữ liệu có 2 row trở lên như danh sách ghi chú, ...).
		// Nếu $type = 1 thì nó in dữ liệu bình thường (thường dành cho dữ liệu có 1 row như thông tin tài khoản, ...).
        if ($this->cn)
        {
            $query = mysqli_query($this->cn, $sql);
            if ($query)
            {
                if ($type == 0)
                {
                    // Lấy nhiều dữ liệu gán vào mảng
                    while ($row = mysqli_fetch_assoc($query))
                    {
                        $data[] = $row;
                    }
                    return $data;
                }
                else if ($type == 1)
                {
                    // Lấy một hàng dữ liệu gán vào biến
                    $data = mysqli_fetch_assoc($query);
                    return $data;
                }
            }       
        }
	}
	// Hàm lấy ID cao nhất
    public function insert_id()
    {
        if ($this->cn)
        {
            $count = mysqli_insert_id($this->cn);
            if ($count == '0')
            {
                $count = '1';
            }
            else
            {
                $count = $count;
            }
            return $count;
        }
    }
 
    // Hàm charset cho database
    public function set_char($uni)
    {
        if ($this->cn)
        {
            mysqli_set_charset($this->cn, $uni);
        }
    }
}	

