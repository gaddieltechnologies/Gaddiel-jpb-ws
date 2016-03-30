<?php
/**
* @version		$Id: mod_audio.php 14401 2010-01-26 14:10:00Z louis $
* @package		HTML5 Simple mp3 Player V2
* @copyright	Copyright (C) 2011-2012 Qubesys Technologies Pvt.Ltd. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/
 
// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' );
$load1 = $params->get('load1');
$jsfiles = $params->get('jsfiles');
$cssfiles = $params->get('cssfiles');
$title = $params->get('title');
$u_id = $params->get('u_id');
$autoplay = $params->get('autoplay');
$loop = $params->get('loop');
$shuffle = $params->get('shuffle');
$continuouslyPlayOnAllPages = $params->get('continuouslyPlayOnAllPages');
$show_playlist = $params->get('show_playlist');

$style_with_playlist = $params->get('style_with_playlist');
$style_without_playlist = $params->get('style_without_playlist');
$audio_title = $params->get('audio_title');
$audio_author = $params->get('audio_author');

$audio_mp3 = $params->get('audio_mp3');
$audio_ogg = $params->get('audio_ogg');

$height_player = $params->get('height_player');

require JModuleHelper::getLayoutPath( 'mod_audio' );
?>