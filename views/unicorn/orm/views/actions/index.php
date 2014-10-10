<div class="widget-title">
	<span class="icon"><i class="icon-list-alt"></i></span>
	<h5>Listing <?php echo \Str::ucfirst($plural_name); ?></h5>
	<div class="buttons">
		<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/create', '<i class="icon-plus icon-white"></i>Add new <?php echo \Inflector::humanize($singular_name); ?>', array('class' => 'btn btn-mini btn-success')); <?php echo '?>'; ?>
	</div>

</div>

<?php echo "<?php if (\${$plural_name}): ?>"; ?>

<table class="table table-bordered table-striped">
	<thead>
		<tr>
<?php foreach ($fields as $field): ?>
			<th><?php echo \Inflector::humanize($field['name']); ?></th>
<?php endforeach; ?>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php echo '<?php'; ?> foreach ($<?php echo $plural_name; ?> as $item): <?php echo '?>'; ?>
		<tr>

<?php foreach ($fields as $field): ?>
			<td><?php echo '<?php'; ?> echo $item<?php echo '->'.$field['name']; ?>; <?php echo '?>'; ?></td>
<?php endforeach; ?>
			<td>
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/view/'.$item->id, '詳細',array('class' => 'btn btn-small btn-primary')); <?php echo '?>'; ?> 
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/edit/'.$item->id, '編集',array('class' => 'btn btn-small btn-warning')); <?php echo '?>'; ?> 
				<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>/delete/'.$item->id, '削除', array('onclick' => "return confirm('Are you sure?')",'class' => 'btn btn-small btn-danger')); <?php echo '?>'; ?>


			</td>
		</tr>
<?php echo '<?php endforeach; ?>'; ?>
	</tbody>
</table>

<?php echo '<?php else: ?>'; ?>

<p>No <?php echo \Str::ucfirst($plural_name); ?>.</p>

<?php echo '<?php endif; ?>'; ?>
