<?php
$this->pageTitle=Yii::app()->name . ' - '.Yii::t('contactForm', 'Contact Us');
$this->breadcrumbs=array(
	'Contact',
);
?>

<h1><?php echo Yii::t('contactForm', 'Contact Us') ?></h1>

<?php if(Yii::app()->user->hasFlash('contact')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('contact'); ?>
</div>

<?php else: ?>

<p>
<?php echo Yii::t('contactForm', 'If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.'); ?>
</p>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm'); ?>

	<p class="note"><?php echo Yii::t('contactForm', 'Fields with <span class="required">*</span> are required.')?></p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'subject'); ?>
		<?php echo $form->textField($model,'subject',array('size'=>60,'maxlength'=>128)); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'body'); ?>
		<?php echo $form->textArea($model,'body',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<?php if(extension_loaded('gd')): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode'); ?>
		<div>
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		</div>
		<div class="hint"><?php echo Yii::t('contactForm', 'Please enter the letters as they are shown in the image above.')?>
		<br/><?php echo Yii::t('contactForm', 'Letters are not case-sensitive.')?></div>
	</div>
	<?php endif; ?>

	<div class="row submit">
		<input type="image" src="<?php echo Yii::app()->request->baseUrl ?>/images/button.gif" alt="" style="width:94px;height:27px;padding:0;border:medium none" />
		<!-- <?php echo CHtml::submitButton(Yii::t('contactForm', 'Submit')); ?> -->
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->

<?php endif; ?>