<div id="container">
	<h1>信息展示</h1>
	<ul>
		<?php foreach($detail as $item): ?>
			<li><?php echo $item->name; ?><button onclick="">删除</button></li>
		<?php endforeach; ?>
	</ul>
</div>
