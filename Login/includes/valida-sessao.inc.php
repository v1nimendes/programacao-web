<?php
 session_start();
 if(!isset($_SESSION['conectado']) OR $_SESSION['conectado'] != true)
  {
  exit("<p> Caro usuário, este acesso é inválido. Efetue o cadastro ou o login em nossa aplicação. </p>");
  }
