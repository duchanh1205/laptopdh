<?php 
    class database{
        public $conn;
        protected $severName  = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $databaseName = "laptopdh";

        function __construct()
        {
            try {
              // thiết lập kết nối với CSDL sử dụng PHP Data Object(PDO)
                $this->conn = new PDO("mysql:host=$this->severName;dbname=$this->databaseName", $this->userName, $this->passWord);
                //dùng giá trị PDO:ERRMODE_EXCEPTION trong thuộc tính PDO::ATTR_ERRMODE để ném ra ngoại lệ khi gặp lỗi vào tạo PHP Warning
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
    }
?>