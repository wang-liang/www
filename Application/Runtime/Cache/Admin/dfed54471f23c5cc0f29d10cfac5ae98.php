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
    <form name="main_form" method="POST" action="/index.php/admin/category/edit/cat_id/15">
        <table width="100%">
			<input type="hidden" name="cat_id" value="<?php echo $data['cat_id'];?>">
            <tr>
                <td align="center" style="padding-right:75px;">顶级分类：
                    <select name="parent_id">
                        <option value="0">顶级分类</option>
						<?php foreach ($catData as $k => $v): if($v['cat_id'] == $data['cat_id'] || in_array($v['cat_id'],$children)) continue; if($v['cat_id'] == $data['parent_id']) $select = 'selected="selected"'; else $select = ''; ?>
                        <option <?php echo $select; ?> value="<?php echo $v['cat_id']; ?>"><?php echo str_repeat('-',6*$v['level']) . $v['cat_name']; ?></option>
						<?php endforeach; ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td align="center" style="padding-right:20px;">分类名称：
                    <input  type="text" name="cat_name" value="<?php echo $data['cat_name'];?>" />
                </td>
            </tr>
            
            <tr>
                <td align="center">
                    <input type="submit" class="button" value=" 确定 " />
                    <input type="reset" class="button" value=" 重置 " />
                </td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>