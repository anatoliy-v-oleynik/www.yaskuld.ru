<?php

extract($HTTP_GET_VARS);
extract($HTTP_POST_VARS);
extract($HTTP_COOKIE_VARS);
extract($HTTP_SERVER_VARS);

$fileName="../stat.log";
$cookieName="visitorofyaskuld";
$cookieValue="1";

GLOBAL $fileName, $HTTP_USER_AGENT, $REMOTE_ADDR, $REMOTE_HOST, $HTTP_REFERER, $REQUES_URI;
$curTime=date("d.m.Y @ H:i:s");

if (empty($HTTP_USER_AGENT)) {$HTTP_USER_AGENT = "Unkwnown";}
if (empty($REMOTE_ADDR)) {$REMOTE_ADDR = "Not Resolved";}
if (empty($REMOTE_HOST)) {$REMOTE_HOST = "Unknown";}
if (empty($HTTP_REFERER)) {$HTTP_REFERER = "No Referer";}
if (empty($REQUEST_URI)) {$REQUEST_URI = "Unknown";}
$data_ = $HTTP_USER_AGENT."::".$REMOTE_ADDR."::".$REMOTE_HOST."::".$HTTP_REFERER."::".$REQUEST_URI."::".$curTime."\r\n";

$fp = fopen($fileName, "a");
fputs ($fp, $data_);
fclose ($fp);

?>
