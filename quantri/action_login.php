
<?php
// ob_start();
session_start();
require_once './db_config.php';

if(isset($_POST['submit'])&& $_POST['Email'] !=''  && $_POST['MatKhau'] !=''){
	$Email =  $_POST["Email"];
	$MatKhau = $_POST["MatKhau"];
	$MatKhau = md5($MatKhau);
    $sql="SELECT * FROM tbl_admin WHERE Email = '$Email' AND MatKhau = '$MatKhau'";
	$admin = mysqli_query($conn, $sql);
    if(mysqli_num_rows($admin)>0){
        $_SESSION['Email'] = $Email;
        // echo ' bạn đăng nhập thành công';
        header('location:index.php');

    }
    else {
        echo '<center class = "alert alert-danger">Tài khoản hoặc mật khẩu không chính xác, vui lòng đăng nhập lại!!</center>';
        echo '<center><a href="login.php">Trở lại</a></center>';
        
    }

}
else {
    header('location:login.php');
}

?>


