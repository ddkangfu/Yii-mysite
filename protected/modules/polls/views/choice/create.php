<?php
/* @var $this ChoiceController */
/* @var $model Choice */

$this->breadcrumbs=array(
	'Choices'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Choice', 'url'=>array('index')),
	array('label'=>'Manage Choice', 'url'=>array('admin')),
);
?>

<h1>Create Choice</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>