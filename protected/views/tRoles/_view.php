<?php
/* @var $this TRolesController */
/* @var $data TRoles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('IDROL')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->IDROL), array('view', 'id'=>$data->IDROL)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOMBREROL')); ?>:</b>
	<?php echo CHtml::encode($data->NOMBREROL); ?>
	<br />


</div>