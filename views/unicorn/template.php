<!DOCTYPE html>
<html>
<head>
	
		<meta charset="utf-8">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php echo Asset::css("unicorn/jquery-ui.css"); ?>
		<?php echo Asset::css("unicorn/bootstrap.min.css"); ?>
		<?php echo Asset::css("unicorn/bootstrap-responsive.min.css"); ?>
		<?php echo Asset::css("unicorn/unicorn.main.css"); ?>
		<?php echo Asset::css("unicorn/unicorn.grey.css"); ?>
		<?php echo Asset::css("unicorn/uniform.css"); ?>
		<?php echo Asset::css("unicorn/select2.css"); ?>
		
		<link rel="stylesheet" href="http://cdn.datatables.net/1.10.1/css/jquery.dataTables.css" />

	
</head>
<body>
		<div id="header">
			<h1><a href="./dashboard.html">Admin</a></h1>
			
		</div>
		<div id="user-nav" class="navbar navbar-inverse">
			<ul class="nav btn-group">
				<li class="btn btn-inverse"><?php echo Html::anchor("admin/logout", '<i class="icon icon-share-alt"></i><span class="text">ログアウト</span>'); ?></li>
			</ul>
		</div>
			
		<div id="sidebar">
			<a href="#" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
			<ul id="ul_sidebar">
				<li><?php echo Html::anchor("admin", '<i class="icon icon-home"></i><span>ダッシュボード</span>'); ?></li>

				<?php
				$files = new GlobIterator(APPPATH.'classes/controller/admin/*.php');
						foreach($files as $file)
						{
							$section_segment = $file->getBasename('.php');
							$section_title = Inflector::humanize($section_segment);
							?>
							<li class="<?php echo Uri::segment(2) == $section_segment ? 'active' : '' ?>">
								<?php echo Html::anchor('admin/'.$section_segment,'<i class="icon icon-th"></i>'. $section_title) ?>
							</li>
							<?php
						}
				
				?>
			</ul>

		</div>
	
	<div id="content">
			
			<div id="content-header">
				<h1><?php echo $title;?></h1>
				<div class="col-md-12">
<?php if (Session::get_flash('success')): ?>
				<div class="alert alert-success alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('success')); ?>
					</p>
				</div>
<?php endif; ?>
<?php if (Session::get_flash('error')): ?>
				<div class="alert alert-error alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<p>
					<?php echo implode('</p><p>', (array) Session::get_flash('error')); ?>
					</p>
				</div>
<?php endif; ?>
			</div>
			</div>

			<div class="container-fluid">				
				<div class="row-fluid">
					<div class="widget-box">
						<?php echo $content; ?>
					</div>

				</div>
				<div class="row-fluid">

					<div id="footer" class="span12">
						2012 - 2014 &copy;  <a href="http://www.glpgs.com">Galapagos Inc</a>
					</div>
				</div>
			</div>
		</div>
	
	<?php echo Asset::js("unicorn/jquery.min.js"); ?>
		<?php echo Asset::js("unicorn/jquery-ui.custom.js"); ?>

		<script type="text/javascript" charset="utf-8" src="//cdn.datatables.net/1.10.1/js/jquery.dataTables.js"></script>

		<?php echo Asset::js("unicorn/bootstrap.min.js"); ?>
		
		<?php echo Asset::js("unicorn/jquery.uniform.js"); ?>
		<?php echo Asset::js("unicorn/select2.min.js"); ?>

		<?php echo Asset::js("unicorn/unicorn.js"); ?>		
		<?php echo Asset::js("unicorn/unicorn.tables.js"); ?>
		
</body>
</html>
