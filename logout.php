<?php
session_start();
session_destroy();
header('Location:login.php?Pesan=Berhasil Login');