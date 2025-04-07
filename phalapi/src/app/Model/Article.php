<?php
namespace App\Model;
use PhalApi\Model\NotORMModel as NotORM;

class Article extends NotORM {
	/* 信息列表 */
	public function getList($p) {
        if($p<1){
            $p=1;
        }
		$pnum=50;
		$start=($p-1)*$pnum;

        //语言包
        $language=\PhalApi\DI()->language;
        
		$list=\PhalApi\DI()->notorm->article
            ->select('content,article_name,addtime')
        
            ->order('addtime desc')
            ->limit($start,$pnum)
            ->fetchAll();

        // foreach ($list as $k => $v) {
        //     if($language=='en'){
        //         $list[$k]['content']=$v['content_en'];
        //     }
        // }


		return $list;
	}

   
}
