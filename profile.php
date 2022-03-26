<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            background-color: #cad1ff;
        }

        table{
            margin-top: 20px;
            display: flex;
            justify-content: center;
        }

        tr, td{
            padding: 20px 10px;
        }

        .nav{
            background-color: #f9ffca;
            display: flex;
            justify-content: space-between;
            flex-direction: row;
            padding: 12px;
        }

        .titleNav{
            margin-left: 5px;
        }

        .homeNProfile{
           margin-left: 500px;
           display: flex;
           gap: 40px;
            
        }

        .home>a{
            text-decoration: none;
            color: black;
        }

        .logoutNav{
            margin-right: 10px;
        }

        .logoutNav>a{
           text-decoration: none;
           color: black;
        }

        .profileTitle{
            display: flex;
            justify-content: center;
            margin: 20px;
        }

    </style>

    <div class="nav">
        <div class="titleNav"> Aplikasi Pengelolaan Keuangan</div>
        <div class="homeNProfile">
            <div class="home"><a href="home.php">Home</a></div>
            <div class="profile"><a href="profile.php">Profile</a></div>
        </div>
        <div class="logoutNav"><a href="logout.php">Logout</a></div>
    </div>

    <div class="profileTitle"><b>Profil Pribadi</b></div>

    <table>
        
        <tr></tr>
            
        <tr>
            <td>Nama Depan</td>
            <td><b><?php echo $_SESSION['namaDepanSession']?></b></td>

            <td>Nama Tengah</td>
            <td><b><?php echo $_SESSION['namaTengahSession']?></b></td>

            <td>Nama Belakang</td>
            <td><b><?php echo $_SESSION['namaBelakangSession']?></b></td>
        </tr>

        <tr></tr>

        <tr>
            <td>Tempat Lahir</td>
            <td><b><?php echo  $_SESSION['tempatLahirSession']?></b></td>

            <td>Tgl Lahir</td>
            <td><b><?php echo $_SESSION['tglLahirSession']?></b></td>

            <td>NIK</td>
            <td><b><?php echo $_SESSION['NIKSession']?></b></td>
        </tr>

        <tr></tr>

        <tr>
            <td>Warga Negara</td>
            <td><b><?php echo $_SESSION['wargaNegaraSession']?></b></td>

            <td>Email</td>
            <td><b><?php echo $_SESSION['emailSession']?></b></td>

            <td>No HP</td>
            <td><b><?php echo $_SESSION['noHPSession']?></b></td>
        </tr>

        <tr></tr>

        <tr>
            <td>Alamat</td>
            <td><b><?php echo $_SESSION['alamatSession']?></b></td>

            <td>Kode Pos</td>
            <td><b><?php echo $_SESSION['kodePosSession']?></b></td>

            <td>Foto Profil</td>
            <td><b><?php echo "<img src='".$_SESSION['dirDestinationSession'].$_SESSION['fotoProfilSession']."'width='60' height='80'>"?></b></td>
        </tr>

        <tr></tr>
    </table>
    
</body>
</html>