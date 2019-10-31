<div id="container">
	<h1><?php echo $content; ?></h1>
	<ul>
		<?php foreach($todo_list as $item): ?>
			<li><?php echo $item; ?></li>
		<?php endforeach; ?>
	</ul>
</div>
