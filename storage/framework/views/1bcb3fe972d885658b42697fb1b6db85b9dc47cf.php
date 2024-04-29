<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <h1>Edit the Product</h1>
    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($$error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <form method="POST" action="<?php echo e(route('product.update', ['product' => $product])); ?>">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
        <div>
            <label for="">Name</label>
            <input type="name" name="name" placeholder="Name"
            value="<?php echo e($product->name); ?>">
<br/>
            <label for="">Qty</label>
            <input type="text" name="qty" placeholder="Qty" value="<?php echo e($product->qty); ?>">
            <br/>
            <label for="">Price</label>
            <input type="text" name="price" placeholder="Price" value="<?php echo e($product->price); ?>">
            <br/>
        </div>
        <div>
            <input type="submit" value="Update">
        </div>
    </form>
    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html><?php /**PATH C:\Users\Vivobook\laravel-crud\resources\views/products/edit.blade.php ENDPATH**/ ?>