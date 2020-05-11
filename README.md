
### Usage

- **1.Define your page operations.**

`./src/BrowserTest/PageOperations/LoginPageOperations.php`

```php
namespace Tuttti\LaraOTE\PageOperations;

use Laravel\Dusk\Browser;
use Tuttti\LaraOTE\PageOperations\Contracts\LoginPageOperationsInterface;
use Tuttti\LaraOTE\UiTestModels\Credintials;
use Tuttti\LaraOTE\PageOperations\Factory\PageOperationsFactory;

class LoginPageOperations implements LoginPageOperationsInterface
{
    public function showLoginPage(Browser $browser)
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


- **2.Use it in your dusk-base browser test.**

```php
$operations = PageOperationsFactory::make(LoginPageOperationsInterface::class);
$operations->showLoginPage($browser);
$operations->login($browser, new Credintials('aaa@aa.bb', 'pass'));
```


