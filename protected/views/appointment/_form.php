<?php
/* @var $this AppointmentController */
/* @var $model Appointment */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'appointment-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'patient_id'); ?>
		<?php echo $form->textField($model,'patient_id',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'patient_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'appointment_date'); ?>
		<?php echo $form->textField($model,'appointment_date'); ?>
		<?php echo $form->error($model,'appointment_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'note'); ?>
		<?php echo $form->textField($model,'note',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'note'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_sms_sent'); ?>
		<?php echo $form->textField($model,'is_sms_sent'); ?>
		<?php echo $form->error($model,'is_sms_sent'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_automated_call_made'); ?>
		<?php echo $form->textField($model,'is_automated_call_made'); ?>
		<?php echo $form->error($model,'is_automated_call_made'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'is_call_made'); ?>
		<?php echo $form->textField($model,'is_call_made'); ?>
		<?php echo $form->error($model,'is_call_made'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->