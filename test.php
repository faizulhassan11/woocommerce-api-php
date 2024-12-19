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

// Products APIs

// list of products

//  $all_products = $woocommerce->get('products'); 

//  echo "<pre>";
// print_r($all_products);
//  echo "</pre>";


// get 1 product

//  $single_product = $woocommerce->get('products/6');

//  echo "<pre>";
//  print_r($single_product);
//   echo "</pre>";


// update product 

// $data = [
//     'regular_price' => '60'
// ];

// $updated_product = $woocommerce->put('products/6', $data);

//  echo "<pre>";
//  print_r($updated_product);
//   echo "</pre>";


//   create a product

// $data = [
//     'name' => 'Mobile Phone',
//     'type' => 'simple',
//     'regular_price' => '500',
//     'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
//     'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
//     'categories' => [
//         [
//             'id' => 19
//         ]
//     ],
//     'images' => [
//         [  'id'=> 17
//         ],
          
//         [
//             'src' => 'http://localhost/woocommerce/wp-content/uploads/2024/12/9.jpg'
//         ]
//     ]
// ];

// $create_product = $woocommerce->post('products', $data);

// echo "<pre>";
// print_r($create_product);
//  echo "</pre>";


// delete product

//  $delete_product = $woocommerce->delete('products/19', ['force' => true]);


//  echo "<pre>";
// print_r($delete_product);
//  echo "</pre>";


// Orders APIs

// list of orders

// $list_orders = $woocommerce->get('orders');


//  echo "<pre>";
// print_r($list_orders);
//  echo "</pre>";


// get single order

// $single_order = $woocommerce->get('orders/16');

//  echo "<pre>";
// print_r($single_order);
//  echo "</pre>";

// create order

// $data = [
//     'payment_method' => 'bacs',
//     'payment_method_title' => 'Direct Bank Transfer',
//     'set_paid' => true,
//     'billing' => [
//         'first_name' => 'John',
//         'last_name' => 'Doe',
//         'address_1' => '969 Market',
//         'address_2' => '',
//         'city' => 'San Francisco',
//         'state' => 'CA',
//         'postcode' => '94103',
//         'country' => 'US',
//         'email' => 'john.doe@example.com',
//         'phone' => '(555) 555-5555'
//     ],
//     'shipping' => [
//         'first_name' => 'John',
//         'last_name' => 'Doe',
//         'address_1' => '969 Market',
//         'address_2' => '',
//         'city' => 'San Francisco',
//         'state' => 'CA',
//         'postcode' => '94103',
//         'country' => 'US'
//     ],
//     'line_items' => [
//         [
//             'product_id' => 93,
//             'quantity' => 2
//         ],
//         [
//             'product_id' => 22,
//             'variation_id' => 23,
//             'quantity' => 1
//         ]
//     ],
//     'shipping_lines' => [
//         [
//             'method_id' => 'flat_rate',
//             'method_title' => 'Flat Rate',
//             'total' => '10.00'
//         ]
//     ]
// ];

// $create_order = $woocommerce->post('orders', $data);

//  echo "<pre>";
// print_r($create_order);
//  echo "</pre>";


// update order


// $data = [
//     'status' => 'completed'
// ];

// $update_order = $woocommerce->put('orders/16', $data);

//  echo "<pre>";
// print_r($update_order);
//  echo "</pre>";

// delete order


// $delete_order = $woocommerce->delete('orders/20', ['force' => true]);

//  echo "<pre>";
//  print_r($delete_order);
//  echo "</pre>";
 
?>