<?php
/* @var $this ChoiceController */
/* @var $data Choice */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('poll_id')); ?>:</b>
	<?php echo CHtml::encode($data->poll_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('choice_text')); ?>:</b>
	<?php echo CHtml::encode($data->choice_text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('votes')); ?>:</b>
	<?php echo CHtml::encode($data->votes); ?>
	<br />


</div>