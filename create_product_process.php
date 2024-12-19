<?php
require 'woocommerce_crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = [
        'name' => $_POST['name'],
        'type' => 'simple',
        'regular_price' => $_POST['price'],
        'description' => $_POST['description'],
    ];

    createProduct($data);
    header('Location: products.php');
}
?>
