<?php
    session_destroy();
    echo "<script>alert('Berhasil logout');</script>";
    echo "<script>location='login.php'</script>";
?>