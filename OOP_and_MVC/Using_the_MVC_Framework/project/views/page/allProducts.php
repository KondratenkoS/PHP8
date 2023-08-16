<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>Название</th>
			<th>Цена</th>
			<th>Количество</th>
			<th>Описание</th>
		</tr>
		<?php foreach ($products as $product): ?>
		<tr>
			<td><?= $product['name']; ?></td>
			<td><?= $product['price']; ?></td>
			<td><?= $product['quantity']; ?></td>
			<td><?= $product['description']; ?></td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>