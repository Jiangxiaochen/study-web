<?php

//Initialize the XML parser
$parser=xml_parser_create();

function start($parser, $element_name, $element_data){
	switch ($element_name) {
		case "NOTE":
			echo "--note--<br>";
			break;
		case "TO":
			echo "to: ";
			break;
		case "FROM":
			echo "from: ";
			break;
		case "HEADING":
			echo "heading: ";
			break;
		case "BODY":
			echo "message: ";
			break;
		default:
			echo "default: ";
			break;
	}
}

function stop($parser, $element_name){
	echo "<br>";
}

function char($parser, $data){
	echo $data;
}

xml_set_element_handler($parser, "start", "stop");
xml_set_character_data_handler($parser, "char");

$fp = fopen("0.xml", "r");

while($data = fread($fp, 4096)){
	xml_parse($parser, $data,feof($fp)) or
	die(sprintf("xml error: %s at line %d", xml_error_string(xml_get_error_code($parser)),xml_get_current_line_number($parser)));
}

xml_parser_free($parser);