<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WooCommerce Orders</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">WooCommerce Orders</h1>
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="create_order.php" class="btn btn-primary">Create Order</a>
                <form action="orders.php" method="GET" class="form-inline float-right">
                    <input type="text" name="search" class="form-control mr-2" placeholder="Search Orders">
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Status</th>
                            <th>Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'woocommerce_crud.php';
                        if (isset($_GET['search'])) {
                            $orders = searchOrders($_GET['search']);
                        } else {
                            $orders = getAllOrders();
                        }
                        foreach ($orders as $order) {
                            echo "<tr>
                                    <td>{$order->id}</td>
                                    <td>{$order->status}</td>
                                    <td>{$order->total}</td>
                                    <td>
                                        <a href='edit_order.php?id={$order->id}' class='btn btn-warning'>Edit</a>
                                        <a href='delete_order.php?id={$order->id}' class='btn btn-danger'>Delete</a>
                                    </td>
                                  </tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
