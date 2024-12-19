<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Order</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Edit Order</h1>
        <div class="row mt-4">
            <div class="col-md-12">
                <?php
                require 'woocommerce_crud.php';
                $order = getOrder($_GET['id']);
                ?>
                <form action="edit_order_process.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $order->id; ?>">
                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" name="status" value="<?php echo $order->status; ?>" required>
                    </div>
                    <!-- Add more fields as needed -->
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
