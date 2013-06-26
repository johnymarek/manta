<?php

// ###############################################################
// ##   Main part of code write by KSV 							##
// ##   https://github.com/K-S-V/Scripts                        ##
// ##   Modified for xLiveCZ:                                   ##
// ##   http://sites.google.com/site/pavelbaco/                 ##
// ##   Copyright (C) 2012  Pavel Baèo   (killerman)            ##
// ##                                                           ##
// ## This file is a part of xLiveCZ, this project doesnt have  ##
// ## any support from Xtreamer company and just be design for  ##  
// ## realtek based players									    ##
// ###############################################################
  class CLI
    {
      protected static $ACCEPTED = array(
          0 => array(
              'help'  => 'displays this help',
              'quiet' => 'disables unnecessary output',
              'print' => 'only prints the base rtmpdump command, does not start anything',
              'list'  => 'displays formatted channels list and exits'
          ),
          1 => array(
              'url' => 'immediately uses [param] as url without displaying channels list'
          )
      );
      var $params = array();

      public function __construct()
        {
          global $argc, $argv;

          // Parse params
          if ($argc > 1)
            {
              $doubleParam = false;
              for ($i = 1; $i < $argc; $i++)
                {
                  $arg     = $argv[$i];
                  $isparam = preg_match('/^--/', $arg);

                  if ($isparam)
                      $arg = preg_replace('/^--/', '', $arg);

                  if ($doubleParam && $isparam)
                    {
                      echo "[param] expected after '$doubleParam' switch (" . self::$ACCEPTED[1][$doubleParam] . ")\n";
                      exit(1);
                    }
                  else if (!$doubleParam && !$isparam)
                    {
                      echo "'$arg' is an invalid switch, use --help to display valid switches\n";
                      exit(1);
                    }
                  else if (!$doubleParam && $isparam)
                    {
                      if (isset($this->params[$arg]))
                        {
                          echo "'$arg' switch cannot occur more than once\n";
                          die;
                        }

                      $this->params[$arg] = true;
                      if (isset(self::$ACCEPTED[1][$arg]))
                          $doubleParam = $arg;
                      else if (!isset(self::$ACCEPTED[0][$arg]))
                        {
                          echo "there's no '$arg' switch, use --help to display all switches\n";
                          exit(1);
                        }
                    }
                  else if ($doubleParam && !$isparam)
                    {
                      $this->params[$doubleParam] = $arg;
                      $doubleParam                = false;
                    }
                }
            }

          // Final check
          foreach ($this->params as $k => $v)
              if (isset(self::$ACCEPTED[1][$k]) && $v === true)
                {
                  echo "[param] expected after '$k' switch (" . self::$ACCEPTED[1][$k] . ")\n";
                  die;
                }
        }

      public function getParam($name)
        {
          if (isset($this->params[$name]))
              return $this->params[$name];
          else
              return "";
        }

      public function displayHelp()
        {
          echo "You can use script with following switches: \n\n";
          foreach (self::$ACCEPTED[0] as $key => $value)
              printf(" --%-13s%s\n", $key, $value);
          foreach (self::$ACCEPTED[1] as $key => $value)
              printf(" --%-13s%s\n", $key . " [param]", $value);
          exit(0);
        }
    }

  class cURL
    {
      var $headers;
      var $user_agent;
      var $compression;
      var $cookie_file;
      var $proxy;

      function cURL($cookies = true, $cookie = 'Cookies.txt', $compression = 'gzip', $proxy = '')
        {
          $this->headers[]   = 'Accept: image/gif, image/x-bitmap, image/jpeg, image/pjpeg';
          $this->headers[]   = 'Connection: Keep-Alive';
          $this->headers[]   = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';
          $this->user_agent  = 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 1.0.3705; .NET CLR 1.1.4322; Media Center PC 4.0)';
          $this->compression = $compression;
          $this->proxy       = $proxy;
          $this->cookies     = $cookies;
          if ($this->cookies == true)
              $this->cookie($cookie);
        }

      function cookie($cookie_file)
        {
          if (file_exists($cookie_file))
            {
              $this->cookie_file = $cookie_file;
            }
          else
            {
              $file = fopen($cookie_file, 'w') or $this->error('The cookie file could not be opened. Make sure this directory has the correct permissions');
              $this->cookie_file = $cookie_file;
              fclose($file);
            }
        }

      function get($url)
        {
          $process = curl_init($url);
          curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
          curl_setopt($process, CURLOPT_HEADER, 0);
          curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
          if ($this->cookies == true)
              curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
          if ($this->cookies == true)
              curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
          curl_setopt($process, CURLOPT_ENCODING, $this->compression);
          curl_setopt($process, CURLOPT_TIMEOUT, 30);
          if ($this->proxy)
              curl_setopt($process, CURLOPT_PROXY, $this->proxy);
          curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
          $return = curl_exec($process);
          curl_close($process);
          return $return;
        }

      function post($url, $data)
        {
          $process = curl_init($url);
          curl_setopt($process, CURLOPT_HTTPHEADER, $this->headers);
          curl_setopt($process, CURLOPT_HEADER, 1);
          curl_setopt($process, CURLOPT_USERAGENT, $this->user_agent);
          if ($this->cookies == true)
              curl_setopt($process, CURLOPT_COOKIEFILE, $this->cookie_file);
          if ($this->cookies == true)
              curl_setopt($process, CURLOPT_COOKIEJAR, $this->cookie_file);
          curl_setopt($process, CURLOPT_ENCODING, $this->compression);
          curl_setopt($process, CURLOPT_TIMEOUT, 30);
          if ($this->proxy)
              curl_setopt($process, CURLOPT_PROXY, $this->proxy);
          curl_setopt($process, CURLOPT_POSTFIELDS, $data);
          curl_setopt($process, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($process, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($process, CURLOPT_POST, 1);
          $return = curl_exec($process);
          curl_close($process);
          return $return;
        }

      function error($error)
        {
          echo "cURL Error : $error";
          die;
        }
    }

  function runAsyncBatch($command, $filename)
    {
      $BatchFile = fopen("WeebTV.bat", 'w');
      fwrite($BatchFile, "@Echo off\r\n");
      fwrite($BatchFile, "Title $filename\r\n");
      fwrite($BatchFile, "$command\r\n");
      fwrite($BatchFile, "Del \"WeebTV.bat\"\r\n");
      fclose($BatchFile);
      $WshShell = new COM("WScript.Shell");
      $oExec    = $WshShell->Run("WeebTV.bat", 1, false);
      unset($WshShell, $oExec);
    }

  function SafeFileName($filename)
    {
      $len = strlen($filename);
      for ($i = 0; $i < $len; $i++)
        {
          $char = ord($filename[$i]);
          if (($char < 32) || ($char >= 127))
              $filename = substr_replace($filename, ' ', $i, 1);
        }
      $filename = preg_replace('/[\/\\\?\*\:\|\<\>]/i', ' ', $filename);
      $filename = preg_replace('/\s\s+/i', ' ', $filename);
      $filename = trim($filename);
      return $filename;
    }

  function KeyName(array $a, $pos)
    {
      $temp = array_slice($a, $pos, 1, true);
      return key($temp);
    }

  function ci_uksort($a, $b)
    {
      $a = strtolower($a);
      $b = strtolower($b);
      if ($a < $b)
          return -1;
      else if ($a == $b)
          return 0;
      else
          return 1;
    }

  function Display($items, $format, $columns)
    {
      global $cli;

      // Display formatted channels list for external script
      if ($cli->getParam('list'))
        {
          foreach ($items as $name => $url)
            {
              echo preg_replace('/=/', '-', $name) . "=$url\n";
            }
          exit(0);
        }

      $numcols  = $columns;
      $numitems = count($items);
      $numrows  = ceil($numitems / $numcols);

      for ($row = 1; $row <= $numrows; $row++)
        {
          $cell = 0;
          for ($col = 1; $col <= $numcols; $col++)
            {
              if ($col === 1)
                {
                  $cell += $row;
                  printf($format, $cell, KeyName($items, $cell - 1));
                }
              else
                {
                  $cell += $numrows;
                  if (isset($items[KeyName($items, $cell - 1)]))
                      printf($format, $cell, KeyName($items, $cell - 1));
                }
            }
          echo "\n\n";
        }
    }

  function Close($message)
    {
      global $cli;
      LogOut();
      if (file_exists("Cookies.txt"))
          unlink("Cookies.txt");
      qecho($message . "\n");
      if (!count($cli->params))
          sleep(2);
      die();
    }

  function ReadSettings()
    {
      global $quality, $username, $password;
      if (file_exists("WeebTV.xml"))
        {
          $xml      = simplexml_load_file("WeebTV.xml");
          $quality  = $xml->quality;
          $username = $xml->username;
          $password = $xml->password;
        }
      else
        {
          $quality  = "HI";
          $username = "";
          $password = "";
        }
    }

  function LogIn()
    {
      global $cc, $logged_in, $username, $password;
      if (($username != "") && ($password != ""))
        {
          $cc->post("http://weeb.tv/account/login", "username=$username&userpassword=$password");
          $logged_in = true;
        }
      else
          $logged_in = false;
    }

  function LogOut()
    {
      global $cc, $logged_in;
      if ($logged_in)
        {
          $cc->get("http://weeb.tv/account/logout");
          $logged_in = false;
        }
    }

  function ShowChannel($url)
    {
      global $cc, $format, $password, $PremiumUser, $quality, $username, $vlc, $windows, $cli;
      $query = $_GET["id"];
	  if($query) {
   $queryArr = explode(',', $query);
   $url = $queryArr[0];
   $disk = $queryArr[1];}
      $html = $cc->get($url);
      preg_match('/(flashvars.*?=.*?"&cid=.*?)(\d+)(.*?")/i', $html, $cid);
      if (!isset($cid[2]))
          Close("No channel id found");

      // Retrieve rtmp stream info
      $cc->headers[] = "Referer: http://weeb.tv/static/player.swf";
      $response      = $cc->post("http://weeb.tv/api/setPlayer", "cid=$cid[2]&watchTime=0&firstConnect=1&ip=NaN");
      $result        = explode("\r\n\r\n", $response, 2);
      $flashVars     = explode("&", trim($result[1]));
      foreach ($flashVars as $flashVar)
        {
          $temp          = explode("=", $flashVar);
          $name          = strtolower($temp[0]);
          $Params[$name] = $temp[1];
        }
      //$rtmp         = str_replace("r8.", "r" . rand(1, 7) . ".", urldecode($Params["10"]));
      $rtmp         = urldecode($Params["10"]);
      $playpath     = urldecode($Params["11"]);
      $MultiBitrate = urldecode($Params["20"]);
      $PremiumUser  = urldecode($Params["5"]);
      if ($MultiBitrate)
          $playpath .= $quality;

      $BlockType = urldecode($Params["13"]);
      if ($BlockType != 0)
        {
          switch ($BlockType)
          {
              case 1:
                  $BlockTime        = urldecode($Params["14"]);
                  $ReconnectionTime = urldecode($Params["16"]);
	                  break;
              case 11:
                      break;
              default:
                  break;
          }
        }

      if (!isset($Params["73"]))
        {
          // Retrieve authentication token
          $response  = $cc->post("http://weeb.tv/setplayer", "cid=$cid[2]&watchTime=0&firstConnect=0&ip=NaN");
          $result    = explode("\r\n\r\n", $response, 2);
          $flashVars = explode("&", trim($result[1]));
          foreach ($flashVars as $flashVar)
            {
              $temp          = explode("=", $flashVar);
              $name          = strtolower($temp[0]);
              $Params[$name] = $temp[1];
            }
        }

      if (isset($Params["73"]))
          $token = $Params["73"];
      else
          Close("Server seems busy. please try after some time.");
      qprintf($format, "RTMP Url", $rtmp);
      qprintf($format, "Playpath", $playpath);
      qprintf($format, "Token", $token);
      qprintf($format, "Premium", $PremiumUser ? "Yes" : "No");
      if (($username != "") && ($password != ""))
          $token = "$token;$username;$password";
      else $token = "$token;;";
	$lnk = "".$disk."xLiveCZ/nova.sh?type=weeb&url=".$rtmp."/".$playpath."&w=http://static2.weeb.tv/player.swf&p=http://weeb.tv&y=".$playpath."&j=".$token."";
	print $lnk;
       //$basecmd = 'rtmpdump -r "' . $rtmp . "/" . $playpath . '" -W "http://static2.weeb.tv/player.swf" --weeb "' . $token . "\" --live";
     // $command = $basecmd . " | \"$vlc\" -";

     if ($cli->getParam('print'))
        {
          echo $basecmd;
          exit(0);
        }

      /*qprintf($format, "Command", $command);
      if ($rtmp && $token)
          if ($windows)
              runAsyncBatch($command, $filename);
          else
              exec($command);*/
    }

  function qecho($str)
    {
      global $cli;
      if (!$cli->getParam('quiet'))
          echo $str;
    }

  function qprintf($format, $param, $arg)
    {
      global $cli;
      if (!$cli->getParam('quiet'))
          printf($format, $param, $arg);
    }

  // Global code starts here
  /*$header        = "\nKSV WeebTV Downloader\n\n";
  $format        = "%-8s : %s\n";
  $ChannelFormat = "%2d) %-22.22s";

  strncasecmp(php_uname('s'), "Win", 3) == 0 ? $windows = true : $windows = false;
  if ($windows)
    {
      if (file_exists("C:\\Program Files (x86)\\VideoLAN\\VLC\\vlc.exe"))
          $vlc = "C:\\Program Files (x86)\\VideoLAN\\VLC\\vlc.exe";
      else
          $vlc = "C:\\Program Files\\VideoLAN\\VLC\\vlc.exe";
    }
  else
      $vlc = "vlc";*/
  $cli = new CLI();
  $cc = new cURL();

     ReadSettings();
     LogIn();
	 ShowChannel($url);
	 
?>