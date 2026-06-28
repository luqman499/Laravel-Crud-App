<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <H1>Edit a Product
    </H1>
    <form method="post" action="<?php echo e(route('product.update', ['product' => $product])); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div>
            <label for="Name">Name:</label>
            <input type="text" name="name" placeholder="Name" value="<?php echo e($product->name); ?>">

        </div>
        <br>

        <div>
            <label for="Qty">Qty:</label>
            <input type="text" name="qty" placeholder="Qty" value="<?php echo e($product->qty); ?>">
        </div>
        <br>
        <div>
            <label for="Price">Price:</label>
            <input type="text" name="price" placeholder="Price" value="<?php echo e($product->price); ?>">
        </div>
        <br>
        <div>
            <label for="description">Description:</label>
            <input type="text" name="description" placeholder="Description" value="<?php echo e($product->description); ?>">
        </div>
        <br>
        <input type="submit" value="Update">

    </form>
</body>

</html>
<?php /**PATH C:\Users\Hm\Desktop\crud-app\resources\views/products/edit.blade.php ENDPATH**/ ?>