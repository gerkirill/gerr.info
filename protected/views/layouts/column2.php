<?php $this->beginContent('/layouts/main'); ?>
	<div id="posts">
		<?php echo $content; ?>
	</div>
	<div id="sidebar">
		<div id="search">
			<input type="text" value="Search"> <a href="#"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/go.gif" alt="" width="26" height="26" /></a>																																																																																																																																																																																																																																																						<div class="inner_copy"><a href="http://www.bestfreetemplates.org/">free templates</a><a href="http://www.bannermoz.com/">banner templates</a></div>
		</div>
		<div class="list">
			<?php if(!Yii::app()->user->isGuest) $this->widget('UserMenu'); ?>

			<?php $this->widget('TagCloud', array(
				'maxTags'=>Yii::app()->params['tagCloudCount'],
			)); ?>

			<?php $this->widget('RecentComments', array(
				'maxComments'=>Yii::app()->params['recentCommentCount'],
			)); ?>
		</div>
	</div><!-- sidebar -->
<?php $this->endContent(); //558398?>