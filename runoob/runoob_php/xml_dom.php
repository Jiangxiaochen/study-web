<?php

$xml_doc = new DOMDocument();
$xml_doc->load("0.xml");

$x = $xml_doc->documentElement;

foreach ($x->childNodes as $key => $value) {
	echo $value->nodeName, " = ", $value->nodeValue, "<br>";
}