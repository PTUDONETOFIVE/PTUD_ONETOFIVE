<?php
    class Connection{
        function connect($conn){
            $conn= mysqli_connect('localhost','root','123456');
            mysqli_set_charset($conn,'utf8');
            if($conn){
                return mysqli_select_db($conn, 'quanlyf0');
            }
            else{
                return false;
            }
        }

        function unconect($conn){
            $conn= mysqli_connect('localhost','root','123456');
        }
    }
?>