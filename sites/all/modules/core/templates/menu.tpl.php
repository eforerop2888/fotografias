<div class="menu_f">
	<div class="logout_content">
	  <img src="<?php echo $base_url . '/' . $imagenes ?>/images/logout.png" width="20px">
	</div>
	<ul class="menu_ul">
	  <li><?php echo $user_name; ?></li>
	  <a href="<?php echo $base_url; ?>">
	    <li>Inicio</li>
	  </a>
	  <a href="<?php echo $base_url; ?>/user/logout">
		<li>Cerrar Sesión</li>
	  </a>
	</ul>
	</div>
</div>