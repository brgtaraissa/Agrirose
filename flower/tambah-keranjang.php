<?php
session_start();
if (!isset($_GET['id']) || empty($_GET['id'])) {
    header('location: cart.php');
    exit;
}

$qty = 1;
if (isset($_POST['qty'])) {
    $qty = max($_POST['qty'],1);
}

if(!isset($_SESSION['keranjang'])) {
    $_SESSION['keranjang'] = [];
}

$id = $_GET['id'];
if (!isset($_SESSION['keranjang'][$id])) {
    $_SESSION['keranjang'][$id] = $qty;
} else {
    $_SESSION['keranjang'][$id] += $qty;
}

header('location: cart.php');
exit;
