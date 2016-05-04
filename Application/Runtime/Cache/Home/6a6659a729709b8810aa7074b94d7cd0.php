<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>文章管理系统</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="/ArticleSystem/Public/Home/css/normalize.css">
        <link rel="stylesheet" href="/ArticleSystem/Public/Home/css/font-awesome.css">
        <link rel="stylesheet" href="/ArticleSystem/Public/Home/css/bootstrap.min.css">
        <link rel="stylesheet" href="/ArticleSystem/Public/Home/css/templatemo-style.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>    
		
        <!-- SIDEBAR -->
        <div class="sidebar-menu hidden-xs hidden-sm">
            
            <div class="main-navigation">
                <ul class="navigation">
                    <li><a href="<?php echo U('index',array('id'=>0));?>"><i class="fa fa-envelope"></i>全部</a></li>
                    <?php if(is_array($categorylist)): $i = 0; $__LIST__ = $categorylist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('index',array('id'=>$vo['id']));?>"><i class="fa fa-paperclip"></i><?php echo ($vo['name']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div> <!-- .main-navigation -->
            <div class="social-icons">
                <ul>
                    <li><button><a href="<?php echo U('Admin/Public/login');?>">登陆</a></button></li>
                    <li><button><a href="#">注册</a></button></li>
                </ul>
            </div> <!-- .social-icons -->
        </div> <!-- .sidebar-menu -->
        

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="fluid-container">

                <div class="content-wrapper">
                
                    <!-- ABOUT -->
                    <div class="page-section" id="about">
                    <div class="row">
                        <div class="col-md-12">
                        <h4 class="widget-title"><a href="<?php echo U('index',array('id'=>$vo['id']));?>"><?php echo $categoryname['name'] ;?></a>/文章详情/<?php echo $detailsMess['title'] ;?></h4>
                        <h4 style="text-align:right;">作者：<?php echo $detailsMess['author'] ;?>&nbsp;&nbsp;&nbsp;访问量：<?php echo $detailsMess['views'] ;?></h4>
                        <br>
                            <div class="about-image">
                                <img src="/ArticleSystem/Public/Home/img/8.jpg" alt="about me">
                            </div>
                            <p><?php echo $detailsMess['content'] ;?></p>
                        </div>
                    </div> <!-- #about -->
                    </div>
                </div>

            </div>
        </div>

        <script src="js/vendor/jquery-1.10.2.min.js"></script>
        <script src="js/min/plugins.min.js"></script>
        <script src="js/min/main.min.js"></script>

    </body>
</html>