<div class="limiter">
	<div class="container-login100">
		<div class="wrap-login100">
			<div class="login100-form-title" style="background-image: url(rec/images/bg-01.jpg);">
				<span class="login100-form-title-1">
					Login
				</span>
			</div>
			<?php echo form_open('formulario_controller/login',array('class'=>'login100-form'));?>
			<div class="wrap-input100 m-b-26">
				<span class="label-input100">Usuario:</span>
				<?=form_input(array('type'=>'text','name'=>'user','id'=>'user','placeholder' => 'Introduzca su usuario','class'=>'input100','value'=>set_value('user')))?>
			</div>
			<div class="wrap-input100 m-b-18">
				<span class="label-input100">Contraseña:</span>						 
				<?=form_input(array('type'=>'password','name'=>'pass','id'=>'id','placeholder' => 'Introduzca su contraseña','class'=>'input100','value'=>set_value('pass')))?>
			</div>
			<div class="LoginPassError">
				<?php
				if(isset($error)){
					echo "<p>".$error."</p>";
				}
				echo form_error('pass');
				?>
			</div>
			<div class="flex-sb-m w-full p-b-30">

				<div>
					<a href="#" class="txt1">
						¿Se te olvido tu contraseña?
					</a>
				</div>
			</div>
			<div class="container-login100-form-btn">
				<button class="login100-form-btn">
					Entrar
				</button>
			</div>
			<?=form_close()?>
		</div>
	</div>
</div>