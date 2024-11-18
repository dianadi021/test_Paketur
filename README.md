<h1 align='center'>Welcome! #Fullstack Seklinik 🚀</h1>

# Requirements
> [<img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />![version](https://img.shields.io/badge/version-8.2.12-blue)](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.2.12/xampp-windows-x64-8.2.12-0-VS16-installer.exe/download) </br>
> [<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />![version](https://img.shields.io/badge/version-11.xx-blue)](https://laravel.com/docs/11.x/installation) </br>
> [<img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" />![version](https://img.shields.io/badge/version-8.0.39-blue)](https://dev.mysql.com/downloads/installer/) </br>

# Tools
> [![AlpineJS]](https://alpinejs.dev/essentials/installation) </br>
> [![JQuery UI]](https://jqueryui.com) </br>
> [![MomentJS]](https://momentjs.com) </br>
> [![NotyJS]](https://www.jsdelivr.com/package/npm/noty) </br>
> [![Sweetalert]](https://sweetalert2.github.io) </br>
> [![tostr]](https://www.jsdelivr.com/package/npm/toastr) </br>

# Setup
> Composer Installation
> [![Download]](https://getcomposer.org/download/) </br>
```bash
composer install
```
> Create Database
```
DB_DATABASE=test_Paketur
```
> Laravel Installation
```bash
php artisan key:generate
```
```bash
php artisan migrate:fresh --seed
```
> Setup .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=test_Paketur
DB_USERNAME=root
DB_PASSWORD=
```

# Running Development
> Laravel
```bash
php artisan serve
```