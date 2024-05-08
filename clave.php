<?php

// Contraseña ingresada por el usuario
$password = "miContraseña123";

// Encripta la contraseña
$hash = password_hash($password, PASSWORD_DEFAULT);

// Imprime la contraseña encriptada
echo "Contraseña encriptada: $hash";