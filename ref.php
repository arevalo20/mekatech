<?php

/*
HECHO POR tttony 2007
http://tttony.blogspot.com/
*/

function referer() {

// IP del cliente
$remote_ip = (isset($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : "(Sin IP)";
// ISP del cliente
$remote_isp = gethostbyaddr($remote_ip);
// Aqui la pagina que lo refirio
$referer = (isset($_SERVER['HTTP_REFERER'])) ? strtolower($_SERVER['HTTP_REFERER']) : "(Sin referer)";
// No guardar mis propios referers :)
$my_host = strpos($referer, $_SERVER['HTTP_HOST']);


if (($referer != "error") && ($my_host === false)) {
$file = "referer.txt";
$fo = @fopen($file, "rb");
$content = (is_resource($fo)) ? @fread($fo, filesize($file)) : "";
@fclose($fo);

$exist_ip = strpos($content, $remote_ip);
$exist_ref = strpos($content, $referer);
if (($exist_ip === false) || ($exist_ref === false)) {
$str = time() . " " . $remote_ip . "(" . $remote_isp . ") " . $referer . "\n";
$fo = @fopen($file, "ab");
if (is_resource($fo)) @fwrite($fo, $str);
@fclose($fo);
}
}
}

referer();

?>