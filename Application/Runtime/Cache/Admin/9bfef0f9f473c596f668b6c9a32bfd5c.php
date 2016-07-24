<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分类管理</title>
    <style>
       #div1{
            width: 100%;
            height: 22px;
			padding-top:5px;
            text-align: center;
			border:1px solid grey;
        }
		#div1 div{
			padding-left:10px;
            float:left;
        }
		#div1 a{
			padding-right:20px;
            float:right;
        }
        #div3{
            width: 100%;
            border:1px solid grey;
        }
        #ip1{
            width: 250px;
            margin-top: 6px;
            height: 20px;
        }
       table{
            border: 1px solid grey;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <div id="div1">
		<div>分类列表</div>
        <a href="/index.php/Admin/Category/add">添加分类</a>
		<div style="clear:both"></div>
	</div>
    <div id="div3" align="center">
    <table border="1">
        <tr>
            <td>分类名称</td>
			<td>操作</td>
        </tr>
		<?php foreach ($data as $k=>$v): ?>
        <tr>
			<td><?php echo str_repeat('-',6*$v['level']) . $v['cat_name']; ?></td>
			<td><a href="/index.php/admin/category/edit/cat_id/<?php echo $v['cat_id'] ?>">修改</a></td>
		</tr>
		<?php endforeach; ?>
		
		</table>
    </div>
</body>
</html>