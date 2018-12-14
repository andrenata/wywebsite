<?php
    // START SESSION
    session_start();

    // HAPUS SEMUA SESSION
    session_destroy();

    // REDIRECT KE LOGIN.PHP dengan PESAN = LOGOUT
    header("location:login.php?pesan=logout");

?>