<?php

/**
 * 文章管理
 */
namespace app\admin\controller;

use cmf\controller\AdminBaseController;
use think\facade\Db;

class ArticleController extends AdminbaseController {

    protected function getStatus($k=''){
        $status=array(
            '0'=>'隐藏',
            '1'=>'显示',
        );
        if($k===''){
            return $status;
        }
        return $status[$k] ?? '';
    }
    
    /*列表*/
	function index(){
        $data = $this->request->param();
        $map=[];
        
        
        $keyword= $data['keyword'] ?? '';
        if($keyword!=''){
            $map[]=['article_name','like','%'.$keyword.'%'];
        }
			

    	$lists = Db::name("article")
                ->where($map)
                ->order("list_order asc,id DESC")
                ->paginate(20);
        
        // $lists->each(function($v,$k){
		// 	$v['article_thumb']=get_upload_path($v['article_thumb']);
        //     return $v;           
        // });
        
        $lists->appends($data);
        $page = $lists->render();

    	$this->assign('lists', $lists);

    	$this->assign("page", $page);
        
    	$this->assign("status", $this->getStatus());
    	
    	return $this->fetch();
	}
    
    //排序
    function listOrder() { 
        $model = DB::name('article');
        parent::listOrders($model);
        
        $this->resetcache();
		
		
		$action="更新文章列表顺序";
        setAdminLog($action);

        $this->success("排序更新成功！");
    }


	/*删除*/
	function del(){
        $id = $this->request->param('id', 0, 'intval');
        
        $rs = DB::name('article')->where("id={$id}")->delete();
        if(!$rs){
            $this->error("删除失败！");
        }

        $this->resetcache();
        
		
		$action="删除文章ID: ".$id;
        setAdminLog($action);
        $this->success("删除成功！");
	}


	/*添加*/
	function add(){
        $this->assign("status", $this->getStatus());
		return $this->fetch();
	}

	/*添加提交*/
	function addPost(){
		if ($this->request->isPost()) {
            
            $data = $this->request->param();
            
			$article_name=$data['article_name'];
            $content=$data['content'];

			if($article_name==""){
				$this->error("请填写名称");
			}

            if($content==""){
                $this->error("请填写内容");
            }

            // $isexist=DB::name('article')->where(['article_name'=>$article_name])->find();
            // if($isexist){
            //     $this->error("名称已存在");
            // }

         

            // $data['article_thumb']=set_upload_path($article_thumb);

          
			// if(!preg_match("/^\d*$/",$article_phone)){
			// 	$this->error("请填写正确的快递公司电话");
			// }
         
            $data['addtime']=time();
            
			$id = DB::name('article')->insertGetId($data);
            if(!$id){
                $this->error("添加失败！");
            }

			$action="添加文章ID: ".$id;
			setAdminLog($action);

            $this->resetcache();
            
            $this->success("添加成功！");
            
		}

	}

	/*编辑*/
	function edit(){
        
        $id   = $this->request->param('id', 0, 'intval');
        
        $data=Db::name('article')
            ->where("id={$id}")
            ->find();
        if(!$data){
            $this->error("信息错误");
        }
        
        $this->assign('status',$this->getStatus());
        $this->assign('data', $data);
        return $this->fetch();
	}

	/*编辑提交*/
	function editPost(){
        if ($this->request->isPost()){
            
            $data = $this->request->param();
            
			$article_name=$data['article_name'];
            $content=$data['content'];

			$id=$data['id'];

			if($article_name==""){
				$this->error("请填写文章中文名称");
			}

            if($content==""){
                $this->error("请填写内容");
            }
            
          
            $data['edittime']=time();
            unset($data['article_thumb_old']);
            
			$rs = DB::name('article')->update($data);
            if($rs===false){
                $this->error("修改失败！");
            }

            $this->resetcache();

			$action="编辑文章ID: ".$data['id'];
			setAdminLog($action);
            
            $this->success("编辑成功！");
            
		}

	}

    //获取文章编码列表
    function articlelist(){

        $json_string=file_get_contents(CMF_ROOT."/public/static/article.json");
        $articlelist = json_decode($json_string, true);
        $lists=$articlelist['data'];
        $keyword=$this->request->param("keyword");
        if($keyword){
            $newlist=[];
            foreach ($lists as $k => $v) {
                if(strpos($v['name'],$keyword)!==false){
                   $newlist[]=$v; 
                }
            }

          $lists=$newlist;  
        }
        

        $this->assign('lists',$lists);

        return $this->fetch();
    }

    // 写入信息缓存
    function resetcache(){
        $key='getArticleList';
        
        $rs=DB::name('article')
            ->field("id,article_name,content")
           ->order("list_order asc,id desc")
            ->select();
        if($rs){
            setcaches($key,$rs);
        }   
        return 1;
    }

}
