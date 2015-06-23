<?php
/* @var $this DiccionarioController */
/* @var $model Diccionario */

$this->breadcrumbs=array(
	'Diccionarios'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Diccionario', 'url'=>array('index')),
	array('label'=>'Create Diccionario', 'url'=>array('create')),
	array('label'=>'View Diccionario', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Diccionario', 'url'=>array('admin')),
);
?>

<h1>Update Diccionario <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>