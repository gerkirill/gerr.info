<div class="form">

<?php $form=$this->beginWidget('CActiveForm'); ?>

	<p class="note"><?php echo Yii::t('post', 'Fields with <span class="required">*</span> are required.')?></p>

	<?php echo CHtml::errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>80,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo CHtml::activeTextArea($model,'content',array('rows'=>10, 'cols'=>70)); ?>
		<p class="hint"><?php echo Yii::t('post', 'You may use')?> <a target="_blank" href="http://daringfireball.net/projects/markdown/syntax"><?php echo Yii::t('post', 'Markdown syntax')?></a>.</p>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tags'); ?>
		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'tags',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); ?>
		<p class="hint"><?php echo Yii::t('post', 'Please separate different tags with commas.')?></p>
		<?php echo $form->error($model,'tags'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->dropDownList($model,'status',Lookup::items('PostStatus')); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row buttons">
		<input type="image" src="<?php echo Yii::app()->request->baseUrl ?>/images/button.gif" alt="" style="width:94px;height:27px;padding:0;border:medium none" />
		<!-- <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('post', 'Create') : Yii::t('post', 'Save')); ?> -->
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->