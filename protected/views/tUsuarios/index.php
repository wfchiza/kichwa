<?php
/* @var $this TUsuariosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tusuarioses',
);

$this->menu=array(
	array('label'=>'Create TUsuarios', 'url'=>array('create')),
	array('label'=>'Manage TUsuarios', 'url'=>array('admin')),
);
?>

<h1>Tusuarioses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
