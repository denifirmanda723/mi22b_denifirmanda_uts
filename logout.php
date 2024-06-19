<?php
// NIM :2257401003
// NAMA:Deni Firmanda
// Kelas:MI22B
session_start();
if(session_destroy()) {
    header("Location: login.php");
}
?>