<?php
/* @var $this DiccionarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Diccionarios',
);

$this->menu=array(
	array('label'=>'Create Diccionario', 'url'=>array('create')),
	array('label'=>'Manage Diccionario', 'url'=>array('admin')),
);
?>

<h1>Diccionarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
