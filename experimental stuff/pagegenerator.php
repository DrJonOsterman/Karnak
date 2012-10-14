<?php

//<!DOCTYPE html><html><head><title>Default Title</title></head><body>Default Body Content</body></html>


function generateHTML($title)
{

$hTitle = "Karnak | ".$title;
$elements = array ("<!DOCTYPE html>", "<html>", "<head>", "<title>",$hTitle, "</title>", "</head>", "<body>", "</body>", "</html>"); 

return $elements;

}


$pageArray = generateHTML("Page");
foreach ($pageArray  as $value) {echo $value;}


?>


