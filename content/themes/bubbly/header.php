<!DOCTYPE html><html <?php language_attributes(); ?>><head><title><?php wp_title( '|', true, 'right' ); ?></title> <meta charset="<?php bloginfo( 'charset' ); ?>"/><meta name="viewport" content="width=device-width, initial-scale=1.0" /><link rel="profile" href="http://gmpg.org/xfn/11"><link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>"/>	<?php wp_head(); ?></head><body <?php body_class(); ?>>    <nav id="main-nav" class="top-bar">	    <div id="main-nav-wrap" class="container">	    <!-- Main Menu -->     	<?php if ( has_nav_menu( 'main-menu' ) ) : ?>		<div id="menu-icon" class="pos-1"></div><?php		wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => '', 'menu_id' =>'main-menu', 'menu_class' => 'menu', 'depth' => '2' ) ); 		endif; ?>		    		</div>		<div class="clr"></div>	</nav>	<header id="top-header">	    <div class="container top-header-con">            <?php if(is_home()) echo '<h1>'; else echo '<h2>'; ?>			   <?php if ( get_theme_mod( 'bubbly_logo' ) ) : ?>            <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'>		<img src='<?php echo esc_url( get_theme_mod( 'bubbly_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>              <?php else : ?>			           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo" ><?php bloginfo( 'name' ); ?></a> 			<?php endif; ?>			<?php if(is_home()) echo '</h1>'; else echo '</h2>'; ?>       	    <p><?php bloginfo( 'description' ); ?></p>                         <div class="clr"></div>        </div> <!-- end #container -->	</header> <!-- end header -->			<div class="container mtop">		<div id="inner-content">