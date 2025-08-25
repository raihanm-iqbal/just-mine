<?php
session_start();

if (isset($_POST['login'])) {
    $password = $_POST['password'];

    if ($password === "VynnBau") {
        header("Location: flower.php");
    } else {
        // Data tidak ditemukan, redirect ke halaman login kembali
        header("Location: index.html?message=1");
    }
}
