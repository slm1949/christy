<?php
$this->breadcrumbs=array(
	Yii::t('model', 'Books')=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>Yii::t('admin', 'Update {model}', array('{model}'=>Yii::t('model', 'Book'))),'url'=>array('update','id'=>$model->id)),
	array('label'=>Yii::t('admin', 'Delete {model}', array('{model}'=>Yii::t('model', 'Book'))),'url'=>'#','htmlOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>Yii::t('admin', 'Are you sure you want to delete this item?'))),
);
?>

<h1><?php echo Yii::t('admin', 'View {model}', array('{model}'=>Yii::t('model', 'Book'))); ?>  #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'isbn',
		'name',
		'origin_title',
		'alt_title',
		'subtitle',
		'category_id',
		'author_id',
		'press_id',
		'file',
		'image',
		'price',
		'pages',
		'press_date',
		'word_number',
		'description',
		'author_intro',
		'created_at',
		'updated_at',
	),
)); ?>
