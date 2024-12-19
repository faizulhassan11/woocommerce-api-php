<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WooCommerce CRUD</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">WooCommerce CRUD</h1>
        <div class="row mt-4">
            <div class="col-md-12">
                <a href="create_product.php" class="btn btn-primary">Create Product</a>
                <form action="index.php" method="GET" class="form-inline float-right">
                    <input type="text" name="search" class="form-control mr-2" placeholder="Search Products">
                    <button type="submit" class="btn btn-success">Search</button>
                </form>
                <table class="table mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        require 'woocommerce_crud.php';
                        if (isset($_GET['search'])) {
                            $products = searchProducts($_GET['search']);
                        } else {
                            $products = getAllProducts();
                        }
                        foreach ($products as $product) {
                            echo "<tr>
                                    <td>{$product->id}</td>
                                    <td>{$product->name}</td>
                                    <td>{$product->price}</td>
                                    <td>
                                        <a href='edit_product.php?id={$product->id}' class='btn btn-warning'>Edit</a>
                                        <a href='delete_product.php?id={$product->id}' class='btn btn-danger'>Delete</a>
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
