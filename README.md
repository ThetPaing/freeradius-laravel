# [FreeRADIUS](https://freeradius.org)  +  [Laravel](https://laravel.com)


## Introduction

This is a basic implementation of building a Freeradius server (version 3.0) using Laravel 9. The implementation demonstrates how to work with Freeradius SQL tables by using Laravel. An admin panel template is built using [Fliament](https://filamentphp.com) and it demonstrates how to insert **rad** data into tables. This is just a demo version and the purpose of sharing this is to showcase what I have learned. If you don't have a router, you can test the radius server using the following command.

### For Radius Testing

Start Freeradius with debug mode

```cmd
    sudo freeradius -X
```
And test with your user

```cmd
    radtest -t pap youuser@email.com yourradcheckpassowrd '127.0.0.1:1812' 0 'testing123'
```

### For Laravel Testing

See installation from [Laravel](https://laravel.com) Docs.

And migrate and seed database.

```cmd
    php artisan migrate --seed
```

User email - test@example.com

User password - 12345678

## Requirement

To start, you need to first install Freeradius and configure it to work with a MySQL database. Next, clone this repository and connect it to the Radius database. Then, run database migrations and you can begin testing. Good luck!


## License

The freeradius-laravel is open-sourced software licensed under the [MIT license](https://github.com/ThetPaing/freeradius-laravel/blob/main/LICENSE.md).
