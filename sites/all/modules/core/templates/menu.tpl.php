<div class="menu_f">
	<div class="logout_content">
	  <img class="user_menu" src="<?php echo $base_url . '/' . $imagenes ?>/images/user_menu.png">
	</div>
	<ul class="menu_ul">
	  <li class="user_name"><?php echo $user_name; ?></li>
	  <li>
	  	<a href="<?php echo $base_url; ?>">Mis Galerías</a>
	  </li>
	  <li>
	  	<a href="<?php echo $base_url; ?>/galerias/todas">Mis Fotos</a>
	  </li>
	  <li>
	  	<a href="<?php echo $base_url; ?>/galerias/favoritos">Mis Favoritos</a>
	  </li>
	  <li>
	  	<a href="<?php echo $base_url; ?>/nube-tags">Tags</a>
	  </li>
	  <li>
	    <a href="<?php echo $base_url; ?>/user/logout">Cerrar Sesión</a>
	  </li>
	</ul>
	</div>
</div>