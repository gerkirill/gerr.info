<?php

Yii::import('zii.widgets.CPortlet');

class RecentComments extends CPortlet
{
	public $title='';
	public $maxComments=10;

	public function __construct()
	{
		$this->title =  Yii::t('userMenu', 'Recent Comments');
		parent::__construct();
	}

	public function getRecentComments()
	{
		return Comment::model()->findRecentComments($this->maxComments);
	}

	protected function renderContent()
	{
		$this->render('recentComments');
	}
}