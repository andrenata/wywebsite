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

            <h2>Tambah Artikel</h2>
            <p>Tambahkan artikel baru anda disini!</p>

            <?php if($cek =='login'){ ?>
            <div class="form-tambah-artikel">
                <form action="tambah-artikel-post.php" method="POST">
                    <div class="field-artikel">
                        <label>Judul</label> <br>
                        <input type="text" name="judul">
                    </div>
                    <div class="field-artikel">
                        <label>Artikel</label> <br>
                        <textarea name="artikel"cols="30" rows="10"></textarea>
                    </div>
                    <div class="field-artikel">
                        <input type="submit" value="TAMBAH">
                        <input type="reset" value="KOSONGKAN">
                    </div>
                </form>
            </div>
            <?php }else{ ?>
                <p class="error">Anda Harus Login Dahulu!</p>
            <?php } ?>

        </div> <!-- tutup content -->

    </div> <!-- tutup container -->

    <script>
        CKEDITOR.replace( 'artikel' );
    </script>
    
</body>
</html>