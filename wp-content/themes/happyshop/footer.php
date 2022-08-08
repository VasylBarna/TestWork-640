<section class="contacts">
  <div class="container contacts_desktop">
    <div class="contacts__box">
      <ul class="contacts__list">
        <li class="contacts__item">
          <img
            class="contacts__image"
            src="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/location.png"
            alt="address"
          />
          <a
            target="_blank"
            href="https://goo.gl/maps/Ag9uTambg2uL5g3m6" id="buy"
            class="contacts__text"
          >
            <span class="contacts__title">Address</span>
            London, England
            <iframe
              class="contacts__maps"
              target="_blank"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d158857.72810813924!2d-0.24168018863117885!3d51.528771840455114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon!5e0!3m2!1sen!2suk!4v1659108291550!5m2!1sen!2suk"
              allowfullscreen=""
              loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"
            ></iframe
          ></a>
        </li>
        <li class="contacts__item">
          <img
            class="contacts__image"
            src="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/phone2.png"
            alt="call us"
          />
          <a href="+1 123 444 5678" class="contacts__text">
            <p class="contacts__title">Call Us</p>
            +44-11-222-3333</a
          >
        </li>
        <li class="contacts__item">
          <img
            class="contacts__image"
            src="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/mail.png"
            alt="email us"
          />
          <a href="mailto:info@example.com" class="contacts__text">
            <span class="contacts__title">Email Us</span>
            happy.shopping@example.com</a
          >
        </li>
      </ul>
    </div>
  </div>
</section>
<footer class="footer">
  <div class="container footer_desktop">
    <div class="footer__box">
       <div class="footer__column column_mobile">
           <a href="./index.php" class="footer__logo">
          <?php the_custom_logo() ?>
        </a>
        <p class="footer__text">
          Never give up on something you really want. However impossible things
          seem, there's always a way
        </p>
      </div>
      <div class="footer__column">
          <p class="footer__title">Company</p>
          <ul class="footer__list">
            <li class="footer__item--size"><a class="footer__item__title" href="/fornex/home">Home</a></li>
            <li class="footer__item--size"><a class="footer__item__title" href="fornex/">About</a></li>
            <li class="footer__item--size"><a class="footer__item__title" href="/fornex/product/">Product</a></li>
            <li class="footer__item--size"><a class="footer__item__title" href="/fornex/">Contact</a></li>
          </ul>
       </div>
       <div class="footer__column">
          <p class="footer__title">Follow Us</p>
          <div class="footer__socials">
            <ul class="footer__list">
              <li class="footer__item">
                  <svg class="footer__icon">
                    <use
                     href="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/symbol-defs.svg#icon-facebook">
                    </use>
                  </svg>
                 <a class="footer__item__title" target="_blank" href="https://www.facebook.com">Facebook</a>
              </li>
              <li class="footer__item">
                  <svg class="footer__icon">
                    <use
                     href="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/symbol-defs.svg#icon-twitter">
                    </use>
                  </svg>
                 <a class="footer__item__title" target="_blank" href="https://twitter.com">Twitter</a>
              </li>
               <li class="footer__item">
                  <svg class="footer__icon footer_youtube">
                    <use
                     href="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/symbol-defs.svg#icon-youtube">
                    </use>
                  </svg>
                 <a class="footer__item__title" target="_blank" href="https://www.youtube.com">YouTube</a>
              </li>
                <li class="footer__item">
                  <svg class="footer__icon footer_instagram">
                    <use
                     href="https://v109929.hostua6.fornex.host/wp-content/uploads/2022/08/symbol-defs.svg#icon-instagram">
                    </use>
                  </svg>
                 <a class="footer__item__title" target="_blank" href="https://www.instagram.com">Instagram</a>
              </li>
            </ul>
          </div>
        </div>
    </div>
    <div class="footer__finishing">
      <p class="footer__finishing__text">Copyright © 2022 <span class="footer__finishing__text__heart"> &#10084</span> Happy Shopping</p>
    </div>
  </div>
 </footer>
</div>
 <?php wp_footer() ?>
</body>
</html>
