<?php ob_start() ?>
<link rel="stylesheet" href="./public/CSS/style.css">


<?php
$content =ob_get_clean();
require "./views/layouts/template.php";
?>  
