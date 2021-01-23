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
 *
 * Uncomment the bolded line below in file /var/www/command/index.php
 * sendMpdCmd($sock, $_GET['cmd']);
 * $result = readMpdResp($sock);
 * closeMpdSock($sock);
 * //echo $result;
 
 * http://192.168.1.55/command/?cmd=currentsong

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
     
     

     
     public function moodeaudio_volume_set($volume_change)
     {
      
      log::add('moodeaudio', 'info', ' ');
      log::add('moodeaudio', 'info', ' --------INIT Moode Audio Volume set----------');
      log::add('moodeaudio', 'info', ' ');
      
      $URL_param = $this->getConfiguration('URL_param');
      
      log::add('moodeaudio', 'info', '-----SET UP URL----------');
      
      $api = "http://".$URL_param."/command";
      
      log::add('moodeaudio', 'info', 'Api : ' . $api);
      log::add('moodeaudio', 'info', '-----COLLECTE VOLUME ----------');
         log::add('moodeaudio', 'info', 'Volume change : '.$volume_change);
      $cmd_line='vol.sh '.$volume_change;
        log::add('moodeaudio', 'info', 'Volume change cmd: '. $api."/?cmd=".$cmd_line);
       $dataArray = array("cmd"=>$cmd_line);
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
    
    
    public function moodeaudio_mute()
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
    
    public function moodeaudio_volume_up()
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
    
    
    public function moodeaudio_volume_down()
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

  
  
  public function moodeaudio_collect_song()
{
  log::add('moodeaudio', 'info', ' ');
  log::add('moodeaudio', 'info', ' --------INIT Moode Audio plugin-----------');
  log::add('moodeaudio', 'info', ' ');
  

  $URL_param = $this->getConfiguration('URL_param');
  

  log::add('moodeaudio', 'info', '-----SET UP----------');
  
  $api = "http://".$URL_param . "/command/?cmd=currentsong";
  
  log::add('moodeaudio', 'info', 'Api : ' . $api);


  $json = file_get_contents($api);

  log::add('moodeaudio', 'info', '-----RAW----------');
  log::add('moodeaudio', 'info', 'RAW : ' . $json);
  log::add('moodeaudio', 'info', '');
    $pos_file = strpos($json,'file:');
  	$pos_title = strpos($json,'Title:');
    $pos_name = strpos($json,'Name:');
      $pos_pos = strpos($json,'Pos:');
    $pos_id = strpos($json,'Id:');
    $pos_end=strlen ($json);
  
      if ($pos_name == false) {
        $pos_name=$pos_pos;
        $song_name='~';
        } else {
       $song_name=substr($json, $pos_name+5,$pos_pos-$pos_name-5);
      }
    
    $song_file=substr($json, 5, $pos_title-5);
   $song_title=substr($json, $pos_title+7, $pos_name-$pos_title-7);
  
   $song_pos= substr($json, $pos_pos+4,$pos_id-$pos_pos-4);
   $song_id= substr($json, $pos_id+3,$pos_end-$pos_id-3);
    
 // $jsonData = json_decode($json, true);
  log::add('moodeaudio', 'info', '-----DECODE--NEW---');
       log::add('moodeaudio', 'info', 'File ('.$pos_file.') :'.$song_file);
      log::add('moodeaudio', 'info', 'Title ('.$pos_title.') :'.$song_title);
     log::add('moodeaudio', 'info', 'Name ('.$pos_name.') :'.$song_name);
      log::add('moodeaudio', 'info', 'Pos ('.$pos_pos.') :'.$song_pos);
      log::add('moodeaudio', 'info', 'Id ('.$pos_id.') :'.$song_id);
    log::add('moodeaudio', 'info', 'End ('.$pos_end.') ');

 
   $this->checkAndUpdateCmd('song_title',$song_title);
     $this->checkAndUpdateCmd('song_name',$song_name);
     $this->checkAndUpdateCmd('song_pos',$song_pos);
     $this->checkAndUpdateCmd('song_id',$song_id);
     $this->checkAndUpdateCmd('song_file',$song_file);
    
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
     // log::add('moodeaudio', 'info', ' ');
     // log::add('moodeaudio', 'info', ' --------CRON-----------');
     // log::add('moodeaudio', 'info', ' ');
    //foreach (eqLogic::byType(__CLASS__, true) as $eqLogic) {  // pour tous les équipements actifs de la classe moodeaudio
    //  $eqLogic->collect_agenda();
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
        $mute->setOrder(1);    
        $mute->setName(__('Mute', __FILE__));
        $mute->setDisplay('icon', '<i class="fas jeedomapp-audiomute2"></i>');
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
        $play->setOrder(2);   
        $play->setName(__('Play', __FILE__));
        $play->setDisplay('icon', '<i class="fas fa-play"></i>');
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
        $volume_up->setOrder(3);   
        $volume_up->setName(__('Volume +', __FILE__));
        $volume_up->setDisplay('icon', '<i class="fas fa-volume-up"></i>');
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
        $volume_down->setOrder(5); 
        $volume_down->setName(__('Volume -', __FILE__));
        $volume_down->setDisplay('icon', '<i class="fas fa-volume-down"></i>');
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
        $stop->setOrder(6); 
        $stop->setName(__('Stop', __FILE__));
        $stop->setDisplay('icon', '<i class="fas fa-stop"></i>');
      }
      $stop->setType('action');
      $stop->setSubType('other');
      $stop->setEqLogic_id($this->getId());
      $stop->save();

      
      
      
      
      $sessionid = $this->getCmd(null, 'sessionid');
      if (!is_object($sessionid)) {
        $sessionid = new moodeaudioCmd();
        $sessionid->setName(__('sessionid', __FILE__));
                                  }
      $sessionid->setLogicalId('sessionid');
      $sessionid->setEqLogic_id($this->getId());
      $sessionid->setIsVisible(0);
      $sessionid->setType('info');
      $sessionid->setSubType('string');
      $sessionid->save();
      
      $timezone = $this->getCmd(null, 'timezone');if (!is_object($timezone)) {$timezone = new moodeaudioCmd();$timezone->setName(__('timezone', __FILE__));}$timezone->setLogicalId('timezone');$timezone->setEqLogic_id($this->getId());$timezone->setIsVisible(0);$timezone->setType('info');$timezone->setSubType('string');$timezone->save();
      $i2sdevice = $this->getCmd(null, 'i2sdevice');if (!is_object($i2sdevice)) {$i2sdevice = new moodeaudioCmd();$i2sdevice->setName(__('i2sdevice', __FILE__));}$i2sdevice->setLogicalId('i2sdevice');$i2sdevice->setEqLogic_id($this->getId());$i2sdevice->setIsVisible(0);$i2sdevice->setType('info');$i2sdevice->setSubType('string');$i2sdevice->save();
      $hostname = $this->getCmd(null, 'hostname');if (!is_object($hostname)) {$hostname = new moodeaudioCmd();$hostname->setName(__('hostname', __FILE__));}$hostname->setLogicalId('hostname');$hostname->setEqLogic_id($this->getId());$hostname->setIsVisible(0);$hostname->setType('info');$hostname->setSubType('string');$hostname->save();
      $browsertitle = $this->getCmd(null, 'browsertitle');if (!is_object($browsertitle)) {$browsertitle = new moodeaudioCmd();$browsertitle->setName(__('browsertitle', __FILE__));}$browsertitle->setLogicalId('browsertitle');$browsertitle->setEqLogic_id($this->getId());$browsertitle->setIsVisible(0);$browsertitle->setType('info');$browsertitle->setSubType('string');$browsertitle->save();
      $airplayname = $this->getCmd(null, 'airplayname');if (!is_object($airplayname)) {$airplayname = new moodeaudioCmd();$airplayname->setName(__('airplayname', __FILE__));}$airplayname->setLogicalId('airplayname');$airplayname->setEqLogic_id($this->getId());$airplayname->setIsVisible(0);$airplayname->setType('info');$airplayname->setSubType('string');$airplayname->save();
      $upnpname = $this->getCmd(null, 'upnpname');if (!is_object($upnpname)) {$upnpname = new moodeaudioCmd();$upnpname->setName(__('upnpname', __FILE__));}$upnpname->setLogicalId('upnpname');$upnpname->setEqLogic_id($this->getId());$upnpname->setIsVisible(0);$upnpname->setType('info');$upnpname->setSubType('string');$upnpname->save();
      $dlnaname = $this->getCmd(null, 'dlnaname');if (!is_object($dlnaname)) {$dlnaname = new moodeaudioCmd();$dlnaname->setName(__('dlnaname', __FILE__));}$dlnaname->setLogicalId('dlnaname');$dlnaname->setEqLogic_id($this->getId());$dlnaname->setIsVisible(0);$dlnaname->setType('info');$dlnaname->setSubType('string');$dlnaname->save();
      $airplaysvc = $this->getCmd(null, 'airplaysvc');if (!is_object($airplaysvc)) {$airplaysvc = new moodeaudioCmd();$airplaysvc->setName(__('airplaysvc', __FILE__));}$airplaysvc->setLogicalId('airplaysvc');$airplaysvc->setEqLogic_id($this->getId());$airplaysvc->setIsVisible(0);$airplaysvc->setType('info');$airplaysvc->setSubType('string');$airplaysvc->save();
      $upnpsvc = $this->getCmd(null, 'upnpsvc');if (!is_object($upnpsvc)) {$upnpsvc = new moodeaudioCmd();$upnpsvc->setName(__('upnpsvc', __FILE__));}$upnpsvc->setLogicalId('upnpsvc');$upnpsvc->setEqLogic_id($this->getId());$upnpsvc->setIsVisible(0);$upnpsvc->setType('info');$upnpsvc->setSubType('string');$upnpsvc->save();
      $dlnasvc = $this->getCmd(null, 'dlnasvc');if (!is_object($dlnasvc)) {$dlnasvc = new moodeaudioCmd();$dlnasvc->setName(__('dlnasvc', __FILE__));}$dlnasvc->setLogicalId('dlnasvc');$dlnasvc->setEqLogic_id($this->getId());$dlnasvc->setIsVisible(0);$dlnasvc->setType('info');$dlnasvc->setSubType('string');$dlnasvc->save();
      $maxusbcurrent = $this->getCmd(null, 'maxusbcurrent');if (!is_object($maxusbcurrent)) {$maxusbcurrent = new moodeaudioCmd();$maxusbcurrent->setName(__('maxusbcurrent', __FILE__));}$maxusbcurrent->setLogicalId('maxusbcurrent');$maxusbcurrent->setEqLogic_id($this->getId());$maxusbcurrent->setIsVisible(0);$maxusbcurrent->setType('info');$maxusbcurrent->setSubType('string');$maxusbcurrent->save();
      $rotaryenc = $this->getCmd(null, 'rotaryenc');if (!is_object($rotaryenc)) {$rotaryenc = new moodeaudioCmd();$rotaryenc->setName(__('rotaryenc', __FILE__));}$rotaryenc->setLogicalId('rotaryenc');$rotaryenc->setEqLogic_id($this->getId());$rotaryenc->setIsVisible(0);$rotaryenc->setType('info');$rotaryenc->setSubType('string');$rotaryenc->save();
      $autoplay = $this->getCmd(null, 'autoplay');if (!is_object($autoplay)) {$autoplay = new moodeaudioCmd();$autoplay->setName(__('autoplay', __FILE__));}$autoplay->setLogicalId('autoplay');$autoplay->setEqLogic_id($this->getId());$autoplay->setIsVisible(0);$autoplay->setType('info');$autoplay->setSubType('string');$autoplay->save();
      $kernelver = $this->getCmd(null, 'kernelver');if (!is_object($kernelver)) {$kernelver = new moodeaudioCmd();$kernelver->setName(__('kernelver', __FILE__));}$kernelver->setLogicalId('kernelver');$kernelver->setEqLogic_id($this->getId());$kernelver->setIsVisible(0);$kernelver->setType('info');$kernelver->setSubType('string');$kernelver->save();
      $mpdver = $this->getCmd(null, 'mpdver');if (!is_object($mpdver)) {$mpdver = new moodeaudioCmd();$mpdver->setName(__('mpdver', __FILE__));}$mpdver->setLogicalId('mpdver');$mpdver->setEqLogic_id($this->getId());$mpdver->setIsVisible(0);$mpdver->setType('info');$mpdver->setSubType('string');$mpdver->save();
      $procarch = $this->getCmd(null, 'procarch');if (!is_object($procarch)) {$procarch = new moodeaudioCmd();$procarch->setName(__('procarch', __FILE__));}$procarch->setLogicalId('procarch');$procarch->setEqLogic_id($this->getId());$procarch->setIsVisible(0);$procarch->setType('info');$procarch->setSubType('string');$procarch->save();
      $adevname = $this->getCmd(null, 'adevname');if (!is_object($adevname)) {$adevname = new moodeaudioCmd();$adevname->setName(__('adevname', __FILE__));}$adevname->setLogicalId('adevname');$adevname->setEqLogic_id($this->getId());$adevname->setIsVisible(0);$adevname->setType('info');$adevname->setSubType('string');$adevname->save();
      $clkradio_mode = $this->getCmd(null, 'clkradio_mode');if (!is_object($clkradio_mode)) {$clkradio_mode = new moodeaudioCmd();$clkradio_mode->setName(__('clkradio_mode', __FILE__));}$clkradio_mode->setLogicalId('clkradio_mode');$clkradio_mode->setEqLogic_id($this->getId());$clkradio_mode->setIsVisible(0);$clkradio_mode->setType('info');$clkradio_mode->setSubType('string');$clkradio_mode->save();
      $clkradio_item = $this->getCmd(null, 'clkradio_item');if (!is_object($clkradio_item)) {$clkradio_item = new moodeaudioCmd();$clkradio_item->setName(__('clkradio_item', __FILE__));}$clkradio_item->setLogicalId('clkradio_item');$clkradio_item->setEqLogic_id($this->getId());$clkradio_item->setIsVisible(0);$clkradio_item->setType('info');$clkradio_item->setSubType('string');$clkradio_item->save();
      $clkradio_name = $this->getCmd(null, 'clkradio_name');if (!is_object($clkradio_name)) {$clkradio_name = new moodeaudioCmd();$clkradio_name->setName(__('clkradio_name', __FILE__));}$clkradio_name->setLogicalId('clkradio_name');$clkradio_name->setEqLogic_id($this->getId());$clkradio_name->setIsVisible(0);$clkradio_name->setType('info');$clkradio_name->setSubType('string');$clkradio_name->save();
      $clkradio_start = $this->getCmd(null, 'clkradio_start');if (!is_object($clkradio_start)) {$clkradio_start = new moodeaudioCmd();$clkradio_start->setName(__('clkradio_start', __FILE__));}$clkradio_start->setLogicalId('clkradio_start');$clkradio_start->setEqLogic_id($this->getId());$clkradio_start->setIsVisible(0);$clkradio_start->setType('info');$clkradio_start->setSubType('string');$clkradio_start->save();
      $clkradio_stop = $this->getCmd(null, 'clkradio_stop');if (!is_object($clkradio_stop)) {$clkradio_stop = new moodeaudioCmd();$clkradio_stop->setName(__('clkradio_stop', __FILE__));}$clkradio_stop->setLogicalId('clkradio_stop');$clkradio_stop->setEqLogic_id($this->getId());$clkradio_stop->setIsVisible(0);$clkradio_stop->setType('info');$clkradio_stop->setSubType('string');$clkradio_stop->save();
      $clkradio_volume = $this->getCmd(null, 'clkradio_volume');if (!is_object($clkradio_volume)) {$clkradio_volume = new moodeaudioCmd();$clkradio_volume->setName(__('clkradio_volume', __FILE__));}$clkradio_volume->setLogicalId('clkradio_volume');$clkradio_volume->setEqLogic_id($this->getId());$clkradio_volume->setIsVisible(0);$clkradio_volume->setType('info');$clkradio_volume->setSubType('string');$clkradio_volume->save();
      $clkradio_action = $this->getCmd(null, 'clkradio_action');if (!is_object($clkradio_action)) {$clkradio_action = new moodeaudioCmd();$clkradio_action->setName(__('clkradio_action', __FILE__));}$clkradio_action->setLogicalId('clkradio_action');$clkradio_action->setEqLogic_id($this->getId());$clkradio_action->setIsVisible(0);$clkradio_action->setType('info');$clkradio_action->setSubType('string');$clkradio_action->save();
      $playhist = $this->getCmd(null, 'playhist');if (!is_object($playhist)) {$playhist = new moodeaudioCmd();$playhist->setName(__('playhist', __FILE__));}$playhist->setLogicalId('playhist');$playhist->setEqLogic_id($this->getId());$playhist->setIsVisible(0);$playhist->setType('info');$playhist->setSubType('string');$playhist->save();
      $phistsong = $this->getCmd(null, 'phistsong');if (!is_object($phistsong)) {$phistsong = new moodeaudioCmd();$phistsong->setName(__('phistsong', __FILE__));}$phistsong->setLogicalId('phistsong');$phistsong->setEqLogic_id($this->getId());$phistsong->setIsVisible(0);$phistsong->setType('info');$phistsong->setSubType('string');$phistsong->save();
      $library_utf8rep = $this->getCmd(null, 'library_utf8rep');if (!is_object($library_utf8rep)) {$library_utf8rep = new moodeaudioCmd();$library_utf8rep->setName(__('library_utf8rep', __FILE__));}$library_utf8rep->setLogicalId('library_utf8rep');$library_utf8rep->setEqLogic_id($this->getId());$library_utf8rep->setIsVisible(0);$library_utf8rep->setType('info');$library_utf8rep->setSubType('string');$library_utf8rep->save();
      $current_view = $this->getCmd(null, 'current_view');if (!is_object($current_view)) {$current_view = new moodeaudioCmd();$current_view->setName(__('current_view', __FILE__));}$current_view->setLogicalId('current_view');$current_view->setEqLogic_id($this->getId());$current_view->setIsVisible(0);$current_view->setType('info');$current_view->setSubType('string');$current_view->save();
      $timecountup = $this->getCmd(null, 'timecountup');if (!is_object($timecountup)) {$timecountup = new moodeaudioCmd();$timecountup->setName(__('timecountup', __FILE__));}$timecountup->setLogicalId('timecountup');$timecountup->setEqLogic_id($this->getId());$timecountup->setIsVisible(0);$timecountup->setType('info');$timecountup->setSubType('string');$timecountup->save();
      $accent_color = $this->getCmd(null, 'accent_color');if (!is_object($accent_color)) {$accent_color = new moodeaudioCmd();$accent_color->setName(__('accent_color', __FILE__));}$accent_color->setLogicalId('accent_color');$accent_color->setEqLogic_id($this->getId());$accent_color->setIsVisible(0);$accent_color->setType('info');$accent_color->setSubType('string');$accent_color->save();
      $volknob = $this->getCmd(null, 'volknob');if (!is_object($volknob)) {$volknob = new moodeaudioCmd();$volknob->setName(__('volknob', __FILE__));}$volknob->setLogicalId('volknob');$volknob->setEqLogic_id($this->getId());$volknob->setIsVisible(0);$volknob->setType('info');$volknob->setSubType('string');$volknob->save();
      $volmute = $this->getCmd(null, 'volmute');if (!is_object($volmute)) {$volmute = new moodeaudioCmd();$volmute->setName(__('volmute', __FILE__));}$volmute->setLogicalId('volmute');$volmute->setEqLogic_id($this->getId());$volmute->setIsVisible(0);$volmute->setType('info');$volmute->setSubType('string');$volmute->save();
      $alsavolume_max = $this->getCmd(null, 'alsavolume_max');if (!is_object($alsavolume_max)) {$alsavolume_max = new moodeaudioCmd();$alsavolume_max->setName(__('alsavolume_max', __FILE__));}$alsavolume_max->setLogicalId('alsavolume_max');$alsavolume_max->setEqLogic_id($this->getId());$alsavolume_max->setIsVisible(0);$alsavolume_max->setType('info');$alsavolume_max->setSubType('string');$alsavolume_max->save();
      $alsavolume = $this->getCmd(null, 'alsavolume');if (!is_object($alsavolume)) {$alsavolume = new moodeaudioCmd();$alsavolume->setName(__('alsavolume', __FILE__));}$alsavolume->setLogicalId('alsavolume');$alsavolume->setEqLogic_id($this->getId());$alsavolume->setIsVisible(0);$alsavolume->setType('info');$alsavolume->setSubType('string');$alsavolume->save();
      $amixname = $this->getCmd(null, 'amixname');if (!is_object($amixname)) {$amixname = new moodeaudioCmd();$amixname->setName(__('amixname', __FILE__));}$amixname->setLogicalId('amixname');$amixname->setEqLogic_id($this->getId());$amixname->setIsVisible(0);$amixname->setType('info');$amixname->setSubType('string');$amixname->save();
      $mpdmixer = $this->getCmd(null, 'mpdmixer');if (!is_object($mpdmixer)) {$mpdmixer = new moodeaudioCmd();$mpdmixer->setName(__('mpdmixer', __FILE__));}$mpdmixer->setLogicalId('mpdmixer');$mpdmixer->setEqLogic_id($this->getId());$mpdmixer->setIsVisible(0);$mpdmixer->setType('info');$mpdmixer->setSubType('string');$mpdmixer->save();
      $extra_tags = $this->getCmd(null, 'extra_tags');if (!is_object($extra_tags)) {$extra_tags = new moodeaudioCmd();$extra_tags->setName(__('extra_tags', __FILE__));}$extra_tags->setLogicalId('extra_tags');$extra_tags->setEqLogic_id($this->getId());$extra_tags->setIsVisible(0);$extra_tags->setType('info');$extra_tags->setSubType('string');$extra_tags->save();
      $rsmafterapl = $this->getCmd(null, 'rsmafterapl');if (!is_object($rsmafterapl)) {$rsmafterapl = new moodeaudioCmd();$rsmafterapl->setName(__('rsmafterapl', __FILE__));}$rsmafterapl->setLogicalId('rsmafterapl');$rsmafterapl->setEqLogic_id($this->getId());$rsmafterapl->setIsVisible(0);$rsmafterapl->setType('info');$rsmafterapl->setSubType('string');$rsmafterapl->save();
      $lcdup = $this->getCmd(null, 'lcdup');if (!is_object($lcdup)) {$lcdup = new moodeaudioCmd();$lcdup->setName(__('lcdup', __FILE__));}$lcdup->setLogicalId('lcdup');$lcdup->setEqLogic_id($this->getId());$lcdup->setIsVisible(0);$lcdup->setType('info');$lcdup->setSubType('string');$lcdup->save();
      $library_show_genres = $this->getCmd(null, 'library_show_genres');if (!is_object($library_show_genres)) {$library_show_genres = new moodeaudioCmd();$library_show_genres->setName(__('library_show_genres', __FILE__));}$library_show_genres->setLogicalId('library_show_genres');$library_show_genres->setEqLogic_id($this->getId());$library_show_genres->setIsVisible(0);$library_show_genres->setType('info');$library_show_genres->setSubType('string');$library_show_genres->save();
      $extmeta = $this->getCmd(null, 'extmeta');if (!is_object($extmeta)) {$extmeta = new moodeaudioCmd();$extmeta->setName(__('extmeta', __FILE__));}$extmeta->setLogicalId('extmeta');$extmeta->setEqLogic_id($this->getId());$extmeta->setIsVisible(0);$extmeta->setType('info');$extmeta->setSubType('string');$extmeta->save();
      $maint_interval = $this->getCmd(null, 'maint_interval');if (!is_object($maint_interval)) {$maint_interval = new moodeaudioCmd();$maint_interval->setName(__('maint_interval', __FILE__));}$maint_interval->setLogicalId('maint_interval');$maint_interval->setEqLogic_id($this->getId());$maint_interval->setIsVisible(0);$maint_interval->setType('info');$maint_interval->setSubType('string');$maint_interval->save();
      $hdwrrev = $this->getCmd(null, 'hdwrrev');if (!is_object($hdwrrev)) {$hdwrrev = new moodeaudioCmd();$hdwrrev->setName(__('hdwrrev', __FILE__));}$hdwrrev->setLogicalId('hdwrrev');$hdwrrev->setEqLogic_id($this->getId());$hdwrrev->setIsVisible(0);$hdwrrev->setType('info');$hdwrrev->setSubType('string');$hdwrrev->save();
      $crossfeed = $this->getCmd(null, 'crossfeed');if (!is_object($crossfeed)) {$crossfeed = new moodeaudioCmd();$crossfeed->setName(__('crossfeed', __FILE__));}$crossfeed->setLogicalId('crossfeed');$crossfeed->setEqLogic_id($this->getId());$crossfeed->setIsVisible(0);$crossfeed->setType('info');$crossfeed->setSubType('string');$crossfeed->save();
      $bluez_pcm_buffer = $this->getCmd(null, 'bluez_pcm_buffer');if (!is_object($bluez_pcm_buffer)) {$bluez_pcm_buffer = new moodeaudioCmd();$bluez_pcm_buffer->setName(__('bluez_pcm_buffer', __FILE__));}$bluez_pcm_buffer->setLogicalId('bluez_pcm_buffer');$bluez_pcm_buffer->setEqLogic_id($this->getId());$bluez_pcm_buffer->setIsVisible(0);$bluez_pcm_buffer->setType('info');$bluez_pcm_buffer->setSubType('string');$bluez_pcm_buffer->save();
      $upnp_browser = $this->getCmd(null, 'upnp_browser');if (!is_object($upnp_browser)) {$upnp_browser = new moodeaudioCmd();$upnp_browser->setName(__('upnp_browser', __FILE__));}$upnp_browser->setLogicalId('upnp_browser');$upnp_browser->setEqLogic_id($this->getId());$upnp_browser->setIsVisible(0);$upnp_browser->setType('info');$upnp_browser->setSubType('string');$upnp_browser->save();
      $library_instant_play = $this->getCmd(null, 'library_instant_play');if (!is_object($library_instant_play)) {$library_instant_play = new moodeaudioCmd();$library_instant_play->setName(__('library_instant_play', __FILE__));}$library_instant_play->setLogicalId('library_instant_play');$library_instant_play->setEqLogic_id($this->getId());$library_instant_play->setIsVisible(0);$library_instant_play->setType('info');$library_instant_play->setSubType('string');$library_instant_play->save();
      $radio_pos = $this->getCmd(null, 'radio_pos');if (!is_object($radio_pos)) {$radio_pos = new moodeaudioCmd();$radio_pos->setName(__('radio_pos', __FILE__));}$radio_pos->setLogicalId('radio_pos');$radio_pos->setEqLogic_id($this->getId());$radio_pos->setIsVisible(0);$radio_pos->setType('info');$radio_pos->setSubType('string');$radio_pos->save();
      $airplayactv = $this->getCmd(null, 'airplayactv');if (!is_object($airplayactv)) {$airplayactv = new moodeaudioCmd();$airplayactv->setName(__('airplayactv', __FILE__));}$airplayactv->setLogicalId('airplayactv');$airplayactv->setEqLogic_id($this->getId());$airplayactv->setIsVisible(0);$airplayactv->setType('info');$airplayactv->setSubType('string');$airplayactv->save();
      $debuglog = $this->getCmd(null, 'debuglog');if (!is_object($debuglog)) {$debuglog = new moodeaudioCmd();$debuglog->setName(__('debuglog', __FILE__));}$debuglog->setLogicalId('debuglog');$debuglog->setEqLogic_id($this->getId());$debuglog->setIsVisible(0);$debuglog->setType('info');$debuglog->setSubType('string');$debuglog->save();
      $ashufflesvc = $this->getCmd(null, 'ashufflesvc');if (!is_object($ashufflesvc)) {$ashufflesvc = new moodeaudioCmd();$ashufflesvc->setName(__('ashufflesvc', __FILE__));}$ashufflesvc->setLogicalId('ashufflesvc');$ashufflesvc->setEqLogic_id($this->getId());$ashufflesvc->setIsVisible(0);$ashufflesvc->setType('info');$ashufflesvc->setSubType('string');$ashufflesvc->save();
      $ashuffle = $this->getCmd(null, 'ashuffle');if (!is_object($ashuffle)) {$ashuffle = new moodeaudioCmd();$ashuffle->setName(__('ashuffle', __FILE__));}$ashuffle->setLogicalId('ashuffle');$ashuffle->setEqLogic_id($this->getId());$ashuffle->setIsVisible(0);$ashuffle->setType('info');$ashuffle->setSubType('string');$ashuffle->save();
      $AVAILABLE = $this->getCmd(null, 'AVAILABLE');if (!is_object($AVAILABLE)) {$AVAILABLE = new moodeaudioCmd();$AVAILABLE->setName(__('AVAILABLE', __FILE__));}$AVAILABLE->setLogicalId('AVAILABLE');$AVAILABLE->setEqLogic_id($this->getId());$AVAILABLE->setIsVisible(0);$AVAILABLE->setType('info');$AVAILABLE->setSubType('string');$AVAILABLE->save();
      $uac2fix = $this->getCmd(null, 'uac2fix');if (!is_object($uac2fix)) {$uac2fix = new moodeaudioCmd();$uac2fix->setName(__('uac2fix', __FILE__));}$uac2fix->setLogicalId('uac2fix');$uac2fix->setEqLogic_id($this->getId());$uac2fix->setIsVisible(0);$uac2fix->setType('info');$uac2fix->setSubType('string');$uac2fix->save();
      $keyboard = $this->getCmd(null, 'keyboard');if (!is_object($keyboard)) {$keyboard = new moodeaudioCmd();$keyboard->setName(__('keyboard', __FILE__));}$keyboard->setLogicalId('keyboard');$keyboard->setEqLogic_id($this->getId());$keyboard->setIsVisible(0);$keyboard->setType('info');$keyboard->setSubType('string');$keyboard->save();
      $localui = $this->getCmd(null, 'localui');if (!is_object($localui)) {$localui = new moodeaudioCmd();$localui->setName(__('localui', __FILE__));}$localui->setLogicalId('localui');$localui->setEqLogic_id($this->getId());$localui->setIsVisible(0);$localui->setType('info');$localui->setSubType('string');$localui->save();
      $toggle_songid = $this->getCmd(null, 'toggle_songid');if (!is_object($toggle_songid)) {$toggle_songid = new moodeaudioCmd();$toggle_songid->setName(__('toggle_songid', __FILE__));}$toggle_songid->setLogicalId('toggle_songid');$toggle_songid->setEqLogic_id($this->getId());$toggle_songid->setIsVisible(0);$toggle_songid->setType('info');$toggle_songid->setSubType('string');$toggle_songid->save();
      $slsvc = $this->getCmd(null, 'slsvc');if (!is_object($slsvc)) {$slsvc = new moodeaudioCmd();$slsvc->setName(__('slsvc', __FILE__));}$slsvc->setLogicalId('slsvc');$slsvc->setEqLogic_id($this->getId());$slsvc->setIsVisible(0);$slsvc->setType('info');$slsvc->setSubType('string');$slsvc->save();
      $hdmiport = $this->getCmd(null, 'hdmiport');if (!is_object($hdmiport)) {$hdmiport = new moodeaudioCmd();$hdmiport->setName(__('hdmiport', __FILE__));}$hdmiport->setLogicalId('hdmiport');$hdmiport->setEqLogic_id($this->getId());$hdmiport->setIsVisible(0);$hdmiport->setType('info');$hdmiport->setSubType('string');$hdmiport->save();
      $cpugov = $this->getCmd(null, 'cpugov');if (!is_object($cpugov)) {$cpugov = new moodeaudioCmd();$cpugov->setName(__('cpugov', __FILE__));}$cpugov->setLogicalId('cpugov');$cpugov->setEqLogic_id($this->getId());$cpugov->setIsVisible(0);$cpugov->setType('info');$cpugov->setSubType('string');$cpugov->save();
      $pairing_agent = $this->getCmd(null, 'pairing_agent');if (!is_object($pairing_agent)) {$pairing_agent = new moodeaudioCmd();$pairing_agent->setName(__('pairing_agent', __FILE__));}$pairing_agent->setLogicalId('pairing_agent');$pairing_agent->setEqLogic_id($this->getId());$pairing_agent->setIsVisible(0);$pairing_agent->setType('info');$pairing_agent->setSubType('string');$pairing_agent->save();
      $pkgid_suffix = $this->getCmd(null, 'pkgid_suffix');if (!is_object($pkgid_suffix)) {$pkgid_suffix = new moodeaudioCmd();$pkgid_suffix->setName(__('pkgid_suffix', __FILE__));}$pkgid_suffix->setLogicalId('pkgid_suffix');$pkgid_suffix->setEqLogic_id($this->getId());$pkgid_suffix->setIsVisible(0);$pkgid_suffix->setType('info');$pkgid_suffix->setSubType('string');$pkgid_suffix->save();
      $lib_pos = $this->getCmd(null, 'lib_pos');if (!is_object($lib_pos)) {$lib_pos = new moodeaudioCmd();$lib_pos->setName(__('lib_pos', __FILE__));}$lib_pos->setLogicalId('lib_pos');$lib_pos->setEqLogic_id($this->getId());$lib_pos->setIsVisible(0);$lib_pos->setType('info');$lib_pos->setSubType('string');$lib_pos->save();
      $mpdcrossfade = $this->getCmd(null, 'mpdcrossfade');if (!is_object($mpdcrossfade)) {$mpdcrossfade = new moodeaudioCmd();$mpdcrossfade->setName(__('mpdcrossfade', __FILE__));}$mpdcrossfade->setLogicalId('mpdcrossfade');$mpdcrossfade->setEqLogic_id($this->getId());$mpdcrossfade->setIsVisible(0);$mpdcrossfade->setType('info');$mpdcrossfade->setSubType('string');$mpdcrossfade->save();
      $eth0chk = $this->getCmd(null, 'eth0chk');if (!is_object($eth0chk)) {$eth0chk = new moodeaudioCmd();$eth0chk->setName(__('eth0chk', __FILE__));}$eth0chk->setLogicalId('eth0chk');$eth0chk->setEqLogic_id($this->getId());$eth0chk->setIsVisible(0);$eth0chk->setType('info');$eth0chk->setSubType('string');$eth0chk->save();
      $usb_auto_mounter = $this->getCmd(null, 'usb_auto_mounter');if (!is_object($usb_auto_mounter)) {$usb_auto_mounter = new moodeaudioCmd();$usb_auto_mounter->setName(__('usb_auto_mounter', __FILE__));}$usb_auto_mounter->setLogicalId('usb_auto_mounter');$usb_auto_mounter->setEqLogic_id($this->getId());$usb_auto_mounter->setIsVisible(0);$usb_auto_mounter->setType('info');$usb_auto_mounter->setSubType('string');$usb_auto_mounter->save();
      $rsmafterbt = $this->getCmd(null, 'rsmafterbt');if (!is_object($rsmafterbt)) {$rsmafterbt = new moodeaudioCmd();$rsmafterbt->setName(__('rsmafterbt', __FILE__));}$rsmafterbt->setLogicalId('rsmafterbt');$rsmafterbt->setEqLogic_id($this->getId());$rsmafterbt->setIsVisible(0);$rsmafterbt->setType('info');$rsmafterbt->setSubType('string');$rsmafterbt->save();
      $rotenc_params = $this->getCmd(null, 'rotenc_params');if (!is_object($rotenc_params)) {$rotenc_params = new moodeaudioCmd();$rotenc_params->setName(__('rotenc_params', __FILE__));}$rotenc_params->setLogicalId('rotenc_params');$rotenc_params->setEqLogic_id($this->getId());$rotenc_params->setIsVisible(0);$rotenc_params->setType('info');$rotenc_params->setSubType('string');$rotenc_params->save();
      $shellinabox = $this->getCmd(null, 'shellinabox');if (!is_object($shellinabox)) {$shellinabox = new moodeaudioCmd();$shellinabox->setName(__('shellinabox', __FILE__));}$shellinabox->setLogicalId('shellinabox');$shellinabox->setEqLogic_id($this->getId());$shellinabox->setIsVisible(0);$shellinabox->setType('info');$shellinabox->setSubType('string');$shellinabox->save();
      $alsaequal = $this->getCmd(null, 'alsaequal');if (!is_object($alsaequal)) {$alsaequal = new moodeaudioCmd();$alsaequal->setName(__('alsaequal', __FILE__));}$alsaequal->setLogicalId('alsaequal');$alsaequal->setEqLogic_id($this->getId());$alsaequal->setIsVisible(0);$alsaequal->setType('info');$alsaequal->setSubType('string');$alsaequal->save();
      $eqfa12p = $this->getCmd(null, 'eqfa12p');if (!is_object($eqfa12p)) {$eqfa12p = new moodeaudioCmd();$eqfa12p->setName(__('eqfa12p', __FILE__));}$eqfa12p->setLogicalId('eqfa12p');$eqfa12p->setEqLogic_id($this->getId());$eqfa12p->setIsVisible(0);$eqfa12p->setType('info');$eqfa12p->setSubType('string');$eqfa12p->save();
      $p3wifi = $this->getCmd(null, 'p3wifi');if (!is_object($p3wifi)) {$p3wifi = new moodeaudioCmd();$p3wifi->setName(__('p3wifi', __FILE__));}$p3wifi->setLogicalId('p3wifi');$p3wifi->setEqLogic_id($this->getId());$p3wifi->setIsVisible(0);$p3wifi->setType('info');$p3wifi->setSubType('string');$p3wifi->save();
      $p3bt = $this->getCmd(null, 'p3bt');if (!is_object($p3bt)) {$p3bt = new moodeaudioCmd();$p3bt->setName(__('p3bt', __FILE__));}$p3bt->setLogicalId('p3bt');$p3bt->setEqLogic_id($this->getId());$p3bt->setIsVisible(0);$p3bt->setType('info');$p3bt->setSubType('string');$p3bt->save();
      $cardnum = $this->getCmd(null, 'cardnum');if (!is_object($cardnum)) {$cardnum = new moodeaudioCmd();$cardnum->setName(__('cardnum', __FILE__));}$cardnum->setLogicalId('cardnum');$cardnum->setEqLogic_id($this->getId());$cardnum->setIsVisible(0);$cardnum->setType('info');$cardnum->setSubType('string');$cardnum->save();
      $btsvc = $this->getCmd(null, 'btsvc');if (!is_object($btsvc)) {$btsvc = new moodeaudioCmd();$btsvc->setName(__('btsvc', __FILE__));}$btsvc->setLogicalId('btsvc');$btsvc->setEqLogic_id($this->getId());$btsvc->setIsVisible(0);$btsvc->setType('info');$btsvc->setSubType('string');$btsvc->save();
      $btname = $this->getCmd(null, 'btname');if (!is_object($btname)) {$btname = new moodeaudioCmd();$btname->setName(__('btname', __FILE__));}$btname->setLogicalId('btname');$btname->setEqLogic_id($this->getId());$btname->setIsVisible(0);$btname->setType('info');$btname->setSubType('string');$btname->save();
      $btmulti = $this->getCmd(null, 'btmulti');if (!is_object($btmulti)) {$btmulti = new moodeaudioCmd();$btmulti->setName(__('btmulti', __FILE__));}$btmulti->setLogicalId('btmulti');$btmulti->setEqLogic_id($this->getId());$btmulti->setIsVisible(0);$btmulti->setType('info');$btmulti->setSubType('string');$btmulti->save();
      $feat_bitmask = $this->getCmd(null, 'feat_bitmask');if (!is_object($feat_bitmask)) {$feat_bitmask = new moodeaudioCmd();$feat_bitmask->setName(__('feat_bitmask', __FILE__));}$feat_bitmask->setLogicalId('feat_bitmask');$feat_bitmask->setEqLogic_id($this->getId());$feat_bitmask->setIsVisible(0);$feat_bitmask->setType('info');$feat_bitmask->setSubType('string');$feat_bitmask->save();
      $library_recently_added = $this->getCmd(null, 'library_recently_added');if (!is_object($library_recently_added)) {$library_recently_added = new moodeaudioCmd();$library_recently_added->setName(__('library_recently_added', __FILE__));}$library_recently_added->setLogicalId('library_recently_added');$library_recently_added->setEqLogic_id($this->getId());$library_recently_added->setIsVisible(0);$library_recently_added->setType('info');$library_recently_added->setSubType('string');$library_recently_added->save();
      $btactive = $this->getCmd(null, 'btactive');if (!is_object($btactive)) {$btactive = new moodeaudioCmd();$btactive->setName(__('btactive', __FILE__));}$btactive->setLogicalId('btactive');$btactive->setEqLogic_id($this->getId());$btactive->setIsVisible(0);$btactive->setType('info');$btactive->setSubType('string');$btactive->save();
      $touchscn = $this->getCmd(null, 'touchscn');if (!is_object($touchscn)) {$touchscn = new moodeaudioCmd();$touchscn->setName(__('touchscn', __FILE__));}$touchscn->setLogicalId('touchscn');$touchscn->setEqLogic_id($this->getId());$touchscn->setIsVisible(0);$touchscn->setType('info');$touchscn->setSubType('string');$touchscn->save();
      $scnblank = $this->getCmd(null, 'scnblank');if (!is_object($scnblank)) {$scnblank = new moodeaudioCmd();$scnblank->setName(__('scnblank', __FILE__));}$scnblank->setLogicalId('scnblank');$scnblank->setEqLogic_id($this->getId());$scnblank->setIsVisible(0);$scnblank->setType('info');$scnblank->setSubType('string');$scnblank->save();
      $scnrotate = $this->getCmd(null, 'scnrotate');if (!is_object($scnrotate)) {$scnrotate = new moodeaudioCmd();$scnrotate->setName(__('scnrotate', __FILE__));}$scnrotate->setLogicalId('scnrotate');$scnrotate->setEqLogic_id($this->getId());$scnrotate->setIsVisible(0);$scnrotate->setType('info');$scnrotate->setSubType('string');$scnrotate->save();
      $scnbrightness = $this->getCmd(null, 'scnbrightness');if (!is_object($scnbrightness)) {$scnbrightness = new moodeaudioCmd();$scnbrightness->setName(__('scnbrightness', __FILE__));}$scnbrightness->setLogicalId('scnbrightness');$scnbrightness->setEqLogic_id($this->getId());$scnbrightness->setIsVisible(0);$scnbrightness->setType('info');$scnbrightness->setSubType('string');$scnbrightness->save();
      $themename = $this->getCmd(null, 'themename');if (!is_object($themename)) {$themename = new moodeaudioCmd();$themename->setName(__('themename', __FILE__));}$themename->setLogicalId('themename');$themename->setEqLogic_id($this->getId());$themename->setIsVisible(0);$themename->setType('info');$themename->setSubType('string');$themename->save();
      $res_software_upd_url = $this->getCmd(null, 'res_software_upd_url');if (!is_object($res_software_upd_url)) {$res_software_upd_url = new moodeaudioCmd();$res_software_upd_url->setName(__('res_software_upd_url', __FILE__));}$res_software_upd_url->setLogicalId('res_software_upd_url');$res_software_upd_url->setEqLogic_id($this->getId());$res_software_upd_url->setIsVisible(0);$res_software_upd_url->setType('info');$res_software_upd_url->setSubType('string');$res_software_upd_url->save();
      $alphablend = $this->getCmd(null, 'alphablend');if (!is_object($alphablend)) {$alphablend = new moodeaudioCmd();$alphablend->setName(__('alphablend', __FILE__));}$alphablend->setLogicalId('alphablend');$alphablend->setEqLogic_id($this->getId());$alphablend->setIsVisible(0);$alphablend->setType('info');$alphablend->setSubType('string');$alphablend->save();
      $adaptive = $this->getCmd(null, 'adaptive');if (!is_object($adaptive)) {$adaptive = new moodeaudioCmd();$adaptive->setName(__('adaptive', __FILE__));}$adaptive->setLogicalId('adaptive');$adaptive->setEqLogic_id($this->getId());$adaptive->setIsVisible(0);$adaptive->setType('info');$adaptive->setSubType('string');$adaptive->save();
      $audioout = $this->getCmd(null, 'audioout');if (!is_object($audioout)) {$audioout = new moodeaudioCmd();$audioout->setName(__('audioout', __FILE__));}$audioout->setLogicalId('audioout');$audioout->setEqLogic_id($this->getId());$audioout->setIsVisible(0);$audioout->setType('info');$audioout->setSubType('string');$audioout->save();
      $audioin = $this->getCmd(null, 'audioin');if (!is_object($audioin)) {$audioin = new moodeaudioCmd();$audioin->setName(__('audioin', __FILE__));}$audioin->setLogicalId('audioin');$audioin->setEqLogic_id($this->getId());$audioin->setIsVisible(0);$audioin->setType('info');$audioin->setSubType('string');$audioin->save();
      $slactive = $this->getCmd(null, 'slactive');if (!is_object($slactive)) {$slactive = new moodeaudioCmd();$slactive->setName(__('slactive', __FILE__));}$slactive->setLogicalId('slactive');$slactive->setEqLogic_id($this->getId());$slactive->setIsVisible(0);$slactive->setType('info');$slactive->setSubType('string');$slactive->save();
      $rsmaftersl = $this->getCmd(null, 'rsmaftersl');if (!is_object($rsmaftersl)) {$rsmaftersl = new moodeaudioCmd();$rsmaftersl->setName(__('rsmaftersl', __FILE__));}$rsmaftersl->setLogicalId('rsmaftersl');$rsmaftersl->setEqLogic_id($this->getId());$rsmaftersl->setIsVisible(0);$rsmaftersl->setType('info');$rsmaftersl->setSubType('string');$rsmaftersl->save();
      $mpdmixer_local = $this->getCmd(null, 'mpdmixer_local');if (!is_object($mpdmixer_local)) {$mpdmixer_local = new moodeaudioCmd();$mpdmixer_local->setName(__('mpdmixer_local', __FILE__));}$mpdmixer_local->setLogicalId('mpdmixer_local');$mpdmixer_local->setEqLogic_id($this->getId());$mpdmixer_local->setIsVisible(0);$mpdmixer_local->setType('info');$mpdmixer_local->setSubType('string');$mpdmixer_local->save();
      $wrkready = $this->getCmd(null, 'wrkready');if (!is_object($wrkready)) {$wrkready = new moodeaudioCmd();$wrkready->setName(__('wrkready', __FILE__));}$wrkready->setLogicalId('wrkready');$wrkready->setEqLogic_id($this->getId());$wrkready->setIsVisible(0);$wrkready->setType('info');$wrkready->setSubType('string');$wrkready->save();
      $scnsaver_timeout = $this->getCmd(null, 'scnsaver_timeout');if (!is_object($scnsaver_timeout)) {$scnsaver_timeout = new moodeaudioCmd();$scnsaver_timeout->setName(__('scnsaver_timeout', __FILE__));}$scnsaver_timeout->setLogicalId('scnsaver_timeout');$scnsaver_timeout->setEqLogic_id($this->getId());$scnsaver_timeout->setIsVisible(0);$scnsaver_timeout->setType('info');$scnsaver_timeout->setSubType('string');$scnsaver_timeout->save();
      $pixel_aspect_ratio = $this->getCmd(null, 'pixel_aspect_ratio');if (!is_object($pixel_aspect_ratio)) {$pixel_aspect_ratio = new moodeaudioCmd();$pixel_aspect_ratio->setName(__('pixel_aspect_ratio', __FILE__));}$pixel_aspect_ratio->setLogicalId('pixel_aspect_ratio');$pixel_aspect_ratio->setEqLogic_id($this->getId());$pixel_aspect_ratio->setIsVisible(0);$pixel_aspect_ratio->setType('info');$pixel_aspect_ratio->setSubType('string');$pixel_aspect_ratio->save();
      $favorites_name = $this->getCmd(null, 'favorites_name');if (!is_object($favorites_name)) {$favorites_name = new moodeaudioCmd();$favorites_name->setName(__('favorites_name', __FILE__));}$favorites_name->setLogicalId('favorites_name');$favorites_name->setEqLogic_id($this->getId());$favorites_name->setIsVisible(0);$favorites_name->setType('info');$favorites_name->setSubType('string');$favorites_name->save();
      $spotifysvc = $this->getCmd(null, 'spotifysvc');if (!is_object($spotifysvc)) {$spotifysvc = new moodeaudioCmd();$spotifysvc->setName(__('spotifysvc', __FILE__));}$spotifysvc->setLogicalId('spotifysvc');$spotifysvc->setEqLogic_id($this->getId());$spotifysvc->setIsVisible(0);$spotifysvc->setType('info');$spotifysvc->setSubType('string');$spotifysvc->save();
      $spotifyname = $this->getCmd(null, 'spotifyname');if (!is_object($spotifyname)) {$spotifyname = new moodeaudioCmd();$spotifyname->setName(__('spotifyname', __FILE__));}$spotifyname->setLogicalId('spotifyname');$spotifyname->setEqLogic_id($this->getId());$spotifyname->setIsVisible(0);$spotifyname->setType('info');$spotifyname->setSubType('string');$spotifyname->save();
      $spotactive = $this->getCmd(null, 'spotactive');if (!is_object($spotactive)) {$spotactive = new moodeaudioCmd();$spotactive->setName(__('spotactive', __FILE__));}$spotactive->setLogicalId('spotactive');$spotactive->setEqLogic_id($this->getId());$spotactive->setIsVisible(0);$spotactive->setType('info');$spotactive->setSubType('string');$spotactive->save();
      $rsmafterspot = $this->getCmd(null, 'rsmafterspot');if (!is_object($rsmafterspot)) {$rsmafterspot = new moodeaudioCmd();$rsmafterspot->setName(__('rsmafterspot', __FILE__));}$rsmafterspot->setLogicalId('rsmafterspot');$rsmafterspot->setEqLogic_id($this->getId());$rsmafterspot->setIsVisible(0);$rsmafterspot->setType('info');$rsmafterspot->setSubType('string');$rsmafterspot->save();
      $library_covsearchpri = $this->getCmd(null, 'library_covsearchpri');if (!is_object($library_covsearchpri)) {$library_covsearchpri = new moodeaudioCmd();$library_covsearchpri->setName(__('library_covsearchpri', __FILE__));}$library_covsearchpri->setLogicalId('library_covsearchpri');$library_covsearchpri->setEqLogic_id($this->getId());$library_covsearchpri->setIsVisible(0);$library_covsearchpri->setType('info');$library_covsearchpri->setSubType('string');$library_covsearchpri->save();
      $library_hiresthm = $this->getCmd(null, 'library_hiresthm');if (!is_object($library_hiresthm)) {$library_hiresthm = new moodeaudioCmd();$library_hiresthm->setName(__('library_hiresthm', __FILE__));}$library_hiresthm->setLogicalId('library_hiresthm');$library_hiresthm->setEqLogic_id($this->getId());$library_hiresthm->setIsVisible(0);$library_hiresthm->setType('info');$library_hiresthm->setSubType('string');$library_hiresthm->save();
      $library_pixelratio = $this->getCmd(null, 'library_pixelratio');if (!is_object($library_pixelratio)) {$library_pixelratio = new moodeaudioCmd();$library_pixelratio->setName(__('library_pixelratio', __FILE__));}$library_pixelratio->setLogicalId('library_pixelratio');$library_pixelratio->setEqLogic_id($this->getId());$library_pixelratio->setIsVisible(0);$library_pixelratio->setType('info');$library_pixelratio->setSubType('string');$library_pixelratio->save();
      $usb_auto_updatedb = $this->getCmd(null, 'usb_auto_updatedb');if (!is_object($usb_auto_updatedb)) {$usb_auto_updatedb = new moodeaudioCmd();$usb_auto_updatedb->setName(__('usb_auto_updatedb', __FILE__));}$usb_auto_updatedb->setLogicalId('usb_auto_updatedb');$usb_auto_updatedb->setEqLogic_id($this->getId());$usb_auto_updatedb->setIsVisible(0);$usb_auto_updatedb->setType('info');$usb_auto_updatedb->setSubType('string');$usb_auto_updatedb->save();
      $cover_backdrop = $this->getCmd(null, 'cover_backdrop');if (!is_object($cover_backdrop)) {$cover_backdrop = new moodeaudioCmd();$cover_backdrop->setName(__('cover_backdrop', __FILE__));}$cover_backdrop->setLogicalId('cover_backdrop');$cover_backdrop->setEqLogic_id($this->getId());$cover_backdrop->setIsVisible(0);$cover_backdrop->setType('info');$cover_backdrop->setSubType('string');$cover_backdrop->save();
      $cover_blur = $this->getCmd(null, 'cover_blur');if (!is_object($cover_blur)) {$cover_blur = new moodeaudioCmd();$cover_blur->setName(__('cover_blur', __FILE__));}$cover_blur->setLogicalId('cover_blur');$cover_blur->setEqLogic_id($this->getId());$cover_blur->setIsVisible(0);$cover_blur->setType('info');$cover_blur->setSubType('string');$cover_blur->save();
      $cover_scale = $this->getCmd(null, 'cover_scale');if (!is_object($cover_scale)) {$cover_scale = new moodeaudioCmd();$cover_scale->setName(__('cover_scale', __FILE__));}$cover_scale->setLogicalId('cover_scale');$cover_scale->setEqLogic_id($this->getId());$cover_scale->setIsVisible(0);$cover_scale->setType('info');$cover_scale->setSubType('string');$cover_scale->save();
      $library_tagview_artist = $this->getCmd(null, 'library_tagview_artist');if (!is_object($library_tagview_artist)) {$library_tagview_artist = new moodeaudioCmd();$library_tagview_artist->setName(__('library_tagview_artist', __FILE__));}$library_tagview_artist->setLogicalId('library_tagview_artist');$library_tagview_artist->setEqLogic_id($this->getId());$library_tagview_artist->setIsVisible(0);$library_tagview_artist->setType('info');$library_tagview_artist->setSubType('string');$library_tagview_artist->save();
      $scnsaver_style = $this->getCmd(null, 'scnsaver_style');if (!is_object($scnsaver_style)) {$scnsaver_style = new moodeaudioCmd();$scnsaver_style->setName(__('scnsaver_style', __FILE__));}$scnsaver_style->setLogicalId('scnsaver_style');$scnsaver_style->setEqLogic_id($this->getId());$scnsaver_style->setIsVisible(0);$scnsaver_style->setType('info');$scnsaver_style->setSubType('string');$scnsaver_style->save();
      $ashuffle_filter = $this->getCmd(null, 'ashuffle_filter');if (!is_object($ashuffle_filter)) {$ashuffle_filter = new moodeaudioCmd();$ashuffle_filter->setName(__('ashuffle_filter', __FILE__));}$ashuffle_filter->setLogicalId('ashuffle_filter');$ashuffle_filter->setEqLogic_id($this->getId());$ashuffle_filter->setIsVisible(0);$ashuffle_filter->setType('info');$ashuffle_filter->setSubType('string');$ashuffle_filter->save();
      $mpd_httpd = $this->getCmd(null, 'mpd_httpd');if (!is_object($mpd_httpd)) {$mpd_httpd = new moodeaudioCmd();$mpd_httpd->setName(__('mpd_httpd', __FILE__));}$mpd_httpd->setLogicalId('mpd_httpd');$mpd_httpd->setEqLogic_id($this->getId());$mpd_httpd->setIsVisible(0);$mpd_httpd->setType('info');$mpd_httpd->setSubType('string');$mpd_httpd->save();
      $mpd_httpd_port = $this->getCmd(null, 'mpd_httpd_port');if (!is_object($mpd_httpd_port)) {$mpd_httpd_port = new moodeaudioCmd();$mpd_httpd_port->setName(__('mpd_httpd_port', __FILE__));}$mpd_httpd_port->setLogicalId('mpd_httpd_port');$mpd_httpd_port->setEqLogic_id($this->getId());$mpd_httpd_port->setIsVisible(0);$mpd_httpd_port->setType('info');$mpd_httpd_port->setSubType('string');$mpd_httpd_port->save();
      $mpd_httpd_encoder = $this->getCmd(null, 'mpd_httpd_encoder');if (!is_object($mpd_httpd_encoder)) {$mpd_httpd_encoder = new moodeaudioCmd();$mpd_httpd_encoder->setName(__('mpd_httpd_encoder', __FILE__));}$mpd_httpd_encoder->setLogicalId('mpd_httpd_encoder');$mpd_httpd_encoder->setEqLogic_id($this->getId());$mpd_httpd_encoder->setIsVisible(0);$mpd_httpd_encoder->setType('info');$mpd_httpd_encoder->setSubType('string');$mpd_httpd_encoder->save();
      $invert_polarity = $this->getCmd(null, 'invert_polarity');if (!is_object($invert_polarity)) {$invert_polarity = new moodeaudioCmd();$invert_polarity->setName(__('invert_polarity', __FILE__));}$invert_polarity->setLogicalId('invert_polarity');$invert_polarity->setEqLogic_id($this->getId());$invert_polarity->setIsVisible(0);$invert_polarity->setType('info');$invert_polarity->setSubType('string');$invert_polarity->save();
      $inpactive = $this->getCmd(null, 'inpactive');if (!is_object($inpactive)) {$inpactive = new moodeaudioCmd();$inpactive->setName(__('inpactive', __FILE__));}$inpactive->setLogicalId('inpactive');$inpactive->setEqLogic_id($this->getId());$inpactive->setIsVisible(0);$inpactive->setType('info');$inpactive->setSubType('string');$inpactive->save();
      $rsmafterinp = $this->getCmd(null, 'rsmafterinp');if (!is_object($rsmafterinp)) {$rsmafterinp = new moodeaudioCmd();$rsmafterinp->setName(__('rsmafterinp', __FILE__));}$rsmafterinp->setLogicalId('rsmafterinp');$rsmafterinp->setEqLogic_id($this->getId());$rsmafterinp->setIsVisible(0);$rsmafterinp->setType('info');$rsmafterinp->setSubType('string');$rsmafterinp->save();
      $gpio_svc = $this->getCmd(null, 'gpio_svc');if (!is_object($gpio_svc)) {$gpio_svc = new moodeaudioCmd();$gpio_svc->setName(__('gpio_svc', __FILE__));}$gpio_svc->setLogicalId('gpio_svc');$gpio_svc->setEqLogic_id($this->getId());$gpio_svc->setIsVisible(0);$gpio_svc->setType('info');$gpio_svc->setSubType('string');$gpio_svc->save();
      $library_ignore_articles = $this->getCmd(null, 'library_ignore_articles');if (!is_object($library_ignore_articles)) {$library_ignore_articles = new moodeaudioCmd();$library_ignore_articles->setName(__('library_ignore_articles', __FILE__));}$library_ignore_articles->setLogicalId('library_ignore_articles');$library_ignore_articles->setEqLogic_id($this->getId());$library_ignore_articles->setIsVisible(0);$library_ignore_articles->setType('info');$library_ignore_articles->setSubType('string');$library_ignore_articles->save();
      $volknob_mpd = $this->getCmd(null, 'volknob_mpd');if (!is_object($volknob_mpd)) {$volknob_mpd = new moodeaudioCmd();$volknob_mpd->setName(__('volknob_mpd', __FILE__));}$volknob_mpd->setLogicalId('volknob_mpd');$volknob_mpd->setEqLogic_id($this->getId());$volknob_mpd->setIsVisible(0);$volknob_mpd->setType('info');$volknob_mpd->setSubType('string');$volknob_mpd->save();
      $volknob_preamp = $this->getCmd(null, 'volknob_preamp');if (!is_object($volknob_preamp)) {$volknob_preamp = new moodeaudioCmd();$volknob_preamp->setName(__('volknob_preamp', __FILE__));}$volknob_preamp->setLogicalId('volknob_preamp');$volknob_preamp->setEqLogic_id($this->getId());$volknob_preamp->setIsVisible(0);$volknob_preamp->setType('info');$volknob_preamp->setSubType('string');$volknob_preamp->save();
      $library_albumview_sort = $this->getCmd(null, 'library_albumview_sort');if (!is_object($library_albumview_sort)) {$library_albumview_sort = new moodeaudioCmd();$library_albumview_sort->setName(__('library_albumview_sort', __FILE__));}$library_albumview_sort->setLogicalId('library_albumview_sort');$library_albumview_sort->setEqLogic_id($this->getId());$library_albumview_sort->setIsVisible(0);$library_albumview_sort->setType('info');$library_albumview_sort->setSubType('string');$library_albumview_sort->save();
      $kernel_architecture = $this->getCmd(null, 'kernel_architecture');if (!is_object($kernel_architecture)) {$kernel_architecture = new moodeaudioCmd();$kernel_architecture->setName(__('kernel_architecture', __FILE__));}$kernel_architecture->setLogicalId('kernel_architecture');$kernel_architecture->setEqLogic_id($this->getId());$kernel_architecture->setIsVisible(0);$kernel_architecture->setType('info');$kernel_architecture->setSubType('string');$kernel_architecture->save();
      $wake_display = $this->getCmd(null, 'wake_display');if (!is_object($wake_display)) {$wake_display = new moodeaudioCmd();$wake_display->setName(__('wake_display', __FILE__));}$wake_display->setLogicalId('wake_display');$wake_display->setEqLogic_id($this->getId());$wake_display->setIsVisible(0);$wake_display->setType('info');$wake_display->setSubType('string');$wake_display->save();
      $usb_volknob = $this->getCmd(null, 'usb_volknob');if (!is_object($usb_volknob)) {$usb_volknob = new moodeaudioCmd();$usb_volknob->setName(__('usb_volknob', __FILE__));}$usb_volknob->setLogicalId('usb_volknob');$usb_volknob->setEqLogic_id($this->getId());$usb_volknob->setIsVisible(0);$usb_volknob->setType('info');$usb_volknob->setSubType('string');$usb_volknob->save();
      $led_state = $this->getCmd(null, 'led_state');if (!is_object($led_state)) {$led_state = new moodeaudioCmd();$led_state->setName(__('led_state', __FILE__));}$led_state->setLogicalId('led_state');$led_state->setEqLogic_id($this->getId());$led_state->setIsVisible(0);$led_state->setType('info');$led_state->setSubType('string');$led_state->save();
      $library_tagview_covers = $this->getCmd(null, 'library_tagview_covers');if (!is_object($library_tagview_covers)) {$library_tagview_covers = new moodeaudioCmd();$library_tagview_covers->setName(__('library_tagview_covers', __FILE__));}$library_tagview_covers->setLogicalId('library_tagview_covers');$library_tagview_covers->setEqLogic_id($this->getId());$library_tagview_covers->setIsVisible(0);$library_tagview_covers->setType('info');$library_tagview_covers->setSubType('string');$library_tagview_covers->save();
      $library_tagview_sort = $this->getCmd(null, 'library_tagview_sort');if (!is_object($library_tagview_sort)) {$library_tagview_sort = new moodeaudioCmd();$library_tagview_sort->setName(__('library_tagview_sort', __FILE__));}$library_tagview_sort->setLogicalId('library_tagview_sort');$library_tagview_sort->setEqLogic_id($this->getId());$library_tagview_sort->setIsVisible(0);$library_tagview_sort->setType('info');$library_tagview_sort->setSubType('string');$library_tagview_sort->save();
      $library_ellipsis_limited_text = $this->getCmd(null, 'library_ellipsis_limited_text');if (!is_object($library_ellipsis_limited_text)) {$library_ellipsis_limited_text = new moodeaudioCmd();$library_ellipsis_limited_text->setName(__('library_ellipsis_limited_text', __FILE__));}$library_ellipsis_limited_text->setLogicalId('library_ellipsis_limited_text');$library_ellipsis_limited_text->setEqLogic_id($this->getId());$library_ellipsis_limited_text->setIsVisible(0);$library_ellipsis_limited_text->setType('info');$library_ellipsis_limited_text->setSubType('string');$library_ellipsis_limited_text->save();
      $preferences_modal_state = $this->getCmd(null, 'preferences_modal_state');if (!is_object($preferences_modal_state)) {$preferences_modal_state = new moodeaudioCmd();$preferences_modal_state->setName(__('preferences_modal_state', __FILE__));}$preferences_modal_state->setLogicalId('preferences_modal_state');$preferences_modal_state->setEqLogic_id($this->getId());$preferences_modal_state->setIsVisible(0);$preferences_modal_state->setType('info');$preferences_modal_state->setSubType('string');$preferences_modal_state->save();
      $font_size = $this->getCmd(null, 'font_size');if (!is_object($font_size)) {$font_size = new moodeaudioCmd();$font_size->setName(__('font_size', __FILE__));}$font_size->setLogicalId('font_size');$font_size->setEqLogic_id($this->getId());$font_size->setIsVisible(0);$font_size->setType('info');$font_size->setSubType('string');$font_size->save();
      $volume_step_limit = $this->getCmd(null, 'volume_step_limit');if (!is_object($volume_step_limit)) {$volume_step_limit = new moodeaudioCmd();$volume_step_limit->setName(__('volume_step_limit', __FILE__));}$volume_step_limit->setLogicalId('volume_step_limit');$volume_step_limit->setEqLogic_id($this->getId());$volume_step_limit->setIsVisible(0);$volume_step_limit->setType('info');$volume_step_limit->setSubType('string');$volume_step_limit->save();
      $volume_mpd_max = $this->getCmd(null, 'volume_mpd_max');if (!is_object($volume_mpd_max)) {$volume_mpd_max = new moodeaudioCmd();$volume_mpd_max->setName(__('volume_mpd_max', __FILE__));}$volume_mpd_max->setLogicalId('volume_mpd_max');$volume_mpd_max->setEqLogic_id($this->getId());$volume_mpd_max->setIsVisible(0);$volume_mpd_max->setType('info');$volume_mpd_max->setSubType('string');$volume_mpd_max->save();
      $library_thumbnail_columns = $this->getCmd(null, 'library_thumbnail_columns');if (!is_object($library_thumbnail_columns)) {$library_thumbnail_columns = new moodeaudioCmd();$library_thumbnail_columns->setName(__('library_thumbnail_columns', __FILE__));}$library_thumbnail_columns->setLogicalId('library_thumbnail_columns');$library_thumbnail_columns->setEqLogic_id($this->getId());$library_thumbnail_columns->setIsVisible(0);$library_thumbnail_columns->setType('info');$library_thumbnail_columns->setSubType('string');$library_thumbnail_columns->save();
      $library_encoded_at = $this->getCmd(null, 'library_encoded_at');if (!is_object($library_encoded_at)) {$library_encoded_at = new moodeaudioCmd();$library_encoded_at->setName(__('library_encoded_at', __FILE__));}$library_encoded_at->setLogicalId('library_encoded_at');$library_encoded_at->setEqLogic_id($this->getId());$library_encoded_at->setIsVisible(0);$library_encoded_at->setType('info');$library_encoded_at->setSubType('string');$library_encoded_at->save();
      $first_use_help = $this->getCmd(null, 'first_use_help');if (!is_object($first_use_help)) {$first_use_help = new moodeaudioCmd();$first_use_help->setName(__('first_use_help', __FILE__));}$first_use_help->setLogicalId('first_use_help');$first_use_help->setEqLogic_id($this->getId());$first_use_help->setIsVisible(0);$first_use_help->setType('info');$first_use_help->setSubType('string');$first_use_help->save();
      $playlist_art = $this->getCmd(null, 'playlist_art');if (!is_object($playlist_art)) {$playlist_art = new moodeaudioCmd();$playlist_art->setName(__('playlist_art', __FILE__));}$playlist_art->setLogicalId('playlist_art');$playlist_art->setEqLogic_id($this->getId());$playlist_art->setIsVisible(0);$playlist_art->setType('info');$playlist_art->setSubType('string');$playlist_art->save();
      $ashuffle_mode = $this->getCmd(null, 'ashuffle_mode');if (!is_object($ashuffle_mode)) {$ashuffle_mode = new moodeaudioCmd();$ashuffle_mode->setName(__('ashuffle_mode', __FILE__));}$ashuffle_mode->setLogicalId('ashuffle_mode');$ashuffle_mode->setEqLogic_id($this->getId());$ashuffle_mode->setIsVisible(0);$ashuffle_mode->setType('info');$ashuffle_mode->setSubType('string');$ashuffle_mode->save();
      $radioview_sort_group = $this->getCmd(null, 'radioview_sort_group');if (!is_object($radioview_sort_group)) {$radioview_sort_group = new moodeaudioCmd();$radioview_sort_group->setName(__('radioview_sort_group', __FILE__));}$radioview_sort_group->setLogicalId('radioview_sort_group');$radioview_sort_group->setEqLogic_id($this->getId());$radioview_sort_group->setIsVisible(0);$radioview_sort_group->setType('info');$radioview_sort_group->setSubType('string');$radioview_sort_group->save();
      $radioview_show_hide = $this->getCmd(null, 'radioview_show_hide');if (!is_object($radioview_show_hide)) {$radioview_show_hide = new moodeaudioCmd();$radioview_show_hide->setName(__('radioview_show_hide', __FILE__));}$radioview_show_hide->setLogicalId('radioview_show_hide');$radioview_show_hide->setEqLogic_id($this->getId());$radioview_show_hide->setIsVisible(0);$radioview_show_hide->setType('info');$radioview_show_hide->setSubType('string');$radioview_show_hide->save();
      $renderer_backdrop = $this->getCmd(null, 'renderer_backdrop');if (!is_object($renderer_backdrop)) {$renderer_backdrop = new moodeaudioCmd();$renderer_backdrop->setName(__('renderer_backdrop', __FILE__));}$renderer_backdrop->setLogicalId('renderer_backdrop');$renderer_backdrop->setEqLogic_id($this->getId());$renderer_backdrop->setIsVisible(0);$renderer_backdrop->setType('info');$renderer_backdrop->setSubType('string');$renderer_backdrop->save();
      $library_flatlist_filter = $this->getCmd(null, 'library_flatlist_filter');if (!is_object($library_flatlist_filter)) {$library_flatlist_filter = new moodeaudioCmd();$library_flatlist_filter->setName(__('library_flatlist_filter', __FILE__));}$library_flatlist_filter->setLogicalId('library_flatlist_filter');$library_flatlist_filter->setEqLogic_id($this->getId());$library_flatlist_filter->setIsVisible(0);$library_flatlist_filter->setType('info');$library_flatlist_filter->setSubType('string');$library_flatlist_filter->save();
      $library_flatlist_filter_str = $this->getCmd(null, 'library_flatlist_filter_str');if (!is_object($library_flatlist_filter_str)) {$library_flatlist_filter_str = new moodeaudioCmd();$library_flatlist_filter_str->setName(__('library_flatlist_filter_str', __FILE__));}$library_flatlist_filter_str->setLogicalId('library_flatlist_filter_str');$library_flatlist_filter_str->setEqLogic_id($this->getId());$library_flatlist_filter_str->setIsVisible(0);$library_flatlist_filter_str->setType('info');$library_flatlist_filter_str->setSubType('string');$library_flatlist_filter_str->save();
      $library_misc_options = $this->getCmd(null, 'library_misc_options');if (!is_object($library_misc_options)) {$library_misc_options = new moodeaudioCmd();$library_misc_options->setName(__('library_misc_options', __FILE__));}$library_misc_options->setLogicalId('library_misc_options');$library_misc_options->setEqLogic_id($this->getId());$library_misc_options->setIsVisible(0);$library_misc_options->setType('info');$library_misc_options->setSubType('string');$library_misc_options->save();
      $recorder_status = $this->getCmd(null, 'recorder_status');if (!is_object($recorder_status)) {$recorder_status = new moodeaudioCmd();$recorder_status->setName(__('recorder_status', __FILE__));}$recorder_status->setLogicalId('recorder_status');$recorder_status->setEqLogic_id($this->getId());$recorder_status->setIsVisible(0);$recorder_status->setType('info');$recorder_status->setSubType('string');$recorder_status->save();
      $recorder_storage = $this->getCmd(null, 'recorder_storage');if (!is_object($recorder_storage)) {$recorder_storage = new moodeaudioCmd();$recorder_storage->setName(__('recorder_storage', __FILE__));}$recorder_storage->setLogicalId('recorder_storage');$recorder_storage->setEqLogic_id($this->getId());$recorder_storage->setIsVisible(0);$recorder_storage->setType('info');$recorder_storage->setSubType('string');$recorder_storage->save();
      $volume_db_display = $this->getCmd(null, 'volume_db_display');if (!is_object($volume_db_display)) {$volume_db_display = new moodeaudioCmd();$volume_db_display->setName(__('volume_db_display', __FILE__));}$volume_db_display->setLogicalId('volume_db_display');$volume_db_display->setEqLogic_id($this->getId());$volume_db_display->setIsVisible(0);$volume_db_display->setType('info');$volume_db_display->setSubType('string');$volume_db_display->save();
      $search_site = $this->getCmd(null, 'search_site');if (!is_object($search_site)) {$search_site = new moodeaudioCmd();$search_site->setName(__('search_site', __FILE__));}$search_site->setLogicalId('search_site');$search_site->setEqLogic_id($this->getId());$search_site->setIsVisible(0);$search_site->setType('info');$search_site->setSubType('string');$search_site->save();
      $raspbianver = $this->getCmd(null, 'raspbianver');if (!is_object($raspbianver)) {$raspbianver = new moodeaudioCmd();$raspbianver->setName(__('raspbianver', __FILE__));}$raspbianver->setLogicalId('raspbianver');$raspbianver->setEqLogic_id($this->getId());$raspbianver->setIsVisible(0);$raspbianver->setType('info');$raspbianver->setSubType('string');$raspbianver->save();
      $ipaddress = $this->getCmd(null, 'ipaddress');if (!is_object($ipaddress)) {$ipaddress = new moodeaudioCmd();$ipaddress->setName(__('ipaddress', __FILE__));}$ipaddress->setLogicalId('ipaddress');$ipaddress->setEqLogic_id($this->getId());$ipaddress->setIsVisible(0);$ipaddress->setType('info');$ipaddress->setSubType('string');$ipaddress->save();
      $bgimage = $this->getCmd(null, 'bgimage');if (!is_object($bgimage)) {$bgimage = new moodeaudioCmd();$bgimage->setName(__('bgimage', __FILE__));}$bgimage->setLogicalId('bgimage');$bgimage->setEqLogic_id($this->getId());$bgimage->setIsVisible(0);$bgimage->setType('info');$bgimage->setSubType('string');$bgimage->save();
      
      
           
      $song_title = $this->getCmd(null, 'song_title');if (!is_object($song_title)) {$song_title = new moodeaudioCmd();$song_title->setName(__('song title', __FILE__));}$song_title->setLogicalId('song_title');$song_title->setEqLogic_id($this->getId());$song_title->setIsVisible(1);$song_title->setType('info');$song_title->setSubType('string');$song_title->save();
$song_name = $this->getCmd(null, 'song_name');if (!is_object($song_name)) {$song_name = new moodeaudioCmd();$song_name->setName(__('song name', __FILE__));}$song_name->setLogicalId('song_name');$song_name->setEqLogic_id($this->getId());$song_name->setIsVisible(1);$song_name->setType('info');$song_name->setSubType('string');$song_name->save();
$song_pos = $this->getCmd(null, 'song_pos');if (!is_object($song_pos)) {$song_pos = new moodeaudioCmd();$song_pos->setName(__('song pos', __FILE__));}$song_pos->setLogicalId('song_pos');$song_pos->setEqLogic_id($this->getId());$song_pos->setIsVisible(1);$song_pos->setType('info');$song_pos->setSubType('string');$song_pos->save();
$song_id = $this->getCmd(null, 'song_id');if (!is_object($song_id)) {$song_id = new moodeaudioCmd();$song_id->setName(__('song id', __FILE__));}$song_id->setLogicalId('song_id');$song_id->setEqLogic_id($this->getId());$song_id->setIsVisible(1);$song_id->setType('info');$song_id->setSubType('string');$song_id->save();
      $song_file = $this->getCmd(null, 'song_file');if (!is_object($song_file)) {$song_file = new moodeaudioCmd();$song_file->setName(__('song_file', __FILE__));}$song_file->setLogicalId('song_file');$song_file->setEqLogic_id($this->getId());$song_file->setIsVisible(1);$song_file->setType('info');$song_file->setSubType('string');$song_file->save();
      
      $volume_set = $this->getCmd(null, 'volume_set');       
      if (!is_object($volume_set)) 
      {
        $volume_set = new moodeaudioCmd();
        $volume_set->setLogicalId('volume_set');
        $volume_set->setIsVisible(1);
        $volume_set->setOrder(4); 
        $volume_set->setName(__('Volume', __FILE__));
        $volume_set->setDisplay('icon', '<i class="fas fa-volume-off"></i>');
      }
      $volume_set->setType('action');
       // $volume_set->setSubType('other');
      $volume_set->setSubType('slider');
      $volume_set->setConfiguration('minValue', 0);
      $volume_set->setConfiguration('maxValue', 100);
              //$volume_set->setConfiguration('request', 'setvolume');
    //$volume_set->setConfiguration('parameters', 'volume=#volume#');
      
      $volume_set->setValue($volknob->getId());
      
      $volume_set->setEqLogic_id($this->getId());
      $volume_set->save();
       // Refresh

      $refresh = $this->getCmd(null, 'refresh');
      if (!is_object($refresh)) {
       $refresh = new moodeaudioCmd();
       $refresh->setOrder(7);
        //   $refresh_song->setDisplay('icon', '<i class="fas jeedomapp-reload"></i>');
       $refresh->setName(__('Rafraichir', __FILE__));
     }
     $refresh->setEqLogic_id($this->getId());
     $refresh->setLogicalId('refresh');
     $refresh->setType('action');
     $refresh->setSubType('other');
     $refresh->save();
      
      $refresh_song = $this->getCmd(null, 'refresh_song');
      if (!is_object($refresh_song)) {
       $refresh_song = new moodeaudioCmd();
           $refresh_song->setIsVisible(1);
       $refresh_song->setOrder(8);
       $refresh_song->setDisplay('icon', '<i class="fas jeedomapp-reload"></i>');
       $refresh_song->setName(__('Rafraichir song', __FILE__));
     }
     $refresh_song->setEqLogic_id($this->getId());
     $refresh_song->setLogicalId('refresh_song');
     $refresh_song->setType('action');
     $refresh_song->setSubType('other');
     $refresh_song->save();
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
            
          case 'refresh_song':
          $eqlogic->moodeaudio_collect_song();
          break;
          
          case 'volume_set':
            
             $volume_change = $_options['slider'];
                 log::add('moodeaudio', 'info', ' Volume_set changed'.$volume_change);
            $eqlogic->moodeaudio_volume_set($volume_change);
          break; 
        }
      }
    }