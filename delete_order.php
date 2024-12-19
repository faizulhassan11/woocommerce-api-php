<?php
require 'woocommerce_crud.php';

if (isset($_GET['id'])) {
    deleteOrder($_GET['id']);
    header('Location: orders.php');
}
?>
