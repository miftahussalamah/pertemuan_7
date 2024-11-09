<?php

include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT); // Hash password

    $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";
    $mysqli->query($sql);

    // Simpan data pengguna ke database
    // ...

    // Redirect ke halaman login
    header("Location: login.php");
}
?>
