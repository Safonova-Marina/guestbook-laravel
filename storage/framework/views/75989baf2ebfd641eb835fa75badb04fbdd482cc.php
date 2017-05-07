<div class="text-right"><b>Всего сообщений:</b> <i class="badge"><?php echo e($total_mes); ?></i></div>
<br/>
<div class="messages">
    <?php if(!$messages -> isEmpty()): ?>
        <?php foreach($messages as $message): ?>
            <div class="panel panel-default">

                <div class="panel-heading">
                    <h3 class="panel-title">
                        <span>
                        <?php if ( ! (empty($message -> email))): ?>
                            <a href="mailto:<?php echo e($message -> email); ?>"><?php echo e($message -> avtor_name); ?></a>
                        <?php else: ?>
                            <?php echo e($message -> avtor_name); ?>

                        <?php endif; ?>
                        </span>
                        <span class="pull-right label label-info">
                            <?php echo e($message -> created_at); ?>

                        </span>
                    </h3>
                </div>
                <div class="panel-body">
                    <?php echo e($message -> message); ?>

                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center">
            <?php echo e($messages -> render()); ?>

        </div>
	<?php else: ?>
		<div class="text-center bg-info">
			Вы будете первым, кто напишет сообщение!
        </div>
    <?php endif; ?>    
</div>