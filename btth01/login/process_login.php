<?php
  include "../connect.php";


  $sql = "SELECT * FROM user";
  $qr = mysqli_query($connect,$sql);
?>

<?php
    session_start();
    // Kiem tra Du lieu voi Database
    // admin = dungkt/password = abc

    if(isset($_POST['btnLogin'])){
        // Lay tu FORM
        $username = $_POST['username'];
        $password = $_POST['password'];

        // So khop voi CSDL
        if($username == "admin" && $password == "admin"){
            $_SESSION['hehe'] = $username;
            header("Location: ../admin/index.php");
        }else{
            header("Location: login.php");
        }
    }


?>