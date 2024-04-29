<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="/bootstrap-5.3.3-dist/css/bootstrap.css" rel="stylesheet">
</head>
<body>
    <h1>Product</h1>
    <button type="button" class="btn btn-success"><a href="<?php echo e(route('product.create')); ?>">Add New</a></button>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Qty</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
      <th scope="row"><?php echo e($product->id); ?></th>
      <td ><?php echo e($product->name); ?></td>
      <td ><?php echo e($product->price); ?></td>
      <td ><?php echo e($product->qty); ?></td>
      <td><button type="button" class="btn btn-primary">View</button>
    <button type="button" class="btn btn-warning" > 
        <a href="<?php echo e(route('product.edit', ['product' => $product])); ?>">Edit</a></button>
    <button type="button" class="btn btn-danger">
        <form action="post" action="<?php echo e(route('product.destroy',['product' => $product])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('delete'); ?>
            <input type="submit" value="Delete"/>
        </form>
    </button></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  </tbody>
</table>

    <script src="/bootstrap-5.3.3-dist/js/bootstrap.js"></script>
</body>
</html><?php /**PATH C:\Users\Vivobook\laravel-crud\resources\views/products/index.blade.php ENDPATH**/ ?>