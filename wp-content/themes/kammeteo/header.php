<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kammeteo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php global $kammeteo; ?>
	<header class="header-top">
  <div class="header-top__bg">
    <div class="wrapper">
     <div class="header-top__main">
      <div class="header-top__main-item">
       <div class="item-block">
        <img src="<?php echo ($kammeteo['main-logo']['url']); ?>" alt="" class="item-block-img">
        <a href="#" class="item-block__link"></a>
       </div>
      </div>
      <div class="header-top__main-item">
       <span class="header-top__main-item-desc"><?php echo ($kammeteo['main-desc'])?></span>
       <h1 class="header-top__main-item-title">
       <?php echo ($kammeteo['main-title'])?>
       </h1>
      </div>
      <div class="header-top__main-item">
       <div class="item-block">
        <img src="<?php echo ($kammeteo['second-logo']['url']); ?>" alt="" class="item-block-img">
        <a href="#" class="item-block__link" target="_blank"></a>
       </div>
      </div>
  </div>
    </div>
  </div>
 <div class="header-nav">
    <div class="header-nav-menu">
      <div class="wrapper">
            <div class="nav_menu">
              <nav>
              <?php
                  wp_nav_menu(
                    array(
                      'theme_location' => 'menu-1',
                      'container'      => 'ul',
                      'menu_class'     => 'cf'
                    )
                  );
                ?>
                <!--<ul class="catigory">
                  <li class="carder"><a class="nav_menu_title" href="???">??????????????</a></li>
                  <li class="carder"><a class="nav_menu_title" href="#">?? ??????</a>
                    <ul class="sub_menu">
                      <li><a href="#">??????????????????</a></li>
                      <li><a href="#">????????????????????????</a></li>
                      <li><a href="#">??????????????</a></li>
                      <li><a href="#">???????????? ??????????</a></li>
                      <li><a href="#">????????????????</a></li>
                      <li><a href="#">????????????????</a></li>
                    </ul>
                  </li>
                  <li class="carder"><a class="nav_menu_title" href="#">????????????</a>
                   <ul class="sub_menu">
                    <li><a href="#">????????????????</a></li>
                    <li><a href="#">????????????</a></li>
                    <li><a href="#">????????????</a></li>
                    <li><a href="#">?? ???????????????????? ????????????????????</a></li>
                  </ul>
                  </li>
                  <li class="carder"><a class="nav_menu_title" href="#">???????????????????? ?????????????????????? ???????????????????? ??????????</a>
                   <ul class="sub_menu">
                    <li><a href="#">?????????????????????? ????????????</a></li>
                    <li><a href="#">????????????????</a></li>
                    <li><a href="#">?????????????????????? ??????????</a></li>
                    <li><a href="#">?????????????? ??????????</a></li>
                  </ul>
                  </li>
                  <li class="carder"><a class="nav_menu_title" href="#">?????????? ????????????</a>
                  </li>
                  <li class="carder"><a class="nav_menu_title" href="#">??????????</a></li>
                </ul>-->
              </nav>
            </div>
      </div>
    </div>
  </div>
 </header>
