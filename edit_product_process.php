<?php
require 'woocommerce_crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'regular_price' => $_POST['price'],
        'description' => $_POST['description'],
    ];

    updateProduct($_POST['id'], $data);
    header('Location: products.php');
}
?>
