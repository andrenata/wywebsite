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

            <h2>Edit Artikel</h2>
            <p>Edit artikel</p>
        
        <?php

            include "koneksi.php";

            // mengambil data id
            $id = $_GET['id'];

            // ambil data dari table posts
            $data = mysqli_query($connect, "SELECT * FROM posts WHERE id_post=$id");

            // melakukan perulangan pada data ARRAY untuk ditampilkan
            while($d = mysqli_fetch_array($data)){
        ?>

            <div class="form-tambah-artikel">
                <form action="update-artikel.php" method="POST">
                    <div class="field-artikel">
                        <label>Judul</label> <br>
                        <input type="hidden" name="id" value="<?php echo $d['id_post'] ?>">
                        <input type="text" name="judul" value="<?php echo $d['title_post'] ?>">
                    </div>
                    <div class="field-artikel">
                        <label>Artikel</label> <br>
                        <textarea name="artikel" cols="30" rows="10">
                            <?php echo $d['article'] ?>
                        </textarea>
                    </div>
                    <div class="field-artikel">
                        <input type="submit" value="SIMPAN">
                    </div>
                </form>
            </div>
        <?php
            }
        ?>

        </div> <!-- tutup content -->

    </div> <!-- tutup container -->

    <script>
        CKEDITOR.replace( 'artikel' );
    </script>
    
</body>
</html>