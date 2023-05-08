<?php

$servidorLocal = true;
if ($servidorLocal) {
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', 'root');
    define('DBNAME', 'test');
    define("URL", "senai.prod");
} else {
    define('HOST', 'localhost');
    define('USER', 'bancodedadosdocliente');
    define('PASS', 'senhadobancoOnline');
    define('DBNAME', 'NomedoBanco');
    define("URL", "www.nomedosite.com.br");
}

?>