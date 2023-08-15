<?php 

    class CrudApp{
        private $conn;

       public function __construct(){
        # DATABASE HOST, DATABASE USER, DATABASE PASSWORD, DATABASE NAME,
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "crudapp";

        $this->conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        if(!$this->conn){
           echo "connection has been disconnected"; 
        }
       }

       public function add_data($data){        
            $std_name = $data["std_name"];
            $std_roll = $data["std_roll"];
            $std_img = $_FILES["std_img"]["name"];
            $tmp_name = $_FILES["std_img"]["tmp_name"];

            $query = "INSERT INTO   students(std_name, std_roll, std_img) VALUES ('$std_name', '$std_roll', '$std_img')";

            if(mysqli_query($this->conn, $query)){
                return "Information added successfully";
            }


       }
    }



?>
