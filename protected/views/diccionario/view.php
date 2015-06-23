<?php
/* @var $this DiccionarioController */
/* @var $model Diccionario */

$this->breadcrumbs = array(
    'Diccionarios' => array('index'),
    $model->id,
);

$this->menu = array(
    array('label' => 'List Diccionario', 'url' => array('index')),
    array('label' => 'Create Diccionario', 'url' => array('create')),
    array('label' => 'Update Diccionario', 'url' => array('update', 'id' => $model->id)),
    array('label' => 'Delete Diccionario', 'url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),
    array('label' => 'Manage Diccionario', 'url' => array('admin')),
);
?>

<h1>View Diccionario #<?php echo $model->id; ?></h1>

<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'id',
        'nombre',
        'ruta',
        array(
            'type' => 'html',
            'name' => 'imagen',
            'value' => CHtml::image($model->ruta, "alt", array("width" => 400, "height" => 200)),
        ),
        'Significado',
    ),
));
