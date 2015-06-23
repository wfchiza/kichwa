<?php
/* @var $this FotosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Fotos',
);

$this->menu=array(
	array('label'=>'Create Fotos', 'url'=>array('create')),
	array('label'=>'Manage Fotos', 'url'=>array('admin')),
);
?>

<h1>Fotos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
