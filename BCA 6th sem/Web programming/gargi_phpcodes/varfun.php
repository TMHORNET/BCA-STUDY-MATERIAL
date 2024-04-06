<?php
function abc() {
 echo "In abc()<br />\n";
}
function xyz($arg = '')
{
 echo "In xyz(); argument was '$arg'.<br />\n";
}
// This is a wrapper function around echo
function echoit($string)
{
 echo $string;
}
$func = 'abc';
$func();
$func = 'xyz';
$func('test');
$func = 'echoit';
$func('test'); ?> 