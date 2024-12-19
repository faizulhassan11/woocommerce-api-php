<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Order</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Create Order</h1>
        <div class="row mt-4">
            <div class="col-md-12">
                <form action="create_order_process.php" method="POST">
                    <div class="form-group">
                        <label for="payment_method">Payment Method</label>
                        <input type="text" class="form-control" id="payment_method" name="payment_method" required>
                    </div>
                    <div class="form-group">
                        <label for="payment_method_title">Payment Method Title</label>
                        <input type="text" class="form-control" id="payment_method_title" name="payment_method_title" required>
                    </div>
                    <div class="form-group">
                        <label for="set_paid">Set Paid</label>
                        <select class="form-control" id="set_paid" name="set_paid" required>
                            <option value="true">Yes</option>
                            <option value="false">No</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required>
                    </div>
                    <div class="form-group">
                        <label for="address_1">Address 1</label>
                        <input type="text" class="form-control" id="address_1" name="address_1" required>
                    </div>
                    <div class="form-group">
                        <label for="address_2">Address 2</label>
                        <input type="text" class="form-control" id="address_2" name="address_2">
                    </div>
                    <div class="form-group">
                        <label for="city">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State</label>
                        <input type="text" class="form-control" id="state" name="state" required>
                    </div>
                    <div class="form-group">
                        <label for="postcode">Postcode</label>
                        <input type="text" class="form-control" id="postcode" name="postcode" required>
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <input type="text" class="form-control" id="country" name="country" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="products">Products</label>
                        <select class="form-control" id="products" name="products[]" multiple required>
                            <?php
                            require 'woocommerce_crud.php';
                            $products = getAllProducts();
                            if (empty($products)) {
                                echo "<option disabled>No products available</option>";
                            } else {
                                foreach ($products as $product) {
                                    echo "<option value='{$product->id}'>{$product->name} - {$product->price}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="number" class="form-control" id="quantity" name="quantity" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
