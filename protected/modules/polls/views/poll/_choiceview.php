<?php
/* @var $this PollController */
/* @var $data Poll */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('choice_text')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->choice_text), array('view', 'id'=>$data->id)); ?>
    (<?php echo CHtml::encode($data->votes); ?>)
	<br />
</div>