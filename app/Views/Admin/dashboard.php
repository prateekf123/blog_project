<?php  include('header.php')   ?>
<?php print_r($articles) ?>
<div class="container" style="margin-top: 50px">

	<div class="table">

		<table>
			<thead>
				<tr>
				<th>ID</th>
				<th>Article title</th>
				<th>Edit</th>
				<th>Delete</th>
				</tr>
			</thead>
			<tbody>

				<?php foreach ($articles as $key) { ?>
				<tr>
					<td><?= $key["id"]; ?></td>
					<td><?= $key["article_title"]; ?></td>
					<td>
						<?= 
					form_open('admin/editarticle'),
					form_hidden('id', $key["id"]),
					form_submit(['name' =>'edit_delete','value' => 'edit','class' => 'btn btn-success']),
					form_close();

					 ?>
					</td>
					<td>
						<?= 
					form_open('admin/delarticle'),
					form_hidden('id', $key["id"]),
					form_submit(['name' =>'art_delete','value' => 'delete','class' => 'btn btn-danger']),
					form_close();

					 ?>
					</td>
				</tr>
			<?php } ?>

			</tbody>

		</table>
		

	</div>
	
</div>



<?php   include('footer.php') ?>
