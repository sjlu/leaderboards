<div class="container">
	<h1>Leaderboards</h1>
	<table class="table table-striped">
		<thead>
			<tr>
				<td>Rank</td>
				<td>Name</td>
				<td>Points</td>
			</tr>
		</thead>
		<tbody>
			<?php for ($i = 0; $i < count($leaders); $i++): ?>
				<tr>
					<td><?php echo $i+1; ?></td>
					<td><?php echo $leaders[$i]['name']; ?></td>
					<td><?php echo $leaders[$i]['points']; ?></td>
				</tr>
			<?php endfor; ?>
		</tbody>
	</table>
</div>
