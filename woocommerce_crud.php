<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
  'http://localhost/woocommerce/',
  'ck_90230b56c265ed0c0ba4ff0170218d356902c552',
  'cs_6a82d6539509ded7109677d256775a9d99d37ac4',
  [
    'version' => 'wc/v3',
  ]
);

function getAllProducts() {
    global $woocommerce;
    return $woocommerce->get('products');
}

function getProduct($id) {
    global $woocommerce;
    return $woocommerce->get('products/' . $id);
}

function createProduct($data) {
    global $woocommerce;
    return $woocommerce->post('products', $data);
}

function updateProduct($id, $data) {
    global $woocommerce;
    return $woocommerce->put('products/' . $id, $data);
}

function deleteProduct($id) {
    global $woocommerce;
    return $woocommerce->delete('products/' . $id, ['force' => true]);
}


function searchProducts($query) {
    global $woocommerce;
    return $woocommerce->get('products', ['search' => $query]);
}

// Product orders...

function getAllOrders() {
    global $woocommerce;
    return $woocommerce->get('orders');
}

function getOrder($id) {
    global $woocommerce;
    return $woocommerce->get('orders/' . $id);
}

function createOrder($data) {
    global $woocommerce;
    return $woocommerce->post('orders', $data);
}

function updateOrder($id, $data) {
    global $woocommerce;
    return $woocommerce->put('orders/' . $id, $data);
}

function deleteOrder($id) {
    global $woocommerce;
    return $woocommerce->delete('orders/' . $id, ['force' => true]);
}



function searchOrders($query) {
    global $woocommerce;
    return $woocommerce->get('orders', ['search' => $query]);
}


?>
