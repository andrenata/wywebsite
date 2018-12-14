<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wisata Bali</title>
    <!-- menghubungkan index dengan css -->
    <link rel="stylesheet" href="css/style.css">
    <script src="//cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>

</head>
<body>

    <div class="container">

        <div class="header">
            <h1>My Website</h1>
        </div>

        <div class="menu">
            <ul>
                <!-- PANGGIL MENU DARI FILE menu.php -->
                <?php
                    include('menu.php');
                ?>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="content">

            <?php 
                if(isset($_GET['pesan'])){
                    if($_GET['pesan']=='gagal'){
                        echo "<p class='error'>Login gagal, silahkan ulangi kembali!</p>";
                    }elseif($_GET['pesan']=='logout'){
                        echo "<p class='error'>Logout berhasil!</p>";
                    }else{
                        echo "<p class='success'>Login Berhasil</p>";
                    }
                }

            ?>

            <h2>LOGIN</h2>
            
            <?php if($cek=='not'){ ?>
            <div class="form-tambah-artikel">
                <form action="cek-login.php" method="POST">
                    <div class="field-artikel">
                        <label>Username</label> <br>
                        <input type="text" name="username">
                    </div>
                    <div class="field-artikel">
                        <label>Password</label> <br>
                        <input type="password" name="password">
                    </div>
                    <div class="field-artikel">
                        <input type="submit" value="LOGIN">
                    </div>
                </form>
            </div>

            <?php } ?>

        </div> <!-- tutup content -->

    </div> <!-- tutup container -->
    
</body>
</html>