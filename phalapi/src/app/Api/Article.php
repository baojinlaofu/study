<?php
namespace App\Api;

use PhalApi\Api;
use App\Domain\Article as Domain_Article;
/**
 * 系统公告
 */

class Article extends Api {
	public function getRules() {
		return array(
			'getList' => array(
				// 'uid' => array('name' => 'uid', 'type' => 'int', 'min' => 1, 'require' => true, 'desc' => '用户ID'),
				// 'token' => array('name' => 'token', 'type' => 'string',  'require' => true, 'desc' => '用户Token'),
				'p' => array('name' => 'p', 'type' => 'int','default'=>1, 'desc' => '页码'),
			),

			

		);
	}
	
	/**
	 * 获取公告列表
	 * @desc 用于 获取公告列表
	 * @return int code 操作码，0表示成功
	 * @return array info 
	 * @return string msg 提示信息
	 */
	public function getList() {
		$rs = array('code' => 0, 'msg' => '', 'info' => array());
		
		// $uid=\App\checkNull($this->uid);
		// $token=\App\checkNull($this->token);
		$p=\App\checkNull($this->p);
        
        if($p<1){
			$p=1;
		}
        
        
        // $checkToken=\App\checkToken($uid,$token);
		// if($checkToken==700){
		// 	$rs['code'] = $checkToken;
		// 	$rs['msg'] = \PhalApi\T('您的登陆状态失效，请重新登陆！');
		// 	return $rs;
		// }
		
		$domain = new Domain_Article();
		$list = $domain->getList($p);
		
        foreach($list as $k=>$v){
            $v['addtime']=date('Y-m-d H:i',$v['addtime']);
            $list[$k]=$v;
        }

		
		$rs['info']=$list;
		return $rs;			
	}


}
