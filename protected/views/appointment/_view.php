<?php
/* @var $this AppointmentController */
/* @var $data Appointment */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('patient_id')); ?>:</b>
	<?php echo CHtml::encode($data->patient_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('appointment_date')); ?>:</b>
	<?php echo CHtml::encode($data->appointment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('note')); ?>:</b>
	<?php echo CHtml::encode($data->note); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_sms_sent')); ?>:</b>
	<?php echo CHtml::encode($data->is_sms_sent); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_automated_call_made')); ?>:</b>
	<?php echo CHtml::encode($data->is_automated_call_made); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('is_call_made')); ?>:</b>
	<?php echo CHtml::encode($data->is_call_made); ?>
	<br />


</div>