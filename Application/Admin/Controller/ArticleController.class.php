<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends BaseController {
    public function getlist(){
        $linkList=M('article')->select();
		$this->assign('linkList',$linkList);
		$this->display();
    }

    public function add(){
        if (IS_POST) {
			$Mess['id']=I('post.id');
			$Mess['title']=I('post.title');
			$Mess['author']=I('post.author');
			$Mess['content']=I('post.content');
			$Mess['cid']=I('post.cid');
			$now=time();
			$Mess['publishtime']=time();
			$Mess['updatetime']=time();
			// die();
			$addmess=M('article')->add($Mess);
			// dump($addmess);
			// die();
			if ($addmess) {
				$this->success('添加成功！',U('getlist','date(now)'));
			} else {
				$this->error('添加失败！');
			}
			
		} else {
			$categorylist=M('category')->select();
			//dump($categorylist);
			//die;
			$this->assign('categorylist',$categorylist);
			$this->display();
		}
    }

    public function edit(){
		if (IS_POST) {
    		$where['id']=I('get.id');
    		$mess=$_POST;
    		$mess['updatetime']=time();
    		$saveMess=M('article')->where($where)->save($mess);
    		// var_dump($saveMess);
    		// die();
    		if ($saveMess) {
    			$this->success('修改成功！',U('getlist','date(now)'));
    		} else {
    			$this->error('内容不变，修改失败！');
    		}
    	} else {
    		$where['id']=I('get.id');
    		$updatemess=M('article')->where($where)->find();
    		// var_dump($updatemess);
    		// die();
    		if ($updatemess) {
    			$categorylist=M('category')->select();
				$this->assign('categorylist',$categorylist);

    			$this->assign('updatemess',$updatemess);
    			$this->display();
    		} else {
    			$this->error('不存在该记录');  
    		}		
    	}
	}

	public function del(){
		$where['id']=I('get.id');
		$delMess=M('article')->where($where)->delete();
		if ($delMess) {
			$this->success('删除成功！',U('getlist','date(now)'));
		} else {
			$this->error('删除失败！');
		}
		
	}
}