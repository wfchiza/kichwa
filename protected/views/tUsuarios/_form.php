<?php
/* @var $this TUsuariosController */
/* @var $model TUsuarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tusuarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'IDROL'); ?>
		<?php echo $form->dropDownList($model,'IDROL',  CHtml::listData(TRoles::model()->findAll(),'IDROL' ,'NOMBREROL'),array('empty'=>'Seleccione Rol')); ?>
		<!--AQUI cambie -->
                    <?php echo $form->error($model,'IDROL'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'IDPAIS'); ?>
		<?php echo $form->textField($model,'IDPAIS'); ?>
		<?php echo $form->error($model,'IDPAIS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOMBRES'); ?>
		<?php echo $form->textField($model,'NOMBRES',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'NOMBRES'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'APELLIDOS'); ?>
		<?php echo $form->textField($model,'APELLIDOS',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'APELLIDOS'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CORREO'); ?>
		<?php echo $form->textField($model,'CORREO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'CORREO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'USUARIO'); ?>
		<?php echo $form->textField($model,'USUARIO',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'USUARIO'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLAVE'); ?>
		<?php echo $form->textField($model,'CLAVE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'CLAVE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->