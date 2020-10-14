<?php
//define
define("MAXSIZE", 100);
define("corten",'hah');
define('list',array(
    'pig',
    'dog',
    'cat'
));

echo corten; 
echo MAXSIZE;
echo constant("MAXSIZE"); // same thing as the previous line


interface bar {
    const test = 'foobar!bar';
}

class foo {
    const test = 'foobar!foo';
}

$const = 'test';

var_dump(constant('bar::'. $const)); // string(7) "foobar!"
var_dump(constant('foo::'. $const)); // string(7) "foobar!"

?>