<?php
$clave = "12345";
$hash = password_hash($clave, PASSWORD_DEFAULT);
echo "Hash generado: " . $hash;
?>
