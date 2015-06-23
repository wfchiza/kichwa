<?php
/* @var $this TRolesController */
/* @var $model TRoles */

$this->breadcrumbs=array(
	'Troles'=>array('index'),
	$model->IDROL,
);

$this->menu=array(
	array('label'=>'List TRoles', 'url'=>array('index')),
	array('label'=>'Create TRoles', 'url'=>array('create')),
	array('label'=>'Update TRoles', 'url'=>array('update', 'id'=>$model->IDROL)),
	array('label'=>'Delete TRoles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDROL),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TRoles', 'url'=>array('admin')),
);
?>

<h1>View TRoles #<?php echo $model->IDROL; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDROL',
		'NOMBREROL',
	),
)); ?>
