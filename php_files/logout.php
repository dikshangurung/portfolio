<?php
session_start();
session_unset();
session_destroy();
echo '<script type="text/javascript">';
echo 'window.location.href="../html_docs/index.php";';
echo '</script>';
?>