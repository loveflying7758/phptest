<!doctype html>
<html>

<body>
	<?php
	$favcolor = "blue";
	switch ( $favcolor ) {
		case "red":
			echo "你喜欢的颜色是红色!";
			break;
		case "blue":
			echo "你喜欢的颜色是蓝色!";
			break;
		case "green":
			echo "你喜欢的颜色是绿色!";
			break;
		default:
			echo "你喜欢的颜色不是红, 蓝, 或绿色!";
	}
	?>
</body>
</html>