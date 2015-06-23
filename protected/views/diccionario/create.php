<?php
/* @var $this DiccionarioController */
/* @var $model Diccionario */

$this->breadcrumbs=array(
	'Diccionarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Diccionario', 'url'=>array('index')),
	array('label'=>'Manage Diccionario', 'url'=>array('admin')),
);
?>

<h1>Create Diccionario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>