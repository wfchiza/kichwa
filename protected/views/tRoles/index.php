<?php
/* @var $this TRolesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Troles',
);

$this->menu=array(
	array('label'=>'Create TRoles', 'url'=>array('create')),
	array('label'=>'Manage TRoles', 'url'=>array('admin')),
);
?>

<h1>Troles</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
