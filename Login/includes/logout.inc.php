<?php
 //esta include deve ser chamada em toda página restrita da aplicação. Ela desconecta o usuário e o envia de volta à homepage
 $_SESSION = [];
 session_destroy();
 header("location: ../php/home.php");