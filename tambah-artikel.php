<!DOCTYPE html>
<html lang="en">
<head>
    <title>Wisata Bali</title>
    <!-- menghubungkan index dengan css -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>

    <div class="container">

        <div class="header">
            <h1>My Website</h1>
        </div>

        <div class="menu">
            <ul>
                <?php
                    include('menu.php');
                ?>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="content">

            <h2>Tambah Artikel</h2>
            <p>Tambahkan artikel baru anda disini!</p>

            <form action="#">
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

        </div> <!-- tutup content -->

    </div> <!-- tutup container -->
    
</body>
</html>