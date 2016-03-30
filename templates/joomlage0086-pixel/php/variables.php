<?php
defined( '_JEXEC' ) or die( 'Restricted index access' );

$path = $this->baseurl.'/templates/'.$this->template;
$app = JFactory::getApplication();

//factory
$document	 = JFactory::getDocument();

//General
$app->getCfg('sitename');
$siteName = $this->params->get('siteName');
$templateparams	= $app->getTemplate(true)->params;

//****** Global styling ******//
//Template width
$template_width = $this->params->get('template_width');

//Body styling
$bg_image_toggle = $this->params->get('bg_image_toggle');
$bg_image_file = $this->params->get('bg_image_file');
$body_color = $this->params->get('body_color');

$body_pattern_overlay_toggle = $this->params->get('body_pattern_overlay_toggle');
$body_pattern_overlay = $this->params->get('body_pattern_overlay');

//Wrapper Border Color
$wrapper_border_color = $this->params->get('wrapper_border_color');
$wrapper_border_radius = $this->params->get('wrapper_border_radius');

//Block Holder Padding
$blockholder_padding = $this->params->get('blockholder_padding');

//Font Link & Color Styling
$articletitle_font_color = $this->params->get('articletitle_font_color');
$modulehead_font_color = $this->params->get('modulehead_font_color');
$hornav_font_color = $this->params->get('hornav_font_color');
$hornav_link_color = $this->params->get('hornav_link_color');
$hornav_hover_color = $this->params->get('hornav_hover_color');
$hornav_hover_text_color = $this->params->get('hornav_hover_text_color');
$hornav_border_color = $this->params->get('hornav_border_color');
$hornav_bg_color = $this->params->get('hornav_bg_color');

$hornav_droplink_color = $this->params->get('hornav_droplink_color');
$hornav_ddbackground_color = $this->params->get('hornav_ddbackground_color');
$hornav_ddtext_color = $this->params->get('hornav_ddtext_color');
$hornav_ddhover_text_color = $this->params->get('hornav_ddhover_text_color');

$logo_font_color = $this->params->get('logo_font_color');
$slogan_link_color = $this->params->get('slogan_link_color');

$content_link_color = $this->params->get('content_link_color');
$content_link_hover_color = $this->params->get('content_link_hover_color');

//Font Face Styling
$body_fontsize = $this->params->get('body_fontsize');
$body_fontstyle = $this->params->get('body_fontstyle');
$articlehead_fontstyle = $this->params->get('articlehead_fontstyle');
$modulehead_fontstyle = $this->params->get('modulehead_fontstyle');
$hornav_fontstyle = $this->params->get('hornav_fontstyle');
$logo_fontstyle = $this->params->get('logo_fontstyle');

//******** Buttons Styling *******//
//Single Button Styling
$button_background_color = $this->params->get('button_background_color');
$button_text_color = $this->params->get('button_text_color');

//Email/Print Button Group Styling
$button_group_background_color = $this->params->get('button_group_background_color');
$button_group_text_color = $this->params->get('button_group_text_color');
//****** End Buttons Styling ******//

//Inputs Styling
$inputs_background_color = $this->params->get('inputs_background_color');
$inputs_text_color = $this->params->get('inputs_text_color');

//Tags Styling
$tags_background_color = $this->params->get('tags_background_color');
$tags_text_color = $this->params->get('tags_text_color');

//****** End Global styling ******//



//****** Hornav Menu Styling ******//
//Top Menu styling
$renderer = $document->loadRenderer( 'module' );
$module     = JModuleHelper::getModule( 'mod_menu', "top_menu" );
$menu_name = $this->params->get("top_menu", "mainmenu");
$module->params    = "menutype=$menu_name\nendLevel=1";
$topmenu = $renderer->render( $module);
$topmenu_onoff = $this->params->get('topmenu_onoff');

//Hornav Menu styling
$renderer = $document->loadRenderer( 'module' );
$module     = JModuleHelper::getModule( 'mod_menu', "hornav_menu" );
$menu_name = $this->params->get("hornav_menu", "mainmenu");
$module->params    = "menutype=$menu_name\nshowAllChildren=1\ntag_id=moomenu";
$hornav = $renderer->render( $module);
$hornav_font_color = $this->params->get('hornav_font_color');
$hornav_ddbackground_color = $this->params->get('hornav_ddbackground_color');
$hornav_bar_color = $this->params->get('hornav_bar_color');


//******** Logo and slogan styling ********//
$logo_x = $this->params->get('logo_x');
$logo_y = $this->params->get('logo_y');
$logo_image_width = $this->params->get('logo_image_width');
$logoimagefile = $this->params->get('logoimagefile');
$defaultlogoimage = "templates/<?php echo $this->template?>/images/logo.png";
$logo_font_color = $this->params->get('logo_font_color');
$slogan_font_color = $this->params->get('slogan_font_color');
//****** End Logo and slogan styling ******//


//****** Header styling ******//
$header_container_color = $this->params->get('header_container_color');
$header_container_opacity = $this->params->get('header_container_opacity');
$header_wrapper_color = $this->params->get('header_wrapper_color');
$header_wrapper_opacity = $this->params->get('header_wrapper_opacity');
$header_custom_position_left = $this->params->get('header_custom_position_left');
$header_custom_position_top = $this->params->get('header_custom_position_top');
$header_custom_text_color = $this->params->get('header_custom_text_color');
$header_custom_link_color = $this->params->get('header_custom_link_color');
$header_custom_link_hover_color = $this->params->get('header_custom_link_hover_color');
$header_blockholder_margins_lr = $this->params->get('header_blockholder_margins_lr');
$header_container_border_color = $this->params->get('header_container_border_color');

//Search Module
$search_onoff = $this->params->get('search_onoff');
$module	 = JModuleHelper::getModule( 'mod_search' );
$search = $renderer->render( $module);

//Search Styling
$search_bgcolor = $this->params->get('search_bgcolor');
$search_text_color = $this->params->get('search_text_color');
$search_position_right = $this->params->get('search_position_right');
$search_position_top = $this->params->get('search_position_top');

//Social Icons
$socialicons_style = $this->params->get('socialicons_style');
$socialicons_background_color = $this->params->get('socialicons_background_color');
//****** End Header styling ******//

//****** Slideshow Styling ******//
$slideshow_full = $this->params->get('slideshow_full');
$slideshow_container_color = $this->params->get('slideshow_container_color');
$slideshow_container_opacity = $this->params->get('slideshow_container_opacity');
$slideshow_wrapper_color = $this->params->get('slideshow_wrapper_color');
$slideshow_wrapper_opacity = $this->params->get('slideshow_wrapper_opacity');
$slideshow_padding_top = $this->params->get('slideshow_padding_top');
$slideshow_padding_bottom = $this->params->get('slideshow_padding_bottom');
$slideshow_image_toggle = $this->params->get('slideshow_image_toggle');
$slideshow_bg = $this->params->get('slideshow_bg');
$slideshow_navigation_opacity = $this->params->get('slideshow_navigation_opacity');
$slideshow_navigation_bgcolor = $this->params->get('slideshow_navigation_bgcolor');
//****** End Slideshow Styling ******//

//****** Jumbotron Block Styling ******//
$jumbotron_image_toggle = $this->params->get('jumbotron_image_toggle');
$jumbotron_image_file = $this->params->get('jumbotron_image_file');

$jumbotron_container_color = $this->params->get('jumbotron_container_color');
$jumbotron_container_opacity = $this->params->get('jumbotron_container_opacity');

$jumbotron_wrapper_color = $this->params->get('jumbotron_wrapper_color');
$jumbotron_wrapper_opacity = $this->params->get('jumbotron_wrapper_opacity');

$jumbotron_padding_top = $this->params->get('jumbotron_padding_top');
$jumbotron_padding_bottom = $this->params->get('jumbotron_padding_bottom');

$jumbotron_custom_text_color = $this->params->get('jumbotron_custom_text_color');
$jumbotron_custom_link_color = $this->params->get('jumbotron_custom_link_color');
$jumbotron_custom_link_hover_color = $this->params->get('jumbotron_custom_link_hover_color');

//****** End Jumbotron Block Styling ******//


//****** Top Module Block Styling ******//
$topmodules_image_toggle = $this->params->get('topmodules_image_toggle');
$topmodules_image_file = $this->params->get('topmodules_image_file');

$topmodules_container_color = $this->params->get('topmodules_container_color');
$topmodules_container_opacity = $this->params->get('topmodules_container_opacity');

$topmodules_wrapper_color = $this->params->get('topmodules_wrapper_color');
$topmodules_wrapper_opacity = $this->params->get('topmodules_wrapper_opacity');

$topmodules_text_color = $this->params->get('topmodules_text_color');
$topmodules_link_color = $this->params->get('topmodules_link_color');
$topmodules_linkhover_color = $this->params->get('topmodules_linkhover_color');

$topmodules_modulehead_color = $this->params->get('topmodules_modulehead_color');
$topmodules_moduleheadtext_color = $this->params->get('topmodules_moduleheadtext_color');
$topmodules_modulehead_color_onoff = $this->params->get('topmodules_modulehead_color_onoff');

$topmodules_menulink_color = $this->params->get('topmodules_menulink_color');
$topmodules_menulinkhover_color = $this->params->get('topmodules_menulinkhover_color');

$topmodules_padding_top = $this->params->get('topmodules_padding_top');
$topmodules_padding_bottom = $this->params->get('topmodules_padding_bottom');

$topmodules_head_padding_left_right = $this->params->get('topmodules_head_padding_left_right');
//****** End Top Module Block Styling ******//

//****** Main Content / Sidebars Block Styling ******//
$maincontent_image_toggle = $this->params->get('maincontent_image_toggle');
$maincontent_image_file = $this->params->get('maincontent_image_file');

$maincontent_container_color = $this->params->get('maincontent_container_color');
$maincontent_container_opacity = $this->params->get('maincontent_container_opacity');

$maincontent_wrapper_color = $this->params->get('maincontent_wrapper_color');
$maincontent_wrapper_opacity = $this->params->get('maincontent_wrapper_opacity');

$maincontent_text_color = $this->params->get('maincontent_text_color');
$maincontent_link_color = $this->params->get('maincontent_link_color');
$maincontent_linkhover_color = $this->params->get('maincontent_linkhover_color');

$maincontent_modulehead_color = $this->params->get('maincontent_modulehead_color');
$maincontent_moduleheadtext_color = $this->params->get('maincontent_moduleheadtext_color');
$maincontent_modulehead_color_onoff = $this->params->get('maincontent_modulehead_color_onoff');

$maincontent_menulink_color = $this->params->get('maincontent_menulink_color');
$maincontent_menulinkhover_color = $this->params->get('maincontent_menulinkhover_color');

$maincontent_padding_top = $this->params->get('maincontent_padding_top');
$maincontent_padding_bottom = $this->params->get('maincontent_padding_bottom');

$mainmodules_head_padding_left_right = $this->params->get('mainmodules_head_padding_left_right');
//****** End Main Content / Sidebars Block Styling ******//

//****** Bottom Module Block Styling ******//
$bottommodules_image_toggle = $this->params->get('bottommodules_image_toggle');
$bottommodules_image_file = $this->params->get('bottommodules_image_file');

$bottommodules_container_color = $this->params->get('bottommodules_container_color');
$bottommodules_container_opacity = $this->params->get('bottommodules_container_opacity');

$bottommodules_wrapper_color = $this->params->get('bottommodules_wrapper_color');
$bottommodules_wrapper_opacity = $this->params->get('bottommodules_wrapper_opacity');

$bottommodules_text_color = $this->params->get('bottommodules_text_color');
$bottommodules_link_color = $this->params->get('bottommodules_link_color');
$bottommodules_linkhover_color = $this->params->get('bottommodules_linkhover_color');

$bottommodules_modulehead_color = $this->params->get('bottommodules_modulehead_color');
$bottommodules_moduleheadtext_color = $this->params->get('bottommodules_moduleheadtext_color');
$bottommodules_modulehead_color_onoff = $this->params->get('bottommodules_modulehead_color_onoff');

$bottommodules_menulink_color = $this->params->get('bottommodules_menulink_color');
$bottommodules_menulinkhover_color = $this->params->get('bottommodules_menulinkhover_color');

$bottommodules_padding_top = $this->params->get('bottommodules_padding_top');
$bottommodules_padding_bottom = $this->params->get('bottommodules_padding_bottom');

$bottommodules_head_padding_left_right = $this->params->get('bottommodules_head_padding_left_right');
//****** End Bottom Module Block Styling ******//

//****** base Module Block Styling ******//
$basemodules_image_toggle = $this->params->get('basemodules_image_toggle');
$basemodules_image_file = $this->params->get('basemodules_image_file');

$basemodules_container_color = $this->params->get('basemodules_container_color');
$basemodules_container_opacity = $this->params->get('basemodules_container_opacity');

$basemodules_wrapper_color = $this->params->get('basemodules_wrapper_color');
$basemodules_wrapper_opacity = $this->params->get('basemodules_wrapper_opacity');

$basemodules_text_color = $this->params->get('basemodules_text_color');
$basemodules_link_color = $this->params->get('basemodules_link_color');
$basemodules_linkhover_color = $this->params->get('basemodules_linkhover_color');

$basemodules_modulehead_color = $this->params->get('basemodules_modulehead_color');
$basemodules_moduleheadtext_color = $this->params->get('basemodules_moduleheadtext_color');
$basemodules_modulehead_color_onoff = $this->params->get('basemodules_modulehead_color_onoff');

$basemodules_menulink_color = $this->params->get('basemodules_menulink_color');
$basemodules_menulinkhover_color = $this->params->get('basemodules_menulinkhover_color');

$basemodules_padding_top = $this->params->get('basemodules_padding_top');
$basemodules_padding_bottom = $this->params->get('basemodules_padding_bottom');

$basemodules_head_padding_left_right = $this->params->get('basemodules_head_padding_left_right');
//****** End base Module Block Styling ******//

//********** Layout styling **********//
$sidecola_width = $this->params->get('sidecola_width');
$sidecolb_width = $this->params->get('sidecolb_width');
$column_layout = $this->params->get('column_layout');
//******** End Layout styling ********//

//****** Modules Layout Styling ******//
//Top1 Module manual widths
$top1_auto = $this->params->get('top1_auto');
$top_1a_manual = $this->params->get('top_1a_manual');
$top_1b_manual = $this->params->get('top_1b_manual');
$top_1c_manual = $this->params->get('top_1c_manual');
$top_1d_manual = $this->params->get('top_1d_manual');
$top_1e_manual = $this->params->get('top_1e_manual');
$top_1f_manual = $this->params->get('top_1f_manual');

//Top2 Module manual widths
$top2_auto = $this->params->get('top2_auto');
$top_2a_manual = $this->params->get('top_2a_manual');
$top_2b_manual = $this->params->get('top_2b_manual');
$top_2c_manual = $this->params->get('top_2c_manual');
$top_2d_manual = $this->params->get('top_2d_manual');
$top_2e_manual = $this->params->get('top_2e_manual');
$top_2f_manual = $this->params->get('top_2f_manual');

//ContentTop Module manual widths
$contenttop_auto = $this->params->get('contenttop_auto');
$contenttop_a_manual = $this->params->get('contenttop_a_manual');
$contenttop_b_manual = $this->params->get('contenttop_b_manual');
$contenttop_c_manual = $this->params->get('contenttop_c_manual');

//ContentBottom Module manual widths
$contentbottom_auto = $this->params->get('contentbottom_auto');
$contentbottom_a_manual = $this->params->get('contentbottom_a_manual');
$contentbottom_b_manual = $this->params->get('contentbottom_b_manual');
$contentbottom_c_manual = $this->params->get('contentbottom_c_manual');

//Bottom1 Module manual widths
$bottom1_auto = $this->params->get('bottom1_auto');
$bottom_1a_manual = $this->params->get('bottom_1a_manual');
$bottom_1b_manual = $this->params->get('bottom_1b_manual');
$bottom_1c_manual = $this->params->get('bottom_1c_manual');
$bottom_1d_manual = $this->params->get('bottom_1d_manual');
$bottom_1e_manual = $this->params->get('bottom_1e_manual');
$bottom_1f_manual = $this->params->get('bottom_1f_manual');

//Bottom2 Module manual widths
$bottom2_auto = $this->params->get('bottom2_auto');
$bottom_2a_manual = $this->params->get('bottom_2a_manual');
$bottom_2b_manual = $this->params->get('bottom_2b_manual');
$bottom_2c_manual = $this->params->get('bottom_2c_manual');
$bottom_2d_manual = $this->params->get('bottom_2d_manual');
$bottom_2e_manual = $this->params->get('bottom_2e_manual');
$bottom_2f_manual = $this->params->get('bottom_2f_manual');

//Base1 Module manual widths
$base1_auto = $this->params->get('base1_auto');
$base_1a_manual = $this->params->get('base_1a_manual');
$base_1b_manual = $this->params->get('base_1b_manual');
$base_1c_manual = $this->params->get('base_1c_manual');
$base_1d_manual = $this->params->get('base_1d_manual');
$base_1e_manual = $this->params->get('base_1e_manual');
$base_1f_manual = $this->params->get('base_1f_manual');

//Base2 Module manual widths
$base2_auto = $this->params->get('base2_auto');
$base_2a_manual = $this->params->get('base_2a_manual');
$base_2b_manual = $this->params->get('base_2b_manual');
$base_2c_manual = $this->params->get('base_2c_manual');
$base_2d_manual = $this->params->get('base_2d_manual');
$base_2e_manual = $this->params->get('base_2e_manual');
$base_2f_manual = $this->params->get('base_2f_manual');
//****** End Modules Layout Styling ******//

//Custom Css
$custom_css = $this->params->get('custom_css');

//Head Custom Code
$head_custom_code = $this->params->get('head_custom_code');

//Body Custom Code
$body_custom_code = $this->params->get('body_custom_code');

//************ Copy/Footer Menu Block Styling ************//
$copyrightfooter_container_color = $this->params->get('copyrightfooter_container_color');
$copyrightfooter_container_opacity = $this->params->get('copyrightfooter_container_opacity');

$copyrightfooter_wrapper_color = $this->params->get('copyrightfooter_wrapper_color');
$copyrightfooter_wrapper_opacity = $this->params->get('copyrightfooter_wrapper_opacity');

$copyrightfooter_text_color = $this->params->get('copyrightfooter_text_color');
$copyrightfooter_link_color = $this->params->get('copyrightfooter_link_color');
$copyrightfooter_linkhover_color = $this->params->get('copyrightfooter_linkhover_color');

$footermenu_menulink_color = $this->params->get('footermenu_menulink_color');
$footermenu_menulinkhover_color = $this->params->get('footermenu_menulinkhover_color');

$copyrightfooter_padding_top = $this->params->get('copyrightfooter_padding_top');
$copyrightfooter_padding_bottom = $this->params->get('copyrightfooter_padding_bottom');

//Footer Menu styling
$renderer = $document->loadRenderer( 'module' );
$module     = JModuleHelper::getModule( 'mod_menu', "footer_menu" );
$menu_name = $this->params->get("footer_menu", "mainmenu");
$module->params    = "menutype=$menu_name\nendLevel=1";
$footermenu = $renderer->render( $module);
$footermenu_onoff = $this->params->get('footermenu_onoff');
//********* End Copy/Footer Menu Block Styling **********//

//************ Responsive Design ************//
//Mobile Devices
$splashimage_mobile = $this->params->get('splashimage_mobile');
$logo_mobile = $this->params->get('logo_mobile');
//********** End Responsive Design **********//

?>