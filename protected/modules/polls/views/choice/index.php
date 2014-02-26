<?php
/* @var $this ChoiceController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Choices',
);

$this->menu=array(
	array('label'=>'Create Choice', 'url'=>array('create')),
	array('label'=>'Manage Choice', 'url'=>array('admin')),
);
?>

<h1>Choices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
