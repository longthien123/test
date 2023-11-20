<?php
setcookie("user_cookie", "$user", time() - 600, '/');
header("location: index.php");
?>