</main>
<footer>
      <div class="footer">
        <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="" class="footer__logo" />
        <div class=footer__item>
          
          <div class="footer__item__title">
            <span class="material-icons">
              mail
              </span>
            <h4>support@influentialenglish.com</h4>
          </div>
        </div>
        <div class="footer__item">
          <div class="footer__item__title">
            <span class="material-icons">
              place
              </span>
              <div>
                <h4>Find us here</h4>
                <p>57 Skylines Village,<br>
                  Isle of Dogs,<br>
                  London E14 9TS</p>
              </div>
          </div>
          
        </div>
      </div>
    </footer>


    <?php wp_footer(); ?>
    <script src="
        <?php
        echo get_theme_file_uri('/assets/js/vendor.js');
        ?>"></script>
     <script src="
        <?php
        echo get_theme_file_uri('/assets/js/foundation.js');
        ?>"></script>   
</body>

</html>