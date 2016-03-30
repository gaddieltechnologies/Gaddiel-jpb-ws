<div id ="social_mobile" class="block_holder">  
        <div id="social">
            <ul>
            <?php if($this->params->get('nav_rssfeed_sw') == '1') : ?>
                <li class="social-rss"><a href="<?php echo $this->params->get('nav_rssfeed'); ?>" title="RSS Feed"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_twitter_sw') == '1') : ?>
                <li class="social-twitter"><a href="<?php echo $this->params->get('nav_twitter'); ?>" title="Twitter"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_google_sw') == '1') : ?>
                <li class="social-googleplus"><a href="<?php echo $this->params->get('nav_google'); ?>" title="Google Plus"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_facebook_sw') == '1') : ?>
                <li class="social-facebook"><a href="<?php echo $this->params->get('nav_facebook'); ?>" title="Facebook"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_youtube_sw') == '1') : ?>
                <li class="social-youtube"><a href="<?php echo $this->params->get('nav_youtube'); ?>" title="YouTube"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_pinterest_sw') == '1') : ?>
                <li class="social-pinterest"><a href="<?php echo $this->params->get('nav_pinterest'); ?>" title="Pinterest"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_dribbble_sw') == '1') : ?>
                <li class="social-dribbble"><a href="<?php echo $this->params->get('nav_dribbble'); ?>" title="Dribbble"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_flickr_sw') == '1') : ?>
                <li class="social-flickr"><a href="<?php echo $this->params->get('nav_flickr'); ?>" title="Flickr"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_skype_sw') == '1') : ?>
                <li class="social-skype"><a href="<?php echo $this->params->get('nav_skype'); ?>" title="Skype"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_linkedin_sw') == '1') : ?>
                <li class="social-linkedin"><a href="<?php echo $this->params->get('nav_linkedin'); ?>" title="LinkedIn"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_vimeo_sw') == '1') : ?>
                <li class="social-vimeo"><a href="<?php echo $this->params->get('nav_vimeo'); ?>" title="vimeo"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_yahoo_sw') == '1') : ?>
                <li class="social-yahoo"><a href="<?php echo $this->params->get('nav_yahoo'); ?>" title="yahoo"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_tumblr_sw') == '1') : ?>
                <li class="social-tumblr"><a href="<?php echo $this->params->get('nav_tumblr'); ?>" title="tumblr"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_deviantart_sw') == '1') : ?>
                <li class="social-deviantart"><a href="<?php echo $this->params->get('nav_deviantart'); ?>" title="deviantart"></a></li>
            <?php endif; ?>

            <?php if($this->params->get('nav_delicious_sw') == '1') : ?>
                <li class="social-delicious"><a href="<?php echo $this->params->get('nav_delicious'); ?>" title="delicious"></a></li>
            <?php endif; ?>
            </ul>
        </div>  
</div>

<div id ="logo_mobile">
   <?php /*?>--Set Mobile Splash Image and locate image file--<?php */?>   
	<?php if(($this->params->get('logo_mobile_switch') == '1') && ($this->params->get('logo_mobile') == '')) : ?>
    <a href="index.php"><img src=<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/images/logo_mobile.png alt='default_mobilelogo' /></a>
   
    <?php elseif(($this->params->get('logo_mobile_switch') == '1') && ($this->params->get('logo_mobile') != '')) : ?>
    <a href="index.php"><img src=<?php echo $this->baseurl ?>/<?php echo $logo_mobile; ?> alt='user_mobilelogo' /></a>
    <?php endif; ?>
    <?php /*?>--End Set Mobile Splash Image and locate logo image file-- <?php */?>
</div>

<?php if($search_onoff == "1") : ?>
  <div id="mobile_search">
      <?php echo $search; ?>
  </div>
<?php endif; ?>


<div id="responsive_menu">
</div>

<div class="clear"></div>