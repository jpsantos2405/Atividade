<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $usuario = filter_input(INPUT_POST, 'usuarioLogin', FILTER_SANITIZE_STRING);
  $senha = filter_input(INPUT_POST, 'senhaLogin', FILTER_SANITIZE_STRING);

  if ($usuario="João" && $senha=12345678) {
      echo "<script>alert('Parábens você está logado, pena que isso não serve pra nada'); window.history.back();</script>";
  } else {
    echo "<script>alert('Usuário ou senha errado'); window.history.back();</script>";
  }
} else {
  header("Location: index.php");
  exit;
}