<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="/Public/Admin/lib/html5.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/respond.min.js"></script>
<script type="text/javascript" src="/Public/Admin/lib/PIE_IE678.js"></script>
<![endif]-->
<link href="/Public/Admin/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/css/style.css" rel="stylesheet" type="text/css" />
<link href="/Public/Admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link href="/Public/Admin/lib/lightbox2/2.8.1/css/lightbox.css" rel="stylesheet" type="text/css" >
<title>图片展示</title>
</head>
<body>
<nav class="breadcrumb"><i class="Hui-iconfont">&#xe67f;</i> 首页 <span class="c-gray en">&gt;</span> 图片管理 <span class="c-gray en">&gt;</span> 图片展示 <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a></nav>
<div class="pd-20">
	<div class="cl pd-5 bg-1 bk-gray mt-20"> <span class="l"> <a href="javascript:;" onclick="edit()" class="btn btn-primary radius"><i class="Hui-iconfont">&#xe6df;</i> 编辑</a> <a href="javascript:;" onclick="datadel()" class="btn btn-danger radius"><i class="Hui-iconfont">&#xe6e2;</i> 批量删除</a> </span> <span class="r">共有数据：<strong>54</strong> 条</span> </div>
	<div class="portfolio-content">
		<ul class="cl portfolio-area">
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="客厅1"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">客厅 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox "><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="客厅2"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">客厅 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="客厅3"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">客厅 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="客厅4"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">客厅 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="厨房"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">厨房 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="书房"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">书房 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="卧室"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">卧室 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="卫生间1"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">卫生间1 </div>
				</div>
			</li>
			<li class="item">
				<div class="portfoliobox">
					<input class="checkbox" name="" type="checkbox" value="">
					<div class="picbox"><a href="/Public/admin/images/page3_img1.jpg" data-lightbox="gallery" data-title="卫生间2"><img src="/Public/admin/images/page3_img1.jpg"></a></div>
					<div class="textbox">卫生间2 </div>
				</div>
			</li>
		</ul>
	</div>
</div>
<script type="text/javascript" src="/Public/Admin/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/layer/1.9.3/layer.js"></script> 
<script type="text/javascript" src="/Public/Admin/lib/lightbox2/2.8.1/js/lightbox-plus-jquery.min.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/H-ui.js"></script> 
<script type="text/javascript" src="/Public/Admin/js/H-ui.admin.js"></script> 
<script type="text/javascript">
$(function(){
	$.Huihover(".portfolio-area li");
});
</script>
</body>
</html>