<!DOCTYPE html>
<html>
<head>

	<!-- boostrap -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


	<title>Retro Car 2019M</title>
	<?php wp_head(); ?>
</head>
<body>
	<header class="header">
				
			<div class='container'>
				<div class="header__body">
					<a href="<?php bloginfo(url);?>" class="header__logo"	  >
					<?php bloginfo('name'); ?>
					</a>
					<div class="header__burger">
						<span></span>
					</div>
					<nav class="header__menu">
		
									<ul class="header__list">
															<?php wp_nav_menu( [
	'theme_location'  => 'top',
	'menu'            => '',
	'container'       => null,
	'container_class' => 'header__body',
	'container_id'    => '',
	'menu_class'      => 'header__list',
	
	
] );
						?>
							<li>
							
								<a href="" class="header__link ru">RU </a><a href="" class="header__link ru">ENG  </a>
								<a href="" class="header__link ru">KZ</a>
							</li>
							<li>
								<img src="img/bx_bx-search.svg"data-bs-toggle="modal" data-bs-target="#exampleModal" >


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
       
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="example" action="p">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="let21" data-bs-dismiss="modal">ЗАКРЫТЬ</button>
        <button type="button" class="let21 ">ПОИСК</button>
      </div>
    </div>
  </div>
</div>
							</li>
						</ul>
					</nav>
					</nav>

				</div>
			</div>
		</header>

	</body>
