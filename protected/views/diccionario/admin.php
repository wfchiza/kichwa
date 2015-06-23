<?php
/* @var $this DiccionarioController */
/* @var $model Diccionario */

$this->breadcrumbs = array(
    'Diccionarios' => array('index'),
    'Manage',
);

$this->menu = array(
    array('label' => 'List Diccionario', 'url' => array('index')),
    array('label' => 'Create Diccionario', 'url' => array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#diccionario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Diccionarios</h1>

<p>
    Diccionario Visual Kichwa panka
</p>

<?php echo CHtml::link('Advanced Search', '#', array('class' => 'search-button')); ?>
<div class="search-form" style="display:none">
    <?php
    $this->renderPartial('_search', array(
        'model' => $model,
    ));
    ?>
</div><!-- search-form -->

<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'id' => 'diccionario-grid',
    'dataProvider' => $model->search(),
    'filter' => $model,
    'columns' => array(
        'nombre',
        array(
            'type' => 'html',
            'name' => 'ruta',
            'value' => 'CHtml::image($data->ruta)',
            'filter' => false,  //para que no aparesca el campo de filto
        ),
        array(
            'class' => 'CButtonColumn',
            'template'=>'{view}',
        ),
    ),
));
?>
