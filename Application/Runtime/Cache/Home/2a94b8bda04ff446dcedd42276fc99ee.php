<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP问题库</title>
    <style>
        #div1{
            width: 100%;
            height: 44px;
            text-align: center;
        }
		#div2{
			margin-bottom: 12px;
			text-align: center;
			padding-right:54px;
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
		/*********** 翻页 **************/
		#page-table a{padding:1px;padding-left:5px;padding-right:5px;margin:5px;border:1px solid #ccc;}
		#page-table span.current{padding-left:5px;padding-right:5px;padding-top:2px;padding-bottom:2px;background:#FF0000;margin:5px;color:#FFF;font-weight:bold;}
    </style>
</head>
<body>
	<form action="/index.php/Home/Index/index/p/10.html" method="get">
		<div id="div1">
				<input id="ip1" type="text" name="keywords" value="<?php echo $keywords;?>">
				<input id="ip2" type="submit" name="submit" value="搜索">
			<br/>
		</div>
		<div  id="div2">选择分类：
			<select name="cat_id" style="width:105px;">
				<option value="0">请选择</option>
				<?php foreach ($catData as $kk => $vv): ?>
				<option value="<?php echo $vv['cat_id']; ?>" ><?php echo str_repeat('-', 6*$vv['level']) . $vv['cat_name']; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
	</form>
    <div id="div3" align="center">
    <table border="1" id="tab1">
        <tr>
            <td>序号</td>
            <td>标题</td>
			<!--<td>操作</td>-->
        </tr>
		<?php foreach ($data as $k=>$v): ?>
        <tr>
			<td><?php echo $v['id'] ?></td>
			<td><a href="/index.php/Home/Content/content/id/<?php echo $v['id'] ?>"><?php echo $v['title'] ?></a> </td>
			<td><a href="/index.php/admin/index/edit/id/<?php echo $v['id'] ?>">修改</a></td>
		</tr>
		<?php endforeach; ?>
		<tr id="page-table">
			<td>&nbsp;</td>
			<td align="center" nowrap="true">
				<?php echo $page; ?>
			</td>
		<!--	<td>&nbsp;</td>-->
         </tr>
		</table>

    </div>
</body>
</html>

<script>
	window.onload = function () {
		var otab = document.getElementById('tab1');
		var thiscolor = '';
		for (var i = 1; i < otab.tBodies[0].rows.length; i++) {
			if(i < otab.tBodies[0].rows.length-1){
				otab.tBodies[0].rows[i].onmouseover = function () {
					thiscolor = this.style.background;
					this.style.background = '#33FF33';
				};
				otab.tBodies[0].rows[i].onmouseout = function () {
					this.style.background = thiscolor;
				};
			}
		}
	};
</script>