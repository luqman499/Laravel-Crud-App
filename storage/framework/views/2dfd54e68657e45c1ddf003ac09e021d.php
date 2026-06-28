<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: sans-serif;
            background: #f5f5f5;
            color: #333;
            padding: 2rem;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
        }

        h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .btn {
            padding: 0.5rem 1.2rem;
            border-radius: 6px;
            text-decoration: none;
            font-size: 0.9rem;
            cursor: pointer;
            border: none;
        }

        .btn-primary {
            background: #4f46e5;
            color: white;
        }

        .btn-primary:hover {
            background: #4338ca;
        }

        .btn-danger {
            background: #ef4444;
            color: white;
        }

        .btn-danger:hover {
            background: #dc2626;
        }

        .btn-warning {
            background: #f59e0b;
            color: white;
        }

        .btn-warning:hover {
            background: #d97706;
        }

        .btn-info {
            background: #3b82f6;
            color: white;
        }

        .btn-info:hover {
            background: #2563eb;
        }

        .alert-success {
            background: #d1fae5;
            color: #065f46;
            border: 1px solid #a7f3d0;
            padding: 0.75rem 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
        }

        table {
            width: 100%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            border-collapse: collapse;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
        }

        th {
            background: #4f46e5;
            color: white;
            padding: 0.85rem 1rem;
            text-align: left;
            font-size: 0.85rem;
            font-weight: 500;
        }

        td {
            padding: 0.85rem 1rem;
            border-bottom: 1px solid #f0f0f0;
            font-size: 0.9rem;
        }

        tr:last-child td {
            border-bottom: none;
        }

        tr:hover td {
            background: #fafafa;
        }

        .actions {
            display: flex;
            gap: 0.5rem;
        }

        .actions form {
            margin: 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="top-bar">
            <h1>Products</h1>
            <a href="<?php echo e(route('product.create')); ?>" class="btn btn-primary">+ Add Product</a>
        </div>

        <?php if(session()->has('success')): ?>
            <div class="alert-success"><?php echo e(session('success')); ?></div>
        <?php endif; ?>

        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($product->id); ?></td>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->qty); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td>
                        <div class="actions">
                            <a href="<?php echo e(route('product.show', ['product' => $product])); ?>" class="btn btn-info">View</a>
                            <a href="<?php echo e(route('product.edit', ['product' => $product])); ?>"
                                class="btn btn-warning">Edit</a>
                            <form method="post" action="<?php echo e(route('product.destroy', ['product' => $product])); ?>">
                                <?php echo csrf_field(); ?>
                                <?php echo method_field('delete'); ?>
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Delete this product?')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    </div>
</body>

</html>





<?php /**PATH C:\Users\Hm\Desktop\crud-app\resources\views/products/index.blade.php ENDPATH**/ ?>