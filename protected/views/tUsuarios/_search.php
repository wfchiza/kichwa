<?php
/* @var $this TUsuariosController */
/* @var $model TUsuarios */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDUSUARIO'); ?>
		<?php echo $form->textField($model,'IDUSUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDROL'); ?>
		<?php echo $form->textField($model,'IDROL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'IDPAIS'); ?>
		<?php echo $form->textField($model,'IDPAIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBRES'); ?>
		<?php echo $form->textField($model,'NOMBRES',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'APELLIDOS'); ?>
		<?php echo $form->textField($model,'APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CORREO'); ?>
		<?php echo $form->textField($model,'CORREO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'USUARIO'); ?>
		<?php echo $form->textField($model,'USUARIO',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLAVE'); ?>
		<?php echo $form->textField($model,'CLAVE',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->