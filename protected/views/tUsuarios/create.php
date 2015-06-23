<?php
/* @var $this TUsuariosController */
/* @var $model TUsuarios */

$this->breadcrumbs=array(
	'Tusuarioses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TUsuarios', 'url'=>array('index')),
	array('label'=>'Manage TUsuarios', 'url'=>array('admin')),
);
?>

<h1>Create TUsuarios</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>