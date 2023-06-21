<?php
    session_start();
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'admin' && $password == 'admin'){
            $_SESSION ['level'] = 'admin';
            header('location: ../admin/admin.php');
        }else if($username == 'dosen' && $password == 'dosen'){
            $_SESSION ['level'] = 'dosen';
            header('location: ../dosen/jadwal.php');
        }else if($username == 'mahasiswa' && $password == 'mahasiswa'){
            $_SESSION ['level'] = 'mahasiswa';
            header('location: ../mahasiswa/jadwal.php');
        }else{
            echo "<script> alert('Username dan Password tidak sesuai! silakan coba lagi');
            window.location.href='../'; </script>";
        }
    }

?>