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
$rtn='Maaf Data tidak tersedia untuk saat ini';
return $rtn;
}
$idx = 0;
fputs($socket, $ReqHeader);
while (!feof($socket)) {
$rtn[$idx++] = fgets($socket, 128);
}
return $rtn;
}

************************************************************************/

/************************************************************************
*
* HttpGetIt - Pretend to be a form.
*
************************************************************************/
function ffl_HttpGet( $url, $followRedirects=true ) {
    $url_parsed = parse_url($url);
    if ( empty($url_parsed['scheme']) ) {
        $url_parsed = parse_url('http://'.$url);
    }
    $rtn['url'] = $url_parsed;

    $port = $url_parsed["port"];
    if ( !$port ) {
        $port = 80;
    }
    $rtn['url']['port'] = $port;
    
    $path = $url_parsed["path"];
    if ( empty($path) ) {
            $path="/";
    }
    if ( !empty($url_parsed["query"]) ) {
        $path .= "?".$url_parsed["query"];
    }
    $rtn['url']['path'] = $path;

    $host = $url_parsed["host"];
    $foundBody = false;

    $out = "GET $path HTTP/1.1\r\n";
    $out .= "Host: $host\r\n";
    $out .= "Connection: Close\r\n\r\n";

    if ( !$fp = @fsockopen($host, $port, &$errno, &$errstr) ) {
        // $rtn['errornumber'] = $errno;
        // $rtn['errorstring'] = $errstr;
		$rtn='Maaf Data tidak tersedia untuk saat ini';
        return $rtn;
    }
    fputs($fp, $out);
    while (!feof($fp)) {
        $s = fgets($fp, 128);
        if ( $s == "\r\n" ) {
            $foundBody = true;
            continue;
        }
        if ( $foundBody ) {
            $body .= $s;
        } else {
            if ( ($followRedirects) && (stristr($s, "location:") != false) ) {
                $redirect = preg_replace("/location:/i", "", $s);
                return ffl_HttpGet( trim($redirect) );
            }
            $header .= $s;
        }
    }
    fclose($fp);

    $rtn['header'] = trim($header);
    $rtn['body'] = trim($body);
    return $rtn;
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

$url='http://www.momondo.com/Momondo.asmx/StartFlightSearch';
	$d['orig'] = $_REQUEST['orig'];
	$d['dest'] = $_REQUEST['dest'];
	$d['departDate'] = $_REQUEST['departDate'];
	$d['returnDate'] = $_REQUEST['returnDate'];
	$d['oneway'] = $_REQUEST['oneway'];
	$d['live'] = $_REQUEST['live'];
/*
$rtn = PostIt($d, $url);
*/
$rtn = ffl_HttpGet($url);

if (isset($rtn["errno"])) {
$errno = $rtn["errno"]; $errstr = $rtn["errstr"];
echo "<B>Error $errno</B> $errstr";
exit;
}
else {
while (list($key, $val) = each($rtn)) { 
$valx=$valx.$val;
}
}
/*
$valx=str_replace('HTTP/1.1','<!-- HTTP/1.1',$valx);
$valx=str_replace('onsubmit="return validatorForm(this);"','',$valx);
*/
echo $valx;
?>