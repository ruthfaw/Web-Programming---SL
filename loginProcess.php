<?php 

    session_start();

    if(isset($_POST['submit'])){
        if(($_POST['userName'] == $_SESSION['userNameSession']) 
        && ($_POST['password'] == $_SESSION['password1Session'])){
            header("location:home.php");
        }else{
            echo "Maaf Anda gagal login, pastikan username dan password sesuai<br/>";
            echo "<a href='login.php'>Login</a><br/>";
            echo "<a href='register.php'>Register</a>";
        }
    }

?>