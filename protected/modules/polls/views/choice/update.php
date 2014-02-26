<?php
/* @var $this ChoiceController */
/* @var $model Choice */

$this->breadcrumbs=array(
	'Choices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Choice', 'url'=>array('index')),
	array('label'=>'Create Choice', 'url'=>array('create')),
	array('label'=>'View Choice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Choice', 'url'=>array('admin')),
);
?>

<h1>Update Choice <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>