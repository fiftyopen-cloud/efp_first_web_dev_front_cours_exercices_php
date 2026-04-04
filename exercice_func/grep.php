<?php


$value = "https://www.php.net/profil/32";
$pattern = "/^https:\/\/www\.php\.net\/[a-z0-9\/]+$/";

if (preg_match($pattern, $value)) {
    echo "The URL is valid.";
} else {
    echo "The URL is invalid.";
}

echo "<br>";

var_dump(explode("/", $value));

$routes = [
    ["get", "/home", "HomeController@index"],
    ["get", "/about", "AboutController@index"],
    ["get", "/contact", "ContactController@index"],
    ["get", "/products", "ProductsController@index"],
    ["get", "/services", "ServicesController@index"]
];

?>