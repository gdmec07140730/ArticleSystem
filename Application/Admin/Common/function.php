<?php
/**
 * @Author: Administrator
 * @Date:   2016-04-26 14:49:01
 * @Last Modified by:   Administrator
 * @Last Modified time: 2016-04-26 19:04:50
 */
function gettime($str){
	$date=date('Y-m-d H:i:s',$str);
	return $date;
}

// function getviews($count){
// 	$count=$count + 1;
// 	return $count;
// }

function getcategory($cid){
	$where['id']=$cid;
	$res=M('category')->where($where)->find();
	return $res['name'];
	// 这里没错
}

function golist(){
	$this->redirect('Article\getlist','date(now)');
}
?>