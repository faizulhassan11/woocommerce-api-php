<?php
require 'woocommerce_crud.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $products = $_POST['products'];
    $quantity = $_POST['quantity'];

    if (empty($products) || empty($quantity)) {
        echo "Please select products and enter quantity.";
        exit;
    }

    $line_items = [];
    foreach ($products as $product_id) {
        $line_items[] = [
            'product_id' => $product_id,
            'quantity' => $quantity
        ];
    }

    $data = [
        'payment_method' => $_POST['payment_method'],
        'payment_method_title' => $_POST['payment_method_title'],
        'set_paid' => $_POST['set_paid'] === 'true',
        'billing' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'address_1' => $_POST['address_1'],
            'address_2' => $_POST['address_2'],
            'city' => $_POST['city'],
            'state' => $_POST['state'],
            'postcode' => $_POST['postcode'],
            'country' => $_POST['country'],
            'email' => $_POST['email'],
            'phone' => $_POST['phone']
        ],
        'shipping' => [
            'first_name' => $_POST['first_name'],
            'last_name' => $_POST['last_name'],
            'address_1' => $_POST['address_1'],
            'address_2' => $_POST['address_2'],
            'city' => $_POST['city'],
            'state' => $_POST['state'],
            'postcode' => $_POST['postcode'],
            'country' => $_POST['country']
        ],
        'line_items' => $line_items,
        'shipping_lines' => [
            [
                'method_id' => 'flat_rate',
                'method_title' => 'Flat Rate',
                'total' => '10.00'
            ]
        ]
    ];

    $response = createOrder($data);

    if (isset($response->id)) {
        header('Location: orders.php');
    } else {
        echo "Error creating order: " . json_encode($response);
    }
}
?>
