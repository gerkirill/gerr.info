<div class="post">
	<h2>
		<?php echo CHtml::encode($data->title) ?>
	</h2>
	<div>
		<span class="date"><!-- <?php echo Yii::t('posts', 'posted by')?> <?php echo $data->author->username?><?php echo Yii::t('posts', ' on ')?> --><?php echo date('d.m.Y',$data->create_time); ?></span>
		<span class="categories"><b><?php echo Yii::t('posts', 'Tags:')?></b>
		<?php echo implode(', ', $data->tagLinks); ?></span>
	</div>
	<div class="description">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<?php echo CHtml::link(Yii::t('posts', 'Permalink'), $data->url); ?> |
		<?php echo CHtml::link(Yii::t('posts', 'Comments')." ({$data->commentCount})",$data->url.'#comments'); ?> |
		<?php echo Yii::t('posts', 'Last updated on')?> <?php echo date('d.m.Y',$data->update_time); ?>
	</div>
</div>
