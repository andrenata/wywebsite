<?php
    session_start();
    $GLOBALS['cek'] = 'not';
    if(isset($_SESSION['status'])){
        if($_SESSION['status'] == 'login'){
            $GLOBALS['cek'] = 'login';
        }
    }

?>

<li><a href="index.php">Beranda</a></li>
<li><a href="tambah-artikel.php">Tambah Artikel</a></li>

<?php
    if($cek=='login'){
        echo "<li><a href='logout.php'><strong>LOGOUT</strong></a></li>";
        echo "<li><a href='logout.php'><strong>Hello, ".$_SESSION['username']."</strong></a></li>";
    }else{
        echo "<li><a href='login.php'><strong>LOGIN</strong></a></li>";
    }
?>