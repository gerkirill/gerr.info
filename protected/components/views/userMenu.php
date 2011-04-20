<ul>
	<li><?php echo CHtml::link(Yii::t('userMenu', 'Create New Post'),array('post/create')); ?></li>
	<li><?php echo CHtml::link(Yii::t('userMenu', 'Manage Posts'),array('post/admin')); ?></li>
	<li><?php echo CHtml::link(Yii::t('userMenu', 'Approve Comments'),array('comment/index')) . ' (' . Comment::model()->pendingCommentCount . ')'; ?></li>
	<li><?php echo CHtml::link(Yii::t('userMenu', 'Logout'),array('site/logout')); ?></li>
</ul>