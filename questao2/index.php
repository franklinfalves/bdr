<?php
function redirect()
{
    header("Location: http://www.google.com");
    exit();
}

$verifySessionLoginIn = (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true);
$verifyCookieLoginIn  = (isset($_COOKIE['Loggedin']) && $_COOKIE['Loggedin'] == true);

if ($verifySessionLoginIn || $verifyCookieLoginIn) {
    redirect();
}


