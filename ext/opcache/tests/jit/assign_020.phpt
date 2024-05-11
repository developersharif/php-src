--TEST--
JIT ASSIGN: 020
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.file_update_protection=0
;opcache.jit_debug=257
--EXTENSIONS--
opcache
--FILE--
<?php
function foo() {
    $c = array();
    $a = 1;
    $b = 2;
    $c = $a = $b;
    var_dump($c);
}
foo();
?>
--EXPECT--
int(2)
