<section id="register" class="content-info container-fluid reg-sec" role="contentinfo">
	<div class="container">
	  <div class="row">
	    <div class="col-md-12">
	      <h2>Register Your Interest</h2>
	      <div class="sep"></div>
	      <?php echo do_shortcode ('[contact-form-7 id="10" title="BANC Register Form"]'); ?>
	    </div>
	  </div>
	</div>
</section>

<section id="contact" class="content-info container-fluid contact-sec" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<p class="addr">70 CRONULLA STREET, CRONULLA</p>
				<h2>Contact Us</h2>
				<div class="sep"></div>
				<p class="phone-no"><a href="tel:0295234333">02 9523 4333</a></p>
				<p class="phone-no2">David Highland <a href="tel:0405735735">0405 735 735</a></p>
				<div class="disclaimer">Disclaimer: Images are representation only. Completed apartments may vary from the images shown.<br /> &copy;<?php echo date('Y'); ?> Banc Property Marketing by Toast Creative.</div>
			</div>
		</div>
	</div>
</section>

<footer class="content-info container-fluid footer-sec" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<a href="/"><img src="/wp-content/uploads/2016/04/banc-footer-logo.png"></a>
				<img src="/wp-content/uploads/2016/04/Sammut-Logo.png">
				<img src="/wp-content/uploads/2016/04/Highland-Project-Logo.png">
			</div>
		</div>
	</div>
</footer>

<script>
$(function() {
  var $slides = $('#slides');

  Hammer($slides[0]).on("swipeleft", function(e) {
    $slides.data('superslides').animate('next');
  });

  Hammer($slides[0]).on("swiperight", function(e) {
    $slides.data('superslides').animate('prev');
  });

  $slides.superslides({
    play: 6000,
    hashchange: false,
    animation: 'fade'
  });

});
</script>

<?php wp_footer(); ?>
