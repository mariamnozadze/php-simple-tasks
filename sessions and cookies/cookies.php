<?php

/*
Cookie is a piece of data saved in browser and sent to server and back
on every request/response
*/

//set cookies
setcookie('name', 'Mariam', time() + 60);

echo '<pre>';
var_dump($_COOKIE);
echo '</pre>';

//update cookie
setcookie('name', 'Bob', time() + 2 * 60);

//delete cookie
setcookie('name', 'Bob', time() - 1);
