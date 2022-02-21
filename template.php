<?php require_once 'mysqli.php'; ?>
<html>
<head>
	<title>
		<?php echo $title; ?>
	</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="styles.css">
</head>
<body>
	<div class="content">
		<div class="top">
			<h1>Добро пожаловать!</h1>
		</div>
		<div class="main">
			<?php
				$result = mysqli_query($connect,"SELECT * FROM `article`");
			?>
		<table>
			<?php
	while($data = mysqli_fetch_array($result,MYSQLI_ASSOC)){ 
			?>
			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['name']?></td>
				<td><?=$data['text']?></td>
				<td><?=$data['date']?></td>
				<td><?=$data['categoria']?></td>
			</tr>
		<?php }
			//	echo ; Не дает загрузить страницуЫ 
		?>
		</table>
		</div>
		<div class="footer">
			
		</div>
	</div>
</body>
</html>