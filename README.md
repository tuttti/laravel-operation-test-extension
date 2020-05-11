
### SetUp

- **1.Add the ServiceProvider in `config/app.php`**

```php
'providers' => [
    /*
     * Package Service Providers...
     */
    Tuttti\LaraOTE\LaravelOperationTestExtensionServiceProvider::class,
]
```


- **2.To publish the config, run the vendor publish command:**

```sh
php artisan vendor:publish --provider="Tuttti\LaraOTE\LaravelOperationTestExtensionServiceProvider"
```


### Usage

- **1.Define interfaces of your page operations.**

`./src/LaraOTESample/PageOperations/Contracts/LoginPageOperationsInterface.php`

```php
namespace Tuttti\LaraOTESample\PageOperations\Contracts;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTE\PageOperations\Contracts\PageOperationsInterface;
use Tuttti\LaraOTE\UiTestModels\Credintials;

interface LoginPageOperationsInterface extends PageOperationsInterface
{
    public function showPage(Browser $browser):void;
    public function login(Browser $browser, Credintials $credintials):void;
}
```

- **2.Implement interfaces.**

`./src/LaraOTESample/PageOperations/LoginPageOperations.php`

```php
namespace Tuttti\LaraOTESample\PageOperations;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTESample\PageOperations\Contracts\LoginPageOperationsInterface;
use Tuttti\LaraOTESample\UiTestModels\Credintials;
use Tuttti\LaraOTE\PageOperations\Factory\PageOperationsFactory;

class LoginPageOperations implements LoginPageOperationsInterface
{
    public function showPage(Browser $browser)
    {
        $browser->visit('/login');
    }
    public function login(Browser $browser, Credintials $credintials)
    {
        $browser->type('login_id', $credintials["email"])
                ->type('password', $credintials["password"])
                ->press('login-button')
                ;
    }
}
```


- **3.Register interfaces and implementations to `PageOperationsFactory`.**

- **4.Use it in your dusk-base browser test.**

```php
$operations = PageOperationsFactory::make(LoginPageOperationsInterface::class);
$operations->showPage($browser);
$operations->login($browser, new Credintials('aaa@aa.bb', 'pass'));
```


