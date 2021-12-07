

<footer class="container-fluid py-5 footer">
  <div class="row">
    <div class="col-12 col-md">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mb-2" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
      <small class="d-block mb-3 text-muted">&copy; 2021–2022</small>
    </div>
    
    <div class="col-6 col-md">
                       

 <?php wp_nav_menu( [
  'theme_location'  => 'footer',
  'menu'            => '',
  'container'       => null,
  'container_class' => 'col-6',
    'container_class' => 'col-md',
  'container_id'    => '',

  
  
] );      ?>
      <ul class="list-unstyled text-small">
       
      </ul>
    </div>
    <div class="col-6 col-md">

     <?php wp_nav_menu( [
  'theme_location'  => 'footer',
  'menu'            => '',
  'container'       => null,
  'container_class' => 'col-6',

  'container_id'    => '',

  
  
] );      ?>
    </div>
    <div class="col-6 col-md">

       <?php wp_nav_menu( [
  'theme_location'  => 'footer',
  'menu'            => '',
  'container'       => null,
  'container_class' => 'col-md',

  'container_id'    => '',

  
  
] );      ?>
      <ul class="list-unstyled text-small">
   
    </div>
    <div class="col-6 col-md">
  
    <?php wp_nav_menu( [
  'theme_location'  => 'footer',
  'menu'            => '',
  'container'       => null,
  'container_class' => 'col-6',
 
  'container_id'    => '',

  
  
] );      ?>
    </div>
  </div>
</footer>
	<!-- Swiper JS -->
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

	<!-- Initialize Swiper -->
	<script type="text/javascript">
		
	</script>
	<script>
		var swiper = new Swiper(".mySwiper", {
			pagination: {
				el: ".swiper-pagination",
				delay: 2000,
				speed: 1000,

			}

		});
		var swiper = new Swiper('.mySwiper', {

			autoplay: {
				delay: 4000,
			},
		});
	</script>

	<script type="text/javascript" src="js/script.js"></script>











	<script src="https://unpkg.com/scrollreveal"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery-3.6.0.slim.js"></script>
	<script src="js/scroll.js"></script>
	<script src="js/burger-menu.js"></script>
	<script src="js/all.min.js"></script>
	<!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
</body>
<!-- JavaScript Bundle with Popper -->

</html>