<?php
/** @var $model \andreidediumxv\phpmvc\User */
?>
<h1>Login</h1>
<?php $form = \andreidediumxv\phpmvc\form\Form::begin('', 'post')?>
<?php echo $form->field($model, 'email')?>
<?php echo $form->field($model, 'password')->passwordField()?>
<button type="submit" class="btn btn-primary">Submit</button>
<?php \andreidediumxv\phpmvc\form\Form::end()?>
