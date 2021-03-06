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
                <!-- PANGGIL MENU DARI FILE menu.php -->
                <?php
                    include('menu.php');
                ?>
            </ul>
            <div class="clear"></div>
        </div>

        <div class="content">

            <?php
                // MEMANGGIL KONEKSI KE DATABASE
                require_once('koneksi.php');

                // MENAMPILKAN POSTS
                $query = mysqli_query($connect, "SELECT * FROM posts");

                // MELAKUKAN PENGULANGAN DATA PADA TABEL POSTS
                while($row=mysqli_fetch_array($query, MYSQLI_ASSOC))
                {
                    echo "<div class='artikel'>";
                    echo "<h2>".$row['title_post']."</h2>";
                    echo "<p>".$row['article']."</p>";
                    if($cek == 'login'){
                        echo"<a class='button-edit' href='edit.php?id=".$row['id_post']."'>Edit</a>";
                        echo"<a class='button-delete' href='hapus.php?id=".$row['id_post']."'>Hapus</a>";
                    }
                    echo "</div>";
                    
                }
            ?>


        </div> <!-- tutup content -->

    </div> <!-- tutup container -->
    
</body>
</html>