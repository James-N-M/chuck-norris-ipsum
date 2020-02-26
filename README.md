[![Latest Version on Packagist](https://img.shields.io/packagist/v/james-n-m/chuck-norris-ipsum.svg?style=flat-square)](https://packagist.org/packages/james-n-m/chuck-norris-ipsum)
[![Build Status](https://img.shields.io/travis/james-n-m/chuck-norris-ipsum/master.svg?style=flat-square)](https://travis-ci.org/james-n-m/chuck-norris-ipsum)
[![Quality Score](https://img.shields.io/scrutinizer/g/james-n-m/chuck-norris-ipsum.svg?style=flat-square)](https://scrutinizer-ci.com/g/james-n-m/chuck-norris-ipsum)
[![Total Downloads](https://img.shields.io/packagist/dt/james-n-m/chuck-norris-ipsum.svg?style=flat-square)](https://packagist.org/packages/james-n-m/chuck-norris-ipsum)

<p align="center">
    <img src="https://user-images.githubusercontent.com/6562688/75273524-057ac480-57cf-11ea-9f9b-81c765d69d91.png" />
    <br /><br />
    <a href="#" target="_blank">Chuck Norris</a> inspired lorem ipsum like placeholder text generator.
</p>

## Installation

You can install the package via composer:

```bash
composer require james-n-m/chuck-norris-ipsum
```

## Basic Usage
The chuck_norris() function returns an object you can chain methods onto, the ipsum() method acts as the trigger.
``` php
<div class="content">
    <div>
        {{ chuck_norris()->jokes()->ipsum() }}
    </div>
</div>
```

The following would produce a couple jokes, a fact, then shuffle all the words for loreum ipsum like text
``` php
<div class="content">
    <div>
        {{ chuck_norris()->jokes()->fact()->shuffle()ipsum() }}
    </div>
</div>
```

You could also use it in your controllers and other parts of your application
```php
namespace App\Http\Controllers;

use JamesNM\ChuckNorrisIpsum\ChuckNorrisIpsum;

class WelcomeController extends Controller
{
    public function index()
    {
        $chuckNorris = new ChuckNorrisIpsum(); 
        
        return view('welcome', compact('chuckNorris'));
    }
}

```
### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Credits

- [James Moore](https://github.com/james-n-m)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.