<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head() ?>
</head>
<body <?php body_class(); ?> class="full_document">
<?php wp_body_open(); ?>

<div class="wrapper">
 <header class="header container">
  <div class="header__box">
    <a href="/fornex/" class='header__link_logo'>
      <?php the_custom_logo() ?>
    </a>
    <div class="header__burger">
      <span></span>
    </div>
    <nav class="header__navigation">
      <ul class="header__list">
        <li class="header__item">
          <a
            href="/fornex/home/"
            class="header__list_link current"
            rel="noreferrer noopener"
            >Home</a
          >
        </li>
        <li class="header__item">
          <a href="/fornex/product/" class="header__list_link current" rel="noreferrer noopener">Products</a>
        </li>
				<li class="header__item">
          <a href="/fornex/create_product" class="header__list_link current" rel="noreferrer noopener">Creat product</a>
        </li>
        <li class="header__item">
          <a href="/fornex/refund_returns" class="header__list_link current" rel="noreferrer noopener"
            >Guarantees</a
          >
        </li>
        <li class="header__item">
        <a href="/fornex/cart/" class="header__list_link current" rel="noreferrer noopener">
				<button
            class="btn btn__header"
            type="button"
            aria-expanded="false"
            aria-controls="menu-container"
            data-menu-button
          >
        Shopping cart
          </button>
          </a>
        </li>
      </ul>
    </nav>
  </div>
 </header>
