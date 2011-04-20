<div class="post">
	<div class="title">
		<?php echo CHtml::link(CHtml::encode($data->title), $data->url); ?>
	</div>
	<div class="author">
		<?php echo Yii::t('posts', 'posted by')?> <?php echo $data->author->username?><?php echo Yii::t('posts', ' on ')?><?php echo date('F j, Y',$data->create_time); ?>
	</div>
	<div class="content">
		<?php
			$this->beginWidget('CMarkdown', array('purifyOutput'=>true));
			echo $data->content;
			$this->endWidget();
		?>
	</div>
	<div class="nav">
		<b><?php echo Yii::t('posts', 'Tags:')?></b>
		<?php echo implode(', ', $data->tagLinks); ?>
		<br/>
		<?php echo CHtml::link(Yii::t('posts', 'Permalink'), $data->url); ?> |
		<?php echo CHtml::link(Yii::t('posts', 'Comments')." ({$data->commentCount})",$data->url.'#comments'); ?> |
		Last updated on <?php echo date('F j, Y',$data->update_time); ?>
	</div>
</div>
