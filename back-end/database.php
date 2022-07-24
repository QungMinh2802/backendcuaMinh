<?php 
    class database{
        public $conn;
        protected $severName  = "btqnidsylj4gxptdcjt7-mysql.services.clever-cloud.com";
        protected $userName = "udt1gwroownqubc4";
        protected $passWord = "t5vKkDZqf6E9HqzV6UtF";
        protected $databaseName = "btqnidsylj4gxptdcjt7";

        function __construct()
        {
            try {
                $this->conn = new PDO("mysql:host=$this->severName;dbname=$this->databaseName", $this->userName, $this->passWord);
                // set the PDO error mode to exception
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
              } catch(PDOException $e) {
                echo "Connection failed: " . $e->getMessage();
              }
        }
        //lấy tất cả
        function SelectAll($sql){
          try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->fetchAll(PDO::FETCH_ASSOC);
            return $result;
          }catch(Exception $e){
            echo "CÓ LỖI XẢY RA1!";die;
          }
            
        }
        //lấy ra số hàng của dữ liệu
        function SelectRow($sql){
          try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $result =  $query->rowCount();
          }
          catch(Exception $e){
            echo "CÓ LỖI XẢY RA2!";die;
          }
          return $result;
        }
        //nhập dữ liệu
        function ExecuteSQL($sql){
          try{
            $query = $this->conn->prepare($sql);
            return $query->execute();
          }catch(Exception $e){
            echo "CÓ LỖI XẢY RA3!";die;
          }
        }
        //lấy ra id sau khi insert
        function lastInsertID($sql){
          try{
            $query = $this->conn->prepare($sql);
            $query->execute();
            $id_order = $this->conn->lastInsertId();
            return $id_order;
          }catch(Exception $e){
            echo "CÓ LỖI XẢY RA4!";die;
          }
        }
    }
?>