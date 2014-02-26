<?php
/* @var $this ChoiceController */
/* @var $model Choice */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'choice-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'poll_id'); ?>
		<?php echo $form->textField($model,'poll_id'); ?>
		<?php echo $form->error($model,'poll_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'choice_text'); ?>
		<?php echo $form->textField($model,'choice_text',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'choice_text'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'votes'); ?>
		<?php echo $form->textField($model,'votes'); ?>
		<?php echo $form->error($model,'votes'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->