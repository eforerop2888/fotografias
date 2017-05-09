<div class="menu_f">
	<div class="logout_content">
	  <img class="user_menu" src="<?php echo $base_url . '/' . $imagenes ?>/images/user_menu.png">
	</div>
	<ul class="menu_ul">
	  <li class="user_name"><?php echo $user_name; ?></li>
	  <a href="<?php echo $base_url; ?>">
	    <li>Mis Galerías</li>
	  </a>
	  <a href="<?php echo $base_url; ?>/galerias/todas">
	    <li>Mis Fotos</li>
	  </a>
	  <a href="<?php echo $base_url; ?>/galerias/favoritos">
	    <li>Mis Favoritos</li>
	  </a>
	  <a href="<?php echo $base_url; ?>/user/logout">
	    <li>Cerrar Sesión</li>
	  </a>
	</ul>
	</div>
</div>