<?php
    define('DB_SERVER', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS','');
    define('DB_NAME', 'crud_php');

    class DB_con{
        function __construct(){
            $conn = mysqli_connect(DB_SERVER,DB_USER, DB_PASS, DB_NAME);
            $this->dbcon = $conn;

            if (mysqli_connect_errno()){
                echo "Failed to connect to MySQL : ". mysqli_connect_error();
            }
        }
    }
?>