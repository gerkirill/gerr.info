<ul>
	<?php foreach($this->getRecentComments() as $comment): ?>
	<li><?php echo $comment->authorLink; ?><?php echo Yii::t('comments', ' on ')?>
		<?php echo CHtml::link(CHtml::encode($comment->post->title), $comment->getUrl()); ?>
	</li>
	<?php endforeach; ?>
</ul>