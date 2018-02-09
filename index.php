<?php
	$info = file_get_contents (__DIR__ . '/info.json');
	$phone_book = json_decode ($info, true);
//	echo ($phone_book);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
</head>
<body>
	<table>
<tr>
			<td>Имя</td>
			<td>Фамилия</td>
			<td>Адрес</td>
			<td></td>
			<td></td>
			<td>Телефон</td>
			<td></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td>Город</td>
			<td>Улица</td>
			<td>Дом</td>
		</tr>
			<?php 
	foreach ($phone_book as $number): ?>
		<tr>
					<td><?php echo $number['firstName'];?></td>
					<td><?php echo $number['lastName'];?></td>
					<td><?php echo $number['address']['city'];?></td>
					<td><?php echo $number['address']['street'];?></td>
					<td><?php echo $number['address']['building'];?></td>
					<td><?php echo $number['phoneNumber'];?></td>
				</tr>
		<?php endforeach; ?>
	</table>
</body>
</html>