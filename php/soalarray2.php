<?php

$arrdata = array ("Ujang", "XI RPL 1", "Bandung",
                  "Mahmud", "XI RPL 2", "Jakarta",
                  "Ucok", "XI RPL 3", "Singapore");
echo "<pre>";
print_r ($arrdata);
echo "<hr></pre>";

$mode = end($arrdata);
echo $mode."<hr><br>";

$mode = prev($arrdata);
echo $mode."<hr><br>";

$mode = key($arrdata);
echo $mode."<hr><br>";

$mode = reset($arrdata);
echo $mode."<hr><br>";

$mode = next($arrdata);
echo $mode."<hr><br>";
?>