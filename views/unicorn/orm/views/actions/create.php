<div class="widget-title">
     <span class="icon"><i class="icon-list-alt"></i></span>
     <h5>New <?php echo \Str::ucfirst($singular_name); ?></h5>
</div>

<div class="widget-content nopadding">
<?php echo '<?php'; ?> echo render('<?php echo $view_path; ?>/_form'); ?>
</div>