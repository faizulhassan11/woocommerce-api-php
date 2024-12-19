<?php
require 'woocommerce_crud.php';

if (isset($_GET['id'])) {
    deleteProduct($_GET['id']);
    header('Location: products.php');
}
?>
