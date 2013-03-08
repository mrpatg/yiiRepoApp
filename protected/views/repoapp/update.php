<?php
/* @var $this RepoappController */
/* @var $model Repoapp */

$this->breadcrumbs=array(
	'Repoapps'=>array('index'),
	$model->index=>array('view','id'=>$model->index),
	'Update',
);

$this->menu=array(
	array('label'=>'List Repoapp', 'url'=>array('index')),
	array('label'=>'Create Repoapp', 'url'=>array('create')),
	array('label'=>'View Repoapp', 'url'=>array('view', 'id'=>$model->index)),
	array('label'=>'Manage Repoapp', 'url'=>array('admin')),
);
?>

<h1>Update Repoapp <?php echo $model->index; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>