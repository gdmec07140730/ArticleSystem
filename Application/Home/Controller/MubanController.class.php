<?php
namespace Home\Controller;
use Think\Controller;
class MubanController extends Controller {
    public function index(){
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
        $categoryname=M('category')->where($data)->find();
        $this->assign('categoryname',$categoryname);
        $this->display();
    }

    public function details(){
        $where['id']=I('get.id');
        $detailsMess=M('article')->where($where)->find();
        $detailsMess['views'] += 1;
        $save=M('article')->where($where)->save($detailsMess);
        // var_dump($detailsMess);
        // die();
         
        $categorylist=M('category')->select();
        $this->assign('categorylist',$categorylist);

        $data['id']=$detailsMess['cid'];
        $categoryname=M('category')->where($data)->find();
        $this->assign('categoryname',$categoryname);
        
        $this->assign('detailsMess',$detailsMess);
        $this->display();
    }
}