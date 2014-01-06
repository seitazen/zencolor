<!DOCTYPE HTML>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->

    <link rel="stylesheet" href="<?php $this->options->themeUrl('normalize.css'); ?>">
    <link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>">
    <!--Roboto字体，如果你觉得我的七牛会挂掉可以换成自己的-->
    <link href='http://seita.u.qiniudn.com/static/css/Roboto.css' rel='stylesheet' type='text/css'>

    <!--[if lt IE 9]>
    <script src="<?php $this->options->adminUrl('js/html5shiv.js'); ?>"></script>
    <script src="<?php $this->options->adminUrl('js/respond.js'); ?>"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header('generator=&template=&pingback=&xmlrpc=&wlw=&commentReply='); ?>
</head>
<body class="home-template">
<!--[if lt IE 8]>
    <div class="browsehappy"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->


    <header class="header">
    <div class="container clearfix">
 <h1 class="site-title"><a href="<?php $this->options->siteUrl(); ?>"><?php $this->options->title() ?></a></h1>
            <h2 class="site-description"><?php $this->options->description() ?></h1>

            <span class="icon-menu">

            	<!--你的关于页面地址-->
                <a href="/about">&#xf14b;</a>
                <!--Typecho后台设置以下信息-->
                <a href="<?php $this->options->twitter() ?>" target="_blank">&#xf081;</a>
                <a href="<?php $this->options->github() ?>" target="_blank">&#xf092;</a>
                <a href="<?php $this->options->feed() ?>" target="_blank">&#xf143;</a>
            </span>
        </div>
    </header>


        
 
       

    
    