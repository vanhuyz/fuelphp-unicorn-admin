<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Unicorn Admin</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php echo Asset::css('unicorn/bootstrap.min.css');?>
		<?php echo Asset::css('unicorn/bootstrap-responsive.min.css');?>
		<?php echo Asset::css('unicorn/unicorn.login.css');?>
		<?php echo Asset::css('unicorn/login.css');?>

	</head>
	<body>
		<div id="logo">
			<?php echo "Unicorn Admin";?>
		</div>
		<div id="loginbox">            
			<div id="loginform" class="form-vertical">
				<?php echo Form::open(array()); ?>

				<p>メールアドレスとパスワードを入力して下さい。</p>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-user"></i></span>	<?php echo Form::input('email', Input::post('email'), array('class' => 'form-control', 'placeholder' => 'メールアドレス', 'autofocus')); ?>
							<?php if ($val->error('email')): ?>
							<span class="control-label"><?php echo $val->error('email')->get_message('You must provide a username or email'); ?></span>
				<?php endif; ?>
						</div>
					</div>
				</div>
				<div class="control-group">
					<div class="controls">
						<div class="input-prepend">
							<span class="add-on"><i class="icon-lock"></i></span><?php echo Form::password('password', null, array('class' => 'form-control', 'placeholder' => 'パスワード')); ?>
						</div>
					</div>
				</div>
				<div class="form-actions">
					<span class="pull-right"><?php echo Form::submit(array('value'=>'ログイン', 'name'=>'submit', 'class' => 'btn btn-inverse')); ?>
</span>
				</div>
				<?php echo Form::close(); ?>

			</div>
		</div>
		<?php echo Asset::js("unicorn/jquery.min.js");?>
		<?php echo Asset::js("unicorn/unicorn.login.js");?>
	
	</body>
</html>
