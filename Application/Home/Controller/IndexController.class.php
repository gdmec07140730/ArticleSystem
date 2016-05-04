<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$categorylist=M('category')->select();
    	$this->assign('categorylist',$categorylist);

    	$articlelist=M('article')->select();
    	$this->assign('articlelist',$articlelist);

        $this->display();
    }

    
    public function lists(){
    	$data['id']=I('get.id');
    	if ($data['id']==0) {
    		$articlelist=M('article')->select();
    	} else {
    		$where['cid']=I('get.id');
    		$articlelist=M('article')->where($where)->select();
    	}
    	$categorylist=M('category')->select();
    	$this->assign('categorylist',$categorylist);
    	
    	$this->assign('articlelist',$articlelist);
    	$this->display();
    }

    public function details(){
    	$where['id']=I('get.id');
		$detailsMess=M('article')->where($where)->find();
		$detailsMess['views'] += 1;
		$save=M('article')->where($where)->save($detailsMess);
		// var_dump($detailsMess);
		// die();
		// 
		$categorylist=M('category')->select();
    	$this->assign('categorylist',$categorylist);
    	
		$this->assign('detailsMess',$detailsMess);
		$this->display();
    }
}