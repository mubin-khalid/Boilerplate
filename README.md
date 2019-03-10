PHP Boilerplate
==============================

Slim boilerplate to bootstrap applications in no time.

* Application logic will be `/app` directory.
* All configurations file should be under `/config` directory.
* Logs and other files will be under `storage`.
* Extended views can be implemented with 'Slim views'.
* Shared contents can be under `/public` or `/storage`.
* `.htaccess` file in place to remove `.php` extension from the url.
* `SLIM_MODE` from `server.json` is not being used. The one that is being used is from `config/app.php`'s `debug` 
variable.
 
In order to remove `public` from url, `httpd.conf` need to be updated.

Start application with builtin PHP server `php -S 127.0.0.1:{$port} -t public` 



-----------------------------
#### TODO

* Implement loading application configuration from environment file.
* Utility to connect to database.
* unit testing. 

Any comments/issues/improvements are welcomed. :)

Feel free to modify.

Happy coding.
