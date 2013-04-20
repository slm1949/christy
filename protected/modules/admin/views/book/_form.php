<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'book-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block"><?php echo Yii::t('admin', 'Fields with <span class="required">*</span> are required.') ?>
</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'category',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'press',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'isbn',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'description',array('class'=>'span5','maxlength'=>255)); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('admin', 'Create') : Yii::t('admin', 'Update'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
