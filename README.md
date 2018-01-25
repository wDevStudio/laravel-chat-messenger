# Laravel Chat Messenger
A Laravel JQuery chat that is just like Facebook chat

## Installation

Laravel Messenger supports Laravel 5.3 and higher.

### Package

Require via composer

```bash
$ composer require wdevstudio/laravel-chat-messenger
```

In `config/app.php` file

```php
'providers' => [
    ...
    wDevStudio\LaravelMessenger\LaravelMessengerServiceProvider::class,
    ...
];

'aliases' => [
    ...
    'wDevStudio' => wDevStudio\LaravelMessenger\Facades\Messenger::class,
    ...
];
```

### Laravel Messenger Files

Then, run `php artisan vendor:publish --tag=messenger --force` to publish the config file, MessageController and assets.

### Laravel Messenger Styles and Scripts

Make sure to add `@yield('css-styles')` in your app/master head section and `@yield('js-scripts')` to your app/master scripts section, or edit section naming in `view/vendor/messenger/messenger.blade.php`

JQuery is required for the messenger script.

### Laravel Messenger Pusher

Add your pusher keys in `config/messenger.php` file.

And voila, you can start conversation with any user by linking to `your-domain.com/messenger/t/{userId}`.

## Customization

### Migrations

To publish and edit messenger migrations, run the publish command with `messenger-migrations` tag.

```bash
$ php artisan vendor:publish --tag messenger-migrations --force
```
### Views

To publish and edit messenger views, run the publish command with `messenger-views` tag.

```bash
$ php artisan vendor:publish --tag messenger-views --force
```

## TODO

* emotions.
* upload photos.
* Attach files.
* Show date before every conversation beginning.
* paginate and load threads.
* Laravel Messenger chatbox.
* Unauthenticated chatbox to message customer service.
