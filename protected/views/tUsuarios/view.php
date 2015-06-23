<?php
/* @var $this TUsuariosController */
/* @var $model TUsuarios */

$this->breadcrumbs=array(
	'Tusuarioses'=>array('index'),
	$model->IDUSUARIO,
);

$this->menu=array(
	array('label'=>'List TUsuarios', 'url'=>array('index')),
	array('label'=>'Create TUsuarios', 'url'=>array('create')),
	array('label'=>'Update TUsuarios', 'url'=>array('update', 'id'=>$model->IDUSUARIO)),
	array('label'=>'Delete TUsuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->IDUSUARIO),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TUsuarios', 'url'=>array('admin')),
);
?>

<h1>View TUsuarios #<?php echo $model->IDUSUARIO; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'IDUSUARIO',
		'IDROL',
		'IDPAIS',
		'NOMBRES',
		'APELLIDOS',
		'CORREO',
		'USUARIO',
		'CLAVE',
	),
)); ?>
