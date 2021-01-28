<?php
/** @var  $this \andreidediumxv\phpmvc\View */
/** @var  $model \app\models\ContactForm */
$this->title = 'Contact';
?>
<h1>Contact</h1>

<?php $form = \andreidediumxv\phpmvc\form\Form::begin('', 'post')?>
    <?php echo $form->field($model, 'subject')?>
    <?php echo $form->field($model, 'email')?>
    <?php echo new \andreidediumxv\phpmvc\form\TextareaField($model, 'body')?>
    <button type="submit" class="btn btn-primary">Submit</button>
<?php $form = \andreidediumxv\phpmvc\form\Form::end()?>
