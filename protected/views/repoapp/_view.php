<?php
/* @var $this RepoappController */
/* @var $data Repoapp */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('index')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->index), array('view', 'id'=>$data->index)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('json')); ?>:</b>
	<?php echo CHtml::encode($data->json); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('date')); ?>:</b>
	<?php echo CHtml::encode($data->date); ?>
	<br />


</div>