<?php
$it = new ArrayIterator([42]);
foreach ($it as $i) {}
var_dump($it->current());

$it2 = (new ArrayObject([42]))->getIterator();
foreach($it2 as $i){}
var_dump($it2->current());
