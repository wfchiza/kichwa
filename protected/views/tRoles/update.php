<?php
/* @var $this TRolesController */
/* @var $model TRoles */

$this->breadcrumbs=array(
	'Troles'=>array('index'),
	$model->IDROL=>array('view','id'=>$model->IDROL),
	'Update',
);

$this->menu=array(
	array('label'=>'List TRoles', 'url'=>array('index')),
	array('label'=>'Create TRoles', 'url'=>array('create')),
	array('label'=>'View TRoles', 'url'=>array('view', 'id'=>$model->IDROL)),
	array('label'=>'Manage TRoles', 'url'=>array('admin')),
);
?>

<h1>Update TRoles <?php echo $model->IDROL; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>