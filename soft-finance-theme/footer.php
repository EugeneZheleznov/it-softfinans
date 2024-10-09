<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Soft_Finance_Theme
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer__wrap"> 
			 
			 <div class="footer__nav">  

			 <?php
				wp_nav_menu(
					array(
						'theme_location' => 'foot_menu', 
						'container'=> false, // обертка списка, тут не нужна
						'menu_id' => 'foot_menu', 
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'menu_class' => 'foot_menu' 
					)
				);
			?>
			
			</div>
			 <div class="footer__column">
				 <a href="/">
					 <img src="<?php echo get_template_directory_uri() ?>/img/logo.png" alt="">
				 </a> 
			 </div>
 
			 <div class="footer__column">
					 <a href="tel:<?php the_field('tel', 'options' ); ?>" class="tel"><?php the_field('tel', 'options' ); ?></a>
			 </div>
 
			 <div class="footer__column">
				 <div class="text">
					 <a href="mailto:<?php the_field('email', 'options' ); ?>" class="mail"><?php the_field('email', 'options' ); ?></a>
					 <p>Пишите нам по будням<br/>и в выходные</p>
				 </div> 
			 </div>
 
			 <div class="footer__bottom">
				 <a href="/privacy-policy/">Политика конфидециальности</a>
			 </div>
 
		 </div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<div class="overlay"></div>

<div class="popup"> 
	<?php echo do_shortcode('[contact-form-7 id="115" title="popup" html_class="form__white"]'); ?>
</div>
 
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");
 
   ym(94989528, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
   });
</script> 
<!-- /Yandex.Metrika counter -->

<!-- Google tag (gtag.js) --> <script async src="https://www.googletagmanager.com/gtag/js?id=G-NMJQWXJ27Q"></script> <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-NMJQWXJ27Q'); </script>


</body>
</html>
