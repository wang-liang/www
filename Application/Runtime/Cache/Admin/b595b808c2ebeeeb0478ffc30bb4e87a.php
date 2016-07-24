<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>问题录入</title>
    <script type="text/javascript" src='/Public/Admin/js/ueditor.config.js' ></script>
    <script type="text/javascript" src='/Public/Admin/js/ueditor.all.min.js' ></script>
    <script type="text/javascript" src='/Public/Admin/js/zh-cn.js' ></script>
	<script charset="utf-8" src="/Public/Admin/js/editor/kindeditor-min.js"></script>
	<script charset="utf-8" src="/Public/Admin/js/editor/lang/zh_CN.js"></script>
	<script>
	//加入在线编辑器
	var editor;
	KindEditor.ready(function(K) {
	  editor = K.create('textarea[name="content"]', {
		allowFileManager : true
	  });
	});
	</script>
</head>
<body >
    <form action="/index.php/Admin/Index/index.html" method="post">
        <div>标题：<input type="text" name="title" style="width: 500px"></div>
		<div style="margin-top:5px;">分类：<select name="cat_id">
					<option value="">请选择</option>
					<?php foreach ($data as $k => $v): ?>
					<option value="<?php echo $v['cat_id']; ?>"><?php echo str_repeat('-', 6*$v['level']) . $v['cat_name']; ?></option>
					<?php endforeach; ?>
				</select></div>
        <div style="margin-top:5px;">内容：</div>
        <div>
			<!--<textarea rows="10" cols="50" id="answer" name="answer" style='width:550px;height:260px;'></textarea> -->
			<textarea name="content" rows="10" cols="50" style="width:700px;height:260px;visibility:hidden;"></textarea></div>
        <br/>
        <input type="submit" name="submit" value="提交">
    </form>
</body>

<script type="text/javascript">
    /* var ue = UE.getEditor('answer',{toolbars: [[
        'fullscreen', 'source', '|', 'undo', 'redo', '|',
        'bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
        'rowspacingtop', 'rowspacingbottom', 'lineheight', '|',
        'customstyle', 'paragraph', 'fontfamily', 'fontsize', '|',
        'directionalityltr', 'directionalityrtl', 'indent', '|',
        'justifyleft', 'justifycenter', 'justifyright', 'justifyjustify', '|', 'touppercase', 'tolowercase', '|',
        'link', 'unlink', 'anchor', '|', 'imagenone', 'imageleft', 'imageright', 'imagecenter', '|',
        'simpleupload', 'insertimage'
    ]]});*/
</script>

</html>