<?php 
    function login($conn, $event){
        if(isset($_POST[$event])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            
            $sql = "select * from user where username = '$username' and password = MD5('$password');";
            $r = $conn->query($sql);
            $a = $r->fetch();
            if($a != null) {
                session_start();
                if(!isset($_SESSION['username'])) {
                    $_SESSION['username'] = $a['username'];
                    $_SESSION['role'] = $a['role'];
                }

                echo "Đăng nhập thành công";

            } else {
                echo "Tài khoảng không tồn tại";
            }
    }
}
?>