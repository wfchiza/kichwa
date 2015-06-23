<?php
/* @var $this TUsuariosController */
/* @var $model TUsuarios */

$this->breadcrumbs=array(
	'Tusuarioses'=>array('index'),
	$model->IDUSUARIO=>array('view','id'=>$model->IDUSUARIO),
	'Update',
);

$this->menu=array(
	array('label'=>'List TUsuarios', 'url'=>array('index')),
	array('label'=>'Create TUsuarios', 'url'=>array('create')),
	array('label'=>'View TUsuarios', 'url'=>array('view', 'id'=>$model->IDUSUARIO)),
	array('label'=>'Manage TUsuarios', 'url'=>array('admin')),
);
?>

<h1>Update TUsuarios <?php echo $model->IDUSUARIO; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>