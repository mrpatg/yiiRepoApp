<?php
/* @var $this RepoappController */
/* @var $model Repoapp */

$this->breadcrumbs=array(
	'Repoapps'=>array('index'),
	$model->index,
);

$this->menu=array(
	array('label'=>'List Repoapp', 'url'=>array('index')),
	array('label'=>'Create Repoapp', 'url'=>array('create')),
	array('label'=>'Update Repoapp', 'url'=>array('update', 'id'=>$model->index)),
	array('label'=>'Delete Repoapp', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->index),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Repoapp', 'url'=>array('admin')),
);
?>

<h1>View Repoapp #<?php echo $model->index; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'index',
		'json',
		'date',
	),
)); ?>
