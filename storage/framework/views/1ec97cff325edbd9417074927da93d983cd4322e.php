<form method="POST" id="id-form_messages" name="form_messages" action="/add">
    <?php echo e(csrf_field()); ?>


    <div class="form-group <?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
        <label for="name">Имя: *</label>
        <input class="form-control" placeholder="Имя" name="name" type="text" id="name" value="<?php echo e(old('name')); ?>">
        <?php if($errors->has('name')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('name')); ?></strong>
        </span>
        <?php endif; ?>
    </div>


    <div class="form-group <?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
        <label for="email">E-mail:</label>
        <input class="form-control" placeholder="E-mail" name="email" type="email" id="email" value="<?php echo e(old('email')); ?>">
        <?php if($errors->has('email')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('email')); ?></strong>
        </span>
        <?php endif; ?>
    </div>

    <div class="form-group <?php echo e($errors->has('message') ? ' has-error' : ''); ?>">
        <label for="message">Сообщение (минимум 5 символов): *</label>
        <textarea class="form-control" rows="5" placeholder="Текст сообщения" name="message" cols="50"
                  id="message"><?php echo e(old('message')); ?></textarea>
        <?php if($errors->has('message')): ?>
        <span class="help-block">
            <strong><?php echo e($errors->first('message')); ?></strong>
        </span>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <input class="btn btn-primary" type="submit" value="Добавить">
    </div>       
</form>