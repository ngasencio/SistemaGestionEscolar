<?php
include('../app/config.php');

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email = ?";
$query = $pdo->prepare($sql);
$query->execute([$email]);

$usuarios = $query->fetchAll(PDO::FETCH_ASSOC);

$contador = 0;
foreach ($usuarios as $usuario) {
    $password_tabla = $usuario['password'];
    $contador = $contador + 1;
}

if (($contador > 0) && ($password === $password_tabla)) {
    echo "Datos Correctos";
    header('Location:' . APP_URL . "/admin");
} else {
    echo "Datos incorrectos";
    session_start();
    $_SESSION['mensaje'] = "Los Datos introducidos son incorrectos, vuelva a intentarlo";
    header('Location:' . APP_URL . "/login");
}
