<?php

define("COMPANY", "Hello");
runkit_constant_redefine("COMPANY", "Hello 2");

echo "hello".COMPANY;

?>