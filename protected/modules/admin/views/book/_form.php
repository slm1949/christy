<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . "/css/uploadify.css"); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/jquery.uploadify.min.js"); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->baseUrl . "/js/admin/book.js"); ?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'book-form',
    'type'=>'horizontal',
	'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
    'clientOptions'=>array( 
        'validateOnSubmit'=>true,
    ), 
	'htmlOptions'=>array(
		'enctype'=>'multipart/form-data',
	), 
)); ?>

	<p class="help-block"><?php echo Yii::t('admin', 'Fields with <span class="required">*</span> are required.') ?>
</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'isbn',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->dropDownListRow($model,'author',CHtml::listData(Author::model()->findAll(), 'name', 'name')); ?>

	<?php echo $form->dropDownListRow($model,'category',CHtml::listData(Category::model()->findAll(), 'name', 'name')); ?>

	<?php echo $form->dropDownListRow($model,'press',CHtml::listData(Press::model()->findAll(), 'name', 'name')); ?>

	<?php echo $form->textFieldRow($model,'document',array('readonly'=>'true')); ?>
	<div class="control-group ">
		<label class="control-label"></label>
		<div class="controls">
			<div id="file_upload"></div>
		</div>
	</div>

	<?php echo $form->textFieldRow($model,'picture',array('readonly'=>'true')); ?>
	<div class="control-group ">
		<label class="control-label"></label>
		<div class="controls">
			<div id="image_upload"></div>
		</div>
	</div>

	<?php echo $form->textAreaRow($model,'description',array('class'=>'span5','rows'=>'8','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'price',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'pages',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'press_time',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'word_number',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? Yii::t('admin', 'Create') : Yii::t('admin', 'Update'),
		)); ?>
	</div>

<?php $this->endWidget(); ?>
