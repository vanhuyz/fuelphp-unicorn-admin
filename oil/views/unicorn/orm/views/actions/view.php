<div class="widget-title">
	<span class="icon"><i class="icon-list-alt"></i></span>
	<h5>Viewing #<?php echo '<?php'; ?> echo $<?php echo $singular_name; ?>->id; <?php echo '?>'; ?></h5>
</div>
<div class="control-group">

<?php foreach ($fields as $field): ?>
<p>

	<strong><?php echo \Inflector::humanize($field['name']); ?>:</strong>
	<?php echo '<?php'; ?> echo $<?php echo $singular_name.'->'.$field['name']; ?>; <?php echo '?>'; ?>
</p>
<?php endforeach; ?>
</div>
<div class="form-actions">
<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri ?>/edit/'.$<?php echo $singular_name; ?>->id, '編集',array("class" => 'btn btn-primary')); <?php echo '?>'; ?> 
<?php echo '<?php'; ?> echo Html::anchor('<?php echo $uri; ?>   ', '戻る', array("class" => 'btn btn-warning')); <?php echo '?>'; ?>
</div>