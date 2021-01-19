<?php

/* This file is part of Jeedom.
 *
 * Jeedom is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jeedom is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jeedom. If not, see <http://www.gnu.org/licenses/>.
 */

/* * ***************************Includes********************************* */
require_once __DIR__ . '/../../../../core/php/core.inc.php';

class moodeaudio extends eqLogic
{
	/*     * *************************Attributs****************************** */

    /*
     * Permet de définir les possibilités de personnalisation du widget (en cas d'utilisation de la fonction 'toHtml' par exemple)
     * Tableau multidimensionnel - exemple: array('custom' => true, 'custom::layout' => false)
     public static $_widgetPossibility = array();
     */

     /*     * ***********************Methode static*************************** */


     // Fonction exécutée automatiquement toutes les minutes par Jeedom
  
  
 
  
    
    public function  moodeaudio_mute()
  {
    
    log::add('moodeaudio', 'info', ' ');
     	log::add('moodeaudio', 'info', ' --------INIT Moode Audio Stop-----------');
     	log::add('moodeaudio', 'info', ' ');
        
     	$URL_param = $this->getConfiguration('URL_param');
    
     	log::add('moodeaudio', 'info', '-----SET UP URL----------');
               
     	$api = "http://".$URL_param."/command";
          
     	log::add('moodeaudio', 'info', 'Api : ' . $api);
        log::add('moodeaudio', 'info', '-----EXECUTION STOP COMMAND ----------');
    

$dataArray = array("cmd"=>'mute');
$ch = curl_init();
$data = http_build_query($dataArray);
$getUrl = $api."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	
  log::add('moodeaudio', 'info', 'Request Error:' . curl_error($ch));
}
else
{
  log::add('moodeaudio', 'info', 'URL:' . $getUrl);
  log::add('moodeaudio', 'info', 'Success:' . $response);
	
}
      curl_close($ch);
          
  }
      
        public function  moodeaudio_volume_up()
  {
    
    log::add('moodeaudio', 'info', ' ');
     	log::add('moodeaudio', 'info', ' --------INIT Moode Audio Stop-----------');
     	log::add('moodeaudio', 'info', ' ');
        
     	$URL_param = $this->getConfiguration('URL_param');
    
     	log::add('moodeaudio', 'info', '-----SET UP URL----------');
               
     	$api = "http://".$URL_param."/command";
          
     	log::add('moodeaudio', 'info', 'Api : ' . $api);
        log::add('moodeaudio', 'info', '-----EXECUTION STOP COMMAND ----------');
    

$dataArray = array("cmd"=>'vol.sh up 10');
$ch = curl_init();
$data = http_build_query($dataArray);
$getUrl = $api."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	
  log::add('moodeaudio', 'info', 'Request Error:' . curl_error($ch));
}
else
{
  log::add('moodeaudio', 'info', 'URL:' . $getUrl);
  log::add('moodeaudio', 'info', 'Success:' . $response);
	
}
 
curl_close($ch);
          
  }
  
  
  public function  moodeaudio_volume_down()
  {
    
    log::add('moodeaudio', 'info', ' ');
     	log::add('moodeaudio', 'info', ' --------INIT Moode Audio Stop-----------');
     	log::add('moodeaudio', 'info', ' ');
        
     	$URL_param = $this->getConfiguration('URL_param');
    
     	log::add('moodeaudio', 'info', '-----SET UP URL----------');
               
     	$api = "http://".$URL_param."/command";
          
     	log::add('moodeaudio', 'info', 'Api : ' . $api);
        log::add('moodeaudio', 'info', '-----EXECUTION STOP COMMAND ----------');
    

$dataArray = array("cmd"=>'vol.sh dn 10');
$ch = curl_init();
$data = http_build_query($dataArray);
$getUrl = $api."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	
  log::add('moodeaudio', 'info', 'Request Error:' . curl_error($ch));
}
else
{
  log::add('moodeaudio', 'info', 'URL:' . $getUrl);
  log::add('moodeaudio', 'info', 'Success:' . $response);
	
}
 
curl_close($ch);
          
  }
    
    
    
  public function moodeaudio_play()
  {
    
    log::add('moodeaudio', 'info', ' ');
     	log::add('moodeaudio', 'info', ' --------INIT Moode Audio Stop-----------');
     	log::add('moodeaudio', 'info', ' ');
        
     	$URL_param = $this->getConfiguration('URL_param');
    
     	log::add('moodeaudio', 'info', '-----SET UP URL----------');
               
     	$api = "http://".$URL_param."/command";
          
     	log::add('moodeaudio', 'info', 'Api : ' . $api);
        log::add('moodeaudio', 'info', '-----EXECUTION STOP COMMAND ----------');
    

$dataArray = array("cmd"=>'play');
$ch = curl_init();
$data = http_build_query($dataArray);
$getUrl = $api."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	
  log::add('moodeaudio', 'info', 'Request Error:' . curl_error($ch));
}
else
{
  log::add('moodeaudio', 'info', 'URL:' . $getUrl);
  log::add('moodeaudio', 'info', 'Success:' . $response);
	
}
 
curl_close($ch);
          
  }
  
  public function moodeaudio_stop()
  {
    
        log::add('moodeaudio', 'info', ' ');
     	log::add('moodeaudio', 'info', ' --------INIT Moode Audio Stop-----------');
     	log::add('moodeaudio', 'info', ' ');
        

     	$URL_param = $this->getConfiguration('URL_param');
    

     	log::add('moodeaudio', 'info', '-----SET UP URL----------');
                
     	$api = "http://".$URL_param."/command";
                
     	log::add('moodeaudio', 'info', 'Api : ' . $api);
    
    log::add('moodeaudio', 'info', '-----EXECUTION STOP COMMAND ----------');
    

$dataArray = array("cmd"=>'stop');
$ch = curl_init();
$data = http_build_query($dataArray);
$getUrl = $api."?".$data;
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $getUrl);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);
 
if(curl_error($ch)){
	
  log::add('moodeaudio', 'info', 'Request Error:' . curl_error($ch));
}
else
{
  log::add('moodeaudio', 'info', 'URL:' . $getUrl);
  log::add('moodeaudio', 'info', 'Success:' . $response);
	
}
 
curl_close($ch);

    
    /*
    http://moode/command?cmd=play
http://moode/command?cmd=next
http://moode/command?cmd=stop
http://moode/command?cmd=vol.sh up 1
http://moode/command?cmd=vol.sh dn 1
http://moode/command?cmd=vol.sh mute
http://moode/command?cmd=vol.sh 25
  */
  }
  
  
  public function moodeaudio_collect()
     {
     	log::add('moodeaudio', 'info', ' ');
     	log::add('moodeaudio', 'info', ' --------INIT Moode Audio plugin-----------');
     	log::add('moodeaudio', 'info', ' ');
        

     	$URL_param = $this->getConfiguration('URL_param');
    

     	log::add('moodeaudio', 'info', '-----SET UP----------');
                
     	$api = "http://".$URL_param . "/command/moode.php?cmd=readcfgsystem";
                
     	log::add('moodeaudio', 'info', 'Api : ' . $api);


     	$json = file_get_contents($api);

     	log::add('moodeaudio', 'info', '-----RAW----------');
     	log::add('moodeaudio', 'info', 'RAW : ' . $json);
     	log::add('moodeaudio', 'info', '');
                
     	$jsonData = json_decode($json, true);
     	log::add('moodeaudio', 'info', '-----DECODE-----');
     	log::add('moodeaudio', 'info', '');
        
        if (is_array($jsonData)) {
         log::add('moodeaudio', 'info', '-----IMPORT SUCCESS-----');
         log::add('moodeaudio', 'info', '');



         log::add('moodeaudio', 'info', 'sessionid         : ' . $jsonData['sessionid']);
log::add('moodeaudio', 'info', 'timezone         : ' . $jsonData['timezone']);
log::add('moodeaudio', 'info', 'i2sdevice         : ' . $jsonData['i2sdevice']);
log::add('moodeaudio', 'info', 'hostname         : ' . $jsonData['hostname']);
log::add('moodeaudio', 'info', 'browsertitle         : ' . $jsonData['browsertitle']);
log::add('moodeaudio', 'info', 'airplayname         : ' . $jsonData['airplayname']);
log::add('moodeaudio', 'info', 'upnpname         : ' . $jsonData['upnpname']);
log::add('moodeaudio', 'info', 'dlnaname         : ' . $jsonData['dlnaname']);
log::add('moodeaudio', 'info', 'airplaysvc         : ' . $jsonData['airplaysvc']);
log::add('moodeaudio', 'info', 'upnpsvc         : ' . $jsonData['upnpsvc']);
log::add('moodeaudio', 'info', 'dlnasvc         : ' . $jsonData['dlnasvc']);
log::add('moodeaudio', 'info', 'maxusbcurrent         : ' . $jsonData['maxusbcurrent']);
log::add('moodeaudio', 'info', 'rotaryenc         : ' . $jsonData['rotaryenc']);
log::add('moodeaudio', 'info', 'autoplay         : ' . $jsonData['autoplay']);
log::add('moodeaudio', 'info', 'kernelver         : ' . $jsonData['kernelver']);
log::add('moodeaudio', 'info', 'mpdver         : ' . $jsonData['mpdver']);
log::add('moodeaudio', 'info', 'procarch         : ' . $jsonData['procarch']);
log::add('moodeaudio', 'info', 'adevname         : ' . $jsonData['adevname']);
log::add('moodeaudio', 'info', 'clkradio_mode         : ' . $jsonData['clkradio_mode']);
log::add('moodeaudio', 'info', 'clkradio_item         : ' . $jsonData['clkradio_item']);
log::add('moodeaudio', 'info', 'clkradio_name         : ' . $jsonData['clkradio_name']);
log::add('moodeaudio', 'info', 'clkradio_start         : ' . $jsonData['clkradio_start']);
log::add('moodeaudio', 'info', 'clkradio_stop         : ' . $jsonData['clkradio_stop']);
log::add('moodeaudio', 'info', 'clkradio_volume         : ' . $jsonData['clkradio_volume']);
log::add('moodeaudio', 'info', 'clkradio_action         : ' . $jsonData['clkradio_action']);
log::add('moodeaudio', 'info', 'playhist         : ' . $jsonData['playhist']);
log::add('moodeaudio', 'info', 'phistsong         : ' . $jsonData['phistsong']);
log::add('moodeaudio', 'info', 'library_utf8rep         : ' . $jsonData['library_utf8rep']);
log::add('moodeaudio', 'info', 'current_view         : ' . $jsonData['current_view']);
log::add('moodeaudio', 'info', 'timecountup         : ' . $jsonData['timecountup']);
log::add('moodeaudio', 'info', 'accent_color         : ' . $jsonData['accent_color']);
log::add('moodeaudio', 'info', 'volknob         : ' . $jsonData['volknob']);
log::add('moodeaudio', 'info', 'volmute         : ' . $jsonData['volmute']);
log::add('moodeaudio', 'info', 'alsavolume_max         : ' . $jsonData['alsavolume_max']);
log::add('moodeaudio', 'info', 'alsavolume         : ' . $jsonData['alsavolume']);
log::add('moodeaudio', 'info', 'amixname         : ' . $jsonData['amixname']);
log::add('moodeaudio', 'info', 'mpdmixer         : ' . $jsonData['mpdmixer']);
log::add('moodeaudio', 'info', 'extra_tags         : ' . $jsonData['extra_tags']);
log::add('moodeaudio', 'info', 'rsmafterapl         : ' . $jsonData['rsmafterapl']);
log::add('moodeaudio', 'info', 'lcdup         : ' . $jsonData['lcdup']);
log::add('moodeaudio', 'info', 'library_show_genres         : ' . $jsonData['library_show_genres']);
log::add('moodeaudio', 'info', 'extmeta         : ' . $jsonData['extmeta']);
log::add('moodeaudio', 'info', 'maint_interval         : ' . $jsonData['maint_interval']);
log::add('moodeaudio', 'info', 'hdwrrev         : ' . $jsonData['hdwrrev']);
log::add('moodeaudio', 'info', 'crossfeed         : ' . $jsonData['crossfeed']);
log::add('moodeaudio', 'info', 'bluez_pcm_buffer         : ' . $jsonData['bluez_pcm_buffer']);
log::add('moodeaudio', 'info', 'upnp_browser         : ' . $jsonData['upnp_browser']);
log::add('moodeaudio', 'info', 'library_instant_play         : ' . $jsonData['library_instant_play']);
log::add('moodeaudio', 'info', 'radio_pos         : ' . $jsonData['radio_pos']);
log::add('moodeaudio', 'info', 'airplayactv         : ' . $jsonData['airplayactv']);
log::add('moodeaudio', 'info', 'debuglog         : ' . $jsonData['debuglog']);
log::add('moodeaudio', 'info', 'ashufflesvc         : ' . $jsonData['ashufflesvc']);
log::add('moodeaudio', 'info', 'ashuffle         : ' . $jsonData['ashuffle']);
log::add('moodeaudio', 'info', 'AVAILABLE         : ' . $jsonData['AVAILABLE']);
log::add('moodeaudio', 'info', 'uac2fix         : ' . $jsonData['uac2fix']);
log::add('moodeaudio', 'info', 'keyboard         : ' . $jsonData['keyboard']);
log::add('moodeaudio', 'info', 'localui         : ' . $jsonData['localui']);
log::add('moodeaudio', 'info', 'toggle_songid         : ' . $jsonData['toggle_songid']);
log::add('moodeaudio', 'info', 'slsvc         : ' . $jsonData['slsvc']);
log::add('moodeaudio', 'info', 'hdmiport         : ' . $jsonData['hdmiport']);
log::add('moodeaudio', 'info', 'cpugov         : ' . $jsonData['cpugov']);
log::add('moodeaudio', 'info', 'pairing_agent         : ' . $jsonData['pairing_agent']);
log::add('moodeaudio', 'info', 'pkgid_suffix         : ' . $jsonData['pkgid_suffix']);
log::add('moodeaudio', 'info', 'lib_pos         : ' . $jsonData['lib_pos']);
log::add('moodeaudio', 'info', 'mpdcrossfade         : ' . $jsonData['mpdcrossfade']);
log::add('moodeaudio', 'info', 'eth0chk         : ' . $jsonData['eth0chk']);
log::add('moodeaudio', 'info', 'usb_auto_mounter         : ' . $jsonData['usb_auto_mounter']);
log::add('moodeaudio', 'info', 'rsmafterbt         : ' . $jsonData['rsmafterbt']);
log::add('moodeaudio', 'info', 'rotenc_params         : ' . $jsonData['rotenc_params']);
log::add('moodeaudio', 'info', 'shellinabox         : ' . $jsonData['shellinabox']);
log::add('moodeaudio', 'info', 'alsaequal         : ' . $jsonData['alsaequal']);
log::add('moodeaudio', 'info', 'eqfa12p         : ' . $jsonData['eqfa12p']);
log::add('moodeaudio', 'info', 'p3wifi         : ' . $jsonData['p3wifi']);
log::add('moodeaudio', 'info', 'p3bt         : ' . $jsonData['p3bt']);
log::add('moodeaudio', 'info', 'cardnum         : ' . $jsonData['cardnum']);
log::add('moodeaudio', 'info', 'btsvc         : ' . $jsonData['btsvc']);
log::add('moodeaudio', 'info', 'btname         : ' . $jsonData['btname']);
log::add('moodeaudio', 'info', 'btmulti         : ' . $jsonData['btmulti']);
log::add('moodeaudio', 'info', 'feat_bitmask         : ' . $jsonData['feat_bitmask']);
log::add('moodeaudio', 'info', 'library_recently_added         : ' . $jsonData['library_recently_added']);
log::add('moodeaudio', 'info', 'btactive         : ' . $jsonData['btactive']);
log::add('moodeaudio', 'info', 'touchscn         : ' . $jsonData['touchscn']);
log::add('moodeaudio', 'info', 'scnblank         : ' . $jsonData['scnblank']);
log::add('moodeaudio', 'info', 'scnrotate         : ' . $jsonData['scnrotate']);
log::add('moodeaudio', 'info', 'scnbrightness         : ' . $jsonData['scnbrightness']);
log::add('moodeaudio', 'info', 'themename         : ' . $jsonData['themename']);
log::add('moodeaudio', 'info', 'res_software_upd_url         : ' . $jsonData['res_software_upd_url']);
log::add('moodeaudio', 'info', 'alphablend         : ' . $jsonData['alphablend']);
log::add('moodeaudio', 'info', 'adaptive         : ' . $jsonData['adaptive']);
log::add('moodeaudio', 'info', 'audioout         : ' . $jsonData['audioout']);
log::add('moodeaudio', 'info', 'audioin         : ' . $jsonData['audioin']);
log::add('moodeaudio', 'info', 'slactive         : ' . $jsonData['slactive']);
log::add('moodeaudio', 'info', 'rsmaftersl         : ' . $jsonData['rsmaftersl']);
log::add('moodeaudio', 'info', 'mpdmixer_local         : ' . $jsonData['mpdmixer_local']);
log::add('moodeaudio', 'info', 'wrkready         : ' . $jsonData['wrkready']);
log::add('moodeaudio', 'info', 'scnsaver_timeout         : ' . $jsonData['scnsaver_timeout']);
log::add('moodeaudio', 'info', 'pixel_aspect_ratio         : ' . $jsonData['pixel_aspect_ratio']);
log::add('moodeaudio', 'info', 'favorites_name         : ' . $jsonData['favorites_name']);
log::add('moodeaudio', 'info', 'spotifysvc         : ' . $jsonData['spotifysvc']);
log::add('moodeaudio', 'info', 'spotifyname         : ' . $jsonData['spotifyname']);
log::add('moodeaudio', 'info', 'spotactive         : ' . $jsonData['spotactive']);
log::add('moodeaudio', 'info', 'rsmafterspot         : ' . $jsonData['rsmafterspot']);
log::add('moodeaudio', 'info', 'library_covsearchpri         : ' . $jsonData['library_covsearchpri']);
log::add('moodeaudio', 'info', 'library_hiresthm         : ' . $jsonData['library_hiresthm']);
log::add('moodeaudio', 'info', 'library_pixelratio         : ' . $jsonData['library_pixelratio']);
log::add('moodeaudio', 'info', 'usb_auto_updatedb         : ' . $jsonData['usb_auto_updatedb']);
log::add('moodeaudio', 'info', 'cover_backdrop         : ' . $jsonData['cover_backdrop']);
log::add('moodeaudio', 'info', 'cover_blur         : ' . $jsonData['cover_blur']);
log::add('moodeaudio', 'info', 'cover_scale         : ' . $jsonData['cover_scale']);
log::add('moodeaudio', 'info', 'library_tagview_artist         : ' . $jsonData['library_tagview_artist']);
log::add('moodeaudio', 'info', 'scnsaver_style         : ' . $jsonData['scnsaver_style']);
log::add('moodeaudio', 'info', 'ashuffle_filter         : ' . $jsonData['ashuffle_filter']);
log::add('moodeaudio', 'info', 'mpd_httpd         : ' . $jsonData['mpd_httpd']);
log::add('moodeaudio', 'info', 'mpd_httpd_port         : ' . $jsonData['mpd_httpd_port']);
log::add('moodeaudio', 'info', 'mpd_httpd_encoder         : ' . $jsonData['mpd_httpd_encoder']);
log::add('moodeaudio', 'info', 'invert_polarity         : ' . $jsonData['invert_polarity']);
log::add('moodeaudio', 'info', 'inpactive         : ' . $jsonData['inpactive']);
log::add('moodeaudio', 'info', 'rsmafterinp         : ' . $jsonData['rsmafterinp']);
log::add('moodeaudio', 'info', 'gpio_svc         : ' . $jsonData['gpio_svc']);
log::add('moodeaudio', 'info', 'library_ignore_articles         : ' . $jsonData['library_ignore_articles']);
log::add('moodeaudio', 'info', 'volknob_mpd         : ' . $jsonData['volknob_mpd']);
log::add('moodeaudio', 'info', 'volknob_preamp         : ' . $jsonData['volknob_preamp']);
log::add('moodeaudio', 'info', 'library_albumview_sort         : ' . $jsonData['library_albumview_sort']);
log::add('moodeaudio', 'info', 'kernel_architecture         : ' . $jsonData['kernel_architecture']);
log::add('moodeaudio', 'info', 'wake_display         : ' . $jsonData['wake_display']);
log::add('moodeaudio', 'info', 'usb_volknob         : ' . $jsonData['usb_volknob']);
log::add('moodeaudio', 'info', 'led_state         : ' . $jsonData['led_state']);
log::add('moodeaudio', 'info', 'library_tagview_covers         : ' . $jsonData['library_tagview_covers']);
log::add('moodeaudio', 'info', 'library_tagview_sort         : ' . $jsonData['library_tagview_sort']);
log::add('moodeaudio', 'info', 'library_ellipsis_limited_text         : ' . $jsonData['library_ellipsis_limited_text']);
log::add('moodeaudio', 'info', 'preferences_modal_state         : ' . $jsonData['preferences_modal_state']);
log::add('moodeaudio', 'info', 'font_size         : ' . $jsonData['font_size']);
log::add('moodeaudio', 'info', 'volume_step_limit         : ' . $jsonData['volume_step_limit']);
log::add('moodeaudio', 'info', 'volume_mpd_max         : ' . $jsonData['volume_mpd_max']);
log::add('moodeaudio', 'info', 'library_thumbnail_columns         : ' . $jsonData['library_thumbnail_columns']);
log::add('moodeaudio', 'info', 'library_encoded_at         : ' . $jsonData['library_encoded_at']);
log::add('moodeaudio', 'info', 'first_use_help         : ' . $jsonData['first_use_help']);
log::add('moodeaudio', 'info', 'playlist_art         : ' . $jsonData['playlist_art']);
log::add('moodeaudio', 'info', 'ashuffle_mode         : ' . $jsonData['ashuffle_mode']);
log::add('moodeaudio', 'info', 'radioview_sort_group         : ' . $jsonData['radioview_sort_group']);
log::add('moodeaudio', 'info', 'radioview_show_hide         : ' . $jsonData['radioview_show_hide']);
log::add('moodeaudio', 'info', 'renderer_backdrop         : ' . $jsonData['renderer_backdrop']);
log::add('moodeaudio', 'info', 'library_flatlist_filter         : ' . $jsonData['library_flatlist_filter']);
log::add('moodeaudio', 'info', 'library_flatlist_filter_str         : ' . $jsonData['library_flatlist_filter_str']);
log::add('moodeaudio', 'info', 'library_misc_options         : ' . $jsonData['library_misc_options']);
log::add('moodeaudio', 'info', 'recorder_status         : ' . $jsonData['recorder_status']);
log::add('moodeaudio', 'info', 'recorder_storage         : ' . $jsonData['recorder_storage']);
log::add('moodeaudio', 'info', 'volume_db_display         : ' . $jsonData['volume_db_display']);
log::add('moodeaudio', 'info', 'search_site         : ' . $jsonData['search_site']);
log::add('moodeaudio', 'info', 'raspbianver         : ' . $jsonData['raspbianver']);
log::add('moodeaudio', 'info', 'ipaddress         : ' . $jsonData['ipaddress']);
log::add('moodeaudio', 'info', 'bgimage         : ' . $jsonData['bgimage']);



$this->checkAndUpdateCmd('sessionid',$jsonData['sessionid']);
$this->checkAndUpdateCmd('timezone',$jsonData['timezone']);
$this->checkAndUpdateCmd('i2sdevice',$jsonData['i2sdevice']);
$this->checkAndUpdateCmd('hostname',$jsonData['hostname']);
$this->checkAndUpdateCmd('browsertitle',$jsonData['browsertitle']);
$this->checkAndUpdateCmd('airplayname',$jsonData['airplayname']);
$this->checkAndUpdateCmd('upnpname',$jsonData['upnpname']);
$this->checkAndUpdateCmd('dlnaname',$jsonData['dlnaname']);
$this->checkAndUpdateCmd('airplaysvc',$jsonData['airplaysvc']);
$this->checkAndUpdateCmd('upnpsvc',$jsonData['upnpsvc']);
$this->checkAndUpdateCmd('dlnasvc',$jsonData['dlnasvc']);
$this->checkAndUpdateCmd('maxusbcurrent',$jsonData['maxusbcurrent']);
$this->checkAndUpdateCmd('rotaryenc',$jsonData['rotaryenc']);
$this->checkAndUpdateCmd('autoplay',$jsonData['autoplay']);
$this->checkAndUpdateCmd('kernelver',$jsonData['kernelver']);
$this->checkAndUpdateCmd('mpdver',$jsonData['mpdver']);
$this->checkAndUpdateCmd('procarch',$jsonData['procarch']);
$this->checkAndUpdateCmd('adevname',$jsonData['adevname']);
$this->checkAndUpdateCmd('clkradio_mode',$jsonData['clkradio_mode']);
$this->checkAndUpdateCmd('clkradio_item',$jsonData['clkradio_item']);
$this->checkAndUpdateCmd('clkradio_name',$jsonData['clkradio_name']);
$this->checkAndUpdateCmd('clkradio_start',$jsonData['clkradio_start']);
$this->checkAndUpdateCmd('clkradio_stop',$jsonData['clkradio_stop']);
$this->checkAndUpdateCmd('clkradio_volume',$jsonData['clkradio_volume']);
$this->checkAndUpdateCmd('clkradio_action',$jsonData['clkradio_action']);
$this->checkAndUpdateCmd('playhist',$jsonData['playhist']);
$this->checkAndUpdateCmd('phistsong',$jsonData['phistsong']);
$this->checkAndUpdateCmd('library_utf8rep',$jsonData['library_utf8rep']);
$this->checkAndUpdateCmd('current_view',$jsonData['current_view']);
$this->checkAndUpdateCmd('timecountup',$jsonData['timecountup']);
$this->checkAndUpdateCmd('accent_color',$jsonData['accent_color']);
$this->checkAndUpdateCmd('volknob',$jsonData['volknob']);
$this->checkAndUpdateCmd('volmute',$jsonData['volmute']);
$this->checkAndUpdateCmd('alsavolume_max',$jsonData['alsavolume_max']);
$this->checkAndUpdateCmd('alsavolume',$jsonData['alsavolume']);
$this->checkAndUpdateCmd('amixname',$jsonData['amixname']);
$this->checkAndUpdateCmd('mpdmixer',$jsonData['mpdmixer']);
$this->checkAndUpdateCmd('extra_tags',$jsonData['extra_tags']);
$this->checkAndUpdateCmd('rsmafterapl',$jsonData['rsmafterapl']);
$this->checkAndUpdateCmd('lcdup',$jsonData['lcdup']);
$this->checkAndUpdateCmd('library_show_genres',$jsonData['library_show_genres']);
$this->checkAndUpdateCmd('extmeta',$jsonData['extmeta']);
$this->checkAndUpdateCmd('maint_interval',$jsonData['maint_interval']);
$this->checkAndUpdateCmd('hdwrrev',$jsonData['hdwrrev']);
$this->checkAndUpdateCmd('crossfeed',$jsonData['crossfeed']);
$this->checkAndUpdateCmd('bluez_pcm_buffer',$jsonData['bluez_pcm_buffer']);
$this->checkAndUpdateCmd('upnp_browser',$jsonData['upnp_browser']);
$this->checkAndUpdateCmd('library_instant_play',$jsonData['library_instant_play']);
$this->checkAndUpdateCmd('radio_pos',$jsonData['radio_pos']);
$this->checkAndUpdateCmd('airplayactv',$jsonData['airplayactv']);
$this->checkAndUpdateCmd('debuglog',$jsonData['debuglog']);
$this->checkAndUpdateCmd('ashufflesvc',$jsonData['ashufflesvc']);
$this->checkAndUpdateCmd('ashuffle',$jsonData['ashuffle']);
$this->checkAndUpdateCmd('AVAILABLE',$jsonData['AVAILABLE']);
$this->checkAndUpdateCmd('uac2fix',$jsonData['uac2fix']);
$this->checkAndUpdateCmd('keyboard',$jsonData['keyboard']);
$this->checkAndUpdateCmd('localui',$jsonData['localui']);
$this->checkAndUpdateCmd('toggle_songid',$jsonData['toggle_songid']);
$this->checkAndUpdateCmd('slsvc',$jsonData['slsvc']);
$this->checkAndUpdateCmd('hdmiport',$jsonData['hdmiport']);
$this->checkAndUpdateCmd('cpugov',$jsonData['cpugov']);
$this->checkAndUpdateCmd('pairing_agent',$jsonData['pairing_agent']);
$this->checkAndUpdateCmd('pkgid_suffix',$jsonData['pkgid_suffix']);
$this->checkAndUpdateCmd('lib_pos',$jsonData['lib_pos']);
$this->checkAndUpdateCmd('mpdcrossfade',$jsonData['mpdcrossfade']);
$this->checkAndUpdateCmd('eth0chk',$jsonData['eth0chk']);
$this->checkAndUpdateCmd('usb_auto_mounter',$jsonData['usb_auto_mounter']);
$this->checkAndUpdateCmd('rsmafterbt',$jsonData['rsmafterbt']);
$this->checkAndUpdateCmd('rotenc_params',$jsonData['rotenc_params']);
$this->checkAndUpdateCmd('shellinabox',$jsonData['shellinabox']);
$this->checkAndUpdateCmd('alsaequal',$jsonData['alsaequal']);
$this->checkAndUpdateCmd('eqfa12p',$jsonData['eqfa12p']);
$this->checkAndUpdateCmd('p3wifi',$jsonData['p3wifi']);
$this->checkAndUpdateCmd('p3bt',$jsonData['p3bt']);
$this->checkAndUpdateCmd('cardnum',$jsonData['cardnum']);
$this->checkAndUpdateCmd('btsvc',$jsonData['btsvc']);
$this->checkAndUpdateCmd('btname',$jsonData['btname']);
$this->checkAndUpdateCmd('btmulti',$jsonData['btmulti']);
$this->checkAndUpdateCmd('feat_bitmask',$jsonData['feat_bitmask']);
$this->checkAndUpdateCmd('library_recently_added',$jsonData['library_recently_added']);
$this->checkAndUpdateCmd('btactive',$jsonData['btactive']);
$this->checkAndUpdateCmd('touchscn',$jsonData['touchscn']);
$this->checkAndUpdateCmd('scnblank',$jsonData['scnblank']);
$this->checkAndUpdateCmd('scnrotate',$jsonData['scnrotate']);
$this->checkAndUpdateCmd('scnbrightness',$jsonData['scnbrightness']);
$this->checkAndUpdateCmd('themename',$jsonData['themename']);
$this->checkAndUpdateCmd('res_software_upd_url',$jsonData['res_software_upd_url']);
$this->checkAndUpdateCmd('alphablend',$jsonData['alphablend']);
$this->checkAndUpdateCmd('adaptive',$jsonData['adaptive']);
$this->checkAndUpdateCmd('audioout',$jsonData['audioout']);
$this->checkAndUpdateCmd('audioin',$jsonData['audioin']);
$this->checkAndUpdateCmd('slactive',$jsonData['slactive']);
$this->checkAndUpdateCmd('rsmaftersl',$jsonData['rsmaftersl']);
$this->checkAndUpdateCmd('mpdmixer_local',$jsonData['mpdmixer_local']);
$this->checkAndUpdateCmd('wrkready',$jsonData['wrkready']);
$this->checkAndUpdateCmd('scnsaver_timeout',$jsonData['scnsaver_timeout']);
$this->checkAndUpdateCmd('pixel_aspect_ratio',$jsonData['pixel_aspect_ratio']);
$this->checkAndUpdateCmd('favorites_name',$jsonData['favorites_name']);
$this->checkAndUpdateCmd('spotifysvc',$jsonData['spotifysvc']);
$this->checkAndUpdateCmd('spotifyname',$jsonData['spotifyname']);
$this->checkAndUpdateCmd('spotactive',$jsonData['spotactive']);
$this->checkAndUpdateCmd('rsmafterspot',$jsonData['rsmafterspot']);
$this->checkAndUpdateCmd('library_covsearchpri',$jsonData['library_covsearchpri']);
$this->checkAndUpdateCmd('library_hiresthm',$jsonData['library_hiresthm']);
$this->checkAndUpdateCmd('library_pixelratio',$jsonData['library_pixelratio']);
$this->checkAndUpdateCmd('usb_auto_updatedb',$jsonData['usb_auto_updatedb']);
$this->checkAndUpdateCmd('cover_backdrop',$jsonData['cover_backdrop']);
$this->checkAndUpdateCmd('cover_blur',$jsonData['cover_blur']);
$this->checkAndUpdateCmd('cover_scale',$jsonData['cover_scale']);
$this->checkAndUpdateCmd('library_tagview_artist',$jsonData['library_tagview_artist']);
$this->checkAndUpdateCmd('scnsaver_style',$jsonData['scnsaver_style']);
$this->checkAndUpdateCmd('ashuffle_filter',$jsonData['ashuffle_filter']);
$this->checkAndUpdateCmd('mpd_httpd',$jsonData['mpd_httpd']);
$this->checkAndUpdateCmd('mpd_httpd_port',$jsonData['mpd_httpd_port']);
$this->checkAndUpdateCmd('mpd_httpd_encoder',$jsonData['mpd_httpd_encoder']);
$this->checkAndUpdateCmd('invert_polarity',$jsonData['invert_polarity']);
$this->checkAndUpdateCmd('inpactive',$jsonData['inpactive']);
$this->checkAndUpdateCmd('rsmafterinp',$jsonData['rsmafterinp']);
$this->checkAndUpdateCmd('gpio_svc',$jsonData['gpio_svc']);
$this->checkAndUpdateCmd('library_ignore_articles',$jsonData['library_ignore_articles']);
$this->checkAndUpdateCmd('volknob_mpd',$jsonData['volknob_mpd']);
$this->checkAndUpdateCmd('volknob_preamp',$jsonData['volknob_preamp']);
$this->checkAndUpdateCmd('library_albumview_sort',$jsonData['library_albumview_sort']);
$this->checkAndUpdateCmd('kernel_architecture',$jsonData['kernel_architecture']);
$this->checkAndUpdateCmd('wake_display',$jsonData['wake_display']);
$this->checkAndUpdateCmd('usb_volknob',$jsonData['usb_volknob']);
$this->checkAndUpdateCmd('led_state',$jsonData['led_state']);
$this->checkAndUpdateCmd('library_tagview_covers',$jsonData['library_tagview_covers']);
$this->checkAndUpdateCmd('library_tagview_sort',$jsonData['library_tagview_sort']);
$this->checkAndUpdateCmd('library_ellipsis_limited_text',$jsonData['library_ellipsis_limited_text']);
$this->checkAndUpdateCmd('preferences_modal_state',$jsonData['preferences_modal_state']);
$this->checkAndUpdateCmd('font_size',$jsonData['font_size']);
$this->checkAndUpdateCmd('volume_step_limit',$jsonData['volume_step_limit']);
$this->checkAndUpdateCmd('volume_mpd_max',$jsonData['volume_mpd_max']);
$this->checkAndUpdateCmd('library_thumbnail_columns',$jsonData['library_thumbnail_columns']);
$this->checkAndUpdateCmd('library_encoded_at',$jsonData['library_encoded_at']);
$this->checkAndUpdateCmd('first_use_help',$jsonData['first_use_help']);
$this->checkAndUpdateCmd('playlist_art',$jsonData['playlist_art']);
$this->checkAndUpdateCmd('ashuffle_mode',$jsonData['ashuffle_mode']);
$this->checkAndUpdateCmd('radioview_sort_group',$jsonData['radioview_sort_group']);
$this->checkAndUpdateCmd('radioview_show_hide',$jsonData['radioview_show_hide']);
$this->checkAndUpdateCmd('renderer_backdrop',$jsonData['renderer_backdrop']);
$this->checkAndUpdateCmd('library_flatlist_filter',$jsonData['library_flatlist_filter']);
$this->checkAndUpdateCmd('library_flatlist_filter_str',$jsonData['library_flatlist_filter_str']);
$this->checkAndUpdateCmd('library_misc_options',$jsonData['library_misc_options']);
$this->checkAndUpdateCmd('recorder_status',$jsonData['recorder_status']);
$this->checkAndUpdateCmd('recorder_storage',$jsonData['recorder_storage']);
$this->checkAndUpdateCmd('volume_db_display',$jsonData['volume_db_display']);
$this->checkAndUpdateCmd('search_site',$jsonData['search_site']);
$this->checkAndUpdateCmd('raspbianver',$jsonData['raspbianver']);
$this->checkAndUpdateCmd('ipaddress',$jsonData['ipaddress']);
$this->checkAndUpdateCmd('bgimage',$jsonData['bgimage']);



         foreach ($jsonData as $value => $jsonKey) {
            
         }

                    
         log::add('moodeaudio', 'info', '');
     }


     log::add('moodeaudio', 'info', ' ');
     log::add('moodeaudio', 'info', ' --------END collect_moode audio-----------');
     log::add('moodeaudio', 'info', ' ');
 }

     /*public function cron() {
     	
    
     }*/

    /*
     * Fonction exécutée automatiquement toutes les 5 minutes par Jeedom
     public static function cron5() {
     }
     */

    /*
     * Fonction exécutée automatiquement toutes les 10 minutes par Jeedom
     public static function cron10() {
     }
     */

    /*
     * Fonction exécutée automatiquement toutes les 15 minutes par Jeedom
     public static function cron15() {
     }
     */


    //Fonction exécutée automatiquement toutes les 30 minutes par Jeedom
     //public static function cron30() {
     //	log::add('moodeaudio', 'info', ' ');
     //	log::add('moodeaudio', 'info', ' --------CRON-----------');
     //	log::add('moodeaudio', 'info', ' ');
    //foreach (eqLogic::byType(__CLASS__, true) as $eqLogic) {  // pour tous les équipements actifs de la classe moodeaudio
    //	$eqLogic->collect_agenda();
    //}
//}


    /*
     * Fonction exécutée automatiquement toutes les heures par Jeedom
     public static function cronHourly() {
     }
     */

    /*
     * Fonction exécutée automatiquement tous les jours par Jeedom
     public static function cronDaily() {
     }
     */

     

     /*     * *********************Méthodes d'instance************************* */
     public function randomVdm()
     {
        //test
     }
    // Fonction exécutée automatiquement avant la création de l'équipement 
     public function preInsert()
     {

     }

    // Fonction exécutée automatiquement après la création de l'équipement 
     public function postInsert()
     {

     }

    // Fonction exécutée automatiquement avant la mise à jour de l'équipement 
     public function preUpdate()
     {
     	if (empty($this->getConfiguration('URL_param'))) {
     		throw new Exception(__('L\'URL doit être renseigné', __FILE__));
     	} else {

            // throw new Exception(__('L\'URL est renseigné '.$this->getConfiguration('param1'),__FILE__));
     	}
     	
     }

    // Fonction exécutée automatiquement après la mise à jour de l'équipement 
     public function postUpdate()
     {

     }

    // Fonction exécutée automatiquement avant la sauvegarde (création ou mise à jour) de l'équipement 
     public function preSave()
     {

     }



    // Fonction exécutée automatiquement après la sauvegarde (création ou mise à jour) de l'équipement 
     public function postSave()
     {


        $mute = $this->getCmd(null, 'mute');
       if (!is_object($mute)) {
            $mute = new moodeaudioCmd();
            $mute->setLogicalId('mute');
            $mute->setIsVisible(1);
            $mute->setName(__('Mute', __FILE__));
        }
        $mute->setType('action');
        $mute->setSubType('other');
        $mute->setEqLogic_id($this->getId());
        $mute->save();
       
 $play = $this->getCmd(null, 'play');      
        if (!is_object($play)) {
            $play = new moodeaudioCmd();
            $play->setLogicalId('play');
            $play->setIsVisible(1);
            $play->setName(__('Play', __FILE__));
        }
        $play->setType('action');
        $play->setSubType('other');
        $play->setEqLogic_id($this->getId());
        $play->save();
     
       $volume_up = $this->getCmd(null, 'volume_up');       
              if (!is_object($volume_up)) {
            $volume_up = new moodeaudioCmd();
            $volume_up->setLogicalId('volume_up');
            $volume_up->setIsVisible(1);
            $volume_up->setName(__('Volume +', __FILE__));
        }
        $volume_up->setType('action');
        $volume_up->setSubType('other');
        $volume_up->setEqLogic_id($this->getId());
        $volume_up->save();
       
       $volume_down = $this->getCmd(null, 'volume_down');  
       if (!is_object($volume_down)) {
            $volume_down = new moodeaudioCmd();
            $volume_down->setLogicalId('volume_down');
            $volume_down->setIsVisible(1);
            $volume_down->setName(__('Volume -', __FILE__));
        }
        $volume_down->setType('action');
        $volume_down->setSubType('other');
        $volume_down->setEqLogic_id($this->getId());
        $volume_down->save();
       

$stop = $this->getCmd(null, 'stop');
if (!is_object($stop)) {
            $stop = new moodeaudioCmd();
            $stop->setLogicalId('stop');
            $stop->setIsVisible(1);
            $stop->setName(__('Stop', __FILE__));
        }
        $stop->setType('action');
        $stop->setSubType('other');
        $stop->setEqLogic_id($this->getId());
        $stop->save();


$info = $this->getCmd(null, 'sessionid');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('sessionid', __FILE__));}$info->setLogicalId('sessionid');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'timezone');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('timezone', __FILE__));}$info->setLogicalId('timezone');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'i2sdevice');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('i2sdevice', __FILE__));}$info->setLogicalId('i2sdevice');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'hostname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('hostname', __FILE__));}$info->setLogicalId('hostname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'browsertitle');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('browsertitle', __FILE__));}$info->setLogicalId('browsertitle');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'airplayname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('airplayname', __FILE__));}$info->setLogicalId('airplayname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'upnpname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('upnpname', __FILE__));}$info->setLogicalId('upnpname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'dlnaname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('dlnaname', __FILE__));}$info->setLogicalId('dlnaname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'airplaysvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('airplaysvc', __FILE__));}$info->setLogicalId('airplaysvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'upnpsvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('upnpsvc', __FILE__));}$info->setLogicalId('upnpsvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'dlnasvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('dlnasvc', __FILE__));}$info->setLogicalId('dlnasvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'maxusbcurrent');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('maxusbcurrent', __FILE__));}$info->setLogicalId('maxusbcurrent');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rotaryenc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rotaryenc', __FILE__));}$info->setLogicalId('rotaryenc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'autoplay');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('autoplay', __FILE__));}$info->setLogicalId('autoplay');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'kernelver');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('kernelver', __FILE__));}$info->setLogicalId('kernelver');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpdver');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpdver', __FILE__));}$info->setLogicalId('mpdver');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'procarch');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('procarch', __FILE__));}$info->setLogicalId('procarch');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'adevname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('adevname', __FILE__));}$info->setLogicalId('adevname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_mode');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_mode', __FILE__));}$info->setLogicalId('clkradio_mode');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_item');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_item', __FILE__));}$info->setLogicalId('clkradio_item');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_name');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_name', __FILE__));}$info->setLogicalId('clkradio_name');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_start');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_start', __FILE__));}$info->setLogicalId('clkradio_start');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_stop');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_stop', __FILE__));}$info->setLogicalId('clkradio_stop');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_volume');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_volume', __FILE__));}$info->setLogicalId('clkradio_volume');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'clkradio_action');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('clkradio_action', __FILE__));}$info->setLogicalId('clkradio_action');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'playhist');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('playhist', __FILE__));}$info->setLogicalId('playhist');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'phistsong');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('phistsong', __FILE__));}$info->setLogicalId('phistsong');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_utf8rep');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_utf8rep', __FILE__));}$info->setLogicalId('library_utf8rep');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'current_view');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('current_view', __FILE__));}$info->setLogicalId('current_view');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'timecountup');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('timecountup', __FILE__));}$info->setLogicalId('timecountup');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'accent_color');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('accent_color', __FILE__));}$info->setLogicalId('accent_color');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volknob');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volknob', __FILE__));}$info->setLogicalId('volknob');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volmute');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volmute', __FILE__));}$info->setLogicalId('volmute');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'alsavolume_max');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('alsavolume_max', __FILE__));}$info->setLogicalId('alsavolume_max');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'alsavolume');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('alsavolume', __FILE__));}$info->setLogicalId('alsavolume');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'amixname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('amixname', __FILE__));}$info->setLogicalId('amixname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpdmixer');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpdmixer', __FILE__));}$info->setLogicalId('mpdmixer');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'extra_tags');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('extra_tags', __FILE__));}$info->setLogicalId('extra_tags');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rsmafterapl');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rsmafterapl', __FILE__));}$info->setLogicalId('rsmafterapl');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'lcdup');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('lcdup', __FILE__));}$info->setLogicalId('lcdup');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_show_genres');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_show_genres', __FILE__));}$info->setLogicalId('library_show_genres');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'extmeta');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('extmeta', __FILE__));}$info->setLogicalId('extmeta');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'maint_interval');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('maint_interval', __FILE__));}$info->setLogicalId('maint_interval');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'hdwrrev');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('hdwrrev', __FILE__));}$info->setLogicalId('hdwrrev');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'crossfeed');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('crossfeed', __FILE__));}$info->setLogicalId('crossfeed');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'bluez_pcm_buffer');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('bluez_pcm_buffer', __FILE__));}$info->setLogicalId('bluez_pcm_buffer');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'upnp_browser');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('upnp_browser', __FILE__));}$info->setLogicalId('upnp_browser');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_instant_play');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_instant_play', __FILE__));}$info->setLogicalId('library_instant_play');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'radio_pos');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('radio_pos', __FILE__));}$info->setLogicalId('radio_pos');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'airplayactv');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('airplayactv', __FILE__));}$info->setLogicalId('airplayactv');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'debuglog');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('debuglog', __FILE__));}$info->setLogicalId('debuglog');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'ashufflesvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('ashufflesvc', __FILE__));}$info->setLogicalId('ashufflesvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'ashuffle');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('ashuffle', __FILE__));}$info->setLogicalId('ashuffle');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'AVAILABLE');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('AVAILABLE', __FILE__));}$info->setLogicalId('AVAILABLE');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'uac2fix');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('uac2fix', __FILE__));}$info->setLogicalId('uac2fix');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'keyboard');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('keyboard', __FILE__));}$info->setLogicalId('keyboard');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'localui');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('localui', __FILE__));}$info->setLogicalId('localui');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'toggle_songid');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('toggle_songid', __FILE__));}$info->setLogicalId('toggle_songid');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'slsvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('slsvc', __FILE__));}$info->setLogicalId('slsvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'hdmiport');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('hdmiport', __FILE__));}$info->setLogicalId('hdmiport');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'cpugov');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('cpugov', __FILE__));}$info->setLogicalId('cpugov');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'pairing_agent');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('pairing_agent', __FILE__));}$info->setLogicalId('pairing_agent');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'pkgid_suffix');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('pkgid_suffix', __FILE__));}$info->setLogicalId('pkgid_suffix');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'lib_pos');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('lib_pos', __FILE__));}$info->setLogicalId('lib_pos');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpdcrossfade');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpdcrossfade', __FILE__));}$info->setLogicalId('mpdcrossfade');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'eth0chk');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('eth0chk', __FILE__));}$info->setLogicalId('eth0chk');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'usb_auto_mounter');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('usb_auto_mounter', __FILE__));}$info->setLogicalId('usb_auto_mounter');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rsmafterbt');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rsmafterbt', __FILE__));}$info->setLogicalId('rsmafterbt');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rotenc_params');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rotenc_params', __FILE__));}$info->setLogicalId('rotenc_params');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'shellinabox');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('shellinabox', __FILE__));}$info->setLogicalId('shellinabox');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'alsaequal');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('alsaequal', __FILE__));}$info->setLogicalId('alsaequal');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'eqfa12p');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('eqfa12p', __FILE__));}$info->setLogicalId('eqfa12p');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'p3wifi');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('p3wifi', __FILE__));}$info->setLogicalId('p3wifi');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'p3bt');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('p3bt', __FILE__));}$info->setLogicalId('p3bt');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'cardnum');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('cardnum', __FILE__));}$info->setLogicalId('cardnum');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'btsvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('btsvc', __FILE__));}$info->setLogicalId('btsvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'btname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('btname', __FILE__));}$info->setLogicalId('btname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'btmulti');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('btmulti', __FILE__));}$info->setLogicalId('btmulti');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'feat_bitmask');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('feat_bitmask', __FILE__));}$info->setLogicalId('feat_bitmask');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_recently_added');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_recently_added', __FILE__));}$info->setLogicalId('library_recently_added');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'btactive');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('btactive', __FILE__));}$info->setLogicalId('btactive');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'touchscn');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('touchscn', __FILE__));}$info->setLogicalId('touchscn');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'scnblank');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('scnblank', __FILE__));}$info->setLogicalId('scnblank');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'scnrotate');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('scnrotate', __FILE__));}$info->setLogicalId('scnrotate');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'scnbrightness');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('scnbrightness', __FILE__));}$info->setLogicalId('scnbrightness');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'themename');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('themename', __FILE__));}$info->setLogicalId('themename');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'res_software_upd_url');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('res_software_upd_url', __FILE__));}$info->setLogicalId('res_software_upd_url');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'alphablend');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('alphablend', __FILE__));}$info->setLogicalId('alphablend');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'adaptive');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('adaptive', __FILE__));}$info->setLogicalId('adaptive');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'audioout');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('audioout', __FILE__));}$info->setLogicalId('audioout');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'audioin');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('audioin', __FILE__));}$info->setLogicalId('audioin');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'slactive');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('slactive', __FILE__));}$info->setLogicalId('slactive');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rsmaftersl');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rsmaftersl', __FILE__));}$info->setLogicalId('rsmaftersl');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpdmixer_local');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpdmixer_local', __FILE__));}$info->setLogicalId('mpdmixer_local');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'wrkready');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('wrkready', __FILE__));}$info->setLogicalId('wrkready');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'scnsaver_timeout');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('scnsaver_timeout', __FILE__));}$info->setLogicalId('scnsaver_timeout');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'pixel_aspect_ratio');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('pixel_aspect_ratio', __FILE__));}$info->setLogicalId('pixel_aspect_ratio');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'favorites_name');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('favorites_name', __FILE__));}$info->setLogicalId('favorites_name');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'spotifysvc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('spotifysvc', __FILE__));}$info->setLogicalId('spotifysvc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'spotifyname');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('spotifyname', __FILE__));}$info->setLogicalId('spotifyname');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'spotactive');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('spotactive', __FILE__));}$info->setLogicalId('spotactive');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rsmafterspot');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rsmafterspot', __FILE__));}$info->setLogicalId('rsmafterspot');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_covsearchpri');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_covsearchpri', __FILE__));}$info->setLogicalId('library_covsearchpri');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_hiresthm');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_hiresthm', __FILE__));}$info->setLogicalId('library_hiresthm');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_pixelratio');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_pixelratio', __FILE__));}$info->setLogicalId('library_pixelratio');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'usb_auto_updatedb');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('usb_auto_updatedb', __FILE__));}$info->setLogicalId('usb_auto_updatedb');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'cover_backdrop');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('cover_backdrop', __FILE__));}$info->setLogicalId('cover_backdrop');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'cover_blur');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('cover_blur', __FILE__));}$info->setLogicalId('cover_blur');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'cover_scale');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('cover_scale', __FILE__));}$info->setLogicalId('cover_scale');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_tagview_artist');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_tagview_artist', __FILE__));}$info->setLogicalId('library_tagview_artist');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'scnsaver_style');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('scnsaver_style', __FILE__));}$info->setLogicalId('scnsaver_style');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'ashuffle_filter');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('ashuffle_filter', __FILE__));}$info->setLogicalId('ashuffle_filter');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpd_httpd');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpd_httpd', __FILE__));}$info->setLogicalId('mpd_httpd');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpd_httpd_port');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpd_httpd_port', __FILE__));}$info->setLogicalId('mpd_httpd_port');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'mpd_httpd_encoder');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('mpd_httpd_encoder', __FILE__));}$info->setLogicalId('mpd_httpd_encoder');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'invert_polarity');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('invert_polarity', __FILE__));}$info->setLogicalId('invert_polarity');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'inpactive');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('inpactive', __FILE__));}$info->setLogicalId('inpactive');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'rsmafterinp');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('rsmafterinp', __FILE__));}$info->setLogicalId('rsmafterinp');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'gpio_svc');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('gpio_svc', __FILE__));}$info->setLogicalId('gpio_svc');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_ignore_articles');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_ignore_articles', __FILE__));}$info->setLogicalId('library_ignore_articles');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volknob_mpd');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volknob_mpd', __FILE__));}$info->setLogicalId('volknob_mpd');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volknob_preamp');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volknob_preamp', __FILE__));}$info->setLogicalId('volknob_preamp');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_albumview_sort');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_albumview_sort', __FILE__));}$info->setLogicalId('library_albumview_sort');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'kernel_architecture');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('kernel_architecture', __FILE__));}$info->setLogicalId('kernel_architecture');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'wake_display');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('wake_display', __FILE__));}$info->setLogicalId('wake_display');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'usb_volknob');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('usb_volknob', __FILE__));}$info->setLogicalId('usb_volknob');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'led_state');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('led_state', __FILE__));}$info->setLogicalId('led_state');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_tagview_covers');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_tagview_covers', __FILE__));}$info->setLogicalId('library_tagview_covers');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_tagview_sort');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_tagview_sort', __FILE__));}$info->setLogicalId('library_tagview_sort');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_ellipsis_limited_text');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_ellipsis_limited_text', __FILE__));}$info->setLogicalId('library_ellipsis_limited_text');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'preferences_modal_state');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('preferences_modal_state', __FILE__));}$info->setLogicalId('preferences_modal_state');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'font_size');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('font_size', __FILE__));}$info->setLogicalId('font_size');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volume_step_limit');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volume_step_limit', __FILE__));}$info->setLogicalId('volume_step_limit');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volume_mpd_max');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volume_mpd_max', __FILE__));}$info->setLogicalId('volume_mpd_max');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_thumbnail_columns');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_thumbnail_columns', __FILE__));}$info->setLogicalId('library_thumbnail_columns');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_encoded_at');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_encoded_at', __FILE__));}$info->setLogicalId('library_encoded_at');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'first_use_help');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('first_use_help', __FILE__));}$info->setLogicalId('first_use_help');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'playlist_art');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('playlist_art', __FILE__));}$info->setLogicalId('playlist_art');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'ashuffle_mode');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('ashuffle_mode', __FILE__));}$info->setLogicalId('ashuffle_mode');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'radioview_sort_group');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('radioview_sort_group', __FILE__));}$info->setLogicalId('radioview_sort_group');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'radioview_show_hide');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('radioview_show_hide', __FILE__));}$info->setLogicalId('radioview_show_hide');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'renderer_backdrop');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('renderer_backdrop', __FILE__));}$info->setLogicalId('renderer_backdrop');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_flatlist_filter');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_flatlist_filter', __FILE__));}$info->setLogicalId('library_flatlist_filter');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_flatlist_filter_str');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_flatlist_filter_str', __FILE__));}$info->setLogicalId('library_flatlist_filter_str');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'library_misc_options');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('library_misc_options', __FILE__));}$info->setLogicalId('library_misc_options');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'recorder_status');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('recorder_status', __FILE__));}$info->setLogicalId('recorder_status');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'recorder_storage');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('recorder_storage', __FILE__));}$info->setLogicalId('recorder_storage');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'volume_db_display');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('volume_db_display', __FILE__));}$info->setLogicalId('volume_db_display');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'search_site');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('search_site', __FILE__));}$info->setLogicalId('search_site');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'raspbianver');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('raspbianver', __FILE__));}$info->setLogicalId('raspbianver');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'ipaddress');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('ipaddress', __FILE__));}$info->setLogicalId('ipaddress');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
$info = $this->getCmd(null, 'bgimage');if (!is_object($info)) {$info = new moodeaudioCmd();$info->setName(__('bgimage', __FILE__));}$info->setLogicalId('bgimage');$info->setEqLogic_id($this->getId());$info->setIsVisible(0);$info->setType('info');$info->setSubType('string');$info->save();
        // Refresh

      $refresh = $this->getCmd(null, 'refresh');
      if (!is_object($refresh)) {
       $refresh = new moodeaudioCmd();
       $refresh->setName(__('Rafraichir', __FILE__));
   }
   $refresh->setEqLogic_id($this->getId());
   $refresh->setLogicalId('refresh');
   $refresh->setType('action');
   $refresh->setSubType('other');
   $refresh->save();
}

    // Fonction exécutée automatiquement avant la suppression de l'équipement 
public function preRemove()
{

}

    // Fonction exécutée automatiquement après la suppression de l'équipement 
public function postRemove()
{

}

    /*
     * Non obligatoire : permet de modifier l'affichage du widget (également utilisable par les commandes)
     public function toHtml($_version = 'dashboard') {
    
     }
     */

    /*
     * Non obligatoire : permet de déclencher une action après modification de variable de configuration
     public static function postConfig_<Variable>() {
     }
     */

    /*
     * Non obligatoire : permet de déclencher une action avant modification de variable de configuration
     public static function preConfig_<Variable>() {
     }
     */

     /*     * **********************Getteur Setteur*************************** */

 }


 class moodeaudioCmd extends cmd
 {
 	/*     * *************************Attributs****************************** */

    /*
    public static $_widgetPossibility = array();
    */
    
    /*     * ***********************Methode static*************************** */
    
    
    /*     * *********************Methode d'instance************************* */
    
    /*
     * Non obligatoire permet de demander de ne pas supprimer les commandes même si elles ne sont pas dans la nouvelle configuration de l'équipement envoyé en JS
     public function dontRemoveCmd() {
     return true;
     }
     */

    // Exécution d'une commande  

     

     public function execute($_options = array())
     {
        $eqlogic = $this->getEqLogic(); //récupère l'éqlogic de la commande $this
        switch ($this->getLogicalId()) {
            case 'refresh': 
                
            $eqlogic->moodeaudio_collect();
            
            break;
     
    case 'play':
            $eqlogic->moodeaudio_play();
            
            break;
           case 'stop':
            $eqlogic->moodeaudio_stop();
            
            break;
            
            case 'volume_up':
            $eqlogic->moodeaudio_volume_up();
            
            break;
            
            case 'volume_down':
            $eqlogic->moodeaudio_volume_down();
            
            break;
            
            case 'mute':
            $eqlogic->moodeaudio_mute();
            
            break;
       }
    }
}