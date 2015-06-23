<?php
/* @var $this TUsuariosController */
/* @var $data TUsuarios */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('IDUSUARIO')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->IDUSUARIO), array('view', 'id' => $data->IDUSUARIO)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('IDROL')); ?>:</b>
    <?php echo CHtml::encode($data->iDROL->NOMBREROL); ?> <!--iDROL es el nombre del alias de la funcion relations() en TUsuarios
                                                   , NOMBREROL es nombre del rol -->
    <br />
    <!-- -->
    <b><?php echo CHtml::encode($data->getAttributeLabel('IDPAIS')); ?>:</b>
    <?php echo CHtml::encode($data->IDPAIS); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('NOMBRES')); ?>:</b>
    <?php echo CHtml::encode($data->NOMBRES); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('APELLIDOS')); ?>:</b>
    <?php echo CHtml::encode($data->APELLIDOS); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('CORREO')); ?>:</b>
    <?php echo CHtml::encode($data->CORREO); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('USUARIO')); ?>:</b>
    <?php echo CHtml::encode($data->USUARIO); ?>
    <br />

    <?php /*
      <b><?php echo CHtml::encode($data->getAttributeLabel('CLAVE')); ?>:</b>
      <?php echo CHtml::encode($data->CLAVE); ?>
      <br />

     */ ?>

</div>