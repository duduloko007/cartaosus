<div class="container">
	<div class="row">
		<h1>Login</h1>
		<?php if(!empty($erro)):?>
				<div class="alert alert-danger"><?php echo $erro?></div>
		<?php endif;?>
		<form method="post">
			<div class="form-group">
			<label>Email</label>
			<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
			<label>Senha</label>
			<input type="password" name="senha" class="form-control">
			</div>
			<div class="form-group">
			<input type="submit" value="Entrar" class="btn btn-secondary">
			</div>
		</form>
	</div>
</div>