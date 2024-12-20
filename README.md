[livewire-3-from-scratch](https://laracasts.com/series/livewire-3-from-scratch/)

# Commands used

```BASH
laravel new laracasts__Livewire_3_From_Scratch  
 
composer require livewire/livewire  

php artisan make:livewire greeter
```


```PHP
    ...
    wire:model.live.debounce.1000ms="name"
    
    wire:model.fill="greeting"
    ...
```


```BASH
php artisan make:model Greeting -m
```

### 5. Using Lifecycle Hooks
```BASH
php artisan migrate
php artisan db:seed
```

### 6. Building a Search Component
```BASH
php artisan make:model Article -m -f 
```
```BASH
php artisan db:wipe
php artisan migrate
php artisan db:seed
```
```BASH
php artisan make:livewire search
```



### 7. Using Full Page Components
```BASH
php artisan livewire:layout
```
```BASH
php artisan make:livewire show-article
```




### 8. Nesting Components
```BASH
php artisan make:livewire search-results
```

### 11. Iterating Over Collection
```BASH
php artisan make:livewire article-index
```


### 12. Building Admin Dashboard
```BASH
php artisan make:livewire dashboard
```
```BASH
php artisan make:livewire article-list
```


### 13. Using Form Objects
```BASH
php artisan make:livewire create-article
```
```BASH
php artisan make:livewire edit-article
```
```BASH
php artisan livewire:form ArticleForm
```


### 14. Working with Checkboxes and Radios
```BASH
php artisan make:migration add_published_and_notification_to_articles
```

```BASH
php artisan migrate
```
or if error, then directly run the migration file 
```BASH
php artisan migrate --path=/database/migrations/2024_12_03_133845_add_published_and_notification_to_articles.php
```



### 15. Working with Radios and Checkboxes 
```BASH
php artisan migrate:rollback
```

```PHP
    ...
    wire:model.boolean="form.allowNotifications"
    ...
```


alpine:
```PHP
    ...
    <div x-show="$wire.form.allowNotifications">
    ...
```

```BASH
php artisan migrate --path=/database/migrations/2024_12_03_133845_add_published_and_notification_to_articles.php
```


group of checkboxes as an array:
make sure that each checkbox uses the same form-property as its model
```PHP
    ...
    wire:model="form.notifications"
    ...
```


### 16. Working with Dirty States

#### in general
```PHP
    <div wire:dirty>Form data has changed</div>
```
or in reverse
```PHP
    <div wire:dirty.remove>Form data has not changed</div>
```

#### for a specific field
```PHP
    <div wire:dirty wire:target="form.title">Title has changed</div>
```



### 17. Lazy Loading Content
```BASH
php artisan make:livewire published-count
```


### 18. Pagination

```
{{ $articles->links(data: ['scrollTo' => false]) }}
```





### 20. Computed Properties

computed properties cannot be used in form-objects just in the component itself


### 24. Uploading Files

```BASH
php artisan make:migration add_photo_to_articles
```

```BASH
php artisan migrate --path=/database/migrations/2024_12_08_181102_add_photo_to_articles.php
```


### 24. Uploading Files

```BASH
php artisan storage:link
```


### 26. Building Isolating Updates

Lazy Components are Isolated updated by nature


### 28. Applying Transitions

```html
<div wire:transition>
```
```html
<div wire:transition.duration.1000ms>
```
```html
<div wire:transition.in>
```
```html
<div wire:transition.out>
```
```html
<div wire:transition.opacity>
```
```html
<div wire:transition.scale>
```



### 29. Handling Authentication

```BASH
php artisan make:livewire login
```


























<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
