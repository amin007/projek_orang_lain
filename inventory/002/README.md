# projek_orang_lain - inventory
Stock Management System

## ulasan
Koding yang agak kompleks juga. tetapi ada kelemahan bab header untuk bawa lokasi semasa
login dan logout

## rujuk fail ini
fail                | line code
------------------- | :----------:
php_action/core.php | 10
index.php           | 7 and 42
logout.php          | 11

kod asal
```php
header('location: http://localhost:9080/stock/index.php');
```

kod baru
```php
header('location:' . URL . 'index.php');
````

lepas itu pergi ke fail php_action/db_connect.php dan tambah koding baru pada line 18

```php
define('URL', dirname('http://' . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']) . '/');
define('LOKASI', $_SERVER['SERVER_NAME']);
```


## sumber asal koding
* [Youtube](https://www.youtube.com/watch?v=xjsUiLrgIks&t=101s)
* [Blog](http://codersfolder.com/2016/07/stock-management-system)

___
# Php Version

```php
//phpinfo();
//echo PHPVERSION() . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION . '.' . PHP_RELEASE_VERSION . '<br>';
echo '<pre>'; print_r($_SERVER); echo '</pre>';
```
___
# Standard
* http://www.php-fig.org/psr/psr-4/

___
# Sumber ilham dari 
* http://jream.com/lab
* https://www.php-fig.org

___
# Sumber ilham kawan-kawan
* Programming
  * [PHP Releases](https://windows.php.net/downloads/releases)
  * [Laragon](https://laragon.org)
  * [Learn-Php-For-Wordpress](https://code.tutsplus.com/courses/learn-php-for-wordpress/lessons/php-in-the-loop)
  * [PHP Codeingiter](https://codeigniter.com)
  * [PHP Cakephp](https://cakephp.org)
  * [PHP Laravel](https://laravel.com)
* Stylesheet
  * [Bootstrap](http://getbootstrap.com)
  * [Bootstrap.Themes](http://bootstrap.themes.guide)
  * [AdminLTE](https://adminlte.io/themes/AdminLTE)
  * [animate.css](https://daneden.github.io/animate.css)
  * [Sweet Alert](http://t4t5.github.io/sweetalert)
  * [FontAwesome](http://fortawesome.github.io/Font-Awesome)
* Javascript
  * [jQuery](http://jquery.com)
  * [jQuery.Form](http://malsup.com/jquery/form)
  * [backstretch](http://srobbin.com/jquery-plugins/backstretch)
* Gambar Percuma
  * [7-themes](http://7-themes.com)
  * [Pexels](https://pexels.com)
  * [Pixabay](https://pixabay.com)
  * [Unslpash](https://unsplash.com)
* Lain-lain
  * [markdown-cheatsheet](https://guides.github.com/pdfs/markdown-cheatsheet-online.pdf)
