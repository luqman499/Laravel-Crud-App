<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App-Crud</title>
</head>

<body>
    <h1>PRODUCT</h1>
    <div>
        <?php if(session()->has('success')): ?>
            <div style="color: green">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>

    <br><br>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Description</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($product->id); ?></td>
                <td><?php echo e($product->name); ?></td>
                <td><?php echo e($product->qty); ?></td>
                <td><?php echo e($product->price); ?></td>
                <td><?php echo e($product->description); ?></td>
                <td>
                    <a href="<?php echo e(route('product.edit', ['product' => $product])); ?>">Edit</a>
                </td>
                <td>
                    <form method="post" action="<?php echo e(route('product.destroy', ['product' => $product])); ?>">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('delete'); ?>
                        <input type="submit" value="Delete">
                    </form>
                </td>



            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </table>

</body>

</html>
<?php /**PATH C:\Users\Hm\Desktop\crud-app\resources\views/products/index.blade.php ENDPATH**/ ?>