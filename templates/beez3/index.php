<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.beez3
 * 
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access.
defined('_JEXEC') or die;

JLoader::import('joomla.filesystem.file');

// Check modules
$showRightColumn = ($this->countModules('position-3') or $this->countModules('position-6') or $this->countModules('position-8'));
$showbottom      = ($this->countModules('position-9') or $this->countModules('position-10') or $this->countModules('position-11'));
$showleft        = ($this->countModules('position-4') or $this->countModules('position-7') or $this->countModules('position-5'));

if ($showRightColumn == 0 and $showleft == 0)
{
	$showno = 0;
}

JHtml::_('behavior.framework', true);

// Get params
$color          = $this->params->get('templatecolor');
$logo           = $this->params->get('logo');
$navposition    = $this->params->get('navposition');
$headerImage    = $this->params->get('headerImage');
$doc            = JFactory::getDocument();
$app            = JFactory::getApplication();
$templateparams = $app->getTemplate(true)->params;
$config         = JFactory::getConfig();
$bootstrap      = explode(',', $templateparams->get('bootstrap'));
$jinput         = JFactory::getApplication()->input;
$option         = $jinput->get('option', '', 'cmd');

if (in_array($option, $bootstrap))
{
	// Load optional rtl Bootstrap css and Bootstrap bugfixes
	JHtml::_('bootstrap.loadCss', true, $this->direction);
}

$doc->addStyleSheet($this->baseurl . '/templates/system/css/system.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/position.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/layout.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/print.css', $type = 'text/css', $media = 'print');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/general.css', $type = 'text/css', $media = 'screen,projection');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/' . htmlspecialchars($color) . '.css', $type = 'text/css', $media = 'screen,projection');

if ($this->direction == 'rtl')
{
	$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template_rtl.css');
	if (file_exists(JPATH_SITE . '/templates/' . $this->template . '/css/' . $color . '_rtl.css'))
	{
		$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/' . htmlspecialchars($color) . '_rtl.css');
	}
}

JHtml::_('bootstrap.framework');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/md_stylechanger.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/hide.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/respond.src.js', 'text/javascript');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/javascript/template.js', 'text/javascript');

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>" >
	<head>
		<?php require __DIR__ . '/jsstrings.php';?>

		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=3.0, user-scalable=yes"/>
		<meta name="HandheldFriendly" content="true" />
		<meta name="apple-mobile-web-app-capable" content="YES" />

		<jdoc:include type="head" />

		<!--[if IE 7]>
		<link href="<?php echo $this->baseurl; ?>/templates/<?php echo $this->template; ?>/css/ie7only.css" rel="stylesheet" type="text/css" />
		<![endif]-->
	</head>
	<body id="shadow">
		<?php if ($color == 'image'):?>
			<style type="text/css">
				.logoheader {
					background:url('<?php echo $this->baseurl . '/' . htmlspecialchars($headerImage); ?>') no-repeat right;
				}
				body {
					background: <?php echo $templateparams->get('backgroundcolor'); ?>;
				}
			</style>
		<?php endif; ?>
		  <div id="breadcrumbs" style="float:right; padding:10px;">
						<jdoc:include type="modules" name="position-2" />
					</div>		
		<div id="all">
        
			<div id="back">
              
				<div id="<?php echo $showRightColumn ? 'contentarea2' : 'contentarea'; ?>">
					

					<?php if ($navposition == 'left' and $showleft) : ?>
						<nav class="left1 <?php if ($showRightColumn == null) { echo 'leftbigger';} ?>" id="nav">
							<jdoc:include type="modules" name="position-7" style="beezDivision" headerLevel="3" />
							<jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
							<jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2"  id="3" />
						</nav><!-- end navi -->
					<?php endif; ?>

					<div id="<?php echo $showRightColumn ? 'wrapper' : 'wrapper2'; ?>" <?php if (isset($showno)){echo 'class="shownocolumns"';}?>>
						<div id="main">

							<?php if ($this->countModules('position-12')) : ?>
								<div id="top">
									<jdoc:include type="modules" name="position-12" />
								</div>
							<?php endif; ?>

							<jdoc:include type="message" />
							<jdoc:include type="component" />

						</div><!-- end main -->
					</div><!-- end wrapper -->

					<?php if ($showRightColumn) : ?>
						<div id="close">
							<a href="#" onclick="auf('right')">
							<span id="bild">
								<?php echo JText::_('TPL_BEEZ3_TEXTRIGHTCLOSE'); ?>
							</span>
							</a>
						</div>

						<aside id="right">
							<h2 class="unseen"><?php echo JText::_('TPL_BEEZ3_ADDITIONAL_INFORMATION'); ?></h2>
							<jdoc:include type="modules" name="position-6" style="beezDivision" headerLevel="3" />
							<jdoc:include type="modules" name="position-8" style="beezDivision" headerLevel="3" />
							<jdoc:include type="modules" name="position-3" style="beezDivision" headerLevel="3" />
						</aside><!-- end right -->
					<?php endif; ?>

					<?php if ($navposition == 'center' and $showleft) : ?>
						<nav class="left <?php if ($showRightColumn == null) { echo 'leftbigger'; } ?>" id="nav" >

							<jdoc:include type="modules" name="position-7"  style="beezDivision" headerLevel="3" />
							<jdoc:include type="modules" name="position-4" style="beezHide" headerLevel="3" state="0 " />
							<jdoc:include type="modules" name="position-5" style="beezTabs" headerLevel="2"  id="3" />

						</nav><!-- end navi -->
					<?php endif; ?>

					<div class="wrap"></div>
				</div> <!-- end contentarea -->
			</div><!-- back -->
		</div><!-- all -->

		<div id="footer-outer">
			<?php if ($showbottom) : ?>
				<div id="footer-inner" >

					<div id="bottom">
						<div class="box box1"> <jdoc:include type="modules" name="position-9" style="beezDivision" headerlevel="3" /></div>
						<div class="box box2"> <jdoc:include type="modules" name="position-10" style="beezDivision" headerlevel="3" /></div>
						<div class="box box3"> <jdoc:include type="modules" name="position-11" style="beezDivision" headerlevel="3" /></div>
					</div>

				</div>
			<?php endif; ?>

			<div id="footer-sub">
				<footer id="footer">
					<jdoc:include type="modules" name="position-14" />
				</footer><!-- end footer -->
			</div>
		</div>
		<jdoc:include type="modules" name="debug" />
	</body>
</html>
