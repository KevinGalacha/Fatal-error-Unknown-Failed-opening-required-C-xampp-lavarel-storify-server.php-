Warning: Unknown: failed to open stream: No such file or directory in Unknown on line 0

Fatal error: Unknown: Failed opening required 'C:\xampp\lavarel\storify\server.php' (include_path='C:\xampp\php\PEAR') in Unknown on line 0




I just created a fresh Laravel installation in the sporify(specified directory) via composer i.e composer create-project --prefer-dist laravel/laravel storify  


Did php artisan serve at localhost:8000 and I've got the following errors.

    Warning: Unknown: failed to open stream: No such file or directory in Unknown on line 0

    Fatal error: Unknown: Failed opening required 'C:\xampp\htdocs\LaravelDir\ProjectName\server.php' (include_path='C:\xampp\php\PEAR') in Unknown on line 0

Solution:


Try to disable your anti-virus, this happens to me, it seems avast deletes my server.php.

So I added it to the exception
OR


Just add the server.php file at root of your project. You can add this file from any other laravel project directory or just 
create a file named server.php at root directory of your laravel project and paste the following code:


<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// built-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_once __DIR__.'/public/index.php';

