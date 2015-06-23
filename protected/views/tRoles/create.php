<?php
/* @var $this TRolesController */
/* @var $model TRoles */

$this->breadcrumbs=array(
	'Troles'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TRoles', 'url'=>array('index')),
	array('label'=>'Manage TRoles', 'url'=>array('admin')),
);
?>

<h1>Create TRoles</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>