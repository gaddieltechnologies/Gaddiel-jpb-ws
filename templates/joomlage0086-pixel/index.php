<?php

/*================================================================================*\
|| # Copyright (C) 2012  Joomlage.com Nexus Framework. All Rights Reserved.       ||
|| # license - PHP files are licensed under  GNU/GPL V2                           ||
|| # license - CSS - JS files are Copyrighted material                            ||
|| # Website: http://www.joomlage.com                                             ||
\*================================================================================*/

defined('_JEXEC') or die;
// JPlugin::loadLanguage( 'tpl_SG1' );
JHtml::_('behavior.framework', true);
define( 'nexus', dirname(__FILE__) );
require( "php/config.php");
require( "php/variables.php");

// Add JavaScript Frameworks
JHtml::_('bootstrap.framework');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
<jdoc:include type="head" />
<?php include ( "php/styles.php");?>
<?php include ( "php/browser.php");?>
<?php echo ($head_custom_code); ?>
</head>

<body>
<a href="#" class="scrollup">Scroll</a>

            <div id="#spacer" class="spacer"></div>
            <div id="container_header" class="container"><div class="wrapper960">
            <div id="header_triangle"></div>
            <?php require( "php/layouts/header.php"); ?>
            </div></div>

            <div id="container_logo_menu_mobile" class="container"><div class="wrapper960">
            <?php require( "php/layouts/responsive_head.php"); ?>
            </div></div>

            <?php if ($this->countModules( 'jumbotron' )) : ?>
            <div id="container_jumbotron_bg" style="background-position: 50% 0%" data-stellar-background-ratio="0.5">
            <div id="container_jumbotron" class="container"><div class="wrapper960">
            <?php require( "php/layouts/jumbotron.php"); ?>
            </div></div></div>
            <?php endif; ?>

            <?php if ($this->countModules( 'showcase' )) : ?>
            <div id="container_slideshow" class="container"><div class="wrapper960">
            <?php require( "php/layouts/slideshow.php"); ?>
            </div></div>
            <?php endif; ?>

            <?php if ($this->countModules('top-1a') || $this->countModules('top-1b') || $this->countModules('top-1c') || $this->countModules('top-1d') || $this->countModules('top-1e') || $this->countModules('top-1f') || $this->countModules('top-2a') || $this->countModules('top-2b') || $this->countModules('top-2c') || $this->countModules('top-2d') || $this->countModules('top-2e') || $this->countModules('top-2f')) : ?>
            <div id="container_top_modules_bg" class="container" style="background-position: 50% 0%" data-stellar-background-ratio="0.5">
            <div id="container_top_modules" class="container"><div class="wrapper960">
            <?php require( "php/layouts/top_modules.php"); ?>
            </div></div></div>
            <?php endif; ?>

            <div id="container_maincontent_bg" style="background-position: 50% 0%" data-stellar-background-ratio="0.5">
            <div id="container_main" class="container"><div class="wrapper960">
            <?php require( "php/layouts/main.php"); ?>
            </div></div>
            </div>

            <?php if ($this->countModules('bottom-1a') || $this->countModules('bottom-1b') || $this->countModules('bottom-1c') || $this->countModules('bottom-1d') || $this->countModules('bottom-1e') || $this->countModules('bottom-1f') || $this->countModules('bottom-2a') || $this->countModules('bottom-2b') || $this->countModules('bottom-2c') || $this->countModules('bottom-2d') || $this->countModules('bottom-2e') || $this->countModules('bottom-2f')) : ?>
            <div id="container_bottom_modules_bg" style="background-position: 50% 0%" data-stellar-background-ratio="0.5">
            <div id="container_bottom_modules" class="container"><div class="wrapper960">
            <?php require( "php/layouts/bottom_modules.php"); ?>
            </div></div></div>
            <?php endif; ?>


            <?php if ($this->countModules('base-1a') || $this->countModules('base-1b') || $this->countModules('base-1c') || $this->countModules('base-1d') || $this->countModules('base-1e') || $this->countModules('base-1f') || $this->countModules('base-2a') || $this->countModules('base-2b') || $this->countModules('base-2c') || $this->countModules('base-2d') || $this->countModules('base-2e') || $this->countModules('base-2f') || $this->countModules( 'footer-1' ) || $this->countModules( 'footer-2' )) : ?>
            <div id="container_base_modules_bg" style="background-position: 0% 0%" data-stellar-background-ratio="0.5">
            <div id="container_base" class="container"><div class="wrapper960">
            <?php require( "php/layouts/base.php"); ?>
            </div></div></div>
            <?php endif; ?>


            <div id="container_copyright_footermenu" class="container"><div class="wrapper960">
            <?php require( "php/layouts/copyright-footermenu.php"); ?>
            </div></div></div>

<?php echo ($body_custom_code); ?>


<?php // Load and Initialise Scripts
include ( "php/scripts.php");
?>

</body> 
</html>