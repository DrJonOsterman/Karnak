<?php

$hDecla			= '<!DOCTYPE html>';
$hHTMLOpen	= '<html>';
$hHeadOpen		= '<head>';
$hTitleOpen		= '<title>';

$hTitleClose		= '</title>';
$hHeadClose	= '</head>';
$hBodyOpen		= '<body>';

$hBodyClose	= '</body>';
$hHTMLClose	= '</html>';


$cTitle 				= 'Default Title';
$cBody 			= 'Default Body Content';
$cFileName 		= 'nobiggie';
$cFileExtension = '.php';
$cTotalFile		= $cFileName.$cFileExtension;

$clusterFuckConcatanation = $hDecla.$hHTMLOpen.$hHeadOpen.$hTitleOpen.$cTitle.$hTitleClose.$hHeadClose.$hBodyOpen.$cBody.$hBodyClose.$hHTMLClose;
//echo $clusterFuckConcatanation;

$fh = fopen($cTotalFile, 'w') or die("can't open file");
fwrite($fh, $clusterFuckConcatanation);
fclose($fh);


?>

