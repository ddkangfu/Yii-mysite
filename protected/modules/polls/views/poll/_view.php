<?php
/* @var $this PollController */
/* @var $data Poll */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('question')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->question), array('view', 'id'=>$data->id)); ?>
    [<?php echo CHtml::encode($data->pub_date); ?>]
	<br />
</div>