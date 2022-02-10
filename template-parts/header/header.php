<header class="ct-header" itemscope itemtype="http://schema.org/WPHeader">
	<div class="cjc-super-header">
		<div class="container-fluid">
            <ul>
                <li class="d-none d-lg-block"><a class="cjc-super-header-link" href="#">FAQ</a></li>
                <li class="d-none d-lg-block"><a class="cjc-super-header-link" href="#">Contact us</a></li>
                <?php if( shortcode_exists('gtranslate') ) : ?><li><?php echo do_shortcode('[gtranslate]'); ?></li><?php endif; ?>
                <li class="cjc-side-item"><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--phone" href="#"><span class="fas fa-phone fa-fw"></span><span class="cjc-label">+40 728 111 728</span></a></li>
                <li><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--email" href="#"><span class="fas fa-envelope fa-fw"></span><span class="cjc-label">office@cjc.com</span></a></li>
                <li><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--whatsapp" href="#"><span class="fab fa-whatsapp fa-fw"></span><span class="cjc-label">+40 728 111 728</span></a></li>
                <li><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--li" href="#"><span class="fab fa-linkedin-in fa-fw"></span><span class="cjc-label">LinkedIn</span></a></li>
                <li><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--fb" href="#"><span class="fab fa-facebook-f fa-fw"></span><span class="cjc-label">Facebook</span></a></li>
                <li><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--ig" href="#"><span class="fab fa-instagram fa-fw"></span><span class="cjc-label">Instagram</span></a></li>
                <li><a class="cjc-super-header-link cjc-icon-link cjc-icon-link--tw" href="#"><span class="fab fa-twitter fa-fw"></span><span class="cjc-label">Twitter</span></a></li>
            </ul>
        </div>
	</div>
	<div class="ct-header__wrapper">
		<div class="container-fluid">
			<?php get_template_part( 'template-parts/header/toolbar' ); ?>
			<?php get_template_part( 'template-parts/header/logo-nav' ); ?>
		</div>
	</div>
</header>
