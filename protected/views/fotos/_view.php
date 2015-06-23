<?php
/* @var $this FotosController */
/* @var $data Fotos */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id' => $data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('ruta')); ?>:</b>
    <?php echo CHtml::encode($data->ruta); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('foto')); ?>:</b>
    
    <?php echo CHtml::image(Yii::app()->request->baseUrl.'/images/'.$data->ruta,'foto',array('width'=>200));
    echo (Yii::app()->request->baseUrl.'/images/'.$data->ruta);
    ?>
    
    <br />


</div>