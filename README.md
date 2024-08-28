# Minimalist MVC PHP Project

This project is designed to help you understand the basics of the Model-View-Controller (MVC) architecture using PHP. It is a minimalist implementation to keep things simple and easy to follow.

## Configuration

### config.php file
The given config-example.php file provide a template to use for the project
Edit the config-example.php file providing your credentials to the database and other data according to your project
Rename config-example.php file to config.php

Example config.php file

```php
<?php

define('DB_HOST','localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'book-store');
define('DB_PORT', '3306');
define('BASE_URL', 'http://localhost/book-store/public/');

?>
```
### .htaccess File

The `.htaccess` file is used to configure the Apache web server to handle URL routing for the MVC architecture.
.htaccess file is located inside the public directory

Make sure you have uncommented the following line in Apache httpd.conf file

```apache_conf
LoadModule rewrite_module modules/mod_rewrite.so
```

Example config.php file

```apache_conf
RewriteEngine On
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME} !-f
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
```

## Database Configuration
To set up the database of this project, you need to import the bookDB.sql file into your MySQL database.

## Project Overview
This project aims to learn how to create a minimalist and simplest MVC architecture PHP project. The goal is to understand how MVC works by breaking down the components into:

Model: Manages the data and business logic.
View: Handles the presentation layer.
Controller: Manages the communication between the Model and the View.

By following this project, you will gain a fundamental understanding of how to structure your PHP applications using the MVC pattern, making your code more organized and maintainable.

Happy coding!