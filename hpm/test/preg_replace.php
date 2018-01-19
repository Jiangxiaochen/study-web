<?php
$string = 'April 15, 2003';
$pattern = '/(\w+) (\d+), (\d+)/i';
$replacement = '${1}1,$3';
echo preg_replace($pattern, $replacement, $string);

echo "\n";
/////////////////////////////////////////////////////////

$string = 'The quick brown fox jumps over the lazy dog.';
$patterns = array();
$patterns[0] = '/quick/';
$patterns[1] = '/brown/';
$patterns[2] = '/fox/';
$replacements = array();
$replacements[2] = 'bear';
$replacements[1] = 'black';
$replacements[0] = 'slow';
echo preg_replace($patterns, $replacements, $string);

ksort($patterns);
ksort($replacements);
echo preg_replace($patterns, $replacements, $string);

echo "\n";
/////////////////////////////////////////////////////////
$patterns = array ('/(19|20)(\d{2})-(\d{1,2})-(\d{1,2})/',
                   '/^\s*{(\w+)}\s*=/');
$replace = array ('\3/\4/\1\2', '$\1 =');
echo preg_replace($patterns, $replace, '{startDate} = 1999-5-27');
echo "\n";
////////////////////////////////////////////////////////
$str = 'foo   o';
$str = preg_replace('/\s\s+/', ' ', $str);
// 将会改变为'foo o'
echo $str;
echo "\n";
////////////////////////////////////////////////////////

$count = 0;

echo preg_replace(array('/\d/', '/\s/'), '*', 'xp 4 to', -1 , $count);
echo $count; //3
