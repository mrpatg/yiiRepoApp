<?php
/* @var $this RepoappController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Repoapps',
);

$this->menu=array(
	array('label'=>'Create Repoapp', 'url'=>array('create')),
	array('label'=>'Manage Repoapp', 'url'=>array('admin')),
);
?>

<h1>Repoapps</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
