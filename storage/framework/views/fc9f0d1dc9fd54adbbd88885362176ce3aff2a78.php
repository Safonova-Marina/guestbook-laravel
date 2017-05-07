<?php $__env->startSection('content'); ?>

<div class="container">
    <h1 class="text-center"><?php echo e($title); ?></h1>
    <hr/>
    <?php if(Auth::guest()): ?>
        <?php echo $__env->make('messages.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php else: ?>
        <?php echo $__env->make('messages.newPost1', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <?php echo $__env->make('messages.posts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>