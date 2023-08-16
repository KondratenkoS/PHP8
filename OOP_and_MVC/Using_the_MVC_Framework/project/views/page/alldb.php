<h1><?= $h1; ?></h1>
<div id="content">
	<table>
		<tr>
			<th>id</th>
			<th>title</th>
			<th>ссылка</th>
		</tr>
		<?php foreach ($pages as $page): ?>
		<tr>
			<td><?= $page['id']; ?></td>
			<td><?= $page['title']; ?></td>
			<td><a href="/page/<?= $page['id']; ?>/">ссылка на страницу</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>