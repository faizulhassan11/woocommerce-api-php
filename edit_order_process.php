<?php
require 'woocommerce_crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'status' => $_POST['status'],
        // Add more fields as needed
    ];

    updateOrder($_POST['id'], $data);
    header('Location: orders.php');
}
?>
