<?php
/* @var $this ChoiceController */
/* @var $model Choice */

$this->breadcrumbs=array(
	'Choices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Choice', 'url'=>array('index')),
	array('label'=>'Create Choice', 'url'=>array('create')),
	array('label'=>'Update Choice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Choice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Choice', 'url'=>array('admin')),
);
?>

<h1>View Choice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'poll_id',
		'choice_text',
		'votes',
	),
)); ?>
