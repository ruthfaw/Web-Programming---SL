<?php

    session_start();

    if(isset($_POST['submit'])){

        $isTrue = true;

        $namaDepan = $_POST['namaDepan'];
        $namaTengah = $_POST['namaTengah'];
        $namaBelakang = $_POST['namaBelakang'];

        $tempatLahir = $_POST['tempatLahir'];
        $tglLahir = $_POST['tglLahir'];
        $NIK = $_POST['NIK'];

        $wargaNegara = $_POST['wargaNegara'];
        $email = $_POST['email'];
        $noHP = $_POST['noHP'];

        $alamat = $_POST['alamat'];
        $kodePos = $_POST['kodePos'];

        $userName = $_POST['userName'];
        $password1 = $_POST['password1'];
        $password2 = $_POST['password2'];


        if($namaDepan == ""){
            echo "Tolong Isi Kolom Nama Depan!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($namaDepan) < 2){
                echo "Nama Depan tidak boleh kurang dari 2 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['namaDepanSession'] = $namaDepan;
                $isTrue = true;
            }
        }

        if($namaTengah == ""){
            echo "Tolong Isi Kolom Nama Tengah!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($namaTengah) < 2){
                echo "Nama Tengah tidak boleh kurang dari 2 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['namaTengahSession'] = $namaTengah;
                $isTrue = true;
            }
        }

        if($namaBelakang == ""){
            echo "Tolong Isi Kolom Nama Belakang!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($namaBelakang) < 2){
                echo "Nama Belakang tidak boleh kurang dari 2 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['namaBelakangSession'] = $namaBelakang;
                $isTrue = true;
            }
        }



        if($tempatLahir == ""){
            echo "Tolong Isi Kolom Tempat Lahir!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(is_numeric($tempatLahir)){
                echo "Tempat Lahir tidak boleh mengandung angka!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['tempatLahirSession'] = $tempatLahir;
                $isTrue = true;
            }
        }

        if($tglLahir == ""){
            echo "Tolong Isi Kolom Tgl Lahir!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            $date = DateTime::createFromFormat("Y-m-d", "$tglLahir");

            if((2022 - intval($date->format("Y")) < 15) ){
                echo "Umur Tidak Boleh Kurang dari 15 tahun!";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['tglLahirSession'] = $tglLahir;
                $isTrue = true;
            }
        }

        if($NIK == ""){
            echo "Tolong Isi Kolom NIK!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(!is_numeric($NIK) || strlen($NIK) != 16){
                echo "NIK harus berisi angka sebanyak 16!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['NIKSession'] = $NIK;
                $isTrue = true;
            }
        }


        if($wargaNegara == ""){
            echo "Tolong Isi Kolom Warga Negara!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($wargaNegara) < 4){
                echo "Warga Negara tidak boleh kurang dari 4 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['wargaNegaraSession'] = $wargaNegara;
                $isTrue = true;
            }
        }

        if($email == ""){
            echo "Tolong Isi Email!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            //email sudah memiliki validasinya sendiri melalui input type = "email", jadi tidak perlu diberi validasi
            $_SESSION['emailSession'] = $email;
            $isTrue = true;
        }

        if($noHP == ""){
            echo "Tolong Isi No HP!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(!is_numeric($noHP) || strlen($noHP) < 10){
                echo "No HP harus berisi angka dan tidak boleh kurang dari 10!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['noHPSession'] = $noHP;
                $isTrue = true;
            }
        }

        
        
        if($alamat == ""){
            echo "Tolong Isi Kolom Alamat!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($alamat) < 4){
                echo "Alamat tidak boleh kurang dari 4 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['alamatSession'] = $alamat;
                $isTrue = true;
            }
        }

        if($kodePos == ""){
            echo "Tolong Isi Kolom Kode Pos!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(!is_numeric($kodePos) || strlen($kodePos) != 5){
                echo "Kode Pos harus berisi angka sebanyak 5!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['kodePosSession'] = $kodePos;
                $isTrue = true;
            }
        }

        if($_FILES['fotoProfil']['name'] == "") {
            echo "Tolong Upload Foto Profil <br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            $_SESSION['fotoProfilSession'] = $_FILES['fotoProfil']['name'];
            $_SESSION['tempNameFotoProfilSession'] = $_FILES['fotoProfil']['tmp_name'];
            $_SESSION['dirDestinationSession'] = "imageUpload/";

            move_uploaded_file($_SESSION['tempNameFotoProfilSession'], $_SESSION['dirDestinationSession'].$_SESSION['fotoProfilSession']);
            $isTrue = true;
        }


        if($userName == ""){
            echo "Tolong Isi Kolom Username!<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($userName) < 8){
                echo "Username tidak boleh kurang dari 8 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['userNameSession'] = $userName;
                $isTrue = true;
            }
        }

        if($password1 == ""){
            echo "Tolong Isi Kolom Password 1<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($password1) < 6){
                echo "Password 1 tidak boleh kurang dari 6 huruf!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['password1Session'] = $password1;
                $isTrue = true;
            }
        }

        if($password2 == ""){
            echo "Tolong Isi Kolom Password 2<br/>";
            echo "<a href='register.php'>Kembali ke Register</a><br/>";
            $isTrue = false;
        }else{
            if(strlen($password2) < 6 || $password2 != $password1){
                echo "Password 2 tidak boleh kurang dari 6 huruf dan harus sama dengan Password 1!<br/>";
                echo "<a href='register.php'>Kembali ke Register</a><br/>";
                $isTrue = false;
            }else{
                $_SESSION['password2Session'] = $password2;
                $isTrue = true;
            }
        }


        if($isTrue == true){
            header("location:login.php");
        }
    }

?>