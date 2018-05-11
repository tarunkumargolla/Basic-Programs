<?php
$parser= xml_parser_create();
function start($parser,$elementname)
{
    echo "start".$elementname,"<br>";
}
function stop($parser,$elementname)
{
    echo "stop".$elementname,"<br>";
}
function char($parser,$data)
{
    echo $data,"<br>";
}
xml_set_element_handler($parser,"start","stop");
xml_set_character_data_handler($parser,"char");
$fn=fopen("sample1.xml","r");
while($data=fread($fn,1024))
{
    xml_parse($parser, $data);
}
xml_parser_free($parser);
?>