<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PHP问题详解</title>
</head>
<body>
	<?php foreach ($data as $k=>$v): ?>
	<span style='color: red;font-weight: bold;font-size: 23px '>问题:</span>
	<span style='color: red;font-weight: bold;font-size: 23px '><?php echo $v['title']?></span>
	<p><?php echo $v['content']?></p><p><br/></p>
	<?php endforeach; ?>
</body>
</html>