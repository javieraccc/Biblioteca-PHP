<?php

session_start();

session_destroy();

unset($_SESSION['usuarioLogin']);

header("location:index.php");