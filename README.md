## Laravel 5 package for ePochta API

### Installation

`composer require pantagruel964/e-pochta`

Publish config

`php artisan vendor:publish --tag=config`
    
### Using

With Facade
```
\Epochta::sendSms('Sender', 'Message', '7926584');
```
or
```
use Pantagruel964\Epochta\Epochta;
...
$epochta = new Epochta();
$epochta->sendSms('Sender', 'Message', '7926584');
$epochta->getUserBalance();
```


### License

This package for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
