# Тестовое задание на позицию стажер

### Для выполнения задания использовал: Laravel Valet, DBngin, PHP 8.4, Laravel 11

## Быстрая установка

```sh
$ git clone https://github.com/ramilz/intermediate-task-list.git intermediate-task-list
$ cd intermediate-task-list
$ composer install
$ cp .env.example .env
$ php artisan key:generate
```
После этого настройте конфигурацию базы данных в файле `.env`, а затем запустите команду migrate.
```sh
$ php artisan migrate
```

И если возникнет проблема с Vite manifest not found, нужно выполнить установку и сборку (На Laravel Valet при клонировании проекта возникла данная проблема)

```sh
$ npm install
$ npm run build 
```
