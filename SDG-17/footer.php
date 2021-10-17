
 <footer>
        <div class="footer">
          <div>
          <img class="logo-img" src="<?php echo get_template_directory_uri() ?> /images/logo.svg" width="120px" height="120px"/>
            <div class="line"></div>
            <div class="kontakt">
                <h2>Kontakt info: </h2>
            </div>
          </div>
          <div class="footer-info">
            <div class="mail">
              <b><?php the_field("telefon_nummer")?></b>
              <b><?php the_field("email")?></b>
            </div>
            <div class="social-medier">
              <b>Social Media</b>
              <div class="footer-icon">
                <a href="<?php the_field("facebook_link")?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri() ?>/images/facebook(nav).svg" width="23px" height="23px"></a>
                <a href="<?php the_field("instagram_link")?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri() ?>/images/instagram(nav).svg" width="23px" height="auto"></a>
                <a href="<?php the_field("youtube_link")?>" target="_blank"><img class="icon" src="<?php echo get_template_directory_uri() ?>/images/youtube.svg" width="30px" height="auto"></a>
              </div>
            </div>
          </div>
      </div>
    </footer>


<script type="text/javascript">jssor_1_slider_init();</script>
</body>
</html>