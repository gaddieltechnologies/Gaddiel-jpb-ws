<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );?>   

<link rel="stylesheet" href="templates/system/css/system.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/reset.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/typo.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/font-awesome.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/animate.css" type="text/css" />
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/nexus.css" type="text/css" />


<!-- Font weight required for Headings and Titles -->
<link href='http://fonts.googleapis.com/css?family=Raleway:400,300,200,100,500,700,800,900,600' rel='stylesheet' type='text/css'>


<?php /*?>RESPONSIVE DESIGN CSS Load if Required<?php */?>
<?php if($this->params->get('responsive_switch') == '1') : ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/responsive.css" type="text/css" />
<?php endif; ?>

<?php /*?>Body pattern CSS Load if Required<?php */?>
<?php if($this->params->get('body_pattern_overlay_toggle') == '1') : ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/<?php echo $body_pattern_overlay ?>.css" type="text/css" />
<style type="text/css">html{background:none !important;} body{background-color:<?php echo $body_color; ?> !important;} </style>
<?php endif; ?>

<?php /*?>Set Google font choices to body, articleheads, moduleheads and hornav menu<?php */?>
<?php if(($body_fontstyle == "Arial, Helvetica, sans-serif") || ($body_fontstyle == "Courier, monospace") || ($body_fontstyle == "Tahoma, Geneva, sans-serif") || ($body_fontstyle == "Garamond, serif") || ($body_fontstyle == "Georgia, serif") || ($body_fontstyle == "Impact, Charcoal, sans-serif") || ($body_fontstyle == "Lucida Console, Monaco, monospace") || ($body_fontstyle == "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($body_fontstyle == "MS Sans Serif, Geneva, sans-serif") || ($body_fontstyle == "MS Serif, New York, sans-serif") || ($body_fontstyle == "Palatino Linotype, Book Antiqua, Palatino, serif") || ($body_fontstyle == "Times New Roman, Times, serif") || ($body_fontstyle == "Trebuchet MS, Helvetica, sans-serif") || ($body_fontstyle == "Verdana, Geneva, sans-serif")) : ?>
<style type="text/css">body{font-family:<?php echo ($body_fontstyle); ?> }</style>

<?php elseif(($body_fontstyle != "Arial, Helvetica, sans-serif") || ($body_fontstyle != "Courier, monospace") || ($body_fontstyle != "Tahoma, Geneva, sans-serif") || ($body_fontstyle != "Garamond, serif") || ($body_fontstyle != "Georgia, serif") || ($body_fontstyle != "Impact, Charcoal, sans-serif") || ($body_fontstyle != "Lucida Console, Monaco, monospace") || ($body_fontstyle != "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($body_fontstyle != "MS Sans Serif, Geneva, sans-serif") || ($body_fontstyle != "MS Serif, New York, sans-serif") || ($body_fontstyle != "Palatino Linotype, Book Antiqua, Palatino, serif") || ($body_fontstyle != "Times New Roman, Times, serif") || ($body_fontstyle != "Trebuchet MS, Helvetica, sans-serif") || ($body_fontstyle != "Verdana, Geneva, sans-serif")) : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $body_fontstyle ?>" />
<style type="text/css">body{font-family:<?php echo ($body_fontstyle); ?> }</style>
<?php endif; ?>

<?php if(($articlehead_fontstyle == "Arial, Helvetica, sans-serif") || ($articlehead_fontstyle == "Courier, monospace") || ($articlehead_fontstyle == "Tahoma, Geneva, sans-serif") || ($articlehead_fontstyle == "Garamond, serif") || ($articlehead_fontstyle == "Georgia, serif") || ($articlehead_fontstyle == "Impact, Charcoal, sans-serif") || ($articlehead_fontstyle == "Lucida Console, Monaco, monospace") || ($articlehead_fontstyle == "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($articlehead_fontstyle == "MS Sans Serif, Geneva, sans-serif") || ($articlehead_fontstyle == "MS Serif, New York, sans-serif") || ($articlehead_fontstyle == "Palatino Linotype, Book Antiqua, Palatino, serif") || ($articlehead_fontstyle == "Times New Roman, Times, serif") || ($articlehead_fontstyle == "Trebuchet MS, Helvetica, sans-serif") || ($articlehead_fontstyle == "Verdana, Geneva, sans-serif")) : ?>
<style type="text/css">h2{font-family:<?php echo ($articlehead_fontstyle); ?> }</style>
<style type="text/css">.accordion div.accordion-group div.accordion-heading strong a.accordion-toggle{font-family:<?php echo ($articlehead_fontstyle); ?> }</style>

<?php elseif(($articlehead_fontstyle != "Arial, Helvetica, sans-serif") || ($articlehead_fontstyle != "Courier, monospace") || ($articlehead_fontstyle != "Tahoma, Geneva, sans-serif") || ($articlehead_fontstyle != "Garamond, serif") || ($articlehead_fontstyle != "Georgia, serif") || ($articlehead_fontstyle != "Impact, Charcoal, sans-serif") || ($articlehead_fontstyle != "Lucida Console, Monaco, monospace") || ($articlehead_fontstyle != "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($articlehead_fontstyle != "MS Sans Serif, Geneva, sans-serif") || ($articlehead_fontstyle != "MS Serif, New York, sans-serif") || ($articlehead_fontstyle != "Palatino Linotype, Book Antiqua, Palatino, serif") || ($articlehead_fontstyle != "Times New Roman, Times, serif") || ($articlehead_fontstyle != "Trebuchet MS, Helvetica, sans-serif") || ($articlehead_fontstyle != "Verdana, Geneva, sans-serif")) : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $articlehead_fontstyle ?>" />
<style type="text/css">h2{font-family:<?php echo ($articlehead_fontstyle); ?> }</style>
<style type="text/css">.accordion div.accordion-group div.accordion-heading strong a.accordion-toggle{font-family:<?php echo ($articlehead_fontstyle); ?> }</style>
<?php endif; ?>

<?php if(($modulehead_fontstyle == "Arial, Helvetica, sans-serif") || ($modulehead_fontstyle == "Courier, monospace") || ($modulehead_fontstyle == "Tahoma, Geneva, sans-serif") || ($modulehead_fontstyle == "Garamond, serif") || ($modulehead_fontstyle == "Georgia, serif") || ($modulehead_fontstyle == "Impact, Charcoal, sans-serif") || ($modulehead_fontstyle == "Lucida Console, Monaco, monospace") || ($modulehead_fontstyle == "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($modulehead_fontstyle == "MS Sans Serif, Geneva, sans-serif") || ($modulehead_fontstyle == "MS Serif, New York, sans-serif") || ($modulehead_fontstyle == "Palatino Linotype, Book Antiqua, Palatino, serif") || ($modulehead_fontstyle == "Times New Roman, Times, serif") || ($modulehead_fontstyle == "Trebuchet MS, Helvetica, sans-serif") || ($modulehead_fontstyle == "Verdana, Geneva, sans-serif")) : ?>
<style type="text/css">.module h3, .module_menu h3{font-family:<?php echo ($modulehead_fontstyle); ?> }</style>

<?php elseif(($modulehead_fontstyle != "Arial, Helvetica, sans-serif") || ($modulehead_fontstyle != "Courier, monospace") || ($modulehead_fontstyle != "Tahoma, Geneva, sans-serif") || ($modulehead_fontstyle != "Garamond, serif") || ($modulehead_fontstyle != "Georgia, serif") || ($modulehead_fontstyle != "Impact, Charcoal, sans-serif") || ($modulehead_fontstyle != "Lucida Console, Monaco, monospace") || ($modulehead_fontstyle != "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($modulehead_fontstyle != "MS Sans Serif, Geneva, sans-serif") || ($modulehead_fontstyle != "MS Serif, New York, sans-serif") || ($modulehead_fontstyle != "Palatino Linotype, Book Antiqua, Palatino, serif") || ($modulehead_fontstyle != "Times New Roman, Times, serif") || ($modulehead_fontstyle != "Trebuchet MS, Helvetica, sans-serif") || ($modulehead_fontstyle != "Verdana, Geneva, sans-serif")) : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $modulehead_fontstyle ?>" />
<style type="text/css">.module h3, .module_menu h3{font-family:<?php echo ($modulehead_fontstyle); ?> }</style>
<?php endif; ?>

<?php if(($hornav_fontstyle == "Arial, Helvetica, sans-serif") || ($hornav_fontstyle == "Courier, monospace") || ($hornav_fontstyle == "Tahoma, Geneva, sans-serif") || ($hornav_fontstyle == "Garamond, serif") || ($hornav_fontstyle == "Georgia, serif") || ($hornav_fontstyle == "Impact, Charcoal, sans-serif") || ($hornav_fontstyle == "Lucida Console, Monaco, monospace") || ($hornav_fontstyle == "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($hornav_fontstyle == "MS Sans Serif, Geneva, sans-serif") || ($hornav_fontstyle == "MS Serif, New York, sans-serif") || ($hornav_fontstyle == "Palatino Linotype, Book Antiqua, Palatino, serif") || ($hornav_fontstyle == "Times New Roman, Times, serif") || ($hornav_fontstyle == "Trebuchet MS, Helvetica, sans-serif") || ($hornav_fontstyle == "Verdana, Geneva, sans-serif")) : ?>
<style type="text/css">#hornav{font-family:<?php echo ($hornav_fontstyle); ?> }</style>

<?php elseif(($hornav_fontstyle != "Arial, Helvetica, sans-serif") || ($hornav_fontstyle != "Courier, monospace") || ($hornav_fontstyle != "Tahoma, Geneva, sans-serif") || ($hornav_fontstyle != "Garamond, serif") || ($hornav_fontstyle != "Georgia, serif") || ($hornav_fontstyle != "Impact, Charcoal, sans-serif") || ($hornav_fontstyle != "Lucida Console, Monaco, monospace") || ($hornav_fontstyle != "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($hornav_fontstyle != "MS Sans Serif, Geneva, sans-serif") || ($hornav_fontstyle != "MS Serif, New York, sans-serif") || ($hornav_fontstyle != "Palatino Linotype, Book Antiqua, Palatino, serif") || ($hornav_fontstyle != "Times New Roman, Times, serif") || ($hornav_fontstyle != "Trebuchet MS, Helvetica, sans-serif") || ($hornav_fontstyle != "Verdana, Geneva, sans-serif")) : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $hornav_fontstyle ?>" />
<style type="text/css">#hornav{font-family:<?php echo ($hornav_fontstyle); ?> }</style>
<?php endif; ?>

<?php if(($logo_fontstyle == "Arial, Helvetica, sans-serif") || ($logo_fontstyle == "Courier, monospace") || ($logo_fontstyle == "Tahoma, Geneva, sans-serif") || ($logo_fontstyle == "Garamond, serif") || ($logo_fontstyle == "Georgia, serif") || ($logo_fontstyle == "Impact, Charcoal, sans-serif") || ($logo_fontstyle == "Lucida Console, Monaco, monospace") || ($logo_fontstyle == "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($logo_fontstyle == "MS Sans Serif, Geneva, sans-serif") || ($logo_fontstyle == "MS Serif, New York, sans-serif") || ($logo_fontstyle == "Palatino Linotype, Book Antiqua, Palatino, serif") || ($logo_fontstyle == "Times New Roman, Times, serif") || ($logo_fontstyle == "Trebuchet MS, Helvetica, sans-serif") || ($logo_fontstyle == "Verdana, Geneva, sans-serif")) : ?>
<style type="text/css">.logo-text a{font-family:<?php echo ($logo_fontstyle); ?> }</style>

<?php elseif(($logo_fontstyle != "Arial, Helvetica, sans-serif") || ($logo_fontstyle != "Courier, monospace") || ($logo_fontstyle != "Tahoma, Geneva, sans-serif") || ($logo_fontstyle != "Garamond, serif") || ($logo_fontstyle != "Georgia, serif") || ($logo_fontstyle != "Impact, Charcoal, sans-serif") || ($logo_fontstyle != "Lucida Console, Monaco, monospace") || ($logo_fontstyle != "Lucida Sans Unicode, Lucida Grande, sans-serif") || ($logo_fontstyle != "MS Sans Serif, Geneva, sans-serif") || ($logo_fontstyle != "MS Serif, New York, sans-serif") || ($logo_fontstyle != "Palatino Linotype, Book Antiqua, Palatino, serif") || ($logo_fontstyle != "Times New Roman, Times, serif") || ($logo_fontstyle != "Trebuchet MS, Helvetica, sans-serif") || ($logo_fontstyle != "Verdana, Geneva, sans-serif")) : ?>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=<?php echo $logo_fontstyle ?>" />
<style type="text/css">.logo-text a{font-family:<?php echo ($logo_fontstyle); ?> }</style>
<?php endif; ?>
<?php /*?>End Set Google font choices to body, articleheads, moduleheads and hornav menu<?php */?>

<?php if($this->direction == 'rtl') : ?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/template_rtl.css" type="text/css" />
<?php endif; ?>


<style type="text/css">

/*-------------------------------------------------------------*/
/*---------------Start Global Parmameters Styling--------------*/
/*-------------------------------------------------------------*/

/*--Set Template Width--*/
.wrapper960 {width:<?php echo ($template_width); ?>px;}

@media only screen and (min-width: 960px) and (max-width: <?php echo ($template_width); ?>px) {
.wrapper960 {width:960px !important;}
}

/*--Set Body Color--*/ 
body{background-color:<?php echo ($body_color); ?>;}

/*--Set Background Image--*/ 
<?php if($this->params->get('bg_image_toggle') != '1') : ?>
html{background:none !important;}

<?php elseif($this->params->get('bg_image_toggle') == '1') : ?>
body{background-color: transparent;}
html{
	background: url(<?php echo $this->baseurl ?>/<?php echo $bg_image_file; ?>) no-repeat center fixed;  
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
<?php endif; ?>
/*--End Background Image--*/

/*--Body font size--*/
body{font-size: <?php echo ($body_fontsize); ?>}

/*-------------------------------------------------------------*/
/*----------------------Buttons Styling------------------------*/
/*-------------------------------------------------------------*/
/*--Styles Button Color--*/
.content_vote .btn, .btn.dropdown-toggle, .pager.pagenav a, .pager a, 
.btn-primary, span.content_vote input.btn, .btn,
.input-append .add-on, .input-prepend .add-on,
.btn.active, .btn:active, .btn:hover,.pagination ul,.readmore a.btn{background-color: <?php echo $button_background_color; ?>; border-color: <?php echo $button_background_color; ?>; }

#main span.content_vote input.btn{background-color: <?php echo $button_background_color; ?> !important;}

/*buttons text, icons carets color styling*/
#main a.btn, #main a:hover.btn, button.btn, .pagenav, #main a.pagenav, #main a:hover.pagenav, #main ul.pager li.previous a, #main ul.pager li.next a, i, span.content_vote input.btn, .btn{color: <?php echo $button_text_color; ?> !important;}
.caret{border-top: 4px solid <?php echo $button_text_color; ?> !important;}
#main div#editor-xtd-buttons.btn-toolbar div.btn-toolbar a.btn,span.add-on{color: <?php echo $button_text_color; ?> !important; background-color: <?php echo $button_background_color; ?> !important;}

.dropdown-menu li > a:hover,
.dropdown-menu li > a:focus,
.dropdown-submenu:hover > a {background-color: <?php echo $button_background_color; ?> !important;}

/*--Print/Email Button Group Styling--*/
.btn-group a.btn, .btn-group > .btn, .btn-group > .dropdown-menu{background-color: <?php echo $button_group_background_color; ?> !important; border-color: <?php echo $button_group_background_color; ?> !important;}

/*--Print/Email Button Group icons,caret,text color styling--*/
div.btn-group a.btn i,div.btn-group ul.dropdown-menu li a i, #main div.btn-group ul.dropdown-menu li a, #main div.btn-group ul.dropdown-menu li a:hover{color: <?php echo $button_group_text_color; ?> !important;}
div.btn-group a.btn span.caret{border-top: 4px solid <?php echo $button_group_text_color; ?> !important;}
div.btn-group a.btn span.icon-cog{color: <?php echo $button_group_text_color; ?> !important;}

/*-------------------------------------------------------------*/
/*--------------------End Buttons Styling----------------------*/
/*-------------------------------------------------------------*/

/*--Input Boxes Styling - background color and text color--*/
.form-search input, .form-search textarea, .form-search select, 
.form-search .help-inline, .form-search .uneditable-input, 
.form-search .input-prepend, .form-search .input-append, 
.form-inline input, .form-inline textarea, .form-inline select, 
.form-inline .help-inline, .form-inline .uneditable-input,  
.form-horizontal input, .form-horizontal textarea, 
.form-horizontal select, .form-horizontal .help-inline, 
.form-horizontal .uneditable-input, .form-horizontal .input-prepend, 
.form-horizontal .input-append
{background-color:<?php echo $inputs_background_color; ?> !important; color: <?php echo $inputs_text_color; ?> !important;}


/*--Input Boxes Styling - background color and text color--*/
.form-search input, .form-search textarea, .form-search select, 
.form-search .help-inline, .form-search .uneditable-input, 
.form-search .input-prepend, .form-search .input-append, 
.form-inline input, .form-inline textarea, .form-inline select, 
.form-inline .help-inline, .form-inline .uneditable-input,  
.form-horizontal input, .form-horizontal textarea, 
.form-horizontal select, .form-horizontal .help-inline, 
.form-horizontal .uneditable-input, .form-horizontal .input-prepend, 
.form-horizontal .input-append
{border-color:<?php echo ($maincontent_text_color); ?> !important; }


/*--Tags Styling - background color and text color--*/
div.tags span a.label {background-color: <?php echo $tags_background_color; ?> !important;}
#main div.tags span a.label{color: <?php echo $tags_text_color; ?> !important;}


/*-------------------------------------------------------------*/
/*---------------End Global Parmameters Styling----------------*/
/*-------------------------------------------------------------*/



/*--Load script to convert hex color to rgba--*/ 
<?php include ("convert_rgb.php"); ?>

/*-------------------------------------------------------------*/
/*------------Start Header Block Parmameters Styling-----------*/
/*-------------------------------------------------------------*/
/*--Header Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($header_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

/*--Header container, logo/menu responsive container, container social mobile, Component User Login set color--*/
#container_header.container, #container_logo_menu_mobile, .login_moments, .spacer{
    background-color: <?php echo $header_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $header_container_opacity; ?> );
}

/*--Header Wrapper background color and Opacity setting, logo/menu responsive container, container social mobile set color--*/
<?php
$bgcolorRGB             = hex2RGB($header_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#header.block_holder{
    background-color: <?php echo $header_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $header_wrapper_opacity; ?> );
}


#container_header{
	border-top:3px solid; #<?php echo $header_container_border_color; ?>;
	border-top-color:<?php echo $header_container_border_color; ?>;
}

#header_triangle{
	border-color: <?php echo $header_container_border_color; ?> transparent transparent transparent !important;
}


/*-----------------------Search Styling-------------------------------*/ 
/*--search background color-- */
#search input#mod-search-searchword.inputbox, #mobile_search .inputbox{background-color: <?php echo ($search_bgcolor); ?> !important;}

/*--search text color-- */
#search input#mod-search-searchword.inputbox, #mobile_search .inputbox{color: <?php echo ($search_text_color); ?> !important;}

/*--search box positioning-- */
#search{top: <?php echo ($search_position_top); ?>px}
#search{right: <?php echo ($search_position_right); ?>px}
/*---------------------End Search Styling ----------------------------*/

/*----------------Social Icons Color Styling -----------*/ 
	<?php if($socialicons_style == 'Dark') : ?>

	/*--Social Icons Color light --*/ 
	#social ul li a{background-position: 0px 0px;}

	<?php elseif($socialicons_style == 'Light') : ?>

	/*--Social Icons Color dark--*/ 
	#social ul li a{background-position: 0px -40px;}
	<?php endif; ?>

    /*--Social Icons Background Color--*/
    #social ul li a {background-color:<?php echo ($socialicons_background_color); ?>}
	
/*--------------End Social Icons Styling --------------*/


/*---------------------Header Custom Module Styling------------------------*/ 

/*--header custom module text color-- */
#custom{color: <?php echo ($header_custom_text_color); ?>}

/*--header custom module links colors-- */
#custom a{color: <?php echo ($header_custom_link_color); ?>}
#custom a:hover{color: <?php echo ($header_custom_link_hover_color); ?>}

/*--header custom module positioning-- */
#custom{top: <?php echo ($header_custom_position_top); ?>px}
#custom{left: <?php echo ($header_custom_position_left); ?>px}

/*--------------------End Header Custom Module Styling---------------------*/

/*-------------------------------------------------------------*/
/*------------End Header Block Parmameters Styling-------------*/
/*-------------------------------------------------------------*/


/*-----------------------------------------------------------------*/
/*--------------------------Start Logo Styling---------------------*/
/*-----------------------------------------------------------------*/
/*--Set Logo Image position and locate logo image file--*/ 
#logo{left:<?php echo ($logo_x); ?>%}
#logo{top:<?php echo ($logo_y); ?>%}


#logo{margin-left:-<?php echo ($logo_image_width) / 2; ?>px}
.logo_container{width:<?php echo ($logo_image_width); ?>px}


<?php if($this->params->get('logoimagefile') == '') : ?>
.logoimage a {background: url(<?php echo $defaultlogoimage; ?>) no-repeat; z-index:1;}

<?php elseif($this->params->get('logoimagefile') != '') : ?>
.logoimage a {background: url(<?php echo $this->baseurl ?>/<?php echo $logoimagefile; ?>) no-repeat; z-index:1;}
<?php endif; ?>
/*--End Set Logo Image position and locate logo image file--*/ 

/*--Text Colors for Logo and Slogan--*/ 
h1.logo-text a {color: <?php echo ($logo_font_color); ?> }
p.site-slogan {color: <?php echo ($slogan_font_color); ?> }
/*-----------------------------------------------------------------*/
/*------------------------End Logo Styling-------------------------*/
/*-----------------------------------------------------------------*/


/*-----------------------------------------------------------------*/
/*--------------------------Start Menu Styling---------------------*/
/*-----------------------------------------------------------------*/

/*--Hornav bar color--*/
#hornav {border: 1px solid <?php echo ($hornav_border_color); ?> }
#hornav {background-color:  <?php echo ($hornav_bg_color); ?> }

/*--Hornav text color and hover color--*/
#hornav > ul > li > a {color: <?php echo ($hornav_font_color); ?> }
#hornav > ul > li > a:hover {color: <?php echo ($hornav_hover_text_color); ?>}


/*--Hornav dropdown background color, text color and hover color--*/
#hornav ul ul{background-color: <?php echo ($hornav_ddbackground_color); ?>}
#hornav ul ul li a:active, #hornav ul ul li a:focus, #hornav ul ul li a:hover{background-color: <?php echo ($hornav_ddbackground_color); ?>}

#hornav ul ul li a {color: <?php echo ($hornav_ddtext_color); ?>}
#hornav ul ul li a {border-bottom: 1px dotted <?php echo ($hornav_ddhover_text_color); ?>}
#hornav ul ul li a:active, #hornav ul ul li a:focus, #hornav ul ul li a:hover {color: <?php echo ($hornav_ddhover_text_color); ?>}


/*--Responsive Menu--*/
.slicknav_menu {background-color:  <?php echo ($header_container_color); ?> }
/*-----------------------------------------------------------------*/
/*--------------------------End Menu Styling-----------------------*/
/*-----------------------------------------------------------------*/

/*-----------------------------------------------------------------*/
/*-------------Start Slideshow Block Parmameters Styling-----------*/
/*-----------------------------------------------------------------*/
/*--Set Slideshow Module Block Container Image--*/
<?php if($slideshow_image_toggle == '1') : ?>
#container_slideshow_bg{background: url(<?php echo $this->baseurl ?>/<?php echo $slideshow_bg; ?>) no-repeat fixed;}
<?php endif; ?>


/*--Slideshow full or boxed--*/ 
/*--Set images to full width if fullwidth selected in parameters--*/ 
<?php if($slideshow_full == 'Fullwidth') : ?>
.ari-image-slider-wrapper{min-width: 100%;}
.ari-image-slider{max-height:500px !important;}
#container_slideshow.container .wrapper960{width: 100% !important;}
.nivoSlider {border-radius: 0px 0px 0px 0px !important;}
<?php endif; ?>

/*--Slideshow Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($slideshow_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_slideshow.container{
    background-color: <?php echo $slideshow_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $slideshow_container_opacity; ?> );
}


/*--Slideshow Navigation color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($slideshow_navigation_bgcolor);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

.nivo-controlNavHolder{
    background-color: <?php echo $slideshow_navigation_bgcolor; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $slideshow_navigation_opacity; ?> );
}

/*--Container padding--*/
#container_slideshow.container{padding-top:<?php echo ($slideshow_padding_top); ?>}
#container_slideshow.container{padding-bottom:<?php echo ($slideshow_padding_bottom); ?>}
/*-----------------------------------------------------------------*/
/*--------------End Slideshow Block Parmameters Styling------------*/
/*-----------------------------------------------------------------*/


/*-------------------------------------------------------------*/
/*-------Start Jumbotron Module Block Parmameters Styling------*/
/*-------------------------------------------------------------*/


/*---------------------Jumbotron Custom Module Styling------------------------*/ 

/*--jumbotron custom module text color-- */
#jumbotron{color: <?php echo ($jumbotron_custom_text_color); ?>}

/*--jumbotron custom module links colors-- */
#jumbotron a{color: <?php echo ($jumbotron_custom_link_color); ?>}
#jumbotron a:hover{color: <?php echo ($jumbotron_custom_link_hover_color); ?>}


/*--jumbotron custom module button styling-- */
a.jumbotron-btn{color: <?php echo ($jumbotron_custom_link_color); ?> !important;}

a:hover.jumbotron-btn{background-color: <?php echo ($jumbotron_custom_link_hover_color); ?>}
a:hover.jumbotron-btn{color: <?php echo ($jumbotron_custom_link_color); ?>}

/*--------------------End Jumbotron Custom Module Styling---------------------*/


/*--Set Jumbotron Module Block Container Image--*/
<?php if($jumbotron_image_toggle == '1') : ?>
#container_jumbotron_bg{background: url(<?php echo $this->baseurl ?>/<?php echo $jumbotron_image_file; ?>) no-repeat fixed;}
<?php endif; ?>
/*--End Jumbotron Module Block Container Image--*/

/*--Jumbotron Module Block Color Styling--*/
/*--Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($jumbotron_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_jumbotron.container{
    background-color: <?php echo $jumbotron_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $jumbotron_container_opacity; ?> );
}

/*--Wrapper background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($jumbotron_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#jumbotron.block_holder{
    background-color: <?php echo $jumbotron_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $jumbotron_wrapper_opacity; ?> );
}

/*--Container padding--*/
#container_jumbotron.container{padding-top:<?php echo ($jumbotron_padding_top); ?>}
#container_jumbotron.container{padding-bottom:<?php echo ($jumbotron_padding_bottom); ?>}


/*-------------------------------------------------------------*/
/*---------End Jumbotron Block Parmameters Styling---------*/
/*-------------------------------------------------------------*/


/*-------------------------------------------------------------*/
/*--------Start Top Module Block Parmameters Styling--------*/
/*-------------------------------------------------------------*/
/*--Set Top Module Block Container Image--*/
<?php if($topmodules_image_toggle == '1') : ?>
#container_top_modules_bg{background: url(<?php echo $this->baseurl ?>/<?php echo $topmodules_image_file; ?>) no-repeat fixed;}
<?php endif; ?>
/*--End Top Module Block Container Image--*/

/*--Top Module Block Color Styling--*/
/*--Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($topmodules_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_top_modules.container{
    background-color: <?php echo $topmodules_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $topmodules_container_opacity; ?> );
}

/*--Wrapper background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($topmodules_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#top_modules.block_holder{
    background-color: <?php echo $topmodules_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $topmodules_wrapper_opacity; ?> );
}

/*--Container Text Color--*/
#top_modules{color:<?php echo ($topmodules_text_color); ?> !important; }

/*--Container Link Color--*/
#top_modules a{color:<?php echo ($topmodules_link_color); ?> !important; }

/*--Container Link Hover Color--*/
#top_modules a:hover{color:<?php echo ($topmodules_linkhover_color); ?> !important; }

/*--Container Module Head Color--*/
#top_modules .module h3, #top_modules .module_menu h3{background-color:<?php echo ($topmodules_modulehead_color); ?>; }

/*--Container Module Head Color On/Off--*/
<?php if($topmodules_modulehead_color_onoff != '1') : ?>
#top_modules .module h3, #top_modules .module_menu h3{background-color: transparent !important; }
<?php endif; ?>

/*--Container Module Head Text Color--*/
#top_modules .module h3, #top_modules .module_menu h3{color:<?php echo ($topmodules_moduleheadtext_color); ?> !important; }

/*--Container Menu Link Color--*/
#top_modules .module ul.menu li a, #top_modules .module_menu ul.menu li a{color:<?php echo ($topmodules_menulink_color); ?> !important; }
#top_modules .module ul a, #top_modules .module_menu ul a{border-color:<?php echo ($topmodules_menulink_color); ?> !important; }

/*--Container Menu Link Hover Color--*/
#top_modules .module ul.menu li a:hover, #top_modules .module_menu ul.menu li a:hover{color:<?php echo ($topmodules_menulinkhover_color); ?> !important; }
#top_modules .module ul a:hover, #top_modules .module_menu ul a:hover{border-color:<?php echo ($topmodules_menulinkhover_color); ?> !important; }


/*--Container padding--*/
#container_top_modules.container{padding-top:<?php echo ($topmodules_padding_top); ?>}
#container_top_modules.container{padding-bottom:<?php echo ($topmodules_padding_bottom); ?>}

/*--Module Head padding--*/
#top_modules .module h3, #top_modules .module_menu h3{padding-left:<?php echo ($topmodules_head_padding_left_right); ?>}
#top_modules .module h3, #top_modules .module_menu h3{padding-right:<?php echo ($topmodules_head_padding_left_right); ?>}

/*-------------------------------------------------------------*/
/*---------End top Module Block Parmameters Styling---------*/
/*-------------------------------------------------------------*/


/*-------------------------------------------------------------*/
/*--------Start Main Content Block Parmameters Styling--------*/
/*-------------------------------------------------------------*/
/*--Set Main Content Block Container Image--*/
<?php if($maincontent_image_toggle == '1') : ?>
#container_maincontent_bg{background: url(<?php echo $this->baseurl ?>/<?php echo $maincontent_image_file; ?>) no-repeat fixed;}
<?php endif; ?>
/*--End Main Content Block Container Image--*/

/*--Main Container Block Color Styling--*/
/*--Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($maincontent_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_main.container{
    background-color: <?php echo $maincontent_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $maincontent_container_opacity; ?> );
}

/*--Wrapper background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($maincontent_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#main.block_holder{
    background-color: <?php echo $maincontent_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $maincontent_wrapper_opacity; ?> );
}

/*--Article Title Color--*/ 
#content_full h2, #content_full h2 a:link, #content_full h2 a:visited, #content_full .content_header, #content_full .articleHead, #content_remainder h2, #content_remainder h2 a:link, #content_remainder h2 a:visited, #content_remainder .content_header, #content_remainder .articleHead, .published, .hits, .create{color: <?php echo ($articletitle_font_color); ?> !important;  }

/*--Container Text Color--*/
#main, ul.breadcrumb li span, .list-author, .result-category, .result-text, .result-created, legend, div#slide-contact.accordion div.accordion-group div.accordion-heading {color:<?php echo ($maincontent_text_color); ?> !important; }

/*--Container Link Color--*/
#main a, .module ul.breadcrumb li a, .module_menu ul.breadcrumb li a{color:<?php echo ($maincontent_link_color); ?> !important; }

/*--Container Link Hover Color--*/
#main a:hover{color:<?php echo ($maincontent_linkhover_color); ?> !important; }

/*--Container Module Head Color--*/
#main .module h3, #main .module_menu h3{border-color:<?php echo ($maincontent_modulehead_color); ?>; }

/*--Container Module Head Color On/Off--*/
<?php if($maincontent_modulehead_color_onoff != '1') : ?>
.sidecol_block .module h3, .sidecol_block .module_menu h3, .contenttop .module h3, .contenttop .module_menu h3, .contentbottom .module h3, .contentbottom .module_menu h3{background-color: transparent !important; }
<?php endif; ?>

/*--Container Module Head Text Color--*/
.sidecol_block .module h3, .sidecol_block .module_menu h3, .contenttop .module h3, .contenttop .module_menu h3, .contentbottom .module h3, .contentbottom .module_menu h3{color:<?php echo ($maincontent_moduleheadtext_color); ?> }

/*--Container Menu Link Color--*/
#main .module ul.menu li a, #main .module_menu ul.menu li a{color:<?php echo ($maincontent_menulink_color); ?> !important; }
#main .module ul a, #main .module_menu ul a{border-color:<?php echo ($maincontent_menulink_color); ?> !important; }

/*--Container Menu Link Hover Color--*/
#main .module ul.menu li a:hover, #main .module_menu ul.menu li a:hover{color:<?php echo ($maincontent_menulinkhover_color); ?> !important; }
#main .module ul a:hover, #main .module_menu ul a:hover{border-color:<?php echo ($maincontent_menulinkhover_color); ?> !important; }
#main .module ul a:hover, #main .module_menu ul a:hover{color:<?php echo ($maincontent_menulinkhover_color); ?> !important; }

/*--Container padding--*/
#container_main.container{padding-top:<?php echo ($maincontent_padding_top); ?>}
#container_main.container{padding-bottom:<?php echo ($maincontent_padding_bottom); ?>}

/*--Module Head padding--*/
#main .module h3, #main .module_menu h3{padding-left:<?php echo ($mainmodules_head_padding_left_right); ?>}
#main .module h3, #main .module_menu h3{padding-right:<?php echo ($mainmodules_head_padding_left_right); ?>}

/*--Horizontal rule border color and tables border color--*/
hr, tr, td{border-color:<?php echo ($maincontent_text_color); ?> !important; }

/*--Overrides Styling--*/
/*--component Login form--*/
.login_joomlage{border-color:<?php echo ($maincontent_text_color); ?> !important; }

/*-------------------------------------------------------------*/
/*---------End Main Content Block Parmameters Styling---------*/
/*-------------------------------------------------------------*/



/*-------------------------------------------------------------*/
/*--------Start Bottom Module Block Parmameters Styling--------*/
/*-------------------------------------------------------------*/
/*--Set Bottom Module Block Container Image--*/
<?php if($bottommodules_image_toggle == '1') : ?>
#container_bottom_modules_bg{background: url(<?php echo $this->baseurl ?>/<?php echo $bottommodules_image_file; ?>) no-repeat fixed;}
<?php endif; ?>
/*--End Bottom Module Block Container Image--*/

/*--Bottom Module Block Color Styling--*/
/*--Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($bottommodules_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_bottom_modules.container{
    background-color: <?php echo $bottommodules_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $bottommodules_container_opacity; ?> );
}

/*--Wrapper background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($bottommodules_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#bottom_modules.block_holder{
    background-color: <?php echo $bottommodules_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $bottommodules_wrapper_opacity; ?> );
}

/*--Container Text Color--*/
#bottom_modules{color:<?php echo ($bottommodules_text_color); ?> !important; }

/*--Container Link Color--*/
#bottom_modules a{color:<?php echo ($bottommodules_link_color); ?> !important; }

/*--Container Link Hover Color--*/
#bottom_modules a:hover{color:<?php echo ($bottommodules_linkhover_color); ?> !important; }

/*--Container Module Head Color--*/
#bottom_modules .module h3, #bottom_modules .module_menu h3{border: 1px solid <?php echo ($bottommodules_modulehead_color); ?>; }

/*--Container Module Head Color On/Off--*/
<?php if($bottommodules_modulehead_color_onoff != '1') : ?>
#bottom_modules .module h3, #bottom_modules .module_menu h3{border-color: transparent !important; }
<?php endif; ?>

/*--Container Module Head Text Color--*/
#bottom_modules .module h3, #bottom_modules .module_menu h3{color:<?php echo ($bottommodules_moduleheadtext_color); ?>; }

/*--Container Menu Link Color--*/
#bottom_modules .module ul.menu li a, #bottom_modules .module_menu ul.menu li a{color:<?php echo ($bottommodules_menulink_color); ?> !important; }
#bottom_modules .module ul a, #bottom_modules .module_menu ul a{border-color:<?php echo ($bottommodules_menulink_color); ?> !important; }

/*--Container Menu Link Hover Color--*/
#bottom_modules .module ul.menu li a:hover, #bottom_modules .module_menu ul.menu li a:hover{color:<?php echo ($bottommodules_menulinkhover_color); ?> !important;}
#bottom_modules .module ul a:hover, #bottom_modules .module_menu ul a:hover{border-color:<?php echo ($bottommodules_menulinkhover_color); ?> !important; }

/*--Container padding--*/
#container_bottom_modules.container{padding-top:<?php echo ($bottommodules_padding_top); ?>}
#container_bottom_modules.container{padding-bottom:<?php echo ($bottommodules_padding_bottom); ?>}

/*--Module Head padding--*/
#bottom_modules .module h3, #bottom_modules .module_menu h3{padding-left:<?php echo ($bottommodules_head_padding_left_right); ?>}
#bottom_modules .module h3, #bottom_modules .module_menu h3{padding-right:<?php echo ($bottommodules_head_padding_left_right); ?>}


/*-------------------------------------------------------------*/
/*---------End Bottom Module Block Parmameters Styling---------*/
/*-------------------------------------------------------------*/

/*-------------------------------------------------------------*/
/*--------Start base Module Block Parmameters Styling--------*/
/*-------------------------------------------------------------*/
/*--Set base Module Block Container Image--*/
<?php if($basemodules_image_toggle == '1') : ?>
#container_base_modules_bg{background: url(<?php echo $this->baseurl ?>/<?php echo $basemodules_image_file; ?>) no-repeat fixed;}
<?php endif; ?>
/*--End base Module Block Container Image--*/

/*--base Module Block Color Styling--*/
/*--Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($basemodules_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_base.container{
    background-color: <?php echo $basemodules_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $basemodules_container_opacity; ?> );
}

/*--Wrapper background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($basemodules_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#base.block_holder{
    background-color: <?php echo $basemodules_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $basemodules_wrapper_opacity; ?> );
}

/*--Container Text Color--*/
#base{color:<?php echo ($basemodules_text_color); ?> !important;}

/*--Container Link Color--*/
#base a{color:<?php echo ($basemodules_link_color); ?> !important;}

/*--Container Link Hover Color--*/
#base a:hover{color:<?php echo ($basemodules_linkhover_color); ?> !important; }

/*--Container Module Head Color--*/
#base .module h3, #base .module_menu h3{border-bottom: 1px dashed <?php echo ($basemodules_modulehead_color); ?>; }

/*--Container Module Head Color On/Off--*/
<?php if($basemodules_modulehead_color_onoff != '1') : ?>
#base .module h3, #base .module_menu h3{border-color: transparent !important; }
<?php endif; ?>

/*--Container Module Head Text Color--*/
#base .module h3, #base .module_menu h3{color:<?php echo ($basemodules_moduleheadtext_color); ?>; }

/*--Container Menu Link Color--*/
#base .module ul.menu li a, #base .module_menu ul.menu li a{color:<?php echo ($basemodules_menulink_color); ?> !important; }
#base .module ul a, #base .module_menu ul a{border-color:<?php echo ($basemodules_menulink_color); ?> !important; }

/*--Container Menu Link Hover Color--*/
#base .module ul.menu li a:hover, #base .module_menu ul.menu li a:hover{color:<?php echo ($basemodules_menulinkhover_color); ?> !important;}
#base .module ul a:hover, #base .module_menu ul a:hover{border-color:<?php echo ($basemodules_menulinkhover_color); ?> !important;}

/*--Container padding--*/
#container_base.container{padding-top:<?php echo ($basemodules_padding_top); ?>}
#container_base.container{padding-bottom:<?php echo ($basemodules_padding_bottom); ?>}

/*--Module Head padding--*/
#base .module h3, #base .module_menu h3{padding-left:<?php echo ($basemodules_head_padding_left_right); ?>}
#base .module h3, #base .module_menu h3{padding-right:<?php echo ($basemodules_head_padding_left_right); ?>}

/*-------------------------------------------------------------*/
/*---------End base Module Block Parmameters Styling---------*/
/*-------------------------------------------------------------*/


/*-----------------------------------------------------------------*/
/*--------Start Copright / Footer Block Parmameters Styling--------*/
/*-----------------------------------------------------------------*/

/*--Copright / Footer Block Color Styling--*/
/*--Container background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($copyrightfooter_container_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#container_copyright_footermenu.container{
    background-color: <?php echo $copyrightfooter_container_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $copyrightfooter_container_opacity; ?> );
}

/*--Wrapper background color and Opacity setting--*/
<?php
$bgcolorRGB             = hex2RGB($copyrightfooter_wrapper_color);
$HRed                   = $bgcolorRGB['red'];
$HGreen                 = $bgcolorRGB['green'];
$HBlue                  = $bgcolorRGB['blue'];
?>

#copyright-footermenu.block_holder{
    background-color: <?php echo $copyrightfooter_wrapper_color; ?>;
    background-color: rgba(<?php echo $HRed;?>,<?php echo $HGreen;?>,<?php echo $HBlue;?>, <?php echo $copyrightfooter_wrapper_opacity; ?> );
}

/*--Container Text Color--*/
#copyright-footermenu{color:<?php echo ($copyrightfooter_text_color); ?> !important; }

/*--Container Link Color--*/
#copyright-footermenu a{color:<?php echo ($copyrightfooter_link_color); ?> !important; }

/*--Container Link Hover Color--*/
#copyright-footermenu a:hover{color:<?php echo ($copyrightfooter_linkhover_color); ?> !important; }

/*--Footer Menu Link Color--*/
#footermenu ul li a{color:<?php echo ($footermenu_menulink_color); ?> !important; }
#footermenu ul li a{border-color:<?php echo ($footermenu_menulink_color); ?> !important; }

/*--Footer Menu Link Hover Color--*/
#footermenu ul li a:hover{color:<?php echo ($footermenu_menulinkhover_color); ?> !important;}
#footermenu ul li a:hover{border-color:<?php echo ($footermenu_menulinkhover_color); ?> !important; }

/*--Container padding--*/
#container_copyright_footermenu.container{padding-top:<?php echo ($copyrightfooter_padding_top); ?>}
#container_copyright_footermenu.container{padding-bottom:<?php echo ($copyrightfooter_padding_bottom); ?>}
/*-----------------------------------------------------------------*/
/*--------End Copright / Footer Block Parmameters Styling--------*/
/*-----------------------------------------------------------------*/


/*------------------------------------------------------------------*/
/*----------Start Style Side Column and Content Layout Divs---------*/
/*------------------------------------------------------------------*/
/*--Get Side Column widths from Parameters--*/
#sidecol_a {width: <?php echo ($sidecola_width); ?>% }
#sidecol_b {width: <?php echo ($sidecolb_width); ?>% }

/*--Check and see what modules are toggled on/off then take away columns width, margin and border values from overall width*/
<?php if($this->countModules( 'sidecol-a') >= 1 && $this->countModules('sidecol-b') >= 1) : ?>
#content_remainder {width:<?php echo 100 - ($sidecola_width + $sidecolb_width) ?>% }

<?php elseif($this->countModules('sidecol-a') >= 1 && $this->countModules('sidecol-b') == 0) : ?>
#content_remainder {width:<?php echo 100 - ($sidecola_width) ?>% }

<?php elseif($this->countModules('sidecol-a') == 0 && $this->countModules('sidecol-b') >= 1) : ?>
#content_remainder {width:<?php echo 100 - ($sidecolb_width) ?>% }

<?php endif; ?>

/*Style Side Column A, Side Column B and Content Divs layout*/
<?php if($this->params->get('column_layout') == 'SCOLA-SCOLB-COM') : ?>
	#sidecol_a {float:left;}
	#sidecol_b {float:left;}
	#content_remainder {float:left;}

/*Style Content, Side Column A, Side Column B Divs layout*/	
<?php elseif($this->params->get('column_layout') == 'COM-SCOLA-SCOLB') : ?>
	#content_remainder {float:left;}
	#sidecol_a {float:right;}
	#sidecol_b {float:right;}

/*Style Side Column A, Content, Side Column B Divs layout*/
<?php elseif($this->params->get('column_layout') == 'SCOLA-COM-SCOLB') : ?>  
	#sidecol_a {float:left;}
	#sidecol_b {float:right;}
	#content_remainder {float:left;}
<?php endif; ?>
/*------------------------------------------------------------------*/
/*-----------End Style Side Column and Content Layout Divs----------*/
/*------------------------------------------------------------------*/



/*------------------------------------------------------------------*/
/*----------------------Overrides Color Styling---------------------*/
/*------------------------------------------------------------------*/
.login_moments{border-color:<?php echo $header_container_color; ?> !important;}
/*------------------------------------------------------------------*/
/*--------------------End Overrides Color Styling-------------------*/
/*------------------------------------------------------------------*/


/*--Load Custom Css Styling--*/
<?php echo ($custom_css); ?>
</style>

<?php /*?>----------Start Responsive Layout Styling----------<?php */?>
<?php if($this->params->get('slideshow_modules_switch') != '1') : ?>
   <style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 767px) {#container_slideshow{display:none !important;}}
    </style>
<?php endif; ?>

<?php if($this->params->get('top_modules_switch') != '1') : ?>
   <style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 767px) {#container_top_modules{display:none !important;}}
    </style>
<?php endif; ?>

<?php if($this->params->get('sidecol_a_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 767px) {#sidecol_a{display:none !important;}}
    </style>
<?php endif; ?>

<?php if($this->params->get('sidecol_b_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 767px) {#sidecol_b{display:none !important;}}
    </style>
<?php endif; ?>

<?php if($this->params->get('bottom_modules_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 767px) {#container_bottom_modules{display:none !important}}
    </style>
<?php endif; ?>

<?php if($this->params->get('base_modules_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 767px) {#container_base{display:none !important}}
    </style>
<?php endif; ?>

<?php if($this->params->get('social_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 1024px) {#social{display:none !important;}}
    </style>
<?php endif; ?>

<?php if($this->params->get('search_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) */
    @media only screen and (max-width: 1024px) {#mobile_search{display:none !important;}}
    </style>
<?php endif; ?>

<?php if($this->params->get('social_switch') != '1' && $this->params->get('search_switch') != '1') : ?>
	<style type="text/css">
    /* #Mobile (Landscape) If there is nothing in the social container then do not display it */
    @media only screen and (max-width: 1024px) {#container_social_mobile{display:none !important;}}
    </style>
<?php endif; ?>
<?php /*?>----------End Responsive design Layout----------<?php */?>
<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template?>/css/module-suffix-classes.css" type="text/css" />