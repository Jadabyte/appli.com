# Appli

A platform for Thomas More IMD students where they can apply for internships via a motivation letter. Those internships are created by the companies themselves.

## Motivation

We were frustrated because there was no dedicated website in our sector specially made for internship.

## Tech/framework used

* [Laravel](https://laravel.com/)

## Installation

### Local

```
composer install
vagrant up
vagrant ssh
cd code
php artisan migrate:fresh --seed
php artisan storage:link
```

### Envoy

* Run `envoy run staging --branch=<branch>` when a feature is ready and pushed on your personal branch. You use this to test one last time before pushing your code to the master
* Run `envoy run production` when new code was pushed on the master branch

### Docker

* Run `docker build .` to build the image
* Run `docker-compose up -d` to create the containers
* Run `docker-compose exec app php artisan migrate:fresh --seed` to create the database with seeders

## APIs

* [HERE](https://developer.here.com/)
* [GitHub](https://docs.github.com/en/free-pro-team@latest/rest)

## Credits

* **Amber Waltens** - *Project manager* - [wakoodi](https://github.com/wakoodi)
* **Lisa Deroose** - *Frontend* - [r0423168](https://github.com/r0423168)
* **Thibaud Streignart** - *Backend* - [Jadabyte](https://github.com/Jadabyte)
* **Wannes Verboven** - *Backend* - [TERRAKID](https://github.com/TERRAKID)
