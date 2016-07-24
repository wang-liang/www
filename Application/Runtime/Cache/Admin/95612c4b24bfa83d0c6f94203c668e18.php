<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>分类管理</title>
    <style>
	</style>
</head>
<body>
<div>
    <form name="main_form" method="POST" action="/index.php/Admin/Category/add">
        <table width="100%">
            <tr>
                <td align="center" style="padding-right:75px;">顶级分类：
                    <select name="parent_id">
                        <option value="0">顶级分类</option>
                        <?php foreach ($catData as $k => $v): ?>
                        <option value="<?php echo $v['cat_id']; ?>"><?php echo str_repeat('-',6*$v['level']) . $v['cat_name']; ?></option>
                    <?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding-right:20px;">分类名称：
                    <input  type="text" name="cat_name" value="" />
                </td>
            </tr>
            
            <tr>
                <td colspan="99" align="center">
                    <input type="submit" class="button" value=" 确定 " />
                    <input type="reset" class="button" value=" 重置 " />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>