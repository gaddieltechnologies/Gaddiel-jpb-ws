<div id ="header" class="block_holder">

<div id="hornav" style="border-style: solid; border-width:0.1px; border-left-color:#000000; border-right-color:#000000; border-top-color:#a0a0a0; border-bottom-color:#a0a0a0;">
    <?php echo $hornav; ?>
</div>

<div class="clear"></div>  
	<div id="header_items">
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
    
<?php if ($this->countModules( 'custom' )) : ?>
<div id="custom" class="block_holder" style="float:right; padding-right:50px;"><div class="module_margin">
    <jdoc:include type="modules" name="custom" />
</div></div>
<?php endif; ?>

<?php if($search_onoff == "1") : ?>
    <div id="search">
        <?php echo $search; ?>
    </div>
<?php endif; ?>
 
<div id="logo">
    <div class="logo_container">        
        <?php if($this->params->get('logoImage') == '1') : ?>
        <div class="logoimage"> <a href="index.php" title="<?php echo $siteName; ?>"><span>
          <?php echo $siteName; ?> 
          </span></a> </div>
            <?php else : ?>

        <h1 class="logo-text"> <a href="index.php" title="<?php echo $this->params->get('siteName'); ?>"><span>
          <?php echo $this->params->get('logoText'); ?>
          </span></a> </h1>
            <p class="site-slogan"><?php echo $this->params->get('sloganText'); ?></p>
        <?php endif; ?>
    </div>
</div>
<div class="clear"></div>
</div>

</div>