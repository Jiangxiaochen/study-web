<?php
$str = <<<eod
example of string
spanning multiple lines
using heredoc syntax.
eod;

class foo
{
    var $foo;
    var $bar;
    function foo()
    {
        $this->foo = 'foo';
        $this->bar = array('b1','b2','b3');
    }
}

$foo = new foo();
$name = 'myName';

echo <<<eot
my name is "$name". I am printing some $foo->foo.
Now, I am printing som {$foo->bar[1]}.
this should print a capital 'a': \x41
eot;

