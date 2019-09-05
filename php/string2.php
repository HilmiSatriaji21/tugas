<?php

$str = <<<EOD
Example of string
Spanning multiple lines
using heredoc syntax.
EOD;

/* More Complex Example, With Variables. */
class foo
{
    var $foo;
    var $bar;

    function foo(){
        $this->foo = 'foo';
        $this->bar = array('bar1','bar2','bar3');
    }
}
$foo = new foo();
$name = 'Achmatim';

echo <<<EOT
<u>$str</u><br>
My Name Is "<b> $name <b/>". I am Printing Some <b>$foo->foo</b>.
Now, I am Printing Some <b>{foo->bar[1]}</b>.
This Should Print a Capital 'A': \x41
EOT;
?>
