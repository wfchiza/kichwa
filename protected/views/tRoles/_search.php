<?php
/* @var $this TRolesController */
/* @var $model TRoles */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'IDROL'); ?>
		<?php echo $form->textField($model,'IDROL'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOMBREROL'); ?>
		<?php echo $form->textField($model,'NOMBREROL',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->