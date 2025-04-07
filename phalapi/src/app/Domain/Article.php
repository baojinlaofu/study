<?php
namespace App\Domain;
use App\Model\Article as Model_Article;

class Article {
	public function getList($p) {
		$rs = array();

		$model = new Model_Article();
		$rs = $model->getList($p);

		return $rs;
	}


	
}
