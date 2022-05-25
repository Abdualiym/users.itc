<?php
define("ENV", "DOCKER");
//define("ENV", "OSPANEL");

if (isset($_COOKIE['logged']) and $_COOKIE['logged'] == 1) {
    define("GUEST", false);
} else {
    define("GUEST", true);
}

if (isset($_COOKIE['admin']) and $_COOKIE['admin'] == 1) {
    define("ADMIN", true);
} else {
    define("ADMIN", false);
}

?>