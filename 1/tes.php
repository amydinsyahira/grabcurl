<?php
/************************************************************************
*
* PostIt - Pretend to be a form.
*
* Copyright (c) 1999 Ho****** Enterprises. All rights reserved.
* You may freely modify and use this function for your own purposes. You
* may freely distribute it, without modification and with this notice
* and entire header intact.
* 
* This function takes an associative array and a URL. The array is URL-
* encoded and then POSTed to the URL. If the request succeeds, the 
* response, if any, is returned in a scalar array. Outputting this is the
* caller's responsibility; bear in mind that it will include the HTTP
* headers. If the request fails, an associative array is returned with the
* elements 'errno' and 'errstr' corresponding to the error number and
* error message. If you have any questions or comments, please direct
* them to postit@ho******.net
* 
* Alan Little
* Ho****** Enterprises
* http://www.ho******.net/
* December 1999
* 
************************************************************************/

function PostIt($DataStream, $URL) {

// Strip http:// from the URL if present
$URL = ereg_replace("^http://", "", $URL);

// Separate into Host and URI
$Host = substr($URL, 0, strpos($URL, "/"));
$URI = strstr($URL, "/");

// Form up the request body
$ReqBody = "";
while (list($key, $val) = each($DataStream)) {
if ($ReqBody) $ReqBody.= "&";
$ReqBody.= $key."=".urlencode($val);
}
$ContentLength = strlen($ReqBody);

// Generate the request header
$ReqHeader = 
"POST $URI HTTP/1.1\n".
"Host: $Host\n".
"Content-Type: application/x-www-form-urlencoded\n".
"Content-Length: $ContentLength\n\n".
"$ReqBody\n";

// Open the connection to the host
$socket = fsockopen($Host, 80, &$errno, &$errstr);
if (!$socket) {
//$Result["errno"] = $errno.'errno<br />';
//$Result["errstr"] = $errstr.'errstr<br />';
$Result='Maaf Data tidak tersedia untuk saat ini';
return $Result;
}
$idx = 0;
fputs($socket, $ReqHeader);
while (!feof($socket)) {
$Result[$idx++] = fgets($socket, 128);
}
return $Result;
}
?>



<?php
/*
Sample code calling PostIt(). Note (no pun intended) that it is better to
test for an error result with isset() rather than simply
if ($Result["errno"])
as the error number can be zero.
*/

//include("postit.php3");

$url='http://www.batavia-air.com/public/etiket/includes/class/booking/template/cariBookAjaxPros.php';
$d[ruteBerangkat]=$_REQUEST['ruteBerangkat'];
$d[page]=$_REQUEST['page'];
$d[ruteTujuan]=$_REQUEST['ruteTujuan'];
$d[tglBerangkatPergi]=$_REQUEST['tglBerangkatPergi'];
$d[blnthnBerangkatPergi]=$_REQUEST['blnthnBerangkatPergi'];
$d[tglBerangkatKembali]=$_REQUEST['tglBerangkatKembali'];
$d[blnthnBerangkatKembali]=$_REQUEST['blnthnBerangkatKembali'];
$d[jmlInfant]=$_REQUEST['jmlInfant'];
$d[ruteKembali]=$_REQUEST['ruteKembali'];
$d[Submit]=$_REQUEST['Submit'];
$d[jmlPenumpang]=$_REQUEST['jmlPenumpang'];


$Result = PostIt($d, $url);

if (isset($Result["errno"])) {
$errno = $Result["errno"]; $errstr = $Result["errstr"];
echo "<B>Error $errno</B> $errstr";
exit;
}
else {
while (list($key, $val) = each($Result)) 
$valx=$valx.$val;
}
$valx=str_replace('HTTP/1.1','<!-- HTTP/1.1',$valx);
$valx=str_replace('<div id="centerright">',' //--> <div id="centerright">',$valx);
$valx=str_replace('action="http://www.batavia-air.com/etiket/"','action="javascript:get(document.getElementById(\'searchbook\'));"',$valx);
echo $valx;
?>