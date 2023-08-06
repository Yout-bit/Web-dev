<?php
function setCookieNoReload($key, $value) {
    setcookie($key, $value);
    $_COOKIE[$key] = $value;
    
}
function destroyCookieNoReload($key) {
    setcookie($key, "", time() - 3600);
    $_COOKIE[$key] = null;
}

function setCookiesNoReload($args) {
    foreach ($args as $pair) {
        setCookieNoReload($pair[0], $pair[1]);
    }
}

function destroyCookiesNoReload($args) {
    foreach ($args as $key) {
        destroyCookieNoReload($key);
    }
}
?>