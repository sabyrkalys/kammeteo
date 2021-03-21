<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kammeteo
 */

?>

<footer class="footer">
<?php global $kammeteo; ?>
  <div class="wrapper">
      <div class="main-footer">
          <div class="logo">
           <a href="#">
            <img src="<?php echo ($kammeteo['footer-logo']['url']); ?>" alt="logo">
            <span class="logo-desc logo-desc-footer">
              <p><?php echo ($kammeteo['footer-desc']);?></p>
              <h1><?php echo ($kammeteo['footer-title']);?></h1>
            </span>
           </a>
          </div>
          <div class="icon-link">
            <nav class="icon_footer_nav">
              <ul>
              <?php if($kammeteo['inst']) {?><li>
                <a href="<?php echo ($kammeteo['inst']);?>">
                <i class="fab fa-vk"></i>
                </a>
                </li>
                <?php }?>
                <?php if($kammeteo['vk']) {?>
                <li>
                <a href="<?php echo ($kammeteo['vk']);?>">
                <i class="fab fa-instagram"></i>
                </a>
                </li>
                <?php }?>
              </ul>
            </nav>
          </div>
      </div>
    <!--<div class="main-mobile">
      <div class="main-mobile-block">
        <div class="main-mobile-block-logo">
          <div class="logo">
            <a href="index.html">
              <img src="style/img/лого.png" alt="logo">
              <span class="logo-desc logo-desc-footer">
                <p>Федеральное государственное буджетное учереждение</p>
                <h1>Камчатское управление по гидрометеорологии
                 и мониторингу окружающей среды</h1>
              </span>
            </a>
          </div>
        </div>
        <div class="main-mobile-block-phone">
          <div class="icon-link">
            <nav class="icon_footer_nav">
              <ul>
                <li><a href="#"><i class="fab fa-vk"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>-->
    <div class="footer-block">
      <div class="contacts_box">
        <h6 class="widget_title">Адрес:</h6>
        <span class="address_map"><i class="fas fa-map-marker-alt"></i><?php echo ($kammeteo['footer-adress']);?></span>
      </div>
      <div class="contacts_box">
        <h6 class="widget_title">Контакты:</h6>
        <a href="<?php echo ($kammeteo['footer-contact-url']);?>" type="tel"><span class="phon">
        <?php echo ($kammeteo['footer-contact-1']);?></span></a>
        <a href="#" type="tel"><span class="phon"><?php echo ($kammeteo['footer-contact-fax']);?></a>
        <a href="<?php echo ($kammeteo['footer-email-url']);?>"><?php echo ($kammeteo['footer-email']);?></a>
      </div>
      <div class="contacts_box">
       <h6 class="widget_title"></h6>
       <nav class="nav-footer">
        <ul class="cf">
         <li><a href="#">Политика конфиденциальности</a></li>
         <li><a href="#">Пользовательское соглашение</a></li>
        </ul>
       </nav>
     </div>
    </div>
    <div class="footer__row">
      <div class="footer__copyright">2020 © «Камчатское управление по гидрометеорологии и мониторингу
       окружающей среды». Официальный сайт.</div>
      <!--<div class="footer__policy">
        <a href="#">Политика конфиденциальности</a>
        <a href="#">Пользовательское соглашение</a>
      </div>-->
      <!--<div class="footer__developer">Разработчик —
        <a href="#" target="_blank">SabyrGroup</a>
      </div>-->
    </div>
  </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
