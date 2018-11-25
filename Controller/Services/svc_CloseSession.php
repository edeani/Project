<?php
    session_start();
    session_destroy();
    echo "
        <script>
            localStorage.removeItem('students');
            localStorage.clear();
        </script>
    ";
    header("Location: ../../index.php");