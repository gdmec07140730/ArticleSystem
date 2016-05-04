<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>文章管理系统</title>
        <style type="text/css">
			#head{
				height: 100px;
				background-color: green;
			}

			#body{
				background-color: white;
			}
			
			#sidebar{
				width: 30%;
				background-color: yellow;
				float:left;
			}
			
			#content{
				width: 70%;
				background-color: white;
				float:right;
			}

			#foot{
				height: 100px;
				background-color: green;
			}
        </style>
    </head>
<body>
    <div id="head">
    	<button><a href="<?php echo U('Admin/Public/login');?>">登陆</a>
    	</button>
    </div>
<div id="body">
    	<div id="sidebar" >
    		<ul>
    			<li><a href="<?php echo U('lists',array('id'=>0));?>">全部</a></li>
    			<?php if(is_array($categorylist)): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('lists',array('id'=>$vo['id']));?>"><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
    		</ul>
    	</div>


	<div id="content">
		<ul>
			<?php if(is_array($articlelist)): $i = 0; $__LIST__ = $articlelist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('details',array('id'=>$vo['id']));?>"><?php echo $vo['title'];?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
	</div>

<div id="foot"></div>
</body>
</html>