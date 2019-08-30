
<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(rec/images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Registro
				</span>
			</div>
			<?php echo form_open_multipart('formulario_controller/registro',array('class'=>'login100-form'));?>
			<div class="wrap-input100 m-b-10">
				<span class="label-input100">Usuario:</span>
				<?=form_input(array('type'=>'text','name'=>'user','id'=>'user','placeholder' => 'Introduzca su usuario','class'=>'input100','value'=>set_value('user')))?>
				<?php echo form_error('user'); ?>
			</div>

			<div class="wrap-input100 m-b-10">
				<span class="label-input100">Nombre:</span>
				<?=form_input(array('type'=>'text','name'=>'name','id'=>'name','placeholder' => 'Introduzca su nombre','class'=>'input100','value'=>set_value('name')))?>
				<?php echo form_error('name'); ?>
			</div>

			<div class="wrap-input100 m-b-10">
				<span class="label-input100">Contraseña:</span>						 
				<?=form_input(array('type'=>'password','name'=>'pass','id'=>'pass','placeholder' => 'Introduzca su contraseña','class'=>'input100','value'=>set_value('pass')))?>
				 <?php echo form_error('pass'); ?>
			</div>

			<div class="wrap-input100 m-b-10">
				<span class="label-input100">Confirme contraseña:</span>						 
				<?=form_input(array('type'=>'password','name'=>'rpass','id'=>'rpass','placeholder' => 'Confirme su contraseña','class'=>'input100','value'=>set_value('rpass')))?>
				<?php echo form_error('rpass'); ?>
			</div>

			<div class="wrap-input100 m-b-10">
				<span class="label-input100">Email:</span>						 
				<?=form_input(array('type'=>'email','name'=>'email','id'=>'email','placeholder' => 'Introduzca su email','class'=>'input100','value'=>set_value('email')))?>
				<?php echo form_error('email'); ?>
			</div>

			<div class="flex-sb-m w-full p-b-10">
			</div>
		<!--<?=validation_errors('<div class="errors">','</div>'); ?>-->
			<div class="container-login100-form-btn">
				<button class="login100-form-btn">
					Entrar
				</button>
			</div>
		</form>
			<?=form_close()?>
		</div>
	</div>
</div>
<!--
<?php
$msj = (isset($msj)) ? $msj:validation_errors();
if (strlen($msj) > 0 )
	echo "<div class='alert alert-info'><h1 class='text-center'> <a href='".site_url("formulario_controller")."'>Atras</a> $msj  </h1></div>";

?>
-->

