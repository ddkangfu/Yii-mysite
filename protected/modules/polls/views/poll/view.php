<?php
/* @var $this PollController */
/* @var $model Poll */

$this->breadcrumbs=array(
	'Polls'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Poll', 'url'=>array('index')),
	array('label'=>'Create Poll', 'url'=>array('create')),
	array('label'=>'Update Poll', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Poll', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Poll', 'url'=>array('admin')),
);
?>

<h1>Vote For: <?php echo $model->question; ?></h1>
[<?php echo $model->pub_date ?>]</br>
<?php print_r($model); ?>
<br />
-----------------------------------------
<?php print_r($model->choices); ?>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_choiceview',
)); ?>