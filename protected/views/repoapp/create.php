<?php
/* @var $this RepoappController */
/* @var $model Repoapp */

$this->breadcrumbs=array(
	'Repoapps'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Repoapp', 'url'=>array('index')),
	array('label'=>'Manage Repoapp', 'url'=>array('admin')),
);
?>

<h1>Create Repoapp</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>