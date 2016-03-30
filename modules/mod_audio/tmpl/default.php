<?php
/**
* @version		$Id: mod_audio.php 14401 2010-01-26 14:10:00Z louis $
* @package		HTML5 Simple mp3 Player V2
* @copyright	Copyright (C) 2011-2012 Qubesys Technologies Pvt.Ltd. All rights reserved.
* @license		http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
*/
 
// no direct access

defined( '_JEXEC' ) or die( 'Restricted access' ); 
$base_url=JURI::base();


?>

<?php if($cssfiles==1) { ?>

	<link rel="stylesheet" type="text/css" href="<?php echo $base_url;?>modules/mod_audio/tmpl/css/audio1_html5.css" />
	

<?php } ?>


    <?php if($jsfiles==1) { ?>
    <?php if($load1==1) { ?>
	<script type="text/javascript" src="<?php echo $base_url;?>modules/mod_audio/tmpl/js/jquery.min.js"></script>
	<?php } ?>
	<script type="text/javascript" src="<?php echo $base_url;?>modules/mod_audio/tmpl/js/jquery-ui.min.js"></script>

	
	<script type="text/javascript" src="<?php echo $base_url;?>modules/mod_audio/tmpl/js/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="<?php echo $base_url;?>modules/mod_audio/tmpl/js/jquery.touchSwipe.min.js"></script>
	
	<script type="text/javascript" src="<?php echo $base_url;?>modules/mod_audio/tmpl/js/audio1_html5.js"></script>
	<?php } ?>
	<style>
      #mep_0{display:none !important;}
	.audio1_html5.blackControllers{height:<?php echo $height_player; ?>px !important;}
	.thumbsHolderWrapper{top:64px !important;}
	</style>
	<script>
		jQuery(function() {

			jQuery('#audio1_html5_white<?php echo $u_id; ?>').audio1_html5({
				
				playerPadding:5,
				<?php if($show_playlist==1) { ?>
				showPlaylist:true,
				<?php } else {  ?>
				showPlaylist:false,
				<?php  } if($autoplay==1) { ?>
				autoPlay:true,
				<?php } else {  ?>
				autoPlay:false,
				<?php } ?>
				<?php   if($loop==1) { ?>
				loop:true,
				<?php } else {  ?>
				loop:false,
				<?php } ?>
				<?php   if($shuffle==1) { ?>
				shuffle:true,
				<?php } else {  ?>
				shuffle:false,
				<?php } ?>
				<?php   if($continuouslyPlayOnAllPages==1) { ?>
				continuouslyPlayOnAllPages:true,
				<?php } else {  ?>
				continuouslyPlayOnAllPages:false,
				<?php } ?>
				<?php if($style_with_playlist==1 && $show_playlist==1) { ?>
				skin: 'blackControllers',
				playerBg: '#FFFFFF',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000',
				showPlaylist:true,				
				playlistBgColor:'#ffffff',
				playlistRecordBgOffColor:'#ffffff',
				playlistRecordBgOnColor:'#c9c9c9',
				playlistRecordBottomBorderOffColor:'#838383',
				playlistRecordBottomBorderOnColor:'#000000',
				playlistRecordTextOffColor:'#838383',
				playlistRecordTextOnColor:'#000000'	
				<?php } if($style_with_playlist==2 && $show_playlist==1) { ?>
				skin: 'whiteControllers',
				playerBg: '#c18855',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000',
								
				playlistBgColor:'#c18855',
				playlistRecordBgOffColor:'#c18855',
				playlistRecordBgOnColor:'#8b4e29',
				playlistRecordBottomBorderOffColor:'#8b4e29',
				playlistRecordBottomBorderOnColor:'#000000',
				playlistRecordTextOffColor:'#333333',
				playlistRecordTextOnColor:'#FFFFFF'	
                <?php } if($style_with_playlist==3 && $show_playlist==1) { ?>
				skin: 'whiteControllers',
		       <?php } if($style_with_playlist==4 && $show_playlist==1) { ?>
			   skin: 'whiteControllers',
			   showPlaylistNumber:false,
								
				playerBg: '#4a96d9',
				bufferEmptyColor: '#929292',
				bufferFullColor: '#afafaf',
				seekbarColor: '#FF0000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#FF0000',
				timerColor: '#FFFFFF',
				songAuthorTitleColor: '#FFFFFF',
								
				playlistBgColor:'#4a96d9',
				playlistRecordBgOffColor:'#4a96d9',
				playlistRecordBgOnColor:'#c9c9c9',
				playlistRecordBottomBorderOffColor:'#a8a8a8',
				playlistRecordBottomBorderOnColor:'#FF0000',
				playlistRecordTextOffColor:'#c9c9c9',
				playlistRecordTextOnColor:'#000000'
				<?php } if($style_without_playlist==1 && $show_playlist==0) { ?>
				skin: 'blackControllers',
				playerBg: '#FFFFFF',
				showPlaylistBut:false,
				showPlaylist:false,
				bufferEmptyColor: '#d5d5d5', //'#6e6e6e',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000'
				<?php } if($style_without_playlist==2 && $show_playlist==0) { ?>
				skin: 'whiteControllers',
				playerBg: '#ffb04d',
				showPlaylist:false,
				showPlaylistBut:false,
				bufferEmptyColor: '#d5d5d5', //'#6e6e6e',
				bufferFullColor: '#000000',
				seekbarColor: '#FF0000',
				volumeOffColor: '#000000',
				volumeOnColor: '#FF0000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000'
                <?php } if($style_without_playlist==3 && $show_playlist==0) { ?>
                skin: 'whiteControllers',				
                showRewindBut:false,
				showPlaylistBut:false,
				
				showTitle:false,
				showPlaylist:false
               	<?php } if($style_without_playlist==4 && $show_playlist==0) { ?>
				skin: 'blackControllers',
                showRewindBut:false,
				showPlaylistBut:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false,
				

				playerBg: '#FFFFFF',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000',
								
				playlistBgColor:'#ffffff',
				playlistRecordBgOffColor:'#ffffff',
				playlistRecordBgOnColor:'#c9c9c9',
				playlistRecordBottomBorderOffColor:'#838383',
				playlistRecordBottomBorderOnColor:'#000000',
				playlistRecordTextOffColor:'#838383',
				playlistRecordTextOnColor:'#000000'
                <?php } if($style_without_playlist==5 && $show_playlist==0) { ?>
                skin: 'whiteControllers',				
                showRewindBut:false,
				showPlaylistBut:false,
				showTimer:false,
				showAuthor:false,
				showPlaylist:false
                <?php } if($style_without_playlist==6 && $show_playlist==0) { ?>
                skin: 'blackControllers',				
                showRewindBut:false,
				showPlaylistBut:false,
				showTimer:false,
				showPlaylist:false,
				

				playerBg: '#FFFFFF',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000',
								
				playlistBgColor:'#ffffff',
				playlistRecordBgOffColor:'#ffffff',
				playlistRecordBgOnColor:'#c9c9c9',
				playlistRecordBottomBorderOffColor:'#838383',
				playlistRecordBottomBorderOnColor:'#000000',
				playlistRecordTextOffColor:'#838383',
				playlistRecordTextOnColor:'#000000'
                <?php } if($style_without_playlist==7 && $show_playlist==0) { ?>
                skin: 'whiteControllers',				
                showRewindBut:false,
				showPreviousBut:false,
				showNextBut:false,
				showPlaylistBut:false,
				showVolumeSliderBut:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false	
                <?php } if($style_without_playlist==8 && $show_playlist==0) { ?>
                skin: 'blackControllers',				
                showRewindBut:false,
				showPreviousBut:false,
				showNextBut:false,
				showPlaylistBut:false,
				showVolumeSliderBut:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false,
				

				playerBg: '#FFFFFF',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000',
								
				playlistBgColor:'#ffffff',
				playlistRecordBgOffColor:'#ffffff',
				playlistRecordBgOnColor:'#c9c9c9',
				playlistRecordBottomBorderOffColor:'#838383',
				playlistRecordBottomBorderOnColor:'#000000',
				playlistRecordTextOffColor:'#838383',
				playlistRecordTextOnColor:'#000000'	
                <?php } if($style_without_playlist==9 && $show_playlist==0) { ?>
				skin: 'whiteControllers',
                showRewindBut:false,
				showPreviousBut:false,
				showNextBut:false,
				showPlaylistBut:false,
				showVolumeBut:false,
				showVolumeSliderBut:false,
				showSeekBar:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false,
				timerColor: '#7d7d7d'
                <?php } if($style_without_playlist==10 && $show_playlist==0) { ?>
				skin: 'blackControllers',
                showRewindBut:false,
				showPreviousBut:false,
				showNextBut:false,
				showPlaylistBut:false,
				showVolumeBut:false,
				showVolumeSliderBut:false,
				showSeekBar:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false,
				

				playerBg: '#FFFFFF',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000',
								
				playlistBgColor:'#ffffff',
				playlistRecordBgOffColor:'#ffffff',
				playlistRecordBgOnColor:'#c9c9c9',
				playlistRecordBottomBorderOffColor:'#838383',
				playlistRecordBottomBorderOnColor:'#000000',
				playlistRecordTextOffColor:'#838383',
				playlistRecordTextOnColor:'#000000'
                <?php } if($style_without_playlist==11 && $show_playlist==0) { ?>
				skin: 'whiteControllers',
                showRewindBut:false,
				showPreviousBut:false,
				showNextBut:false,
				showPlaylistBut:false,
				showVolumeBut:false,
				showVolumeSliderBut:false,
				showTimer:false,
				showSeekBar:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false,
                <?php } if($style_without_playlist==12 && $show_playlist==0) { ?>
				skin: 'blackControllers',
                showRewindBut:false,
				showPreviousBut:false,
				showNextBut:false,
				showPlaylistBut:false,
				showVolumeBut:false,
				showVolumeSliderBut:false,
				showTimer:false,
				showSeekBar:false,
				showAuthor:false,
				showTitle:false,
				showPlaylist:false,
				

				playerBg: '#FFFFFF',
				bufferEmptyColor: '#d5d5d5',
				bufferFullColor: '#afafaf',
				seekbarColor: '#000000',
				volumeOffColor: '#afafaf',
				volumeOnColor: '#000000',
				timerColor: '#000000',
				songAuthorTitleColor: '#000000'
                <?php } if($style_without_playlist==13 && $show_playlist==0) { ?>
				skin: 'whiteControllers',
                showPlaylistBut:false
                <?php } if($style_without_playlist==14 && $show_playlist==0) { ?>
				skin: 'whiteControllers',
                playerBg: '#9d9d9d',
				showPlaylistBut:false,
				showPlaylist:false,
				bufferEmptyColor: '#929292',
				bufferFullColor: '#ff0000',
				seekbarColor: '#FFFFFF',
				volumeOffColor: '#ff0000',
				volumeOnColor: '#FFFFFF',
				timerColor: '#FFFFFF',
				songAuthorTitleColor: '#FFFFFF'
                <?php } ?>				
			});		
			
			
		});
	</script>

 <h2><?php echo $title; ?></h2>
	 <div class="audio1_html5">
            <audio id="audio1_html5_white<?php echo $u_id; ?>" preload="metadata">
                  <div class="xaudioplaylist">
				  <?php
			          $audio_title1 = explode("\n",$audio_title);
			          $audio_author1= explode("\n",$audio_author);
			          
			          $audio_mp31 = explode("\n",$audio_mp3);
			          $audio_ogg1 = explode("\n",$audio_ogg);
			          for ($i=0;$i<count($audio_title1);$i++) {
			      		?>
                      <ul>
                          <li class="xtitle"><?php echo $audio_title1[$i];?></li>
                          <li class="xauthor"><?php echo $audio_author1[$i];?></li>
                          
                          <li class="xsources_mp3"><?php echo $audio_mp31[$i];?></li>
                          <li class="xsources_ogg"><?php echo $audio_ogg1[$i];?></li>
                      </ul>                 
                  
                      <?php } ?>
                                                                                    
                  </div>
                  
            </audio>     
     </div>             
     <div class="clearBoth"></div>