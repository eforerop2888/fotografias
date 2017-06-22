<div class="menu_f">
	<div class="logout_content">
	  <img class="user_menu" src="<?php echo $base_url . '/' . $imagenes ?>/images/user_menu.png">
	</div>
	<ul class="menu_ul">
	  <li class="user_name"><?php echo strtoupper($user_name); ?></li>
	  <!--<li>
	  	<a href="<?php echo $base_url; ?>">MIS GALERÍAS</a>
	  </li>-->
	  <li>
	  	<a href="<?php echo $base_url; ?>">EVENTOS</a>
	  </li>
	  <li>
	  	<a href="<?php echo $base_url; ?>/galerias/todas">MIS FOTOS</a>
	  </li>
	  <li>
	  	<a href="<?php echo $base_url; ?>/galerias/favoritos">MIS FAVORITOS</a>
	  </li>
	  <!--<li>
	  	<a href="<?php //echo $base_url; ?>/nube-tags">EVENTOS</a>
	  </li>-->
	  <li>
	  	<a href="<?php echo $base_url; ?>/contacto">CONTACTO</a>
	  </li>
	  <li>
	    <a href="<?php echo $base_url; ?>/user/logout">CERRAR SESIÓN</a>
	  </li>
	</ul>
	</div>
</div>